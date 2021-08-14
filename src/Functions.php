<?php
namespace App;

use App\Exception\UnexpectedNonNumericException;

class Functions
{
    public static function sumArrays( array $elements ): float
    {
        $total = 0;
        foreach ( $elements as $element ) {
            if ( !is_numeric( $element ) ) {
                throw new UnexpectedNonNumericException( $element );
            }
            $total += $element;
        }

        return floatval( $total );
    }
}