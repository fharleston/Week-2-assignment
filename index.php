<?php
$firstname = filter_input(INPUT_GET, "first", FILTER_SANITIZE_STRING);
$lastname = filter_input(INPUT_GET, "last", FILTER_SANITIZE_STRING);
$age = filter_input(INPUT_GET, "age", FILTER_SANITIZE_STRING);

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <form class="formborder" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <div  class="inputfield">
            <label for="first">First Name:</label>
            <input type="text" id="first" name="first" autocomplete="off">
        </div>
        <div  class="inputfield">
            <label for="last">Last Name:</label>
            <input type="text" id="last" name="last" autocomplete="off">
        </div> 
        <div  class="inputfield">
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" autocomplete="off"> 
        </div>
    <div>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </div>     
    </form>    

<div  class="output">
<h1><?php
//echo $firstname . "<br>" . $lastname . "<br>" . $age;
if (!empty($firstname) && !empty($lastname) && !empty($age) && is_numeric($age)){
    echo "Hello, my name is $firstname $lastname" . "<br>";
    if($age > 18){
        echo "I am old enough to vote in the United States." . "<br>";
    }   else {
        echo "I am not old enough to vote in the United States." . "<br>";
    }
    $counter = $age;
    $days = 0;
    while($counter != 0){
        $days = $days + 365;
        $counter--;
    }
    echo "$age years is $days days.";
} else {
    echo "Please enter a value for your first name, last name, and age.";
}

?></h1>
</div>
</body>

</html>