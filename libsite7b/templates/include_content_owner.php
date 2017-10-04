<?php
// $messageVar, $formPath, $contentOwnerName and $phoneVar are all set in Drupal block with the php include

if  ($messageVar == "") {
  $messageVar = "This page is maintained by ";
}

if(!isset($phoneVar)) {
	$phoneVar =  "its value changed";
  $phone = ""; //setting empty string
}

else {
  $rx = "/^\+?(1)?\D*\s?(\d{3})\D*(\d{3})\D*(\d{4})(?:\D+|$)(\d*)$/x";
  // regex to validate and format the Phone number
  /*
  $rx = "/
      ^\+?(1)?\D*     # optional country code * Currently compares to USA code (+1)
      \s?(\d{3})\D* # optional area code with optioal space in front of it
      (\d{3})\D*  # first three
      (\d{4})     # last four
      (?:\D+|$)   # extension delimiter or EOL
      (\d*)$
  /x";

  */

  preg_match($rx,$phoneVar,$matches);

  if(!isset($matches[0])) {
    $phone = ""; //if the number is entered incorrectly then don't display it	
  }
  else {
    $country = $matches[1];
    $area = $matches[2];
    $three = $matches[3];
    $four = $matches[4];
    $ext = $matches[5];

    $phone = "$three-$four";
    if(!empty($area)) $phone = "($area) $phone";
    if(!empty($country)) $phone = "+$country $phone";
    if(!empty($ext)) $phone .= " x$ext";
  }

}

$interpunct = html_entity_decode("&bull; ", ENT_QUOTES | ENT_IGNORE, "UTF-8");

if($phone != "") {
	$phoneString = " " . $interpunct . " " . $phone;
}
else {
	$phoneString = "";
}

echo "<div class='content_owner'>" . $messageVar . "<a href='" . $formPath . "?page=https://library.gwu.edu" . $_SERVER["REQUEST_URI"] . "'>" . $contentOwnerName . "</a>" . $phoneString . " </div>";

?>
