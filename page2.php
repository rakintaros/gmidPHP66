<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2. -</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body>
    <div class="container">
        <h3>Page 2. -</h3>
        <form action="result.php" method="get">
            <div class="mb-3 mt-3">
                <label class="form-label">Number 1:</label>
                <input type="number" class="form-control" id="num1" placeholder="Enter Number1" name="num1">
            </div>
            <div>
                -
            </div>
            <input type="hidden" name="op" value="-">
            <div class="mb-3">
                <label class="form-label">Number 2:</label>
                <input type="number" class="form-control" id="num2" placeholder="Enter Number2" name="num2">
            </div>
            <button type="submit" class="btn btn-primary">คำนวณ</button>
        </form>
    </div>
</body>

</html>