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
echo print_r($jmperezperez_json)."<br>";

?>
