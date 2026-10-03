<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
    <title>form login</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <form action="insertuser.php" method="post" class="form-group col-sm-6  border border-dark rounded-3 p-3">
                <input type="text" name="name" id="" placeholder="name" class="form-control border border-dark"><br>
                <input type="text" name="family" id="" placeholder="family" class="form-control"><br>
                <input type="text" name="email" id="" placeholder="email" class="form-control"><br>
                <input type="text" name="mobile" id="" placeholder="mobile" class="form-control"><br>
                <input type="text" name="username" id="" placeholder="username" class="form-control"><br>
                <input type="password" name="password" id="" placeholder="password" class="form-control"><br>
                <input type="submit" value="login" class="form-control bg-success text-light">
            </form>
        </div>
    </div>
    
    <!-- <div class="container mt-5">
        <div class="row">
            <div class="col-sm-3 bg-primary">
                Abolfazl
            </div>
            <div class="col-sm-3 bg-secondary">
                Ghasemi
            </div>
            <div class="col-sm-3 bg-success">
                Abolfazl@gmail.com
            </div>
            <div class="col-sm-3 bg-danger">
                09911952999
            </div>
        </div>
    </div> -->
</body>

</html>