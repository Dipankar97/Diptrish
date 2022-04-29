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
  <h2>Medical</h2>
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
      <td><a href="https://drive.google.com/file/d/1FiSoTrQFL7uFcnh8JfJK4l9FaKOxTpwD/view?usp=sharing">Essential Orthpaedics</a></td>
      <td>Maheswari & Mhaskar</td>
      <td><img src="orthoMahesh.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1gS3qoH11ADo9wwzjp248gCVCm2LMemZ5/view?usp=sharing">Harrison's Principles of Internal Medicine</a></td>
      <td>Harrison</td>
      <td><img src="princeHarrison.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1WDBcHTHuXBXv2lIZT9LwEgElt0wqt94q/view?usp=sharing">Human Anatomy Vol 1</a></td>
      <td>BD Chaurasia</td>
      <td><img src="anatomyBd.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1OF9AW0cmKhWbVTh_Q1slD99IUqDltn6Q/view?usp=sharing">Biochemistry</a></td>
      <td>Satnarayan</td>
      <td><img src="biochemistrySat.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1rqgAYu5H4m1pgtmNFj4Z9QIb6A3OwEVl/view?usp=sharing">Guyton and Hall Textbook of Medical Physiology</a></td>
      <td>John E.Hall</td>
      <td><img src="guytonMedical.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1BJkYBs8DNllAx2BJbfVKuBmqiM1hRZkM/view?usp=sharing">Organic Evoluion</a></td>
      <td>Veer Bala Rastogi</td>
      <td><img src="veerBal.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1gD7_30yEeic5dHvhOp3FhUgR05DOh9ZF/view?usp=sharing">Paniker's Medical Parasitology</a></td>
      <td>Sougata Ghosh</td>
      <td><img src="medicalSougata.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1NTQuBN53x3FfRqqcyHgoBIdgoJAluQQe/view?usp=sharing">Life Science Fundamental and Practice 2</a></td>
      <td>Pranav Kumar & Usha Mina</td>
      <td><img src="fundamentalUsha.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1tTTTvXuEvX-usQjCn_8nrHHccYMwyWdR/view?usp=sharing">Ananthanarayan and Paniker's Textbook of Microbiology</a></td>
      <td>Reba Kanungo</td>
      <td><img src="microbiologyPaniker.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1lUY2vUCGhjiRUkiaY-AbwRYBY3eqYv4f/view?usp=sharing">Textbook Of Human Neuroanatomy</a></td>
      <td>Inderbir Singh</td>
      <td><img src="humanInderbir.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1iOJ33dBJ_Uv9NBWSi-lWcB40lJBVkUz0/view?usp=sharing">Human Oestology</a></td>
      <td>Tim D. White, Michael T. Black & Pieter A. Folkens</td>
      <td><img src="humanTim.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1UXNlImlDY3JXPZgv71HxwbyeYWJJrmjy/view?usp=sharing">Lippincott's Biochemistry</a></td>
      <td>Denise R.Ferrier</td>
      <td><img src="biochemistryLippincotts.jpg" width="100" height="100"></td>
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