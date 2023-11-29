install LAMP
sql database admin id = php pwd = php OR edit portail.enac.fr/db_conn.php with new id and password

sudo cp -r mysql.conf.d /etc/mysql/
sudo cp -r mysql /var/lib/
sudo cp -r portail.enac.fr.conf /etc/apache2/sites-available/
sudo cp -r portail.enac.fr /var/www/html/
sudo cp server.key /etc/ssl/private
sudo cp server.crt /etc/ssl/certs/
cd /etc/apache2/sites-available
sudo a2ensite portail.enac.fr.conf
sudo service apache2 restart

run demo.sh
give victim 192.168.0.2/24
stop network-manager service if not working
add line $192.168.0.1 portail.enac.fr
in /etc/hosts
add demo_jpo/easy-rsa/ca.crt as trusted certification authority in browser


give adversary 192.168.0.3/24
import server.key in wireshark
listen
