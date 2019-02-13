<?php

namespace GildedRose\Items;

class SulfurasItem extends StandardItem
{
    public function update()
    {
        $this->updateQuality();
    }

    protected function updateQuality()
    {
        $this->quality = 80;
    }
}
