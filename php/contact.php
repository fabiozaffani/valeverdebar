<?php

require_once "Mail.php";

if(!$_POST) exit;

// Email address verification, do not edit.
function isEmail($email) {
	return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
}

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$from   = "Contato Eventos Vale Verde <contato@valeverdebar.com>";
$to     = "Eventos Vale Verde <fabiozaffani@gmail.com>";
$subject= "Contato do Formulário Eventos Vale Verde\r\n\r\n";

$host = "mail.emailsrvr.com";
$username = "contato@valeverdebar.com.br";
$password = "!Q@W3e4r";

$headers = array (
    'From'  => $from,
    'To'    => $to,
    'Subject' => $subject);

$smtp = Mail::factory(
    'smtp', array('host' => $host,
        'auth' => true,
        'username' => $username,
        'password' => $password
    )
);

$name     = $_POST['name'];
$email    = $_POST['email'];
$subject  = $_POST['subject'];
$comments = $_POST['comments'];

if(trim($name) == '') {
	echo '<div class="error_message">Digite seu nome.</div>';
	exit();
} else if(trim($email) == '') {
	echo '<div class="error_message">Digite seu e-mail.</div>';
	exit();
} else if(!isEmail($email)) {
	echo '<div class="error_message">Digite um e-mail válido.</div>';
	exit();
}

if(trim($subject) == '') {
	echo '<div class="error_message">Digite o seu telefone.</div>';
	exit();
} else if(trim($comments) == '') {
	echo '<div class="error_message">Digite uma mensagem.</div>';
	exit();
}

if(get_magic_quotes_gpc()) {
	$comments = stripslashes($comments);
}


// Configuration option.
// i.e. The standard subject will appear as, "You've been contacted by John Doe."

// Example, $e_subject = '$name . ' has contacted you via Your Website.';

$e_subject = 'You\'ve been contacted by ' . $name . '.';

$body = "Nome: " . $name . "\n";
$body .= "E-mail: " . $email . "\n";
$body .= "Telefone: " . $subject . "\n \n";
$body .= "Mensagem: ". $comments ;

// Configuration option.
// You can change this if you feel that you need to.
// Developers, you may wish to add more fields to the form, in which case you must be sure to add them here.

//$e_body = "You have been contacted by $name with regards to $subject, their additional message is as follows." . PHP_EOL . PHP_EOL;
//$e_content = "\"$comments\"" . PHP_EOL . PHP_EOL;
//$e_reply = "You can contact $name via email or via $email";
//
//$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );
//
//$headers = "From: $email" . PHP_EOL;
//$headers .= "Reply-To: $email" . PHP_EOL;
//$headers .= "MIME-Version: 1.0" . PHP_EOL;
//$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
//$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

// if everything went fine, send e-mail
$mail = $smtp->send($to, $headers, $body);

if($mail){ //mail($address, $e_subject, $msg, $headers)) {

	// Email has sent successfully, echo a success page.

	echo "<fieldset>";
	echo "<div id='success_page'>";
	echo "<h1>E-mail enviado com sucesso.</h1>";
	echo "<p>Obrigado <strong>{$name}</strong>, sua mensagem foi enviada com sucesso, entraremos em contato em breve.</p>";
	echo "</div>";
	echo "</fieldset>";

} else {

	echo 'ERROR!';

}