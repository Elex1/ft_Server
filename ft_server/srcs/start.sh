# install nginx
apt update
apt upgrade -y 
apt install nginx -y
mv /tmp/default /etc/nginx/sites-available/

#config ssl
apt-get install -y openssl
openssl req -newkey rsa:2048 -nodes -keyout /etc/ssl/certs/key.key -x509 -days 365 -out /etc/ssl/certs/cer.crt -subj "/C=MA/ST=BENGUERIR/L=1337/O=sleeem/OU=IT Department/CN=Archi"

#install Mysql
apt install wget -y 
apt install lsb-release -y
apt install gnupg -y 
wget http://repo.mysql.com/mysql-apt-config_0.8.13-1_all.deb
export DEBIAN_FRONTEND=noninteractive
echo "mysql-apt-config mysql-apt-config/select-server select mysql-5.7" 	| debconf-set-selections	
dpkg -i mysql-apt-config_0.8.13-1_all.deb
apt update
apt upgrade -y
apt install -y mysql-server
chown -R mysql: /var/lib/mysql

#install phpMyadmin
apt-get install -y php-fpm php-mysql
apt-get install -y unzip
apt install -y php-mbstring php-zip php-gd
mv /tmp/php.ini /etc/php/7.3/fpm/

wget https://files.phpmyadmin.net/phpMyAdmin/4.9.2/phpMyAdmin-4.9.2-all-languages.zip
unzip phpMyAdmin-4.9.2-all-languages.zip
mkdir  var/www/html/phpmyadmin
mkdir -p /var/lib/phpmyadmin/tmp
chmod 777 var/lib/phpmyadmin/tmp/
mv phpMyAdmin-4.9.2-all-languages/* var/www/html/phpmyadmin
rm -rf /var/www/html/phpmyadmin/config.sample.inc.php
cp /tmp/config.inc.php /var/www/html/phpmyadmin/
chmod 660 /var/www/html/phpmyadmin/config.inc.php
chown -R www-data:www-data /var/www/html/phpmyadmin

#install Wordpress
apt-get install curl -y
curl -LO https://wordpress.org/latest.tar.gz
tar xzvf latest.tar.gz
mkdir /var/www/html/wordpress
cp /tmp/wp-config.php /var/www/html/wordpress
cp -a /wordpress/. /var/www/html/wordpress
chown -R www-data:www-data /var/www/html/wordpress

#start
service nginx start
service mysql start
service php7.3-fpm start

#config user phpMyadmin & wordpress (database)
mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'slam'@'localhost' IDENTIFIED BY 'slam1234';";
mysql --password=slam1234 --user=slam -e "CREATE DATABASE wordpress; use wordpress; source /tmp/wordpress.sql;";
mysql --password=slam1234 --user=slam -e "FLUSH PRIVILEGES;";
mysql -u root < /var/www/html/phpmyadmin/sql/create_tables.sql;