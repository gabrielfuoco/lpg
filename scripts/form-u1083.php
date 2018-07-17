<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.1.0.386
*/

require_once('form_process.php');

$form = array(
	'subject' => 'A-mestre Formulário envio',
	'heading' => 'Envio de novo formulário',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Marcado',
		'checkbox_unchecked' => 'Desmarcado',
		'submitted_from' => 'Formulário enviado do site: %s',
		'submitted_by' => 'Endereço IP do visitante: %s',
		'too_many_submissions' => 'Muitos envios recentes deste IP',
		'failed_to_send_email' => 'Falha no envio do email',
		'invalid_reCAPTCHA_private_key' => 'Chave privada do reCAPTCHA inválida.',
		'invalid_reCAPTCHA2_private_key' => 'Chave privada do reCAPTCHA 2.0 inválida.',
		'invalid_reCAPTCHA2_server_response' => 'Resposta do servidor reCAPTCHA 2.0 inválida.',
		'invalid_field_type' => 'Tipo de campo desconhecido \"%s\".',
		'invalid_form_config' => 'O campo \"%s\" possui uma configuração inválida.',
		'unknown_method' => 'Método de solicitação de servidor desconhecido'
	),
	'email' => array(
		'from' => 'sac@lpgmais.com.br',
		'to' => 'sac@lpgmais.com.br'
	),
	'fields' => array(
		'custom_U1094' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Nome',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Nome\" é obrigatório.'
			)
		),
		'Email' => array(
			'order' => 3,
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Email\" é obrigatório.',
				'format' => 'O campo \"Email\" possui um email inválido.'
			)
		),
		'custom_U1088' => array(
			'order' => 2,
			'type' => 'string',
			'label' => 'Mensagem',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U1136' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Personalizar',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Personalizar\" é obrigatório.'
			)
		)
	)
);

process_form($form);
?>