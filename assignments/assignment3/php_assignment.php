<!DOCTYPE html>
<html lang="en">
<head>
    <title>Zane Blalock, Web Programming Assignment 3</title>
    <link rel="stylesheet" href="../../css/main.css">
</head>

<body>
<h1>Part 1, Bitten Function</h1>

<?php
function isBitten() {
    $random_number;
    srand();

    $random_number = rand(0,100);
    print("Random Number was: $random_number!<br>");

    if($random_number > 49){
        print("Charlie ate my lunch!");
        return(TRUE);
    }else{
        print("Charlie did not eat my lunch!");
        return(FALSE);
    }
}

isBitten();
?>

<!--<hr>-->
<?php 
//for($index1 = 1; $index1 < 6; $index1++){
//    $index1mod = $index1 % 2;
//    print("$index1 is modulo: $index1mod -- ");
//    for($index2 = 1; $index2 < 6; $index2++){
//        print("test <br>");
//    }
    
//    print("<br> I'm a closer! <br><br>");
}

?>
    
    <hr>
    
<table style='width: 300px'>

<?php
//print("<tr><td style='border: solid 2px; background-color:red; width: 35px; height:35px'></td><td style='border: solid 2px; background-color:black; width: 35px; height:35px'></td></td>");

for($index_1 = 1; $index_1 < 6; $index_1++){
    print("<tr>");
        
    for($index_2 = 1; $index_2 < 6; $index_2++){
        if(($index_1 % 2) == ($index_2 % 2)){
            print("<td style='border: solid 2px; background-color:red; width: 35px; height:35px'></td>");
        }else{
            print("<td style='border: solid 2px; background-color:black; width: 35px; height:35px'></td>");
        }
    }
        
    print("</tr>");
}

?>?>

</table>

<hr>
    
<?php
$month = array('January', 'February', 'March', 'April',
 'May', 'June', 'July', 'August',
 'September', 'October', 'November', 'December');

for($index = 0; $index < count($month); $index++){
    print("$month[$index]<br>");
}

print("<br><br>");

$sorted = $month;
sort($sorted);

for($index = 0; $index < count($month); $index++){
    print("$sorted[$index]<br>");
}

print("<br><hr><h3>Foreach Part</h3>");

foreach($month as $months){
    print("$months <br>");
}

print("<br>");
foreach($sorted as $sorts){
    print("$sorts <br>");
}

?>

</body>

</html>