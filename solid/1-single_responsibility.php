<?php

class User
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;

    }

    public function getName()
    {
        return $this->name;
    }
}

class UsersControllers
{
    public function create(User $user)
    {
        return $user->getName();
    }
}

$users = new UsersControllers();
$user = new User('Rana');
echo $users->create($user);