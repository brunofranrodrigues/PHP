<?php
App::uses('AppModel', 'Model');

class Sincronizacao extends AppModel{

	var $useTable = false;       

 	# Esse é o segredo....
 	# o seu model não vai usar nenhuma tabela...
 	# apenas a conexão com o banco  

	public function executaSinc($filename){

   // set the filename to read CSV from
		$filename = WWW_ROOT. 'files' . DS . $filename;

   // open the file
		$handle = fopen($filename, "r");

		while (($data = fgetcsv($handle, 10000, ",")) !== FALSE)

		{

			$db = ConnectionManager::getDataSource('default');

			$data[0] = str_ireplace('/', '-', $data[0]);

			$situacao = '';
			if ( $data[5] < 0 ) {
				$situacao = '1';
				$data[5] = str_ireplace('-', '', $data[5]);
			} else {
				$situacao = '4';
			}

			$db->rawQuery("INSERT into balancetes values('','$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$situacao')");

		}

		fclose($handle);

		@$conn = mysql_connect("localhost","root","maxmax");
		@$conexao = mysql_select_db("db_financas",$conn);
		
		//Busca todos os registro com situacao de credito e formata o campo data no padrao do mysql
		$result = mysql_query("select historico,valor,str_to_date(data, '%m-%d-%Y') as DATA_F from balancetes where situacao_id = '4';");
		if (!$result) {
			$this->Session->setFlash(__('Não foi possível executar a consulta: '));
			exit;
		}

		//Sincroniza os dados entre a tabela de balancetes e a de receitas.
		$strCountcar = "SELECT COUNT(*) AS num_registros from balancetes where situacao_id = '4';";
		$querycar = mysql_query($strCountcar);
		$row1 = mysql_fetch_array($querycar);
		$totalcar = $row1['num_registros'];
		if ($totalcar == "0"){
			$this->Session->setFlash(__('Nao existe registros de CREDITO para importar'));
		}else {

			for ($i=0;$i <= $totalcar;$i++) {
				$row = mysql_fetch_row($result);

				$query = "INSERT INTO receitas (id,cartipo_id,usuario_id,nome,descr,valor_car,data_pg,situacao_id) VALUES ('','1','','Importados','" . $row[0] . "','" . $row[1] . "','" . $row[2] . "','4')";	
				mysql_query($query);

			}

		}

		//Busca todos os registro com situacao de debito e formata o campo data no padrao do mysql
		$resultcapg = mysql_query("select historico, str_to_date(data, '%m-%d-%Y') as DATA_ven, valor, str_to_date(data, '%m-%d-%Y') as DATA_pg from balancetes where situacao_id = '1';");
		if (!$resultcapg) {
			$this->Session->setFlash(__('Não foi possível executar a consulta: '));
			exit;
		}

		//Sincroniza os dados entre a tabela de balancetes e a de despesas.
		$strCountcapg = "SELECT COUNT(*) AS num_registros from balancetes where situacao_id = '1';";
		$querycapg = mysql_query($strCountcapg);
		$row2 = mysql_fetch_array($querycapg);
		$totalcapg = $row2['num_registros'];

		if ($totalcapg == "0"){
			$this->Session->setFlash(__('Nao existe registros de DEBITO para importar'));
		}else {

			for ($i=0;$i <= $totalcapg;$i++) {
				$row = mysql_fetch_row($resultcapg);

				$query = "INSERT INTO despesas (id,capgtipo_id,usuario_id,nome,descr,data_venc,valor_capg,data_pg,situacao_id) VALUES ('','11','','Importados','" . $row[0] . "','" . $row[1] . "','" . $row[2] . "','" . $row[3] . "','1')";	
				mysql_query($query);

			}
		}

		mysql_close();
	}
}
?>