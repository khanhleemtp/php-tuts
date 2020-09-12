<?php 
    $inputClass = 'rounded-full bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500';
    $labelClass = 'block text-gray-500';

    $errors = array('email'=>'', 'title'=>'', 'ingredients'=>'');
    $email = $title = $ingredients = '';

    if(isset($_POST['submit'])) {

        // check email
        if(empty($_POST['email'])) {
            $errors['email'] = "Email is required" . "<br />";
        } else {
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email is not valid' . "<br />";
            }
            // echo htmlspecialchars($_POST['email']);
        }

        // check title
        if(empty($_POST['title'])) {
            $errors['title'] = "Title is required" . "<br />";
        } else {
            $title = $_POST['title'];
            if(!preg_match('/^[A-Za-z\s]+$/', $title)) {
                $errors['title'] = 'Title must be letter and space only';
            }
        }
        // check ingredients
        if(empty($_POST['ingredients'])) {
            $errors['ingredients'] = "Ingredients is required" . "<br />";
        } else {
            $ingredients = $_POST['ingredients'];
            if(!preg_match('/^([A-Za-z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
                $errors['ingredients'] =  'Ingredients must be saparated list';
            }
        }

        if(array_filter($errors)) {
            // echo 'error in the form';
        } else {
            // echo 'form is valid';
            header('Location: index.php');
            // sever run it and send to browser
        }

    }
    // $_POST: global array is PHP
    // action="add.php" -> send to server handle
    // method="POST" hidden data send in url
?>
<html lang="en">
    <?php include('templates/header.php') ?>
    <section class="container mx-auto text-gray-600 text-center text-xl max-w-lg">
        <h4 class="text-center font-semibold text-4xl text-purple-600">Add a Pizza</h4>
        <form
            action="add.php" method="POST"
            class="bg-white flex flex-col align-center justify-center p-4 rounded-lg"
            >
            <label class="<?php echo $labelClass ?>">Your Email</label>
            <input type="text" name="email" class="<?php echo $inputClass ?>" value="<?php echo $email ?>"/>
            <div class="text-red-300"><?php echo $errors['email'] ?></div>
            <label class="<?php echo $labelClass ?>">Pizza Title</label>
            <input type="text" name="title" class="<?php echo $inputClass ?>" value="<?php echo $title ?>"/>
            <div class="text-red-300"><?php echo $errors['title'] ?></div>
            <label class="<?php echo $labelClass ?>">Ingredients (comma separated):</label>
            <input type="text" name="ingredients" class="<?php echo $inputClass ?>" value="<?php echo $ingredients ?>" />
            <div class="text-red-300"><?php echo $errors['ingredients'] ?></div>
            <div class="text-center">
                <input type="submit" value="Submit" name="submit" class="brand text-xl text-gray-100 font-samibold p-2 px-6 mt-4 rounded-lg shadow-xl" />
            </div>
        </form>
    </section>

    <?php include('templates/footer.php') ?>
</html> 
