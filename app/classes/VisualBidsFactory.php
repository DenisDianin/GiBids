<?php 

namespace app\classes;

class VisualBidsFactory
{
    public static function makeChartBids($dataBids): VisualBids
    {
        return new ChartBids($dataBids);
    }

    public static function makeTableBids($dataBids): VisualBids
    {
        return new TableBids($dataBids);
    }
}