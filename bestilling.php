<?php error_reporting(E_ALL); ?>
<!DOCTYPE html>
<html lang="nb">

  <head>
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
    <meta name="description" content="Nordland, er reise destinasjon nr. 1 for å oppleve nordlys, arktiske dyreliv, hundekjøring, fest og familieferie">
    <title>Bestill din tur til Nordland her</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" >
  </head>

  <body>

    <div id="menubar">
     <nav>
        <button id="show_menu">Meny</button>
        <ul id='manu_container'>
          <li><a href="index.html">Hjem</a></li>
          <li><a href="galleri.html">Bilde Galleri</a></li>
          <li><a href="tur.html">Tur Info</a></li>
          <li><a id="activeButton" href="bestilling.php">Bestilling</a></li>
        </ul>
      </nav>
    </div>

    <header id="bestillingHeader">
      <h1>Nordland turbestilling</h1>
    </header>

    <main>
      <div class="bestillingContainer">
        <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') { ?>
          <form name="form1" method="post" action="bestilling.php">
            <h3>Hvem tur vill du bestille?</h3>
            <br>
            <br>
            <input type="radio" name="tur" required value="nordlys">Nordlys jakten i høstferien (18000kr pr pers)
            <br>
            <input type="radio" name="tur" required value="hundekjoring">Hundekjøring for de spreke (15000kr pr pers)
            <br>
            <input type="radio" name="tur" required value="safari">Artisk dyreliv safari (12000kr pr pers)
            <br>
            <input type="radio" name="tur" required value="rave">Nordlys rave på nyttårsaften (8000kr pr pers)
            <br>
            <br>
            <label>Antall Personer:</label>
            <br>
            <select required name="antallpersoner">
              <option value="false">Velg antall personer</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
            <br>
            <br>
            <h3>
              Skriv inn navn, nr og epost på kontakt person.
            </h3>
            <br>
            <br>
            <table id="bestillingskjema">

              <thead><tr><th id="person">Ansvarlig</th><td></td></tr></thead>

              <tbody>

                <tr>
                  <td><label for="navn">Navn</label></td>
                  <td><input id="navn" required type="text" name="navn" placeholder="Fornavn og Etternavn"></td>
                </tr>

                <tr>
                  <td><label for="mobil">Mobil</label></td>
                  <td><input id="mobil" required type="tel" name="mobil" placeholder="8-siffer"></td>
                </tr>

                <tr>
                  <td><label for="epost">E-Mail</label></td>
                  <td><input id="epost" required type="email" name="epost" placeholder="E-postadresse"></td>
                </tr>

              </tbody>

            </table>

            <br>

            <table id="bestillingskjema_beskjed">

              <tbody>
                <tr><td>Gi oss gjerne en beskjed hvis det er noe ekstra du lurer på:</td></tr>
                <tr><td><textarea id="beskjed" name="beskjed"></textarea></td></tr>
              </tbody>
            </table>
            <br>
            Totalpris: <span id="totalpris"></span>
            <br>
            <br>
            <input type="submit" class="bestillingButton">
          </form>

          <?php } else if($_SERVER['REQUEST_METHOD'] === 'POST') { ?>
            <?php
              $navn = $_POST['navn'];
              $mobil = $_POST['mobil'];
              $epost = $_POST['epost'];
              $beskjed = $_POST['beskjed'];
              $antallpersoner = (int) $_POST['antallpersoner'];
              $tur = $_POST['tur'];

              if ($tur == 'nordlys') {
                $tur_navn = 'Nordlys jakten i høstferien';
              } else if ($tur == 'hundekjoring') {
                $tur_navn = 'Hundekjøring for de spreke';
              } else if ($tur == 'safari') {
                $tur_navn = 'Artisk dyreliv safari';
              } else if ($tur == 'rave') {
                $tur_navn = 'Nordlys rave på nyttårsaften';
              }

              if ($tur == 'nordlys') {
                $tur_pris = 18000;
              } else if ($tur == 'hundekjoring') {
                $tur_pris = 15000;
              } else if ($tur == 'safari') {
                $tur_pris = 12000;
              } else if ($tur == 'rave') {
                $tur_pris = 8000;
              }

              $tot_pris = $antallpersoner * $tur_pris;
            ?>

            <p>Hei <?php echo $navn; ?>!
            <br>
            <br>
            Dette er din kvitering:
            <br>
            <br>
            <ul>
              <li>Fornavn:&nbsp;<?php echo $navn; ?></li>
              <li>Mobil:&nbsp;<?php echo $mobil; ?></li>
              <li>E-post:&nbsp;<?php echo $epost; ?></li>
              <li>Beskjed:&nbsp;<?php echo $beskjed; ?></li>
              <li>Tur:&nbsp;<?php echo $tur_navn; ?></li>
              <li>Antall Personer:&nbsp;<?php echo $antallpersoner; ?>stk.</li>
              <li>Pris  per pers&nbsp;<?php echo $tur_pris; ?>kr. Totalt:&nbsp;<?php echo $tot_pris; ?>kr.</li>

            </ul>
          <?php } ?>
      </div>

      <footer>
        <p>
          &copy;Nordland turist og informasjonsbyrå AS
          Tlf: <a href="tel:+4722225555">+47 2222-5555 </a>
          E-mail: <a href="mailto:post@nordlysinordland.no">post@nordlysinordland.no</a>
        </p>
      </footer>

    </main>

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/bestilling.js"></script>

  </body>
</html>
