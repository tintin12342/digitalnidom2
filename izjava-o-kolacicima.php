<?php
  include ("header.php")
?>
  <body class="theme--dark">
    <!-- PRELOADER SPINNER
		============================================= -->
    <div id="loading" class="loading--theme">
      <div id="loading-center">
        <span class="loader"><span class="loader-inner"></span></span>
      </div>
    </div>

    <!-- PAGE CONTENT
		============================================= -->
    <div id="page" class="page">
      <!-- HEADER
			============================================= -->
      <header id="header" class="tra-menu navbar-dark white-scroll">
        <div class="header-wrapper">
          <!-- MOBILE HEADER -->
          <div class="wsmobileheader clearfix">
            <span class="smllogo">
              <a href="pocetna"
                ><img src="images/digitalni-dom-logo-light.png" alt="mobile-logo"
              /></a>
            </span>
            <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
          </div>

          <!-- NAVIGATION MENU -->
          <div class="wsmainfull menu clearfix">
            <div
              class="container d-flex justify-content-between align-items-center"
            >
              <!-- HEADER BLACK LOGO -->
              <div class="desktoplogo logo-black">
                <a href="pocetna" class="logo-black"
                  ><img src="images/logo-light.png" alt="logo"
                /></a>
              </div>

              <!-- HEADER WHITE LOGO -->
              <div class="desktoplogo logo-white">
                <a href="pocetna" class="logo-white"
                  ><img src="images/logo-light.png" alt="logo"
                /></a>
              </div>

              <!-- MAIN MENU -->
              <nav class="wsmenu clearfix">
                <ul class="wsmenu-list nav-theme">
                  <!-- SIMPLE NAVIGATION LINK -->
                  <li class="nl-simple" aria-haspopup="true">
                    <a href="pocetna" class="h-link">Početna</a>
                  </li>

                  <!-- DROPDOWN SUB MENU -->
                  <li aria-haspopup="true">
                    <a href="#" class="h-link"
                      >Naše usluge <span class="wsarrow"></span
                    ></a>
                    <ul class="sub-menu ico-10">
                      <li aria-haspopup="true" class="h-link">
                        <a href="features.html">Google oglašavanje</a>
                      </li>
                      <li aria-haspopup="true" class="h-link">
                        <a href="features.html">Izrada web stranica</a>
                      </li>
                      <li aria-haspopup="true" class="h-link">
                        <a href="features.html">SEO optimizacija</a>
                      </li>
                      <li aria-haspopup="true" class="h-link">
                        <a href="features.html"
                          >Oglašavanje na društvenim mrežama</a
                        >
                      </li>
                    </ul>
                  </li>

                  <!-- SIMPLE NAVIGATION LINK -->
                  <li class="nl-simple" aria-haspopup="true">
                    <a href="o-nama" class="h-link">O nama</a>
                  </li>

                  <!-- SIMPLE NAVIGATION LINK -->
                  <li class="nl-simple" aria-haspopup="true">
                    <a href="kontakt" class="h-link">Kontakt</a>
                  </li>

                  <!-- GET STARTED BUTTON -->
                  <li class="nl-simple" aria-haspopup="true">
                    <a
                      href="kontakt"
                      class="btn r-06 btn--theme hover--tra-coal last-link"
                      >Zatražite ponudu</a
                    >
                  </li>
                </ul>
              </nav>
              <!-- END MAIN MENU -->
            </div>
          </div>
          <!-- END NAVIGATION MENU -->
        </div>
        <!-- End header-wrapper -->
      </header>
      <!-- END HEADER -->

      <!-- COOKIES PAGE
			============================================= -->
      <section id="cookies-page" class="pb-100 inner-page-hero division">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-10">
              <!-- INNER PAGE TITLE -->
              <div class="inner-page-title">
                <h2 class="h2-title">Izjava o kolačićima</h2>
                <p class="p-xl">Niže pročitajte našu izjavu o kolačićima</p>
              </div>

              <!-- TEXT BLOCK -->
              <div class="txt-block legal-info">
                SCRIPT GOES HERE
              </div>
              <!-- END TEXT BLOCK -->
            </div>
          </div>
          <!-- End row -->
        </div>
        <!-- End container -->
      </section>
      <!-- END COOKIES PAGE -->

      <!-- DIVIDER LINE -->
      <hr class="divider" />

<?php
  include ("footer.php")
?>