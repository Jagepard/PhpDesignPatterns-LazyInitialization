<?php

namespace Creational\LazyInitialization;

require_once "vendor/autoload.php";

$userService = new UserService();

echo $userService->login("John");
echo $userService->register("John");
echo $userService->register("John");
echo $userService->login("John");
