<?php 
include("includes/header.php");
include("includes/form_handlers/settings_handler.php");
?>

<div class="main_column column">

	<h4>Detalles de Usuario</h4>
	<?php
	echo "<img src='" . $user['profile_pic'] ."' class='small_profile_pic'>";
	?>
	<br>
	<a href="upload.php">Sube una nueva foto de perfil</a> <br><br><br>

	Modifica los valores y as click en 'Actualizar Detalles'

	<?php
	$user_data_query = mysqli_query($con, "SELECT first_name, last_name, email, style FROM users WHERE username='$userLoggedIn'");
	$row = mysqli_fetch_array($user_data_query);

	$first_name = $row['first_name'];
	$last_name = $row['last_name'];
	$email = $row['email'];
	$style = $row ['style'];
	?>

	<form action="settings.php" method="POST">
		First Name: <input type="text" name="first_name" value="<?php echo $first_name; ?>" id="settings_input"><br>
		Last Name: <input type="text" name="last_name" value="<?php echo $last_name; ?>" id="settings_input"><br>
		Email: <input type="text" name="email" value="<?php echo $email; ?>" id="settings_input"><br>
		Style:
				<select name="style">
					<option value = "style" selected> Style</option>
					<option value = "style2"> Style2</option>
					<option value = "style3"> Style3</option>>
				</select>

		<?php echo $message; ?>

		<input type="submit" name="update_details" id="save_details" value="Actualizar Detalles" class="info settings_submit"><br>
	</form>

	<h4>Cambiar Password</h4>
	<form action="settings.php" method="POST">
		Password Actual: <input type="password" name="old_password" id="settings_input"><br>
		Password Nuevo: <input type="password" name="new_password_1" id="settings_input"><br>
		Confirma Password Nuevo: <input type="password" name="new_password_2" id="settings_input"><br>

		<?php echo $password_message; ?>

		<input type="submit" name="update_password" id="save_details" value="Actualizar Password" class="info settings_submit"><br>
	</form>

	<h4>Terminacion de Usuario</h4>
	<form action="settings.php" method="POST">
		<input type="submit" name="close_account" id="close_account" value="Terminar Usuario" class="danger settings_submit">
	</form>


</div>