<?php

namespace GildedRoseTests;

class StandardTest extends TestBase
{
    private $item = '+5 Dexterity Vest';

    public function testUpdateStandardBeforeSellBy()
    {
        $item = $this->getUpdatedItem($this->item, 1, 10);

        $this->assertEquals(0, $item->sell_in);
        $this->assertEquals(9, $item->quality);
    }

    public function testUpdateStandardOnSellBy()
    {
        $item = $this->getUpdatedItem($this->item, 0, 10);

        $this->assertEquals(-1, $item->sell_in);
        $this->assertEquals(8, $item->quality);
    }

    public function testUpdateStandardAfterSellBy()
    {
        $item = $this->getUpdatedItem($this->item, -1, 10);

        $this->assertEquals(-2, $item->sell_in);
        $this->assertEquals(8, $item->quality);
    }

    public function testUpdateStandardWithZeroQuality()
    {
        $item = $this->getUpdatedItem($this->item, 10, 0);

        $this->assertEquals(9, $item->sell_in);
        $this->assertEquals(0, $item->quality);
    }
}
