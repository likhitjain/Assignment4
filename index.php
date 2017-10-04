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
echo "The value of \$date: ".$date.'<br>';
echo '<hr>';

//3)
$t = strcmp($date,$tar);
if ($t > "0") {
    echo "The Future" ;
} elseif ($t > "0") {
    echo "The Past" ;
} elseif ($t = "0") { 
    echo "Oops".'<br>' ;
}
echo '<hr>';

//4)
$sym = strpos($date, "/");
$sym2 = strpos($date, "/", $sym + 1);
echo "The positions of / are: $sym  $sym2".'<br>';
echo '<hr>';

//5)
echo "The number of words in \$date is: ".str_word_count("$date").'<br>';
echo '<hr>';

//6)
echo "The length of the string \$date is: ".strlen($date)."<br>";
echo '<hr>';

//7)
echo "ASCII value of the first character of the \$date is: ".ord($date)."<br>";
echo '<hr>';

//8)
echo "The last two characters in \$date is: ".substr($date,8)."<br>";
echo '<hr>';

//9)
echo "Break \$date into an array and set 'separator' parameter as '/' and delimit all elements with space: ";
print_r (explode("/",$date));
echo '<hr>';

//10)
 foreach($year as $value)
 {
    for($i=0; $i <1 ; $i++)
      {    
       switch ($value)
          {
        case(($value%4 == 0) and ($value%100!= 0) or ($value%400)==0):
           echo $value. ": True"."<br>" ;
           break;
        
        default:
           echo $value.": False"."<br>";
           break;
           }
 

     }

}

?>