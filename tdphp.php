<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Machine Virtuelle</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<style>


body {

  margin: 30px;
  font-family: Courier New, monospace;
  }

#fontSizeWrapper { font-size: 16px; }

#fontSize {
  width: 100px;
  font-size: 1em;
  }

/* ————————————————————–
  Tree core styles
*/
.tree { margin: 1em; }

.tree input {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  }

.tree input ~ ul { display: none; }

.tree input:checked ~ ul { display: block; }

/* ————————————————————–
  Tree rows
*/
.tree li {
  line-height: 1.2;
  position: relative;
  padding: 0 0 1em 1em;
  }

.tree ul li { padding: 1em 0 0 1em; }

.tree > li:last-child { padding-bottom: 0; }

/* ————————————————————–
  Tree labels
*/
.tree_label {
  position: relative;
  display: inline-block;
  background: #fff;
  }

label.tree_label { cursor: pointer; }

label.tree_label:hover { color: #666; }

/* ————————————————————–
  Tree expanded icon
*/
label.tree_label:before {
  background: #000;
  color: #fff;
  position: relative;
  z-index: 1;
  float: left;
  margin: 0 1em 0 -2em;
  width: 1em;
  height: 1em;
  border-radius: 1em;
  content: '+';
  text-align: center;
  line-height: .9em;
  }

:checked ~ label.tree_label:before { content: '–'; }

/* ————————————————————–
  Tree branches
*/
.tree li:before {
  position: absolute;
  top: 0;
  bottom: 0;
  left: -.5em;
  display: block;
  width: 0;
  border-left: 1px solid #777;
  content: "";
  }

.tree_label:after {
  position: absolute;
  top: 0;
  left: -1.5em;
  display: block;
  height: 0.5em;
  width: 1em;
  border-bottom: 1px solid #777;
  border-left: 1px solid #777;
  border-radius: 0 0 0 .3em;
  content: '';
  }

label.tree_label:after { border-bottom: 0; }

:checked ~ label.tree_label:after {
  border-radius: 0 .3em 0 0;
  border-top: 1px solid #777;
  border-right: 1px solid #777;
  border-bottom: 0;
  border-left: 0;
  bottom: 0;
  top: 0.5em;
  height: auto;
  }

.tree li:last-child:before {
  height: 1em;
  bottom: auto;
  }

.tree > li:last-child:before { display: none; }

.tree_custom {
  display: block;
  background: #eee;
  padding: 1em;
  border-radius: 0.3em;
}

mark{
	background-color: orange;
        color: black;
	padding: 3px;
	border-radius: 6px;
	
}

#mr{
	background-color: red;
        color: black;
	padding: 3px;
	border-radius: 6px;
	
}
#div{
	padding-top :150px;
}
#footerdiv{
	background-color: grey;color: black;padding: 6px;border-radius: 6px;
	margin-right: 1010px;
	
	
	
}


</style>



<body>

