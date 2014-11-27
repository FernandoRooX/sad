<?php

class Validacao
{
	/**
	 * valida n�meros de telefone
	 *
	 * @access public
	 * @param string
	 * @return bool
	 */
	public static function validarFone($fone)
	{
		$fone = str_replace("(", "", $fone);
		$fone = str_replace(")", "", $fone);
		$fone = str_replace(" ", "", $fone);
		$fone = str_replace("-", "", $fone);
		$fone = str_replace("/", "", $fone);
		$fone = str_replace(".", "", $fone);

		if (strlen($fone) != 8 && strlen($fone) != 10)
		{
			return false;
		}
		else
		{
			return is_numeric($fone);
		}
	} // fecha m�todo validarFone()



	/**
	 * valida email
	 *
	 * @access public
	 * @param string
	 * @return bool
	 */
	public static function validarEmail($email)
	{
		// elimina os erros mais comuns de digita��o de e-mails
		$email = str_replace(" ", "", $email);
		$email = str_replace("/", "", $email);
		$email = str_replace("@.", "@", $email);
		$email = str_replace(".@", "@", $email);
		$email = str_replace(",", ".", $email);
		$email = str_replace(";", ".", $email);

		if (strlen($email) < 8 || substr_count($email, "@") != 1 || substr_count($email, ".") == 0)
		{
			return false;
		}
		else
		{
			return true;
		}
	} // fecha m�todo validarEmail()



	/**
	 * valida endere�o eletr�nico
	 *
	 * @access public
	 * @param string
	 * @return bool
	 */
	public static function validarURL($url)
	{
		return preg_match('|^http(s)?://[a-z0-9-]+(\.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i', $url);
	} // fecha m�todo validarURL()



	/**
	 * valida CEP
	 *
	 * @access public
	 * @param string
	 * @return bool
	 */
	public static function validarCEP($cep)
	{
		$cep = str_replace(" ", "", $cep);
		$cep = str_replace(".", "", $cep);
		$cep = str_replace("-", "", $cep);
		$cep = str_replace(",", "", $cep);
		$cep = str_replace(";", "", $cep);
		$cep = str_replace("/", "", $cep);

		if (strlen($cep) != 8)
		{
			return false;
		}
		else
		{
			return is_numeric($cep);
		}
	} // fecha m�todo validarCEP()



	/**
	 * valida CPF
	 *
	 * @access public
	 * @param string
	 * @return bool
	 */
	public static function validarCPF($cpf)
	{
		$cpf = str_replace(" ", "", $cpf);
		$cpf = str_replace(".", "", $cpf);
		$cpf = str_replace("-", "", $cpf);
		$cpf = str_replace(",", "", $cpf);
		$cpf = str_replace(";", "", $cpf);
		$cpf = str_replace("/", "", $cpf);

		if (!is_numeric($cpf) || strlen($cpf) != 11)
		{
			return false;
		}
		else
		{
			// verifica o primeiro d�gito verificador
			$total = 0;
			$casas = array(10, 9, 8, 7, 6, 5, 4, 3, 2);
			for ($i = 0; $i < 9; $i++)
			{
				$total += (substr($cpf, $i, 1) * $casas[$i]);
			}
			$total %= 11; // pega o resto da divis�o por 11
			if ($total < 2)
			{
				$d1 = 0;
			}
			else
			{
				$d1 = 11 - $total;
			}

			// verifica o segundo d�gito verificador
			$total = 0;
			$casas = array(11, 10, 9, 8, 7, 6, 5, 4, 3, 2);
			for ($i = 0; $i < 10; $i++)
			{
				$total += (substr($cpf, $i, 1) * $casas[$i]);
			}
			$total %= 11; // pega o resto da divis�o por 11
			if ($total < 2)
			{
				$d2 = 0;
			}
			else
			{
				$d2 = 11 - $total;
			}

			$dv = substr($cpf, 9, 2); // d�gito verificador
			$d = $d1 . $d2; // d�gito verificador calculado
			if ($dv == $d)
			{
				return true;
			}
			else
			{
				return false;
			}
		} // fecha else
	} // fecha m�todo validarCPF()



	/**
	 * valida CNPJ
	 *
	 * @access public
	 * @param string
	 * @return bool
	 */
	public static function validarCNPJ($cnpj)
	{
		$cnpj = str_replace(" ", "", $cnpj);
		$cnpj = str_replace(".", "", $cnpj);
		$cnpj = str_replace("-", "", $cnpj);
		$cnpj = str_replace(",", "", $cnpj);
		$cnpj = str_replace(";", "", $cnpj);
		$cnpj = str_replace("/", "", $cnpj);

		if (!is_numeric($cnpj) || strlen($cnpj) != 14)
		{
			return false;
		}
		else
		{
			// verifica o primeiro d�gito verificador
			$total = 0;
			$casas = array(5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2);
			for ($i = 0; $i < 12; $i++)
			{
				$total += (substr($cnpj, $i, 1) * $casas[$i]);
			}
			$total %= 11; // pega o resto da divis�o por 11
			if ($total < 2)
			{
				$d1 = 0;
			}
			else
			{
				$d1 = 11 - $total;
			}

			// verifica o segundo d�gito verificador
			$total = 0;
			$casas = array(6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2);
			for ($i = 0; $i < 13; $i++)
			{
				$total += (substr($cnpj, $i, 1) * $casas[$i]);
			}
			$total %= 11; // pega o resto da divis�o por 11
			if ($total < 2)
			{
				$d2 = 0;
			}
			else
			{
				$d2 = 11 - $total;
			}

			$dv = substr($cnpj, 12, 2); // d�gito verificador
			$d = $d1 . $d2; // d�gito verificador calculado
			if ($dv == $d)
			{
				return true;
			}
			else
			{
				return false;
			}
		} // fecha else
	} // fecha m�todo validarCNPJ()

} // fecha class
?>