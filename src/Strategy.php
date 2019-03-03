<?php

/*
 * This file is part of the "trainingsortinglibrary-project" package.
 *
 * (c) Oksentiuk Viktor <oksentiuk.viktor@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vendor\Sorting;

use phpDocumentor\Reflection\Types\Object_;

class Strategy
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
    public function setStrategy(StrategyInterface $strategy): object //PHP 7 return value
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
        $data = $data ?? $data = []; //used php 7.0 syntax
        $result = $this->strategy->sortAlgorithm($data);

        return  $result;
    }
}