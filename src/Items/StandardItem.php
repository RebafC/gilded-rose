<?php

namespace GildedRose\Items;

use GildedRose\Item;

class StandardItem extends Item
{
    public function update()
    {
        $this->updateQuality();
        $this->updateSellIn();
    }

    protected function updateQuality()
    {
        if ($this->sell_in > 0) {
            $this->quality -= 1;
        } else {
            $this->quality -= 2;
        }

        if ($this->quality < 0) {
            $this->quality = 0;
        }
    }

    final protected function updateSellIn()
    {
        $this->sell_in -= 1;
    }
}
