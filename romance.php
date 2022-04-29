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
  <h2>Romance</h2>
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
      <td><a href="https://drive.google.com/file/d/1s-CCfIs92Ch8kZxkPNWWFzoTAkInaX6e/view?usp=sharing">One Indian Girl</a></td>
      <td>Chetan Bhagat</td>
      <td><img src="oneIndianGirl.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1dX5N3yGM3mjuShzUOckOeonkh5MgJARD/view?usp=sharing">Girl in Room no.105</a></td>
      <td>Chetan Bhagat</td>
      <td><img src="Girl_in_room_105.png" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1CeZ7C3Vi6OnUWG7ixTy6_HixUsU8gu5D/view?usp=sharing">Harry Potter and the Cursed Child</a></td>
      <td>Jk Rowling</td>
      <td><img src="cursedChild.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/190liXHd4SADUJZwGLIk1WDZdTXN_kT-l/view?usp=sharing">The Night Train at Deoli</a></td>
      <td>Ruskin Bond</td>
      <td><img src="atDeoli.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1gJE_DNI6jjdofm7T6k_jy0pzKF0bKisI/view?usp=sharing">The Twilight Saga</a></td>
      <td>Stephenie Meyer</td>
      <td><img src="twilightSaga.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1WXWFJ4pKnD8CCt7V3V1kG1zW2tyeE6Hw/view?usp=sharing">Arabian Nights</a></td>
      <td>Richard Burton</td>
      <td><img src="arabianNights.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1Q9-_wpduS9Tk0NcVUjVm8G7C84Zabk8Y/view?usp=sharing">Jonakidar Bari</a></td>
      <td>Samarjeet Chakraborty
      <td><img src="jonakiSamar.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1i-e2EvaHG-WEnBO9a1QHPtk85B05mm38/view?usp=sharing">By the River Piedra I Sat Down and Wept</a></td>
      <td>Coelho Paulo</td>
      <td><img src="riverPaulo.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1WnYNVxwtHWhDZT0vKSDaoUol4mEam5sX/view?usp=sharing">Balika Bodhu</a></td>
      <td>Bimal Kar</td>
      <td><img src="balikaBimal.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1s-JnGxaFSaqmObzMwJQlcO2Dinka8Qoz/view?usp=sharing">Something I Never Told You</a></td>
      <td>Shravya Bhinder</td>
      <td><img src="somethingBhinder.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1L5nWhJJrRjHDtAEd2ONuB0Cx9BCv00Il/view?usp=sharing">Her Last Wish</a></td>
      <td>Ajay K Pandey</td>
      <td><img src="herAjay.jpg" width="100" height="100"></td>
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
