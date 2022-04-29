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
  <h2>Action & Thriller</h2>
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
      <td><a href="https://drive.google.com/file/d/1dX5N3yGM3mjuShzUOckOeonkh5MgJARD/view?usp=sharing">Girl in Room no.105</a></td>
      <td>Chetan Bhagat</td>
      <td><img src="Girl_in_room_105.png" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/19qiBxDDzbXY2hXp2CFy6KEzr8uVC0AFs/view?usp=sharing">The Alchemist</a></td>
      <td>Paulo Coelho</td>
      <td><img src="theAlhemist.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1CeZ7C3Vi6OnUWG7ixTy6_HixUsU8gu5D/view?usp=sharing">Harry Potter and the Cursed Child</a></td>
      <td>Jk Rowling</td>
      <td><img src="cursedChild.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1gJE_DNI6jjdofm7T6k_jy0pzKF0bKisI/view?usp=sharing">The Twilight Saga</a></td>
      <td>Stephenie Meyer</td>
      <td><img src="twilightSaga.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/12dNwS-PYtadyTx21KH1a4PObg0pkRlvo/view?usp=sharing">Feluda Samagra 1</a></td>
      <td>Satayajit Ray</td>
      <td><img src="feludaSamagra.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1HnCvgnhLkiZvhEslK-s-e5Tc5YRoJ6GU/view?usp=sharing">Feluda Samagra 2</a></td>
      <td>Satayajit Ray</td>
      <td><img src="feludaSmagra2.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1BSdC1Uqci1Ci1SF0p66wg5qS_UW-pWr5/view?usp=sharing">Grandma's Bag of Stories</a></td>
      <td>Sudha Murty</td>
      <td><img src="storiesBag.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1pCddZ5jHvm0x2bKdV6msFpc8p_FrQ1gu/view?usp=sharing">Selected Short Stories</a></td>
      <td>O Henry</td>
      <td><img src="selectedHenry.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1WXWFJ4pKnD8CCt7V3V1kG1zW2tyeE6Hw/view?usp=sharing">Arabian Nights</a></td>
      <td>Richard Burton</td>
      <td><img src="arabianNights.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1f2FnqO8A4jhMBcxxtgsUnox6jmm9D06Q/view?usp=sharing">Long Bright River</a></td>
      <td>Liz Moore</td>
      <td><img src="riverMoore.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1i-e2EvaHG-WEnBO9a1QHPtk85B05mm38/view?usp=sharing">By the River Piedra I Sat Down and Wept</a></td>
      <td>Coelho Paulo</td>
      <td><img src="riverPaulo.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1CJx5sLyUrI044rCx3gk9z2no4FLQV2_9/view?usp=sharing">The Glass Hotel</a></td>
      <td>Emily St. John Mandel</td>
      <td><img src="glassEmily.jpeg" width="100" height="100"></td>
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