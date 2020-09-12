<?php 

    include('config/db_connect.php');

    if(isset($_POST['delete'])) {
        // avoid sql injection by mysqli_real_escape_string
        $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
        $sql = "DELETE FROM pizzas WHERE id = $id_to_delete";

        if(mysqli_query($conn, $sql)) {
            // success
            header('Location: index.php');
        } else {
            // failure
            echo 'Query Error' . mysqli_error($conn);
        }

    }


    if(isset($_GET['id'])) {
        $id = mysqli_real_escape_string($conn, $_GET['id']);

        // make sql
        $sql = "SELECT * FROM pizzas WHERE id = $id";

        // get query result
        $result = mysqli_query($conn, $sql);

        // fetch result in array format
        $pizza = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);

    }

?>

<html lang="en">
<?php include('templates/header.php') ?>
    <div class="container mx-auto bg-gray-200 max-w-lg text-center border-4 border-white p-4 m-8 rounded-md shadow-lg">
         <h2 class="text-purple-600 text-4xl font-semibold">Details</h2>
        <?php if($pizza): ?> 
            <h2 class="text-3xl font-semibold uppercase text-green-600"><?php echo $pizza['title'] ?></h2>
            <h2 class="text-gray-600">Created by: <?php echo $pizza['email'] ?></h2>
            <h4><?php echo $pizza['created_at'] ?></h4>
            <div class="uppercase font-semibold text-2xl">Ingredients</div>
            <h4><?php echo $pizza['ingredients'] ?></h4>

            <!-- DELTETE FORM -->
            <form
                action="<?php echo $_SERVER['PHP_SELF']; ?>"
                method="POST">
                <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id']?>">
                <input
                class="brand text-white py-2 px-6 mt-8 rounded-md "
                type="submit" name="delete" value="DELETE" />
            </form>

        <?php else: ?>
            <h5 class="uppercase font-semibold text-2xl">No such pizza exist</h5>
        <?php endif; ?>
    </div>

<?php include('templates/footer.php') ?>

</html>
