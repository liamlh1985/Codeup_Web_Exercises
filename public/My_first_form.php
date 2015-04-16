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
<form method="POST" action="/My_first_form.php">
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
<input type="checkbox" id="sent_list" name="sent_list" value="yes">
<label for="sent_folder">Save to sent folder?</label>
<h2>How old am I?</h2>
<input type="checkbox" id="Sixteen" name="Sixteen" value="yes">
<label for="Sixteen">16</label><br>
<input type="checkbox" id="Seventeen" name="Seventeen" value="yes">
<label for="Seventeen">17</label><br>
<input type="checkbox" id="Eighteen" name="Eighteen" value="yes">
<label for="Eighteen">18</label><br>
<H2>How many siblings do I have</H2>
<input type="checkbox" id="Six" name="Six" value="yes">
<label for="Six">6</label><br>
<input type="checkbox" id="Four" name="Four" value="yes">
<label for="Four">4</label><br>
<input type="checkbox" id="Two" name="Two" value="yes">
<label for="Two">2</label><br>
<label for="Music">How many instruments can I play?</label>
<select id="Music" name="Music">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
</select><br>
<label for="Ducks">Do you want me to hit you in the face with a rubber duck: </label>
<select id="Ducks" name="Ducks">
    <option selected>You cant throw hard anyways.</option>
    <option>You wont.</option>
</select>
<p><input type="submit"></p>
</form>
</body>
</html>