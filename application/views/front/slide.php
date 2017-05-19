<style>
.background{
  background-color: black;
  filter: alpha(opacity=100);
  opacity: 0.8;
  padding: 3px 3px 3px 3px;
  
  
}
.carousel-content {
  position: absolute;
  bottom: 50%;
  left: 15%;
  width: 600px;
  z-index: 20;
  color: white;
  text-shadow: 0 1px 2px rgba(0,0,0,.6);
  
  text-align: left;
  margin-left: 5px;


  

}
.p{
  padding: 10px 30px 30px 30px;
}

</style>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" style="height:100%">
    <div class="item active">
      <img src="<?php echo base_url(); ?>otavio/img/intro-home9.JPG" alt="Chania">
      <div class="background">
      <div class="carousel-content background ">
      <h2 class="p" style="color:white">Tunjang Kreativitas</h1>
        <p class="p">pendidikan kreatif yang menyenangkan, yang selalu
diselenggarakan setiap hari akan membuat anak-anak kita tidak 
terimbas oleh dampak negatif teknologi, televisi, dunia gadget, game, 
dan pergaulan bebas</p>
        </div>
      </div>
    </div>

    <div class="item">
      <img src="<?php echo base_url(); ?>otavio/img/s1.jpg" alt="Chania">
      <div class="carousel-content background ">
        <p class="p">Tidak ada anak yang bodoh. Semua anak itu cerdas. Cerdas  sesuai 
dengan bakat dan minatnya.</p>
        </div>
      </div>
    

    <div class="item">
      <img src="<?php echo base_url(); ?>otavio/img/S2.jpg" alt="Flower">
      <div class="carousel-content background ">
        <p class="p">RKWK kini telah mendampingi anak-anak belajar kreativitas selama tiga tahun 
lebih, dan waktu yang masih singkat itu telah tumbuh menjadi anak-anak yang 
kreatif, cerdas, dan berkarakter.</p>
        </div>
      </div>
    </div>

    <div class="item">
      <img src="img_flower2.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>