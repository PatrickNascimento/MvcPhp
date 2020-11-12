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
            $produtos   = $query->fetchAll();

            return $produtos;
         
         }catch(Exception $e){
            echo $e->getMessage();
            exit;
         }
    }

     public function deleteVendedor($id_vendedor){         
            try{
                $Conexao    = Conexao::getConnection();
                $query      = $Conexao->query("DELETE FROM vendedor WHERE id_vendedor = " .$id_vendedor);                                                
                //var_dump($query);
                $query->execute();
                return 1;
             }catch(Exception $e){
                echo $e->getMessage();
                return 2;
                exit;
             }     
     }
    // public function pesquisaLivro($id){
    //     $result = $this->mysqli->query("SELECT * FROM livros WHERE nome='$id'");
    //     return $result->fetch_array(MYSQLI_ASSOC);

    // }
    // public function updateLivro($nome,$autor,$quantidade,$preco,$flag,$data,$id){
    //     $stmt = $this->mysqli->prepare("UPDATE `livros` SET `nome` = ?, `autor`=?, `quantidade`=?, `preco`=?, `flag`=?,`data` = ? WHERE `nome` = ?");
    //     $stmt->bind_param("sssssss",$nome,$autor,$quantidade,$preco,$flag,$data,$id);
    //     if($stmt->execute()==TRUE){
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }
}
?>
