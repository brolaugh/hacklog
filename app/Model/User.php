<?php


namespace HackLog\Model;


use HackLog\Core\Model;

class User extends Model
{
    private $username;
    private $email;
    private $password;
    private $emailConfirmToken;
    private $emailConfirmTokenExpires;
    private $emailTokenUsed;
    private $passwordResetToken;
    private $passwordResetTokenExpires;
    private $passwordResetTokenUsed;
    private $blogs = [];

    public function bsonSerialize()
    {
        $serial = parent::bsonSerialize();
        array_merge(
            $serial, [
                'username' => $this->username,
                'email' => $this->email,
                'password' => $this->password,
                'emailConfirmToken' => $this->emailConfirmToken,
                'emailConfirmTokenExpires' => $this->emailConfirmTokenExpires,
                'emailTokenUsed' => $this->emailTokenUsed,
                'passwordResetToken' => $this->passwordResetToken,
                'passwordResetTokenExpires' => $this->passwordResetTokenExpires,
                'passwordResetTokenUsed' => $this->passwordResetTokenUsed,
                'blogs' => $this->blogs,
            ]
        );
        return $serial;
    }

    public function bsonUnserialize(array $data)
    {
        parent::bsonUnserialize($data);
        $this->username = $data['username'];
        $this->email = $data['email'];
        $this->password = $data['password'];
        $this->emailConfirmToken = $data['emailConfirmToken'];
        $this->emailConfirmTokenExpires = $data['emailConfirmTokenExpires'];
        $this->emailTokenUsed = $data['emailTokenUsed'];
        $this->passwordResetToken = $data['passwordResetToken'];
        $this->passwordResetTokenExpires = $data['passwordResetTokenExpires'];
        $this->passwordResetTokenUsed = $data['passwordResetTokenUsed'];
    }
}
