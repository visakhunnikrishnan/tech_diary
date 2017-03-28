Overview of Design Patterns
===========================

Design patterns are typical solutions to common problems in software design. Each pattern is like a blueprint that you can customize to solve a particular design problem in your code. They are guidelines, not hard-and-fast rules, and provide a structured approach to building software applications.


Table of Contents
-----------------

1.  Creational Patterns
2.  Structural Patterns
3.  Behavioral Patterns
4.  Concurrency Patterns
5.  Architectural Patterns

* * * * *

1\. Creational Patterns
-----------------------

These design patterns are all about class instantiation or object creation. These patterns can be further categorized into class-creation patterns and object-creational patterns.

### Examples

-   Singleton: Ensures a class has only one instance and provides a global point of access to it.
-   Factory Method: Provides an interface for creating objects in a superclass, but allows subclasses to alter the type of objects that will be created.
-   Abstract Factory: Allows the creation of families of related or dependent objects without specifying their concrete classes.
-   Builder: Separates the construction of a complex object from its representation, so that the same construction process can create different representations.
-   Prototype: Creates objects by cloning an existing object.

* * * * *

2\. Structural Patterns
-----------------------

These design patterns are all about Class and Object composition. They help ensure that when one part of a system changes, the entire structure of the system doesn't need to do the same.

### Examples

-   Adapter: Allows the interface of an existing class to be used as another interface. It is often used to make existing classes work with others without modifying their source code.
-   Bridge: Decouples an abstraction from its implementation so that the two can vary independently.
-   Composite: Composes objects into tree structures to represent part-whole hierarchies, allowing clients to treat individual objects and compositions uniformly.
-   Decorator: Adds new functionality to an object without altering its structure. This type of design pattern comes under structural pattern as this pattern acts as a wrapper for existing classes.
-   Facade: Hides the complexities of a system and provides an interface to the client from where the client can access the system.
-   Flyweight: Reduces the number of objects created, to decrease memory footprint and increase performance.
-   Proxy: Provides a surrogate or placeholder for another object to control access to it.

* * * * *

3\. Behavioral Patterns
-----------------------

These design patterns are specifically concerned with communication between objects.

### Examples

-   Observer: Defines a subscription mechanism to notify multiple objects about any events that happen to the object they're observing.
-   Strategy: Defines a family of algorithms, encapsulates each one, and makes them interchangeable. Strategy lets the algorithm vary independently from clients that use it.
-   Command: Turns a request into a stand-alone object that contains all information about the request. This transformation lets you parameterize methods with different requests, delay or queue a request's execution, and support undoable operations.
-   State: Allows an object to alter its behavior when its internal state changes. The object will appear to change its class.
-   Visitor: Lets you separate algorithms from the objects on which they operate.
-   Mediator: Reduces chaos between communicating objects by encouraging loose coupling and keeping objects from referring to each other explicitly.
-   Chain of Responsibility: Passes the request along a chain of handlers. Upon receiving a request, each handler decides either to process the request or to pass it to the next handler in the chain.

* * * * *

4\. Concurrency Patterns
------------------------

These design patterns deal with the multi-threaded programming paradigm.

### Examples

-   Active Object: Decouples method execution from method invocation that reside in their own thread of control.
-   Monitor Object: An object whose methods are subject to mutual exclusion, thus preventing multiple objects from erroneously trying to use it at the same time.
-   Lock: Provides a mechanism for advanced synchronization.
-   Thread Pool: Provides an improved way to manage limited threads to execute a large number of tasks.

* * * * *

5\. Architectural Patterns
--------------------------

These design patterns are similar to software design pattern but have a broader scope. They deal with the design and interaction of the high-level structure in software systems.

### Examples

-   MVC (Model-View-Controller): Divides a given application into three interconnected components to separate internal representations of information from the ways that information is presented to and accepted from the user.
-   Microservices: Structures an application as a collection of loosely coupled services, which implement business capabilities.
-   Layered (n-tier) architecture: Separates the components of a business application into the presentation, business logic, data storage, and other levels.
-   Client-server: Segregates the system into two applications, where the client makes requests to the server. In many cases, the server is a database with application logic represented as stored procedures.

