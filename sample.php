<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mugisho Munganga</title>
</head>
<body>
    <h1>Start Learning PHP</h1>
    <p>Welcome to learn programming with Mugisho Munganga. This is a sample PHP page.</p>
    <p>Feel free to explore and learn more about PHP programming!</p>
    <button type="button" onclick="alert('Hello, Mugisho Munganga!')">Click Me</button>
    <a href="https://mugisho.vercel.app/" target="_blank">Visit My Portfolio</a>
    <br>
    <?php
    $name="User";
    echo"Hello, $name!";
    $course="Bachelor of Science in Information Technology";
    $faculty="Faculty of Science";
    $department="Department of Computer Science and Information Systems";
    $university="University of Kinshasa";
    $country="Democratic Republic of Congo";
    $age=90;
    echo"<p>My name is $name, I am $age years old. I am currently pursuing a $course at the $faculty, specifically in the $department at the $university, located in the $country.</p>";
$tuition=700;
echo"<p>The tuition fee for a {$course} program at UNIKIN is approximately \${$tuition} per semester.</p>";
$user="Mugisho Munganga";
$password="Mugisho#10!}";
if($user=="Mugisho Munganga" && $password=="Mugisho#10!}") {
    echo"<p>Welcome, {$user}! You have successfully logged in.</p><br>";
    $person="Mugisho";
    $hobbie="Programming";
    if($person=="Mugisho" && $hobbie=="Programming"){
 echo"<P>Hello $person, You are into Tech and you your hobbie is $hobbie</p> ";
    }
    else{
        echo"He is not the right user";
    }
   
    
    
}
    ?>
    //Grading system
    <h3>Grading System</h3>
    
    //Days of the week
    ?>
    <?php
    echo"<h3>Days of the Week</h3>";
    $day=$_POST['day'];
    switch($day){
case 1:
    echo"Today is Monday";
    break;
    case 2:
        echo"Today is Tuesday";
        break;
        case 3:
            echo"Today is Wednesday";
            break;
            case 4:
                echo"Today is Thursday";
                break;
                case 5:
                    echo"<p>The day is Friday</p><br>";
                    break;
                    case 6:
                        echo"<p>Today is Saturday</p><br>";
                        break;
                        case 7:
                            echo"<p>Today is Sunday</p><br>";
                            break;
                            default:
                            echo"<p>You can only enter numbers between 1-7 to display the day of the week</p><br>";
    }
    ?>

    
    <form action="" method="post">
    <input type="number" name="day" min="1" max="7" required placeholder="Enter a number between 1-7 to display the day of the week">
    <button type="submit">Submit</button>
    </form>
    <h3>Your Calculated Age</h3>
     <script>
        let user=prompt("Enter Your name: ");
        let currentYear=prompt("Enter current year: ");
        let yearofBirth=prompt("Enter your year of birth: ");
        let currentAge=currentYear-yearofBirth;
        document.write(`<p>Hello, ${user}! You are ${currentAge} years old!</p>`);
        console.log(`Hello, ${user}!`);
        console.log(`You are ${currentAge} years old!`);
     </script>
</body>
</html>