<?php

namespace GildedRoseTests;

use PHPUnit\Framework\TestCase;

require('src/gilded_rose.php');

class TestBasePrevious extends TestCase
{
    protected function getUpdatedItem($name, $sell_in, $quality)
    {
        $item = new \Item($name, $sell_in, $quality);

        $app = new \GildedRose([$item]);
        $app->update_quality();

        return $item;
    }
}
