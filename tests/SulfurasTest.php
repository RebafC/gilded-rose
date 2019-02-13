<?php

namespace GildedRoseTests;

class SulfurasTest extends TestBase
{
    private $item = 'Sulfuras, Hand of Ragnaros';

    public function testUpdateSulfurasBeforeSellBy()
    {
        $item = $this->getUpdatedItem($this->item, 1, 80);

        $this->assertEquals(1, $item->sell_in);
        $this->assertEquals(80, $item->quality);
    }

    public function testUpdateSulfurasOnSellBy()
    {
        $item = $this->getUpdatedItem($this->item, 0, 80);

        $this->assertEquals(0, $item->sell_in);
        $this->assertEquals(80, $item->quality);
    }

    public function testUpdateSulfurasAfterSellBy()
    {
        $item = $this->getUpdatedItem($this->item, -1, 80);

        $this->assertEquals(-1, $item->sell_in);
        $this->assertEquals(80, $item->quality);
    }
}
