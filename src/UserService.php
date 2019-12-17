<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\LazyInitialization;

class UserService implements ServiceInterface
{
    /**
     * @var array
     */
    private $users = [];

    /**
     * @var bool
     */
    private $authenticated = false;

    /**
     * @param string $name
     * @return string
     */
    public function register(string $name): string
    {
        if (!array_key_exists($name, $this->users)) {
            $this->users[$name] = new MemoryUser($name);

            return sprintf("%s has been registered \n", $this->users[$name]->getUserName());
        }

        return $this->login($this->users[$name]->getUserName());
    }

    /**
     * @param string $name
     * @return string
     */
    public function login(string $name): string
    {
        if (array_key_exists($name, $this->users)){
            if (!$this->authenticated) {
                $this->authenticated = true;

                return sprintf("%s is authenticated \n", $name);
            }

            return sprintf("%s was already authenticated \n", $name);
        }

        return sprintf("%s must be registered \n", $name);
    }
}
