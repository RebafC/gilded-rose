<?php

namespace GildedRose\Items;

class ConjuredItem extends StandardItem
{
    protected function updateQuality()
    {
        if ($this->sell_in > 0) {
            $this->quality -= 2;
        } else {
            $this->quality -= 4;
        }

        if ($this->quality < 0) {
            $this->quality = 0;
        }
    }
}
