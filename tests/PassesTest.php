<?php

namespace GildedRoseTests;

class PassesTest extends TestBase
{
    private $item = 'Backstage passes to a TAFKAL80ETC concert';

    public function testUpdatePassesWellBeforeSellBy()
    {
        $item = $this->getUpdatedItem($this->item, 20, 10);

        $this->assertEquals(19, $item->sell_in);
        $this->assertEquals(11, $item->quality);
    }

    public function testUpdatePassesCloseToSellBy()
    {
        $item = $this->getUpdatedItem($this->item, 10, 10);

        $this->assertEquals(9, $item->sell_in);
        $this->assertEquals(12, $item->quality);
    }

    public function testUpdatePassesVeryCloseToSellBy()
    {
        $item = $this->getUpdatedItem($this->item, 5, 10);

        $this->assertEquals(4, $item->sell_in);
        $this->assertEquals(13, $item->quality);
    }

    public function testUpdatePassesOnSellBy()
    {
        $item = $this->getUpdatedItem($this->item, 0, 10);

        $this->assertEquals(-1, $item->sell_in);
        $this->assertEquals(0, $item->quality);
    }

    public function testUpdatePassesAfterSellBy()
    {
        $item = $this->getUpdatedItem($this->item, -1, 0);

        $this->assertEquals(-2, $item->sell_in);
        $this->assertEquals(0, $item->quality);
    }

    public function testUpdatePassesWithMaximumQualityWellBeforeSellBy()
    {
        $item = $this->getUpdatedItem($this->item, 20, 50);

        $this->assertEquals(19, $item->sell_in);
        $this->assertEquals(50, $item->quality);
    }

    public function testUpdatePassesWithMaximumQualityCloseToSellBy()
    {
        $item = $this->getUpdatedItem($this->item, 10, 50);

        $this->assertEquals(9, $item->sell_in);
        $this->assertEquals(50, $item->quality);
    }

    public function testUpdatePassesWithMaximumQualityVeryCloseToSellBy()
    {
        $item = $this->getUpdatedItem($this->item, 5, 50);

        $this->assertEquals(4, $item->sell_in);
        $this->assertEquals(50, $item->quality);
    }

    public function testUpdatePassesWithMaximumQualityOnSellBy()
    {
        $item = $this->getUpdatedItem($this->item, 0, 50);

        $this->assertEquals(-1, $item->sell_in);
        $this->assertEquals(0, $item->quality);
    }

    public function testUpdatePassesWithAlmostMaximumQualityWellBeforeSellBy()
    {
        $item = $this->getUpdatedItem($this->item, 20, 49);

        $this->assertEquals(19, $item->sell_in);
        $this->assertEquals(50, $item->quality);
    }

    public function testUpdatePassesWithAlmostMaximumQualityCloseToSellBy()
    {
        $item = $this->getUpdatedItem($this->item, 10, 49);

        $this->assertEquals(9, $item->sell_in);
        $this->assertEquals(50, $item->quality);
    }

    public function testUpdatePassesWithAlmostMaximumQualityVeryCloseToSellBy()
    {
        $item = $this->getUpdatedItem($this->item, 5, 49);

        $this->assertEquals(4, $item->sell_in);
        $this->assertEquals(50, $item->quality);
    }

    public function testUpdatePassesWithAlmostMaximumQualityOnSellBy()
    {
        $item = $this->getUpdatedItem($this->item, 0, 49);

        $this->assertEquals(-1, $item->sell_in);
        $this->assertEquals(0, $item->quality);
    }
}
