<?php 
    Class Produto{
        private $NomeProduto;
        private $PrecoProduto; 
        private $DescricaoProduto;
        
        public function todos(){
            $data = $this->dados;
            return $data;
        }

        public function ver(){
            $data['registro'] = this->dados[$_GET['id']];
            return $data; 
        }

    }
?>