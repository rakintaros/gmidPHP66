<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1. +</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body>
    <div class="container">
        <form action="/action_page.php">
            <div class="mb-3 mt-3">
                <label class="form-label">Number 1:</label>
                <input type="number" class="form-control" id="num1" placeholder="Enter Number1" name="num1">
            </div>
            <div class="mb-3">
                <label class="form-label">Number 2:</label>
                <input type="number" class="form-control" id="num2" placeholder="Enter Number2" name="num2">
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>