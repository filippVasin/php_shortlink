<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use ShortLink;

class ShortLinkTest extends  TestCase
{

    public function testCheckTrue(){
        $this->assertTrue(is_array(ShortLink::checkLongUrl('http://ya.ru/')));
    }

    public function testCheckFalse(){
        $this->assertFalse(ShortLink::checkLongUrl('http://example.com/'));
    }


    public function testCheckCode(){
        $this->assertEquals('8X',ShortLink::generationShortCode(555));
    }


    public function testCheckClearURL(){
        $this->assertEquals('example.com/index.php?id=4',ShortLink::clearUrl('http://www.example.com/index.php?id=4'));
    }

}
