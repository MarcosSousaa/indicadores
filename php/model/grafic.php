<?php
    include 'datb.php';     
    class Grafico{        
        private $grafic = array();
        private $linha1 = array();
        private $linha2 = array();
        
                
        public function geraGrafico(){
            $ano = $_SESSION['ano'];
            $tipo = $_SESSION['tipo'];                        
            $linha = 1;
            $mysql = new db();
            $listaDados = $mysql->sql_query("SELECT INDICADORES.DESCRICAO,DADOS_MENSAL.MES01, DADOS_MENSAL.MES02, DADOS_MENSAL.MES03, DADOS_MENSAL.MES04, DADOS_MENSAL.MES05, DADOS_MENSAL.MES06, DADOS_MENSAL.MES07, DADOS_MENSAL.MES08, DADOS_MENSAL.MES09, DADOS_MENSAL.MES10, DADOS_MENSAL.MES11, DADOS_MENSAL.MES12, GRAFICO.META_GRAFICO,GRAFICO.NOME_GRAFICO,GRAFICO.DESCRICAO_GRAFICO FROM DADOS_MENSAL INNER JOIN INDICADORES ON DADOS_MENSAL.ID_INDICADORES_FK = INDICADORES.ID_INDICADORES INNER JOIN GRAFICO ON DADOS_MENSAL.ID_GRAFICO_FK = GRAFICO.ID_GRAFICO WHERE ID_GRAFICO =". $tipo. " AND DADOS_MENSAL.ANO =".$ano."");    // NUMERO DE CLIENTES PESQUISADOS                
            if(mysql_num_rows($listaDados)> 0){
                while($dados = mysql_fetch_object($listaDados)){                
                    switch($linha){
                        case 1:
                            $this->linha1[0][0] = $this->dados->DESCRICAO_GRAFICO;
                            $this->linha1[0][1] = $this->dados->META_GRAFICO;
                            $this->linha1[1][0] = "Janeiro";
                            $this->linha1[1][1] = $this->dados->MES01;                            
                            $this->linha1[2][0] = "Fevereiro";
                            $this->linha1[2][1] = $this->dados->MES02;                            
                            $this->linha1[3][0] = "Março";
                            $this->linha1[3][1] = $this->dados->MES03;                            
                            $this->linha1[4][0] = "Abril";
                            $this->linha1[4][1] = $this->dados->MES04;                            
                            $this->linha1[5][0] = "Maio";
                            $this->linha1[5][1] = $this->dados->MES05;                            
                            $this->linha1[6][0] = "Junho";
                            $this->linha1[6][1] = $this->dados->MES06;                            
                            $this->linha1[7][0] = "Julho";
                            $this->linha1[7][1] = $this->dados->MES07;                            
                            $this->linha1[8][0] = "Agosto";
                            $this->linha1[8][1] = $this->dados->MES08;                            
                            $this->linha1[9][0] = "Setembro";
                            $this->linha1[9][1] = $this->dados->MES09;                            
                            $this->linha1[10][0] = "Outubro";
                            $this->linha1[10][1] = $this->dados->MES10;                            
                            $this->linha1[11][0] = "Novembro";
                            $this->linha1[11][1] = $this->dados->MES11;                            
                            $this->linha1[12][0] = "Dezembro";
                            $this->linha1[12][1] = $this->dados->MES12;                            
                    }
                    $linha = $linha + 1;
                }
                // NOME GRAFICO
                $this->grafic[0][0] = $this->linha1[0][0];
                //META GRAFICO
                $this->grafic[0][1] = $this->linha1[0][1];
                // NOME DO MÊS JANEIRO                
                $this->grafic[1][0] = $this->linha1[1][0];                                                                  
                // DADOS GRAFICO JANEIRO
                if($this->linha1[1][1] == 0){
                    $this->grafic[1][1] = 0;
                }
                else {
                    $this->grafic[1][1] =  $this->linha1[1][1];
                }                
                // NOME DO MÊS FEVEREIRO
                $this->grafic[2][0] = $this->linha1[2][0];
                // DADOS GRAFICO FEVEREIRO                
                if($this->linha1[2][1] == 0){
                    $this->grafic[2][1] = 0;
                }
                else {
                    $this->grafic[2][1] =  $this->linha1[2][1];
                }                                
                // NOME DO MÊS MARÇO
                $this->grafic[3][0] = $this->linha1[3][0];
                // DADOS GRAFICO MARÇO  
                if($this->linha1[3][1] == 0){
                    $this->grafic[3][1] = 0;
                }
                else {
                    $this->grafic[3][1] =  $this->linha1[3][1];
                }                              
                // NOME DO MÊS ABRIL
                $this->grafic[4][0] = $this->linha1[4][0];
                // DADOS GRAFICO ABRIL 
                if($this->linha1[4][1] == 0){
                    $this->grafic[4][1] = 0;
                }
                else {
                    $this->grafic[4][1] =  $this->linha1[4][1];
                }                                
                // NOME DO MÊS MAIO
                $this->grafic[5][0] = $this->linha1[5][0];
                // DADOS GRAFICO MAIO 
                if($this->linha1[5][1] == 0){
                    $this->grafic[5][1] = 0;
                }
                else {
                    $this->grafic[5][1] =  $this->linha1[5][1];
                }                               
                // NOME DO MÊS JUNHO
                $this->grafic[6][0] = $this->linha1[6][0];
                // DADOS GRAFICO JUNHO    
                if($this->linha1[6][1] == 0){
                    $this->grafic[6][1] = 0;
                }
                else {
                    $this->grafic[6][1] =  $this->linha1[6][1];
                }                            
                // NOME DO MÊS JULHO
                $this->grafic[7][0] = $this->linha1[7][0];
                // DADOS GRAFICO JULHO   
                if($this->linha1[7][1] == 0){
                    $this->grafic[7][1] = 0;
                }
                else {
                    $this->grafic[7][1] =  $this->linha1[7][1];
                }                             
                // NOME DO MÊS AGOSTO
                $this->grafic[8][0] = $this->linha1[8][0];
                // DADOS GRAFICO AGOSTO
                if($this->linha1[8][1] == 0){
                    $this->grafic[8][1] = 0;
                }
                else {
                    $this->grafic[8][1] =  $this->linha1[8][1];
                }                                
                // NOME DO MÊS SETEMBRO
                $this->grafic[9][0] = $this->linha1[9][0];
                // DADOS GRAFICO SETEMBRO
                if($this->linha1[9][1] == 0){
                    $this->grafic[9][1] = 0;
                }
                else {
                    $this->grafic[9][1] =  $this->linha1[9][1];
                }                                
                // NOME DO MÊS OUTUBRO
                $this->grafic[10][0] = $this->linha1[10][0];
                // DADOS GRAFICO OUTUBRO                
                if($this->linha1[10][1] == 0){
                    $this->grafic[10][1] = 0;
                }
                else {
                    $this->grafic[10][1] =  $this->linha1[10][1];
                }                
                // NOME DO MÊS NOVEMBRO
                $this->grafic[11][0] = $this->linha1[11][0];
                // DADOS GRAFICO NOVEMBRO
                if($this->linha1[11][1] == 0){
                    $this->grafic[11][1] = 0;
                }
                else {
                    $this->grafic[11][1] =  $this->linha1[11][1];
                }                                
                // NOME DO MÊS DEZEMBRO
                $this->grafic[12][0] = $this->linha1[12][0];
                // DADOS GRAFICO DEZEMBRO
                 if($this->linha1[12][1] == 0){
                    $this->grafic[12][1] = 0;
                }
                else {
                    $this->grafic[12][1] =  $this->linha1[12][1];
                }                
                $_SESSION['array'] = $grafic;
            }
            else{
                echo "<script>alert('Não contem dados para gerar o grafico, rever filtro')</script>";
                echo "<script>window.location.assign('../index.php')</script>";
                $_SESSION['ano'] = null;
                $_SESSION['tipo'] = null;         
            }            
        }                            
        public function geraGrafico2(){
            $ano = $_SESSION['ano'];
            $tipo = $_SESSION['tipo'];            
            $mysql = new db();
            $linha = 1;
            $listaDados = $mysql->sql_query("SELECT INDICADORES.DESCRICAO,DADOS.MES01, DADOS.MES02, DADOS.MES03, DADOS.MES04, DADOS.MES05, DADOS.MES06, DADOS.MES07, DADOS.MES08, DADOS.MES09, DADOS.MES10, DADOS.MES11, DADOS.MES12, GRAFICO.META_GRAFICO,GRAFICO.NOME_GRAFICO,GRAFICO.DESCRICAO_GRAFICO FROM DADOS INNER JOIN INDICADORES ON DADOS.ID_INDICADORES_FK = INDICADORES.ID_INDICADORES INNER JOIN GRAFICO ON DADOS.ID_GRAFICO_FK = GRAFICO.ID_GRAFICO WHERE ID_GRAFICO =". $tipo. " AND DADOS.ANO =".$ano."");    // NUMERO DE CLIENTES PESQUISADOS                
            if(mysql_num_rows($listaDados)> 0){
                while($dados = mysql_fetch_object($listaDados)){                
                    switch($linha){
                        case 1:
                            $linha1[0][0] = $dados->DESCRICAO_GRAFICO;
                            $linha1[1][0] = "Janeiro";
                            $linha1[1][1] = $dados->MES01;
                            $linha1[1][2] = $dados->META_GRAFICO;
                            $linha1[2][0] = "Fevereiro";
                            $linha1[2][1] = $dados->MES02;
                            $linha1[2][2] = $dados->META_GRAFICO;
                            $linha1[3][0] = "Março";
                            $linha1[3][1] = $dados->MES03;
                            $linha1[3][2] = $dados->META_GRAFICO;
                            $linha1[4][0] = "Abril";
                            $linha1[4][1] = $dados->MES04;
                            $linha1[4][2] = $dados->META_GRAFICO;
                            $linha1[5][0] = "Maio";
                            $linha1[5][1] = $dados->MES05;
                            $linha1[5][2] = $dados->META_GRAFICO;
                            $linha1[6][0] = "Junho";
                            $linha1[6][1] = $dados->MES06;
                            $linha1[6][2] = $dados->META_GRAFICO;
                            $linha1[7][0] = "Julho";
                            $linha1[7][1] = $dados->MES07;
                            $linha1[7][2] = $dados->META_GRAFICO;
                            $linha1[8][0] = "Agosto";
                            $linha1[8][1] = $dados->MES08;
                            $linha1[8][2] = $dados->META_GRAFICO;
                            $linha1[9][0] = "Setembro";
                            $linha1[9][1] = $dados->MES09;
                            $linha1[9][2] = $dados->META_GRAFICO;
                            $linha1[10][0] = "Outubro";
                            $linha1[10][1] = $dados->MES10;
                            $linha1[10][2] = $dados->META_GRAFICO;
                            $linha1[11][0] = "Novembro";
                            $linha1[11][1] = $dados->MES11;
                            $linha1[11][2] = $dados->META_GRAFICO;
                            $linha1[12][0] = "Dezembro";
                            $linha1[12][1] = $dados->MES12;
                            $linha1[12][2] = $dados->META_GRAFICO;                
                            $linha1[0][0] = $dados->DESCRICAO_GRAFICO;
                        break;
                        case 2:
                            $linha2[1][1] = $dados->MES01;
                            $linha2[2][1] = $dados->MES02;
                            $linha2[3][1] = $dados->MES03;
                            $linha2[4][1] = $dados->MES04;                    
                            $linha2[5][1] = $dados->MES05;                    
                            $linha2[6][1] = $dados->MES06;                    
                            $linha2[7][1] = $dados->MES07;                    
                            $linha2[8][1] = $dados->MES08;                    
                            $linha2[9][1] = $dados->MES09;                                        
                            $linha2[10][1] = $dados->MES10;                    
                            $linha2[11][1] = $dados->MES11;                    
                            $linha2[12][1] = $dados->MES12;    
                    }
                    $linha = $linha + 1;
                }                                   
                $grafic[0][0] = $linha1[0][0];
                // NOME DO MÊS JANEIRO
                $grafic[1][0] = $linha1[1][0];
                // DADOS DO GRAFICO JANEIRO **** VERIFICA SE VALOR É ZERO            
                if(($linha1[1][1] == 0) || ($linha2[1][1] == 0)){
                   $grafic[1][1] = 0;
                }
                else {
                    $grafic[1][1] = ($linha2[1][1] / $linha1[1][1]) * 100;
                }
                // META GRAFICO
                $grafic[1][2] = $linha1[1][2];
                // NOME DO MÊS FEVEREIRO             
                $grafic[2][0] = $linha1[2][0];
                // DADOS GRAFICO FEVEREIRO ******* VERIFICA SE VALOR É ZERO
                if(($linha1[2][1] == 0) || ($linha2[2][1] == 0)){
                    $grafic[2][1] = 0;
                }
                else{
                    $grafic[2][1] = ($linha2[2][1] / $linha1[2][1]) * 100;
                }
                // META GRAFICO
                $grafic[2][2] = $linha1[2][2];
                // NOME DO MÊS MARÇO
                $grafic[3][0] = $linha1[3][0];
                // DADOS GRAFICO MARÇO ****** VERIFICA SE VALOR É ZERO
                if(($linha1[3][1] == 0) || ($linha2[3][1] == 0)){
                    $grafic[3][1] = 0;
                }
                else{
                    $grafic[3][1] = ($linha2[3][1] / $linha1[3][1]) * 100;		
                }
                // META GRAFICO
                $grafic[3][2] = $linha1[3][2];
                // NOME DO MÊS ABRIL
                $grafic[4][0] = $linha1[4][0];
                // DADOS GRAFICO MARÇO ******* VERIFICA SE VALOR É ZERO
                if(($linha1[4][1] == 0) || ($linha2[4][1] == 0)){
                    $grafic[4][1] = 0;
                }
                else {
                    $grafic[4][1] = ($linha2[4][1] / $linha1[4][1]) * 100;		
                }
                // META GRAFICO
                $grafic[4][2] = $linha1[4][2];
                // NOME DO MÊS MAIO
                $grafic[5][0] = $linha1[5][0];
                // DADOS GRAFICO MAIO ******* VERIFICA SE VALOR É ZERO
                if(($linha1[5][1] == 0 ) ||($linha2[5][1] == 0)){
                    $grafic[5][1] = 0;
                }
                else{
                    $grafic[5][1] = ($linha2[5][1] / $linha1[5][1]) * 100;		
                }
                // META GRAFICO
                $grafic[5][2] = $linha1[5][2];
                // NOME DO MÊS JUNHO
                $grafic[6][0] = $linha1[6][0];
                // DADOS GRAFICO JUNHO ******* VERIFICA SE VALOR É ZERO
                if(($linha1[6][1] == 0) || ($linha2[6][1] == 0)){
                    $grafic[6][1] = 0;
                }
                else{
                    $grafic[6][1] = ($linha2[6][1] / $linha1[6][1]) * 100;		
                }
                // META GRAFICO
                $grafic[6][2] = $linha1[6][2];
                // NOME DO MÊS JULHO
                $grafic[7][0] = $linha1[7][0];
                // DADOS GRAFICO JULHO ****** VERIFICA SE VALOR É ZERO
                if(($linha1[7][1] == 0) || ($linha2[7][1] == 0)){
                    $grafic[7][1] = 0;
                }
                else{
                    $grafic[7][1] = ($linha2[7][1] / $linha1[7][1]) * 100;		
                }
                // META GRAFICO
                $grafic[7][2] = $linha1[7][2];
                // NOME DO MÊS AGOSTO
                $grafic[8][0] = $linha1[8][0];
                // DADOS GRAFICO AGOSTO  ******** VERIFICA SE VALOR É ZERO
                if(($linha1[8][1] == 0) || ($linha2[8][1] == 0)){
                    $grafic[8][1] = 0;
                }
                else{
                    $grafic[8][1] = ($linha2[8][1] / $linha1[8][1]) * 100;		
                }
                // META GRAFICO
                $grafic[8][2] = $linha1[8][2];
                // NOME DO MÊS SETEMBRO
                $grafic[9][0] = $linha1[9][0];
                // DADOS GRAFICO SETEMBRO ******* VERIFICA SE VALOR É ZERO
                if(($linha1[9][1] == 0) || ($linha2[9][1] == 0)){
                    $grafic[9][1] = 0;
                }
                else{
                    $grafic[9][1] = ($linha2[9][1] / $linha1[9][1]) * 100;		
                }
                // META GRAFICO
                $grafic[9][2] = $linha1[9][2];
                // NOME DO MÊS OUTUBRO
                $grafic[10][0] = $linha1[10][0];
                // DADOS GRAFICO OUTUBRO ********* VERIFICA SE VALOR É ZERO
                if(($linha1[10][1] == 0) || ($linha2[10][1] == 0)){
                    $grafic[10][1] = 0;
                }
                else {
                    $grafic[10][1] = ($linha2[10][1] / $linha1[10][1]) * 100;		
                }
                // META GRAFICO
                $grafic[10][2] = $linha1[10][2];
                // NOME DO MÊS NOVEMBRO
                $grafic[11][0] = $linha1[11][0];
                // DADOS GRAFICO NOVEMBRO ****** VERIFICA SE VALOR É ZERO
                if(($linha1[11][1] == 0) || ($linha2[11][1] == 0)){
                    $grafic[11][1] = 0;
                }
                else{
                    $grafic[11][1] = ($linha2[11][1] / $linha1[11][1]) * 100;		
                }
                // META GRAFICO
                $grafic[11][2] = $linha1[11][2];
                // NOME DO MÊS DEZEMBRO
                $grafic[12][0] = $linha1[12][0];
                // DADOS GRAFICO DEZEMBRO  ****** VERIFICA SE VALOR É ZERO
                if(($linha1[12][1] == 0) || ($linha2[12][1] == 0)){
                    $grafic[12][1] = 0;
                }
                else{
                    $grafic[12][1] = ($linha2[12][1] / $linha1[12][1]) * 100;		
                }
                // META GRAFICO
                $grafic[12][2] = $linha1[12][2];              
                $_SESSION['array'] = $grafic;
        }
        else {
            echo "<script>alert('Não contem dados para gerar o grafico, rever filtro')</script>";
            echo "<script>window.location.assign('../index.php')</script>";
            $_SESSION['ano'] = null;
            $_SESSION['tipo'] = null;         
        }            
        }
        public function geraGrafico3(){
            $ano = $_SESSION['ano'];
            $tipo = $_SESSION['tipo'];            
            $mysql = new db();
            $linha = 1;
            $listaDados = $mysql->sql_query("SELECT INDICADORES.DESCRICAO,DADOS.MES01, DADOS.MES02, DADOS.MES03, DADOS.MES04, DADOS.MES05, DADOS.MES06, DADOS.MES07, DADOS.MES08, DADOS.MES09, DADOS.MES10, DADOS.MES11, DADOS.MES12, GRAFICO.META_GRAFICO,GRAFICO.NOME_GRAFICO,GRAFICO.DESCRICAO_GRAFICO FROM DADOS INNER JOIN INDICADORES ON DADOS.ID_INDICADORES_FK = INDICADORES.ID_INDICADORES INNER JOIN GRAFICO ON DADOS.ID_GRAFICO_FK = GRAFICO.ID_GRAFICO WHERE ID_GRAFICO =". $tipo. " AND DADOS.ANO =".$ano."");    // NUMERO DE CLIENTES PESQUISADOS                
            if(mysql_num_rows($listaDados)> 0){
                while($dados = mysql_fetch_object($listaDados)){                
                    switch($linha){
                        case 1:
                            $linha1[0][0] = $dados->DESCRICAO_GRAFICO;
                            $linha1[1][0] = "Janeiro";
                            $linha1[1][1] = $dados->MES01;
                            $linha1[1][2] = $dados->META_GRAFICO;
                            $linha1[2][0] = "Fevereiro";
                            $linha1[2][1] = $dados->MES02;
                            $linha1[2][2] = $dados->META_GRAFICO;
                            $linha1[3][0] = "Março";
                            $linha1[3][1] = $dados->MES03;
                            $linha1[3][2] = $dados->META_GRAFICO;
                            $linha1[4][0] = "Abril";
                            $linha1[4][1] = $dados->MES04;
                            $linha1[4][2] = $dados->META_GRAFICO;
                            $linha1[5][0] = "Maio";
                            $linha1[5][1] = $dados->MES05;
                            $linha1[5][2] = $dados->META_GRAFICO;
                            $linha1[6][0] = "Junho";
                            $linha1[6][1] = $dados->MES06;
                            $linha1[6][2] = $dados->META_GRAFICO;
                            $linha1[7][0] = "Julho";
                            $linha1[7][1] = $dados->MES07;
                            $linha1[7][2] = $dados->META_GRAFICO;
                            $linha1[8][0] = "Agosto";
                            $linha1[8][1] = $dados->MES08;
                            $linha1[8][2] = $dados->META_GRAFICO;
                            $linha1[9][0] = "Setembro";
                            $linha1[9][1] = $dados->MES09;
                            $linha1[9][2] = $dados->META_GRAFICO;
                            $linha1[10][0] = "Outubro";
                            $linha1[10][1] = $dados->MES10;
                            $linha1[10][2] = $dados->META_GRAFICO;
                            $linha1[11][0] = "Novembro";
                            $linha1[11][1] = $dados->MES11;
                            $linha1[11][2] = $dados->META_GRAFICO;
                            $linha1[12][0] = "Dezembro";
                            $linha1[12][1] = $dados->MES12;
                            $linha1[12][2] = $dados->META_GRAFICO;                
                            $linha1[0][0] = $dados->DESCRICAO_GRAFICO;
                    }
                    $linha = $linha + 1;
                }
                // NOME GRAFICO
                $grafic[0][0] = $linha1[0][0];
                // NOME DO MÊS JANEIRO
                $grafic[1][0] = $linha1[1][0];
                // DADOS GRAFICO JANEIRO
                $grafic[1][1] =  $linha1[1][1];
                // META GRAFICO
                $grafic[1][2] = $linha1[1][2];
                // NOME DO MÊS FEVEREIRO
                $grafic[2][0] = $linha1[2][0];
                // DADOS GRAFICO FEVEREIRO
                $grafic[2][1] =  $linha1[2][1];
                // META GRAFICO
                $grafic[2][2] = $linha1[2][2];
                // NOME DO MÊS MARÇO
                $grafic[3][0] = $linha1[3][0];
                // DADOS GRAFICO MARÇO
                $grafic[3][1] =  $linha1[3][1];
                // META GRAFICO
                $grafic[3][2] = $linha1[3][2];
                // NOME DO MÊS ABRIL
                $grafic[4][0] = $linha1[4][0];
                // DADOS GRAFICO ABRIL
                $grafic[4][1] =  $linha1[4][1];
                // META GRAFICO
                $grafic[4][2] = $linha1[4][2];
                // NOME DO MÊS MAIO
                $grafic[5][0] = $linha1[5][0];
                // DADOS GRAFICO MAIO
                $grafic[5][1] =  $linha1[5][1];
                // META GRAFICO
                $grafic[5][2] = $linha1[5][2];
                // NOME DO MÊS JUNHO
                $grafic[6][0] = $linha1[6][0];
                // DADOS GRAFICO JUNHO
                $grafic[6][1] =  $linha1[6][1];
                // META GRAFICO
                $grafic[6][2] = $linha1[6][2];
                // NOME DO MÊS JULHO
                $grafic[7][0] = $linha1[7][0];
                // DADOS GRAFICO JULHO
                $grafic[7][1] =  $linha1[7][1];
                // META GRAFICO
                $grafic[7][2] = $linha1[7][2];
                // NOME DO MÊS AGOSTO
                $grafic[8][0] = $linha1[8][0];
                // DADOS GRAFICO AGOSTO
                $grafic[8][1] =  $linha1[8][1];
                // META GRAFICO
                $grafic[8][2] = $linha1[8][2];
                // NOME DO MÊS SETEMBRO
                $grafic[9][0] = $linha1[9][0];
                // DADOS GRAFICO SETEMBRO
                $grafic[9][1] =  $linha1[9][1];
                // META GRAFICO
                $grafic[9][2] = $linha1[9][2];
                // NOME DO MÊS OUTUBRO
                $grafic[10][0] = $linha1[10][0];
                // DADOS GRAFICO OUTUBRO
                $grafic[10][1] =  $linha1[10][1];
                // META GRAFICO
                $grafic[10][2] = $linha1[10][2];
                // NOME DO MÊS NOVEMBRO
                $grafic[11][0] = $linha1[11][0];
                // DADOS GRAFICO NOVEMBRO
                $grafic[11][1] =  $linha1[11][1];
                // META GRAFICO
                $grafic[11][2] = $linha1[11][2];
                // NOME DO MÊS DEZEMBRO
                $grafic[12][0] = $linha1[12][0];
                // DADOS GRAFICO DEZEMBRO
                $grafic[12][1] =  $linha1[12][1];
                // META GRAFICO
                $grafic[12][2] = $linha1[12][2];
                $_SESSION['array'] = $grafic;
            }
            else{
                echo "<script>alert('Não contem dados para gerar o grafico, rever filtro')</script>";
                echo "<script>window.location.assign('../index.php')</script>";
                $_SESSION['ano'] = null;
                $_SESSION['tipo'] = null;         
            }            
        }        
        public function geraGrafico4(){
            echo "<script>alert('Não contem dados para gerar o grafico, rever filtro')</script>";
            echo "<script>window.location.assign('../index.php')</script>";
            $_SESSION['ano'] = null;
            $_SESSION['tipo'] = null;         
        }
        public function geraGrafico5(){
            $ano = $_SESSION['ano'];
            $tipo = $_SESSION['tipo'];            
            $mysql = new db();
            $linha = 1;
            $listaDados = $mysql->sql_query("SELECT INDICADORES.DESCRICAO,DADOS.MES01, DADOS.MES02, DADOS.MES03, DADOS.MES04, DADOS.MES05, DADOS.MES06, DADOS.MES07, DADOS.MES08, DADOS.MES09, DADOS.MES10, DADOS.MES11, DADOS.MES12, GRAFICO.META_GRAFICO,GRAFICO.NOME_GRAFICO,GRAFICO.DESCRICAO_GRAFICO FROM DADOS INNER JOIN INDICADORES ON DADOS.ID_INDICADORES_FK = INDICADORES.ID_INDICADORES INNER JOIN GRAFICO ON DADOS.ID_GRAFICO_FK = GRAFICO.ID_GRAFICO WHERE ID_GRAFICO =". $tipo. " AND DADOS.ANO =".$ano."");    // NUMERO DE CLIENTES PESQUISADOS                
            if(mysql_num_rows($listaDados)> 0){
                while($dados = mysql_fetch_object($listaDados)){                
                    switch($linha){
                        case 1:
                            $linha1[0][0] = $dados->DESCRICAO_GRAFICO;
                            $linha1[1][0] = "Janeiro";
                            $linha1[1][1] = $dados->MES01;
                            $linha1[1][2] = $dados->META_GRAFICO;
                            $linha1[2][0] = "Fevereiro";
                            $linha1[2][1] = $dados->MES02;
                            $linha1[2][2] = $dados->META_GRAFICO;
                            $linha1[3][0] = "Março";
                            $linha1[3][1] = $dados->MES03;
                            $linha1[3][2] = $dados->META_GRAFICO;
                            $linha1[4][0] = "Abril";
                            $linha1[4][1] = $dados->MES04;
                            $linha1[4][2] = $dados->META_GRAFICO;
                            $linha1[5][0] = "Maio";
                            $linha1[5][1] = $dados->MES05;
                            $linha1[5][2] = $dados->META_GRAFICO;
                            $linha1[6][0] = "Junho";
                            $linha1[6][1] = $dados->MES06;
                            $linha1[6][2] = $dados->META_GRAFICO;
                            $linha1[7][0] = "Julho";
                            $linha1[7][1] = $dados->MES07;
                            $linha1[7][2] = $dados->META_GRAFICO;
                            $linha1[8][0] = "Agosto";
                            $linha1[8][1] = $dados->MES08;
                            $linha1[8][2] = $dados->META_GRAFICO;
                            $linha1[9][0] = "Setembro";
                            $linha1[9][1] = $dados->MES09;
                            $linha1[9][2] = $dados->META_GRAFICO;
                            $linha1[10][0] = "Outubro";
                            $linha1[10][1] = $dados->MES10;
                            $linha1[10][2] = $dados->META_GRAFICO;
                            $linha1[11][0] = "Novembro";
                            $linha1[11][1] = $dados->MES11;
                            $linha1[11][2] = $dados->META_GRAFICO;
                            $linha1[12][0] = "Dezembro";
                            $linha1[12][1] = $dados->MES12;
                            $linha1[12][2] = $dados->META_GRAFICO;                
                            $linha1[0][0] = $dados->DESCRICAO_GRAFICO;
                        break;
                        case 2:
                            $linha2[1][1] = $dados->MES01;
                            $linha2[2][1] = $dados->MES02;
                            $linha2[3][1] = $dados->MES03;
                            $linha2[4][1] = $dados->MES04;                    
                            $linha2[5][1] = $dados->MES05;                    
                            $linha2[6][1] = $dados->MES06;                    
                            $linha2[7][1] = $dados->MES07;                    
                            $linha2[8][1] = $dados->MES08;                    
                            $linha2[9][1] = $dados->MES09;                                        
                            $linha2[10][1] = $dados->MES10;                    
                            $linha2[11][1] = $dados->MES11;                    
                            $linha2[12][1] = $dados->MES12;    
                    }
                    $linha = $linha + 1;
                }                       
            
                // CALCULO QUE FAZ ANTES DE GERAR O GRAFICO	
                // 	
                // NOME GRAFICO
                $grafic[0][0] = $linha1[0][0];
                // NOME DO MÊS JANEIRO
                $grafic[1][0] = $linha1[1][0];
                // DADOS DO GRAFICO JANEIRO **** VERIFICA SE VALOR É ZERO            
                if(($linha1[1][1] == 0) || ($linha2[1][1] == 0)){
                   $grafic[1][1] = 0;
                }
                else {
                    $grafic[1][1] = ($linha2[1][1] / $linha1[1][1]) * 100;
                }
                // META GRAFICO
                $grafic[1][2] = $linha1[1][2];
                // NOME DO MÊS FEVEREIRO             
                $grafic[2][0] = $linha1[2][0];
                // DADOS GRAFICO FEVEREIRO ******* VERIFICA SE VALOR É ZERO
                if(($linha1[2][1] == 0) || ($linha2[2][1] == 0)){
                    $grafic[2][1] = 0;
                }
                else{
                    $grafic[2][1] = ($linha2[2][1] / $linha1[2][1]) * 100;
                }
                // META GRAFICO
                $grafic[2][2] = $linha1[2][2];
                // NOME DO MÊS MARÇO
                $grafic[3][0] = $linha1[3][0];
                // DADOS GRAFICO MARÇO ****** VERIFICA SE VALOR É ZERO
                if(($linha1[3][1] == 0) || ($linha2[3][1] == 0)){
                    $grafic[3][1] = 0;
                }
                else{
                    $grafic[3][1] = ($linha2[3][1] / $linha1[3][1]) * 100;		
                }
                // META GRAFICO
                $grafic[3][2] = $linha1[3][2];
                // NOME DO MÊS ABRIL
                $grafic[4][0] = $linha1[4][0];
                // DADOS GRAFICO MARÇO ******* VERIFICA SE VALOR É ZERO
                if(($linha1[4][1] == 0) || ($linha2[4][1] == 0)){
                    $grafic[4][1] = 0;
                }
                else {
                    $grafic[4][1] = ($linha2[4][1] / $linha1[4][1]) * 100;		
                }
                // META GRAFICO
                $grafic[4][2] = $linha1[4][2];
                // NOME DO MÊS MAIO
                $grafic[5][0] = $linha1[5][0];
                // DADOS GRAFICO MAIO ******* VERIFICA SE VALOR É ZERO
                if(($linha1[5][1] == 0 ) ||($linha2[5][1] == 0)){
                    $grafic[5][1] = 0;
                }
                else{
                    $grafic[5][1] = ($linha2[5][1] / $linha1[5][1]) * 100;		
                }
                // META GRAFICO
                $grafic[5][2] = $linha1[5][2];
                // NOME DO MÊS JUNHO
                $grafic[6][0] = $linha1[6][0];
                // DADOS GRAFICO JUNHO ******* VERIFICA SE VALOR É ZERO
                if(($linha1[6][1] == 0) || ($linha2[6][1] == 0)){
                    $grafic[6][1] = 0;
                }
                else{
                    $grafic[6][1] = ($linha2[6][1] / $linha1[6][1]) * 100;		
                }
                // META GRAFICO
                $grafic[6][2] = $linha1[6][2];
                // NOME DO MÊS JULHO
                $grafic[7][0] = $linha1[7][0];
                // DADOS GRAFICO JULHO ****** VERIFICA SE VALOR É ZERO
                if(($linha1[7][1] == 0) || ($linha2[7][1] == 0)){
                    $grafic[7][1] = 0;
                }
                else{
                    $grafic[7][1] = ($linha2[7][1] / $linha1[7][1]) * 100;		
                }
                // META GRAFICO
                $grafic[7][2] = $linha1[7][2];
                // NOME DO MÊS AGOSTO
                $grafic[8][0] = $linha1[8][0];
                // DADOS GRAFICO AGOSTO  ******** VERIFICA SE VALOR É ZERO
                if(($linha1[8][1] == 0) || ($linha2[8][1] == 0)){
                    $grafic[8][1] = 0;
                }
                else{
                    $grafic[8][1] = ($linha2[8][1] / $linha1[8][1]) * 100;		
                }
                // META GRAFICO
                $grafic[8][2] = $linha1[8][2];
                // NOME DO MÊS SETEMBRO
                $grafic[9][0] = $linha1[9][0];
                // DADOS GRAFICO SETEMBRO ******* VERIFICA SE VALOR É ZERO
                if(($linha1[9][1] == 0) || ($linha2[9][1] == 0)){
                    $grafic[9][1] = 0;
                }
                else{
                    $grafic[9][1] = ($linha2[9][1] / $linha1[9][1]) * 100;		
                }
                // META GRAFICO
                $grafic[9][2] = $linha1[9][2];
                // NOME DO MÊS OUTUBRO
                $grafic[10][0] = $linha1[10][0];
                // DADOS GRAFICO OUTUBRO ********* VERIFICA SE VALOR É ZERO
                if(($linha1[10][1] == 0) || ($linha2[10][1] == 0)){
                    $grafic[10][1] = 0;
                }
                else {
                    $grafic[10][1] = ($linha2[10][1] / $linha1[10][1]) * 100;		
                }
                // META GRAFICO
                $grafic[10][2] = $linha1[10][2];
                // NOME DO MÊS NOVEMBRO
                $grafic[11][0] = $linha1[11][0];
                // DADOS GRAFICO NOVEMBRO ****** VERIFICA SE VALOR É ZERO
                if(($linha1[11][1] == 0) || ($linha2[11][1] == 0)){
                    $grafic[11][1] = 0;
                }
                else{
                    $grafic[11][1] = ($linha2[11][1] / $linha1[11][1]) * 100;		
                }
                // META GRAFICO
                $grafic[11][2] = $linha1[11][2];
                // NOME DO MÊS DEZEMBRO
                $grafic[12][0] = $linha1[12][0];
                // DADOS GRAFICO DEZEMBRO  ****** VERIFICA SE VALOR É ZERO
                if(($linha1[12][1] == 0) || ($linha2[12][1] == 0)){
                    $grafic[12][1] = 0;
                }
                else{
                    $grafic[12][1] = ($linha2[12][1] / $linha1[12][1]) * 100;		
                }
                // META GRAFICO
                $grafic[12][2] = $linha1[12][2];              
                $_SESSION['array'] = $grafic;
        }
        else {
            echo "<script>alert('Não contem dados para gerar o grafico, rever filtro')</script>";
            echo "<script>window.location.assign('../index.php')</script>";
            $_SESSION['ano'] = null;
            $_SESSION['tipo'] = null;         
        }            
        }
        public function geraGrafico6(){
            $ano = $_SESSION['ano'];
            $tipo = $_SESSION['tipo'];            
            $mysql = new db();
            $linha = 1;
            $listaDados = $mysql->sql_query("SELECT DADOS.ID_DADOS, INDICADORES.DESCRICAO,DADOS.MES01, DADOS.MES02, DADOS.MES03, DADOS.MES04, DADOS.MES05, DADOS.MES06, DADOS.MES07, DADOS.MES08, DADOS.MES09, DADOS.MES10, DADOS.MES11, DADOS.MES12, GRAFICO.META_GRAFICO,GRAFICO.NOME_GRAFICO,GRAFICO.DESCRICAO_GRAFICO FROM DADOS INNER JOIN INDICADORES ON DADOS.ID_INDICADORES_FK = INDICADORES.ID_INDICADORES INNER JOIN GRAFICO ON DADOS.ID_GRAFICO_FK = GRAFICO.ID_GRAFICO WHERE ID_GRAFICO =". $tipo. " AND DADOS.ANO =".$ano." UNION  SELECT D.ID_DADOS,INDICADORES.DESCRICAO,D.MES01, D.MES02, D.MES03, D.MES04, D.MES05, D.MES06, D.MES07, D.MES08, D.MES09, D.MES10, D.MES11, D.MES12, D.ID_GRAFICO_FK, GRAFICO.META_GRAFICO, GRAFICO.DESCRICAO_GRAFICO FROM DADOS AS D  INNER JOIN INDICADORES ON D.ID_INDICADORES_FK = INDICADORES.ID_INDICADORES INNER JOIN GRAFICO ON D.ID_GRAFICO_FK = GRAFICO.ID_GRAFICO WHERE INDICADORES.ID_INDICADORES = 3 AND D.ANO =".$ano."");    // NUMERO DE CLIENTES PESQUISADOS                
            if(mysql_num_rows($listaDados)> 0){
                while($dados = mysql_fetch_object($listaDados)){                
                    switch($linha){
                        case 1:
                            $linha1[0][0] = $dados->DESCRICAO_GRAFICO;
                            $linha1[1][0] = "Janeiro";
                            $linha1[1][1] = $dados->MES01;
                            $linha1[1][2] = $dados->META_GRAFICO;
                            $linha1[2][0] = "Fevereiro";
                            $linha1[2][1] = $dados->MES02;
                            $linha1[2][2] = $dados->META_GRAFICO;
                            $linha1[3][0] = "Março";
                            $linha1[3][1] = $dados->MES03;
                            $linha1[3][2] = $dados->META_GRAFICO;
                            $linha1[4][0] = "Abril";
                            $linha1[4][1] = $dados->MES04;
                            $linha1[4][2] = $dados->META_GRAFICO;
                            $linha1[5][0] = "Maio";
                            $linha1[5][1] = $dados->MES05;
                            $linha1[5][2] = $dados->META_GRAFICO;
                            $linha1[6][0] = "Junho";
                            $linha1[6][1] = $dados->MES06;
                            $linha1[6][2] = $dados->META_GRAFICO;
                            $linha1[7][0] = "Julho";
                            $linha1[7][1] = $dados->MES07;
                            $linha1[7][2] = $dados->META_GRAFICO;
                            $linha1[8][0] = "Agosto";
                            $linha1[8][1] = $dados->MES08;
                            $linha1[8][2] = $dados->META_GRAFICO;
                            $linha1[9][0] = "Setembro";
                            $linha1[9][1] = $dados->MES09;
                            $linha1[9][2] = $dados->META_GRAFICO;
                            $linha1[10][0] = "Outubro";
                            $linha1[10][1] = $dados->MES10;
                            $linha1[10][2] = $dados->META_GRAFICO;
                            $linha1[11][0] = "Novembro";
                            $linha1[11][1] = $dados->MES11;
                            $linha1[11][2] = $dados->META_GRAFICO;
                            $linha1[12][0] = "Dezembro";
                            $linha1[12][1] = $dados->MES12;
                            $linha1[12][2] = $dados->META_GRAFICO;                
                            $linha1[0][0] = $dados->DESCRICAO_GRAFICO;
                        break;
                        case 2:
                            $linha2[1][1] = $dados->MES01;
                            $linha2[2][1] = $dados->MES02;
                            $linha2[3][1] = $dados->MES03;
                            $linha2[4][1] = $dados->MES04;                    
                            $linha2[5][1] = $dados->MES05;                    
                            $linha2[6][1] = $dados->MES06;                    
                            $linha2[7][1] = $dados->MES07;                    
                            $linha2[8][1] = $dados->MES08;                    
                            $linha2[9][1] = $dados->MES09;                                        
                            $linha2[10][1] = $dados->MES10;                    
                            $linha2[11][1] = $dados->MES11;                    
                            $linha2[12][1] = $dados->MES12;    
                    }
                    $linha = $linha + 1;
                }                       
            
                // CALCULO QUE FAZ ANTES DE GERAR O GRAFICO	
                // 	
                // NOME GRAFICO
                $grafic[0][0] = $linha1[0][0];
                // NOME DO MÊS JANEIRO
                $grafic[1][0] = $linha1[1][0];
                // DADOS DO GRAFICO JANEIRO **** VERIFICA SE VALOR É ZERO            
                if(($linha1[1][1] == 0) || ($linha2[1][1] == 0)){
                   $grafic[1][1] = 0;
                }
                else {
                    $grafic[1][1] = ($linha1[1][1] / $linha2[1][1]) * 100;
                }
                // META GRAFICO
                $grafic[1][2] = $linha1[1][2];
                // NOME DO MÊS FEVEREIRO             
                $grafic[2][0] = $linha1[2][0];
                // DADOS GRAFICO FEVEREIRO ******* VERIFICA SE VALOR É ZERO
                if(($linha1[2][1] == 0) || ($linha2[2][1] == 0)){
                    $grafic[2][1] = 0;
                }
                else{
                    $grafic[2][1] = ($linha1[2][1] / $linha2[2][1]) * 100;
                }
                // META GRAFICO
                $grafic[2][2] = $linha1[2][2];
                // NOME DO MÊS MARÇO
                $grafic[3][0] = $linha1[3][0];
                // DADOS GRAFICO MARÇO ****** VERIFICA SE VALOR É ZERO
                if(($linha1[3][1] == 0) || ($linha2[3][1] == 0)){
                    $grafic[3][1] = 0;
                }
                else{
                    $grafic[3][1] = ($linha1[3][1] / $linha2[3][1]) * 100;		
                }
                // META GRAFICO
                $grafic[3][2] = $linha1[3][2];
                // NOME DO MÊS ABRIL
                $grafic[4][0] = $linha1[4][0];
                // DADOS GRAFICO MARÇO ******* VERIFICA SE VALOR É ZERO
                if(($linha1[4][1] == 0) || ($linha2[4][1] == 0)){
                    $grafic[4][1] = 0;
                }
                else {
                    $grafic[4][1] = ($linha1[4][1] / $linha2[4][1]) * 100;		
                }
                // META GRAFICO
                $grafic[4][2] = $linha1[4][2];
                // NOME DO MÊS MAIO
                $grafic[5][0] = $linha1[5][0];
                // DADOS GRAFICO MAIO ******* VERIFICA SE VALOR É ZERO
                if(($linha1[5][1] == 0 ) ||($linha2[5][1] == 0)){
                    $grafic[5][1] = 0;
                }
                else{
                    $grafic[5][1] = ($linha1[5][1] / $linha2[5][1]) * 100;		
                }
                // META GRAFICO
                $grafic[5][2] = $linha1[5][2];
                // NOME DO MÊS JUNHO
                $grafic[6][0] = $linha1[6][0];
                // DADOS GRAFICO JUNHO ******* VERIFICA SE VALOR É ZERO
                if(($linha1[6][1] == 0) || ($linha2[6][1] == 0)){
                    $grafic[6][1] = 0;
                }
                else{
                    $grafic[6][1] = ($linha1[6][1] / $linha2[6][1]) * 100;		
                }
                // META GRAFICO
                $grafic[6][2] = $linha1[6][2];
                // NOME DO MÊS JULHO
                $grafic[7][0] = $linha1[7][0];
                // DADOS GRAFICO JULHO ****** VERIFICA SE VALOR É ZERO
                if(($linha1[7][1] == 0) || ($linha2[7][1] == 0)){
                    $grafic[7][1] = 0;
                }
                else{
                    $grafic[7][1] = ($linha1[7][1] / $linha2[7][1]) * 100;		
                }
                // META GRAFICO
                $grafic[7][2] = $linha1[7][2];
                // NOME DO MÊS AGOSTO
                $grafic[8][0] = $linha1[8][0];
                // DADOS GRAFICO AGOSTO  ******** VERIFICA SE VALOR É ZERO
                if(($linha1[8][1] == 0) || ($linha2[8][1] == 0)){
                    $grafic[8][1] = 0;
                }
                else{
                    $grafic[8][1] = ($linha1[8][1] / $linha2[8][1]) * 100;		
                }
                // META GRAFICO
                $grafic[8][2] = $linha1[8][2];
                // NOME DO MÊS SETEMBRO
                $grafic[9][0] = $linha1[9][0];
                // DADOS GRAFICO SETEMBRO ******* VERIFICA SE VALOR É ZERO
                if(($linha1[9][1] == 0) || ($linha2[9][1] == 0)){
                    $grafic[9][1] = 0;
                }
                else{
                    $grafic[9][1] = ($linha1[9][1] / $linha2[9][1]) * 100;		
                }
                // META GRAFICO
                $grafic[9][2] = $linha1[9][2];
                // NOME DO MÊS OUTUBRO
                $grafic[10][0] = $linha1[10][0];
                // DADOS GRAFICO OUTUBRO ********* VERIFICA SE VALOR É ZERO
                if(($linha1[10][1] == 0) || ($linha2[10][1] == 0)){
                    $grafic[10][1] = 0;
                }
                else {
                    $grafic[10][1] = ($linha1[10][1] / $linha2[10][1]) * 100;		
                }
                // META GRAFICO
                $grafic[10][2] = $linha1[10][2];
                // NOME DO MÊS NOVEMBRO
                $grafic[11][0] = $linha1[11][0];
                // DADOS GRAFICO NOVEMBRO ****** VERIFICA SE VALOR É ZERO
                if(($linha1[11][1] == 0) || ($linha2[11][1] == 0)){
                    $grafic[11][1] = 0;
                }
                else{
                    $grafic[11][1] = ($linha1[11][1] / $linha2[11][1]) * 100;		
                }
                // META GRAFICO
                $grafic[11][2] = $linha1[11][2];
                // NOME DO MÊS DEZEMBRO
                $grafic[12][0] = $linha1[12][0];
                // DADOS GRAFICO DEZEMBRO  ****** VERIFICA SE VALOR É ZERO
                if(($linha1[12][1] == 0) || ($linha2[12][1] == 0)){
                    $grafic[12][1] = 0;
                }
                else{
                    $grafic[12][1] = ($linha1[12][1] / $linha2[12][1]) * 100;		
                }
                // META GRAFICO
                $grafic[12][2] = $linha1[12][2];              
                $_SESSION['array'] = $grafic;
        }
        else {
            echo "<script>alert('Não contem dados para gerar o grafico, rever filtro')</script>";
            echo "<script>window.location.assign('../index.php')</script>";
            $_SESSION['ano'] = null;
            $_SESSION['tipo'] = null;         
        }            
        }
        public function geraGrafico7(){
            $ano = $_SESSION['ano'];
            $tipo = $_SESSION['tipo'];            
            $mysql = new db();
            $linha = 1;
            $listaDados = $mysql->sql_query("SELECT INDICADORES.DESCRICAO,DADOS.MES01, DADOS.MES02, DADOS.MES03, DADOS.MES04, DADOS.MES05, DADOS.MES06, DADOS.MES07, DADOS.MES08, DADOS.MES09, DADOS.MES10, DADOS.MES11, DADOS.MES12, GRAFICO.META_GRAFICO,GRAFICO.NOME_GRAFICO,GRAFICO.DESCRICAO_GRAFICO FROM DADOS INNER JOIN INDICADORES ON DADOS.ID_INDICADORES_FK = INDICADORES.ID_INDICADORES INNER JOIN GRAFICO ON DADOS.ID_GRAFICO_FK = GRAFICO.ID_GRAFICO WHERE ID_GRAFICO =". $tipo. " AND DADOS.ANO =".$ano."");    // NUMERO DE CLIENTES PESQUISADOS                
            if(mysql_num_rows($listaDados)> 0){
                while($dados = mysql_fetch_object($listaDados)){                
                    switch($linha){
                        case 1:
                            $linha1[0][0] = $dados->DESCRICAO_GRAFICO;
                            $linha1[1][0] = "Janeiro";
                            $linha1[1][1] = $dados->MES01;
                            $linha1[1][2] = $dados->META_GRAFICO;
                            $linha1[2][0] = "Fevereiro";
                            $linha1[2][1] = $dados->MES02;
                            $linha1[2][2] = $dados->META_GRAFICO;
                            $linha1[3][0] = "Março";
                            $linha1[3][1] = $dados->MES03;
                            $linha1[3][2] = $dados->META_GRAFICO;
                            $linha1[4][0] = "Abril";
                            $linha1[4][1] = $dados->MES04;
                            $linha1[4][2] = $dados->META_GRAFICO;
                            $linha1[5][0] = "Maio";
                            $linha1[5][1] = $dados->MES05;
                            $linha1[5][2] = $dados->META_GRAFICO;
                            $linha1[6][0] = "Junho";
                            $linha1[6][1] = $dados->MES06;
                            $linha1[6][2] = $dados->META_GRAFICO;
                            $linha1[7][0] = "Julho";
                            $linha1[7][1] = $dados->MES07;
                            $linha1[7][2] = $dados->META_GRAFICO;
                            $linha1[8][0] = "Agosto";
                            $linha1[8][1] = $dados->MES08;
                            $linha1[8][2] = $dados->META_GRAFICO;
                            $linha1[9][0] = "Setembro";
                            $linha1[9][1] = $dados->MES09;
                            $linha1[9][2] = $dados->META_GRAFICO;
                            $linha1[10][0] = "Outubro";
                            $linha1[10][1] = $dados->MES10;
                            $linha1[10][2] = $dados->META_GRAFICO;
                            $linha1[11][0] = "Novembro";
                            $linha1[11][1] = $dados->MES11;
                            $linha1[11][2] = $dados->META_GRAFICO;
                            $linha1[12][0] = "Dezembro";
                            $linha1[12][1] = $dados->MES12;
                            $linha1[12][2] = $dados->META_GRAFICO;                
                            $linha1[0][0] = $dados->DESCRICAO_GRAFICO;
                        break;
                        case 2:
                            $linha2[1][1] = $dados->MES01;
                            $linha2[2][1] = $dados->MES02;
                            $linha2[3][1] = $dados->MES03;
                            $linha2[4][1] = $dados->MES04;                    
                            $linha2[5][1] = $dados->MES05;                    
                            $linha2[6][1] = $dados->MES06;                    
                            $linha2[7][1] = $dados->MES07;                    
                            $linha2[8][1] = $dados->MES08;                    
                            $linha2[9][1] = $dados->MES09;                                        
                            $linha2[10][1] = $dados->MES10;                    
                            $linha2[11][1] = $dados->MES11;                    
                            $linha2[12][1] = $dados->MES12;    
                    }
                    $linha = $linha + 1;
                }                       
            
                // CALCULO QUE FAZ ANTES DE GERAR O GRAFICO	
                // 	
                // NOME GRAFICO
                $grafic[0][0] = $linha1[0][0];
                // NOME DO MÊS JANEIRO
                $grafic[1][0] = $linha1[1][0];
                // DADOS DO GRAFICO JANEIRO **** VERIFICA SE VALOR É ZERO            
                if(($linha1[1][1] == 0) || ($linha2[1][1] == 0)){
                   $grafic[1][1] = 0;
                }
                else {
                    $grafic[1][1] = ($linha2[1][1] / $linha1[1][1]) * 100;
                }
                // META GRAFICO
                $grafic[1][2] = $linha1[1][2];
                // NOME DO MÊS FEVEREIRO             
                $grafic[2][0] = $linha1[2][0];
                // DADOS GRAFICO FEVEREIRO ******* VERIFICA SE VALOR É ZERO
                if(($linha1[2][1] == 0) || ($linha2[2][1] == 0)){
                    $grafic[2][1] = 0;
                }
                else{
                    $grafic[2][1] = ($linha2[2][1] / $linha1[2][1]) * 100;
                }
                // META GRAFICO
                $grafic[2][2] = $linha1[2][2];
                // NOME DO MÊS MARÇO
                $grafic[3][0] = $linha1[3][0];
                // DADOS GRAFICO MARÇO ****** VERIFICA SE VALOR É ZERO
                if(($linha1[3][1] == 0) || ($linha2[3][1] == 0)){
                    $grafic[3][1] = 0;
                }
                else{
                    $grafic[3][1] = ($linha2[3][1] / $linha1[3][1]) * 100;		
                }
                // META GRAFICO
                $grafic[3][2] = $linha1[3][2];
                // NOME DO MÊS ABRIL
                $grafic[4][0] = $linha1[4][0];
                // DADOS GRAFICO MARÇO ******* VERIFICA SE VALOR É ZERO
                if(($linha1[4][1] == 0) || ($linha2[4][1] == 0)){
                    $grafic[4][1] = 0;
                }
                else {
                    $grafic[4][1] = ($linha2[4][1] / $linha1[4][1]) * 100;		
                }
                // META GRAFICO
                $grafic[4][2] = $linha1[4][2];
                // NOME DO MÊS MAIO
                $grafic[5][0] = $linha1[5][0];
                // DADOS GRAFICO MAIO ******* VERIFICA SE VALOR É ZERO
                if(($linha1[5][1] == 0 ) ||($linha2[5][1] == 0)){
                    $grafic[5][1] = 0;
                }
                else{
                    $grafic[5][1] = ($linha2[5][1] / $linha1[5][1]) * 100;		
                }
                // META GRAFICO
                $grafic[5][2] = $linha1[5][2];
                // NOME DO MÊS JUNHO
                $grafic[6][0] = $linha1[6][0];
                // DADOS GRAFICO JUNHO ******* VERIFICA SE VALOR É ZERO
                if(($linha1[6][1] == 0) || ($linha2[6][1] == 0)){
                    $grafic[6][1] = 0;
                }
                else{
                    $grafic[6][1] = ($linha2[6][1] / $linha1[6][1]) * 100;		
                }
                // META GRAFICO
                $grafic[6][2] = $linha1[6][2];
                // NOME DO MÊS JULHO
                $grafic[7][0] = $linha1[7][0];
                // DADOS GRAFICO JULHO ****** VERIFICA SE VALOR É ZERO
                if(($linha1[7][1] == 0) || ($linha2[7][1] == 0)){
                    $grafic[7][1] = 0;
                }
                else{
                    $grafic[7][1] = ($linha2[7][1] / $linha1[7][1]) * 100;		
                }
                // META GRAFICO
                $grafic[7][2] = $linha1[7][2];
                // NOME DO MÊS AGOSTO
                $grafic[8][0] = $linha1[8][0];
                // DADOS GRAFICO AGOSTO  ******** VERIFICA SE VALOR É ZERO
                if(($linha1[8][1] == 0) || ($linha2[8][1] == 0)){
                    $grafic[8][1] = 0;
                }
                else{
                    $grafic[8][1] = ($linha2[8][1] / $linha1[8][1]) * 100;		
                }
                // META GRAFICO
                $grafic[8][2] = $linha1[8][2];
                // NOME DO MÊS SETEMBRO
                $grafic[9][0] = $linha1[9][0];
                // DADOS GRAFICO SETEMBRO ******* VERIFICA SE VALOR É ZERO
                if(($linha1[9][1] == 0) || ($linha2[9][1] == 0)){
                    $grafic[9][1] = 0;
                }
                else{
                    $grafic[9][1] = ($linha2[9][1] / $linha1[9][1]) * 100;		
                }
                // META GRAFICO
                $grafic[9][2] = $linha1[9][2];
                // NOME DO MÊS OUTUBRO
                $grafic[10][0] = $linha1[10][0];
                // DADOS GRAFICO OUTUBRO ********* VERIFICA SE VALOR É ZERO
                if(($linha1[10][1] == 0) || ($linha2[10][1] == 0)){
                    $grafic[10][1] = 0;
                }
                else {
                    $grafic[10][1] = ($linha2[10][1] / $linha1[10][1]) * 100;		
                }
                // META GRAFICO
                $grafic[10][2] = $linha1[10][2];
                // NOME DO MÊS NOVEMBRO
                $grafic[11][0] = $linha1[11][0];
                // DADOS GRAFICO NOVEMBRO ****** VERIFICA SE VALOR É ZERO
                if(($linha1[11][1] == 0) || ($linha2[11][1] == 0)){
                    $grafic[11][1] = 0;
                }
                else{
                    $grafic[11][1] = ($linha2[11][1] / $linha1[11][1]) * 100;		
                }
                // META GRAFICO
                $grafic[11][2] = $linha1[11][2];
                // NOME DO MÊS DEZEMBRO
                $grafic[12][0] = $linha1[12][0];
                // DADOS GRAFICO DEZEMBRO  ****** VERIFICA SE VALOR É ZERO
                if(($linha1[12][1] == 0) || ($linha2[12][1] == 0)){
                    $grafic[12][1] = 0;
                }
                else{
                    $grafic[12][1] = ($linha2[12][1] / $linha1[12][1]) * 100;		
                }
                // META GRAFICO
                $grafic[12][2] = $linha1[12][2];              
                $_SESSION['array'] = $grafic;
        }
        else {
            echo "<script>alert('Não contem dados para gerar o grafico, rever filtro')</script>";
            echo "<script>window.location.assign('../index.php')</script>";
            $_SESSION['ano'] = null;
            $_SESSION['tipo'] = null;         
        }            
        }
        
        public function geraGrafico9(){
            $ano = $_SESSION['ano'];
            $tipo = $_SESSION['tipo'];            
            $mysql = new db();
            $linha = 1;
            $listaDados = $mysql->sql_query("SELECT INDICADORES.DESCRICAO,DADOS.MES01, DADOS.MES02, DADOS.MES03, DADOS.MES04, DADOS.MES05, DADOS.MES06, DADOS.MES07, DADOS.MES08, DADOS.MES09, DADOS.MES10, DADOS.MES11, DADOS.MES12, GRAFICO.META_GRAFICO,GRAFICO.NOME_GRAFICO,GRAFICO.DESCRICAO_GRAFICO FROM DADOS INNER JOIN INDICADORES ON DADOS.ID_INDICADORES_FK = INDICADORES.ID_INDICADORES INNER JOIN GRAFICO ON DADOS.ID_GRAFICO_FK = GRAFICO.ID_GRAFICO WHERE ID_GRAFICO =". $tipo. " AND DADOS.ANO =".$ano."");    // NUMERO DE CLIENTES PESQUISADOS                
            if(mysql_num_rows($listaDados)> 0){
                while($dados = mysql_fetch_object($listaDados)){                
                    switch($linha){
                        case 1:
                            $linha1[0][0] = $dados->DESCRICAO_GRAFICO;
                            $linha1[1][0] = "Janeiro";
                            $linha1[1][1] = $dados->MES01;
                            $linha1[1][2] = $dados->META_GRAFICO;
                            $linha1[2][0] = "Fevereiro";
                            $linha1[2][1] = $dados->MES02;
                            $linha1[2][2] = $dados->META_GRAFICO;
                            $linha1[3][0] = "Março";
                            $linha1[3][1] = $dados->MES03;
                            $linha1[3][2] = $dados->META_GRAFICO;
                            $linha1[4][0] = "Abril";
                            $linha1[4][1] = $dados->MES04;
                            $linha1[4][2] = $dados->META_GRAFICO;
                            $linha1[5][0] = "Maio";
                            $linha1[5][1] = $dados->MES05;
                            $linha1[5][2] = $dados->META_GRAFICO;
                            $linha1[6][0] = "Junho";
                            $linha1[6][1] = $dados->MES06;
                            $linha1[6][2] = $dados->META_GRAFICO;
                            $linha1[7][0] = "Julho";
                            $linha1[7][1] = $dados->MES07;
                            $linha1[7][2] = $dados->META_GRAFICO;
                            $linha1[8][0] = "Agosto";
                            $linha1[8][1] = $dados->MES08;
                            $linha1[8][2] = $dados->META_GRAFICO;
                            $linha1[9][0] = "Setembro";
                            $linha1[9][1] = $dados->MES09;
                            $linha1[9][2] = $dados->META_GRAFICO;
                            $linha1[10][0] = "Outubro";
                            $linha1[10][1] = $dados->MES10;
                            $linha1[10][2] = $dados->META_GRAFICO;
                            $linha1[11][0] = "Novembro";
                            $linha1[11][1] = $dados->MES11;
                            $linha1[11][2] = $dados->META_GRAFICO;
                            $linha1[12][0] = "Dezembro";
                            $linha1[12][1] = $dados->MES12;
                            $linha1[12][2] = $dados->META_GRAFICO;                
                            $linha1[0][0] = $dados->DESCRICAO_GRAFICO;
                        break;
                        case 2:
                            $linha2[1][1] = $dados->MES01;
                            $linha2[2][1] = $dados->MES02;
                            $linha2[3][1] = $dados->MES03;
                            $linha2[4][1] = $dados->MES04;                    
                            $linha2[5][1] = $dados->MES05;                    
                            $linha2[6][1] = $dados->MES06;                    
                            $linha2[7][1] = $dados->MES07;                    
                            $linha2[8][1] = $dados->MES08;                    
                            $linha2[9][1] = $dados->MES09;                                        
                            $linha2[10][1] = $dados->MES10;                    
                            $linha2[11][1] = $dados->MES11;                    
                            $linha2[12][1] = $dados->MES12;    
                    }
                    $linha = $linha + 1;
                }                       
            
                // CALCULO QUE FAZ ANTES DE GERAR O GRAFICO	
                // 	
                // NOME GRAFICO
                $grafic[0][0] = $linha1[0][0];
                // NOME DO MÊS JANEIRO
                $grafic[1][0] = $linha1[1][0];
                // DADOS DO GRAFICO JANEIRO **** VERIFICA SE VALOR É ZERO            
                if(($linha1[1][1] == 0) || ($linha2[1][1] == 0)){
                   $grafic[1][1] = 0;
                }
                else {
                    $grafic[1][1] = ($linha2[1][1] / $linha1[1][1]) * 100;
                }
                // META GRAFICO
                $grafic[1][2] = $linha1[1][2];
                // NOME DO MÊS FEVEREIRO             
                $grafic[2][0] = $linha1[2][0];
                // DADOS GRAFICO FEVEREIRO ******* VERIFICA SE VALOR É ZERO
                if(($linha1[2][1] == 0) || ($linha2[2][1] == 0)){
                    $grafic[2][1] = 0;
                }
                else{
                    $grafic[2][1] = ($linha2[2][1] / $linha1[2][1]) * 100;
                }
                // META GRAFICO
                $grafic[2][2] = $linha1[2][2];
                // NOME DO MÊS MARÇO
                $grafic[3][0] = $linha1[3][0];
                // DADOS GRAFICO MARÇO ****** VERIFICA SE VALOR É ZERO
                if(($linha1[3][1] == 0) || ($linha2[3][1] == 0)){
                    $grafic[3][1] = 0;
                }
                else{
                    $grafic[3][1] = ($linha2[3][1] / $linha1[3][1]) * 100;		
                }
                // META GRAFICO
                $grafic[3][2] = $linha1[3][2];
                // NOME DO MÊS ABRIL
                $grafic[4][0] = $linha1[4][0];
                // DADOS GRAFICO MARÇO ******* VERIFICA SE VALOR É ZERO
                if(($linha1[4][1] == 0) || ($linha2[4][1] == 0)){
                    $grafic[4][1] = 0;
                }
                else {
                    $grafic[4][1] = ($linha2[4][1] / $linha1[4][1]) * 100;		
                }
                // META GRAFICO
                $grafic[4][2] = $linha1[4][2];
                // NOME DO MÊS MAIO
                $grafic[5][0] = $linha1[5][0];
                // DADOS GRAFICO MAIO ******* VERIFICA SE VALOR É ZERO
                if(($linha1[5][1] == 0 ) ||($linha2[5][1] == 0)){
                    $grafic[5][1] = 0;
                }
                else{
                    $grafic[5][1] = ($linha2[5][1] / $linha1[5][1]) * 100;		
                }
                // META GRAFICO
                $grafic[5][2] = $linha1[5][2];
                // NOME DO MÊS JUNHO
                $grafic[6][0] = $linha1[6][0];
                // DADOS GRAFICO JUNHO ******* VERIFICA SE VALOR É ZERO
                if(($linha1[6][1] == 0) || ($linha2[6][1] == 0)){
                    $grafic[6][1] = 0;
                }
                else{
                    $grafic[6][1] = ($linha2[6][1] / $linha1[6][1]) * 100;		
                }
                // META GRAFICO
                $grafic[6][2] = $linha1[6][2];
                // NOME DO MÊS JULHO
                $grafic[7][0] = $linha1[7][0];
                // DADOS GRAFICO JULHO ****** VERIFICA SE VALOR É ZERO
                if(($linha1[7][1] == 0) || ($linha2[7][1] == 0)){
                    $grafic[7][1] = 0;
                }
                else{
                    $grafic[7][1] = ($linha2[7][1] / $linha1[7][1]) * 100;		
                }
                // META GRAFICO
                $grafic[7][2] = $linha1[7][2];
                // NOME DO MÊS AGOSTO
                $grafic[8][0] = $linha1[8][0];
                // DADOS GRAFICO AGOSTO  ******** VERIFICA SE VALOR É ZERO
                if(($linha1[8][1] == 0) || ($linha2[8][1] == 0)){
                    $grafic[8][1] = 0;
                }
                else{
                    $grafic[8][1] = ($linha2[8][1] / $linha1[8][1]) * 100;		
                }
                // META GRAFICO
                $grafic[8][2] = $linha1[8][2];
                // NOME DO MÊS SETEMBRO
                $grafic[9][0] = $linha1[9][0];
                // DADOS GRAFICO SETEMBRO ******* VERIFICA SE VALOR É ZERO
                if(($linha1[9][1] == 0) || ($linha2[9][1] == 0)){
                    $grafic[9][1] = 0;
                }
                else{
                    $grafic[9][1] = ($linha2[9][1] / $linha1[9][1]) * 100;		
                }
                // META GRAFICO
                $grafic[9][2] = $linha1[9][2];
                // NOME DO MÊS OUTUBRO
                $grafic[10][0] = $linha1[10][0];
                // DADOS GRAFICO OUTUBRO ********* VERIFICA SE VALOR É ZERO
                if(($linha1[10][1] == 0) || ($linha2[10][1] == 0)){
                    $grafic[10][1] = 0;
                }
                else {
                    $grafic[10][1] = ($linha2[10][1] / $linha1[10][1]) * 100;		
                }
                // META GRAFICO
                $grafic[10][2] = $linha1[10][2];
                // NOME DO MÊS NOVEMBRO
                $grafic[11][0] = $linha1[11][0];
                // DADOS GRAFICO NOVEMBRO ****** VERIFICA SE VALOR É ZERO
                if(($linha1[11][1] == 0) || ($linha2[11][1] == 0)){
                    $grafic[11][1] = 0;
                }
                else{
                    $grafic[11][1] = ($linha2[11][1] / $linha1[11][1]) * 100;		
                }
                // META GRAFICO
                $grafic[11][2] = $linha1[11][2];
                // NOME DO MÊS DEZEMBRO
                $grafic[12][0] = $linha1[12][0];
                // DADOS GRAFICO DEZEMBRO  ****** VERIFICA SE VALOR É ZERO
                if(($linha1[12][1] == 0) || ($linha2[12][1] == 0)){
                    $grafic[12][1] = 0;
                }
                else{
                    $grafic[12][1] = ($linha2[12][1] / $linha1[12][1]) * 100;		
                }
                // META GRAFICO
                $grafic[12][2] = $linha1[12][2];              
                $_SESSION['array'] = $grafic;
        }
        else {
            echo "<script>alert('Não contem dados para gerar o grafico, rever filtro')</script>";
            echo "<script>window.location.assign('../index.php')</script>";
            $_SESSION['ano'] = null;
            $_SESSION['tipo'] = null;         
        }            
        }
        
        public function geraGrafico11(){
            $ano = $_SESSION['ano'];
            $tipo = $_SESSION['tipo'];            
            $mysql = new db();
            $linha = 1;
            $listaDados = $mysql->sql_query("SELECT INDICADORES.DESCRICAO,DADOS.MES01, DADOS.MES02, DADOS.MES03, DADOS.MES04, DADOS.MES05, DADOS.MES06, DADOS.MES07, DADOS.MES08, DADOS.MES09, DADOS.MES10, DADOS.MES11, DADOS.MES12, GRAFICO.META_GRAFICO,GRAFICO.NOME_GRAFICO,GRAFICO.DESCRICAO_GRAFICO FROM DADOS INNER JOIN INDICADORES ON DADOS.ID_INDICADORES_FK = INDICADORES.ID_INDICADORES INNER JOIN GRAFICO ON DADOS.ID_GRAFICO_FK = GRAFICO.ID_GRAFICO WHERE ID_GRAFICO =". $tipo. " AND DADOS.ANO =".$ano."");    // NUMERO DE CLIENTES PESQUISADOS                
            if(mysql_num_rows($listaDados)> 0){
                while($dados = mysql_fetch_object($listaDados)){                
                    switch($linha){
                        case 1:
                            $linha1[0][0] = $dados->DESCRICAO_GRAFICO;
                            $linha1[1][0] = "Janeiro";
                            $linha1[1][1] = $dados->MES01;
                            $linha1[1][2] = $dados->META_GRAFICO;
                            $linha1[2][0] = "Fevereiro";
                            $linha1[2][1] = $dados->MES02;
                            $linha1[2][2] = $dados->META_GRAFICO;
                            $linha1[3][0] = "Março";
                            $linha1[3][1] = $dados->MES03;
                            $linha1[3][2] = $dados->META_GRAFICO;
                            $linha1[4][0] = "Abril";
                            $linha1[4][1] = $dados->MES04;
                            $linha1[4][2] = $dados->META_GRAFICO;
                            $linha1[5][0] = "Maio";
                            $linha1[5][1] = $dados->MES05;
                            $linha1[5][2] = $dados->META_GRAFICO;
                            $linha1[6][0] = "Junho";
                            $linha1[6][1] = $dados->MES06;
                            $linha1[6][2] = $dados->META_GRAFICO;
                            $linha1[7][0] = "Julho";
                            $linha1[7][1] = $dados->MES07;
                            $linha1[7][2] = $dados->META_GRAFICO;
                            $linha1[8][0] = "Agosto";
                            $linha1[8][1] = $dados->MES08;
                            $linha1[8][2] = $dados->META_GRAFICO;
                            $linha1[9][0] = "Setembro";
                            $linha1[9][1] = $dados->MES09;
                            $linha1[9][2] = $dados->META_GRAFICO;
                            $linha1[10][0] = "Outubro";
                            $linha1[10][1] = $dados->MES10;
                            $linha1[10][2] = $dados->META_GRAFICO;
                            $linha1[11][0] = "Novembro";
                            $linha1[11][1] = $dados->MES11;
                            $linha1[11][2] = $dados->META_GRAFICO;
                            $linha1[12][0] = "Dezembro";
                            $linha1[12][1] = $dados->MES12;
                            $linha1[12][2] = $dados->META_GRAFICO;                
                            $linha1[0][0] = $dados->DESCRICAO_GRAFICO;
                    }
                    $linha = $linha + 1;
                }
                // NOME GRAFICO
                $grafic[0][0] = $linha1[0][0];
                // NOME DO MÊS JANEIRO
                $grafic[1][0] = $linha1[1][0];
                // DADOS GRAFICO JANEIRO
                $grafic[1][1] =  $linha1[1][1];
                // META GRAFICO
                $grafic[1][2] = $linha1[1][2];
                // NOME DO MÊS FEVEREIRO
                $grafic[2][0] = $linha1[2][0];
                // DADOS GRAFICO FEVEREIRO
                $grafic[2][1] =  $linha1[2][1];
                // META GRAFICO
                $grafic[2][2] = $linha1[2][2];
                // NOME DO MÊS MARÇO
                $grafic[3][0] = $linha1[3][0];
                // DADOS GRAFICO MARÇO
                $grafic[3][1] =  $linha1[3][1];
                // META GRAFICO
                $grafic[3][2] = $linha1[3][2];
                // NOME DO MÊS ABRIL
                $grafic[4][0] = $linha1[4][0];
                // DADOS GRAFICO ABRIL
                $grafic[4][1] =  $linha1[4][1];
                // META GRAFICO
                $grafic[4][2] = $linha1[4][2];
                // NOME DO MÊS MAIO
                $grafic[5][0] = $linha1[5][0];
                // DADOS GRAFICO MAIO
                $grafic[5][1] =  $linha1[5][1];
                // META GRAFICO
                $grafic[5][2] = $linha1[5][2];
                // NOME DO MÊS JUNHO
                $grafic[6][0] = $linha1[6][0];
                // DADOS GRAFICO JUNHO
                $grafic[6][1] =  $linha1[6][1];
                // META GRAFICO
                $grafic[6][2] = $linha1[6][2];
                // NOME DO MÊS JULHO
                $grafic[7][0] = $linha1[7][0];
                // DADOS GRAFICO JULHO
                $grafic[7][1] =  $linha1[7][1];
                // META GRAFICO
                $grafic[7][2] = $linha1[7][2];
                // NOME DO MÊS AGOSTO
                $grafic[8][0] = $linha1[8][0];
                // DADOS GRAFICO AGOSTO
                $grafic[8][1] =  $linha1[8][1];
                // META GRAFICO
                $grafic[8][2] = $linha1[8][2];
                // NOME DO MÊS SETEMBRO
                $grafic[9][0] = $linha1[9][0];
                // DADOS GRAFICO SETEMBRO
                $grafic[9][1] =  $linha1[9][1];
                // META GRAFICO
                $grafic[9][2] = $linha1[9][2];
                // NOME DO MÊS OUTUBRO
                $grafic[10][0] = $linha1[10][0];
                // DADOS GRAFICO OUTUBRO
                $grafic[10][1] =  $linha1[10][1];
                // META GRAFICO
                $grafic[10][2] = $linha1[10][2];
                // NOME DO MÊS NOVEMBRO
                $grafic[11][0] = $linha1[11][0];
                // DADOS GRAFICO NOVEMBRO
                $grafic[11][1] =  $linha1[11][1];
                // META GRAFICO
                $grafic[11][2] = $linha1[11][2];
                // NOME DO MÊS DEZEMBRO
                $grafic[12][0] = $linha1[12][0];
                // DADOS GRAFICO DEZEMBRO
                $grafic[12][1] =  $linha1[12][1];
                // META GRAFICO
                $grafic[12][2] = $linha1[12][2];
                $_SESSION['array'] = $grafic;
            }
            else{
                echo "<script>alert('Não contem dados para gerar o grafico, rever filtro')</script>";
                echo "<script>window.location.assign('../index.php')</script>";
                $_SESSION['ano'] = null;
                $_SESSION['tipo'] = null;         
            }            
        }                            
        
    }

