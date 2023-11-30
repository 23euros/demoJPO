Quickstart
  Physical:
    Plug Hub
    Plug 3 RJ45 in 1x line
    Plug pecari (client)
    Plug fennec (server)
    Plug tigre (attacker)
    
  Server (fennec, pwd demojpo):
    run demo.sh (don't forget to press q to finish the script)
    goto localhost/phpmyadmin on firefox
    sql database admin id = php pwd = php OR edit portail.enac.fr/db_conn.php with new id and password

  Client
    run demo.sh (don't forget to press q to finish the script)
    open firefox
    goto portail.enac.fr (for HTTP)
    goto portail.enac.fr in incognito mode (for https, does not save cookies)
    open preferences, search certificats and modify the authorizations for ENAC CA at will

  Attacker
    run demo.sh (don't forget to press q to finish the script)
    sudo wireshark
    catch packets on enp0s25


Initial setup

install LAMP

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
