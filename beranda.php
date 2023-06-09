<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <style>
        nav {
            background-color: orange;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: white;
        }

        .menu {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .menu li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .menu li a:hover {
            background-color: #FF8C00;
        }

        .home {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .home img {
            width: 600px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }

        .home form {
            display: flex;
            align-items: center;
        }

        .home input[type="text"] {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            outline: none;
            border: 1px solid gray;
            border-radius: 5px;
            margin-right: 10px;
        }

        .home button {
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            background-color: orange;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .home button:hover {
            background-color: #FF8C00;
        }
    </style>

</head>

<body>
    <div class="nav">
        <nav>
            <div class="logo">ALOPAKTANI</div>
            <ul class="menu">
                <li><a href="beranda.php">Home</a></li>
                <li><a href="view-alat.php">Tabel Alat</a></li>
                <li><a href="view-transaksi.php">Tabel Transaksi</a></li>
            </ul>
        </nav>
    </div>
    <div class="home">
        <div>
            <img src="resa.jpeg" alt="gambar">
        </div>
        <div>
            <form action="" method="post">
                <input type="text" name="keyword" autocomplete="off" autofocus size="50">
                <button type="submit" name="Cari">Cari</button>
            </form><br>
        </div>
        <div>
        </div>
    </div>
</body>

</html>