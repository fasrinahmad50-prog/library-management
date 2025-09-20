<?php include 'config.php'; 
 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $phone = $_POST['phone']; 
 
    $sql = "INSERT INTO entries (name, email, phone) VALUES ('$name','$email','$phone')";     if ($conn->query($sql) === TRUE) {         echo "<p>Entry added successfully!</p>"; 
    } else {         echo "Error: " . $sql . "<br>" . $conn->error; 
    } 
    $conn->close(); 
} 
?> 
