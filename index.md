---
layout: page
title: Getting Started
---

# Welcome

_The simple yet powerful php framework for developers who don't want to stress when developing complex projects. With microservices and containerized applications in mind. Scaffold makes use of popular libraries and packages to make your lives easier._

## Jump Right In

As this project relies on Composer, installing it for your next project couldn't be easier.

```
composer create-project codin/scaffold
```

If you want to know more about Scaffold, and the different ways you can install it, check out our [installation guidelines](/docs/getting-started/installation).

## PSR Compliance ✔

This project aims to conform with the documented PSR standards. So you can be assured your PSR compliant packages will work fine with the core of this framework.

## Adapters, Containers and Functions

The premise behind Scaffold is simplicity. So we implement a basic container system to maintain instances of all the utilities you need, as well as providing dependency injection to all of your custom application classes.

We use the Adapter pattern to make it easy to switch out drivers & underlying services for each of the components in the framework. This means it's easy to extend and develop packages for.

We want it to be easy, fluent and quick to write your Scaffold applications so we introduce a function based api, whereby you call functions to grab instances from the container. It makes your code simple and easy to read. ie. `response()->view(...);`