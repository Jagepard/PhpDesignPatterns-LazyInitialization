## Table of contents
- [Creational\LazyInitialization\MemoryUser](#creational_lazyinitialization_memoryuser)
- [Creational\LazyInitialization\ServiceInterface](#creational_lazyinitialization_serviceinterface)
- [Creational\LazyInitialization\UserInterface](#creational_lazyinitialization_userinterface)
- [Creational\LazyInitialization\UserService](#creational_lazyinitialization_userservice)
<hr>

<a id="creational_lazyinitialization_memoryuser"></a>

### Class: Creational\LazyInitialization\MemoryUser
##### implements [Creational\LazyInitialization\UserInterface](#creational_lazyinitialization_userinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( string $name )</em><br>Sets the name<br>Устанавливает имя|
|public|<em><strong>getName</strong>(): string</em><br>Gets a name<br>Получает имя|


<a id="creational_lazyinitialization_serviceinterface"></a>

### Class: Creational\LazyInitialization\ServiceInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>register</strong>( string $name ): string</em><br>|
|abstract public|<em><strong>login</strong>( string $name ): string</em><br>|


<a id="creational_lazyinitialization_userinterface"></a>

### Class: Creational\LazyInitialization\UserInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>getName</strong>(): string</em><br>|


<a id="creational_lazyinitialization_userservice"></a>

### Class: Creational\LazyInitialization\UserService
##### implements [Creational\LazyInitialization\ServiceInterface](#creational_lazyinitialization_serviceinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>register</strong>( string $name ): string</em><br>Registers a new user<br>Регистрирует нового пользователя|
|public|<em><strong>login</strong>( string $name ): string</em><br>Identifies the user<br>Идентифицируетпользователя|
<hr>

###### created with [Rudra-Documentation-Collector](#https://github.com/Jagepard/Rudra-Documentation-Collector)
