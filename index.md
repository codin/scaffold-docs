---
layout: page
title: Getting Started
---

# Welcome

_The simple yet powerful php framework for developers who don't want to stress when developing complex projects. With microservices and containerized applications in mind. Scaffold makes use of popular libraries and packages to make your lives easier._

### Installation

This is a composer based project, so installing it couldn't be easier.

```
composer create-project codin/scaffold
```

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur mattis eleifend blandit. Donec aliquam orci quis libero iaculis viverra. Aenean posuere eu ex non maximus. Vestibulum malesuada velit ac mi accumsan rhoncus. Praesent mollis est id nulla cursus, eu tincidunt neque imperdiet. Mauris ac dapibus felis. Praesent a felis elementum, accumsan lectus eu, egestas mi.

Mauris lacus nibh, vehicula eu luctus eu, ultricies vitae magna. Donec molestie blandit leo, eget interdum arcu lacinia malesuada. Integer mattis euismod massa. Aliquam et molestie metus. Integer sit amet dui sem. Etiam imperdiet aliquam sem, quis ultricies nibh congue quis. Sed semper id tortor nec accumsan. Praesent eu accumsan diam.

### Integer sagittis leo ut

```php
// Example writing some json data to a file.
storage()->write('test.json', json_encode(['foo' => 'bar']));

// Dispatch example event to add "Welcome to" to the
// title in the view.
dispatch(new \App\Events\MyEvent('Welcome to'));


$message = new Message();

$message->setFrom('John <john@example.com>')
     ->addTo('childscraig17@gmail.com')
     ->setSubject('Order Confirmation')
     ->setBody("Hello, Your order has been accepted.");

mailer()->send($message);

// // Define a route with a parameter
$router->route('GET', '/test/{slug}', [
    'name'       => 'test',
    'controller' => '\App\Controllers\PagesController@test',
]);

// Define a resourceful read-only route.
$router->resource('articles', ['read']);
```

vitae congue felis imperdiet. Maecenas finibus faucibus accumsan. Pellentesque interdum quam in eros condimentum tempor. In at sollicitudin purus. Etiam sit amet justo molestie, rutrum turpis in, imperdiet massa. In viverra mauris sed posuere bibendum. Morbi porttitor mauris id varius luctus. Sed ac euismod felis, sed tempor dui. Etiam euismod odio id tellus ultricies faucibus.

## Integer sagittis leo ut

Proin scelerisque molestie facilisis. Nunc rutrum posuere tortor, quis accumsan enim molestie malesuada. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum efficitur lorem ac placerat maximus. Vivamus at ultrices eros, et consequat nunc. Etiam tincidunt auctor sapien. Maecenas aliquam, purus sit amet sagittis eleifend, turpis metus convallis ligula, et consectetur elit elit venenatis lectus. Sed vel purus aliquet, pharetra eros a, dictum nulla. Suspendisse auctor, justo et hendrerit ultrices, nulla nulla accumsan arcu, non pretium arcu erat eget lorem. Curabitur dignissim sapien arcu, id posuere ipsum posuere nec. Mauris egestas, ex eget sodales efficitur, lacus tortor tincidunt neque, quis aliquet tellus ligula sit amet diam. Praesent eu placerat elit. Integer porttitor leo et libero tincidunt pharetra. Donec porttitor nunc est, ac auctor turpis pulvinar ac. Donec pretium laoreet justo, et tincidunt mauris hendrerit sit amet. Cras interdum fermentum tincidunt.

## Integer sagittis leo ut

Orci interdum eleifend. Nunc semper lacus at elementum semper. Aliquam id egestas ante. Aenean ut iaculis libero. Aliquam ornare magna sed velit congue volutpat. Quisque ut rutrum sem. Suspendisse lorem est, tristique vel commodo vel, congue sagittis erat. In dolor ligula, vehicula eget blandit at, semper vel purus. Aenean lacinia nunc ac lobortis condimentum. Vestibulum id laoreet justo. Morbi mollis nisi leo. Suspendisse dignissim rhoncus mattis. Aliquam placerat nulla ac libero congue pretium.
