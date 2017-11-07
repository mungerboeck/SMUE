<?php
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 07.11.2017
 * Time: 09:12
 */



abstract class Film
{
    private $name;
    private $rating;

    public function __construct(string $name,float $rating)
    {
        $this->$name = $name;
        $this->$rating = $rating;

    }

    public function __toString(): string
    {
        return ;
    }


    public function getname(): string
    {
        return $this->name;
    }
    public function getrating(): string
    {
        return $this->rating;
    }
}
