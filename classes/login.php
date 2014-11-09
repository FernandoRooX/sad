<?php
/**
 * Description of login
 *
 * @author Cleynaldo
 */
class login extends conexao {

    //put your code here
    private $login;
    private $senha;

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }
    public function getLogin() {
        return $this->login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function logar() {
        $pdo = parent::getDB();

        $logar = $pdo->prepare("SELECT * FROM usuario WHERE login = ? AND senha = ?");
        $logar->bindValue(1, $this->getLogin());
        $logar->bindValue(2, $this->getSenha());
        $logar->execute();
        if ($logar->rowCount() == 1):
            $dados = $logar->fetch(PDO::FETCH_OBJ);
            $_SESSION['login'] = $dados-> login;
            $_SESSION['perfilUsuario'] = $dados-> perfil;
            $_SESSION['idPESSOA']  = $dados-> PESSOA_idPESSOA;
            $_SESSION['logado'] = true;
            return TRUE;
        else:
            return false;
        endif;
    }

    public static function deslogar() {
        if (isset($_SESSION['logado'])):
            unset($_SESSION['logado']);
            session_destroy();
            header("location:http://localhost/homolocacao/index.php");
        endif;
    }
}
?>