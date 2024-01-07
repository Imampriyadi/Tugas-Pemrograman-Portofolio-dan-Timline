<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
   @import url(https://fonts.googleapis.com/css?family=Raleway:400,900);

body{
  font-family: 'Raleway', sans-serif;
  color: #333;
}

header h1{
  text-align: center;
  font-weight: bold;
  margin-top: 0;
}
  
 header p{
   text-align: center;
   margin-bottom: 0;
 }

.hexa{
  border: 0px;
  float: left;
  text-align: center;
  height: 35px;
  width: 60px;
  font-size: 22px;
  background: #f0f0f0;
  color: #3c3c3c;
  position: relative;
  margin-top: 15px;
}

.hexa:before{
  content: ""; 
  position: absolute; 
  left: 0; 
  width: 0; 
  height: 0;
  border-bottom: 15px solid #f0f0f0;
  border-left: 30px solid transparent;
  border-right: 30px solid transparent;
  top: -15px;
}

.hexa:after{
  content: ""; 
  position: absolute; 
  left: 0; 
  width: 0; 
  height: 0;
  border-left: 30px solid transparent;
  border-right: 30px solid transparent;
  border-top: 15px solid #f0f0f0;
  bottom: -15px;
}

.timeline {
  position: relative;
  padding: 0;
  width: 100%;
  margin-top: 20px;
  list-style-type: none;
}

.timeline:before {
  position: absolute;
  left: 50%;
  top: 0;
  content: ' ';
  display: block;
  width: 2px;
  height: 100%;
  margin-left: -1px;
  background: rgb(213,213,213);
  background: -moz-linear-gradient(top, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(30,87,153,1)), color-stop(100%,rgba(125,185,232,1)));
  background: -webkit-linear-gradient(top, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
  background: -o-linear-gradient(top, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
  background: -ms-linear-gradient(top, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
  background: linear-gradient(to bottom, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
  z-index: 5;
}

.timeline li {
  padding: 2em 0;
}

.timeline .hexa{
  width: 16px;
  height: 10px;
  position: absolute;
  background: #00c4f3;
  z-index: 5;
  left: 0;
  right: 0;
  margin-left:auto;
  margin-right:auto;
  top: -30px;
  margin-top: 0;
}

.timeline .hexa:before {
  border-bottom: 4px solid #00c4f3;
  border-left-width: 8px;
  border-right-width: 8px;
  top: -4px;
}

.timeline .hexa:after {
  border-left-width: 8px;
  border-right-width: 8px;
  border-top: 4px solid #00c4f3;
  bottom: -4px;
}

.direction-l,
.direction-r {
  float: none;
  width: 100%;
  text-align: center;
}

.flag-wrapper {
  text-align: center;
  position: relative;
}

.flag {
  position: relative;
  display: inline;
  background: rgb(255,255,255);
  font-weight: 600;
  z-index: 15;
  padding: 6px 10px;
  text-align: left;
  border-radius: 5px;
}

.direction-l .flag:after,
.direction-r .flag:after {
  content: "";
  position: absolute;
  left: 50%;
  top: -15px;
  height: 0;
  width: 0;
  margin-left: -8px;
  border: solid transparent;
  border-bottom-color: rgb(255,255,255);
  border-width: 8px;
  pointer-events: none;
}

.direction-l .flag {
  -webkit-box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  -moz-box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
}

.direction-r .flag {
  -webkit-box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  -moz-box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
}

.time-wrapper {
  display: block;
  position: relative;
  margin: 4px 0 0 0;
  z-index: 14;
  line-height: 1em;
  vertical-align: middle;
  color: #fff;
}

.direction-l .time-wrapper {
  float: none;
}

.direction-r .time-wrapper {
  float: none;
}

.time {
  background: #00c4f3;
  display: inline-block;
  padding: 8px;
}

.desc {
  position: relative;
  margin: 1em 0 0 0;
  padding: 1em;
  background: rgb(254,254,254);
  -webkit-box-shadow: 0 0 1px rgba(0,0,0,0.20);
  -moz-box-shadow: 0 0 1px rgba(0,0,0,0.20);
  box-shadow: 0 0 1px rgba(0,0,0,0.20);
  z-index: 15;
}

.direction-l .desc,
.direction-r .desc {
  position: relative;
  margin: 1em 1em 0 1em;
  padding: 1em;
  z-index: 15;
}

@media(min-width: 768px){
  .timeline {
    width: 660px;
    margin: 0 auto;
    margin-top: 20px;
  }

  .timeline li:after {
    content: "";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
  }
  
  .timeline .hexa {
    left: -28px;
    right: auto;
    top: 8px;
  }

  .timeline .direction-l .hexa {
    left: auto;
    right: -28px;
  }

  .direction-l {
    position: relative;
    width: 310px;
    float: left;
    text-align: right;
  }

  .direction-r {
    position: relative;
    width: 310px;
    float: right;
    text-align: left;
  }

  .flag-wrapper {
    display: inline-block;
  }
  
  .flag {
    font-size: 18px;
  }

  .direction-l .flag:after {
    left: auto;
    right: -16px;
    top: 50%;
    margin-top: -8px;
    border: solid transparent;
    border-left-color: rgb(254,254,254);
    border-width: 8px;
  }

  .direction-r .flag:after {
    top: 50%;
    margin-top: -8px;
    border: solid transparent;
    border-right-color: rgb(254,254,254);
    border-width: 8px;
    left: -8px;
  }

  .time-wrapper {
    display: inline;
    vertical-align: middle;
    margin: 0;
  }

  .direction-l .time-wrapper {
    float: left;
  }

  .direction-r .time-wrapper {
    float: right;
  }

  .time {
    padding: 5px 10px;
  }

  .direction-r .desc {
    margin: 1em 0 0 0.75em;
  }
}

@media(min-width: 992px){
  .timeline {
    width: 800px;
    margin: 0 auto;
    margin-top: 20px;
  }

  .direction-l {
    position: relative;
    width: 380px;
    float: left;
    text-align: right;
  }

  .direction-r {
    position: relative;
    width: 380px;
    float: right;
    text-align: left;
  }
}
  </style>
</head>
<body>

<header>
    <p>By Bang Kumis</p>
    <h1>Timeline Imam Priyadi</h1>
</header>

<ul class="timeline">
  <!-- Item 1 -->
  <li>
    <div class="direction-r">
      <div class="flag-wrapper">
        <span class="hexa"></span>
        <span class="flag">Bulan Pertama.</span>
        <span class="time-wrapper"><span class="time">Januari 2023</span></span>
      </div>
      <div class="desc">Awal Bulan Januari Saya mempersiapkan untuk pendakian ke gunung Haseupan pandenglang.</div>
    </div>
  </li>

  <!-- Item 2 -->
  <li>
    <div class="direction-l">
      <div class="flag-wrapper">
        <span class="hexa"></span>
        <span class="flag">Bulan Kedua.</span>
        <span class="time-wrapper"><span class="time">Februari 2023</span></span>
      </div>
      <div class="desc">Persiapan mengikuti workshop di SMK 11 Kab. Tangerang.</div>
    </div>
  </li>

  <!-- Item 3 -->
  <li>
    <div class="direction-r">
      <div class="flag-wrapper">
        <span class="hexa"></span>
        <span class="flag">Bulan Ke Tiga.</span>
        <span class="time-wrapper"><span class="time">Maret 2023</span></span>
      </div>
      <div class="desc">Awal bulan suci ramadhan libur sekolah tapi kuliah kaga libur sungguh ngenes dan bukber/buka beurang.</div>
    </div>
  </li>

  <!-- Item 4 -->
  <li>
    <div class="direction-l">
      <div class="flag-wrapper">
        <span class="hexa"></span>
        <span class="flag">Bulan Ke Empat.</span>
        <span class="time-wrapper"><span class="time">April 2023</span></span>
      </div>
      <div class="desc">Jalan-jalan bareng tim trans7 mengitari jawa barat dari puncak bogor, ciloto, cianjur, sukabumi, pelabuhan ratu, cikotok, bayah, sawarna, malimping dan tragedi terjatuh dari motor vespa.</div>
    </div>
  </li>

  <!-- Item 5 -->
  <li>
    <div class="direction-r">
      <div class="flag-wrapper">
        <span class="hexa"></span>
        <span class="flag">Bulan Ke Lima.</span>
        <span class="time-wrapper"><span class="time">Mei 2023</span></span>
      </div>
      <div class="desc">Melakukan aktifitas memancing di Tanjung Kait.</div>
    </div>
  </li>

   <!-- Item 6 -->
   <li>
    <div class="direction-l">
      <div class="flag-wrapper">
        <span class="hexa"></span>
        <span class="flag">Bulan Ke Enam.</span>
        <span class="time-wrapper"><span class="time">Juni 2023</span></span>
      </div>
      <div class="desc">Biasa lebaran Idul Adha Kurban Perasaan dan menjadi Paniti PAS di sekolahan tempat saya bekerja.</div>
    </div>
  </li>

  <!-- Item 7 -->
  <li>
    <div class="direction-r">
      <div class="flag-wrapper">
        <span class="hexa"></span>
        <span class="flag">Bulan Ke Tujuh.</span>
        <span class="time-wrapper"><span class="time">Juli 2023</span></span>
      </div>
      <div class="desc">Awal masuk sekolah dan menjadi panitia MPLS Sekolah dan memperkenalkan diri kepada siswa baru ciwai.</div>
    </div>
  </li>

  <!-- Item 8 -->
  <li>
    <div class="direction-l">
      <div class="flag-wrapper">
        <span class="hexa"></span>
        <span class="flag">Bulan Ke Delapan.</span>
        <span class="time-wrapper"><span class="time">Agustus 2023</span></span>
      </div>
      <div class="desc">Menjadi panitia 17 Agustus 2023 mengikuti lomba panjat pinang sampe cangkeul cangkeng.</div>
    </div>
  </li>

  <!-- Item 9 -->
  <li>
    <div class="direction-r">
      <div class="flag-wrapper">
        <span class="hexa"></span>
        <span class="flag">Bulan Ke Sembilan.</span>
        <span class="time-wrapper"><span class="time">September 2023</span></span>
      </div>
      <div class="desc">jalan-jalan ke pantai carita mulung kalomang jeung keuyeup.</div>
    </div>
  </li>

  <!-- Item 10 -->
  <li>
    <div class="direction-l">
      <div class="flag-wrapper">
        <span class="hexa"></span>
        <span class="flag">Bulan Ke Sepuluh.</span>
        <span class="time-wrapper"><span class="time">Oktober 2023</span></span>
      </div>
      <div class="desc">Ulang Tahun Saya di bulan oktober dan di kasih supri sama dia yahuuuuuuu.</div>
    </div>
  </li>

   <!-- Item 11 -->
   <li>
    <div class="direction-r">
      <div class="flag-wrapper">
        <span class="hexa"></span>
        <span class="flag">Bulan Ke Sebelas.</span>
        <span class="time-wrapper"><span class="time">November 2023</span></span>
      </div>
      <div class="desc">Rutinitas mengajar di sekolah sampe bosen .</div>
    </div>
  </li>

  <!-- Item 12 -->
  <li>
    <div class="direction-l">
      <div class="flag-wrapper">
        <span class="hexa"></span>
        <span class="flag">Bulan Ke Dua Belas.</span>
        <span class="time-wrapper"><span class="time">Desember 2023</span></span>
      </div>
      <div class="desc">Lembur bikin soal buat PAS Ganjil sibuk input nilai raport cetak raport juga belum jalan-jalan kaga ada agenda jalan-jalan sedih jasa lamun di ceritakeun mah.</div>
    </div>
  </li>
</ul>

</body>
</html>
