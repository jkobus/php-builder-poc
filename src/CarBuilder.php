<?php

namespace App;

use Closure;

class CarBuilder
{
    public string $model;
    public string $year;
    public string $make;

    public static function create(): self
    {
        return new self();
    }

    public function withModel(string $model): self
    {
        $this->model = $model;
        return $this;
    }

    public function withYear(string $year): self
    {
        $this->year = $year;
        return $this;
    }

    public function withMake(string $make): self
    {
        $this->make = $make;
        return $this;
    }

    public function build(): Car
    {
        /** @var Car $object */
        $object = (new \ReflectionClass(Car::class))->newInstanceWithoutConstructor();

        $fn = Closure::bind(function(CarBuilder $builder){
            /** @var $this Car */

            $this->model = $builder->model;
            $this->year = $builder->year;
            $this->make = $builder->make;

            return $this;

        }, $object, Car::class);

        return $fn($this);
    }
}