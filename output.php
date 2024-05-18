<html>
<head>
       <title> Hasil kalori</title>
       <link rel='stylesheet' type='text/css' media='screen' href='outstyle.css'>
</head>

<body>
</style>
<body>

<nav>
     <ul><li><a href="input.php?page=Input">Kembali</a>
        
         </li></ul>
        </nav>
<style>
          body {background-color: #BAE0C1;
            margin: center;
          }
          ul {
    list-style-type: none;
    margin: auto;
    overflow: hidden;
  }
    
  li {
    float: left;
  }
    
  li a {
    color: #f7f8f9;
    text-align: center;
    font-weight: bold;
    font-size: 20px;
    left: 30px;
    background: #A78268;
    border-radius: 50px;
    border:solid 1px #A78268;
    padding: 10px 10px;
    margin: center;
    cursor: pointer;
    font-family:sans-serif;
    display: block;
    color: #f7f8f9;
    text-align: center;
    font-weight: bold;
    font-size: 20px;
  }
  
</style>      
<div class="teks1">
       <h1> Hasil Kalorimu </h1>
       <style>
             h1{
              position: absolute;
              width: 423px;
              height: 72px;
              left: 620px;
              top: calc(50% - 72px/2 - 223px);

              font-family: 'Solway';
              font-style: normal;
              font-weight: 400;
              font-size: 60px;
              line-height: 72px;
/* identical to box height */


color: #000000;
             } 
       </style>
</div>
<div class="pict">
       <img src="weighing-machine.png">
</div>
<style>
       img{
              height: 300px;
              width: 300px;
              left: 650px;
              top: 250px;
              position: absolute;
              margin:center;
              
       }
</style>
<div class="hasil">
<?php 

$jenis = $_GET['jenis'];
$berat = $_GET['berat'];

if ($berat <= 0 ){
       echo "ANDA BELUM MEMASUKAN BERAT MAKANAN";
}elseif($jenis == 'Karbohidrat'){
       $hasil = 4.37 * $berat;
}elseif ($jenis == 'Protein Hewani'){
       $hasil = 10.7 * $berat;
}elseif ($jenis == 'Protein Nabati'){
       $hasil = 15 * $berat;
}elseif ($jenis == 'Sayur'){
       $hasil = 0.5 * $berat;
}elseif ($jenis == 'Buah'){
       $hasil = 4.2 * $berat;
}else{
       $hasil = 12 * $berat;
}

echo " $berat gram $jenis mengandung <br> $hasil kalori";
?>


<p class="teks2">
 PERHATIAN <br>
Rata - Rata kalori normal perharinya adalah <br>
 2000 - 2500 kalori/hari <br>
(perhitungan ini hanya menghitung kalori per jenis makanan)</p>
</div>
<style>
       .hasil{
              position: absolute;
              top: 550px;
              left: 600px;
       }
</style>

</body>
</html>