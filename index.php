<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaurav Bank of India</title>
    <link rel="shortcut icon" type="image/png" href="image/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <style>
        body {
            background-image: url('image/img.jpg');
        }

        .logo {
            height: 120px;
            width: 120px;
            /* margin-top: -131px; */
            margin-left: 25px;

        }

        .navbar {
            display: inline-block;
            display: inline-block;
            margin: 45px;
            /* margin-top: -202px; */
            margin-left: 180px;
        }

        ul {
            list-style-type: none;
            float: left;
            margin-left: -132px;
            margin-top: 3px;
            /* text-align: center; */
            padding-top: -2px;
        }

        li {
            display: inline-block;
        }

        .nav {
            text-decoration: none;
            font-size: 30px;
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            padding: 17px;
            color: white;
        }

        .nav:hover {
            color: black;
            background-color: white;
            border-radius: 30px;
            padding-top: 2px;
            padding-bottom: 2px;
        }

        h1 {
            font-family: 'Baloo Bhai 2', cursive;
            color: rgb(231, 217, 13);
            margin: 20px;
            margin-left: 160px;
            text-decoration: underline;
        }

        .quote {
            font-family: 'Roboto', sans-serif;
            color: white;
        }

        .box {
            border: 2px solid #20f54e;
            /* display: block; */
            display: block;
            padding: 35px;
            height: 110px;
            width: 579px;
            border-radius: 40px;
            margin-left: 60px;
        }

        #btn1 {
            border: none;
    border-radius: 10px;
    background-color: #ef089d;
    font-size: 20px;
    font-weight: bold;
    font-family: 'Baloo Bhai 2', cursive;
    color: white;
    /* margin: 0px; */
    /* display: block; */
    margin-left: 47px;
    padding: 10px;
    padding-left: 35px;
    padding-right: 35px;
    /* text-decoration: none;*/
        }
        #btn2 {
            border: none;
            border-radius: 10px;
            background-color: #ef089d;
            font-size: 20px;
            font-weight: bold;
            font-family: 'Baloo Bhai 2', cursive;
            color: white;
            margin: 10px;
            /* display: block; */
            margin-left: 20px;
            padding: 10px;
            padding-left: 35px;
            padding-right: 35px;
            /* text-decoration: none; */
        }
        #btn3 {
            border: none;
            border-radius: 10px;
            background-color: #ef089d;
            font-size: 20px;
            font-weight: bold;
            font-family: 'Baloo Bhai 2', cursive;
            color: white;
            margin: 10px;
            /* display: block; */
            margin-left: 10px;
            padding: 10px;
            padding-left: 35px;
            padding-right: 35px;
            /* text-decoration: none; */
        }
        a{
            text-decoration: none;
        }
        #btn1:hover{
          color: white;
          background-color: #f14ab5;
          cursor: pointer;
        }
        #btn2:hover{
          color: white;
          background-color: #f14ab5;
          cursor: pointer;
        }
        #btn3:hover{
          color: white;
          background-color: #f14ab5;
          cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="index.php"><img src="image/logo.png" alt="logo" class="logo"></a>
        <nav class="navbar">
            <ul>
                <li><a class=nav href="index.php">Home</a></li>
                <li><a class=nav href="about.php">About</a></li>
                <li><a class=nav href="contact.php">Contact us</a></li>
            </ul>
        </nav>
        <h1>Welcome to Gaurav Bank of India</h1>
        <div class="box">
            <div class="quote">Business and life are like a bank account you can't take out more than you put in.
                Banking is Necessary, Banks are Not...</div><br>
            <div class="quote">Banking, I would argue, is the most heavily regulated industry in the world.</div><br>
            <div class="quote">A bank is a place that will lend you money if you can prove that you don't need it.</div>
        </div>
        <a href="users.php" target="blank"><button class="btn" id="btn1">View all Users</button></a>
        <a href="transfer_money.php"><button class="btn" id="btn2">Transfer money</button></a>
        <a href="transactionhistory.php"><button class="btn" id="btn3">Transaction History</button></a>
    </div>
    
</body>

</html>
