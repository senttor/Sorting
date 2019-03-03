<?php


namespace App;


class DescSorting implements StrategyInterface
{
    /**
     * @param array $data
     * @return array
     */
public function sortAlgorithm(array $data)
{
   arsort($data);

    return $data;
}
}