<?php
include("navbar.php");
$id = $_GET['id'];
include("conn.php");
$sql = "SELECT * FROM personnel where id = '$id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@100..900&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        body {
            font-family: "Vazirmatn", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400px;
            font-style: normal;
            direction: rtl;
        }
    </style>
</head>

<body>
    <div class="container mt-5 col-6">
        <div class="row">
            <div>
                <form action="update.php" method="post" class="form-group border border-dark rounded-3 p-3">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" id="" placeholder="شناسه" class="form-control">
                    <input type="text" name="First_Name" value="<?php echo $row['first_name']; ?>" id="" placeholder="نام" class="form-control">
                    <input type="text" name="Last_Name" value="<?php echo $row['last_name']; ?>" id="" placeholder="نام خانوادگی" class="form-control mt-3">
                    <input type="text" name="Email" value="<?php echo $row['email']; ?>" id="" placeholder="ایمیل" class="form-control mt-3">
                    <input type="text" name="Phone_number" value="<?php echo $row['phone_number']; ?>" id="" placeholder="شماره همراه" class="form-control mt-3">
                    <input type="text" name="City" value="<?php echo $row['city']; ?>" id="" placeholder="شهر" class="form-control mt-3">
                    <input type="submit" value="بروزرسانی" class="form-control bg-primary text-light mt-3">
                </form>
            </div>
        </div>
    </div>
</body>

</html>