<?php include_once __DIR__ . '/logic.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Iscrizione newsletter</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"
		defer></script>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container"><?php
		if (is_numeric($password)) { ?>
			<div class="alert alert-<?= $is_password_valid ? 'success' : 'danger' ?>" role="alert">
				<?= $message ?>
			</div><?php
		} else { ?>
			<div class="alert alert-danger" role="alert">
				Devi Inserire un numero!!!
			</div><?php
		} ?>

		<h1>Generatore di Password Randomica</h1>
		<form>
			<div class="mb-3">
			  <label for="email" class="form-label">Lunghezza Password </label>
			  <input type="text" class="form-control" id="password" name="password">
			</div>
			<button type="submit" class="btn btn-primary">Genera</button>
			<a href="/classe96-0870-controllo-mail" class="btn btn-secondary">Resetta</a>

			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="lettere" name="chars-letters" value="1">
				<label class="form-check-label" for="lettere">
					Lettere
				</label>
			</div>

			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="numeri" name="chars-numbers" value="1">
				<label class="form-check-label" for="numeri"> 
					Numeri
				</label>
			</div>

			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="simboli" name="chars-symbols" value="1">
				<label class="form-check-label" for="simboli">
					Simboli
				</label>
			</div>
		</form>
		<?php if (is_numeric($password) && ($chars_numbers == 1 Or $chars_letters == 1 Or $chars_symbols == 1 )) { ?>
			<div class="password-generator">
				<?php
					if (is_numeric($password) && $chars_symbols == '1' && $chars_numbers == '1' && $chars_letters == '1') {
						?> <span>La tua password è : </span><span style="color: red"><?php echo random_password_all($password)?></span> <?php
					}
					else if(is_numeric($password) && $chars_symbols == '1' && $chars_numbers == '1') {
						?> <span>La tua password è : </span><span style="color: red"><?php echo random_password_symbols_and_numbers($password)?></span> <?php
					}
					else  if(is_numeric($password) && $chars_numbers == '1' && $chars_letters == '1') {
						?> <span>La tua password è : </span><span style="color: red"><?php echo random_password_numbers_and_letters($password)?></span> <?php
					}
					else  if(is_numeric($password) && $chars_symbols == '1' && $chars_letters == '1') {
						?> <span>La tua password è : </span><span style="color: red"><?php echo random_password_symbols_and_letters($password)?></span> <?php
					}
					else if(is_numeric($password) && $chars_numbers == '1') {
						?> <span>La tua password è : </span><span style="color: red"><?php echo random_password_numbers($password)?></span> <?php
					}
					else if(is_numeric($password) && $chars_letters == '1') {
						?> <span>La tua password è : </span><span style="color: red"><?php echo random_password_letters($password)?></span> <?php
					}
					else if(is_numeric($password) && $chars_symbols == '1') {
						?> <span>La tua password è : </span><span style="color: red"><?php echo random_password_symbols($password)?></span> <?php
					} 
				?>
			</div> <?php
		} ?>	
	</div>
</body>
</html>