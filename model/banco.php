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
   /*INSERE NOVO REGISTRO VENDEDOR*/
    public function setVendedor($nome,$comissao){
        try{
           $x = 1;
            $Conexao    = Conexao::getConnection();
            $query      = $Conexao->prepare("INSERT INTO vendedor (nome,comissao) VALUES ('$nome',$comissao)");                                    
            $query->execute();            
            // $query      = $Conexao->query("DELETE FROM vendedor WHERE id_vendedor = (SELECT  top 1 id_vendedor from vendedor order by id_vendedor  desc)");                                    
            // $query->execute();
            return 1;

         }catch(Exception $e){
            echo $e->getMessage();
            return 2;
            exit;
         }     
    }
/*INSERE NOVO REGISTRO PRODUTO*/
public function setProduto($nome,$valor,$quantidade,$comissao){
   try{
       $Conexao    = Conexao::getConnection();
       $query      = $Conexao->prepare("INSERT INTO produto (nome,valor,quantidade) VALUES ('$nome','$valor','$quantidade')");                                           
       $query->execute();       
       return 1;
    }catch(Exception $e){
       echo $e->getMessage();
       return 2;
       exit;
    }     
}

    /*BUSCA VENDEDORES*/
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

    /*INSERE NOVO REGISTRO PRODUTO*/
public function setVenda($id_vendedor,$id_produto,$valor,$data){
   try{
       $Conexao    = Conexao::getConnection();
       $query      = $Conexao->prepare("INSERT INTO vendas (id_vendedor,id_produto,valor_venda,data_venda) VALUES ($id_vendedor,$id_produto,$valor,$data)");                                                  
       $query->execute();
       return 1;
    }catch(Exception $e){
       echo $e->getMessage();
       return 2;
       exit;
    }     
}

      /*BUSCA PRODUTOS*/
      public function getProduto(){
         try{
             $Conexao    = Conexao::getConnection();
             $query      = $Conexao->query("SELECT id_produto, nome, valor, quantidade, comissao FROM produto");
             $produto   = $query->fetchAll();
 
             return $produto;
          
          }catch(Exception $e){
             echo $e->getMessage();
             exit;
          }
     }

     /*EXCLUSAO POR VENDEDOR*/
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

     /*EXCLUSAO POR PRODUTO*/
     public function deleteProduto($id_produto){         
      try{
          $Conexao    = Conexao::getConnection();
          $query      = $Conexao->query("DELETE FROM produto WHERE id_produto = " .$id_produto);                                                                
          $query->execute();
          return 1;
       }catch(Exception $e){
          echo $e->getMessage();
          return 2;
          exit;
       }     
   }
     /*PESQUISA POR VENDEDOR*/
     public function pesquisaVendedor($id){
         try{
            $Conexao    = Conexao::getConnection();
            $query      = $Conexao->query("SELECT top 1 id_vendedor, nome, comissao FROM vendedor where id_vendedor = '$id' ");
            $pesquisavendedor   = $query->fetchAll();            
            return $pesquisavendedor;
         
         }catch(Exception $e){
            echo $e->getMessage();
            exit;
         }
     }

          /*PESQUISA POR PRODUTO*/
          public function pesquisaProduto($id){
            try{
               $Conexao    = Conexao::getConnection();
               $query      = $Conexao->query("SELECT top 1 id_produto, nome, valor, quantidade, comissao FROM produto where id_produto = '$id' ");
               $pesquisaProduto   = $query->fetchAll();               
               return $pesquisaProduto;
            
            }catch(Exception $e){
               echo $e->getMessage();
               exit;
            }
        }

     /*UPDATE VENDEDOR*/
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

    
     /*UPDATE PRODUTO*/
     public function updateProduto($id_produto,$nome,$valor,$quantidade,$comissao){
      try{
         $Conexao    = Conexao::getConnection();
         $query      = $Conexao->query("UPDATE produto SET nome = '$nome', valor = $valor, quantidade = $quantidade, comissao = $comissao where id_produto = $id_produto");                                    
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
