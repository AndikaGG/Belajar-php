<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        h2 {
            margin-top: 20px;
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background-color: #fff;
            padding: 10px;
            margin-bottom: 8px;
            border-radius: 4px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <h1>Form Pemesanan</h1>
    <form action="neww.php" method="get">
        <label for="product">Produk:</label>
        <input type="text" name="product" id="product" required>
        
        <label for="quantity">Jumlah:</label>
        <input type="number" name="quantity" id="quantity" required>
        
        <input type="submit" value="Pesan">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (isset($_GET["product"]) && isset($_GET["quantity"])) {
                $product = $_GET["product"];
                $quantity = $_GET["quantity"];
                echo "<h2>Daftar Belanjaan</h2>";
                echo "<ul>";
                echo "<li>Produk: $product - Jumlah: $quantity</li>";
                echo "</ul>";
            }
        }
    ?>
</body>
</html>
