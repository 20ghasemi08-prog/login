<?php
if(isset($_GET['update']) && $_GET['update']=="success"){
    echo "<p class='alert alert-success mt-3'>با موفقیت بروز شد</p>";
}elseif(isset($_GET['delete']) && $_GET['delete']=="success"){
    echo "<p class='alert alert-danger mt-3'>کاربر با موفقیت حذف شد</p>";
}
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
    <div class="container mt-5 col-md-8">
        <table class="table table-light table-hover table-striped">
            <tr class="table table-dark">
                <th>نام</th>
                <th>نام خانوادگی</th>
                <th>ایمیل</th>
                <th>شماره همراه</th>
                <th>شهر</th>
                <th>وضعیت</th>
                <th>عملیات</th>
                <!-- <th>operation</th> -->
            </tr>
            <?php
            include("conn.php");
            $query = "SELECT * FROM personnel";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_row($result)){
                if($row[6]=="فعال"){
                    $active = "badge text-bg-primary";
                }elseif($row[6]=="غیر فعال"){
                    $active = "badge text-bg-danger";
                }elseif($row[6]=="در انتظار"){
                    $active = "badge text-bg-warning";
                }else{
                    $active = "badge text-bg-secondary";
                    $row[6] = "بدون محتوا";
                }
                echo "<tr>
                <td> $row[1] </td>
                <td> $row[2] </td>
                <td> $row[3] </td>
                <td> $row[4] </td>
                <td> $row[5] </td>
                <td><span class='$active'>$row[6]</span></td>
                <td>
                <a href='Form-2.php?id=$row[0]'><button class='btn btn-sm bg-info text-light'>ویرایش</button></a>
                <a href='delete.php?id=$row[0]'><button class='btn btn-sm bg-danger text-light'>حذف</button></a>
                </td>
                </tr>";
            }
            ?>
        </table>
    </div>    
</body>
</html>