# Using OS debian buster
From	debian:buster
Label	maintanier="Alejandro León <aleon-ca@student.42madrid.com>"
# Install Nginx web server
Run		apt update && apt install -y nginx
Copy	src/nginx-conf /tmp/
# Configure Nginx
Run		mkdir /var/www/localhost/
Run		cp /temp/nginx-conf etc/nginx/sites-available/localhost
Run		ln -s /etc/nginx/sites-available/localhost etc/nginx/sites-enabled
# Install MySQL database system
Run		apt install -y mariadb-server
# Install PHP processor
Run		apt install -y php-fpm php-mysql
# Install phpMyAdmin
Run		apt install -y php-json php-mbstring
Copy	src/phpmyadmin /tmp/phpmyadmin
# Configure phpMyAdmin
Run		cp -R /tmp/phpmyadmin/ var/www/localhost/
# Install Wordpress service
Run		apt install -y wget
Run		wget https://wordpress.org/latest.tar.gz
Run		tar -xvzf latest.tar.gz && mv /wordpress/* /var/www/localhost/
Run		rmdir /wordpress/
# Create and Set Wordpress database
# Set Ownership
Run		chown -R www-data:www-data /var/www/* &&\
		chown -R www-data:www-data /var/www/ &&\
		chown -R 755 /var/www/*
# Start services and enter shell when run
Cmd		service mysql start &&\
		service nginx start &&\
		service php7.3-fpm start &&\
		tail -f /dev/null
