<?php
header('Content-type: text/plain');

$bangla = 50;
$english = 80;
$math = 86;

$avrg = ($bangla + $english + $math ) / 3;

function showGrades($mark, $subject_name){
  if($mark < 33){
    return "Your grade for {$subject_name} is F";
  }else if($mark > 33 && $mark <= 50){
    return "Your grade for {$subject_name} is D";
  }else if($mark > 50 && $mark <= 70){
    return "Your grade for {$subject_name} is C";
  }else if($mark > 70 && $mark <= 80){
    return "Your grade for {$subject_name} is B";
  }else if($mark > 90 && $mark <= 100){
    return "Your grade for {$subject_name} is A";
  }
}

echo "Your average score is {$avrg} \r\n";

echo showGrades($bangla, "Bangla") . "\n";
echo showGrades($english, "English") . "\n";
echo showGrades($math, "Math") . "\n";
