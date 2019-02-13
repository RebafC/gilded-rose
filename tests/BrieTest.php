<?php

namespace GildedRoseTests;

class BrieTest extends TestBase
{
    private $item = 'Aged Brie';

    public function testUpdateBrieBeforeSellBy()
    {
        $item = $this->getUpdatedItem($this->item, 1, 10);

        $this->assertEquals(0, $item->sell_in);
        $this->assertEquals(11, $item->quality);
    }

    public function testUpdateBrieOnSellBy()
    {
        $item = $this->getUpdatedItem($this->item, 0, 10);

        $this->assertEquals(-1, $item->sell_in);
        $this->assertEquals(12, $item->quality);
    }

    public function testUpdateBrieAfterSellBy()
    {
        $item = $this->getUpdatedItem($this->item, -1, 10);

        $this->assertEquals(-2, $item->sell_in);
        $this->assertEquals(12, $item->quality);
    }

    public function testUpdateBrieWithMaximumQualityBeforeSellBy()
    {
        $item = $this->getUpdatedItem($this->item, 10, 50);

        $this->assertEquals(9, $item->sell_in);
        $this->assertEquals(50, $item->quality);
    }

    public function testUpdateBrieWithMaximumQualityOnSellBy()
    {
        $item = $this->getUpdatedItem($this->item, 0, 50);

        $this->assertEquals(-1, $item->sell_in);
        $this->assertEquals(50, $item->quality);
    }

    public function testUpdateBrieWithMaximumQualityAfterSellBy()
    {
        $item = $this->getUpdatedItem($this->item, -1, 50);

        $this->assertEquals(-2, $item->sell_in);
        $this->assertEquals(50, $item->quality);
    }

    public function testUpdateBrieWithAlmostMaximumQualityBeforeSellBy()
    {
        $item = $this->getUpdatedItem($this->item, 10, 49);

        $this->assertEquals(9, $item->sell_in);
        $this->assertEquals(50, $item->quality);
    }

    public function testUpdateBrieWithAlmostMaximumQualityOnSellBy()
    {
        $item = $this->getUpdatedItem($this->item, 0, 49);

        $this->assertEquals(-1, $item->sell_in);
        $this->assertEquals(50, $item->quality);
    }

    public function testUpdateBrieWithAlmostMaximumQualityAfterSellBy()
    {
        $item = $this->getUpdatedItem($this->item, -1, 49);

        $this->assertEquals(-2, $item->sell_in);
        $this->assertEquals(50, $item->quality);
    }
}
