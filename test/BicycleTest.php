<?php
/**
 * Created by PhpStorm.
 * User: Valentin Boyanov
 */

namespace Test;

use MountainBike;
use RoadBike;
use PHPUnit\Framework\TestCase;

class BicycleTest extends TestCase
{
    /**
     * @test
     */
    public function has_appropriate_spares_for_mountain_bike()
    {
        //Arrange
        $bicycle = new MountainBike('S', 'rock shox reba', 'FOX');

        $expectedSpares = [
            'chain' => '10-speed',
            'tireSize' => '2.1',
            'frontShock' => 'rock shox reba',
            'rearShock' => 'FOX'
        ];

        //Act
        $spares = $bicycle->spares();

        //Assert
        $this->assertSame($expectedSpares, $spares);
    }

    /**
     * @test
     */
    public function has_appropriate_spares_for_road_bike()
    {
        //Arrange
        $bicycle = new RoadBike('56', 'green');

        $expectedSpares = [
            'chain' => '10-speed',
            'tireSize' => '23',
            'tapeColor' => 'green'
        ];

        //Act
        $spares = $bicycle->spares();

        //Assert
        $this->assertSame($expectedSpares, $spares);
    }
}