<?php 

namespace app\classes;

class TableBids implements VisualBids
{
    private $dataBids;

    public function __construct($dataBids)
    {
        $this->dataBids = $dataBids;
    }

    public function getData()
    {
        return json_decode($this->dataBids, true);
    }

    public function getView()
    {
        return 'bs_table';
    }
}
