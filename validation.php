function validate_email($email) {
$email_regex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
return preg_match($email_regex, $email);
}

function validate_password($password) {
$password_regex = '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/';
return preg_match($password_regex, $password);
}