<?php

namespace Tests;

use Mgalant\Password\Sha1MethodEncoding;
use Jkan\Component\Password\Encoder;
use Jkan\Component\Password\Method\Md5Encoding;

class EncodingMethodTest extends \PHPUnit_Framework_TestCase
{
    const PASSWORD = 'MateuszGalant';

    public function testMd5Encoding()
    {
        $method = new Md5Encoding();
        $encoder = new Encoder($method);

        $this->assertEquals(
            '6870680841d8274bdf54f99640e4f1c3',
            $encoder->encodePassword(self::PASSWORD)
        );
    }

    public function testSha1Encoding()
    {
		$method = new Sha1MethodEncoding();
		$encoder = new Encoder($method);
		$this->assertEquals(
            '8610bab963e355c7fb3b16cf559852d3e98770ff',
            $encoder->encodePassword(self::PASSWORD)
        );
    }
}