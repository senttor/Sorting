<?php


namespace App;


interface StrategyInterface
{
    /**
     * @param array $data
     * @return array
     */
public function sortAlgoritm (array $data): array;
}