<?php

abstract class Bicycle
{
    private $size;
    private $chain;
    private $tireSize;

    public function __construct($size, $chain = null, $tireSize = null)
    {
        $this->size = $size;
        $this->chain = $chain == null ? $this->defaultChain() : $chain;
        $this->tireSize = $tireSize == null ? $this->defaultTireSize() : $tireSize;
    }

    abstract function defaultTireSize();

    protected function defaultChain()
    {
        return '10-speed';
    }

    public function spares()
    {
        return [
            'chain' => $this->chain,
            'tireSize' => $this->tireSize,
        ];
    }
}