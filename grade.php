<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Grade Check Program</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #000;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #fff;

        }
        h1 {
            text-align: center;
            color: blue;
        }
        p {
            font-size: 16px;
            color: #fff;
        }
        .form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="number"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"], button {
            padding: 10px 20px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button {
            background-color: red; /* Red for reset */
        }
        input[type="submit"]:hover, button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Grade Check Program</h1>
    <p>Welcome to the Grade Check Program. Please enter your mark to check your grade.</p>
    
    <div class="form">
        <form id="gradingForm" action="" method="post">
            <label for="mark">Enter your mark:</label>
            <input type="number" id="mark" name="mark" min="0" max="100" placeholder="Enter your mark" required>
            
            <input type="submit" value="Check Grade">
            <!-- Reset Button triggers JavaScript resetForm() -->
            <button type="button" onclick="resetForm()">Reset</button>
        </form>
    </div>

    <!-- Output Container -->
    <div id="output">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['mark'])) {
            $mark = $_POST['mark'];

            echo "<p>Hello dear user and Welcome to the Grade Checker</p>";
            echo "<p>Your mark is: " . htmlspecialchars($mark) . "</p>";

            if ($mark >= 90) {
                echo "<p>You got grade A</p><br>";
            } else if ($mark >= 80) {
                echo "<p>You got grade B</p><br>";
            } else if ($mark >= 70) {
                echo "<p>You got grade C</p><br>";
            } else if ($mark >= 50) {
                echo "<p>You got grade D</p><br>";
            } else if ($mark >= 40) {
                echo "<p>You got grade E</p><br>";
            } else {
                echo "<p>I am sorry! You failed.</p><br>";
            }
        }
        ?>
    </div>
    </div>

    <script>
        function resetForm() {
            // 1. Clear the input field in the form
            document.getElementById("gradingForm").reset();
            
            // 2. Clear the previous PHP output
            document.getElementById("output").innerHTML = "";
        }
    </script>
</body>
</html>