import 'package:flutter/material.dart';
import 'package:qridepay/screens/welcome_screen.dart';
import 'package:splashscreen/splashscreen.dart';

class QRidePaySplashScreen extends StatelessWidget {
  const QRidePaySplashScreen({super.key});

  @override
  Widget build(BuildContext context) {
    return SplashScreen(
      seconds: 5,
      navigateAfterSeconds: const WelcomeScreen(),
      image: Image.asset('assets/images/logo.png'),
      backgroundColor: Colors.deepPurple,
      photoSize: 150.0,
      loaderColor: Colors.deepPurpleAccent,
      loadingText: Text('V 1.0'),
      title: Text(
        'QRIDE PAY',
        style: TextStyle(
          fontSize: 24,
          fontWeight: FontWeight.w700,
          color: Colors.white,
        ),
      ),
    );
  }
}
