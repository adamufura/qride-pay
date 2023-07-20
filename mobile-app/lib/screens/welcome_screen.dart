import 'package:flutter/material.dart';
import 'package:qridepay/configs/SizeConfig.dart';
import 'package:qridepay/screens/sign_in.dart';
import 'package:qridepay/screens/sign_up.dart';

class WelcomeScreen extends StatelessWidget {
  const WelcomeScreen({super.key});

  @override
  Widget build(BuildContext context) {
    SizeConfig().init(context);

    return Scaffold(
      body: Column(
        children: [
          Expanded(
            child: Container(
              color: Colors.white,
              child: Center(
                child: Image.asset(
                  'assets/images/background.jpeg',
                  fit: BoxFit.fitHeight,
                ),
              ),
            ),
          ),
          Container(
            width: double.infinity,
            height: SizeConfig.safeBlockVertical * 60,
            decoration: BoxDecoration(
              color: Theme.of(context).primaryColor,
              borderRadius: BorderRadius.vertical(top: Radius.circular(60.0)),
            ),
            child: Column(
              mainAxisAlignment: MainAxisAlignment.spaceEvenly,
              children: [
                Expanded(
                  flex: 2,
                  child: Container(
                    child: Column(
                      children: [
                        Image.asset(
                          'assets/images/logo.png',
                          height: 100, // Set the height of the image
                          width: 100, // Set the width of the image
                        ),
                        Text(
                          'WELCOME TO',
                          style: TextStyle(fontSize: 22, color: Colors.white),
                        ),
                        Text(
                          'QRIDE PAY',
                          style: TextStyle(fontSize: 20, color: Colors.black),
                        )
                      ],
                    ),
                  ),
                ),
                Expanded(
                  child: Container(
                    child: Column(
                      crossAxisAlignment: CrossAxisAlignment.stretch,
                      children: [
                        Padding(
                          padding: const EdgeInsets.symmetric(horizontal: 16),
                          child: ElevatedButton(
                            style: ElevatedButton.styleFrom(
                              primary: Colors
                                  .white, // Set the background color of the button here
                              padding: EdgeInsets.symmetric(
                                  horizontal: 24,
                                  vertical:
                                      12), // Set the padding of the ElevatedButton
                            ),
                            onPressed: () {
                              Navigator.of(context)
                                  .pushNamed(SignInScreen.routeName);
                            },
                            child: Text(
                              'Sign In',
                              style: TextStyle(
                                  fontSize: 24,
                                  color: Theme.of(context).primaryColor),
                            ),
                          ),
                        ),
                        SizedBox(
                          height: 15,
                        ),
                        Padding(
                          padding: const EdgeInsets.symmetric(horizontal: 16),
                          child: ElevatedButton(
                            style: ElevatedButton.styleFrom(
                              primary: Colors
                                  .white, // Set the background color of the button here
                              padding: EdgeInsets.symmetric(
                                  horizontal: 24,
                                  vertical:
                                      12), // Set the padding of the ElevatedButton
                            ),
                            onPressed: () {
                              Navigator.of(context)
                                  .pushNamed(SignUpScreen.routeName);
                            },
                            child: Text(
                              'Sign Up',
                              style: TextStyle(
                                  fontSize: 24,
                                  color: Theme.of(context).primaryColor),
                            ),
                          ),
                        ),
                      ],
                    ),
                  ),
                ),
                Padding(
                  padding: const EdgeInsets.symmetric(horizontal: 16),
                  child: Text(
                    'V 1.0',
                    style: TextStyle(fontSize: 18, color: Colors.white),
                  ),
                )
              ],
            ),
          ),
        ],
      ),
    );
  }
}
