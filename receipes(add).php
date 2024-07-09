<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $image_url = $_POST['image']; // Assuming 'image' is the name of the input field for image URL
    $description = $_POST['description'];
    $ingredients = $_POST['ingredients'];
    $instructions = $_POST['instructions'];
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0; // Ensure 'id' is an integer

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "mydatabase";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL query
    if ($id > 0) {
        // Update existing recipe with image URL
        $sql = "UPDATE receipes SET name='$name', image='$image_url', description='$description', ingredients='$ingredients', instructions='$instructions' WHERE id=$id";
    } else {
        // Insert new recipe with image URL
        $sql = "INSERT INTO receipes (name, image, description, ingredients, instructions) VALUES ('$name', '$image_url', '$description', '$ingredients', '$instructions')";
    }

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Recipe saved successfully!'); window.location.href='recipe.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
