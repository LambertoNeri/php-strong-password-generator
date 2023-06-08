<?php include_once __DIR__  . '/logic.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div class="container"><?php
		if ($password_length) { ?>
			<div class="alert alert-<?= $is_password_valid ? 'success' : 'danger' ?>" role="alert">
				<?= $message ?>
			</div><?php
		} ?>

    <div class="form-container" action="index.php">
        <form method="get" >
            <div class="mb-3">
                <label for="password-length" class="form-label">Da quanti caratteri preferisci la tua password?</label>
                <input type="" class="form-control" id="password-length" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">inserisci numero</div>
            </div>
            <div class="buttons d-flex justify-content-center gap-4">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="index.php" class="btn btn-secondary">Reset</a>
            </div>
        </form>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>