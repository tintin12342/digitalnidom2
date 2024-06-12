<?php include('router.php'); ?>
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




			<!-- PAGE 404
			============================================= -->	
			<section id="page-404" class="bg--fixed division">
				<div class="container">	
					

					<!-- 404 PAGE TEXT -->
					<div class="row justify-content-center">	
						<div class="col-md-9 col-lg-8">
							<div class="page-404-txt text-center">

								<!-- Image -->
								<div class="page-404-img">
									<img class="img-fluid" src="images/error-404.png" alt="error-404-img">
								</div>

								<!-- Title -->
								<h2 class="h2-title color--yellow">Page Not Found</h2>

								<!-- Text -->
								<h6 class="h6-xl">Oops! The page you are looking for might have been moved, renamed or might 
									never existed
								</h6>

								<!-- Button -->
								<a href="demo-1.html" class="btn btn--theme hover--tra-white">Back to Home</a>	

							</div>
						</div>	
					</div>	<!-- END 404 PAGE TEXT -->


					<!-- DIVIDER LINE -->
					<hr class="divider">

<?php
  include ("footer.php")
?>