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
  <h2>General & Fiction</h2>
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
      <td><a href="https://drive.google.com/file/d/1VvSMo2usbneRS7TV5cXbH6Cd1U-1SiWM/view?usp=sharing">Kalidas Meghdoot</a></td>
      <td>Shakti Chattapadhay</td>
      <td><img src="kalidas.jpeg" width="100" height="100"></td>
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
      <td><a href="https://drive.google.com/file/d/1WXWFJ4pKnD8CCt7V3V1kG1zW2tyeE6Hw/view?usp=sharing">Arabian Nights</a></td>
      <td>Richard Burton</td>
      <td><img src="arabianNights.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1hrtfeYw1U6Mb-5rVzKdyTD7cdb-w9dG_/view?usp=sharing">So Good they can't Ignore You</a></td>
      <td>Carl Newport</td>
      <td><img src="ignoreCarl.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/12pRdkLgJCGCGjauazKKAJtuK_dzsmxsV/view?usp=sharing">The Magic Strings of Frankie Presto</a></td>
      <td>Mitch Albom</td>
      <td><img src="mitchAlbom.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1Q9-_wpduS9Tk0NcVUjVm8G7C84Zabk8Y/view?usp=sharing">Jonakidar Bari</a></td>
      <td>Samarjeet Chakraborty
      <td><img src="jonakiSamar.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1AhPL-QcJmo_driG5E6W8q9BwaU-i5c0q/view?usp=sharing">A Tale of Two Cities</a></td>
      <td>Charles Dickens
      <td><img src="citiesDickens.jpg" width="100" height="100"></td>
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
      <td><a href="https://drive.google.com/file/d/1xbz2jCFPHpXN7RJ_jU_juNz-Yp5xT6Ur/view?usp=sharing">Land of Five Rivers</a></td>
      <td>Kushwant Singh</td>
      <td><img src="landSingh.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1WcRWZwkbGJQtfoUVVYXfYCykDZCqnMBr/view?usp=sharing">Radio Silence</a></td>
      <td>Alice Oseman</td>
      <td><img src="radioAlice.jpeg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1MYMLrfeuW_sNBHFX45Dr9GgWyvS7ryc0/view?usp=sharing">The Belated Bachelor Party</a></td>
      <td>Alice Oseman</td>
      <td><img src="bachelorRavinder.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1OUrE7EHC10_aqYd2OTyljSOBpRHuUSsT/view?usp=sharing">The 5am Club</a></td>
      <td>Robin Sharma</td>
      <td><img src="clubRobin.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1WnYNVxwtHWhDZT0vKSDaoUol4mEam5sX/view?usp=sharing">Balika Bodhu</a></td>
      <td>Bimal Kar</td>
      <td><img src="balikaBimal.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1-21E6ph330UqKKckk-lSzJNzTmb-VXnr/view?usp=sharing">Sahibs who Loved India</a></td>
      <td>Khushwant Singh</td>
      <td><img src="sahibsKhushwant.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1bL6TWRVcjFR_RW21VphrWqC_BU9O1cLE/view?usp=sharing">The Good,the Bad and the Ridiculous</a></td>
      <td>Khushwant Singh</td>
      <td><img src="goodKhushwant.jpg" width="100" height="100"></td>
    </tr><tr>
      <td><a href="https://drive.google.com/file/d/1LtSRSU-IkKPnaq4_aJUEDfnXUPCWmJb7/view?usp=sharing">The Subtle Art of not Giving a F*ck</a></td>
      <td>Mark Manson</td>
      <td><img src="artManson.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1PP9-IRCJ7dO1_YNlK-JSSxWpXL8hA8ei/view?usp=sharing">What Every Body is Saying</a></td>
      <td>Joe Navarro</td>
      <td><img src="whatJoe.jpg" width="100" height="100"></td>
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