<?php


namespace HackLog\Model;

use MongoDB\BSON\ObjectID;

class RegistrationModel
{
    public static function registerNewUser(string $username, string $email, string $hashedPassword): ObjectID
    {
    }
}
