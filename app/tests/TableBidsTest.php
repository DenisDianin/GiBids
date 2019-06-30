<?php

require_once __DIR__ . '/../classes/VisualBids.php';
require_once __DIR__ . '/../classes/TableBids.php';

use PHPUnit\Framework\TestCase;
use app\classes\ {DataBids, TableBids,  VisualBids};

class TableBidsTest extends TestCase
{
    protected function setUp()
    {
        $this->tableBids = new TableBids(DataBids::getData());
    }

    public function testGetView()
    {
        // File path
        $filePath = __DIR__ . '/../../templates/partials/' . $this->tableBids->getView() . '.phtml';
        // Check file availability
        $this->assertFileExists($filePath);
    }

    protected function tearDown()
    {
        $this->tableBids = NULL;
    }
}
