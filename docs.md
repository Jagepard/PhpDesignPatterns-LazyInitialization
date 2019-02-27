## Table of contents

- [\Creational\LazyInitialization\UserService](#class-creationallazyinitializationuserservice)
- [\Creational\LazyInitialization\MemoryUser](#class-creationallazyinitializationmemoryuser)
- [\Creational\LazyInitialization\ServiceInterface (interface)](#interface-creationallazyinitializationserviceinterface)
- [\Creational\LazyInitialization\UserInterface (interface)](#interface-creationallazyinitializationuserinterface)

<hr />

### Class: \Creational\LazyInitialization\UserService

> Class UserService

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getUsers()</strong> : <em>array</em> |
| public | <strong>login(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>string</em> |
| public | <strong>register(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>string</em> |

*This class implements [\Creational\LazyInitialization\ServiceInterface](#interface-creationallazyinitializationserviceinterface)*

<hr />

### Class: \Creational\LazyInitialization\MemoryUser

> Class MemoryUser

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed/\string</em> <strong>$name</strong>)</strong> : <em>void</em><br /><em>MemoryUser constructor.</em> |
| public | <strong>getName()</strong> : <em>mixed</em> |

*This class implements [\Creational\LazyInitialization\UserInterface](#interface-creationallazyinitializationuserinterface)*

<hr />

### Interface: \Creational\LazyInitialization\ServiceInterface

> Interface ServiceInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>login(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>string</em> |
| public | <strong>register(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>string</em> |

<hr />

### Interface: \Creational\LazyInitialization\UserInterface

> Interface UserInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getName()</strong> : <em>string</em> |

