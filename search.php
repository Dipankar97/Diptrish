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
  <h2>All Books</h2>
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
      <td><a href="https://drive.google.com/file/d/1AJ9MoDYClfp-xt5L1vwRxqqqmM1Fti_3/view?usp=sharing">Formal Languages and Automata</a></td>
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
      <td><img src="coaMorris.png" width="100" height="100"></td>
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
      <td><a href="https://drive.google.com/file/d/1Lw0RcTI3yBv8WWY5S5JC7-8NrPfvLJzY/view?usp=sharing">Computer System and Architecture</a></td>
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
      <td><a href="https://drive.google.com/file/d/1YNkbDV2-qXeY4uQSclwbKIbGe26op_DF/view?usp=sharing">Programming in HTML,CSS and JS</a></td>
      <td>Microsoft</td>
      <td><img src="htmlMicrosoft.jpg" width="100" height="100"></td>
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
      <td><a href="https://drive.google.com/file/d/106z2OpE2pY-0RO3aUCZyV2NyAolXMFJf/view?usp=sharing">AGHORA</a></td>
      <td>Robert Svoboda</td>
      <td><img src="aghora.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1lUt8mkeKIpkeXHPTfLU-jNCHIpnDH3Sy/view?usp=sharing">Pencil Drawing Techniques</a></td>
      <td>David Lewis
      <td><img src="pt.jpg" width="100" height="100"></td>
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
      <td><a href="https://drive.google.com/file/d/14Pu79CuvHT0opBvxjPyzLSq3BA2_AV3z/view?usp=sharing">The Village by the Sea</a></td>
      <td>Anita Desai</td>
      <td><img src="villageAnita.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1OUrE7EHC10_aqYd2OTyljSOBpRHuUSsT/view?usp=sharing">The 5am Club</a></td>
      <td>Robin Sharma</td>
      <td><img src="clubRobin.jpg" width="100" height="100"></td>
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
    <tr>
      <td><a href="https://drive.google.com/file/d/1L5nWhJJrRjHDtAEd2ONuB0Cx9BCv00Il/view?usp=sharing">Her Last Wish</a></td>
      <td>Ajay K Pandey</td>
      <td><img src="herAjay.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1CJx5sLyUrI044rCx3gk9z2no4FLQV2_9/view?usp=sharing">The Glass Hotel</a></td>
      <td>Emily St. John Mandel</td>
      <td><img src="glassEmily.jpeg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1s-JnGxaFSaqmObzMwJQlcO2Dinka8Qoz/view?usp=sharing">Something I Never Told You</a></td>
      <td>Shravya Bhinder</td>
      <td><img src="somethingBhinder.jpg" width="100" height="100"></td>
    </tr>
    <tr>
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
      <td><a href="https://drive.google.com/file/d/1bL6TWRVcjFR_RW21VphrWqC_BU9O1cLE/view?usp=sharing">The Good,the Bad and the Ridiculous</a></td>
      <td>Khushwant Singh</td>
      <td><img src="goodKhushwant.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1-21E6ph330UqKKckk-lSzJNzTmb-VXnr/view?usp=sharing">Sahibs who Loved India</a></td>
      <td>Khushwant Singh</td>
      <td><img src="sahibsKhushwant.jpg" width="100" height="100"></td>
    </tr>
    <tr>
      <td><a href="https://drive.google.com/file/d/1WnYNVxwtHWhDZT0vKSDaoUol4mEam5sX/view?usp=sharing">Balika Bodhu</a></td>
      <td>Bimal Kar</td>
      <td><img src="balikaBimal.jpg" width="100" height="100"></td>
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
