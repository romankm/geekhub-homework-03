<?php
namespace Band\StringInstruments;

/**
 * Class Guitar
 */
class Guitar extends StringInstrument
{
    /**
     * @return int
     */
    function getNumberOfStrings()
    {
        return 6;
    }
}
