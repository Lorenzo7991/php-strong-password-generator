<?php
// Function to generate a random password.
function generateRandomPassword($length, $avoidRepetition = false)
{
    // Definition of valid characters for the password.
    $validChars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#_-&';

    // Length of valid characters.
    $validCharsLength = strlen($validChars);

    // Variable for the generated password
    $password = '';

    // Array to keep track of characters already used
    $usedChars = array();

    // Loop for generating the random password.
    for ($i = 0; $i < $length; $i++) {
        // Generate a random index to select a character from validChars
        $randomIndex = rand(0, $validCharsLength - 1);

        // Check if repetition should be avoided and the character is already used
        if ($avoidRepetition && in_array($validChars[$randomIndex], $usedChars)) {
            // If so, generate a new random index until it's a new character
            while (in_array($validChars[$randomIndex], $usedChars)) {
                $randomIndex = rand(0, $validCharsLength - 1);
            }
        }

        // Append the selected character to the password
        $password .= $validChars[$randomIndex];

        // Add the used character to the array
        $usedChars[] = $validChars[$randomIndex];
    }

    return $password;
}
?>