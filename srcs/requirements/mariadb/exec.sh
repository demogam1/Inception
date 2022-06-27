#!/bin/bash

if [ -f /var/lib/mysql/init.txt ]; 

then

	mysqld_safe
else 

	service mysql start 


	mysql -u root -e "CREATE DATABASE IF NOT EXISTS wordpress;


	CREATE USER '$DATABASE_USER'@'localhost' IDENTIFIED BY '$DATABASE_USER_PDW';


	GRANT ALL PRIVILEGES ON wordpress.* TO '$DATABASE_USER'@'localhost' IDENTIFIED BY '$DATABASE_USER_PDW';


	GRANT ALL ON wordpress.* to '$DATABASE_USER'@'%' IDENTIFIED BY '$DATABASE_USER_PDW'; FLUSH PRIVILEGES;"


	mysql -u root -e "use wordpress; source wordpress.sql;"


	echo "ALTER USER 'root'@'localhost' IDENTIFIED BY '$DATABASE_ROOTPSW'; 


	GRANT ALL PRIVILEGES ON *.* TO 'root'@'localhost' IDENTIFIED BY '$DATABASE_ROOTPSW'; 


	GRANT ALL ON *.* to 'root'@'%' IDENTIFIED BY '$DATABASE_ROOTPSW'; 


	FLUSH PRIVILEGES;" > init.txt


	cp init.txt /var/lib/mysql 


	service mysql stop && mysqld_safe --init-file=/init.txt

fi
