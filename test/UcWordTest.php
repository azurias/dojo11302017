<?php
/**
 * Created by PhpStorm.
 * User: wilder15
 * Date: 30/11/17
 * Time: 09:50
 */
use PHPUnit\Framework;

class UcWordTest extends Framework\TestCase
{
    public function testUcWordRewriting()
    {
        $stringRewriting = new \Wcs\UcWord();
        $this->assertEquals('Bonjour',$stringRewriting->ucWordRewriting('bonjour'));
        $this->assertEquals('Bonjour Madame',$stringRewriting->ucWordRewriting('bonjour madame'));

    }
    public function testSnakeRewriting()
    {
        $snakeToCamelCase = new \Wcs\UcWord();
        $this->assertEquals('maSuper',$snakeToCamelCase->snakeRewriting('ma_super'));
        $this->assertEquals('maSuperVariable',$snakeToCamelCase->snakeRewriting('ma_super_variable'));

    }
}
