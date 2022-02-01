<?php

    include 'config/db_connect.php';

    if(isset($_POST['delete'])){
        $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

        $sql = "DELETE FROM pizzas WHERE id = $id_to_delete";

        if(mysqli_query($conn, $sql)){
            header('Location: index.php');
        } else {
            echo 'Query Error ' . mysqli_error($conn);
        }
    }

    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($conn, $_GET['id']);

        $sql = "SELECT * FROM pizzas WHERE id = $id";

        $result = mysqli_query($conn, $sql);

        $pizza = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);
    }

?>


<!DOCTYPE html>
<html lang="en">
    <?php include 'Templates/header.php'?>

    <div class="container center">
		<?php if($pizza){ ?>
			<h4><?php echo $pizza['title']; ?></h4>
			<p>Created by <?php echo $pizza['email']; ?></p>
			<p><?php echo date($pizza['created_at']); ?></p>
			<h5>Ingredients:</h5>
			<p><?php echo $pizza['ingredients']; ?></p>

            <form action="details.php" method="POST">
                <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id']?>">
                <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
            </form>
        <?php }else{ ?>
			<h5>No such pizza exists.</h5>
		<?php } ?>
	</div>

    <?php include 'Templates/footer.php'?>
</html>