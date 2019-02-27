<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\LazyInitialization;

/**
 * Class MemoryUser
 * @package Creational\LazyInitialization
 */
class MemoryUser implements UserInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * MemoryUser constructor.
     * @param $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName(): string
    {
        return $this->name;
    }
}
