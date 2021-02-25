<?php
/*https://developer.spotify.com/console/get-playlist-followers-contains

JSON array format 1 element
[
  true
]


JSON array format 3 elements
[
  true,
  false,
  false
]
-----------------------------------------
ids
jmperezperez,thelinmichael,wizzler

------------------------------------------
JSON Object
1 element
{
  "jmperezperez": true
}

3 elements
{
  "jmperezperez": true,
  "thelinmichael": false,
  "wizzler": false
}

--------------------------------------------
JSON String
"{
  "jmperezperez": true
}"

"{
  "jmperezperez": true,
  "thelinmichael": false,
  "wizzler": false
}"
*/

//CREAR JSON amb
$jmperezperez=array(true);
echo "<b>PHP Array</b><br>";
echo var_dump($jmperezperez)."<br>";
echo print_r($jmperezperez)."<br><br>";

$jmperezperez_json=json_encode($jmperezperez);
echo "<b>JSON array format</b><br>";
echo var_dump($jmperezperez_json)."<br>";
echo print_r($jmperezperez_json)."<br><br>";

//decode
$jmperezperez_json_decode=json_decode($jmperezperez_json,true);
echo "<b>JSON decode</b><br>";
echo var_dump($jmperezperez_json_decode)."<br>";
echo print_r($jmperezperez_json_decode)."<br><br>";

//Accedir a informació
echo "<b>Accedir a informació</b><br>";
echo $jmperezperez_json_decode[0]."<br><br>";

//3 elements
$elements_3='{ "jmperezperez": true, "thelinmichael": false, "wizzler": false}';
echo "<b>3 Elements strings format</b><br>";
echo var_dump($elements_3)."<br>";
echo print_r($elements_3)."<br><br>";

//Decodificar elements
echo "<b>Decodificar element</b><br>";
$result_arr_ass=json_decode($elements_3,true);
echo "jmperezperez ".$result_arr_ass["jmperezperez"].".<br>";
echo "thelinmichael ".$result_arr_ass["thelinmichael"].".<br>";
echo "wizzler ".$result_arr_ass["wizzler"].".<br>";

?>
