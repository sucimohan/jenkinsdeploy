<!DOCTYPE html>
<html>
<head>
    <title>Sample Form</title>
</head>
<body>
for now susmitha have trigger the webhook
<h2>Sample Form</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br><br>
    
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br><br>
    
    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="4" cols="50"></textarea><br><br>
    
    <input type="submit" name="submit" value="Submit">
</form>

<?php
// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Validate and process the data (you can add your validation logic here)
    
    // Display a confirmation message
    echo "<p>Thank you, $name! Your message has been submitted.</p>";
}
?>

</body>
</html>



