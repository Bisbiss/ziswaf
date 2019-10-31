<?php $laporan = $this->db->query("SELECT * FROM laporan")->result();?>
  <section class="content">
    <div class="container-fluid">
      <div class="container">
        <!-- Pesan Selamat Datang -->
        <div class="row">
            <div class="col-md">
              <br>
                <div class="alert alert-info">Selamat Datang <?php echo $this->session->userdata('user') ?></div>
            </div>
        </div>

        <!--Galery Agenda  -->
        <div class="row">
          <div class="col-md">
            <center>
            <div class="slideshow-container">
            <?php foreach ($agenda as $agenda){ ?>
              <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="<?php echo base_url('agenda/'.$agenda->foto) ?>" style="width:800px; height:500px; display: block; margin-left:auto; margin-right:auto;">
                <div class="text"><?php echo $agenda->judul ?></div>
              </div>
            <?php } ?>
            </div>
              <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
              </div>
            </center>
          </div>
        </div>

        <!-- Pembatas -->
        <div class="row">
          <div class="col-lg">
            <center>
              <br><br>
                <h3>Daftar Laporan</h3>
                <hr>
            </center>
          </div>
        </div>

        <!--Laporan  -->
        <div class="row">
          <?php foreach ($laporan as $laporan) { ?>
          <div class="col-md-4">
            <div class="card">
              <img src="<?php echo base_url('assets/laporan/'.$laporan->foto)?>" class="card-img-top img-fluid" style="height:204px">
              <div class="card-body">
                <p class="card-text"><?php echo $laporan->judul?></p>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>

<!-- Carosel -->
<script type="text/javascript">
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
