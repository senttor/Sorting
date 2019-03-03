<?php


namespace App;


class AscSorting implements StrategyInterface
{
    /**
     * @param array $data
     * @return array
     */
public function sortAlgorithm(array $data)
{
    asort($data);
    return $data;
}
}