# squidlog
Projeto criado 06/02/2011 na época estava estudando CRUD básico em PHP.

1. OBJETIVO
Orientar no processo de instalação da interface de administração do squid.

2. CAMPO DE APLICAÇÃO
Equipe de administradores capacitados em instalar e configurar recursos de servidores linux.

3. INSTRUÇÕES
Início o processo de instalação da interface adicionando os seguintes pacotes ao servidor alvo.
OBS: a distribuição utilizada neste projeto foi debian 6.0—Squeeze

servidor:~# aptitude install apache2 libapache-mode-php5 php5 php5-mysql php5-gd mysql-server-5.0 sudo

Após a instalação dos pacotes é de suma importância adição da senha ao root do banco de dados mysql.

Use um dos dois comandos abaixo para isso.

servidor:~# mysql
mysql> SET PASSWORD FOR root@localhost=PASSWORD('password');

ou

servidor:~# mysqladmin password 

Em seguida crie a database que será utilizada pela interface seguindo os comandos abaixo:

servidor:~# mysqladmin -u root -p create db-admsquid

servidor:~# mysql -D db-admsquid -u root -p < admin.sql 

Em seguida descompacte o arquivo admin.tgz que contém toda a estrutura da interface.

servidor:/var/www# tar -xzvf admin.tgz 

Conceda as permissões necessárias seguindo os comandos abaixo:

chown www-data.root -R /var/www/admin
chmod 755 -R /var/www/admin

Após ter dado as permissões, edite o arquivo config.inc.php que é responsável pelo acesso ao banco de dados da interface.
Observe que a estrutura do arquivo contém usuário, senha e nome do banco de dados que foi criado.

servidor:/var/www/admin# vi config.inc.php

Exemplo do arquivo config.inc.php:

/*

 * Configurações de acesso ao banco de dados

 */


// Servidor de Banco de Dados

$bdconfig['servidor'] = 'localhost';

// Usuario de acesso

$bdconfig['usuario']  = 'root';

// Senha de acesso

$bdconfig['senha']    = 'R3d3@Sj@';

// Banco

$bdconfig['banco']    = 'db-admsquid';


Crie no apache a estrutura de diretório virtual como está no exemplo abaixo.
Lembrando que todo codigo referencia sempre a seguinte url http://localhost/admin/

Exemplo do arquivo default:

DocumentRoot /srv/www/
admin/
	<Directory /srv/www/admin/>

	Options FollowSymLinks

	AllowOverride None

</Directory>


<Directory /srv/www/admin/>

	Options Indexes FollowSymLinks MultiViews

	AllowOverride None

	Order allow,deny

	allow from all

</Directory>

Por ultimo edite o arquivo /etc/sudoers e conceda permissão ao usuário do apache de forma que ele consiga executar qualquer comando sem a necessidade de senha.

servidor:~# vi /etc/sudoers

Adicione a seguinte linha:

www-data        ALL=(ALL) ALL

