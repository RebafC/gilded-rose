<?php

namespace GildedRose;

class App
{
    private $items;

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function updateQuality()
    {
        foreach ($this->items as $item) {
            $item->update();
        }
    }

    public static function getItemClass($itemName)
    {
        $itemClasses = [
            'Aged Brie' => Items\BrieItem::class,
            'Sulfuras, Hand of Ragnaros' => Items\SulfurasItem::class,
            'Backstage passes to a TAFKAL80ETC concert' => Items\PassesItem::class,
            'Conjured Mana Cake' => Items\ConjuredItem::class,
        ];

        if (isset($itemClasses[$itemName])) {
            $class = $itemClasses[$itemName];
        } else {
            $class = Items\StandardItem::class;
        }

        return $class;
    }
}
