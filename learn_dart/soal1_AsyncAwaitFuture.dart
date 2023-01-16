void main(List<String> args) async {
  var h = await Human();

  print("Luffy");
  print("zoro");
  print("killer");
  h.getData();
  print(h.name);
}

class Human {
  String name = "nama character one piece";

  Future<void> getData() async {
    name = "chim";
    print("get data [done]");
  }
}
