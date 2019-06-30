<?php

require_once __DIR__ . '/../classes/DataBids.php';

use PHPUnit\Framework\TestCase;
use app\classes\DataBids;

class DataBidsTest extends TestCase
{
    public function testPath()
    {
        $this->assertFileExists(DataBids::$dataPath);
    }

    public function testJSON()
    {
        $dataJSON = json_decode(file_get_contents(DataBids::$dataPath), true);
        $this->assertTrue(is_array($dataJSON));
    }
    
    public function testArr()
    {
        $dataArr = json_decode(file_get_contents(DataBids::$dataPath), true);
        $this->assertArrayHasKey('Columns', $dataArr);
        $this->assertArrayHasKey('Rows', $dataArr);
    }
}
