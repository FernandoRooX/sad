<?php
/**
 * Cleynaldo Carvalho
 * Sistema de Apoio ao Docente
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
	 * Volta para a p�gina anterior
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