<?php 
$var = 'Hello Ghana';
$var2 = 'eat fufu';
$sum  = $var.' '.$var2;
echo $sum;

$hen = 56;
if($hen > 50){
    echo 'You are old';
}
else{
    echo 'You are young';
}

for($i=0; $i<10; $i++){
    echo $i . '<br>';

}

function my_func($num1, $num2){
    echo $num1 + $num2;
}

my_func(45, 67);

$ben = array('ben', 'kofi', 'kwame', 'ama');
sort($ben);
print_r($ben);




$color  ='red';
switch($color){
    case 'red':
        echo 'The color is red';
        break;
    case 'blue':
        echo 'The color is blue';
        break;
    case 'green':
        echo 'The color is green';
        break;
    default:
        echo 'The color is not red, blue or green';
}   

$age = 20;
if($age > 18){
    echo 'You are an adult';
}
else if($age > 12){ 
    echo 'You are a child';
}


//Api
?>