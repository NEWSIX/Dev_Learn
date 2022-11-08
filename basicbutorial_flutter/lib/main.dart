import 'package:flutter/material.dart';
import 'FoodMenu.dart';

void main() {
  var app = MyApp();
  runApp(app);
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: "NITIGON",
      home: MyHomePage(),
      theme: ThemeData(primarySwatch: Colors.red),
    );
  }
}

class MyHomePage extends StatefulWidget {
  const MyHomePage({super.key});

  @override
  State<MyHomePage> createState() => _MyHomePageState();
}

class _MyHomePageState extends State<MyHomePage>
    with SingleTickerProviderStateMixin {
  late AnimationController _controller;

  List<FoodMenu> menu = [
    FoodMenu("Pizza", "299", "assets/images/pizza.jpeg"),
    FoodMenu("Hamburger", "89", "assets/images/hamburger.jpeg"),
    FoodMenu("Fried Chicken", "199", "assets/images/Fried Chicken.webp"),
    FoodMenu("Spaghetti", "139", "assets/images/spaghetti.jpeg")
  ];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(
          title: Text("NEWSIX Module1"),
        ),
        body: ListView.builder(
            itemCount: menu.length,
            itemBuilder: (BuildContext context, int index) {
              FoodMenu food = menu[index];
              return ListTile(
                leading: Image.asset(food.img),
                title: Text("Menu ${index + 1} : " + food.name,
                    style: TextStyle(color: Colors.blue, fontSize: 20)),
                subtitle: Text(
                  "Price :" + food.price,
                  style: TextStyle(color: Colors.green, fontSize: 20),
                ),
                onTap: () {
                  print("Tap :" + food.name);
                },
              );
            }));
  }
}
