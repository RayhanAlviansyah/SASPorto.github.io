@extends('master')
@section('controls')
<body>
  <div class="hero_area">
    <!-- header section strats -->
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <div>
                      <h1>
                        Welcome To <br>
                        <span>
                          My Portofolio
                        </span>
                      </h1>
                      <p>
                        Jadilah kamu manusia yang pada kelahiranmu semua orang tertawa bahagia, tetapi hanya kamu sendiri yang menangis dan pada kematian mu semua orang menangis sedih, tetapi hanya kamu yang tersenyum.
                      </p>
                      <div class="btn-box">
                        <a href="contact" class="btn-1">
                          Contact Me
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <div>
                      <h1>
                        Welcome To <br>
                        <span>
                          My Portofolio
                        </span>
                      </h1>
                      <p>
                        Dunia itu seluas langkah kaki. Jelajahilah dan jangan pernah takut melangkah. hanya dengan itu kita bisa mengerti kehidupan dan menyatu dengan nya
                      </p>
                      <div class="btn-box">
                        <a href="contact" class="btn-1">
                          Contact Me
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="custom_carousel-control">
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->
  <!-- end about section -->
  <div class="body_bg layout_padding">

        <!-- client section -->


        <!-- end client section -->

        <br>
        <br>


    <!-- quote section -->

    <!-- end quote section -->


    <!-- contact section -->

    <!-- end contact section -->



  </div>
  <!-- info section -->

  <!-- end info section -->

  <!-- footer section -->
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</body>
@endsection