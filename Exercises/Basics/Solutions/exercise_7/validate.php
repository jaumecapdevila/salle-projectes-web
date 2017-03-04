<?php
if (empty($_POST)) {
    header("Location: index.php");
    exit;
}
if (!isset($_POST['name']) ||
    !isset($_POST['email']) ||
    !isset($_POST['age'])
) {
    header("Location: index.php");
    exit;
}

$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];

if (validName($name) &&
    validEmail($email) &&
    validAge($age)
) {
    echo nl2br("User name: " . htmlspecialchars($name) . "\n");
    echo nl2br("User email: " . htmlspecialchars($email) . "\n");
    echo nl2br("User age: " . htmlspecialchars($age) . "\n");
    exit;
}
echo "Review all the fields";
exit;
function validName($name)
{
    return $name !== '' && strlen($name) < 20;
}

function validEmail($email)
{
    return false !== filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validAge($age)
{
    return $age > 1 && $age < 120;
}
