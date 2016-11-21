<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
header('Content-type: text/html; charset=utf-8');

$navn = $_POST['navn'];
$mobil = $_POST['mobil'];
$epost = $_POST['epost'];
$beskjed = $_POST['beskjed'];
$antallpersoner = $_POST['antallpersoner'];
$tur = $_POST['tur'];
?>
<head>
<link rel="stylesheet" media="(min-width: 601px)" href="css/stiler-vanlig.css">
<title>Mottak av data fra innmeldingsskjema</title>
</head>

<body>

  <div id="main">
  <?php
  echo "<p><b>Hei ".$fornavn."!</b><br><br>";
  echo "Du har oppgitt følgende for din innmelding i <b>O-klubben Rett Vest</b>:";
  echo "<ul><li>Fornavn:".$navn."</font></li>";
  echo "<li>Mobil:".$mobil."</font></li>";
  echo "<li>E-post:".$epost."</font></li>";
  echo "<li>Beskjed:".$beskjed."</font></li>";
  echo "<li>Tur:".$tur."</font></li>";
  echo "<li>Antall Personer:".$antallpersoner."stk.</font></li></ul>";
  ?>
  </div>

</body>
</html>