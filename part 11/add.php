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
			echo htmlspecialchars($_POST['email']);
        	echo '<br>';
		}

		// Title Validation
		if(empty($_POST['title'])){
			echo 'Title Required <br>';
		} else {
			echo htmlspecialchars($_POST['title']);
        	echo '<br>';
		}

		// Ingredients Validation
		if(empty($_POST['ingredients'])){
			echo 'Ingredients Required <br>';
		} else {
			echo htmlspecialchars($_POST['ingredients']);
        	echo '<br>';
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