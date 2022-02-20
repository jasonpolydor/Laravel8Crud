crud laravel 9
https://www.youtube.com/watch?v=sop-9cn9kvs&t=1207s

upgrade from laravel 8.83.1 to laravel 9
https://www.youtube.com/watch?v=4mWkzKVxcH0


if error on upgrade:
  Problem 1
    - Root composer.json requires nunomaduro/collision ^6.1 -> satisfiable by nunomaduro/collision[v6.1.0].
    - nunomaduro/collision v6.1.0 requires php ^8.0.0 -> your php version (7.4.9) does not satisfy that requirement.
  Problem 2
    - laravel/framework[v9.0.0-beta.1, ..., 9.x-dev] require php ^8.0.2 -> your php version (7.4.9) does not satisfy that requirement.
    - Root composer.json requires laravel/framework ^9.0 -> satisfiable by laravel/framework[v9.0.0-beta.1, ..., 9.x-dev].

update wamp64 to use php8.0
follow link below
https://stackoverflow.com/questions/66078991/how-to-install-php-8-in-wampserver



TO CHANGE PHP 7.3 to PHP 8.0 on WAMPSERVER
https://www.myonlineedu.com/blog/view/16/how-to-update-to-php-8-in-wamp-server-localhost

PHP VERSION NEED TO BE CHANGE ON COMPOSER ALSO
https://stackoverflow.com/questions/46986139/how-to-change-php-version-used-by-composer
>changed in system variables
https://www.softwareok.com/?seite=faq-Windows-10&faq=10



TO UPGRADE
- upgrade composer
  $composer self-update

  Upgrading to version 2.2.6 (stable channel).

  Use composer self-update --rollback to return to version 2.1.8

- change in composer.json
      "laravel/framework": "^9.0",
      "nunomaduro/collision": "^6.1",
- best way to backup vendor folder(rename)
- composer install