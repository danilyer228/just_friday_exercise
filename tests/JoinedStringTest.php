<?php
/**
 * Created by PhpStorm.
 * User: danilyer
 * Date: 15.05.20
 * Time: 14:30
 */

namespace Otis22\PhpSkelleton\Tests;

use Otis22\PhpSkelleton\JoinedString;
use Otis22\PhpSkelleton\Test;
use PHPUnit\Framework\TestCase;

class JoinedStringTest extends TestCase
{

    public function testJoinedString()
    {
        $result = new JoinedString('|', ['a','b','c']);
        $this->assertEquals('a|b|c', strval($result));
    }
}
