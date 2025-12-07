<?php

class User
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

class UserPrinter
{
    public function printName(User $user): void
    {
        echo $user->getName();
    }
}

$user = new User("Rana");
$printer = new UserPrinter();

$printer->printName($user);
