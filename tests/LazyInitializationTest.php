<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\LazyInitialization\Tests;

use Creational\LazyInitialization\UserService;
use Creational\LazyInitialization\ServiceInterface;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class LazyInitializationTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var ServiceInterface
     */
    private $userService;

    protected function setUp(): void
    {
        $this->userService = new UserService();
    }

    public function testRegister()
    {
        $this->assertEquals(sprintf("%s has been registered \n", 'John'), $this->getUserService()->register('John'));
        $this->assertEquals(sprintf("%s was already registered \n", 'John'), $this->getUserService()->register('John'));
    }

    public function testLogin()
    {
        $this->getUserService()->register('John');
        $this->assertEquals(sprintf("%s is authenticated \n", 'John'), $this->getUserService()->login('John'));
        $this->assertEquals(sprintf("%s must be registered \n", 'Bill'), $this->getUserService()->login('Bill'));
    }

    /**
     * @return UserService
     */
    public function getUserService(): ServiceInterface
    {
        return $this->userService;
    }
}
