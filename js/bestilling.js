      var ant_pers = false;
      var tur_pris = false;
      var tot_tur_pris = false;

      function update_tot_pris() {
        if (ant_pers && tur_pris) {
          tot_tur_pris = tur_pris * ant_pers;
          $('#totalpris').text(tot_tur_pris);
        } else {
          $('#totalpris').text('Velg antall personer og tur for å se totalpris');
        }
      }

      $("input[name='tur']").on("change", function () {
        if (this.value == 'nordlys') {
          tur_pris = 18000;
        } else if (this.value == 'hundekjoring') {
          tur_pris = 15000;
        } else if (this.value == 'safari') {
          tur_pris = 12000;
        } else if (this.value == 'rave') {
          tur_pris = 8000;
        } else {
          tur_pris = false;
        }
        update_tot_pris();
      });

      $("select[name='antallpersoner']").on("change", function () {
        ant_pers = parseInt(this.value);
        if(!isNaN(ant_pers)) {
          ant_pers = this.value;
        } else {

          ant_pers = false;
          tot_tur_pris = false;
        }
        update_tot_pris();
      });

      update_tot_pris();