<?php
//##copyright##

if (iaView::REQUEST_JSON == $iaView->getRequestType())
{
	$error = false;

	if (isset($_POST['action']) && isset($_POST['qaptcha_key']))
	{
		$_SESSION['qaptcha_key'] = false;

		if ('qaptcha' == htmlentities($_POST['action'], ENT_QUOTES, 'UTF-8'))
		{
			$_SESSION['qaptcha_key'] = $_POST['qaptcha_key'];
		}
		else
		{
			$error = true;
		}
	}
	else
	{
		$error = true;
	}

	$iaView->assign(array('error' => $error));
}