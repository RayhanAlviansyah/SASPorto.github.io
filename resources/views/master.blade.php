<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Home</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />


  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <!-- boxicon stylesheet -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.css" />

  <!-- Font awesome css-->
  <script src="https://kit.fontawesome.com/c0cf1b65df.js" crossorigin="anonymous"></script>

  <!-- Bootstrap css -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../asset/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../asset/css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <x-navbar />
    <!-- end header section -->
    <!-- slider section -->
    @yield('controls')
    <!-- end slider section -->
  </div>

  <!-- about section -->
  <!-- end about section -->
  <div class="body_bg layout_padding">

        <br>
        <br>

    <!-- quote section -->
    <section class="quote_section layout_padding">
      <div class="container">
        <div class="box">
          <div class="detail-box">
            <h3>
              Get Your Quote Today!
            </h3>
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page
            </p>
          </div>
          <div class="btn-box">
            <a href="index">
              Get A Quote
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- end quote section -->
    
  </div>

  <!-- info section -->

  <!-- end info section -->

  <!-- footer section -->
  <!-- footer section -->

  <script type="text/javascript" src="../asset/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="../asset/js/bootstrap.js"></script>

</body>
<x-footer />
</html>