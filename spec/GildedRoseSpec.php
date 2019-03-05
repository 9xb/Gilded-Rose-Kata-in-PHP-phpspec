<?php

namespace spec;

use GildedRose;
use Item;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GildedRoseSpec extends ObjectBehavior
{

    public function it_reduces_sell_in_of_normal_items_each_day()
    {
        $item = new Item('Orc Battle Axe', 3, 10);
        $this->beConstructedWith($item);
        $this->getItem()->sell_in->shouldBe(2);
    }

    public function it_reduces_quality_of_normal_items_each_day()
    {
        $item = new Item('Orc Battle Axe', 3, 10);
        $this->beConstructedWith($item);
        $this->getItem()->quality->shouldBe(9);
    }

    public function it_increases_the_quality_of_aged_brie_each_day()
    {
        $item = new Item('Aged Brie', 3, 10);
        $this->beConstructedWith($item);
        $this->getItem()->quality->shouldBe(11);
    }

}
