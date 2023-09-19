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

  <title>Reap|about</title>

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
  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container">
      {{-- <div class="row">
        <div class="col-md-6"> --}}
          {{-- <div class="detail-box"> --}}
            <div class="heading_container">
              <h2>
                About Us
              </h2>
              {{-- <img src="images/plug.png" alt=""> --}}
            </div>

            <p>
              <b><h5>Our Story</h5></b>
                At Reap Industries Limited, we believe in the power of quality and care. 
                Established [mention year], we embarked on a journey to revolutionize the poultry industry. 
                Guided by a passion for excellence and a commitment to our customers, we have grown into a 
                leading supplier of day-old chicks and chick feed additives.
            </p>

            <p>
            <b><h5>Our Mission</h5></b>
                Empowering Poultry Farmers: Our mission is to empower poultry farmers with the finest 
                breeds and premium additives, ensuring healthy flocks and robust businesses.
            </p>


            <p>
             <b><h5>Sustainable Practices</h5></b>
               We are dedicated to sustainable and ethical practices. From our state-of-the-art hatchery to our carefully curated 
              selection of additives, every step reflects our commitment to the environment and animal welfare.

            </p>
            <p>
              <b><h5>What Sets Us Apart</h5></b>
              Expertise: Backed by years of experience, our team comprises industry experts and 
              seasoned professionals. This wealth of knowledge ensures that every product we offer is of the highest quality.
            </p>


              <p>
              <b><h5> Diverse Product Range</h5></b>
                 From layers and broilers to specialty breeds like Sasso, 
                Kroilers, and Roasters, we provide a wide array of day-old chicks. Additionally, our 
                selection of additives, including vitamins, acidifiers, and more, caters to every aspect of 
                poultry nutrition.
              </p>
             
              <p>
              <b><h5>Customer-Centric Approach</h5></b>
                Your success is our priority. We work closely with you, 
                offering guidance and support at every stage of your poultry farming journey.
              </p>

              <p>
              <b><h5>Our Commitment</h5></b>
               <u><h6>Quality Assurance</h6></u>
                Every chick and additive that bears our name undergoes 
                rigorous quality checks to ensure it meets our exacting standards. <br><br>

               <u><h6>Innovation</h6></u>
                We stay at the forefront of industry trends, continuously seeking 
                innovative solutions to enhance the productivity and profitability of your poultry farm.
<br><br>
               
               <u><h6> Community Impact </h6></u>
                We are dedicated to giving back to the communities we serve, promoting 
                sustainable practices and fostering growth.
         
              </p>


          {{-- </div>
        </div> --}}

        {{-- <div class="col-md-6">
          <div class="img_container">
            <div class="img-box b1">
              <img src="images/about-img1.jpg" alt="" />
            </div>
            <div class="img-box b2">
              <img src="images/about-img2.jpg" alt="" />
            </div>
          </div>
        </div> --}}

      {{-- </div> --}}
    </div>
  </section>

  <!-- end about section -->
  @include('footer')

  <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>  
</body>

</html>