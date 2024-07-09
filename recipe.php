<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Management</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="logo.png" class="me-3" width="50px"> Flavoursome Recipes
        </div>
        <div class="nav-bar">
            <ul>
                <li> <a href="index.php">Home</a> </li>
                <li> <a href="about.html">About</a> </li>
                <li> <a href="#">Recipes</a> </li>
                <li> <a href="contact.html">Contact</a> </li>
                <li> <a href="login.php">Login</a> </li>
            </ul>
        </div>
    </header>
    <div class="recipe">
        <h2>Featured Recipes</h2>
        <div class="box">
            <?php
            include 'fetch_recipe.php';
            foreach ($recipes as $recipe) {
                echo '<div class="card">';
                echo '<img src="' . $recipe['image'] . '" alt="Recipe Image">';
                echo '<div class="content">';
                echo '<h3>' . $recipe['name'] . '</h3>';
                echo '<p>' . $recipe['description'] . '</p>';
                echo '<div class="container">';
                echo '<a href="view.php?id=' . $recipe['id'] . '"><i class="bi bi-eye-fill  fs-3 me-3 text-dark"></i></a>';
                echo '<a href="edit.php?id=' . $recipe['id'] . '"><i class="bi bi-pencil-square fs-3 me-3 text-dark"></i></a>';
                echo '<a href="delete.php?id=' . $recipe['id'] . '"><i class="bi bi-trash3 fs-3 me-3 text-dark"></i></a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>

        </div>
        <div class="fixed">
        <i class="bi bi-plus-circle fs-3"><a href="create.html" style="color: white";><b>Add</b></a></i>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>