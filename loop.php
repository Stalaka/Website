<h1>Loop</h1>

<h4>While Loop</h4>

<?php
//While Loop
$init=0;
while($init<7){
    print $init . "<br>";
    $init++;
  }

?>
<h4>do-While Loop</h4>
<?php
//do-While Loop
$i=110;
do{
    print $i . "<br>";
    $i++;
}while($i <16);
?>
<h4>For Loop</h4>
<?php
//For Loop
for($s=45; $s<55;$s+=2){
    print $s . "<br>";
   
}
?>
<h4>foreach</h4>
<?php
$months =["January", "February", "March", 
"April", "May", "June"," July", "August", 
"September", "October", "November", "December"];

foreach($months AS $month){
    print $month .",";
}
?>
<form action="">
<select name="" id="">
    <option value="">--Years--</option>
    <?php
    $init=2015;
    while ($y,2030){
        print"<option value=''>$y</option>";
        $y++;
    }
    ?>