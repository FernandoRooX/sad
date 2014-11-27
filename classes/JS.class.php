<?php
/**
 * Classe para interação com a interface do usuário envolvento javascript
 * @author Emanuel Sampaio
 * @since 10/03/2009
 * @version 1.0
 * @copyright © 2009 Emanuel Sampaio - Todos os direitos reservados.
 * @package class
 */

class JS
{
	/**
	 * Retorna um redirecionamento de url utilizando javascript
	 *
	 * @access public
	 * @return string
	 * @param string
	 */
	public static function redirecionaURL($url)
	{
		echo "<script type=\"text/javascript\">location.href=\"" . $url . "\"</script><noscript><a href=\"" . $url . "\" title=\"Voltar\">VOLTAR</a><br /></noscript>";
	}



	/**
	 * Retorna uma mensagem de alerta utilizando javascript
	 *
	 * @access public
	 * @return string
	 * @param string
	 */
	public static function exibeMSG($msg)
	{
		echo "<script type=\"text/javascript\">alert(\"" . $msg . "\")</script><noscript>" . $msg . "<br /></noscript>";
	}
	
	
	
	/**
	 * Volta para a página anterior
	 *
	 * @access public
	 * @return string
	 * @param string
	 */
	public static function voltar()
	{
		echo "<script type=\"text/javascript\">history.go(-1);</script>";
	}
} // fecha class
?>