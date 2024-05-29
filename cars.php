<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eugest's cars rental management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('background.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

        }

        .header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: right;
        }
        .header a {
            color: #fff;
            text-decoration: none;
            margin-left: 10px;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .vehicle {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
            width: calc(30% - 20px); /* 50% width with margins */
            max-width: 400px;
        }
        .vehicle img {
            width: 100%;
            height: auto;
            display: block;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .vehicle-details {
            padding: 20px;
        }
        .vehicle-details p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

<div class="header">
    <a href="login_form.php">log In ||</a>
    <a href="user_page.php">User Back ||</a>
    <a href="register_form.php">Register</a>
    <a href="admin_page.php">Admin Back ||</a>
</div>

<div class="container">
    <!-- Vehicle cards will be inserted here -->
    <div class="vehicle">
        <img src=" images.jpeg  ">
        <div class="vehicle-details">
            <p><strong>Make:</strong> Toyota</p>
            <p><strong>Model:</strong> Camry</p>
            <p><strong>Year:</strong> 2022</p>
            <p><strong>Price:</strong> $25,000</p>
        </div>
    </div>

    <!-- Repeat the above vehicle card structure for the other 9 vehicles -->
    <div class="vehicle">
        <img src="images (1).jpeg">
        <div class="vehicle-details">
            <p><strong>Make:</strong> Fold</p>
            <p><strong>Model:</strong> Civic</p>
            <p><strong>Year:</strong> 2023</p>
            <p><strong>Price:</strong> $22,000</p>
        </div>
    </div>
    <!-- Repeat for other vehicles -->
    <div class="vehicle">
        <img src="images (2).jpeg">
        <div class="vehicle-details">
            <p><strong>Make:</strong> Audi</p>
            <p><strong>Model:</strong> Jetta</p>
            <p><strong>Year:</strong> 2024</p>
            <p><strong>Price:</strong> $28,000</p>
        </div>

        
    
</div>


    <!-- Vehicle cards will be inserted here -->
    <div class="vehicle">
        <img src=" download.jpeg  ">
        <div class="vehicle-details">
            <p><strong>Make:</strong> Chevrolet</p>
            <p><strong>Model:</strong> Camry</p>
            <p><strong>Year:</strong> 2022</p>
            <p><strong>Price:</strong> $30,000</p>
        </div>
    </div>

    <!-- Repeat the above vehicle card structure for the other 9 vehicles -->
    <div class="vehicle">
        <img src="images (4).jpeg">
        <div class="vehicle-details">
            <p><strong>Make:</strong> Honda</p>
            <p><strong>Model:</strong> Escape</p>
            <p><strong>Year:</strong> 2020</p>
            <p><strong>Price:</strong> $18,000</p>
        </div>
    </div>
    <!-- Repeat for other vehicles -->
    <div class="vehicle">
        <img src="images (3).jpeg">
        <div class="vehicle-details">
            <p><strong>Make:</strong> Buick</p>
            <p><strong>Model:</strong> Camry</p>
            <p><strong>Year:</strong> 2024</p>
            <p><strong>Price:</strong> $20,000</p>
        </div>

        
    
</div>


</body>
</html>
