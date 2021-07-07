# Techpump Technical Test

<p align="center">
    <a href="https://www.docker.com/"><img src="https://img.shields.io/badge/Docker-19-blue.svg?style=flat-square&logo=docker" alt="Docker"/></a>
    <a href="https://laravel.com/"><img src="https://img.shields.io/badge/Symfony-5-red?style=flat-square&logo=symfony" alt="Symfony"/></a>
    <a href="https://www.php.net/"><img src="https://img.shields.io/badge/PHP-7-777BB4.svg?style=flat-square&logo=php" alt="PHP"/></a>
    <a href="https://www.jetbrains.com/es-es/phpstorm/?ref=steemhunt"><img src="https://img.shields.io/badge/PhpStorm-2021-000000.svg?style=flat-square&logo=phpstorm" alt="PhpStorm"/></a>
    <a href="https://www.mysql.com/"><img src="https://img.shields.io/badge/mysql-8-4479A1.svg?style=flat-square&logo=mysql" alt="MySql"/></a>
    <a href="https://www.sqlite.org/index.html"><img src="https://img.shields.io/badge/sqlite-3-003B57.svg?style=flat-square&logo=sqlite" alt="SQLite"/></a>
    <a href="#"><img src="https://img.shields.io/badge/github_actions-2088FF.svg?style=flat-square&logo=github-actions" alt="Github Actions"/></a>
</p>

Instructions: [INSTRUCTIONS.md](./INSTRUCTIONS.md)

## Repository description

# 🐳 Docker + PHP 7.4 + MySQL + Nginx + Symfony 5 Boilerplate

## Description

This is a complete stack for running Symfony 5 into Docker containers using docker-compose tool.

It is composed by 3 containers:

- `nginx`, acting as the webserver.
- `php`, the PHP-FPM container with the 7.4 PHPversion.
- `db` which is the MySQL database container with a **MySQL 8.0** image.

## Installation

1. 😀 Clone this rep.

2. Run `docker-compose up -d`

3. The 3 containers are deployed:

```
Creating techpump_db_1    ... done
Creating techpump_php_1   ... done
Creating techpump_nginx_1 ... done
```

4. Use this value for the DATABASE_URL environment variable of Symfony:

```
DATABASE_URL=mysql://app_user:helloworld@db:3307/app_db?serverVersion=5.7
```

You could change the name, user and password of the database in the `env` file at the root of the project.

## Local Web site

[Local Web](http://localhost:8001/)