<?php
/**
 * Cleynaldo Carvalho
 * Sistema de Apoio ao Docente
 */

class Seguranca
{
	/**
	 * Trata os dados vindos de formul�rios
	 */
	public static function tratarVar($variavel)
	{
		// caso a função get_magic_quotes_gpc() esteja desabilitada, for�a a inserção da barra antes das aspas
		$variavel = get_magic_quotes_gpc() ? $variavel : addslashes($variavel);

		// retira as barras antes das aspas
		$variavel = stripslashes($variavel);

		// converte tags html em entidades e retira os espaços no início e final das vari�veis
		return htmlentities(trim($variavel), ENT_QUOTES); // converte aspas simples e duplas
	}  // fecha método tratarVar()



	/**
	 * Trata os dados vindos via ajax tratando as acentuações
	 */
	public static function tratarVarAjax($variavel)
	{
		// a fun��o utf8_decode() converte uma string com caracteres ISO-8859-1 codificadas com UTF-8 (no caso, dados vindos via AJAX)
		return self::tratarVar(utf8_decode($variavel));
	} // fecha método tratarVarAjax()



	/**
	 * Trata os dados vindos via ajax somente
	 */
	public static function tratarVarAjaxBasico($variavel)
	{
		// a fundo utf8_decode() converte uma string com caracteres ISO-8859-1 codificadas com UTF-8 (no caso, dados vindos via AJAX)
		return utf8_decode($variavel);
	} // fecha método tratarVarAjax()



	/**
	 * Trata os dados para o formato html
	 */
	public static function tratarVarHTML($variavel)
	{
		return html_entity_decode($variavel, ENT_COMPAT); // irá converter aspas e deixar os apostrofos
	} // fecha método tratarVarHTML()
} // fecha class
?>