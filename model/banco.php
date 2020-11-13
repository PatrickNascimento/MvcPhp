<?php
/** 
 * PHP Version 7.4.0 
 * @category Model
 * @package  MVC
 * @author   Patrick Souza do Nascimento patrick@engeplus.com.br  
 * @license  http://www.engeplus.com.br/licenca  
 * @link     #
 * @since    09.11.2020
 */

define('DB_HOST'        , "SRV-DESENVOLVIMENTO\DESENV_TC");
define('DB_NAME'        , "__DEV_TEST_1");
define('DB_DRIVER'      , "sqlsrv");

require_once("../init.php");

class Banco{    

    public function setVendedor($nome,$comissao){
        try{
            $Conexao    = Conexao::getConnection();
            $query      = $Conexao->query("INSERT INTO vendedor (nome,comissao) VALUES ('$nome',$comissao)");                                    
            $query->execute();
            return 1;
         }catch(Exception $e){
            echo $e->getMessage();
            return 2;
            exit;
         }     
    }

    public function getVendedor(){
        try{
            $Conexao    = Conexao::getConnection();
            $query      = $Conexao->query("SELECT id_vendedor, nome, comissao FROM vendedor");
            $vendedor   = $query->fetchAll();

            return $vendedor;
         
         }catch(Exception $e){
            echo $e->getMessage();
            exit;
         }
    }

     public function deleteVendedor($id_vendedor){         
            try{
                $Conexao    = Conexao::getConnection();
                $query      = $Conexao->query("DELETE FROM vendedor WHERE id_vendedor = " .$id_vendedor);                                                                
                $query->execute();
                return 1;
             }catch(Exception $e){
                echo $e->getMessage();
                return 2;
                exit;
             }     
     }
     public function pesquisaVendedor($id){
         try{
            $Conexao    = Conexao::getConnection();
            $query      = $Conexao->query("SELECT top 1 id_vendedor, nome, comissao FROM vendedor where id_vendedor = '$id' ");
            $pesquisavendedor   = $query->fetchAll();
            //$serialized_array = serialize($pesquisavendedor);
            return $pesquisavendedor;
         
         }catch(Exception $e){
            echo $e->getMessage();
            exit;
         }
     }

    public function updateVendedor($id_vendedor,$nome,$comissao){
      try{
         $Conexao    = Conexao::getConnection();
         $query      = $Conexao->query("UPDATE vendedor SET nome = '$nome', comissao = $comissao where id_vendedor = $id_vendedor");                                    
         //var_dump($query);
         $query->execute();
         return TRUE;
      }catch(Exception $e){
         echo $e->getMessage();
         return FALSE;
         exit;
      }               
    }

}
?>
