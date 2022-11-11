import 'package:basicbutorial_flutter/MoneyBox.dart';
import 'package:day_night_switcher/day_night_switcher.dart';
import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'models/post.dart';

void main() {
  var app = MyApp();
  runApp(app);
}

class _DayNightSwitcher extends StatefulWidget {
  @override
  State<StatefulWidget> createState() => _MyHomePageState();
}

class MyApp extends StatelessWidget {
  bool isDarkModeEnabled = false;
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: "NITIGON",
      home: MyHomePage(),
      theme: ThemeData(primarySwatch: Colors.lightGreen),
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
  bool isDarkModeEnabled = false;

  List<Post>? posts;
  var isLoaded = false;

  @override
  void initState() {
    // TODO: implement initState
    super.initState();

    //Fetch data
    getData();
  }

  Future<void> getData() async {
    //https: //min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,ETH&tsyms=USD
    var url = Uri.parse(
        'https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,ETH&tsyms=USD');
    var response = await http.get(url);

    print(response.body);
  }

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      theme: ThemeData.light(),
      darkTheme: ThemeData.dark().copyWith(
        appBarTheme: AppBarTheme(color: Color.fromARGB(255, 63, 115, 38)),
        scaffoldBackgroundColor: const Color(0xFF15202B),
      ),
      themeMode: isDarkModeEnabled ? ThemeMode.dark : ThemeMode.light,
      home: Scaffold(
        appBar: AppBar(title: Text('NEWSIX')),
        body: SizedBox.expand(
          child: Column(
            // crossAxisAlignment: CrossAxisAlignment.center,
            // mainAxisSize: MainAxisSize.max,
            // mainAxisAlignment: MainAxisAlignment.center,
            children: [
              DayNightSwitcher(
                isDarkModeEnabled: isDarkModeEnabled,
                onStateChanged: onStateChanged,
              ),
              MoneyBox("Name", "Market Cap", "Price",
                  Color.fromARGB(255, 212, 116, 110), 100),
              SizedBox(height: 5),
              MoneyBox("ETH", "639 B", "3,200", Colors.black, 80),
              SizedBox(height: 5),
              MoneyBox("BTC", "1.8 B", "64,210", Colors.black, 80)
            ],
          ),
        ),
      ),
    );
  }

  /// Called when the state (day / night) has changed.
  void onStateChanged(bool isDarkModeEnabled) {
    setState(() {
      this.isDarkModeEnabled = isDarkModeEnabled;
    });
  }
}
