<?php 

	if(isset($_POST['submit'])){
        // echo htmlspecialchars($_POST['email']);
        // echo '<br>';
        // echo htmlspecialchars($_POST['title']);
        // echo '<br>';
        // echo htmlspecialchars($_POST['ingredients']);
        // echo '<br>';

		// Email Validation
		if(empty($_POST['email'])){
			echo 'Email Required <br>';
		} else {
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				echo 'Email is not Valid <br>';
			}
		}

		// Title Validation
		if(empty($_POST['title'])){
			echo 'Title Required <br>';
		} else {
			$title = $_POST['title'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
				echo 'title must be letters and spaces only <br>';
			}
		}

		// Ingredients Validation
		if(empty($_POST['ingredients'])){
			echo 'Ingredients Required <br>';
		} else {
			$ingredients = $_POST['ingredients'];
			if(!preg_match('/^[a-zA-Z\s]+(,\s?[a-zA-Z\s]*)*$/', $ingredients)){
				echo 'Ingredients shoud Separated by Comma <br>';
			}
		}
    }

?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<section class="container grey-text">
		<h4 class="center">Add a Pizza</h4>
		<form class="white" action="add.php" method="POST">
			<label>Your Email</label>
			<input type="text" name="email">
			<label>Pizza Title</label>
			<input type="text" name="title">
			<label>Ingredients (comma separated)</label>
			<input type="text" name="ingredients">
			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>

	<?php include('templates/footer.php'); ?>

</html>