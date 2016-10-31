<?php
namespace Band\Musicians;

use Band\Instruments\MusicalInstrument;

/**
 * Class Musician
 */
class Musician
{
    /**
     * @var MusicalInstrument
     */
    private $musicalInstrument;

    /**
     * @param MusicalInstrument $musicalInstrument
     */
    public function __construct(MusicalInstrument $musicalInstrument)
    {
        $this->musicalInstrument = $musicalInstrument;
    }

    /**
     * @return string
     */
    public function play()
    {
        return $this->musicalInstrument->makeSound();
    }
}
