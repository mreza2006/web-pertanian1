<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            padding: 40px;
            width: 300px;
        }

        .container h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .container label {
            font-size: 14px;
            display: block;
            margin-bottom: 8px;
        }

        .container input[type="text"],
        .container input[type="password"] {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
        }

        .container button[type="submit"] {
            background-color: rgba(255, 177, 0, 1);
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .container button[type="submit"]:hover {
            background-color: rgba(178, 134, 34, 1);
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>LOGIN</h1>
        <form action="cek-login.php" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Masukan Username...." autocomplete="off" required>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Masukan Password..." autocomplete="off" required>
            <button type="submit" name="btn-login">Login</button>
        </form>
    </div>
</body>

</html>
