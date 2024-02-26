  <?= $this->extend('template/landing_page');?>
  <?= $this->section('content') ;?>

  <!-- hero section start -->
  <section class="hero" id="home">
      <main class="content">
          <h1>Mari Nikmati secangkir <span>Kopi</span></h1>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur, doloremque!</p>
          <a href="#" class="cta"> Beli Sekarang</a>
          <!-- Photo by <a href="https://unsplash.com/@isengrapher?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Ed Us</a> on <a href="https://unsplash.com/photos/man-and-woman-in-white-hijab-RwZzAcRmbbI?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Unsplash</a>
   -->
      </main>
  </section>
  <!-- hero section end -->

  <!-- about section start -->
  <section id="about" class="about">

      <h2>
          <span>Tentang</span> Kami
      </h2>
      <div class="row">
          <div class="about-img">
              <img src="<?php echo base_url('belajar.jpg'); ?>" alt="tentang kami">
              <!-- Photo by <a href="https://unsplash.com/@bianca_naira_?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Bianca Naira</a> on <a href="https://unsplash.com/photos/two-girls-sitting-at-a-table-with-a-book-and-a-drink-djARveDetkM?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Unsplash</a>
   -->
          </div>
          <div class="content">
              <h3>Kenapa Harus Bersekolah di Tempat Kami????</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem id temporibus et corporis
                  assumenda numquam sed dicta? Atque, sapiente veniam?</p>
          </div>
      </div>
  </section>
  <!-- about section end -->

  <!-- section menu start -->
  <section id="menu" class="menu">
      <h2>Menu <span>Kami</span></h2>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi natus, delectus perferendis non error adipisci
          sequi quidem a labore, ducimus saepe atque. Blanditiis, nostrum quidem.</p>

      <div class="row">
          <div class="menu-card">
              <img src=<?php echo base_url('belajar.jpg'); ?> alt="" class="menu-card-image">
              <h3 class="menu-card-title">Belajar Satu</h3>
              <p class="menu-card-price"> Rp 2000</p>
          </div>
          <div class="menu-card">
              <img src=<?php echo base_url('belajar.jpg'); ?> alt="" class="menu-card-image">
              <h3 class="menu-card-title">Belajar Satu</h3>
              <p class="menu-card-price"> Rp 2000</p>
          </div>
          <div class="menu-card">
              <img src=<?php echo base_url('belajar.jpg'); ?> alt="" class="menu-card-image">
              <h3 class="menu-card-title">Belajar Satu</h3>
              <p class="menu-card-price"> Rp 2000</p>
          </div>
          <div class="menu-card">
              <img src=<?php echo base_url('belajar.jpg'); ?> alt="" class="menu-card-image">
              <h3 class="menu-card-title">Belajar Satu</h3>
              <p class="menu-card-price"> Rp 2000</p>
          </div>
          <div class="menu-card">
              <img src=<?php echo base_url('belajar.jpg'); ?> alt="" class="menu-card-image">
              <h3 class="menu-card-title">Belajar Satu</h3>
              <p class="menu-card-price"> Rp 2000</p>
          </div>
          <div class="menu-card">
              <img src=<?php echo base_url('belajar.jpg'); ?> alt="" class="menu-card-image">
              <h3 class="menu-card-title">Belajar Satu</h3>
              <p class="menu-card-price"> Rp 2000</p>
          </div>

      </div>
  </section>
  <!-- section menu end -->

  <!-- Kontak section start -->
  <section id="kontak" class="kontak">
      <h2>Kontak <span>Kami</span></h2>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quas quos iste pariatur dolore molestias
          suscipit aut velit! Distinctio, eaque!</p>
      <div class="row">
          <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.6371629381497!2d122.0812684739225!3d-4.832208095143339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da2e228021208f9%3A0x23b1e546480e1904!2sSD%20Negeri%2042%20Toli-Toli!5e0!3m2!1sid!2sid!4v1708734134072!5m2!1sid!2sid"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

          <form action="" method="post">

              <div class="input-group">
                  <i data-feather="user"></i>
                  <input type="text" placeholder="nama">
              </div>
              <div class="input-group">
                  <i data-feather="mail"></i>
                  <input type="text" placeholder="email">
              </div>
              <div class="input-group">
                  <i data-feather="phone"></i>
                  <input type="tel" placeholder="nama">
              </div>
              <button type="submit" class="btn"><?=$nama ;?></button>
          </form>
      </div>



  </section>
  <!-- Kontak section end -->

  <!-- footer start -->
  <footer>
      <div class="socials">
          <a href="">
              <i data-feather="instagram"></i>
          </a>
          <a href="">
              <i data-feather="twitter"></i>

          </a>
          <a href="">
              <i data-feather="facebook"></i>

          </a>
          <!-- <a href="">
                <i data-feather="tiktok"></i>
            </a> -->
      </div>
      <div class="links">
          <a href="#home">Home</a>
          <a href="#about">Tentang Kami</a>
          <a href="#menu">Menu</a>
          <a href="#kontak">Kontak</a>
      </div>
      <div class="credit">
          <p>Dibuat Oleh <span>Marfin</span></p>
      </div>
  </footer>
  <!-- footer end -->
  <?=$this->endSection() ;?>