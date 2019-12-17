## Table of contents

- [\Creational\LazyInitialization\UserService](#class-creationallazyinitializationuserservice)
- [\Creational\LazyInitialization\MemoryUser](#class-creationallazyinitializationmemoryuser)
- [\Creational\LazyInitialization\ServiceInterface (interface)](#interface-creationallazyinitializationserviceinterface)
- [\Creational\LazyInitialization\UserInterface (interface)](#interface-creationallazyinitializationuserinterface)

<hr />

### Class: \Creational\LazyInitialization\UserService

| Visibility | Function |
|:-----------|:---------|
| public | <strong>login(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>string</em> |
| public | <strong>register(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>string</em> |

*This class implements [\Creational\LazyInitialization\ServiceInterface](#interface-creationallazyinitializationserviceinterface)*

<hr />

### Class: \Creational\LazyInitialization\MemoryUser

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\string</em> <strong>$userName</strong>)</strong> : <em>void</em><br /><em>MemoryUser constructor.</em> |
| public | <strong>getUserName()</strong> : <em>string</em> |

*This class implements [\Creational\LazyInitialization\UserInterface](#interface-creationallazyinitializationuserinterface)*

<hr />

### Interface: \Creational\LazyInitialization\ServiceInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>login(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>string</em> |
| public | <strong>register(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>string</em> |

<hr />

### Interface: \Creational\LazyInitialization\UserInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getUserName()</strong> : <em>string</em> |

