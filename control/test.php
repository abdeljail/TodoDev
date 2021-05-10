<?php
// if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//   echo "$email is a valid email address";
// } else {
//   echo "$email is not a valid email address";
// }
// $b = filter_var($email, FILTER_VALIDATE_EMAIL);
// echo var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
$str = "4545454545454545";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;