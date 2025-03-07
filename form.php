<?php

include "service/database.php";

  if(isset($_POST['kirim'])){
    $nama=$_POST['nama'];
    $ucapan=$_POST['ucapan'];

    $sql = "INSERT INTO komentar (nama, ucapan) VALUES ('$nama', '$ucapan')";
   
    if($db->query($sql)) {
      echo "Ucapan Terkirim";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta property="og:title" content='Wedding Rais&velin'/>
<meta property="og:image" content='https://i.ibb.co.com/27H2fXm/1.jpg'/>
    <meta property="og:type" content='website'/>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wedding Reza & Anita</title>
  <link rel="stylesheet" href="style3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/01fddf6368.js" crossorigin="anonymous"></script>

</head>

<body>
<div class="container">
      <form action="main.php" method="POST" class="form">
        <div>
            <p>Nama</p>
          <input type="text" name="nama" class="inputnama"/>
        </div>
        <div>
            <p>Ucapan & Doa</p>
          <textarea name="ucapan"></textarea>
        </div>
          <button type="submit" name="kirim">Kirim Ucapan</button>
      </form>
      </div>

    <div class="semuakomen">
      <?php
      
      $no=1;
      $ambildata = mysqli_query($db,"select * from komentar");
      while ($tampil = mysqli_fetch_array($ambildata)) {
        echo "
        <div class='tabelkomen'>
        <h1>$tampil[nama]</h1>
        <p>$tampil[ucapan]</p>
        </div>";

        $no++;
      }

      ?>
      </div>
  </section>  

  <script>
    function myFunction() {
      var x = document.getElementById("myDIV");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
    </script>

</body>
</html>