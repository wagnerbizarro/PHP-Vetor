<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">
    <title>Array</title>
</head>
<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-sm">
            <h3 class="text-info">VETOR CARS</h3>
            <button type="button" class="navbar-toggler">
                <span class="navba-toggler-icon"></span>
            </button>
        </div>
    </nav>
</header>

<body>
    <br>
    <main>
        <div class="container-sm">


            <form method="POST">
                <button type="submit" class="btn btn-primary" name="show">SHOW</button>
                <button type="submit" class="btn btn-primary" name="append">APPEND</button>
                <button type="submit" class="btn btn-primary" name="prepend">PREPEND</button>
                <button type="submit" class="btn btn-primary" name="del">DELETE</button>
                <button type="submit" class="btn btn-primary" name="del_end">DELETE_END</button>
            </form>
            <br><br>

            <fieldset class="border border-success p-2 mb-2">
                <legend class="text-left"></legend>
                <pre>
                    <?php include("code.php"); ?>
                </pre>
            </fieldset>

        </div>
    </main>
</body>

</html>