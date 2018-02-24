
 <!DOCTYPE html>
 <html>
 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <meta property="og:image" content="http://www.piersoft.it/elezionipolitiche2018/mininterno.png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet" type="text/css">
 <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet" type="text/css">
 <style>
 body,td,th {
 font-family: "Titillium Web, Arial, Sans-Serif";
 font-size: 14px;
 }
 table, th, td {
     border: 1px solid black;
 }
 </style>
 </head>
 <body>

 <style>
 #logo{
 top:50px;
   padding: 10px 15px 10px 15px;
 }
 .smart-green {
     margin-left:auto;
     margin-right:auto;

     max-width: 600px;
     background: #F8F8F8;
     padding: 30px 30px 20px 30px;
     font: 18px "Titillium Web",Arial, Helvetica, sans-serif;
     color: #666;
     border-radius: 5px;
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
 }
 .smart-green h1 {
     font: 34px "Titillium Web", Arial, Helvetica, sans-serif;
     padding: 20px 0px 20px 40px;
     display: block;
     margin: -30px -30px 10px -30px;
     color: #FFF;
     background: #9DC45F;
     text-shadow: 1px 1px 1px #949494;
     border-radius: 5px 5px 0px 0px;
     -webkit-border-radius: 5px 5px 0px 0px;
     -moz-border-radius: 5px 5px 0px 0px;
     border-bottom:1px solid #89AF4C;

 }
 .smart-green h1>span {
     display: block;
     font-size: 11px;
     color: #FFF;
 }

 .smart-green label {
     display: block;
     margin: 0px 0px 5px;
 }
 .smart-green label>span {
     float: left;
     margin-top: 10px;
     color: #5E5E5E;
 }
 .smart-green input[type="text"], .smart-green input[type="email"], .smart-green textarea, .smart-green select {
     color: #555;
     height: 30px;
     line-height:15px;
     width: 80%;
     padding: 10px 0px 10px 10px;
     margin-left: 1px;
     border: 1px solid #E5E5E5;
     background: #FBFBFB;
     outline: 0;
     -webkit-box-shadow: inset 1px 1px 2px rgba(238, 238, 238, 0.2);
     box-shadow: inset 1px 1px 2px rgba(238, 238, 238, 0.2);
     font: "Titillium Web",Arial, Helvetica, sans-serif;
       border-radius: 5px;
         font-size: 24px;
 }
 .smart-green textarea{
     height:100px;
     padding-left:     10px;

 }
 .smart-green select {
     background: url('down-arrow.png') no-repeat right, -moz-linear-gradient(top, #FBFBFB 0%, #E9E9E9 100%);
     background: url('down-arrow.png') no-repeat right, -webkit-gradient(linear, left top, left bottom, color-stop(0%,#FBFBFB), color-stop(100%,#E9E9E9));
    appearance:none;
     -webkit-appearance:none;
    -moz-appearance: none;
     text-indent: 0.01px;
     text-overflow: '';
     width:100%;
     height:30px;
 }
 .smart-green .button {
     background-color: #9DC45F;
     border-radius: 5px;
     -webkit-border-radius: 5px;
     -moz-border-border-radius: 5px;
     border: none;
     padding: 10px 15px 10px 15px;
     color: #FFF;
     font-size: 15px;
     text-shadow: 1px 1px 1px #949494;
 }
 .smart-green .button:hover {
     background-color:#80A24A;
 }

   </style>

<?php

$idcomune=strtoupper($_GET["id"]);
$citycorretta=strtoupper($_GET["city"]);
$comune="senato.csv";
//$city="MATERA";
$csv = array_map('str_getcsv',file($comune));
$colunisen="";
$colunicam="";
$colplurisen="";
$colpluricam="";
//$idcomune="";
//$citycorretta="";
echo "<p class='smart-green'><b>SENATO DELLA REPUBBLICA:</br></b></br>";

foreach ($csv as $city_name => $city_a) {
  $city_a[2]=str_replace("ABRUZZO - ","",$city_a[2]);
  $city_a[2]=str_replace("CALABRIA - ","",$city_a[2]);
    $city_a[2]=str_replace("CAMPANIA 1 - ","",$city_a[2]);
  $city_a[2]=str_replace("CAMPANIA 2 - ","",$city_a[2]);
  $city_a[2]=str_replace("BASILICATA - ","",$city_a[2]);
  $city_a[2]=str_replace("EMILIA-ROMAGNA - ","",$city_a[2]);
  $city_a[2]=str_replace("FRIULI-VENEZIA GIULIA - ","",$city_a[2]);
  $city_a[2]=str_replace("LAZIO 1 - ","",$city_a[2]);
    $city_a[2]=str_replace("LAZIO 2 - ","",$city_a[2]);
  $city_a[2]=str_replace("LOMBARDIA 1 - ","",$city_a[2]);
    $city_a[2]=str_replace("LOMBARDIA 2 - ","",$city_a[2]);
      $city_a[2]=str_replace("LOMBARDIA 3 - ","",$city_a[2]);
        $city_a[2]=str_replace("LOMBARDIA 4 - ","",$city_a[2]);
  $city_a[2]=str_replace("MARCHE - ","",$city_a[2]);
  $city_a[2]=str_replace("PIEMONTE 1 - ","",$city_a[2]);
    $city_a[2]=str_replace("PIEMONTE 2 - ","",$city_a[2]);
  $city_a[2]=str_replace("PUGLIA - ","",$city_a[2]);
  $city_a[2]=str_replace("SARDEGNA - ","",$city_a[2]);
  $city_a[2]=str_replace("SICILIA 1 - ","",$city_a[2]);
    $city_a[2]=str_replace("SICILIA 2 - ","",$city_a[2]);
  $city_a[2]=str_replace("TOSCANA - ","",$city_a[2]);
  $city_a[2]=str_replace("TRENTINO-ALTO ADIGE/SUDTIROL - ","",$city_a[2]);
  $city_a[2]=str_replace("TRENTINO-ALTO ADIGE/SÜDTIROL - ","",$city_a[2]);
  $city_a[2]=str_replace("TRENTINO-ALTO ADIGE/S‹DTIROL - ","",$city_a[2]);

  $city_a[2]=str_replace("UMBRIA - ","",$city_a[2]);
  $city_a[2]=str_replace("VENETO 1 - ","",$city_a[2]);
  $city_a[2]=str_replace("VENETO 2 - ","",$city_a[2]);
  if ($city_a[3]==$citycorretta){
//  if (strpos($citycorretta,$city_a[3]) !== false) {
    //  echo "ecco".$city_a[1]." ".$city_a[2];
$colplurisen=$city_a[1];
$colunisen=$city_a[2];

echo "<b>COLLEGIO UNINOMINALE (LISTA-CANDIDATO): </b>".$colunisen."</br>";


$csvcandidati = array_map('str_getcsv',file('WSenUni.csv'));

foreach ($csvcandidati as $city_name => $city_a) {
    if (strpos($city_a[3],$colunisen) !== false) {

  echo $city_a[0]." - <b>".$city_a[5]."</b></br>";

    }
  }

echo "</br></br><b>COLLEGIO PLURINOMINALE: </b>".$colplurisen."</br>";

//$colplurisen="BASILICATA - 01";

$csvcandidati = array_map('str_getcsv',file('WSenPluri.csv'));

foreach ($csvcandidati as $city_name => $city_a) {
// if (strpos($city_a[2],"TRENTINO") !== false) echo "|||".$city_a[2];
    if (strpos($city_a[2],$colplurisen) !== false) {

  echo $city_a[0]." - <b>".$city_a[4]."</b></br>";

    }
  }
//$colunisen=$auth3;


}
}

$comune1="camera.csv";
//$city="MATERA";
$csv1 = array_map('str_getcsv',file($comune1));
$colunisen="";
$colunicam="";
$colplurisen="";
$colpluricam="";
//$idcomune="";
//$citycorretta="";
echo "</br></br>";
echo "<p class='smart-green'><b>CAMERA DEI DEPUTATI:</b></h1>";
foreach ($csv1 as $city_name => $city_a) {
  $city_a[2]=str_replace("ABRUZZO - ","",$city_a[2]);
  $city_a[2]=str_replace("CALABRIA - ","",$city_a[2]);
    $city_a[2]=str_replace("CAMPANIA 1 - ","",$city_a[2]);
  $city_a[2]=str_replace("CAMPANIA 2 - ","",$city_a[2]);
  $city_a[2]=str_replace("BASILICATA - ","",$city_a[2]);
  $city_a[2]=str_replace("EMILIA-ROMAGNA - ","",$city_a[2]);
  $city_a[2]=str_replace("FRIULI-VENEZIA GIULIA - ","",$city_a[2]);
  $city_a[2]=str_replace("LAZIO 1 - ","",$city_a[2]);
    $city_a[2]=str_replace("LAZIO 2 - ","",$city_a[2]);
  $city_a[2]=str_replace("LOMBARDIA 1 - ","",$city_a[2]);
    $city_a[2]=str_replace("LOMBARDIA 2 - ","",$city_a[2]);
      $city_a[2]=str_replace("LOMBARDIA 3 - ","",$city_a[2]);
        $city_a[2]=str_replace("LOMBARDIA 4 - ","",$city_a[2]);
  $city_a[2]=str_replace("MARCHE - ","",$city_a[2]);
  $city_a[2]=str_replace("PIEMONTE 1 - ","",$city_a[2]);
    $city_a[2]=str_replace("PIEMONTE 2 - ","",$city_a[2]);
  $city_a[2]=str_replace("PUGLIA - ","",$city_a[2]);
  $city_a[2]=str_replace("SARDEGNA - ","",$city_a[2]);
  $city_a[2]=str_replace("SICILIA 1 - ","",$city_a[2]);
    $city_a[2]=str_replace("SICILIA 2 - ","",$city_a[2]);
  $city_a[2]=str_replace("TOSCANA - ","",$city_a[2]);
  $city_a[2]=str_replace("TRENTINO-ALTO ADIGE/SUDTIROL - ","",$city_a[2]);
  $city_a[2]=str_replace("TRENTINO-ALTO ADIGE/SÜDTIROL - ","",$city_a[2]);
  $city_a[2]=str_replace("TRENTINO-ALTO ADIGE/S‹DTIROL - ","",$city_a[2]);

  $city_a[2]=str_replace("UMBRIA - ","",$city_a[2]);
  $city_a[2]=str_replace("VENETO 1 - ","",$city_a[2]);
  $city_a[2]=str_replace("VENETO 2 - ","",$city_a[2]);
//  $city_a[3]=str_replace(" ","%20",$city_a[3]);

  if ($city_a[3]===$citycorretta){
//echo $city_a[3];
//  if (strpos($citycorretta,$city_a[3]) !== false) {

    $colpluricam=$city_a[1];
    $colunicam=$city_a[2];


    echo "</br></br><b>COLLEGIO UNINOMINALE (LISTA-CANDIDATO): </b>".$colunicam."</br>";

    $csvcandidati = array_map('str_getcsv',file('WCamUni.csv'));

    foreach ($csvcandidati as $city_name => $city_a) {

      if (strpos($city_a[3],$colunicam) !== false) {

    echo $city_a[0]." - <b>".$city_a[5]."</b></br>";

        }
      }


      echo "</br></br><b>COLLEGIO PLURINOMINALE: </b>".$colpluricam."</br>";

      $csvcandidati = array_map('str_getcsv',file('WCamPluri.csv'));

      foreach ($csvcandidati as $city_name => $city_a) {
          if (strpos($city_a[2],$colpluricam) !== false) {

        echo $city_a[0]." - <b>".$city_a[4]."</b></br>";

          }
        }
    }
  }

?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</body>
      </html>
