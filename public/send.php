<?php

function form_mail($sPara, $sAsunto, $sTexto, $sDe)
{
$bHayFicheros = 0;
$sCabeceraTexto = "";
$sAdjuntos = "";

if ($sDe)$sCabeceras = "From:".$sDe."\n";
else $sCabeceras = "";
$sCabeceras .= "MIME-version: 1.0\n";
$sCabeceras .= "Content-Type: text/html; charset=UTF-8\n";
$sCabeceras .= "Content-Transfer-Encoding: 8bit\n";

foreach ($_POST as $sNombre => $sValor)
{
	$sTexto = $sTexto."<p></p>".$sNombre." = ".$sValor;
	if($sNombre == "validar")
	{
		//$validacion = $sNombre => $sValor;
		$validacion = $sValor;
	}
}

		foreach ($_FILES as $vAdjunto)
		{
			if ($bHayFicheros == 0)
			{
				$bHayFicheros = 1;
				$sCabeceras .= "Content-type: multipart/mixed;";
				$sCabeceras .= "boundary=\"--_Separador-de-mensajes_--\"\n";

				$sCabeceraTexto = "----_Separador-de-mensajes_--\n";

				$sTexto = $sCabeceraTexto.$sTexto;
			}
			if ($vAdjunto["size"] > 0)
			{
				$sAdjuntos .= "\n\n----_Separador-de-mensajes_--\n";
				$sAdjuntos .= "Content-type: ".$vAdjunto["type"].";name=\"".$vAdjunto["name"]."\"\n";;
				$sAdjuntos .= "Content-Transfer-Encoding: BASE64\n";
				$sAdjuntos .= "Content-disposition: attachment;filename=\"".$vAdjunto["name"]."\"\n\n";

				$oFichero = fopen($vAdjunto["tmp_name"], 'r');
				$sContenido = fread($oFichero, filesize($vAdjunto["tmp_name"]));
				$sAdjuntos .= chunk_split(base64_encode($sContenido));
				fclose($oFichero);
			}
		}

		$sAsunto = '=?UTF-8?B?' . base64_encode("Contacto página web") . '?=';

		if ($bHayFicheros)
		$sTexto .= $sAdjuntos."\n\n----_Separador-de-mensajes_----\n";

		return(mail($sPara, $sAsunto, $sTexto, $sCabeceras));
}
	//cambiar aqui el email
if (form_mail("captacionregistro@idcbis.org.co", $_POST[asunto],
"Los datos introducidos en el formulario son:\n\n", $_POST[email]))

	$url="https://idcbis.org.co/darcelulas/gracias-por-contactarnos";
	echo "<SCRIPT>window.location='$url';</SCRIPT>";

?>
