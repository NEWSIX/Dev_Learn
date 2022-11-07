import 'package:flutter/material.dart';

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

  @override
  void initState() {
    super.initState();
    _controller = AnimationController(vsync: this);
  }

  @override
  void dispose() {
    _controller.dispose();
    super.dispose();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(
          title: Text("NEWSIX Module1"),
        ),
        body: Center(
            child: Column(
          mainAxisAlignment: MainAxisAlignment.spaceAround,
          children: [
            Text("data", style: TextStyle(fontSize: 46, color: Colors.red)),
            Image(
                image: NetworkImage(
                    "https://avatars.githubusercontent.com/u/60424171?v=4")),
            Text("data",
                style: TextStyle(
                    fontSize: 30, color: Color.fromARGB(255, 68, 184, 99))),
          ],
        )));
  }
}
