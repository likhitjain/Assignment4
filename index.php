<?php

//1)
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year).'<br>';
echo '<hr>';

//2)
$date =  date('Y/m/d', time());
echo " 2) The value of \$date: ".$date.'<br>';
echo '<hr>';

//3)
$t = strcmp($date,$tar);
if ($t > "0") {
    echo " 3) Comparison:   The Future" ;
} elseif ($t > "0") {
    echo "The Past" ;
} elseif ($t = "0") { 
    echo "Oops".'<br>' ;
}
echo '<hr>';

//4)
$sym = strpos($date, "/");
$sym2 = strpos($date, "/", $sym + 1);
echo " 4) The positions of / are: $sym  $sym2".'<br>';
echo '<hr>';

//5)
echo " 5) The number of words in \$date is: ".str_word_count("$date").'<br>';
echo '<hr>';

//6)
echo " 6) The length of the string \$date is: ".strlen($date)."<br>";
echo '<hr>';

//7)
echo " 7) ASCII value of the first character of the \$date is: ".ord($date)."<br>";
echo '<hr>';

//8)
echo " 8) The last two characters in \$date is: ".substr($date,8)."<br>";
echo '<hr>';

//9)
echo " 9) Break \$date into an array and set 'separator' parameter as '/' and delimit all elements with space: "."<br>";
print_r (explode("/",$date));
echo '<hr>';

//10)
echo " 10) Done by using foreach and then for loop, swtich statement and delimit: "."<br>";
 foreach($year as $value)
 {
    for($i=0; $i <1 ; $i++)
      {    
       switch ($value)
          {
        case(($value%4 == 0) and ($value%100!= 0) or ($value%400)==0):
           echo $value. ": True ";
           break;
        
        default:
           echo $value.": False ";
           break;
           }
 

     }

}
echo '<hr>';

//11)
echo "<br> 11) Using switch statement: ";
for ($i=0;$i<count($year);$i++)

{
switch ($year{$i})
{
case "2012": if(((int)$year[$i])%4==0)
{
echo "True ";
}
else
{
echo "False ";
}

break;
case "396": if(((int)$year[$i])%4==0)
{
echo "True ";
}
else
{
echo "False ";
}

break;
case "300": if(((int)$year[$i])%4==0)
{
echo "True ";
}
else
{
echo "False ";
}

break;
case "2000": if(((int)$year[$i])%4==0)
{
echo "True ";
}
else
{
echo "False ";
}

break;
case "1089": if(((int)$year[$i])%4==0)
{
echo "True ";
}
else
{
echo "False ";
}

break;
case "1100": if(((int)$year[$i])%4==0)
{
echo "True ";
}
else
{
echo "False ";
}

break;
}
}



?>