@extends('master')
@section('controls')
<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <!-- end header section -->
  </div>

  <!-- about section -->
<div class="body_bg layout_padding">
  <section class="about_section layout_padding" style="margin-top: 204px;">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Me
              </h2>
            </div>
            <p>
              My name is Rayhan Alviansyah. I am currently studying at SMK Wikrama Bogor. My hobbies are jogging, playing football, playing games and cycling. The student is energetic and full of enthusiasm.
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="../asset/images/about-img.jpeg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end about section -->

  <hr>


    <section class="client_section layout_padding-top">
      <div class="d-flex justify-content-center">
        <div class="heading_container">
          <h2>
            My Grade
          </h2>
        </div>
      </div>
      <div class="container layout_padding2">
        <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
            <li data-target="#carouselExample2Indicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item ">
              <div class="client_container">
                <div class="client-id">
                  <div class="img-box">
                    <img src="https://cdn-sekolah.annibuku.com/20200465/2.jpg" alt="">
                  </div>
                  <div class="client_name">
                    <div>
                      <h3>
                        SDN Pasir angin 02
                      </h3>
                      <p>
                        2014 - 2020
                      </p>
                    </div>
                  </div>
                </div>
                <div class="client_detail">
                  <div class="client_text">
                    <blockquote>
                      <p>
                        here I study learning and basic knowledge
                      </p>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item active">
              <div class="client_container">
                <div class="client-id">
                  <div class="img-box">
                    <img src="https://cdn-sekolah.annibuku.com/20200899/2.jpg" alt="">
                  </div>
                  <div class="client_name">
                    <div>
                      <h3>
                        SMPN 01 Megamendung
                      </h3>
                      <p>
                        2020 - 2023
                      </p>
                    </div>
                  </div>
                </div>
                <div class="client_detail">
                  <div class="client_text">
                    <blockquote>
                      <p>
                        here I started to learn the critical stages to start honing my skills and knowledge
                      </p>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="client_container">
                <div class="client-id">
                  <div class="img-box">
                    <img src="https://ppdb.smkwikrama.sch.id/assets/landing%20page/images/Gedung.jpg" alt="">
                  </div>
                  <div class="client_name">
                    <div>
                      <h3>
                        SMK Wikrama bogor
                      </h3>
                      <p>
                        still in progress
                      </p>
                    </div>
                  </div>
                </div>
                <div class="client_detail">
                  <div class="client_text">
                    <blockquote>
                      <p>
                        Here I started preparing myself to enter the world of work
                      </p>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  
      </div>
    </section>
  
    <!-- end grade -->
  <hr>
  </div>
  <!-- info section -->
  <!-- end info section -->

  <!-- footer section -->
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</body>
@endsection