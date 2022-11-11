import 'package:flutter/src/widgets/container.dart';
import 'package:flutter/src/widgets/framework.dart';
import 'package:flutter/material.dart';
import 'package:intl/intl.dart';

class MoneyBox extends StatelessWidget {
  String Name;
  String Market_Cap;
  String Price;
  Color color;
  double size;

  MoneyBox(this.Name, this.Market_Cap, this.Price, this.color, this.size);

  @override
  Widget build(BuildContext context) {
    return Container(
      padding: const EdgeInsets.all(20),
      height: size,
      decoration:
          BoxDecoration(borderRadius: BorderRadius.circular(20), color: color),
      child: Row(
        crossAxisAlignment: CrossAxisAlignment.center,
        children: [
          Expanded(
            child: Text(
              Name,
              style: TextStyle(
                  fontSize: 20,
                  color: Colors.white,
                  fontWeight: FontWeight.bold),
              textAlign: TextAlign.left,
            ),
          ),
          // Expanded(
          //   child: Text(
          //     Market_Cap,
          //     style: TextStyle(
          //         fontSize: 20,
          //         color: Colors.white,
          //         fontWeight: FontWeight.bold),
          //     textAlign: TextAlign.center,
          //   ),
          // ),
          Expanded(
            child: Text(
              //'${NumberFormat("#,###").format(Price)}',
              Price,
              style: TextStyle(
                  fontSize: 20,
                  color: Colors.white,
                  fontWeight: FontWeight.bold),
              textAlign: TextAlign.right,
            ),
          )
        ],
      ),
    );
  }
}
