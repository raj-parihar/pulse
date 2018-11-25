sudo apt-get update && sudo apt-get install apache2 -y
sudo apt-get install apache2 php libapache2-mod-php
sudo apt-get install mysql-server php-mysql php-pear
sudo apt install php-mysqli
sudo a2enmod proxy_fcgi setenvif
sudo a2enconf php7.0-fpm
sudo service apache2 restart
