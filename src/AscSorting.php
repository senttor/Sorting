<?php

/*
 * This file is part of the "trainingsortinglibrary-project" package.
 *
 * (c) Oksentiuk Viktor <oksentiuk.viktor@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Senttor\Sorting;

class AscSorting implements StrategyInterface
{
    /**
     * @param array $data
     *
     * @return array
     *
     * method for Asc sorting arrays
     */
    public function sortAlgorithm(array $data)
    {
        \asort($data);

        return $data;
    }
}
