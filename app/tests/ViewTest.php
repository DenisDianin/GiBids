<?php

use PHPUnit\Framework\TestCase;

class ViewTest extends TestCase
{
    public function testRenderIndex()
    {
        // File path
        $filePath = __DIR__ . '/../../templates/index.phtml';
        // Check file availability
        $this->assertFileExists($filePath);
    }
}
