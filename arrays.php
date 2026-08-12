<?php
   /*  $fruits = ['banana', 'apple', 'orange'];
    //echo $fruits[0];
    // echo '<pre>';
    // var_dump($fruits);
    // echo '<pre>';

    // Mixed array
    $mixed_arr = [ 12, "banana", true];
    // echo '<pre>';
    //var_dump($mixed_arr);
    // echo '<pre>';

    // associative array
    $users_arr = [
        'name'=>'Abdul',
        'age'=> 20,
        'hobbies' => ['coding', 'tennis']
    ];
     //echo '<pre>';
     //var_dump($users_arr);
    // echo '<pre>';
// Using a default value
//
$number = 5; 
$arr = ['abu', 'musa'];

//echo "Multiplication Table for $number:\n";
for($i = 1; $i <= 10; $i++) 
{
    $result = $i * 5;
    //echo $result;
    //echo "$number × $i = $result\n";
}
$sum = 0;
for ($i = 1; $i <= 10; $i++) {
    $sum += $i;
}
//echo "The sum of all numbers from 1 to 10 is: " . $sum . "\n";

// $count = 10;
// while ($count <= 10) {
//     //echo $count . "\n";
//     //$count--;
// }
////echo "$count! \n";

 $scores = [45, 72, 38, 85, 50, 91];

echo "Passing Scores:\n";
foreach ($scores as $score) {
    if ($score >= 50) {
        echo "Score: $score - Pass\n";
    }
}

*/
// array of six scores
$scores = [80, 45, 67, 70, 90, 35,];
    echo "passing scores:<br>";

    foreach ($scores as $score ) {
        if ($score >=50) {
            // echo $score . " -pass<br>";
        }
    }

    // crate an array of 10 nubms
$numbers = [ 10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
// sum variables
$sum = 0;
    // loop through an array to calculate the sum
    foreach ($numbers as $number) {
        $sum += $number;

    }
    // cal Average
    $average = $sum / count($numbers);

    echo "sum of numbers: " . $sum . "<br>";
    echo "Average of numbers: " . $average . "<br>";
?>