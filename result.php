<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result page</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <center>
        <?php
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $op = $_GET['op'];
        if ($op == '+')
            $sum = $num1 + $num2;
        if ($op == '-')
            $sum = $num1 - $num2;
        if ($op == '*')
            $sum = $num1 * $num2;
        if ($op == '/')
            $sum = $num1 / $num2;

        ?>
        <div class="card" style="width:250px">
            <img class="card-img-top" src="image/img1.gif" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">ผลการคำนวณ</h4>
                <p class="card-text">
                    <?php
                    echo $num1 . ' ' . $op . ' ' . $num2 . ' = ' . number_format($sum, 2);
                    ?>
                </p>
                <a href="index.html" class="btn btn-danger">Home</a>
            </div>
        </div>
</body>
</center>

</html>