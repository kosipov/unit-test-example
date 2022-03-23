<?php

namespace Kosipov\StringTests\Tests\Unit;

use Kosipov\StringTests\StringOperation;
use PHPUnit\Framework\TestCase;

class StringOperationTest extends TestCase
{
    public function testRevertString_PassedAbc_ReturnCba()
    {
        $strOp = new StringOperation("abc");

        self::assertEquals($strOp->revertString(), "cba");
    }
}
