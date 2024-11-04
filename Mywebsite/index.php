<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href = "style.css"/>
</head>
<body>
    <!-- <p>This is <?php echo "awesome" ?> a pargraph</p> -->

    <div class="form-container">
        <h1>User Information Form</h1>
        <form action="includes/formhandler.php" method="post">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>

            <label for="pet_type">Favorite Pet Type:</label>
            <select id="pet_type" name="pet_type" required>
                <option value="cat">Cat</option>
                <option value="dog">Dog</option>
                <option value="bird">Bird</option>
                <option value="fish">Fish</option>
                <option value="reptile">Reptilian</option>
                <option value="other">Other</option>
            </select>

            <input type="submit" value="Submit">
        </form>
    </div>

</body>
</html>
