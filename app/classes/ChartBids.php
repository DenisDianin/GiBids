<?php

namespace app\classes;

class ChartBids implements VisualBids
{
    private $dataBids;

    public function __construct($dataBids)
    {
        $this->dataBids = $dataBids;
    }

    public function getData()
    {
        return json_encode($this->dataBids);
    }

    public function getView()
    {
        return 'vue_chart';
    }
}
