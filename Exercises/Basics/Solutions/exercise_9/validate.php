<?php
if (empty($_POST) || empty($_FILES)) {
    header("Location: index.php");
    exit;
}
if (!isset($_POST['name']) ||
    !isset($_POST['email']) ||
    !isset($_POST['age']) ||
    !isset($_FILES['image'])
) {
    header("Location: index.php");
    exit;
}

if (!empty($_FILES['myfile'])) {
    $myFile = $_FILES['myfile'];
    if ($myFile["error"] !== UPLOAD_ERR_OK) {
        echo '<p>An error occured.</p>';
        exit;
    }
    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
    $success = move_uploaded_file(
        $myFile["tmp_name"],
        __DIR__ . '/uploads/' . $name
    );
    if (!$success) {
        echo "<p>Unable to save file.</p>";
        exit;
    }
    chmod('uploads/' . $name, 0644);
}


$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$image = $_FILES['image'];

if (validName($name) &&
    validEmail($email) &&
    validAge($age) &&
    validImage($image)
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

function validImage($image)
{
    $validFormats = ['image/jpg','image/png'];
    $imageSize = getimagesize($image['tmp_name']);
    if ($image['size'] > 1048576) {
        return false;
    }
    if (!in_array($image['type'], $validFormats)) {
        return false;
    }
    if ($imageSize[0] > 200 || $imageSize[1] > 200) {
        return false;
    }
    return moveUploadedImage($image);
}

function moveUploadedImage($image)
{
    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $image["name"]);
    $success = move_uploaded_file(
        $image["tmp_name"],
        __DIR__ . '/uploads/' . $name
    );
    if (!$success) {
        return false;
    }
    return true;
}
