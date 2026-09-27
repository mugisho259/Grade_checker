<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Card</title>
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
        }

        .container {
            background-color: #1a1a2e;
            max-width: 420px;
            width: 100%;
            padding: 32px 28px;
            border-radius: 12px;
            border: 1px solid #2a2a4a;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
        }

        h1 {
            color: blue;
            text-align: center;
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 24px;
            letter-spacing: -0.02em;
        }

        .row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #2a2a4a;
        }

        .row:last-child {
            border-bottom: none;
        }

        .label {
            color: #8888aa;
            font-size: 0.875rem;
            font-weight: 500;
        }

        .profile {
            color: #e0e0e0;
            font-weight: 600;
            font-size: 0.95rem;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
echo "<h1>Profile Identity Card</h1>";
echo "<img src=\"romy.jpg\" alt=\"Profile Picture\" style=\"width: 100px; height: 100px; border-radius: 50%; display: block; margin: 0 auto 20px; object-fit: cover;\">";
$name="Mugisho Munganga";
$age=90;
$job_title="Software Engineer";
$employment_status=true;
$telno="+256 772 211 512";
$email="mugishomunganga1@gmail.com";
$gender="Single";

$rows = [
    ["Full Name", $name],
    ["Age", $age],
    ["Job Title", $job_title],
    ["Employment Status", $employment_status ? "Active" : "Inactive"],
    ["Tel No", $telno],
    ["Email", $email],
    ["Gender", $gender],
];

foreach ($rows as [$label, $value]) {
    echo "<div class='row'>";
    echo "<span class='label'>$label</span>";
    echo "<span class='profile'>$value</span>";
    echo "</div>";
}
        ?>
    </div>
</body>
</html>