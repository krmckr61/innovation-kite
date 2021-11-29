<?php

namespace Tests\Unit;

use App\Library\TextToDigit;
use PHPUnit\Framework\TestCase;

class TextToDigitTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_text_to_digits()
    {
        $textToDigit = new TextToDigit('one hundred and fifty six million three hundred and twenty five thousand eight hundred and seventy nine');
        $this->assertEquals(156325879, $textToDigit->convert());
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_text_to_digits2()
    {
        $textToDigit = new TextToDigit('One hundred twenty four thousand three hundred and fifty');
        $this->assertEquals(124350, $textToDigit->convert());
    }
}
