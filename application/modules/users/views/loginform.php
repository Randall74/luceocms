<h1>Login</h1>
<?php
echo validation_errors("<p style='color: red;'>", "</p>");
?>

<p>Please fill in your details and hit 'Submit'</p>

<?php
echo form_open('users/submit');

echo "Username ";
echo form_input('username', '');
echo "<br />";

echo "Password ";
echo form_password('pword', '');
echo "<br />";


echo form_submit('submit', 'Submit');

echo form_close();
?><p style="height: 360px;">&nbsp;</p>