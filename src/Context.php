<?php

/*
 * This file is part of the "trainingsortinglibrary-project" package.
 *
 * (c) Oksentiuk Viktor <oksentiuk.viktor@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App;

class Startegy
{
    /**
     * @var StrategyInterface
     */
    private $strategy;

    /**
     * Context constructor.
     *
     * @param StrategyInterface $strategy
     */
    public function __construct(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @param StrategyInterface $strategy
     *
     * @return StrategyInterface
     */
    public function setStrategy(StrategyInterface $strategy)
    {
        return $this->strategy = $strategy;
    }

    /**
     * @param array $data
     *
     * @return array
     */
    public function sorting(array $data)
    {
        $result = $this->strategy->sortAlgorithm($data);

        return  $result;
    }
}
