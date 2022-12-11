<?php

class RandomHashedIdentifier
{
    /**
     * Generates a random, unique hashed identifier.
     *
     * @return string The hashed identifier.
     */
    public function generate()
    {
        // Generate a random string
        $randomString = bin2hex(random_bytes(16));

        // Hash the random string using the SHA-256 algorithm
        $hashedIdentifier = hash('sha256', $randomString);

        return $hashedIdentifier;
    }
}
?>
