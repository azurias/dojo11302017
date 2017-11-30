<?php
/**
 * Created by PhpStorm.
 * User: wilder15
 * Date: 30/11/17
 * Time: 09:49
 */

namespace Wcs;


class UcWord
{
    public function ucWordRewriting(string $sentence,string $delimiter = ' '): string
    {
        $words = explode($delimiter,$sentence);

        $result = [];
        foreach ($words as $word) {
            $result[] = ucfirst($word);
        }

        return implode(' ', $result);

    }



    public function snakeRewriting(string $snake, string $delimiter = '_'): string
    {

        $snakes = $this->ucWordRewriting($snake,$delimiter);
        $snake = str_replace(' ','',lcfirst($snakes));

        return $snake;

    }
}