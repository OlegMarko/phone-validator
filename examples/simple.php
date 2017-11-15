<?php

require_once './../src/PhoneValidator.php';

$phone = "+38 (123) 456 78 90";

if (isset($_POST['phone'])) {
    $phone = $_POST['phone'];

    $validator = new \Fixik\Validator\PhoneValidator();

    $res = $validator->validate(null, $phone, null, null);

    echo "Phone number " . $phone . " is " . ($res ? 'valid' : 'invalid') ;
}
?>

<html>
<body>
<hr>
<form action="/" method="post">
    <input type="text" name="phone" value="<?= $phone; ?>">
    <br>
    <button>Validate</button>
</form>
</body>
</html>
