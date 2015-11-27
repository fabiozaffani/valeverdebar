<?php

class Contact {

	public function __construct($mandrill, $smarty) {
		$this->mandrill = $mandrill;
		$this->smarty = $smarty;
		$this->adminMail = 'fabiozaffani@gmail.com';
		$this->adminName = 'Vale Verde Bar';
	}

	public function setMailData() {
		$this->mailData = array(
			'name' => $_POST['name'],
			'email' => $_POST['email'],
			'phone' => $_POST['subject'],
			'comments' => stripslashes($_POST['comments'])
		);
	}

	public function validate() {

		$result = false;

		function isEmail($email) {
			return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
		}

		if(trim($this->mailData['name']) == '') {
			$result = '<div class="error_message">Digite seu nome.</div>';
		} else if(trim($this->mailData['email']) == '') {
			$result = '<div class="error_message">Digite seu e-mail.</div>';
		} else if(!isEmail($this->mailData['email'])) {
			$result = '<div class="error_message">Digite um e-mail válido.</div>';
		} else if(trim($this->mailData['phone']) == '') {
			$result = '<div class="error_message">Digite o seu telefone.</div>';
		} else if(trim($this->mailData['comments']) == '') {
			$result = '<div class="error_message">Digite uma mensagem.</div>';
		}

		return $result;
	}

	public function sendMail() {

		$this->setMailData();
		$validState = $this->validate();

		if ($validState) {
			return $validState;
		}

		$this->smarty->assign('mailData', $this->mailData);
		$mailAdminOutput = $this->smarty->fetch('mail/newContact.tpl');
		$mailUserOutput = $this->smarty->fetch('mail/contactSuccess.tpl');

		$messageAdmin = array(
			'html' => $mailAdminOutput,
			'subject' => 'Novo contato - Eventos Vale Verde',
			'from_email' => $this->mailData['email'],
			'from_name' => $this->mailData['name'],
			'to' => array(
				array(
					'email' => $this->adminMail,
					'name' => $this->adminName,
					'type' => 'to'
				)
			),
			'headers' => array('Reply-To' => $this->mailData['email'])
		);

		$messageUser = array(
			'html' => $mailUserOutput,
			'subject' => 'Contato recebido - Eventos Vale Verde',
			'from_email' => $this->adminMail,
			'from_name' => $this->adminName,
			'to' => array(
				array(
					'email' => $this->mailData['email'],
					'name' => $this->mailData['name'],
					'type' => 'to'
				)
			),
			'headers' => array('Reply-To' => $this->adminMail)
		);

		$async = false;

		$mailAdmin = $this->mandrill->messages->send($messageAdmin, $async);
		$mailUser = $this->mandrill->messages->send($messageUser, $async);

		if ($mailAdmin) {

			return 'ok';

		} else {

			return 'fail';

		}
	}
}
