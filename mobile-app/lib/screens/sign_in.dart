import 'package:flutter/material.dart';
import 'package:flutter/services.dart';
import 'package:qridepay/screens/home_screen.dart';

class SignInScreen extends StatefulWidget {
  static const routeName = "/userSignIn";

  const SignInScreen({super.key});

  @override
  State<SignInScreen> createState() => _SignInScreenState();
}

class _SignInScreenState extends State<SignInScreen> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("Sign In"),
      ),
      body: SingleChildScrollView(
        child: Container(
          padding: EdgeInsets.all(16), // Add some padding to the container
          child: Column(
            children: [
              Container(
                child: Column(
                  children: [
                    Image.asset(
                      'assets/images/logo.png',
                      height: 250,
                      width: 250,
                    ),
                    Text('QRide Pay',
                        style: TextStyle(
                            fontSize: 28, fontWeight: FontWeight.bold)),
                    SizedBox(height: 15),
                    Text('Sign In',
                        style: TextStyle(
                          fontSize: 24,
                          color: Theme.of(context).primaryColor,
                          fontWeight: FontWeight.w700,
                        )),
                  ],
                ),
              ),
              SizedBox(
                  height:
                      20), // Add some space between the logo and the login form
              Container(
                child: Column(
                  children: [
                    // Login Form Input Fields
                    TextField(
                      decoration: InputDecoration(
                        labelText: 'Email',
                        hintText: 'Enter your email',
                        prefixIcon: Icon(Icons.email),
                      ),
                    ),
                    SizedBox(
                        height:
                            16), // Add some space between email and password fields
                    TextField(
                      obscureText: true,
                      decoration: InputDecoration(
                        labelText: 'Password',
                        hintText: 'Enter your password',
                        prefixIcon: Icon(Icons.lock),
                      ),
                    ),
                  ],
                ),
              ),
              SizedBox(
                  height:
                      40), // Add some space between the form and the login button
              ElevatedButton(
                onPressed: () {
                  Navigator.of(context).pushNamed(HomeScreen.routeName);
                },
                style: ElevatedButton.styleFrom(
                  minimumSize: Size(double.infinity,
                      50), // Set the minimum width and height of the button
                ),
                child: Text('SIGN IN'),
              ),
            ],
          ),
        ),
      ),
    );
  }
}
