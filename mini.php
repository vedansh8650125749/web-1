<!DOCTYPE html>
<html>

<head>
  <title>X-STUDIOS</title>
  <link rel="icon" href="000856-Wolf-head-logo-maker-03.png" type="image/png" />
  <link rel="stylesheet" type="text/css" href="mini1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- dark mode properties -->
  <style>
    body {


      background-color: white;
      color: black;

    }

    .dark-mode {
      background-color: black;
      color: white;
    }

    .modal-header {
      background-color: black;
      color: white;
    }

    .b1::before {
      color: white;

    }

    .b1:after {
      color: black;
    }
  </style>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <button class="b1" onclick="myFunction()" style="border: 20px;position: fixed;bottom: 220px;padding: 6px;border-bottom-right-radius: 20px;border-top-right-radius: 20px;font-size: 25px;background-color: white;box-shadow: 2px 2px 10px;"><i class="fa fa-adjust" aria-hidden="true" style="color: #bb6425; font-size:30px"></i> </button>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up" aria-hidden="true"></i>
  </button>

  <!-- dark mode -->
  <script>
    function myFunction() {
      var element = document.body;
      element.classList.toggle("dark-mode");
    }
  </script>
  <!-- end -->
  <script>
    var mybutton = document.getElementById("myBtn");

    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }


    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <section class="section-1">
    <header>
      <h2 class="logo">X-STUDIOS</h2>
      <nav>
        <a href="about.html" class="active">About us</a>
        <i class="fa fa-user-circle" aria-hidden="true" style="color: #bb6425;"></i>
        <a href="booking.html">Bookings</a>
        <a href="gallery.php">Our Gallery</a><i class="fa fa-picture-o" aria-hidden="true" style="color: #bb6425;"></i>
        <a href="login.php">Login</a><i class="fa fa-sign-in" style="color: #bb6425;"></i>


      </nav>

    </header>


    <section class="banner">
      <div class="jumbotron" style="background-image: url(sunset-1373171.jpg); background-size: cover;">
        <div class="container text-center">
          <br><br>
          <h1 style="bottom: 50px;">Photography Redefined</h1>
          <h2>Capture through the eye. </h2>
          <br><br><br><br><br><br><br><br><br><br>

          <a href="gallery.html">Gallery &nbsp;</a>
          <br><br><br><br><br><br><br><br>
        </div>

      </div>
    </section>

  </section>



  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

  <script>
    $(document).ready(function() {
      $(window).on('scroll', function() {
        if ($(window).scrollTop()) {
          $("header").addClass('bgc');
        } else {
          $("header").removeClass('bgc');
        }
      });
    });

    var mybutton = document.getElementById("myBtn");

    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }


    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <br>

  <div class="b-example-divider"></div>

  <div class="container px-4 py-5" id="icon-grid">
    <h2 class="pb-2 border-bottom" style="text-align: center;">We Deal with..</h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#bootstrap"></use>
        </svg>
        <div>
          <h4 class="fw-bold mb-0">Portrait Photograph</h4>
          <p style="text-align: justify;text-justify: distribute;">Portrait photography is about capturing the essence, personality, identity and attitude of a person utilizing backgrounds, lighting and posing.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#cpu-fill"></use>
        </svg>
        <div>
          <h4 class="fw-bold mb-0">Landscape Photography</h4>
          <p style="text-align: justify;text-justify: distribute;">There are many variations of passages of Lorem Ipsum available, but majority have suffered alteration in some form, by inected humour.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#calendar3"></use>
        </svg>
        <div>
          <h4 class="fw-bold mb-0">Catelog Shoot</h4>
          <p style="text-align: justify;text-justify: distribute;">Catalogue Photography is a rather specialised photography discipline, and depending on the type of product you are selling it may require models, a strongly themed concept or both to show your product off really well.</p>
        </div>
      </div>

      <!-- section-1 -->

      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#geo-fill"></use>
        </svg>
        <div>
          <h4 class="fw-bold mb-0">Contact Us</h4>
          <p style="text-align: justify;text-justify: distribute;">Contact/Phone Number:
            +91 xxxxxxxxxx
            <br><br>
            <a href="#"><img src="fb.png" style="width: 38px; height: 30px; margin-left: 20px;margin-bottom: 1px;"></a>
            <a href="#"><img src="insta.png" style="width: 24px; height: 24px; margin-left: 10px; margin-bottom: 3px;"></a>
          </p>
        </div>
      </div>


      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#toggles2"></use>
        </svg>
        <div>
          <h4 class="fw-bold mb-0">Still life Photograph</h4>
          <p style="text-align: justify;text-justify: distribute;">Still life photography is a genre of photography used for the depiction of inanimate subject matter.</p>
        </div>
      </div>

      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#tools"></use>
        </svg>
        <div>
          <h4 class="fw-bold mb-0">Portfolio Shoot</h4>
          <p style="text-align: justify;text-justify: distribute;">A portfolio is a concise collection of your photos created to show people your best work. Whether you want to do weddings, portraits etc.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#calendar3"></use>
        </svg>
        <div>
          <h4 class="fw-bold mb-0">UTC+5:30</h4>
          <canvas id="canvas" style="width: auto;height: auto;">
          </canvas>

          <script>
            var canvas = document.getElementById("canvas");
            var ctx = canvas.getContext("2d");
            var radius = canvas.height / 2;
            ctx.translate(radius, radius);
            radius = radius * 0.90
            setInterval(drawClock, 1000);

            function drawClock() {
              drawFace(ctx, radius);
              drawNumbers(ctx, radius);
              drawTime(ctx, radius);
            }

            function drawFace(ctx, radius) {
              var grad;
              ctx.beginPath();
              ctx.arc(0, 0, radius, 0, 2 * Math.PI);
              ctx.fillStyle = 'white';
              ctx.fill();
              grad = ctx.createRadialGradient(0, 0, radius * 0.95, 0, 0, radius * 1.05);
              grad.addColorStop(0, '#333');
              grad.addColorStop(0.5, 'white');
              grad.addColorStop(1, '#333');
              ctx.strokeStyle = grad;
              ctx.lineWidth = radius * 0.1;
              ctx.stroke();
              ctx.beginPath();
              ctx.arc(0, 0, radius * 0.1, 0, 2 * Math.PI);
              ctx.fillStyle = '#333';
              ctx.fill();
            }

            function drawNumbers(ctx, radius) {
              var ang;
              var num;
              ctx.font = radius * 0.15 + "px arial";
              ctx.textBaseline = "middle";
              ctx.textAlign = "center";
              for (num = 1; num < 13; num++) {
                ang = num * Math.PI / 6;
                ctx.rotate(ang);
                ctx.translate(0, -radius * 0.85);
                ctx.rotate(-ang);
                ctx.fillText(num.toString(), 0, 0);
                ctx.rotate(ang);
                ctx.translate(0, radius * 0.85);
                ctx.rotate(-ang);
              }
            }

            function drawTime(ctx, radius) {
              var now = new Date();
              var hour = now.getHours();
              var minute = now.getMinutes();
              var second = now.getSeconds();
              //hour
              hour = hour % 12;
              hour = (hour * Math.PI / 6) +
                (minute * Math.PI / (6 * 60)) +
                (second * Math.PI / (360 * 60));
              drawHand(ctx, hour, radius * 0.5, radius * 0.07);
              //minute
              minute = (minute * Math.PI / 30) + (second * Math.PI / (30 * 60));
              drawHand(ctx, minute, radius * 0.8, radius * 0.07);
              // second
              second = (second * Math.PI / 30);
              drawHand(ctx, second, radius * 0.9, radius * 0.02);
            }

            function drawHand(ctx, pos, length, width) {
              ctx.beginPath();
              ctx.lineWidth = width;
              ctx.lineCap = "round";
              ctx.moveTo(0, 0);
              ctx.rotate(pos);
              ctx.lineTo(0, -length);
              ctx.stroke();
              ctx.rotate(-pos);
            }
          </script>

        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#toggles2"></use>
        </svg>
        <div>
          <h4 class="fw-bold mb-0">Feedback</h4>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">click here</button>

          <div class="modal" id="myModal" style="background-color: #000c;">
            <div class="modal-dialog">
              <div class="modal-header">
                <h5 class="modal-title">Feedback</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" style="color: red;background: black;cursor: pointer;border-radius: 45px; pointer-events: auto;"><i class="fa fa-times" aria-hidden="true" style="color:red; font-size:24px;"></i></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="mb-3">
                    <label class="form-label required" style="color: white;">Name</label>
                    <input type="text" class="form-control" style="pointer-events: auto;">
                  </div>
                  <div class="mb-3">
                    <label class="form-label required" style="color: white;">Email</label>
                    <input type="email" class="form-control" style="pointer-events: auto;">
                  </div>
                  <div class="mb-3">
                    <label class="form-label required" style="color: white;">Type your message here:</label>
                    <textarea class="form-control" style="pointer-events: auto; height:150px;"></textarea>

                  </div>

                </form>

              </div>
              <div clas="modal-footer">
                <button type="submit" class="btn btn-primary" style="pointer-events: auto;">Submit</button>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <footer class="page-footer font-small blue pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
      <!-- Footer Links -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3" style="background-color: #4a4a4a;color: white;"> &copy; | Designed by Vedansh and Prabjot Singh |
        <h6 style="text-align: center; color: white;">JavaScript must be enabled to access this site. Supports : Firefox 37+ Google Chrome 6.0+ Internet Explorer 9.0+ Safari 4.0+ </h6>

      </div>
      <!-- Copyright -->

    </div>
  </footer>
  <!-- Footer -->
</body>

</html>