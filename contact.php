
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="shortcut icon" type="image/png" href="image/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;500&display=swap" rel="stylesheet">
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

        .navigation {
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
            margin-left: 150px;
            text-decoration: underline;
        }

        a {
            text-decoration: none;
        }

        .contact {
            border: 2px solid #ff00d4;
            border-radius: 10px;
            height: 295px;
            width: 560px;
            margin-left: 70px;
            padding: 5px;
            box-shadow: 10px 10px 15px rgb(194, 13, 240);
        }

        .call {
            height: 30px;
            width: 30px;
            filter: invert(100%);
        }
        .call1 {
           color: #06f906;
        }

        .mail {
            height: 30px;
            width: 30px;
            filter: invert(100%);
        }
        .mail1 {
           color: #fb8d05;
        }

        .telephone {
            height: 30px;
            width: 30px;
            filter: invert(100%);
        }

        .name {
            color: white;
            font-size: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="index.php"><img src="image/logo.png" alt="logo" class="logo"></a>
        <nav class="navbar">
            <ul class="navigation">
                <li><a class=nav href="index.php">Home</a></li>
                <li><a class=nav href="about.php">About</a></li>
                <li><a class=nav href="contact.php">Contact us</a></li>
            </ul>
        </nav>
        <h1>Our contact Details are below</h1>
        <div class="contact">
            <ul>
                <li class=name><img src="image/call.png" class="call"> Gaurav: <span class="call1">+91 xxxxxxxxxx</span>
                </li><br>
                <li class=name><img src="image/call.png" class="call"> Abhishek: <span class="call1">+91
                        xxxxxxxxxx</span></li><br>
                <li class=name><img src="image/call.png" class="call"> Anand: <span class="call1">+91 xxxxxxxxxx</span>
                </li><br>
                <li class=name><img src="image/telephone.png" class="telephone"> Landline: <span
                        class="call1">0326-xxxxx</span>
                <li></li><br>

                <li class=name><img src="image/mail.png" class="mail"> Gaurav: <span
                        class="mail1">gauravdemo@xyz.com</span></li><br>
                <li class=name><img src="image/mail.png" class="mail"> Abhishek: <span
                        class="mail1">abhishekdemo@xyz.com</span></li><br>
                <li class=name><img src="image/mail.png" class="mail"> Anand: <span
                        class="mail1">ananddemo@xyz.com</span></li><br>
        </div>

    </div>
</body>

</html>