<?php include 'header.php';?>

  <div class="htmlClass">
  </div>
  <script type="text/javascript" src="jquery-3.4.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
    integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
    integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
  </script>

<body>
  
</body>
  <div class="container">
  
    <div class="row">

      <div class="col-12">
        <table class="table">
          <thead>
            <tr>
              <th>ID Pegawai</th>
              <th>ID Pelatihan</th>
              <th>NIPP</th>
              <th>Bidang</th>
              <th>Nama Pegawai</th>
              <th>Lokasi Pegawai</th>
              <th>Substansi</th>
              <th>Kelas Jabatan</th>
              <th>Jenis Kelamin</th>
              <th>Durasi</th>
            </tr>
          </thead>
          <tbody>
            <tr>

            </tr>
          </tbody>
        </table>
      </div>    
      
    </div>

  </div>
  
</body>
<!-- Script Ajax Ambil Data -->
<script type="text/javascript">
    $("#diklatpelindo").click(function () {
      $.ajax({
        type: "POST",
        url: "model.php",
        data: {
          menu: "Diklatku"
        },
        dataType: "json",
        cache: false,
        success: function (data) {
          if (data) {
            console.log(data)
            // var data1 = jQuery.parseJSON(data);
            console.log(data[0])
            var len = data.length;
            var txt = '';
            // var txt ="<table cellpadding='10' cellspacing='0' border='1' id='myTable'><tr bgcolor='#CCCCCC'><th>ID Pegawai</th><th>ID Pelatihan</th><th>NIPP</th><th>Bidang</th><th>Nama Pegawai</tdh><th>Lokasi Pegawai</th><th>Substansi</th><th>Kelas Jabatan</th><th>Jenis Kelamin</th><th>Durasi</th></tr>";
            if (len > 0) {
              for (var i = 0; i < len; i++) {
                console.log(data[i])
                // var d=$.parseJSON(data[i])
                txt += "<tr><td>" + data[i].ID_PEGAWAI + "</td><td>" + data[i].ID_PELATIHAN + "</td><td>" +
                  data[i].NIPP + "</td><td>" + data[i].BIDANG + "</td><td>" + data[i].NAMA_PEGAWAI +
                  "</td><td>" + data[i].LOKASI_PEGAWAI + "</td><td>" + data[i].SUBSTANSI + "</td><td>" + data[
                    i].KELAS_JABATAN + "</td><td>" + data[i].JENIS_KELAMIN + "</td><td>" + data[i].DURASI +
                  "</td></tr>";

              }
              txt += "</table>"
              if (txt != "") {
                $('.table').html(txt);
              }
            }
          }
        }
      });
    });

    $("#pegawaipelindo").click(function () {
      $.ajax({
        type: "POST",
        url: "model.php",
        data: {
          menu: "Pegawaiku"
        },
        dataType: "json",
        cache: false,
        success: function (data) {
          if (data) {
            console.log(data)
            // var data1 = jQuery.parseJSON(data);
            console.log(data[0])
            var len = data.length;
            var txt =
              "<table cellpadding='7' cellspacing='0' border='1' id='myTable'><tr bgcolor='#CCCCCC'><th>ID Pegawai</th><th>NIPP</th><th>Nama Pegawai</th><th>Lokasi Pegawai</th><th>Substansi</th><th>Kelas Jabatan</th><th>Jenis Kelamin</th></tr>";
            if (len > 0) {
              for (var i = 0; i < len; i++) {
                console.log(data[i])
                // var d=$.parseJSON(data[i])
                txt += "<tr><td>" + data[i].ID_PEGAWAI + "</td><td>" + data[i].NIPP + "</td><td>" + data[i]
                  .NAMA_PEGAWAI + "</td><td>" + data[i].LOKASI_PEGAWAI + "</td><td>" + data[i].SUBSTANSI +
                  "</td><td>" + data[i].KELAS_JABATAN + "</td><td>" + data[i].JENIS_KELAMIN + "</td></tr>";

              }
              txt += "</table>"
              if (txt != "") {
                $('.htmlClass').html(txt);
              }
            }
          }
        }
      });
    });

    $("#pelatihanpelindo").click(function () {
      $.ajax({
        type: "POST",
        url: "model.php",
        data: {
          menu: "Pelatihanku"
        },
        dataType: "json",
        cache: false,
        success: function (data) {
          if (data) {
            console.log(data)
            // var data1 = jQuery.parseJSON(data);
            console.log(data[0])
            var len = data.length;
            var txt =
              "<table cellpadding='10' cellspacing='0' border='1' id='myTable'><tr bgcolor='#CCCCCC'><th>ID Pelatihan</th><th>Nama Pelatihan</th><th>ID Bidang</th><th>Tanggal Awal</th><th>Tanggal Akhir</th><th>Lokasi</th><th>Klasifikasi</th><th>Vendor</th><th>Durasi</th></tr>";
            if (len > 0) {
              for (var i = 0; i < len; i++) {
                console.log(data[i])
                // var d=$.parseJSON(data[i])
                txt += "<tr><td>" + data[i].ID_PELATIHAN + "</td><td>" + data[i].NAMA_PELATIHAN +
                  "</td><td>" + data[i].ID_BIDANG + "</td><td>" + data[i].TANGGAL_AWAL + "</td><td>" + data[i]
                  .TANGGAL_AKHIR + "</td><td>" + data[i].LOKASI + "</td><td>" + data[i].KLASIFIKASI +
                  "</td><td>" + data[i].VENDOR + "</td><td>" + data[i].DURASI + "</td></tr>";

              }
              txt += "</table>"
              if (txt != "") {
                $('.htmlClass').html(txt);
              }
            }
          }
        }
      });
    });

    function getBidang(nama_bidang) {
      $.ajax({
        type: "POST",
        url: "model.php",
        data: {
          bidang: nama_bidang
        },
        dataType: "json",
        cache: false,
        success: function (data) {
          if (data) {
            console.log(data)
            // var data1 = jQuery.parseJSON(data);
            console.log(data[0])
            var len = data.length;
            var txt =
              "<table cellpadding='9' cellspacing='0' border='1' id='myTable'><tr bgcolor='#CCCCCC'><th>ID Pelatihan</th><th>Nama Pelatihan</th><th>ID Bidang</th><th>Tanggal Awal</th><th>Tanggal Akhir</th><th>Klasifikasi</th><th>Vendor</th><th>Durasi</th><th>Bidang</th></tr>";
            if (len > 0) {
              for (var i = 0; i < len; i++) {
                console.log(data[i])
                // var d=$.parseJSON(data[i])
                txt += "<tr><td>" + data[i].ID_PELATIHAN + "</td><td>" + data[i].NAMA_PELATIHAN + "</td><td>" +
                  data[i].ID_BIDANG + "</td><td>" + data[i].TANGGAL_AWAL + "</td><td>" + data[i].TANGGAL_AKHIR +
                  "</td><td>" + data[i].KLASIFIKASI + "</td><td>" + data[i].VENDOR + "</td><td>" + data[i]
                  .DURASI + "</td><td>" + data[i].BIDANG + "</td></tr>";

              }
              txt += "</table>"
              if (txt != "") {
                $('.htmlClass').html(txt);
              }
            }
          }
        }
      });
    };

    $("#klikSDM").click(function () {
      getBidang('SDM')
    });

    $("#klikHSSE").click(function () {
      getBidang('HSSE')
    });

    $("#klikBIRO").click(function () {
      getBidang('BIRO PERENCANAAN')
    });

    $("#klikCM").click(function () {
      getBidang('CHANGE MANAGEMENT')
    });

    $("#klikOPERASIONAL").click(function () {
      getBidang('OPERASIONAL')
    });

    $("#klikSEKPER").click(function () {
      getBidang('SEKPER')
    });

    $("#klikPJUM").click(function () {
      getBidang('PJUM')
    });

    $("#klikHCM").click(function () {
      getBidang('HCM')
    });

    $("#klikFI").click(function () {
      getBidang('FI')
    });

    $("#klikCO").click(function () {
      getBidang('CO')
    });

    $("#klikPBJ").click(function () {
      getBidang('PBJ')
    });

    $("#klikSPPI").click(function () {
      getBidang('SPPI')
    });

    $("#klikSPI").click(function () {
      getBidang('SPI')
    });

    $("#klikPM").click(function () {
      getBidang('PM')
    });

    $("#klikMARKETING").click(function () {
      getBidang('MARKETING')
    });

    $("#klikKEUANGAN").click(function () {
      getBidang('KEUANGAN')
    });

    $("#klikSMMR").click(function () {
      getBidang('SMMR')
    });

    $("#klikHUKUM").click(function () {
      getBidang('HUKUM / LEGAL')
    });

    $("#klikTEKNIK").click(function () {
      getBidang('TEKNIK')
    });
  </script>

  <script>
    function myFunction() {
      // Declare variables 
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");

      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        for (j = 0; j < 9; j++) {
          td = tr[i].getElementsByTagName("td")[j];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
              break;
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
    }
  </script>
</html>