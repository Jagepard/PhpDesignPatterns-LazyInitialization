<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\LazyInitialization;

class MemoryUser implements UserInterface
{
    /**
     * @var string
     */
    private $userName;

    /**
     * MemoryUser constructor.
     * @param  string  $userName
     */
    public function __construct(string $userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }
}
