<?php

   require_once("conexao.php");

   class Usuarios {
      public int $id;
      public string $nome = "";
      private string $email;
      private string $senha;
      
    

      public function __construct(
         string $nome = "",
         string $email,
         string $senha
         
      ){
         $this->nome = $nome;
         $this->email = $email;
         $this->senha = $senha;
       
        
      }

      public function validar() {
         $db = new ConexaoMysql();
         $db->Conectar();

         $sql = 'SELECT * FROM usuarios WHERE email = "'.$this->email.'" and senha = "'.$this->senha.'";';
         $cliente = $db->Consultar($sql)->fetch_assoc();

         $db->Desconectar();
         if ($db->total == 1) {
            $this->id = $usuarios['id'];
            $this->nome = $usuarios['nome'];
            $this->email = $usuarios['email'];
            $this->senha = $usuarios['senha'];
            
            return true;
         }
         return false;
      }

      public function inserir() {
         $db = new ConexaoMysql();
         $db->Conectar();

         $query = 'INSERT INTO usuarios(nome, email, senha)
         values(
            "'.$this->nome.'",
            "'.$this->email.'",
            "'.$this->senha.'"
            );';
            try {
               $db->Executar($query);
            } catch (Exception $e) {
               echo $e->getMessage();
               return;
            }
            $db->Desconectar();
            return $db->total;
         }
      }
   ?>
