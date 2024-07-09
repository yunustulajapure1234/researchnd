<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Validate email
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format";
    exit;
  }

  // Set email parameters
  $to = 'yunustulajapure524@gmail.com.com'; // Change to your email address
  $email_subject = "Contact Form: $subject";
  $email_body = "You have received a new message from your website contact form.\n\n".
                "Here are the details:\n".
                "Name: $name\n".
                "Email: $email\n".
                "Subject: $subject\n".
                "Message:\n$message";

  $headers = "From: noreply@example.com\n";
  $headers .= "Reply-To: $email";

  // Send email
  if (mail($to, $email_subject, $email_body, $headers)) {
    echo "Your message has been sent successfully.";
  } else {
    echo "There was an error sending your message.";
  }
}
?>
