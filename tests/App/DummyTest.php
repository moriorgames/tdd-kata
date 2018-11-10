<?php

use App\Dummy;
use PHPUnit\Framework\TestCase;

class DummyTest extends TestCase
{
    public function test_is_able_to_test_dummy_class()
    {
        $sut = new Dummy;

        $result = $sut->isValid();

        $this->assertTrue($result);
    }
}