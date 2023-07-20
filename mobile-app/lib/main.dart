import 'package:flutter/material.dart';
import 'package:qridepay/QrideSplashScreen.dart';
import 'package:qridepay/configs/palette.dart';
import 'package:qridepay/screens/home_screen.dart';
import 'package:qridepay/screens/scan_screen.dart';
import 'package:qridepay/screens/sign_in.dart';
import 'package:qridepay/screens/sign_up.dart';

void main(List<String> args) {
  runApp(const QRidePay());
}

class QRidePay extends StatelessWidget {
  const QRidePay({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      theme: ThemeData(primarySwatch: Palette.qridepayTheme),
      title: "QRIDE PAY",
      home: QRidePaySplashScreen(),
      routes: {
        SignInScreen.routeName: (ctx) => const SignInScreen(),
        SignUpScreen.routeName: (ctx) => const SignUpScreen(),
        HomeScreen.routeName: (ctx) => const HomeScreen(),
        QRScan.routeName: (ctx) => const QRScan(),
      },
    );
  }
}
