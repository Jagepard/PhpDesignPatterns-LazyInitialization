<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\LazyInitialization;

interface UserInterface
{
    /**
     * @return string
     */
    public function getName(): string;
}
