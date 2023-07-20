import 'package:flutter/material.dart';
import 'package:qridepay/screens/scan_screen.dart';

class HomeScreen extends StatefulWidget {
  static const routeName = "/homeScreen";

  const HomeScreen({super.key});

  @override
  State<HomeScreen> createState() => _HomeScreenState();
}

class _HomeScreenState extends State<HomeScreen> {
  bool showBalanceInNaira = true;
  double availableBalance = 1490.0;

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        leading: Image.asset(
          'assets/images/logo.png',
          height: 150,
        ),
        title: Text("QRide Pay"),
        actions: [
          PopupMenuButton<String>(
            onSelected: (value) {
              // Handle the selected menu item here
              if (value == 'settings') {
              } else if (value == 'signOut') {}
            },
            itemBuilder: (BuildContext context) {
              return [
                PopupMenuItem<String>(
                  value: 'settings',
                  child: ListTile(
                    leading: Icon(Icons.settings),
                    title: Text('Settings'),
                  ),
                ),
                PopupMenuItem<String>(
                  value: 'signOut',
                  child: ListTile(
                    leading: Icon(Icons.logout),
                    title: Text('Sign Out'),
                  ),
                ),
              ];
            },
          ),
        ],
      ),
      body: Column(
        crossAxisAlignment: CrossAxisAlignment.stretch,
        children: [
          Expanded(
            child: Column(
              crossAxisAlignment: CrossAxisAlignment.stretch,
              children: [
                Row(
                  mainAxisAlignment: MainAxisAlignment.spaceBetween,
                  children: [
                    Row(
                      children: [
                        Padding(
                          padding: const EdgeInsets.all(8.0),
                          child: CircleAvatar(
                            radius: 30,
                            backgroundImage:
                                AssetImage('assets/images/avatar.png'),
                          ),
                        ),
                        SizedBox(width: 8),
                        Text(
                          'Hi 👋, Abubakar Suleiman',
                          style: TextStyle(fontSize: 22),
                        ),
                      ],
                    ),
                    IconButton(
                      onPressed: () {},
                      icon: Icon(Icons.notifications_outlined, size: 40),
                    ),
                  ],
                ),
                Spacer(), // This will create space between the first row and the second row
              ],
            ),
          ),

          /// card
          Card(
            color: Theme.of(context)
                .primaryColor, // Set the card background color to blue
            elevation: 5,
            shape: RoundedRectangleBorder(
              borderRadius: BorderRadius.circular(16.0),
            ),
            child: Padding(
              padding: const EdgeInsets.all(16.0),
              child: Column(
                mainAxisSize: MainAxisSize.min,
                children: [
                  Text(
                    'Available Balance',
                    style: TextStyle(
                      fontSize: 18,
                      color: Colors.white,
                    ),
                  ),
                  SizedBox(height: 8),
                  Text(
                    showBalanceInNaira
                        ? '₦ ${availableBalance.toStringAsFixed(2)}'
                        : '****', // Display the balance or '****' based on the switch value
                    style: TextStyle(
                      fontSize: 24,
                      color: Colors.white,
                    ),
                  ),
                  SizedBox(height: 16),
                  Row(
                    mainAxisAlignment: MainAxisAlignment.center,
                    children: [
                      Text(
                        'Show Balance in Naira',
                        style: TextStyle(color: Colors.white),
                      ),
                      SizedBox(width: 8),
                      Switch(
                        value: showBalanceInNaira,
                        onChanged: (value) {
                          setState(() {
                            showBalanceInNaira = value;
                          });
                        },
                      ),
                    ],
                  ),
                ],
              ),
            ),
          ),

          // white card
          Padding(
            padding: const EdgeInsets.all(16.0),
            child: Card(
              color: Colors
                  .white, // Replace with Colors.white for a white background
              elevation: 8,
              shape: RoundedRectangleBorder(
                borderRadius: BorderRadius.circular(16.0),
              ),
              child: Padding(
                padding: const EdgeInsets.all(16.0),
                child: Column(
                  mainAxisSize: MainAxisSize.min,
                  children: [
                    Row(
                      mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                      children: [
                        GestureDetector(
                          onTap: () {
                            _showPopupDialog(context);
                          },
                          child: IconAndText(
                            icon: Icons.add_circle,
                            text: 'Add Airtime',
                          ),
                        ),
                        IconAndText(
                          icon: Icons.account_balance_wallet,
                          text: 'My Wallet',
                        ),
                        IconAndText(
                          icon: Icons.qr_code_scanner,
                          text: 'QR Scan',
                        ),
                      ],
                    ),
                    SizedBox(height: 16),
                    Row(
                      mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                      children: [
                        IconAndText(
                          icon: Icons.history,
                          text: 'Transaction History',
                        ),
                        IconAndText(
                          icon: Icons.directions_car,
                          text: 'Trips',
                        ),
                        IconAndText(
                          icon: Icons.settings,
                          text: 'Account Settings',
                        ),
                      ],
                    ),
                  ],
                ),
              ),
            ),
          ),

          //
          Expanded(
            flex: 3,
            child: Container(
              child: SingleChildScrollView(
                child: Column(
                  children: [
                    SizedBox(height: 16),
                    Card(
                      elevation: 3,
                      child: ListTile(
                        leading: CircleAvatar(
                          backgroundColor: Colors.red,
                          child: Icon(Icons.directions_car),
                        ),
                        title: Text('Ulul Al-Bab to School Gate'),
                        subtitle: Text('-N150.00'),
                        trailing: Text(
                          'View',
                          style:
                              TextStyle(color: Theme.of(context).primaryColor),
                        ),
                      ),
                    ),
                    Card(
                      elevation: 3,
                      child: ListTile(
                        leading: CircleAvatar(
                          backgroundColor: Colors.red,
                          child: Icon(Icons.directions_car),
                        ),
                        title: Text('Girls Hostel to Senate'),
                        subtitle: Text('-N150.00'),
                        trailing: Text(
                          'View',
                          style:
                              TextStyle(color: Theme.of(context).primaryColor),
                        ),
                      ),
                    ),
                    Card(
                      elevation: 3,
                      child: ListTile(
                        leading: CircleAvatar(
                          backgroundColor: Colors.green,
                          child: Icon(Icons.add),
                        ),
                        title: Text('Added Airtime'),
                        subtitle: Text('+N500.00'),
                        trailing: Text(
                          'View',
                          style:
                              TextStyle(color: Theme.of(context).primaryColor),
                        ),
                      ),
                    ),
                    Card(
                      elevation: 3,
                      child: ListTile(
                        leading: CircleAvatar(
                          backgroundColor: Colors.red,
                          child: Icon(Icons.directions_car),
                        ),
                        title: Text('School Gate to Hostel'),
                        subtitle: Text('-N150.00'),
                        trailing: Text(
                          'View',
                          style:
                              TextStyle(color: Theme.of(context).primaryColor),
                        ),
                      ),
                    ),
                    Card(
                      elevation: 3,
                      child: ListTile(
                        leading: CircleAvatar(
                          backgroundColor: Colors.red,
                          child: Icon(Icons.directions_car),
                        ),
                        title: Text('School Gate to Central Market'),
                        subtitle: Text('-N150.00'),
                        trailing: Text(
                          'View',
                          style:
                              TextStyle(color: Theme.of(context).primaryColor),
                        ),
                      ),
                    ),
                    Card(
                      elevation: 3,
                      child: ListTile(
                        leading: CircleAvatar(
                          backgroundColor: Colors.green,
                          child: Icon(Icons.add),
                        ),
                        title: Text('Added Airtime'),
                        subtitle: Text('+N900.00'),
                        trailing: Text(
                          'View',
                          style:
                              TextStyle(color: Theme.of(context).primaryColor),
                        ),
                      ),
                    ),
                    Card(
                      elevation: 3,
                      child: ListTile(
                        leading: CircleAvatar(
                          backgroundColor: Colors.red,
                          child: Icon(Icons.directions_car),
                        ),
                        title: Text('Central Market to Hostel'),
                        subtitle: Text('-N250.00'),
                        trailing: Text(
                          'View',
                          style:
                              TextStyle(color: Theme.of(context).primaryColor),
                        ),
                      ),
                    ),
                  ],
                ),
              ),
            ),
          )
        ],
      ),
      floatingActionButton: SizedBox(
        width: 60,
        height: 60,
        child: FloatingActionButton(
          onPressed: () {
            Navigator.of(context).pushNamed(QRScan.routeName);
          },
          child: Icon(
            Icons.qr_code_scanner,
            size: 40,
          ),
        ),
      ),
      floatingActionButtonLocation: FloatingActionButtonLocation.centerFloat,
    );
  }

  void _showPopupDialog(BuildContext context) {
    showDialog(
      context: context,
      builder: (BuildContext context) {
        return AlertDialog(
          title: Text('Top Up Airtime'),
          content:
              Text('Add Airtime using the following code \n *899*08123456789#'),
          actions: [
            TextButton(
              onPressed: () {
                // Close the dialog when the 'OK' button is pressed
                Navigator.of(context).pop();
              },
              child: Text('OK'),
            ),
          ],
        );
      },
    );
  }
}

class IconAndText extends StatelessWidget {
  final IconData icon;
  final String text;

  const IconAndText({
    required this.icon,
    required this.text,
  });

  @override
  Widget build(BuildContext context) {
    return Column(
      children: [
        Icon(
          icon,
          size: 30,
          color: Theme.of(context).primaryColor,
        ),
        SizedBox(height: 4),
        Text(
          text,
          style: TextStyle(fontSize: 16),
        ),
      ],
    );
  }
}
