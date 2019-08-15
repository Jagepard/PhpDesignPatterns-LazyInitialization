<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\LazyInitialization;

class UserService implements ServiceInterface
{
    /**
     * @var array
     */
    private $users = [];

    /**
     * @param string $name
     * @return string
     */
    public function register(string $name): string
    {
        if (!array_key_exists($name, $this->getUsers())) {
            $this->users[$name] = new MemoryUser($name);

            return sprintf("%s has been registered \n", $this->getUsers()[$name]->getName());
        }

        return sprintf("%s was already registered \n", $this->getUsers()[$name]->getName());
    }

    /**
     * @param string $name
     * @return string
     */
    public function login(string $name): string
    {
        if (array_key_exists($name, $this->getUsers())){
            return sprintf("%s is authenticated \n", $name);
        }

        return sprintf("%s must be registered \n", $name);
    }

    /**
     * @return array
     */
    public function getUsers(): array
    {
        return $this->users;
    }
}
