<?php

namespace App\Exception;

class UnexpectedNonNumericException extends \UnexpectedValueException
{
    public function __construct( $item )
    {
        parent::__construct( "${item} should be a numeric!");
    }
}