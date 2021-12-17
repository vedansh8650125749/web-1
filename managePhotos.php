<?php
require('connect.php');
function getSafeValue($con, $str)
{
    if ($str != '') {
        $str = trim($str);
        return mysqli_real_escape_string($con, $str);
    }
}
$res = '';
$photo = '';
$category = '';
$msg = '';
if (isset($_POST['submit'])) {
    $photo = getSafeValue($con, $_POST['photo']);
    $category = getSafeValue($con, $_POST['category']);
    $sql = mysqli_query($con, "select * from photos where photo_address='$photo'");
    $check = mysqli_num_rows($sql);
    if ($check > 0) {
        if (isset($_GET['id']) && $_GET['id'] != '') {
            $getData = mysqli_fetch_assoc($sql);
            if ($id == $getData['id']) {
            } else {
                $msg = "Photo already exist";
            }
        } else {
            $msg = "Photo already exist";
        }
    }
    if ($msg == '') {
        $sql = "insert into photos(photo_address, category, status) values('$photo','$category','1')";
        if (mysqli_query($con, $sql)) {
            echo "<script>window.location.href='admin_photo.php';</script>";
            exit;
        } else {
            $res = "Error";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
</head>

<body>
    <header>
        <h2 class="logo">X-STUDIOS</h2>
        <nav>
            <a style="color:white;">Welcome <?php
                                            if (isset($_SESSION['ADMIN_LOGIN'])) {
                                                $userName = $_SESSION['USER_NAME'];
                                                echo $userName;
                                            } ?> </a></i>
            <a href="logout.php">Logout</a><i class="fa fa-sign-in" style="color: #bb6425;"></i>
        </nav>
    </header>
    <main>
        <div class="container pt-4">
            <h4 class="fs-2 text-center ">Add Photos</h4>
            <br>
        </div>

        <form method="post">
            <div class="form-outline mb-4 mx-5">
                <label class="form-label" for="photo">Enter photo address</label>
                <input type="text" name="photo" id="photo" class="form-control" required />
            </div>
            <div class="form-outline mb-4 mx-5">
                <label class="form-label" for="category">Enter photo category</label>
                <select name="category" id="category">
                    <option value="landscape">Landscape</option>
                    <option value="still">Still-Life</option>
                    <option value="visited">Visited</option>
                </select>
            </div>
            <div class="mb-1 d-flex justify-content-center field_error">
                <?php echo $msg ?>
            </div>
            <div class="mb-1 d-flex justify-content-center">
                <?php echo $res ?>
            </div>
            <!-- Submit button -->
            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-primary mx-5">Submit</button>
            </div>
        </form>
    </main>
</body>

</html>