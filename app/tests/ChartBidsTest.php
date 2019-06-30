<?php

require_once __DIR__ . '/../classes/VisualBids.php';
require_once __DIR__ . '/../classes/ChartBids.php';

use PHPUnit\Framework\TestCase;
use app\classes\ {DataBids, ChartBids,  VisualBids};

class ChartBidsTest extends TestCase
{
    protected function setUp()
    {
        $this->chartBids = new ChartBids(DataBids::getData());
    }

    public function testGetView()
    {
        // File path
        $filePath = __DIR__ . '/../../templates/partials/' . $this->chartBids->getView() . '.phtml';
        // Check file availability
        $this->assertFileExists($filePath);
    }

    protected function tearDown()
    {
        $this->chartBids = NULL;
    }
}
