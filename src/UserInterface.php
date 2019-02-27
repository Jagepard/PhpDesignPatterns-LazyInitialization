<?php

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\LazyInitialization;

/**
 * Interface UserInterface
 * @package Creational\LazyInitialization
 */
interface UserInterface
{
    /**
     * @return string
     */
    public function getName(): string;
}
