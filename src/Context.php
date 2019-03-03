<?php
/**
 * Created by PhpStorm.
 * User: morakot
 * Date: 02.03.19
 * Time: 20:59
 */

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
