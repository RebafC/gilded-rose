<?php

namespace GildedRoseTests;

use PHPUnit\Framework\TestCase;
use GildedRose\App;

class TestBase extends TestCase
{
    protected function getUpdatedItem($name, $sell_in, $quality)
    {
        $class = App::getItemClass($name);

        $item = new $class($name, $sell_in, $quality);

        $app = new App([$item]);

        $app->updateQuality();

        return $item;
    }
}
