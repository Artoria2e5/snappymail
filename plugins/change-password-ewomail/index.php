<?php

class ChangePasswordEwomailPlugin extends \RainLoop\Plugins\AbstractPlugin
{
	const
		NAME = 'Change Password Ewomail',
		VERSION = '1.15.1-ng',
		RELEASE = '2024-08-15',
		REQUIRED = '2.36.0',
		CATEGORY = 'Security',
		DESCRIPTION = 'Extension to allow users to change their passwords through Ewomail';

	/**
	 * @return string
	 */
	public function Supported(): string
	{
		return '';
	}

	/**
	 * @return array
	 */
	protected function configMapping(): array
	{
		return [];
	}
}