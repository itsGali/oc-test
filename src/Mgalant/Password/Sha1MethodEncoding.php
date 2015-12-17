<?php

namespace Mgalant\Password;

use Jkan\Component\Password\EncodingMethod;

class Sha1MethodEncoding implements EncodingMethod
{
	public function encode($tekst)
	{
		return sha1($tekst);	
	}
}