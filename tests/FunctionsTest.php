<?php
namespace Tests;

use App\Exception\UnexpectedNonNumericException;
use App\Functions;
use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{

    /**
     * @test
     */
    public function shouldReturnArrayTotal()
    {
        //arrange
        $items = [1,2,5];
        //act
        $total = Functions::sumArrays( $items );
        //assert
        $this->assertEquals( 8, $total );
    }

    /**
     * @test
     */
    public function shouldReturnZeroWhenIsEmpty()
    {
        //arrange
        $items = [];
        //act
        $total = Functions::sumArrays( $items );
        //assert
        $this->assertEquals( 0, $total );
    }

    /**
     * @test
     */
    public function shouldGetErrorWheIsNotANumber()
    {
        $items = [ 'teste01', 'test02'];

        $this->expectException( UnexpectedNonNumericException::class );

        $total = Functions::sumArrays( $items );
    }

}