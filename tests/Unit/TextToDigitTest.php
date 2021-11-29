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
        $textToDigit = new TextToDigit('ninety thousand thirty seven');
        $this->assertEquals(90037, $textToDigit->convert());
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

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_text_to_digits3()
    {
        $textToDigit = new TextToDigit('nine hundred fifty six billion three hundred and twenty five million eight hundred and seventy nine thousand six hundred and fifty eight');
        $this->assertEquals(956325879658, $textToDigit->convert());
    }
}
