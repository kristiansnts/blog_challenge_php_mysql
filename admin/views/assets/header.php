<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Akun</title>
    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        header,
        footer {
            width: 100%;
        }

        header {
            display: flex;
            background-color: #F18C8E;
            padding: 10px 20px;
            color: white;
            justify-content: flex-end ;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        }

        header a {
            text-decoration: none;
        }

        .navbar {
            flex: 25%;
            background-color: #F0B7A4;
        }

        .content {
            flex: 75%;
            background-color: #F1D1B5;
        }

        .wrapper {
            display: flex;
            height: 100%;
        }

        footer {
            display: flex;
            background-color:#305F72;
            padding: 10px 20px;
            color: white;
            justify-content: center;
        }

        .fakeimg {
            padding: 30px 20px;
            background-color: #ddd;
        }

        nav li {
            list-style: none;
            padding: 10px 10px;
        }

        nav li a{
            text-decoration: none;
            display: block;
        }

    </style>
</head>
<body>
    
    <!-- Header -->
    <header>
        <div class="items">
            <a href="#">Log Out</a>
        </div>
    </header>