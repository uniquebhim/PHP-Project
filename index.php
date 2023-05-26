<?php
$insert = false;
$message = ""; // Initialize an empty message variable

if (isset($_POST['name']) && !$insert) {
    $server_name = "sql305.epizy.com";
    $username = "epiz_34288575";
    $password = "sdKDKNDaXhg";
    $con = mysqli_connect($server_name, $username, $password);

    if (!$con) {
        die("Connection to the database failed due to " . mysqli_connect_error());
    } else {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $other = $_POST['other'];

        $sql = "INSERT INTO `epiz_34288575_jaipur_trip`.`trip1` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`)
        VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp())";

        if ($con->query($sql) == true) {
            $insert = true;
            $message = "Thanks for submitting your form. We are happy to see you joining us for the Jaipur trip";
        } else {
            echo "ERROR: $sql <br>" . $con->error;
        }

        $con->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img class="bg" src="travel_bg_image.jpg" alt="background_image">
    <div class="container">
        <h1>Welcome to Jaipur Trip form</h1>
        <p>Enter the details to submit this form to confirm your participation in the trip</p>
        <?php
        if ($insert) {
            echo "<p class='submitMsg'>$message</p>";
        }
        ?>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter the name">
            <input type="text" name="age" id="age" placeholder="Enter the age">
            <input type="text" name="gender" id="gender" placeholder="Enter the gender">
            <input type="email" name="email" id="email" placeholder="Enter the email">
            <input type="phone" name="phone" id="phone" placeholder="Enter the phone">
            <textarea type="other" name="other" id="other" placeholder="Enter other information here"></textarea>
            <button class="submitbtn">Submit</button>
        </form>
    </div>
    <?php
    if ($insert) {
        echo "<script>document.getElementById('myForm').reset();</script>";
        echo "<script>
            const message = document.querySelector('.submitMsg');
            message.style.display = 'block';
            setTimeout(function() {
                message.style.display = 'none';
            }, 3000);
        </script>";
    }
    ?>
</body>

</html>
