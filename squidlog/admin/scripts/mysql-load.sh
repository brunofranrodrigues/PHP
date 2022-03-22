#!/bin/bash
#
# $1 = arquivo com os dados já formatados
#

IFS=" "

while read sitesblk;
do
let I++
tsitesblk_id="$I"
        echo
        echo "sitesblk:    $sitesblk"

mysql -u root -pR3d3@Sj@ -e "INSERT INTO tsitesblk VALUES('','$sitesblk')" db-admsquid 
[ "$?" = "0" ] && echo "Operacao OK" || echo "Operação: ERRO"
done < $1
