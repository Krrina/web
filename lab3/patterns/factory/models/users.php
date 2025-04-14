<?php
namespace Factory\Models;

class Users extends Collection
{
    public function __construct(public ?array $users = null)
    {
        $users ??= [
            self::createUser('ivanov@example.com', 'пароль123', 'Иван', 'Иванов'),
            self::createUser('petrova@example.com', 'пароль456', 'Анна', 'Петрова'),
            self::createUser('smirnova@example.com', 'пароль789', 'Елена', 'Смирнова'),
            self::createUser('sidorov@example.com', 'пароль101', 'Сергей', 'Сидоров'),
            self::createUser('kozlov@example.com', 'пароль112', 'Алексей', 'Козлов')
        ];
        parent::__construct($users);
    }

    public static function createUser($email, $password, $firstName, $lastName): User
    {
        return new User($email, $password, $firstName, $lastName);
    }

    public function getCollection(): array
    {
        return $this->collection;
    }
}