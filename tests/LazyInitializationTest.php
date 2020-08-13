<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\LazyInitialization\Tests;

use Creational\LazyInitialization\{UserService, ServiceInterface};
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class LazyInitializationTest extends PHPUnit_Framework_TestCase
{
    private ServiceInterface $userService;

    protected function setUp(): void
    {
        $this->userService = new UserService();
    }

    public function testRegister()
    {
        $this->assertEquals(sprintf("%s has been registered \n", "John"), $this->userService->register("John"));
        $this->assertEquals(sprintf("%s is authenticated \n", "John"), $this->userService->register("John"));
    }

    public function testLogin()
    {
        $this->userService->register("John");
        $this->assertEquals(sprintf("%s is authenticated \n", "John"), $this->userService->login("John"));
        $this->assertEquals(sprintf("%s was already authenticated \n", "John"), $this->userService->login("John"));
        $this->assertEquals(sprintf("%s must be registered \n", "Bill"), $this->userService->login("Bill"));
    }
}
