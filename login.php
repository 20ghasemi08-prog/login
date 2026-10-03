<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="container col-sm-6 mt-5">
        <div class="row ">
            <h3>Login Form</h3>
            <form action="login_checker.php" method="post" class="form-group">
                <input type="text" name="username" id="" placeholder="username" class="form-control mt-2">
                <input type="password" name="password" id="" placeholder="password" class="form-control mt-2">
                <input type="submit" value="login" class="btn btn-sm btn-primary mt-2">
                <?php
                // $login_status = $_GET['login'];
                if (isset($_GET['login']) && $_GET['login'] == 'fail') {
                    echo "<p class='alert alert-danger mt-2'> Username or password is wrong </p>";
                }
                if (isset($_GET['login']) && $_GET['login'] == 'notlogin') {
                    echo "<p class='alert alert-danger mt-2'> You must firs login </p>";
                }
                ?>
            </form>
        </div>
    </div>
</body>

</html>