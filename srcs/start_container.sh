
mkdir /etc/nginx/ssl/

openssl req -x509 -nodes -newkey rsa:2048 -days 365 -keyout /etc/nginx/ssl/nginx.key -out \
/etc/nginx/ssl/nginx.crt -subj /C=RF/ST=/L=Kazan/O=21school/CN=unlix.ru

service nginx start
service php7.3-fpm start
service mysql start

chown -R www-data:www-data /var/www/html/index.nginx-debian.html
chown -R www-data:www-data /var/www/html/wordpress
chown -R www-data:www-data /var/www/html/phpMyAdmin
chmod -R 755 /var/www/*

echo "CREATE DATABASE wordpress DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;" | mysql -u root
echo "GRANT ALL ON wordpress.* TO 'root'@'localhost';" | mysql -u root
echo "update mysql.user set plugin = 'mysql_native_password' where user='root';" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root

bash