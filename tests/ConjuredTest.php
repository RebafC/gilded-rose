<?php

namespace GildedRoseTests;

class ConjuredTest extends TestBase
{
    private $item = 'Conjured Mana Cake';

    public function testUpdateConjuredBeforeSellBy()
    {
        $item = $this->getUpdatedItem($this->item, 1, 10);

        $this->assertEquals(0, $item->sell_in);
        $this->assertEquals(8, $item->quality);
    }

    public function testUpdateConjuredOnSellBy()
    {
        $item = $this->getUpdatedItem($this->item, 0, 10);

        $this->assertEquals(-1, $item->sell_in);
        $this->assertEquals(6, $item->quality);
    }

    public function testUpdateConjuredAfterSellBy()
    {
        $item = $this->getUpdatedItem($this->item, -1, 10);

        $this->assertEquals(-2, $item->sell_in);
        $this->assertEquals(6, $item->quality);
    }

    public function testUpdateConjuredWithZeroQuality()
    {
        $item = $this->getUpdatedItem($this->item, 10, 0);

        $this->assertEquals(9, $item->sell_in);
        $this->assertEquals(0, $item->quality);
    }
}
