<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\LazyInitialization;

class UserService implements ServiceInterface
{
    private array $users        = [];
    private bool $authenticated = false;

    public function register(string $name): string
    {
        if (!array_key_exists($name, $this->users)) {
            $this->users[$name] = new MemoryUser($name);

            return sprintf("%s has been registered \n", $this->users[$name]->getName());
        }

        return $this->login($this->users[$name]->getName());
    }

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
