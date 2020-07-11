## To install

After AWS Instance creation and putty login

```bash
sudo apt-get update
```

```bash
sudo apt-get upgrade
```

```bash
sudo apt-get install apache2
```

```bash
sudo add-apt-repository ppa:ondrej/php
```
```bash
sudo apt-get update
```

```bash
sudo apt-get install php7.4
```

```bash
sudo service apache2 restart
```

```bash
sudo apt-get install php7.4[tab][tab]
```

```bash
sudo apt install php7.4-common php7.4-bcmath openssl php7.4-json php7.4-mbstring
```

```bash
sudo a2enmod rewrite
```

```bash
sudo service apache2 restart
```

```bash
sudo apt-get install mysql-server
```

```bash
sudo apt-get install php7.4-mysql
```

```bash
sudo apt-get install phpmyadmin
```

```bash
cd ~
curl -sS https://getcomposer.org/installer -o composer-setup.php
```

```bash
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
```

```bash
git clone https://github.com/mmuhd/real.git
```

```bash
cd real
```

```bash
composer install
```

```bash
php artisan key:generate
```

```bash
cp .env.example .env
```

After creating database

```bash
php artisan migrate
```

```bash
php artisan db:seed
```

```bash
curl -sL https://deb.nodesource.com/setup_6.x | sudo -E bash -
sudo apt-get -y install nodejs
```

```bash
npm install
```

```bash
npm run dev
```


```bash
sudo cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/laravel.conf
sudo nano /etc/apache2/sites-available/laravel_project.conf
```
In the larvel_project.conf

```bash
NameVirtualHost *:8080
Listen 8080
 
<VirtualHost *:8080>
    ServerAdmin admin@example.com
    ServerName laravel.dev
    ServerAlias www.laravel.dev
    DocumentRoot /home/user/projects/laravel_project/public
     
    <Directory /home/user/projects/laravel_project/public/>
            Options Indexes FollowSymLinks MultiViews
            AllowOverride All
            Order allow,deny
            allow from all
            Require all granted
    </Directory>
     
    LogLevel debug
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

```bash
sudo nano /etc/hosts
```

```bash
127.0.0.1   laravel.dev
```

```bash
sudo a2ensite laravel_project.conf
sudo a2dissite 000-default.conf
```

```bash
sudo service apache2 restart
```



## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [muazumusamuhd@gmail.com](mailto:muazumusamuhd@gmail.com). All security vulnerabilities will be promptly addressed.

## License

This software is licensed under the [MIT license](https://opensource.org/licenses/MIT).
# real
