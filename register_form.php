<?php
    $connection = mysqli_connect('localhost', 'root', '', 'register_db');

    if (isset($_POST['send'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $jobrole = $_POST['jobrole'];
        $sex = $_POST['sex'];
        $birthday = $_POST['birthday'];
        $services = $_POST['services'];

        // Form validations
        if (empty($name) || empty($email) || empty($phone) || empty($jobrole) || empty($sex) || empty($birthday) || empty($services)) {
            echo "Please fill in all the required fields.";
        } else {
            $request = "INSERT INTO register_form (name, email, phone, jobrole, sex, birthday, services) VALUES
            ('$name', '$email', '$phone', '$jobrole', '$sex', '$birthday', '$services')";

            mysqli_query($connection, $request);

            // Display success message 
            echo "<div style='background-color: green; color: white; padding: 10px; text-align: center;'>Sent successfully. Thank you!</div>";
        }
    } else {
        echo 'Something went wrong. Please try again.';
    }
?>
