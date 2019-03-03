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

class DescSorting implements StrategyInterface
{
    /**
     * @param array $data
     *
     * @return array
     *
     * method for Desc sorting arrays
     */
    public function sortAlgorithm(array $data)
    {
        \arsort($data);

        return $data;
    }
}
