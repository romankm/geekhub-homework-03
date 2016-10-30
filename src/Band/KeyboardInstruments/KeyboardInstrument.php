<?php
namespace Band\KeyboardInstruments;

use Band\Instruments\MusicalInstrument;

/**
 * Class KeyboardInstrument
 */
class KeyboardInstrument extends MusicalInstrument
{
    function makeSound()
    {
        return 'key sound';
    }
}
