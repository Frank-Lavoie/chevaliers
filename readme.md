php artisan install:api
https://medium.com/@anushujan/deploying-a-laravel-11-project-on-hostinger-using-web-hosting-eca710e024f0

# Hostinger

## Pull du repos

````
git pull origin main --force
```

## MAJ version PHP

Lien : https://www.interviewsolutionshub.com/blog/how-to-update-php-and-composer-versions-using-ssh-cli-without-sudo-on-hostinger

````

nano ~/.bashrc

```

Y ajouter la ligne suivante (83 veut dire PHP 8.3) : alias php=/opt/alt/php83/usr/bin/php

```

nano ~/.bashrc
source ~/.bashrc
php --version

```

## Composer install

```

php composer.phar install

```

```
