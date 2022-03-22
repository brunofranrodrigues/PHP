#!/bin/bash

if test -e /var/log/mysql-dump.log
then
        echo "CHECK LOG FILE"
        echo "LOG OK"
else
        touch /var/log/mysql-dump.log
        echo "LOG FILE NOT FOUND"
        echo "CREATE LOG FILE"
fi


##### WWW-DATA ON ROOT
SUDO="/usr/bin/sudo"

#####Data atual
DATA=`date +%Y-%m-%d-%H:%M`

#####GW DO LINK01
GWLINK01="201.43.1.1"

#####GW DO LINK02
GWLINK02="187.8.116.169"

#####Verifica a rota atual
GWATUAL=`(route -n | tail -1 | awk '{ print $2}')`

echo $DATA >> /var/log/mysql-dump.log

	if [ "$GWATUAL" == "$GWLINK01" ]; then
		echo "A Rota default esta para o LINK01" >> /var/log/mysql-dump.log
		echo "Fim da verificaçao do LINK01" >> /var/log/mysql-dump.log
		QOS="rc.bandlimit-v0.4.speedy"
	else 
		 if [ "$GWATUAL" == "$GWLINK02" ]; then
                       echo "A Rota default esta para o LINK02" >> /var/log/mysql-dump.log
                       echo "Fim da verificaçao do LINK02" >> /var/log/mysql-dump.log
		       QOS="rc.bandlimit-v0.4.link"
                fi
	
	fi


echo "Apagando aquivos antigos" >> /var/log/mysql-dump.log
$SUDO rm -rf /etc/squid3/blk
$SUDO rm -rf /etc/squid3/lib
$SUDO rm -rf /etc/squid3/lib_msn
$SUDO rm -rf /etc/squid3/semauth
$SUDO rm -rf /etc/squid3/semauthip
$SUDO rm -rf /etc/squid3/sites_lib
$SUDO rm -rf /etc/squid3/sites_bloqueados
$SUDO rm -rf /etc/bandlimit/ips 

echo "Dump do banco" >> /var/log/mysql-dump.log
mysql -u root -pR3d3@Sj@ -D db-admsquid -e "SELECT blk from tblk INTO OUTFILE '/etc/squid3/blk' FIELDS TERMINATED BY ',' LINES TERMINATED BY '\n'; 
SELECT lib from tlib INTO OUTFILE '/etc/squid3/lib' FIELDS TERMINATED BY ',' LINES TERMINATED BY '\n';
SELECT libmsn from tlibmsn INTO OUTFILE '/etc/squid3/lib_msn' FIELDS TERMINATED BY ',' LINES TERMINATED BY '\n';
SELECT semauth from tsemauth INTO OUTFILE '/etc/squid3/semauth' FIELDS TERMINATED BY ',' LINES TERMINATED BY '\n';
SELECT semauthip from tsemauthip INTO OUTFILE '/etc/squid3/semauthip' FIELDS TERMINATED BY ',' LINES TERMINATED BY '\n';
SELECT siteslib from tsiteslib INTO OUTFILE '/etc/squid3/sites_lib' FIELDS TERMINATED BY ',' LINES TERMINATED BY '\n';
SELECT sitesblk from tsitesblk INTO OUTFILE '/etc/squid3/sites_bloqueados' FIELDS TERMINATED BY ',' LINES TERMINATED BY '\n';
SELECT address,download,upload from tqos INTO OUTFILE '/etc/bandlimit/ips' FIELDS TERMINATED BY ':' LINES TERMINATED BY '\n';"


echo "Restartando servicos" >> /var/log/mysql-dump.log
$SUDO /usr/sbin/squid3 -k parse
$SUDO /usr/sbin/squid3 -k reconfigure 

$SUDO /etc/init.d/$QOS restart

echo " " >> /var/log/mysql-dump.log
echo " " >> /var/log/mysql-dump.log
