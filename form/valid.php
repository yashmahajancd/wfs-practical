<?php

if(isset($_POST['submitBtn']))
{
    $name = trim($_POST['txtname'] ?? '');
    $address = trim($_POST['txtadd'] ?? '');
    $city = $_POST['selcity'] ?? '';
    $gender = $_POST['gender'] ?? '';

    $hobbies = $_POST['hobbies'] ?? [];

    $dob = trim($_POST['date'] ?? '');
    $contact = trim($_POST['contact'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    $errors = [];

    // Name validation
    if(empty($name))
    {
        $errors[] = "Name can't be empty!";
    }
    elseif(!preg_match('/^[a-zA-Z ]+$/', $name))
    {
        $errors[] = "Name must contain only letters and spaces!";
    }

    // Address validation
    if (empty($address))
    {
        $errors[] = "Address can't be empty!";
    }

    // City validation
    if (empty($city))
    {
        $errors[] = "Please select a city!";
    }

    // Gender validation
    if (empty($gender))
    {
        $errors[] = "Please select gender!";
    }

    // DOB validation
    if(empty($dob))
    {
        $errors[] = "DOB can't be empty!";
    }
    elseif(!preg_match('/^(0[1-9]|[12][0-9]|3[01])[-\/\.](0[1-9]|1[012])[-\/\.](19|20)[0-9]{2}$/', $dob))
    {
        $errors[] = "Date must be in DD-MM-YYYY format!";
    }

    // Contact validation
    if (empty($contact))
    {
        $errors[] = "Mobile number can't be empty!";
    }
    elseif(!preg_match('/^[0-9]{10}$/', $contact))
    {
        $errors[] = "Mobile number must be in 10 digits!";
    }

    // Email validation
    if(empty($email))
    {
        $errors[] = "Email can't be empty!";
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $errors[] = "Invalid email address!";
    }

    // Password validation
    if (empty($password))
    {
        $errors[] = "Password can't be empty!";
    }

    // Display errors
    if(!empty($errors))
    {
        foreach($errors as $error)
        {
            echo $error . "<br>";
        }
    }
    else
    {
        echo "Name : " . htmlspecialchars($name) . "<br>";
        echo "Address : " . htmlspecialchars($address) . "<br>";
        echo "City : " . htmlspecialchars($city) . "<br>";
        echo "Gender : " . htmlspecialchars($gender) . "<br>";

        echo "Hobbies : ";

        if(!empty($hobbies))
        {
            echo htmlspecialchars(implode(", ", $hobbies));
        }
        else
        {
            echo "No hobby selected";
        }

        echo "<br>";

        echo "DOB : " . htmlspecialchars($dob) . "<br>";
        echo "Contact : " . htmlspecialchars($contact) . "<br>";
        echo "Email : " . htmlspecialchars($email) . "<br>";

        echo "<br>";
        echo "Record Inserted Successfully.";
    }
}

?>