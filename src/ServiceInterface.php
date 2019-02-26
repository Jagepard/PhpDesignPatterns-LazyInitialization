<?php

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\LazyInitialization;

/**
 * Interface ServiceInterface
 * @package Creational\LazyInitialization
 */
interface ServiceInterface
{
    /**
     * @param string $name
     * @return string
     */
    public function register(string $name): string;

    /**
     * @param string $name
     * @return string
     */
    public function login(string $name): string;
}
