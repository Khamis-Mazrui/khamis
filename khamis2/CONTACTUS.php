<!DOCTYPE html>
<html>
<head>
  <?php include("includes/header.php"); ?>

</head>

  <h1>Contact Us</h1>
  <p>Feel free to get in touch with us using the information below:</p>
  <ul>
    <button id="my button" class="my button"><a href="schoolweb.html"></button>
    <li><strong>Address:</strong> 123 School Street, City, State, Zip Code</li>
    <li><strong>Phone:</strong> 123-456-7890</li>
    <li><strong>Email:</strong> info@KHAMIS highschool.com</li>
  </ul>
  <p>You can also reach out to us using the form below:</p>
  <form action="mailto:info@KHAMIS highschool.com" method="post" enctype="text/plain">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="4" cols="50"></textarea><br><br>
    <input type="submit" value="Submit">
  </form>
</body>
</html>
