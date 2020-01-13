<?php


$i=0;
$tam=5;
$vet=array($tam);

for ($i=0; $i <$tam; $i++)

{
    echo"Valor de i:  $i<br/>";

}
echo "<br/><hr/><br/>";
echo"<br/>";

for($i=0; $i<80;$i++)

{
    echo"<>";
}

echo "<br/><br/><br/><hr/><br/>";

for ($i=0; $i<$tam; $i++)

{
    $vet[$i]=$i;


}

for($i=0; $i<$tam; $i++)

{
    echo"Valor da pos. $i: $vet[$i]<br/>";
}

echo "<br/><hr/><br/>";




?>