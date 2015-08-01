# Miner
[![Build Status](https://travis-ci.org/miners-source/miner.svg?branch=master)](https://travis-ci.org/miners-source/miner)
[![Code Climate](https://codeclimate.com/github/miners-source/miner/badges/gpa.svg)](https://codeclimate.com/github/miners-source/miner)

## An open-source platform to connect developers and designers 

Welcome to Miner's source code repository.

Miner is a platform to find developers and designers from all over the world. We connect people to developers and designers who has their work exposed in well-known products, such as GitHub, Behance and Dribbble, making them visible and easily found by using filters to find people with specific knowledge, or people from special places.

Our goal with opening the source code is to stimulate the creation of a community of developers around a high-quality  platform.

You will be able to see the software in action soon, in http://miner.com.br

The official repo is https://github.com/miner-source/miner

## Getting started

### Dependencies

To run this project you need:

* PHP 5.4.16 or greater
* [MySQL](http://www.mysql.com/)
  * Linux - `$ sudo apt-get install mysql`
  * Windows - [MySQL for Windows](http://dev.mysql.com/downloads/windows/)
  
### Setup the project

* Clone the project

        $ git clone https://github.com/miners-source/miner.git

* Enter project folder

        $ cd miner

* Update the `config/app.php`


    You must do this to configure your local database!
    Add your database username and password (unless you don't have any).

If everything goes *OK* until now, you can run the project!

### Running the project

After running your Apache server, you can just:

Open [http://localhost/miner](http://localhost/miner)

### Translations

We hope to support a lot of languages in the future, so we are accepting pull requests with translations to other languages.

## How to contribute with code

Before contributing, take a look at our Backlog (https://trello.com/b/X1kxdncA/backlog) and discuss your plans in our discussion board on Trello (https://trello.com/b/wsSDVJ3F/discussion).

After that, just fork the project, change what you want, and send us a pull request.

### Best practices
You can follow some nice "rules" to get your pull request accepted faster:

* Follow this style guide: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
* Create one acceptance tests for each scenario of the feature you have implemented.
* Create tests to keep the code coverage in the new parts you are writing, including helpers methods and classes.
* Let our tests serve as a style guide.

## License

Licensed under the MIT license.
