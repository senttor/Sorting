<?php

namespace App;


class Context
{
    /**
     * @var StrategyInterface
     */
private $strategy;

    /**
     * Context constructor.
     * @param StrategyInterface $strategy
     */
public function __construct(StrategyInterface $strategy)
{
    $this->strategy = $strategy;
}

    /**
     * @param StrategyInterface $strategy
     * @return StrategyInterface
     */
public function getStrategy(StrategyInterface $strategy)
{
        return $this->strategy = $strategy;
}

    /**
     * @param array $data
     * @return array
     */
public function Sorting(array $data)
{
    $result = $this->strategy->sortAlgorithm($data);

    return  $result;
}
}
