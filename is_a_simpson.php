<html lang="en">
<!--/*Author: Amy Croft
Assignment: 8
Course: DGL123
Date: October 26, 2021*/-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Is a Simpson</Index></title>
</head>

<body>

<?php

// $first_name = $_POST['first_name'];
// $last_name = $_POST['last_name'];

// $full_name = $first_name. ' '.$last_name;


// create array for $simpsons
$simpsons = [
    'Homer Simpson',
    'Marge Simpson',
    'Lisa Simpson',
    'Bart Simpson',
    'Maggie Simpson'

];


function is_a_simpson($full_name) {
    global $simpsons;
    //create foreach loop 
    foreach ($simpsons as $simpson) {
        
        $last_name = $simpson;
        if ($simpson == 'Simpson') {
            return true;
        
        // $lastname = $item
        // $last_name = strtok($_POST['last_name'],',');
        // if ($last_name == 'Simpson' ) {
        // return true;
    }
}
    return false;
}

var_dump(is_a_simpson('Lisa Simpson',$simpsons)); // This should return true
var_dump(is_a_simpson('Marge Simpson', $simpsons)); // This should return true
var_dump(is_a_simpson('Ned Flanders',$simpsons)); // This should return false
var_dump(is_a_simpson('Montgomery Burns',$simpsons)); // This should return false
var_dump(is_a_simpson('Simpson Harris',$simpsons)); // This should return false



?>
</body>
</html>