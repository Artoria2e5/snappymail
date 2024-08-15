<?php

use SnappyMail\SensitiveString;

class ChangePasswordEwomailDriver 
{

	const
		NAME = 'Ewomail',
		DESCRIPTION = 'Change passwords using ewomail.';

	public static function isSupported() : bool
	{
		return true;
	}

	public static function configMapping() : array
	{
		return array();
	}

	public function ChangePassword(\RainLoop\Model\Account $oAccount, SensitiveString $sPrevPassword, SensitiveString $sNewPassword): bool
	{
	    $ewomail = new \RainLoop\EwoMail();
        $data = $ewomail->updatePassword($oAccount->Email(), $sPrevPassword->getValue(), $sNewPassword->getValue());
        if ($data['status']){
            return true;
        }
	    return false;
	}
}