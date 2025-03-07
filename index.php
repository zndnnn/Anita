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
  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/01fddf6368.js" crossorigin="anonymous"></script>

</head>

<body>
  <section class="sec1">
      
      
    <div class="text1">
        <p class="font1">The Wedding of</p>
        <p class="font2">Reza & Anita</p>
        <p class="font1">Minggu, 25 Mei 2025</p>
    </div>

    <section id="hero" class="hero">
    <main class="text2">
    <p class="font4">Kepada Yth,</p>
    <h1 class="font3">Tamu Undangan<span></span></h1>
 
    <a href="main.php" target="_self" class="tbl-biru"><i class="fa-solid fa-envelope"></i><p class="bukaundangan">BUKA UNDANGAN</p></a>
    <p class="font5">Mohon maaf bila ada kesalahan dalam penulisan nama/gelar</p>
    </section>
  </section>
<script>
    const urlParams = new URLSearchParams(window.location.search);
    const nama = urlParams.get('nama') || '';
    console.log(nama)

    const namaContainer = document.querySelector('.hero h1 span');
    let text = nama;
    namaContainer.insertAdjacentText("afterend", text);

  </script>

</body>
</html>