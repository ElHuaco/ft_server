#!/bin/bash

if [ "$1" = "on" ] ;
	then sed -i '' -e '6d;$d' /etc/nginx/sites-available/localhost/nginx-conf &&\
		echo "\nautoindex on;\nindex random;\n}" >> \
		/etc/nginx/sites-available/localhost/nginx-conf ;
fi
chown -R www-data:www-data /var/www/* ;
chmod 755 -R /var/www/* ;
service mysql start;
service nginx start;
service php7.3-fpm start;
