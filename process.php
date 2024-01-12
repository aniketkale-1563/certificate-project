

<?php
// Connect to MySQL (change these parameters based on your setup)
$conn = new mysqli("localhost", "root", "", "bonafide_details");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data.
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $fullname = $_POST["fullname"];
    $academicyear = $_POST["academicyear"];
    $department = $_POST["department"];
    $id_card = $_POST["id_card"];
    $fee_receipt = $_POST["fee_receipt"];
    $purpose = $_POST["purpose"];

    // Insert student data into the database.
    $sql = "INSERT INTO student (full_name, current_academic_year, department,id_card,fee_receipt,purpose) VALUES ('$fullname','$academicyear','$department','$id_card','$fee_receipt','$purpose')";

    if ($conn->query($sql) === TRUE) {
        echo "Student record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
