<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    public function test_email()
    {
	$result = validate_email('leo@leo.com');
        $this->assertTrue($result);

	$result = validate_email('leo@@leo.com');
        $this->assertFalse($result);
    }
}
