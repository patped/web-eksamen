<?php

$navn = $_POST['navn'];
$mobil = $_POST['mobil'];
$epost = $_POST['epost'];
$beskjed = $_POST['beskjed'];
$antallpersoner = $_POST['antallpersoner'];
$tur = $_POST['tur'];
?>

<p><b>Hei <?php echo $fornavn; ?>!</b><br><br>
Du har oppgitt følgende for din innmelding i <b>O-klubben Rett Vest</b>:
<ul><li>Fornavn:<?php echo $navn; ?></font></li>
<li>Mobil:<?php echo $mobil; ?></font></li>
<li>E-post:<?php echo $epost; ?></font></li>
<li>Beskjed:<?php echo $beskjed; ?></font></li>
<li>Tur:<?php echo $tur; ?></font></li>
<li>Antall Personer:<?php echo $antallpersoner; ?>stk.</font></li></ul>