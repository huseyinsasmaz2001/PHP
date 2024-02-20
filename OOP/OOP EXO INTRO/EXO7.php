<?php

declare(strict_types=1);

// Define the Beverage class
class Beverage 
{
    private $name;
    private $color;
    private $price;
    private $temperature;
    const BARNAME = 'JUPITER';
    private static $address = "Melkmarkt 9, 2000 Antwerpen";

    public function __construct(string $name, string $color, float $price, string $temperature = "cold")
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature; 
    }

    public function useConstant(): string
    {
        return "This beverage is served at " . self::BARNAME; 
    }

    public static function getAddress(): string
    {
        return self::$address; 
    }
}

echo Beverage::getAddress() . "<br>";

$className = 'Beverage';
echo $className::getAddress() . "<br>";