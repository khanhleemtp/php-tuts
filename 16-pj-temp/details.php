<?php 

    include('config/db_connect.php');

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
    <div class="container mx-auto text-center border-4 border-white p-4 m-8 rounded-md shadow-lg">
         <h2 class="text-purple-600 text-4xl font-semibold">Details</h2>
        <?php if($pizza): ?> 
            <h2 class="text-3xl font-semibold uppercase text-green-600"><?php echo $pizza['title'] ?></h2>
            <h2 class="text-gray-600">Created by: <?php echo $pizza['email'] ?></h2>
            <h4><?php echo $pizza['created_at'] ?></h4>
            <div class="uppercase font-semibold text-2xl">Ingredients</div>
            <h4><?php echo $pizza['ingredients'] ?></h4>
        <?php else: ?>
        <?php endif; ?>
    </div>

<?php include('templates/footer.php') ?>

</html>
