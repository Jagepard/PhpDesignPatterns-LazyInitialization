<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\LazyInitialization;

interface ServiceInterface
{
    public function register(string $name): string;
    public function login(string $name): string;
}
