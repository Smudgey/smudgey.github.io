<?php
// define variables and set to empty values
$psaRefErr = $ltaRefErr = "";
$psaRef = $ltaRef = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["pensionSchemeAdministratorCheckReference"])) {
  $psaRefErr = "PSA Ref must be entered";
} else {
  $psaRef = $_POST["pensionSchemeAdministratorCheckReference"];
}

if (empty($_POST["lifetimeAllowanceReference"])) {
  $ltaRefErr = "LTA Ref must be entered";
} else {
  $ltaRef = $_POST["lifetimeAllowanceReference"];
}
}
?>
