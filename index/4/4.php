<?php


$num_primo = 5;
$res_primo = 0;
     
for ($i = 2; $i <= $num_primo / 2; $i++){
if ($num_primo % $i == 0){
	     $res_primo++;
       break
};
}
if($res_primo == 0){
    echo $num_primo."é numero primo.";
}else{ 
 echo $num_primo."não é numero primo.";
 }  

>?