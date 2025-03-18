<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CD Store Discount Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:#e279c0 ;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #08bf85 ;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            color:#a908bf ;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color:#229027 ;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
        }
        .result {
            margin-top: 15px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>CD STORE DISCOUNT CALCULATOR</h2>
    <form method="POST">
        <label for="discs">Enter the number of discs bought:</label>
        <input type="number" id="discs" name="discs" required>
        <button type="submit">Calculate Discount</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the number of discs from the form
        $numDiscs = $_POST['discs'];

        // Initialize the discount variable
        $discount = 15;

        // Determine the discount based on the number of discs
        if ($numDiscs >= 500) {
            $discount = 30; // 30% discount for 500 or more discs
        } elseif ($numDiscs >= 50) {
            $discount = 5;  // 5% discount for 50 or more discs
        } elseif ($numDiscs >= 15) {
            $discount = 1;  // 1% discount for 15 or more discs
        } else {
            $discount = 0;  // No discount for 14 or fewer discs
        }

 if ($numDiscs >= 1000) {
            $discount = 50; // 50% discount for 1000 or more discs
        } elseif ($numDiscs >= 100) {
            $discount = 20;  // 20% discount for 100 or more discs
        } elseif ($numDiscs >= 200) {
            $discount = 25;  // 25% discount for 200 or more discs
        } else {
            $discount = 0;  // No discount for 14 or fewer discs
        }






        // Output the discount
        echo "<div class='result'>The discount for buying $numDiscs discs is: $discount%</div>";
    }
    ?>
</div>

</body>
</html>