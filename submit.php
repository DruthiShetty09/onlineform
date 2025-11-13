<?php
// File where data will be saved
$file = 'data.csv';

// Collect form inputs
$name = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$course = $_POST['course'];

// If file doesn't exist, create it with headers
if (!file_exists($file)) {
    $headers = ['Full Name', 'Email', 'Phone', 'Gender', 'Course'];
    $f = fopen($file, 'w');
    fputcsv($f, $headers);
    fclose($f);
}

// Append data to CSV file
$f = fopen($file, 'a');
fputcsv($f, [$name, $email, $phone, $gender, $course]);
fclose($f);

// Display confirmation with styling
echo "
  <h3>✅ Registration Successful!</h3>
  <p><strong>Name:</strong> $name</p>
  <p><strong>Email:</strong> $email</p>
  <p><strong>Phone:</strong> $phone</p>
  <p><strong>Gender:</strong> $gender</p>
  <p><strong>Course:</strong> $course</p>
  <p style='color:green;'>Your data has been saved to <b>data.csv</b></p>
";
?>
