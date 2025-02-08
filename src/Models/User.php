<?php

class User extends \Aternos\Model\GenericModel
{
    // use model registry (default: true)
    protected static bool $registry = true;

    // cache the model for 60 seconds (default: null)
    protected static ?int $cache = 60;

    // the name of your model (and table)
    public static function getName() : string
    {
        return "users";
    }

    protected static array $drivers = [
        \Aternos\Model\Driver\Mysqli\Mysqli::ID
    ];

    // all public properties are database fields
    public mixed $id;
    public string $username;
    public string $email;

    public string $password;
}