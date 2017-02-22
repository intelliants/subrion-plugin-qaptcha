<?php
/******************************************************************************
 *
 * Subrion - open source content management system
 * Copyright (C) 2017 Intelliants, LLC <https://intelliants.com>
 *
 * This file is part of Subrion.
 *
 * Subrion is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Subrion is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Subrion. If not, see <http://www.gnu.org/licenses/>.
 *
 *
 * @link https://subrion.org/
 *
 ******************************************************************************/

class iaCaptcha extends abstractUtil
{
	var $captcha = null;
	var $config = null;

	public function getImage()
	{
		$iaCore = iaCore::instance();

		return $iaCore->iaView->iaSmarty->fetch(IA_MODULES . 'qaptcha/templates/front/index.tpl');
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

		return $iaCore->iaView->iaSmarty->fetch(IA_MODULES . 'qaptcha/templates/front/index.tpl');
	}
}