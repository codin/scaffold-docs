---
layout: documentation
title: Getting Started
---

# Installation

## Composer
We reccomend you install Scaffold via Composer, if you do not have Composer installed locally you can get it here: [https://getcomposer.org/](https://getcomposer.org/) or if you have Docker installed and and don't want to install PHP & Composer on your local machine then whenever `composer` is referenced you can use `docker run --rm -v $(PWD):/app -v composer/composer`.

So to create a new Scaffold project run `composer create-project codin/scaffold`, this will install the latest version of the Scaffold framework and create you a project folder ready to go.

## Zip
You can also install Scaffold by downloading a zip of the latest release from our Github page here: [https://github.com/codin/scaffold/releases](https://github.com/codin/scaffold/releases). But as this project uses Composer for it's dependencies you will need to `cd` into your project and run `composer install`.

# Optional

## Frontend
Scaffold ships with some frontend tools to get you started, this will allow you to compile Scss into CSS and process your assets for production through minification. If you wish to use these then also `cd` into your project and run either `yarn` if you have it or `npm install`.

## Docker
Scaffold also ships with Docker support right out of the box, if you do not need this then you can remove the `Dockerfile, docker-compose.yml and _docker_config` files & directories. If you do wish to make use of Docker we've included some `make` commands to help you get things up and running.

* `make`
 * This will build the image and up the stack
* `make build`
 * This will just build the image
* `make run`
 * This will just run the stack
* `make ssh`
 * This will allow you to gain shell access to the running container.

### Config
Inside `_docker_config` you'll find the default hosts for the Apache service as well as a bunch of setup commands to configure Apache. You should modify these to suite your project needs. Currently the `Dockerfile` runs Ubuntu, with Apache & PHP 7.0, modify this also to meet your project needs.