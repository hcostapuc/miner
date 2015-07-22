# CakePHP Application Skeleton

#### Cake status:
[![Build Status](https://api.travis-ci.org/cakephp/app.png)](https://travis-ci.org/cakephp/app)

#### Miner status:
[![Build Status](https://travis-ci.org/miners-source/miner.svg?branch=master)](https://travis-ci.org/miners-source/miner)

A skeleton for creating applications with [CakePHP](http://cakephp.org) 3.0.

## Installation

1. Download [Composer](http://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run
```bash
composer create-project --prefer-dist cakephp/app [app_name]
```

You should now be able to visit the path to where you installed the app and see
the setup traffic lights.

## Configuration

Read and edit `config/app.php` and setup the 'Datasources' and any other
configuration relevant for your application.
