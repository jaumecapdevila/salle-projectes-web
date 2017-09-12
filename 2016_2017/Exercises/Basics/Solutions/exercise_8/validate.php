<?php
if (empty($_POST)) {
    echo json_encode([
        "error" => "Validation error"
    ]);
    exit;
}
if (!isset($_POST['name']) ||
    !isset($_POST['email']) ||
    !isset($_POST['age'])
) {
    echo json_encode([
        "error" => "Validation error"
    ]);
    exit;
}

$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];

if (validName($name) &&
    validEmail($email) &&
    validAge($age)
) {
    echo json_encode([
        "name" => htmlspecialchars($name),
        "email" => htmlspecialchars($email),
        "age" => htmlspecialchars($age)
    ]);
    exit;
}
echo json_encode([
    "error" => "Validation error"
]);
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
