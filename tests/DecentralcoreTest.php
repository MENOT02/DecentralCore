<?php
/**
 * Tests for DecentralCore
 */

use PHPUnit\Framework\TestCase;
use Decentralcore\Decentralcore;

class DecentralcoreTest extends TestCase {
    private Decentralcore $instance;

    protected function setUp(): void {
        $this->instance = new Decentralcore(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Decentralcore::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
