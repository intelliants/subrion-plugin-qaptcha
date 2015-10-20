<?php
//##copyright##

class iaCaptcha extends abstractCore
{
	var $captcha = null;
	var $config = null;

	public function getImage()
	{
		$iaCore = iaCore::instance();

		return $iaCore->iaView->iaSmarty->fetch(IA_PLUGINS . 'qaptcha/templates/front/index.tpl');
	}

	public function validate()
	{
		$QaptChaInput = $_SESSION['qaptcha_key'];

		if (!(isset($_POST[$QaptChaInput]) && empty($_POST[$QaptChaInput])))
		{
			return false;
		}

		return true;
	}

	public function getPreview()
	{
		$iaCore = iaCore::instance();

		return $iaCore->iaView->iaSmarty->fetch(IA_PLUGINS . 'qaptcha/templates/front/index.tpl');
	}
}