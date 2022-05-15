<html>
<head>
  
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  
  <title> STRONA </title>
</head>
<body>
<div class="all">

<div class="header">
<p class="head">NAGŁÓWEK</p>
</div>
<div class="pasek">
<marquee>Lecę w lewo</marquee>
</div>

<div class="menu">
<p class="men">MENU</p>
<ul>
		
	<li><a href="index.html">Strona Główna</a></li>

	<li><a href="animacja.html">Skrypt 1</a></li>
    
    <li><a href="p%C4%99tla.php">Skrypt 2</a></li>
	
</ul>
</div>

<div class="content">
<form method="get">
 Podaj a: <input name="ile">
<input type="submit" value="Wyślij">
    </form>
    <?php
    if(isset ($_GET["ile"]))
    {
        $num = $_GET["ile"];
        $i = 0;
    }
        while(true)
        {
            $i++;
            echo "wykonano ". $i. "</br>";
         if($i == $num)
            {
                break;
            }   
        }
    echo "koniec.";
?>    
</div>



<div class="footer">

© Iwo Hołoniewski

</div>




</div>
</body>
</html>

