<?php


namespace HackLog\Model;

use HackLog\Document\UserDocument;
use MongoDB\BSON\ObjectID;

/**
 * Class UserModel
 *
 * Handles existing UserDocuments
 *
 * @package Model
 */
class UserModel
{

    public static function getUserByEmail(string $email): UserDocument
    {
    }

    public static function getUserByUsername(string $username): UserDocument
    {
    }

    public static function getUserByID(ObjectID $userID): UserDocument
    {
    }

    public static function changeEmailAdress(ObjectID $userID, string $email): bool
    {
    }

    public static function changeUsername(ObjectID $userID, string $username): bool
    {
    }

    public static function changePassword(ObjectID $userID, string $hashedPassword): bool
    {
    }

    public static function usernameExists(string $username): bool
    {
    }

    public static function emailExists(string $email)
    {
    }
}
