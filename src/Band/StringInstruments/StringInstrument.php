<?php
namespace Band\StringInstruments;

use Band\Instruments\MusicalInstrument;

abstract class StringInstrument extends MusicalInstrument
{
    abstract function getNumberOfStrings();

    function makeSound()
    {
        return 'string sound';
    }
}
