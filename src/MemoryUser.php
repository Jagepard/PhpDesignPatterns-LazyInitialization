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
class MemoryUser
{

    /**
     * @var
     */
    protected $name;

    /**
     * MemoryUser constructor.
     * @param $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
