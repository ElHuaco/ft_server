## Using OS debian buster
From	debian:buster
Label	maintanier="Alejandro León <aleon-ca@student.42madrid.com>"
ENV		AUTOINDEX=off
## Install Nginx web server
Run		apt update && apt install -y nginx
## Configure Nginx
Copy	srcs/nginx-conf /tmp/
Run		mkdir /var/www/localhost/
Run		cp /tmp/nginx-conf etc/nginx/sites-available/localhost
Run		ln -s /etc/nginx/sites-available/localhost etc/nginx/sites-enabled
## Install MySQL database system
Run		apt install -y mariadb-server
## Install PHP processor
Run		apt install -y php-fpm php-mysql
## Install phpMyAdmin
Run		apt install -y php-json php-mbstring
## Configure phpMyAdmin
Copy	srcs/phpmyadmin /tmp/phpmyadmin
Run		cp -R /tmp/phpmyadmin/ var/www/localhost/
Run		chmod 660 /var/www/localhost/phpmyadmin/config.inc.php
## Install Obtain SSL certificates from Let's Encrypt
## Install Wordpress service. Copy preconfigured wordpress site.
Run		apt install -y wget
Run		wget https://wordpress.org/latest.tar.gz
Run		tar -xvzf latest.tar.gz && mv /wordpress/* /var/www/localhost/
Copy	srcs/wp-config.php /var/www/localhost/wp-config.php
Copy	srcs/wordpress.sql /root/
## Create Wordpress database
Run		service mysql start &&\
		echo "CREATE USER 'admin'@'localhost';" | mysql -u root &&\
		echo "CREATE DATABASE wordpress;" | mysql -u root &&\
		echo "GRANT ALL ON wordpress.* TO 'admin'@'localhost' IDENTIFIED BY '123' WITH GRANT OPTION;" | mysql -u root &&\
		echo "update mysql.user set plugin = 'mysql_native_password' where user='admin';" | mysql -u root &&\
		echo "FLUSH PRIVILEGES;" | mysql -u root &&\
		mysql wordpress -u root --password= < /root/wordpress.sql
## Set privileges
#Run		chown -R www-data:www-data /var/www/*
#		chmod 755 -R /var/www/*
## Start services and enter shell when run.
## Option to show autoindexes. With docker run -e "AUTOINDEX=on"
Copy	srcs/service_start.sh /tmp/
Cmd		export AUTOINDEX && bash /tmp/service_start.sh ${AUTOINDEX} && bash
