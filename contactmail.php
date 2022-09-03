<?php
$u_name=$_POST['username'];
$u_email=$_POST['useremail'];
$u_subject=$_POST['usersubject'];
$u_msg=$_POST['user_msg'];
if(trim($u_name)!="Tu nombre" && trim($u_email)!="Tu email" && trim($u_subject)!="Mensaje" && trim($u_msg)!="Tu pregunta" && trim($u_name)!="" && trim($u_email)!="" && trim($u_subject)!="" && trim($u_msg)!="")
{
	if(filter_var($u_email, FILTER_VALIDATE_EMAIL))
	{
		$message="Hola Home Design..
			<p> Soy : ".$u_name." ha enviado una consulta</p>
			<p>mi correo electrónico es : ".$u_email."</p>
			<p>El tema es: ".$u_phone."</p>
			<p>y mi mensaje : ".$u_msg."</p>";
		
		$message_user="Hi ".$u_email."<p> Muchas gracias por sus valiosos comentarios. <br> Nuestro equipo de soporte se comunicará con usted lo antes posible.</p><p>Ten un buen dia.</p>";
		
		
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: <gerencia.arqdec@gmail.com>' . "\r\n";

		if(mail('gerencia.arqdec@gmail.com','Consulta por Diseño de Interiores',$message,$headers ))
		{
		mail($u_email,'Respuesta de plantilla de diseño de interiores TeamDesign',$message_user,$headers );
			
		echo '1#<p style="color:green;">El correo ha sido enviado con éxito.</p>';
		}
		else
		{
		echo '2#<p style="color:red;">Inténtalo de nuevo.</p>';
		}
	}
	else
		echo '2#<p style="color:red">Por favor, proporcione un correo electrónico válido.</p>';
}
else
{
echo '2#<p style="color:red">Por favor, complete todos los detalles.</p>';
}?>