<?php
var_dump($_POST);
?>
<!DOCTYPE html>
<html>
<head>
<title>codeup.dev</title>
</head>
<body>
<h2>Login</h2>
<form method="POST" action="/phptest.php">
    <p>
        <label for="username">Username</label>
        <input id="username" name="username" type="text">
    </p>
    <p>
        <label for="password">Password</label>
        <input id="password" name="password" type="password">
    </p>
    <p>
        <input type="submit">
    </p>
    <h2>Compose an Email</h2>
<textarea id="email_to" name="email_to" rows="1" cols="40">To:</textarea><br>
<textarea id="email_from" name="email_from" rows="1" cols="40">From:</textarea><br>
<textarea id="email_subject" name="email_subject" rows="1" cols="40">Subject:</textarea><br>
<textarea id="email_body" name="email_body" rows="5" cols="40">Enter E-Mail Here</textarea><br>
<p><input type="submit"></p>
</form>
</body>
</html>