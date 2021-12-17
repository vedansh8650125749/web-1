<?php require('connect.php'); ?>
<!DOCTYPE.html>
  <html>

  <head>
    <title>GALLERY</title>
    <link rel="icon" href="000856-Wolf-head-logo-maker-03.png" type="image/png" />
    <meta charset="utf-8">
    <link href="gallery.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrap.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      body {


        background-color: white;
        color: black;

      }

      .dark-mode {
        background-color: black;
        color: white;
      }
    </style>
    <!-- dark mode -->
    <script>
      function myFunction() {
        var element = document.body;
        element.classList.toggle("dark-mode");
      }
    </script>
    <!-- end -->
  </head>

  <body>

    <input type="radio" name="Photos" id="check1" checked>
    <input type="radio" name="Photos" id="check2">
    <input type="radio" name="Photos" id="check3">
    <input type="radio" name="Photos" id="check4">
    <div class="container">
      <h1>OUR PHOTO GALLERY</h1>
      <div class="top-content">

        <h3>Photo Gallery</h3>
        <label for="check1">All Photos</label>
        <label for="check2">Landscape Photos</label>
        <label for="check3">Still-life Photos</label>
        <label for="check4">Visited Places</label>
        <label><button class="b1" onclick="myFunction()" style="border-radius: 20px;background-color: #0000;border: 20px;cursor: pointer;">DARK MODE </button></label>
        <div class="back">
          <a href="mini.php">Home</a>
        </div>
      </div>
      <?php
      function getPhoto($con, $category = '')
      {
        $sql = "select *from photos";
        if ($category != '') {
          $sql .= " where category=$category";
        }
        $res = mysqli_query($con, $sql);
        $data = array();
        while ($row = mysqli_fetch_assoc($res)) {
          $data[] = $row;
        }
        return $data;
      }
      ?>

      <div class="photo-gallery">

        <?php
        $sql = "select * from photos where status=1 and category='still'";
        $res = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($res)) { ?>
          <div class="pic Still">
            <img src="<?php echo $row['photo_address'] ?>">
          </div>
        <?php } ?>

        <?php
        $sql = "select * from photos where status=1 and category='landscape'";
        $res = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($res)) { ?>
          <div class="pic Land">
            <img src="<?php echo $row['photo_address'] ?>">
          </div>
        <?php } ?>

        <?php
        $sql = "select * from photos where status=1 and category='visited'";
        $res = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($res)) { ?>
          <div class="pic Places">
            <img src="<?php echo $row['photo_address'] ?>">
          </div>
        <?php } ?>


        <!-- <div class="pic Still">
          <img src="1-2.jpg">
        </div>
        <div class="pic Land">
          <img src="n2.jpg">
        </div>
        <div class="pic Places">
          <img src="p2.jpg">
        </div>

        <div class="pic Still">
          <img src="1-3.jpg">
        </div>
        <div class="pic Land">
          <img src="n3.jpg">
        </div>

        <div class="pic Still">
          <img src="1-4.jpg">
        </div>
        <div class="pic Land">
          <img src="n4.jpg">
        </div>

        <div class="pic Still">
          <img src="1-5.jpg">
        </div>
        <div class="pic Land">
          <img src="n5.jpg">
        </div> -->
      </div>

    </div>
  </body>

  </html>