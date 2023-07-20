import 'package:flutter/material.dart';
import 'package:qridepay/screens/home_screen.dart';

class SignUpScreen extends StatefulWidget {
  static const routeName = "/userSignUp";

  const SignUpScreen({super.key});

  @override
  State<SignUpScreen> createState() => _SignUpScreenState();
}

class _SignUpScreenState extends State<SignUpScreen> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("Sign Up"),
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
                    Text('Sign Up',
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
                  mainAxisAlignment: MainAxisAlignment.center,
                  crossAxisAlignment: CrossAxisAlignment.stretch,
                  children: [
                    TextField(
                      decoration: InputDecoration(
                        labelText: 'First Name',
                        hintText: 'Enter your first name',
                        prefixIcon: Icon(Icons.person),
                      ),
                    ),
                    SizedBox(height: 16),
                    TextField(
                      decoration: InputDecoration(
                        labelText: 'Last Name',
                        hintText: 'Enter your last name',
                        prefixIcon: Icon(Icons.person),
                      ),
                    ),
                    SizedBox(height: 16),
                    TextField(
                      decoration: InputDecoration(
                        labelText: 'Email',
                        hintText: 'Enter your email',
                        prefixIcon: Icon(Icons.email),
                      ),
                    ),
                    SizedBox(height: 16),
                    TextField(
                      obscureText: true,
                      decoration: InputDecoration(
                        labelText: 'Password',
                        hintText: 'Enter your password',
                        prefixIcon: Icon(Icons.lock),
                      ),
                    ),
                    SizedBox(height: 16),
                    TextField(
                      obscureText: true,
                      decoration: InputDecoration(
                        labelText: 'Confirm Password',
                        hintText: 'Confirm your password',
                        prefixIcon: Icon(Icons.lock),
                      ),
                    ),
                    SizedBox(height: 24),
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
                child: Text('SIGN UP'),
              ),
            ],
          ),
        ),
      ),
    );
  }
}
