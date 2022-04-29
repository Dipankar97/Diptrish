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
  <h2>Children</h2>
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
      <td><a href="https://drive.google.com/file/d/190liXHd4SADUJZwGLIk1WDZdTXN_kT-l/view?usp=sharing">The Night Train at Deoli</a></td>
      <td>Ruskin Bond</td>
      <td><img src="atDeoli.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1Xg3XGP6_mLhIwJmnZBPC3CRUnL-h4z0D/view?usp=sharing">Tenida Samagra</a></td>
      <td>Narayan Gangapadhay</td>
      <td><img src="tenidaSamagra.jpg" width="100" height="100"></td>
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
      <td><a href="https://drive.google.com/file/d/1a0gpqC9aeGFP3G_LpcRU-_usK84oGrrX/view?usp=sharing">The Magic of the Lost Temple</a></td>
      <td>Sudha Murty</td>
      <td><img src="templeSudha.jpg" width="100" height="100"></td>
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
      <td><a href="https://drive.google.com/file/d/1AhPL-QcJmo_driG5E6W8q9BwaU-i5c0q/view?usp=sharing">A Tale of Two Cities</a></td>
      <td>Charles Dickens
      <td><img src="citiesDickens.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1WXWFJ4pKnD8CCt7V3V1kG1zW2tyeE6Hw/view?usp=sharing">Arabian Nights</a></td>
      <td>Richard Burton</td>
      <td><img src="arabianNights.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1pQC_NNhBQSav1nr3rP6RwQHnXIBKW3iS/view?usp=sharing">Kishor Rachana Samagra 1</a></td>
      <td>Sanjeeb Chatopadhay</td>
      <td><img src="kishorSanjeeb.jpeg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/123ntmm5Owdbwc9kDkLsdFuzvY0D7u0Ip/view?usp=sharing">Kishor Rachana Samagra 2</a></td>
      <td>Sanjeeb Chatopadhay</td>
      <td><img src="kishorSanjeeb.jpeg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1KDWKQkfluqUeAmDAblee4L9TnIgiMxDa/view?usp=sharing">Kishor Rachana Samagra 3</a></td>
      <td>Sanjeeb Chatopadhay</td>
      <td><img src="kishorSanjeeb.jpeg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/14Pu79CuvHT0opBvxjPyzLSq3BA2_AV3z/view?usp=sharing">The Village by the Sea</a></td>
      <td>Anita Desai</td>
      <td><img src="villageAnita.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1xQNtjqSECtLVjsfuOmHruetd0LH_MJkX/view?usp=sharing">Train to Pakistan</a></td>
      <td>Kushwant Singh</td>
      <td><img src="trainSingh.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1n-yVdyx66wIxY50MFlKqzlJxFUWMQWVK/view?usp=sharing">Delhi a Novel</a></td>
      <td>Kushwant Singh</td>
      <td><img src="delhiSingh.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/17X4Hab0PtRi97BnjThYiheV93VmI6K-o/view?usp=sharing">Mahabharat(Bengali)</a></td>
      <td>Rajsekhar Basu</td>
      <td><img src="mahabharatBasu.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1ceLbzwnWt4sLTIvH6EnoQI1lDNeqAkN0/view?usp=sharing">Fire on the Mountain</a></td>
      <td>Anita Desai</td>
      <td><img src="fireAnita.jpg" width="100" height="100"></td>
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