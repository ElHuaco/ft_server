#!/bin/bash

if [ "$1" = "on" ] ;
	then sed -i '16d;$d' /etc/nginx/sites-available/localhost &&\
		echo -e "\nautoindex on;\nindex random;\n}" >> \
		/etc/nginx/sites-available/localhost ;
fi
chown -R www-data:www-data /var/www/* ;
chmod 755 -R /var/www/* ;
service mysql start;
service nginx start;
service php7.3-fpm start;
