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

class NullSort implements StrategyInterface
{
    /**
     * @param array $data
     * @return array|null
     *
     */
    public function sortAlgorithm(array $data)
    {
        return $data = null;
    }
}
