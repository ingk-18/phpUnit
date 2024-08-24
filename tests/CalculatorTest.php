<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../Calculator.php'; // 追加

class CalculatorTest extends TestCase {
    public function testAdd() {
        // Arrange: テストの準備
        $calculator = new Calculator();
        
        // Act: 実際の操作
        $result = $calculator->add(2, 3);
        
        // Assert: 結果の検証
        $this->assertEquals(5, $result);
    }
}