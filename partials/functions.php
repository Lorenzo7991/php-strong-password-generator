<?php
// Function to generate a random password.
function generateRandomPassword($length)
{
    // Definition of valid characters for the password.
    $validChars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#_-&';

    // Length of valid characters.
    $validCharsLength = strlen($validChars);

    // Variable for the generated password
    $password = '';

    // Loop for generating the random password.
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, $validCharsLength - 1);
        $password .= $validChars[$randomIndex];
    }

    return $password;
}
?>