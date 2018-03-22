<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;
use Creational\LazyInitialization\UserService;


/**
 * Class LazyInitializationTest
 */
class LazyInitializationTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var
     */
    protected $userService;

    protected function setUp(): void
    {
        $this->userService = new UserService();
    }

    public function testRegister()
    {
        $this->assertTrue($this->getUserService()->register('John'));
        $this->assertFalse($this->getUserService()->register('John'));
    }

    public function testLogin()
    {
        $this->getUserService()->register('John');
        $this->assertTrue($this->getUserService()->login('John'));
        $this->assertFalse($this->getUserService()->login('Bill'));
    }

    public function testUserName()
    {
        $this->getUserService()->register('John');
        $this->assertEquals($this->getUserService()->getUserRepository('John')->getUserName(), 'John');
    }

    /**
     * @return mixed
     */
    public function getUserService()
    {
        return $this->userService;
    }
}
