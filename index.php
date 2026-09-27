<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code With Mugisho</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #0f0f1a;
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            color: #e0e0e0;
        }

        .container {
            background-color: #1a1a2e;
            max-width: 520px;
            width: 100%;
            padding: 36px 32px;
            border-radius: 12px;
            border: 1px solid #2a2a4a;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
        }

        h1 {
            color: #e94560;
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 8px;
            letter-spacing: -0.02em;
        }

        p {
            color: #c0c0d0;
            font-size: 0.95rem;
            line-height: 1.7;
            margin-bottom: 4px;
        }

        .array-output {
            background-color: #12121f;
            border: 1px solid #2a2a4a;
            border-radius: 8px;
            padding: 12px 16px;
            margin-top: 12px;
            font-family: 'Fira Code', 'Consolas', monospace;
            font-size: 0.85rem;
            color: #8888aa;
            word-break: break-all;
        }

        .badge {
            display: inline-block;
            background-color: #e94560;
            color: #ffffff;
            padding: 2px 10px;
            border-radius: 6px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-left: 6px;
            vertical-align: middle;
        }

        a {
            display: inline-block;
            margin-top: 16px;
            color: #e94560;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            transition: opacity 0.2s;
        }

        a:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php
    $username = "Mugisho";
    $message = "Welcome to Creative Coding";
    echo "<h1>$message <span class='badge'>$username</span></h1>";

    $fname = "Mugisho";
    $lname = "Munganga";
    $nationality = "Congolese";

    echo "<p>My name is <strong>$fname $lname</strong></p>";
    echo "<p>I am <strong>$nationality</strong> by nationality</p>";

    $mname = "Romuald";
    $strlen = strlen("I am just testing how PHP strlen() works!");
    echo "<p>strlen() result: <strong>$strlen</strong> characters</p>";

    echo "<p>Try it out</p>";

    $name = "Linus";
    echo "<h1>Hello $name</h1>";

    $myArray = [1, "congo", "uganda", "+243", "+256"];
    $output = "This is the output: " . implode(', ', $myArray);
    echo "<div class='array-output'>$output</div>";

    echo "<a href='card.php'>View Profile Card &rarr;</a>";
    ?>
    </div>
</body>
</html>