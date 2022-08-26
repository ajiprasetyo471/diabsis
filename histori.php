<?php include "connect.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <title>HISTORI | DIABSIS</title>
</head>

<body onload="makeTableScroll();">

  <head>
    <?php include "header.php" ?>
  </head>
  <main class="container">
    <!--  -->
    <div class="row mt-5"></div>
    <div class="col-lg-12">
      <h2 class="heading-title display-5 fw-bold blue-text text-center my-5">Histori Diagnosa Diabetes</h2>
      <div class="scrollingTable">
        <table class="table table-bordered histori" id="myTable">
          <tr>
            <div class="div-histori-panjang">
              NAMA
            </div>
            <div class="div-histori">
              UMUR
            </div>
            <div class="div-histori">
              OGTT
            </div>
            <div class="div-histori">
              DBP
            </div>
            <div class="div-histori">
              INS
            </div>
            <div class="div-histori">
              BMI
            </div>
            <div class="div-histori-panjang">
              HASIL
            </div>
            <div class="div-histori-panjang">
              DATE
            </div>
          </tr>
          <tbody id="tabel-histori" style="display: flex; flex-direction:column-reverse;">
          </tbody>
        </table>
      </div>
    </div>
    </div>
    <!--  -->
  </main>
  <footer class="footer py-4">
    <?php include "footer.php" ?>
  </footer>
  <script src="script.js"></script>
  <script>
  window.addEventListener('resize', function() {
    "use strict";
    window.location.reload();
  });

  function makeTableScroll() {
    var maxRows = 8;

    var table = document.getElementById('myTable');
    var wrapper = table.parentNode;
    var rowsInTable = table.rows.length;
    var height = 0;
    if (rowsInTable > maxRows) {
      for (var i = 0; i < maxRows; i++) {
        height += table.rows[i].clientHeight;
      }
      wrapper.style.height = height + "px";
    }
  }

  function refreshDataFromData() {
    const serializeData = localStorage.getItem(STORAGE_KEY);
    let data = JSON.parse(serializeData);
    const dataContainer = document.getElementById('tabel-histori');
    for (item of data) {
      const newData = makeData(item.nama, item.hasil, item.ogtt, item.dbp, item.ins, item.bmi, item.age, item.date);
      newData[DATA_ITEMID] = item.id;
      dataContainer.append(newData);
    }
  }

  function makeData(nama, hasil, ogtt, dbp, ins, bmi, age, date) {
    const namaV = document.createElement("div");
    namaV.innerText = nama;
    namaV.classList.add("div-histori-panjang");
    const ageV = document.createElement("div");
    ageV.innerText = age;
    ageV.classList.add("div-histori");
    const ogttV = document.createElement("div");
    ogttV.innerText = ogtt;
    ogttV.classList.add("div-histori");
    const dbpV = document.createElement("div");
    dbpV.innerText = dbp;
    dbpV.classList.add("div-histori");
    const insV = document.createElement("div");
    insV.innerText = ins;
    insV.classList.add("div-histori");
    const bmiV = document.createElement("div");
    bmiV.innerText = bmi;
    bmiV.classList.add("div-histori");
    const hasilV = document.createElement("div");
    hasilV.innerText = hasil;
    hasilV.classList.add("div-histori-panjang");
    const dateV = document.createElement("div");
    dateV.innerText = date;
    dateV.classList.add("div-histori-panjang");

    const itemContainer = document.createElement("tr");
    itemContainer.append(namaV, ageV, ogttV, dbpV, insV, bmiV, hasilV, dateV);

    return itemContainer;
  }

  refreshDataFromData();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
  </script>
</body>

</html>