<?php
require('connect.php');
function getSafeValue($con, $str)
{
    if ($str != '') {
        $str = trim($str);
        return mysqli_real_escape_string($con, $str);
    }
}
if (isset($_GET['type']) && $_GET['type'] != ' ') {
    $type = getSafeValue($con, $_GET['type']);
    if ($type == 'status') {
        $operation = getSafeValue($con, $_GET['operation']);
        $id = getSafeValue($con, $_GET['id']);
        if ($operation == 'active') {
            $status = '1';
        } else {
            $status = '0';
        }
        $updateStatusSql = "update photos set status='$status' where id='$id'";
        mysqli_query($con, $updateStatusSql);
    }

    if ($type == 'delete') {
        $id = getSafeValue($con, $_GET['id']);
        $deleteSql = "delete from photos where id='$id'";
        mysqli_query($con, $deleteSql);
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
            <h4 class="fs-2 text-center ">Photos</h4>
            <br>
        </div>
        <h5 class="btn btn-white ms-5 px-2 py-1 fs-6 "><a class="link-dark" href="managePhotos.php">Add
                Photos</a></h5>
        <div class="">
            <table class="table">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from photos order by id desc";
                    $res = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_assoc($res)) { ?>
                        <tr>
                            <td><img src="<?php echo $row['photo_address'] ?>" height="80px" width="100px"> </td>
                            <td> <?php echo $row['category'] ?> </td>
                            <td>
                                <?php
                                if ($row['status'] == 1) {
                                    echo "<a class='link-white btn btn-success px-2 py-1' href='?type=status&operation=deactive&id=" . $row['id'] .
                                        "'>Active</a>&nbsp&nbsp";
                                } else {
                                    echo "<a class='link-white btn btn-warning px-2 py-1' href='?type=status&operation=active&id=" . $row['id'] .
                                        "'>Inactive</a>&nbsp&nbsp";
                                }
                                ?>
                            </td>
                            <td> <?php echo "<a class='link-white btn btn-danger px-2 py-1' href='?type=delete&id=" . $row['id'] .
                                        "'>Delete</a>"; ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>