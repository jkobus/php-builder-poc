<?php

namespace App;

final class Car
{
    private string $model;
    private string $make;
    private string $year;

    private function __construct()
    {
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getMake()
    {
        return $this->make;
    }

    public function getYear()
    {
        return $this->year;
    }
}