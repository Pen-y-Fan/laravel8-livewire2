# Laravel 8 with Livewire 2

This is a Laravel 8 side project to experiment with Livewire 2, it's a follow-up project
to [Livewire Examples](https://github.com/Pen-y-Fan/Livewire-Examples), which used Laravel ^6.2 and Livewire v0.5.2!

This project is created from the examples from on the [Livewire website](https://laravel-livewire.com/).

## Requirements

This is a Laravel 8 project with Livewire 2 installed. The installation is similar to a new Laravel project.

- [PHP 7.3 or 7.4 or 8.0+](https://www.php.net/downloads.php)
- [Composer](https://getcomposer.org)

Recommended:

- [Git](https://git-scm.com/downloads)

## Clone

See [Cloning a repository](https://help.github.com/en/articles/cloning-a-repository) for details on how to create a
local copy of this project on your computer.

e.g.

```sh
git clone git@github.com:Pen-y-Fan/laravel8-livewire2.git
```

### Install the Dependencies

Install all the dependencies using composer

```sh
cd laravel8-livewire2
composer install
```

### Create an .env file

Create an `.env` file from `.env.example`

```shell script
composer post-root-package-install
```

### Generate an APP_KEY

```shell script
php artisan key:generate
```

<!--
### Update the Database Settings

The `Posts` link uses Lorem Ipsum data from a MySQL database or Sqlite database.

#### MySql

For MySql, create a database on your MySql server and add the settings to the
**.env** file:

```text
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YourDatabaseName
DB_USERNAME=YourDatabaseUserName
DB_PASSWORD=YourDatabaseUserPassword
```

#### Sqlite

Alternatively create an empty sqlite database and configure Laravel to use Sqlite

##### Sqlite on Linux / Mac

```shell script
touch database/database.sqlite
```

##### Sqlite on Windows

```shell script
fsutil file createnew database/database.sqlite 0
```

##### Edit the .env file

Edit the **.env** file, add sqlite as the DB_CONNECTION and delete all the other DB\_\* keys.

```sh
DB_CONNECTION=sqlite
DB_HOST=127.0.0.1   }
DB_PORT=3306        }
DB_DATABASE=laravel } Delete
DB_USERNAME=root    }
DB_PASSWORD=        }
```

### Create the database

Run the following command to create the database, you choose in your `.env` file and seed the `Posts` table with Lorem
Ipsum data:

```shell script
php artisan migrate --seed
```

### Sqlite in Memory Testing Database

The `phpunit.xml` file has been configured for Sqlite in memory testing. This requires the pdo_sqlite extension to be
enabled in your `php.ini`. If there are any problems enabling the extension remove the following lines, PHPUnit will
then to use the database configured in your `.env` file.

```xml

<server name="DB_CONNECTION" value="sqlite"/>
<server name="DB_DATABASE" value=":memory:"/>
```
-->
### Run all tests

To make it easy to run all the PHPUnit tests a composer script has been created in composer.json. From the root of the
projects, use `composer test` or `composer tests`

```shell script
composer tests
```
<!--
### Serve website

To use the php web server, run the following artisan command:

```shell script
php artisan serve
```

### Open the website

See the message under the serve command for the website name and port, by default it is:

- <http://127.0.0.1:8000>

**Laravel 8 with Livewire 2** will display, with links to the examples from the Livewire site.

* Counter
* Data Binding
* Triggering Actions
* Contact Form
* Posts

See the Livewire site for details or take a look at the source code.
-->
## Contributing

This is a **personal project**. Contributions are **not** required. Anyone interested in developing this project are
welcome to fork or clone for your own use.

## Credits

* [Michael Pritchard \(AKA Pen-y-Fan\)](https://github.com/pen-y-fan).

## License

MIT License (MIT). Please see [License File](LICENSE.md) for more information.
