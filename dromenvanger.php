<?php
$student = array();
echo "> Hoeveel vrienden zal ik vragen om hun droom?" . PHP_EOL;
$hvl = readline("> ");
$hvl--;
if (is_numeric($hvl)){
;}else {
  echo "Dit is geen cijfer, boeler.";
  exit;
}
echo "Hoeveel dromen wil je opgeven? ";
$aantaldromen = readline("> ");
if (is_numeric($aantaldromen)){
;}else {
  echo "Dit is geen cijfer, boeler.";
  exit;
}
$aantaldromen--;
for ($i=0; $i <= $hvl; $i++) {
  echo "Wat is jouw naam?" . PHP_EOL;
  $naam = readline("");
  $student[$naam]=array();
  for ($t=0; $t <= $aantaldromen ; $t++) {
    echo "Wat is jouw droom?" . PHP_EOL;
    $droom = readline();
    array_push($student[$naam], $droom);

  }

}
foreach ($student as $naam => $value) {

foreach ($value as $droom) {
  echo $naam . " heeft dit als droom: " . $droom . PHP_EOL;

 }
}


 ?>
