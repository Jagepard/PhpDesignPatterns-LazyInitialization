<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\LazyInitialization;

/**
 * Class UserService
 * @package Creational\LazyInitialization
 */
class UserService
{

    /**
     * @var array
     */
    protected $users = [];

    /**
     * @param string $name
     * @return string
     */
    public function register(string $name): string
    {
        if (!array_key_exists($name, $this->users)) {
            $this->users[$name] = new MemoryUser($name);

            return sprintf("%s has been registered \n", $name);
        }

        return sprintf("%s was already registered \n", $name);
    }

    /**
     * @param string $name
     * @return string
     */
    public function login(string $name): string
    {
        if (array_key_exists($name, $this->users)){
            return sprintf("%s is authenticated \n", $name);
        }

        return sprintf("%s must be registered \n", $name);
    }
}
