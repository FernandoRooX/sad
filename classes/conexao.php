<?php
/**
 * Description of conexao
 *
 * @author Cleynaldo
 */
class conexao {
//put your code here

    const user = "root";
    const pass = "1010";
    

    private static $instance = null;

    private static function conectar() {
        try {
            if (self::$instance == null):
                $isn = "mysql:host=localhost;dbname=sad9";
                self::$instance = new PDO($isn, self::user, self::pass);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            endif;
        } catch (PDOException $e) {
            echo "Erro: " .$e->getMessage();
        }
        return self::$instance;
    }

    protected static function getDB() {
        return self::conectar();
    }

}
?>
