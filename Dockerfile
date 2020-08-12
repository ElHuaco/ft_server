# Using OS debian buster
FROM	debian:buster
LABEL	maintanier="Alejandro León <aleon-ca@student.42madrid.com>"
# Install Nginx web server
RUN	apt update && apt upgrade && apt install -y nginx
COPY	srcs/nginx-conf /tmp/
# Install MySQL database system
RUN	apt install -y mariadb-server
# Install PHP processor
RUN	apt install -y php-fpm php-mysql
# Install phpMyAdmin
RUN	apt install -y php-json php-mbstring
COPY	srcs/phpmyadmin /tmp/phpmyadmin
# Data Base from srcs/
COPY	srcs/DB.sql /tmp/
COPY	srcs/test /tmp/
# Configure Nginx
CMD	mkdir /var/www/localhost/ &&\
	cp /tmp/nginx-conf /etc/nginx/sites-available/localhost &&\
	ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/ &&\
# Create Data Base	
#	service mysql start &&\
#	mysql -u root --password= < /tmp/DB.sql &&\
# Configure phpMyAdmin
	cp -R /tmp/phpmyadmin/ var/www/localhost/ &&\
# Test
	cp /tmp/test /var/www/localhost/info.php &&\
# Set ownership
	chown -R www-data:www-data /var/www/* &&\
	chown -R www-data:www-data /var/www/ &&\
	chmod -R 755 /var/www/* &&\
# Start services and enter shell
	service mysql start &&\
	service nginx start &&\
	service php7.3-fpm start &&\
	bash

