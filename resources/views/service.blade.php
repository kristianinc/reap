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

  <title>Reap inc</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

  <!-- responsive style -->
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
</head>


<body class="sub_page">

 @include('navbar')
  <!-- service section -->
  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Services Offered
        </h2>
        {{-- <img src="images/plug.png" alt=""> --}}
      </div>

      <div class="service_container">

        <div class="box active">
          <div class="img-box">
            <img src="images/chickies.jpeg" class="img1">
          </div>
          <div class="detail-box">
            <h5>
              Day-Old Chicks
            </h5>
            <p>
              We have day old chicks available in large numbers.
            </p>
          </div>
        </div>

        <div class="box active">
          <div class="img-box">
            <img src="images/feed.jpeg" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Chick Feed Additives
            </h5>
            <p>
              Premium chick feed additives in stock.
            </p>
          </div>
        </div>

        {{-- <div class="box">
          <div class="img-box">
            <img src="images/s3.png" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Equipment Maintenance
            </h5>
            <p>
              There are many variations of passages of Lorem Ipsum available,
            </p>
          </div>
        </div>

        <div class="box ">
          <div class="img-box">
            <img src="images/s4.png" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Offshore Engineering
            </h5>
            <p>
              There are many variations of passages of Lorem Ipsum available,
            </p>
          </div>
        </div>

        <div class="box">
          <div class="img-box">
            <img src="images/s5.png" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Electrical Wiring
            </h5>
            <p>
              There are many variations of passages of Lorem Ipsum available,
            </p>
          </div>
        </div> --}}

      {{-- </div> closes service container --}}

      {{-- <div class="btn-box">
        <a href="">
          Read More
        </a>
      </div> --}}

    </div>
  </section>
  <!-- end service section -->

@include('footer')

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>


</body>

</html>