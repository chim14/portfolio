import qrcode
from PIL import Image

# Step 1: Data Link
link = "https://example.com"  # Replace with your link

# Step 2: Create QR Code
qr = qrcode.QRCode(
    version=4,
    error_correction=qrcode.constants.ERROR_CORRECT_H,  # high correction to support logo
    box_size=10,
    border=4,
)
qr.add_data(link)
qr.make(fit=True)

qr_background_color = "white"
qr_img = qr.make_image(fill_color="black", back_color=qr_background_color).convert("RGB")

# Step 3: Add Logo in the Center
logo_path = r"C:\Users\user\.vscode\portfolio\learn_python\logo.png"  # Replace with your logo path (small size, e.g. 100x100 px) C:\Users\user\.vscode\portfolio\learn_python
logo = Image.open(logo_path)

# QR size
qr_width, qr_height = qr_img.size

# Resize logo proportionally
logo_size = int(qr_width * 0.25)  # max 25% of QR
logo = logo.resize((logo_size, logo_size), Image.LANCZOS)

# Add spacing around the logo
spacing = 10
new_logo_size = (logo_size + 2*spacing, logo_size + 2*spacing)

# Create a background box with the same color as the QR code background
background = Image.new("RGB", new_logo_size, color=qr_background_color)

# Paste logo in the middle of the background
background.paste(logo, (spacing, spacing), mask=logo if logo.mode=="RGBA" else None)

# Position of the logo in the center of the QR
pos = ((qr_width - new_logo_size[0]) // 2, (qr_height - new_logo_size[1]) // 2)

# Paste the background (with the logo inside) on the QR
qr_img.paste(background, pos)

# Step 4: Save the QR Code with the logo
qr_img.save("qr_with_logo.png")

# by: chim
