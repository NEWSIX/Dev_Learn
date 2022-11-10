void main() async {
  print(await loginUser());
  print("NEXT TO");
}

Future<String> loginUser() async {
  var user = await getUserFromDatabase();
  return user;
}

Future<String> getUserFromDatabase() {
  return Future.delayed(Duration(seconds: 10), (() => "DATABASE USERNAME"));
}