<p><h1 id="titre">Exercices PHP</h1></p>
<p id="footer">---------------------------------------------------------------------------------------------</p>


  <ul class="tree">
    <li>
      <input type="checkbox"  id="c1" />
      <label class="tree_label" for="c1">S02 TO1 SN1</label>
      <ul>
        <li>
          <input type="checkbox" checked="checked" id="2" />
          <label for="c2" class="tree_label" onclick="window.location.href='PHP/S02_TO1_SN1/exercice1.php'" style="color: green";>Exercice 1</label>
        </li>
        <li>
          <input type="checkbox" checked="checked" id="2" />
          <label for="c2" class="tree_label" onclick="window.location.href='PHP/S02_TO1_SN1/php/exercice2.php'" style="color: green";>Exercice 2</label>
        </li>
        <li>
          <input type="checkbox" checked="checked" id="2" />
          <label for="c2" class="tree_label" onclick="window.location.href='PHP/S02_TO1_SN1/exercice3.php'" style="color: green";>Exercice 3</label>
        </li>
        <li>
          <input type="checkbox" checked="checked" id="2" />
          <label for="c2" class="tree_label" onclick="window.location.href='PHP/S02_TO1_SN1/exercice4.php'" style="color: green";>Exercice 4</label>
        </li>
        <li>
          <input type="checkbox" checked="checked" id="2" />
          <label for="c2" class="tree_label" onclick="window.location.href='PHP/S02_TO1_SN1/exercice5.php'" style="color: green";>Exercice 5</label>
        </li>
        <li>
          <input type="checkbox" checked="checked" id="2" />
          <label for="c2" class="tree_label" onclick="window.location.href='PHP/S02_TO1_SN1/exercice6.php'" style="color: green";>Exercice 6</label>
        </li>
        <li>
          <input type="checkbox" checked="checked" id="2" />
          <label for="c2" class="tree_label" onclick="window.location.href='PHP/S02_TO1_SN1/exercice7.php'" style="color: green";>Exercice 7</label>
        </li>
        <li>
          <input type="checkbox" checked="checked" id="2"/>
          <label for="c2" class="tree_label" onclick="window.location.href='PHP/S02_TO1_SN1/exercice8.php'" style="color: green";>Exercice 8</label>
        </li>
        <li>
          <input type="checkbox" checked="checked" id="2" />
          <label for="c2" class="tree_label" onclick="window.location.href='PHP/S02_TO1_SN1/exercice_final.php'" style="color: green";>Exercice Final</label>
        </li>
      </ul>
    </li>
    
    
    <li>
      <input type="checkbox" id="c5" />
      <label class="tree_label" for="c5">S02 TO2 SN1</label>
      <ul>
        <li>
          <input type="checkbox" checked="checked" id="1" />
          <label for="c2" class="tree_label" onclick="window.location.href='PHP/S02_TO2_SN1/exercice1.php'" style="color: green";>Exercice 1</label>
        </li>
        <li>
          <input type="checkbox" checked="checked" id="1" />
          <label for="c2" class="tree_label" onclick="window.location.href='PHP/S02_TO2_SN1/exercice2.php'" style="color: green";>Exercice 2</label>
        </li>
        <li>
          <input type="checkbox" checked="checked" id="1" />
          <label for="c2" class="tree_label" onclick="window.location.href='PHP/S02_TO2_SN1/exercice3.php'" style="color: green";>Exercice 3</label>
        </li>
        <li>
          <input type="checkbox" checked="checked" id="1" />
          <label for="c2" class="tree_label" onclick="window.location.href='PHP/S02_TO2_SN1/exercice_final.php'" style="color: green";>Exercice Final</label>
        </li>
      </ul>
    </li>


    <li>
      <input type="checkbox" id="c6" />
      <label class="tree_label" for="c6">S02 TO3 SN1</label>
      <ul>
        <li>
          <input type="checkbox" checked="checked" id="3" />
          <label for="c2" class="tree_label" onclick="window.location.href='PHP/S02_TO3_SN1/exercice1.php'" style="color: green";>Exercice 1</label>
        </li>
        <li>
          <input type="checkbox" checked="checked" id="3" />
          <label for="c2" class="tree_label" onclick="window.location.href='PHP/S02_TO3_SN1/exercice2.php'" style="color: green";>Exercice 2</label>
        </li>
        <li>
          <input type="checkbox" checked="checked" id="3" />
          <label for="c2" class="tree_label" onclick="window.location.href='PHP/S02_TO3_SN1/exercice3.php'" style="color: orange";><mark>Exercice 3 25%</mark></label>
        </li>
        <li>
          <input type="checkbox" checked="checked" id="3" />
          <label for="c2" class="tree_label" onclick="window.location.href='PHP/S02_TO3_SN1/exercice4.php'" style="color: red";>Exercice 4</label>
        </li>
        <li>
          <input type="checkbox" checked="checked" id="3" />
          <label for="c2" class="tree_label" onclick="window.location.href='PHP/S02_TO3_SN1/exercice5.php'" style="color: red";>Exercice 5</label>
        </li>
        <li>
          <input type="checkbox" checked="checked" id="3" />
          <label for="c2" class="tree_label" onclick="window.location.href='PHP/S02_TO3_SN1/exercice6.php'" style="color: red";>Exercice 6</label>
        </li>
        <li>
          <input type="checkbox" checked="checked" id="3" />
          <label for="c2" class="tree_label" onclick="window.location.href='PHP/S02_TO3_SN1/exercice7.php'" style="color: red";>Exercice 7</label>
        </li>
        <li>
          <input type="checkbox" checked="checked" id="3" />
          <label for="c2" class="tree_label" onclick="window.location.href='PHP/S02_TO3_SN1/exercice8.php'" style="color: red";>Exercice 8</label>
        </li>
      </ul>
    </li>
  </ul>
<p id="footer">---------------------------------------------------------------------------------------------</p>
<div id="footerdiv">
 <?php

 echo "l'IP de Visual Studio Code  pour le PHP est : <font color='red'><mark id='mr'>".$_SERVER['REMOTE_ADDR']."</mark></style>"; 


 ?>

<h1 style="font-size: 15px; color: black";>Par Hugo TABARY BTS Systèmes Numériques, Informatique et Réseaux 	&#169;</h1>
</div>
  <script>
    function isNumber(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}

function setFontSize(el) {
    var fontSize = el.val();
    
    if ( isNumber(fontSize) && fontSize >= 0.5 ) {
      $('body').css({ fontSize: fontSize + 'em' });
    } else if ( fontSize ) {
      el.val('1');
      $('body').css({ fontSize: '1em' });  
    }
}

$(function() {
  
  $('#fontSize')
    .bind('change', function(){ setFontSize($(this)); })
    .bind('keyup', function(e){
      if (e.keyCode == 27) {
        $(this).val('1');
        $('body').css({ fontSize: '1em' });  
      } else {
        setFontSize($(this));
      }
    });
  
  $(window)
    .bind('keyup', function(e){
      if (e.keyCode == 27) {
        $('#fontSize').val('1');
        $('body').css({ fontSize: '1em' });  
      }
    });
  
});
  </script>
  
</body>
</html>