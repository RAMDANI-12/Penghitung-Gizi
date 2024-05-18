<html>
  <head>
    <title>Kalkulator Hitung Kalori</title>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
  </head>
  <body> 

    <div class="judul">  
    <h1> Kalkulator <br> Konversi <br> Kalori </h1>
</div>
<div class="jenis">
<form method="get" action="output.php">
<label> Jenis Makanan
  <select class="jj" name="jenis">
  <option value="Select"></option>
  <option value="Karbohidrat">Karbohidrat</option>
  <option value="Protein Hewani">Protein Hewani</option>
  <option value="Protein Nabati">Protein Nabati</option>
  <option value="Sayur">Sayur</option>
  <option value="Buah">Buah</option>
  <option value="Susu">Susu</option>
</label>
</div>
</select> 
<br>
<div class="bingung">
<p>Bingung memilih? <a href="panduan.php?page=panduan">Lihat Panduan</a></p>
</div>
 <br>
 <div class="berat">
  <label>Berat(gram)</label><br/>
	<input type="number" name="berat">
  <style>
  input[type=number] {
        background: #A78268;
        border-radius: 35px;
        color: black;
        padding: 15px 113px;
        margin: 4px 2px;
        cursor: pointer;
        font-family:sans-serif;
       /* font-size:15px;*/
        margin: center;
        left: 30px;
        font-size: 20px;
      }
</style>
</div>
<div class="button">
<br> <br>
<style>
  input[type=submit] {
        background: #A78268;
        border-radius: 25px;
        color: black;
        padding: 16px 30px;
        margin: 4px 2px;
        cursor: pointer;
        font-family:sans-serif;
        font-size:15px;
        margin: center;
        left: 100px;
      }
</style>
    <input type="submit" value="Hitung Kalori">
</div>
</form>
    </div>

<br>
<div>
<div class="pict1">
  <img src='icons8-healthy-food-64.png'>
</div>
<div class="pict2">
<img src='icons8-organic-food-64.png'>
</div>
  </body>
</html>