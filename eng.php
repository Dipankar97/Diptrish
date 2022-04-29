<?php
  include "co.inc";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>
</head>
<body>

<!-- MAIN (Center website) -->
<div class="main">

<h1>DIPTRISH</h1>
<a href="search.html"><button class="btn"><b>Search Bar</b></button></a>
<hr>

<h2>ENGINEERING LIBRARY</h2>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('computerscience')"> CSE</button>
  <button class="btn" onclick="filterSelection('electronics')"> EEE</button>
  <button class="btn" onclick="filterSelection('electrical')"> ECE</button>
  <button class="btn" onclick="filterSelection('mechanical')"> ME</button>
  <button class="btn" onclick="filterSelection('civil')"> CE</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column electronics">
    <div class="content">
      <a href="#"><img src="none.jpg" alt="Mountains" style="width:100%"></a>
      <h4>Mountains</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column electronics">
    <div class="content">
      <a href=https://drive.google.com/file/d/12ahE_PqsJOgn86camFGNYpkK3RwaV3KN/view?usp=sharing><img src="algebraSullivan.png" alt="Automata" style="width:100%"></a>
      <h4>Contemporary Abstract Algebra</h4>
      <p>written by Joseph A Gallian</p>
    </div>
  </div>
  <div class="column electronics">
    <div class="content">
      <a href="https://drive.google.com/file/d/1v_v0dFKGptWeQQCM8nLw1WGuA98LZHdy/view?usp=sharing"><img src="digitalMorris.jpg" alt="Automata" style="width:100%"></a>
      <h4>Digital Design</h4>
      <p>written by Morris Mano</p>
    </div>
  </div>
  <!-- EEE ends -->
  <div class="column electrical">
    <div class="content">
      <a href="#"><img src="none.jpg" alt="Car" style="width:100%"></a>
      <h4>Retro</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column electrical">
    <div class="content">
      <a href=https://drive.google.com/file/d/12ahE_PqsJOgn86camFGNYpkK3RwaV3KN/view?usp=sharing><img src="algebraSullivan.png" alt="Automata" style="width:100%"></a>
      <h4>Contemporary Abstract Algebra</h4>
      <p>written by Joseph A Gallian</p>
    </div>
  </div>
  <div class="column electrical">
    <div class="content">
      <a href="https://drive.google.com/file/d/1v_v0dFKGptWeQQCM8nLw1WGuA98LZHdy/view?usp=sharing"><img src="digitalMorris.jpg" alt="Automata" style="width:100%"></a>
      <h4>Digital Design</h4>
      <p>written by Morris Mano</p>
    </div>
  </div>
  <!-- ECE ends -->
  <div class="column mechanical">
    <div class="content">
      <a href="#"><img src="none.jpg" alt="People" style="width:100%"></a>
      <h4>Girl</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column mechanical">
    <div class="content">
      <a href=https://drive.google.com/file/d/12ahE_PqsJOgn86camFGNYpkK3RwaV3KN/view?usp=sharing><img src="algebraSullivan.png" alt="Automata" style="width:100%"></a>
      <h4>Contemporary Abstract Algebra</h4>
      <p>written by Joseph A Gallian</p>
    </div>
  </div>
  <!-- ME ends -->
  <div class="column civil">
    <div class="content">
      <a href="#"><img src="none.jpg" alt="People" style="width:100%"></a>
      <h4>Girl</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column civil">
    <div class="content">
      <a href=https://drive.google.com/file/d/12ahE_PqsJOgn86camFGNYpkK3RwaV3KN/view?usp=sharing><img src="algebraSullivan.png" alt="Automata" style="width:100%"></a>
      <h4>Contemporary Abstract Algebra</h4>
      <p>written by Joseph A Gallian</p>
    </div>
  </div>
  <!-- CIVIL ends -->
  <div class="column computerscience">
    <div class="content">
      <a href="https://drive.google.com/file/d/1bf5gjVEgnRw5Bws2xbIq0fd3vdv6v7VX/view?usp=sharing"><img src="automatapeter.png" alt="Automata" style="width:100%"></a>
      <h4>Formal Languages and Automata</h4>
      <p>written by Peter Linz</p>
    </div>
  </div>
  <div class="column computerscience">
    <div class="content">
      <a href=https://drive.google.com/file/d/11XPsprCLHJ4ow-KPqgYqO77MFc63-nSR/view?usp=sharing><img src="datakanetkar.png" alt="Automata" style="width:100%"></a>
      <h4>Data Structure Through C</h4>
      <p>written by Yashavant Kanetkar</p>
    </div>
  </div>
  <div class="column computerscience">
    <div class="content">
      <a href=https://drive.google.com/file/d/1Lw0RcTI3yBv8WWY5S5JC7-8NrPfvLJzY/view?usp=sharing><img src="coaMorris.png" alt="Automata" style="width:100%"></a>
      <h4>COA</h4>
      <p>written by Morris Mano</p>
    </div>
  </div>
  <div class="column computerscience">
    <div class="content">
      <a href=https://drive.google.com/file/d/12ahE_PqsJOgn86camFGNYpkK3RwaV3KN/view?usp=sharing><img src="algebraSullivan.png" alt="Automata" style="width:100%"></a>
      <h4>Contemporary Abstract Algebra</h4>
      <p>written by Joseph A Gallian</p>
    </div>
  </div>
  <div class="column computerscience">
    <div class="content">
      <a href=https://drive.google.com/file/d/1tzL-qeRxetgFLl28WI4UZFXUDbJ51l4C/view?usp=sharing><img src="algorithmCormen.png" alt="Automata" style="width:100%"></a>
      <h4>Introduction to Algorithm</h4>
      <p>written by Thomas H Cormen</p>
    </div>
  </div>
  <div class="column computerscience">
    <div class="content">
      <a href="https://drive.google.com/file/d/1AJ9MoDYClfp-xt5L1vwRxqqqmM1Fti_3/view?usp=sharing"><img src="madeNarashima.jpg" alt="Automata" style="width:100%"></a>
      <h4>Algorithms Made Easy</h4>
      <p>written by Narashima Karumanchi</p>
    </div>
  </div>
  <div class="column computerscience">
    <div class="content">
      <a href="https://drive.google.com/file/d/17-8_wflEfkEuM9cGRYH8OYI90LAmXnlM/view?usp=sharing"><img src="programmingGottfried.jpeg" alt="Automata" style="width:100%"></a>
      <h4>Programming With C</h4>
      <p>written by Gottfried</p>
    </div>
  </div>
  <div class="column computerscience">
    <div class="content">
      <a href="https://drive.google.com/file/d/1v_v0dFKGptWeQQCM8nLw1WGuA98LZHdy/view?usp=sharing"><img src="digitalMorris.jpg" alt="Automata" style="width:100%"></a>
      <h4>Digital Design</h4>
      <p>written by Morris Mano</p>
    </div>
  </div>
  <div class="column computerscience">
    <div class="content">
      <a href="https://drive.google.com/file/d/1NL0AjBfuB8T_W6NgW4cYBafztqilFODu/view?usp=sharing"><img src="gambasJohn.jpeg" alt="Automata" style="width:100%"></a>
      <h4>Guide to Gambas</h4>
      <p>John W. Rittinghouse</p>
    </div>
  </div>
  <div class="column computerscience">
    <div class="content">
      <a href="https://drive.google.com/file/d/1r2dlmVH6lktJzOSiNzXbOdP8m3C-9YJC/view?usp=sharing"><img src="opencvJoe.jpg" alt="Automata" style="width:100%"></a>
      <h4>Learning OpenCV</h4>
      <p>Joe Minichino</p>
    </div>
  </div>
  <div class="column computerscience">
    <div class="content">
      <a href="https://drive.google.com/file/d/1YNkbDV2-qXeY4uQSclwbKIbGe26op_DF/view?usp=sharing"><img src="htmlMicrosoft.jpg" alt="Automata" style="width:100%"></a>
      <h4>Programming in HTML,CSS and JS</h4>
      <p>Microsoft</p>
    </div>
  </div>
  <!-- Computer science ends -->
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>
