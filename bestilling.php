<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
header('Content-type: text/html; charset=utf-8');

$fornavn = $_REQUEST['fornavn'];
$etternavn = $_REQUEST['etternavn'];
$fdato = $_REQUEST['fdato'];
$mobil = $_REQUEST['mobil'];
$epost = $_REQUEST['epost'];
$adresse = $_REQUEST['adresse'];
$mtype = $_REQUEST['mtype'];
$pris = $_REQUEST['pris'];

$tekstfarge = "#67be2e";
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
  echo "<ul><li>Fornavn: <font color='".$tekstfarge."'>".$fornavn."</font></li>";
  echo "<li>Etternavn: <font color='".$tekstfarge."'>".$etternavn."</font></li>";
  echo "<li>Fødselsdato: <font color='".$tekstfarge."'>".$fdato."</font></li>";
  echo "<li>Mobil: <font color='".$tekstfarge."'>".$mobil."</font></li>";
  echo "<li>E-post: <font color='".$tekstfarge."'>".$epost."</font></li>";
  echo "<li>Adresse: <font color='".$tekstfarge."'>".$adresse."</font></li>";
  echo "<li>Medlemstype: <font color='".$tekstfarge."'>".$mtype."</font></li>";
  echo "<li>Pris: <font color='".$tekstfarge."'>".$pris.",-/år</font></li></ul>";
  ?>
  </div>

</body>
</html>