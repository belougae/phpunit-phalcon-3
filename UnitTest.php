<?php

namespace Test;

use Phalcon\Test\UnitTestCase;

class UnitTest extends UnitTestCase
{

    public function testTestCase()
    {
        $this->assertEquals(
            "works",
            "works",
            "This is OK"
        );

        $this->assertEquals(
            "works",
            "works1",
            "This will fail"
        );
    }
}