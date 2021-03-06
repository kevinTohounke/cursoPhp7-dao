<?php
class Usuario{


    private $idUsuario;
    private $desLogin;
    private $desSenha;
    private $dtCadastro;

    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function setIdUsuario($value){
        $this->idUsuario = $value;
    }

    public function getDeslogin(){
        return $this->deslogin;
    }

    public function setDeslogin($value){
        $this->deslogin=$value;
    }

     public function getDesSenha(){
         return $this->desSenha;
     }

     public function setDesSenha($value){
         $this->desSenha=$value;
     }

     public function getDtCadastro(){
         return $this->dtCadastro;
     }

     public function setDtCadastro($value){
        $this->dtCadastro = $value;
     }

     public function loadById($id){
         $sql = new Sql();

         $results = $sql -> select("SELECT * FROM tb_usuarios where idUsuario = :ID", array(":ID"=>$id) );

         if (count($results) > 0){

            $row = $results[0];

            $this->setIdUsuario($row['idUsuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDtCadastro($row['dtcadastro']);
            $this->setDesSenha($row['dessenha']);


         }
     }

     public function __toString(){
         return json_encode(array(

            "idUsuario"=>$this->getIdUsuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDesSenha(),
            "dtcadastro"=>$this->getDtCadastro()
         ));
     }

}

?>