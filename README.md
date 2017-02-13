# Slim3 Boilerplate

This is an opinionated boilerplate for the [Slim3 PHP micro framework](http://www.slimframework.com/).

You can use it to quickly start a Slim3 project with the [Plates template engine](http://platesphp.com/engine/), the [League/Container](http://container.thephpleague.com/), [Monolog](https://seldaek.github.io/monolog/), [PHPDotEnv](https://github.com/vlucas/phpdotenv) and some simple [Gulp](http://gulpjs.com/) tasks for your SCSS and javascript needs.

## Installation

First, create project via composer

`composer create-project ckrack/slim3-boilerplate --stability="dev"`

Then, ìnstall npm packages:

`npm install`

## Running

You can simply run gulp to get a running version in a browser.
This is done via the builtin PHP server, that is proxied in broser-sync.
The default gulp task starts this and watches js/css files aswell as PHP templates.

`gulp`
