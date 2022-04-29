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
  <h2>CSE</h2>
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
      <td><a href="https://drive.google.com/file/d/1bf5gjVEgnRw5Bws2xbIq0fd3vdv6v7VX/view?usp=sharing">Formal Languages and Automata</a></td>
      <td>Peter Linz</td>
      <td><img src="automatapeter.png" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1r2dlmVH6lktJzOSiNzXbOdP8m3C-9YJC/view?usp=sharing">Learning OpenCV using Python</a></td>
      <td>Joe Minichino</td>
      <td><img src="opencvJoe.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1NL0AjBfuB8T_W6NgW4cYBafztqilFODu/view?usp=sharing">A Beginner's Guide to Gambas</a></td>
      <td>John W. Rittinghouse</td>
      <td><img src="gambasJohn.jpeg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1v_v0dFKGptWeQQCM8nLw1WGuA98LZHdy/view?usp=sharing">Digital Design</a></td>
      <td>M Morris Mano</td>
      <td><img src="digitalMorris.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/17-8_wflEfkEuM9cGRYH8OYI90LAmXnlM/view?usp=sharing">Programming With C</a></td>
      <td>Gottfried</td>
      <td><img src="programmingGottfried.jpeg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1AJ9MoDYClfp-xt5L1vwRxqqqmM1Fti_3/view?usp=sharing">Algorithms Made Easy</a></td>
      <td>Narashima Karumanchi</td>
      <td><img src="madeNarashima.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/11XPsprCLHJ4ow-KPqgYqO77MFc63-nSR/view?usp=sharing">Data Struture Through C</a></td>
      <td>Yashavant Kanetkar</td>
      <td><img src="datakanetkar.png" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/11jyAhwVxSiPXyrBQjRXzpS5EokECpFWd/view?usp=sharing">Computer System and Architecture</a></td>
      <td>Morris Mano</td>
      <td><img src="coaMorris.png" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/12ahE_PqsJOgn86camFGNYpkK3RwaV3KN/view?usp=sharing">Contemporary Abstract Algebra</a></td>
      <td>Joseph A Gallian</td>
      <td><img src="algebraSullivan.png" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1tzL-qeRxetgFLl28WI4UZFXUDbJ51l4C/view?usp=sharing">Introduction to Algorithm</a></td>
      <td>Thomas H Cormen</td>
      <td><img src="algorithmCormen.png" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1YNkbDV2-qXeY4uQSclwbKIbGe26op_DF/view?usp=sharing">Programming in HTML,CSS and JS</a></td>
      <td>Microsoft</td>
      <td><img src="htmlMicrosoft.jpg" width="100" height="100"></td>
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
