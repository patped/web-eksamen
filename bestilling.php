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
          <li><a id="activeButton" href="bestilling.html">Bestilling</a></li>
        </ul>
      </nav>
    </div>

    <header id="bestillingHeader">
      <h1>Nordland turbestilling</h1>
    </header>

    <main>
      <div class="bestillingContainer">
        <?php if ($_SERVER['REQUEST_METHOD'] === 'GET'): ?>
          <form name="form1" method="post" action="bestilling.php">
            <h3>Hvem tur vill du bestille?</h3>
            <br>
            <br>
            <input type="radio" name="tur" value="nordlys">Nordlys jakten i høstferien (18000kr pr pers)
            <br>
            <input type="radio" name="tur" value="hundekjoring">Hundekjøring for de spreke (15000kr pr pers)
            <br>
            <input type="radio" name="tur" value="safari">Artisk dyreliv safari (12000kr pr pers)
            <br>
            <input type="radio" name="tur" value="rave">Nordlys rave på nyttårsaften (8000kr pr pers)
            <br>
            <br>
            <label>Antall Personer:</label>
            <br>
            <select name="antallpersoner">
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
                <tr><td><textarea id="beskjed"></textarea></td></tr>
              </tbody>
            </table>
            <br>
            Totalpris: <span id="totalpris"></span>
            <br>
            <br>
            <input type="submit" class="bestillingButton">
          </form>
        <?php else if($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
          POST
        <?php endif; ?>
      </div>

      <footer>
        <p>
          &copy;Nordland turist og informasjonsbyrå AS
          Tlf: <a href="tel:+4722225555">+47 2222-5555 </a>
          E-mail: <a href="mailto:post@nordlysinordland.no">post@nordlysinordland.no</a>
        </p>
      </footer>

    </main>

    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/menu.js"></script>

    <script>

      var num_people = false;
      var trip_price = false;
      var tot_trip_price = false;

      function updatetotalprice() {
        if (num_people && trip_price) {
          tot_trip_price = trip_price * num_people;
          $('#totalpris').text(tot_trip_price);
        } else {
          $('#totalpris').text('Velg antall personer og tur for å se totalpris');
        }
      }

      $("input[name='tur']").on("change", function () {
        if (this.value == 'nordlys') {
          trip_price = 18000;
        } else if (this.value == 'hundekjoring') {
          trip_price = 15000;
        } else if (this.value == 'safari') {
          trip_price = 12000;
        } else if (this.value == 'rave') {
          trip_price = 8000;
        } else {
          trip_price = false;
        }
        updatetotalprice();
      });

      $("select[name='antallpersoner']").on("change", function () {
        num_people = parseInt(this.value);
        if(!isNaN(num_people)) {
          num_people = this.value;
        } else {

          num_people = false;
          tot_trip_price = false;
        }
        updatetotalprice();
      });

      updatetotalprice();

    </script>

  </body>
</html>
