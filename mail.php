<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $surname = $_POST['surname'];
    $lga = $_POST['lga'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $state_of_origin = $_POST['state_of_origin'];
    $gender = $_POST['gender'];
    $occupation = $_POST['occupation'];
    $working = $_POST['working'];
    $skills = $_POST['skills'];

    // Email address to send the form data
    $to = "incrisz@gmail.com";
    $subject = "Application Form Submission";

    // Email message
    $message = "
    Firstname: $firstname\n
    MiddleName: $middlename\n
    Surname: $surname\n
    LGA: $lga\n
    Address: $address\n
    Date of birth: $dob\n
    Email Address: $email\n
    Phone Number: $phone\n
    State of Origin: $state_of_origin\n
    Gender: $gender\n
    Occupation: $occupation\n
    Are you currently Working: $working\n
    Preferred Skills: $skills\n
    ";

    // Send email
    if(mail($to, $subject, $message)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
