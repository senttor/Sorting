<?php


namespace App;


class NullSort implements StrategyInterface
{
public function sortAlgorithm(array $data)
{
  return $data = NULL;
}
}