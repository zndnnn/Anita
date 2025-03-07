<?php
  include "service/database.php";

 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wedding Reza & Anita</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/01fddf6368.js" crossorigin="anonymous"></script>
</head>

<body>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
  crossorigin="anonymous"></script>
  <audio id="song" controls autoplay hidden id="song" src="asset/lagu.mp3"></audio>
  <script>
    window.addEventListener('click',() => {
      document.getElementById("song").play();
    });
  </script>

  <section>
    <div class="text1">
        <p class="font1">Save The Date</p>
        <p class="font2">Reza & Anita</p>
        <p class="font1">Minggu, 25 Mei 2025</p>
        <div class="text6">
          <p id="demo" class="waktu"></p><p id="demo1" class="waktu"></p><p id="demo2" class="waktu"></p><p id="demo3" class="waktu"></p>
          <script>
            // Set the date we're counting down to
            var countDownDate = new Date("May 25, 2025 09:00:00").getTime();
            
            // Update the count down every 1 second
            var x = setInterval(function() {
            
              // Get today's date and time
              var now = new Date().getTime();
                
              // Find the distance between now and the count down date
              var distance = countDownDate - now;
                
              // Time calculations for days, hours, minutes and seconds
              var days = Math.floor(distance / (1000 * 60 * 60 * 24));
              var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
              var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
              var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                
              // Output the result in an element with id="demo"
              document.getElementById("demo").innerHTML = days + " " ;
                
              // If the count down is over, write some text 
              if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "Terimakasih Sudah Datang";
              }
            }, 1000);
            </script>
            <script>
              // Set the date we're counting down to
              var countDownDate = new Date("May 25, 2025 09:00:00").getTime();
              
              // Update the count down every 1 second
              var x = setInterval(function() {
              
                // Get today's date and time
                var now = new Date().getTime();
                  
                // Find the distance between now and the count down date
                var distance = countDownDate - now;
                  
                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                  
                // Output the result in an element with id="demo"
                document.getElementById("demo1").innerHTML = hours + " " ;
                  
                // If the count down is over, write some text 
                if (distance < 0) {
                  clearInterval(x);
                  document.getElementById("demo1").innerHTML = "Terimakasih Sudah Datang";
                }
              }, 1000);
              </script>
              <script>
                // Set the date we're counting down to
                var countDownDate = new Date("May 25, 2025 09:00:00").getTime();
                
                // Update the count down every 1 second
                var x = setInterval(function() {
                
                  // Get today's date and time
                  var now = new Date().getTime();
                    
                  // Find the distance between now and the count down date
                  var distance = countDownDate - now;
                    
                  // Time calculations for days, hours, minutes and seconds
                  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    
                  // Output the result in an element with id="demo"
                  document.getElementById("demo2").innerHTML = minutes + " " ;
                    
                  // If the count down is over, write some text 
                  if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("demo2").innerHTML = "Terimakasih Sudah Datang";
                  }
                }, 1000);
                </script>
                <script>
                  // Set the date we're counting down to
                  var countDownDate = new Date("May 25, 2025 09:00:00").getTime();
                  
                  // Update the count down every 1 second
                  var x = setInterval(function() {
                  
                    // Get today's date and time
                    var now = new Date().getTime();
                      
                    // Find the distance between now and the count down date
                    var distance = countDownDate - now;
                      
                    // Time calculations for days, hours, minutes and seconds
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                      
                    // Output the result in an element with id="demo"
                    document.getElementById("demo3").innerHTML = seconds + " " ;
                      
                    // If the count down is over, write some text 
                    if (distance < 0) {
                      clearInterval(x);
                      document.getElementById("demo3").innerHTML = "Terimakasih Sudah Datang";
                    }
                  }, 1000);
                  </script>
        </div>
        <div class="hari"><p class="harii">Hari</p><p class="harii">Jam</p><p class="harii">Menit</p><p class="harii">Detik</p></div>

    </div>

  </section>

  <section class="orang">
    <div class="text4" data-aos="fade-up" data-aos-duration="1000">
      <p class="font6">R | A</p>
      <p class="font5">Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir</p>
      <p class="font5">(QS. Ar-Rum Ayat 21)</p>
      </div>
      <div class="thebride" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150">
        <p class="font2">The Bride & Groom</p>
        <p class="font5">Tanpa mengurangi rasa hormat. Kami mengundang Bapak/Ibu/Saudara/i serta kerabat sekalian untuk menghadiri acara pernikahan kami</p>
      </div>
      <div class="cewe" data-aos="fade-up" data-aos-duration="900">
      <img id="myImg" src="foto/anita.jpg" alt="cewe">
      </div>
      <div>
        <p class="font8" data-aos="fade-up" data-aos-duration="1000">Anita Puspita Dewi, SE</p>
        <p class="font9" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">Putri Pertama Dari </p>
        <p class="font10" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Bapak Toyib & Ibu Sunarti</p>
        <a href="https://www.instagram.com/momoonanita/?utm_source=ig_web_button_share_sheet" target="_blank" class="tbl-biru" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300"><i class="fa-brands fa-instagram"></i>INSTAGRAM</a>
      </div>
      
    
 

      <div class="cowo" data-aos="fade-up" data-aos-duration="2000">
      <img id="myImg1" src="foto/reza.jpg" alt="cowo">
      </div>
      <div class="textcowo">
        <p class="font11" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">Muhammad Reza</p>
        <p class="font12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150">Putra Pertama Dari </p>
        <p class="font13" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Ali Libran Sapril S. sos & Eka Wahyuni</p>
        <p class="font14" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">(Ayah sambung & Ibu kandung)</p>
        <p class="font15" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300"> M Nurfanto & Rosmaniar</p>
        <p class="font14"data-aos="fade-up" data-aos-duration="1000" data-aos-delay="350">(Ayah kandung & ibu sambung)</p>
        <a href="https://www.instagram.com/mcrezaa/?utm_source=ig_web_button_share_sheet" target="_blank" class="tbl-biru2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400"><i class="fa-brands fa-instagram"></i>INSTAGRAM</a>
      </div>
      
  </section>

  <section>
    <div class="text5">
      <p class="font5-2">Our</p>
      <p class="font2-2">Wedding</p>
      <img id="akad" src="foto/akadnikah.jpg" alt="resepsi" data-aos="fade-up" data-aos-duration="1000">
      <a href="https://maps.app.goo.gl/ii478jNXoiLondoC6" target="_blank" class="tbl-biru3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">GOOGLE MAPS</a>
    </div>

    <div class="text13">
      <img id="resepsi" src="foto/resepsi.jpg" alt="resepsi" data-aos="fade-up" data-aos-duration="1000">
      <a href="https://maps.app.goo.gl/ii478jNXoiLondoC6" target="_blank" class="tbl-biru4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">GOOGLE MAPS</a>
    </div>
  </section>


  <section>
    <div class="text7">
      <p class="font5-1">OUR MOMENT</p>
      <p class="font2-1">Gallery</p>
      <video class="vid" src="foto/video.mp4" controls autoplay muted data-aos="fade-up" data-aos-duration="1000"></video>
      <div class="foto">
      <img src="foto/DSC00973.jpg" alt="resepsi" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
      <img src="foto/DSC01313-1.jpg" alt="resepsi" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150">
      </div>
      <img src="foto/IMG_6162.JPEG.jpg" alt="resepsi" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
      <div class="foto">
      <img src="foto/IMG_6190.JPEG.jpg" alt="resepsi" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">
      <img src="foto/IMG_6280.JPEG.jpg" alt="resepsi" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
      </div>
    </div>
  </section>

 

  <section>
    <div class="text8">
      <p class="font5-3">WEDDING</p>
      <p class="font2-1">Gift</p>
      <p class="font1-1">Bagi Bapak/Ibu/Saudara/i yang ingin mengirimkan hadiah pernikahan dapat melalui virtual account di bawah ini:</p>
      <div class="rek">
      <img src="foto/rekanita.png" alt="rekening" data-aos="zoom-in" data-aos-duration="1000">
      <p id="p1">1480012126515</p>
      <a class="button" onclick="copyToClipboard('#p1')" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">Salin Rekening</a>
      <script>
      function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
      }
      </script>
      <img src="foto/rekreza.png" alt="rekening2" data-aos="zoom-in" data-aos-duration="1000">
      <p id="p2">1282069927</p>
      <a class="button2" onclick="copyToClipboard('#p2')" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">Salin Rekening</a>
      <script>
      function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
      }
      </script>
      </div>
    
    <p class="font1-2">KONFIRMASI WEDDING GIFT</p>
    <a href="https://calendar.app.google/sxvk2erKnBRm6zwd6" target="_blank" class="tbl-biru-5">Konfirmasi Via WA</a>
  </div>

  
  <section class="orang">
  <div class="text14">
      <img src="foto/lovestory.png" alt="resepsi">
      <p class="font16">Berikan Ucapan</p>
    </div>
  </section>

  <section class="form">
<?php
include "form.php";
?>
  </section>

  <section>
    <div class="text10">
        <p class="font1-3">Merupakan suatu kebahagiaan dan kehormatan bagi kami, apabila Bapak/Ibu/Saudara/i, berkenan hadir dan memberikan doa restu kepada kami</p>
        <p class="font1-4">Kami Yang Berbahagia,</p>
        <p class="font2">Reza & Anita</p>
    </div>
  </section>


  <section>
    <div class="text11">
      <div id="copyright">
        <p class="font19">- Reza & Anita -</p>
        </div>
          <p class="font19">web by @zndnrhmn </p>
      </div>
    
    </div>
  </section>

  <section>
    <div class="text12">
    
    </div>
  </section>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>

