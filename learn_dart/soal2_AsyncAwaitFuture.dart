Future delayedPrint(int seconds, String massage) {
  final duration = Duration(seconds: seconds);
  return Future.delayed(duration).then((value) => massage);
}

void main(List<String> args) {
  print("Life");
  delayedPrint(2, "never flat").then((kedua) {
    print(kedua);
  });
  print("is");
}
