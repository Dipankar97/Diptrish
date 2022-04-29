<?php
  include "co.inc";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>

<div class="jumbotron">
  <h2>Arts</h2>
</div>



<div class="container">
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
  <table id="myTable">
    <tr class="header">
      <th style="width:60%;">Name</th>
      <th style="width:20%;">Writer</th>
      <th style="width:20%;">Book</th>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1lUt8mkeKIpkeXHPTfLU-jNCHIpnDH3Sy/view?usp=sharing">Pencil Drawing Techniques</a></td>
      <td>David Lewis
      <td><img src="pt.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1VTsI2wUVkUnBqZu01s259BCVQkLxw_jb/view?usp=sharing">Mughal Empire 1 (Bengali)</a></td>
      <td>Alex Rutherford</td>
      <td><img src="mughal1.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1px3yS4T_FCJamZ5LzGj_SeZXlVClkJyq/view?usp=sharing">Mughal Empire 2 (Bengali)</a></td>
      <td>Alex Rutherford</td>
      <td><img src="mughal2.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1Pq-5GoF47zGPdEBdYpAOhawZ-4fBGOiF/view?usp=sharing">Mughal Empire 3 (Bengali)</a></td>
      <td>Alex Rutherford</td>
      <td><img src="mughal3.jpeg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1WP5xcTvACNtq2qhXXRLMM4Cvr9UwhO0f/view?usp=sharing">Mughal Empire 4 (Bengali)</a></td>
      <td>Alex Rutherford</td>
      <td><img src="mughal4.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1ijUBUlCM9VZ-aNgpPZSb3G2dbwKgVGlI/view?usp=sharing">Mughal Empire 5 (Bengali)</a></td>
      <td>Alex Rutherford</td>
      <td><img src="mughal5.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/106z2OpE2pY-0RO3aUCZyV2NyAolXMFJf/view?usp=sharing">AGHORA</a></td>
      <td>Robert Svoboda</td>
      <td><img src="aghora.jpg" width="100" height="100"></td>
    </tr>
  </table>
</div>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>