<?php
/**
 * Date: 22.03.18
 * Time: 14:31
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Creational\LazyInitialization;


class MemoryUserRepository
{

    /**
     * @var
     */
    protected $userName;

    /**
     * MemoryUserRepository constructor.
     * @param $userName
     */
    public function __construct($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getUserName(): string
    {
        return $this->userName;
    }
}