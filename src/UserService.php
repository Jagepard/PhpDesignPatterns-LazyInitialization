<?php
/**
 * Date: 22.03.18
 * Time: 14:27
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Creational\LazyInitialization;


class UserService
{

    /**
     * @var array
     */
    protected $userRepository = [];

    /**
     * @param string $userName
     * @return bool
     */
    public function register(string $userName): bool
    {
        return $this->setUserRepository($userName);
    }

    /**
     * @param string $userName
     * @return bool
     */
    public function login(string $userName): bool
    {
        return array_key_exists($userName, $this->getUserRepository());
    }

    /**
     * @param string $userName
     * @return bool
     */
    protected function setUserRepository(string $userName): bool
    {
        if (!array_key_exists($userName, $this->getUserRepository())) {
            $this->userRepository[$userName] = new MemoryUserRepository($userName);

            return true;
        }

        return false;
    }

    /**
     * @param string $userName
     * @return mixed
     */
    public function getUserRepository(string $userName = null)
    {
        return isset($userName) ? $this->userRepository[$userName] : $this->userRepository;
    }
}