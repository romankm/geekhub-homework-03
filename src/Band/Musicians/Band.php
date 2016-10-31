<?php
namespace Band\Musicians;

/**
 * Class Band
 */
class Band implements \Countable
{
    /**
     * @var array|Musician[]
     */
    private $musicians = [];

    /**
     * @param Musician $musician
     */
    public function addMusician(Musician $musician)
    {
        $this->musicians[] = $musician;
    }

    /**
     * @return string
     */
    public function play()
    {
        $song = '';

        foreach ($this->musicians as $musician) {
            $song .= $musician->play();
        }

        return $song;
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->musicians);
    }
}
