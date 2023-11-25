<?php


class CalculatorTest extends PHPUnit\Framework\TestCase
{
    public function testAdd()
    {
        $calculator = new App\Calculator();

        // Teste si l'addition fonctionne correctement
        $this->assertEquals(4, $calculator->add(2, 2));

        // Teste si l'addition fonctionne avec des nombres négatifs
        $this->assertEquals(-2, $calculator->add(2, -4));

        // Ajoutez d'autres tests selon vos besoins
    }
}
?>