<?php
/**
 * Created by PhpStorm.
 * User: morakot
 * Date: 02.03.19
 * Time: 20:55
 */

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