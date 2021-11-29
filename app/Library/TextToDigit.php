<?php

namespace App\Library;

class TextToDigit
{

    /**
     * Numbers
     */
    private $numbers = [
        'a' => 1,
        'one' => 1,
        'two' => 2,
        'three' => 3,
        'four' => 4,
        'five' => 5,
        'six' => 6,
        'seven' => 7,
        'eight' => 8,
        'nine' => 9,
        'ten' => 10,
        'eleven' => 11,
        'twelve' => 12,
        'thirteen' => 13,
        'fourteen' => 14,
        'fifteen' => 15,
        'sixteen' => 16,
        'seventeen' => 17,
        'eighteen' => 18,
        'nineteen' => 19,
        'twenty' => 20,
        'thirty' => 30,
        'fourty' => 40,
        'fifty' => 50,
        'sixty' => 60,
        'seventy' => 70,
        'eighty' => 80,
        'ninety' => 90
    ];

    /**
     * Figures
     */
    private $figures = [
        'billion' => 1000000000,
        'million' => 1000000,
        'thousand' => 1000,
        'hundred' => 100
    ];

    /**
     * Format text for calculations
     *
     * @param string $text
     */
    public function __construct(string $text)
    {
        $text = strtolower(trim($text));
        $this->words = explode(' ', $text);
        krsort($this->words);
        $this->words = array_values($this->words);
    }

    /**
     * If the word was declared in $numbers return true
     *
     * @param string $word
     * @return bool
     */
    private function isNumber(string $word): bool
    {
        if (isset($this->numbers[$word]))
            return true;
        return false;
    }

    /**
     * If the word was declared in $figures return true
     *
     * @param string $word
     * @return bool
     */
    private function isFigure(string $word): bool
    {
        if (isset($this->figures[$word]))
            return true;
        return false;
    }

    /**
     * Sum numbers after convert words to numbers
     * It returns the final value
     *
     * @return int
     */
    public function convert(): int
    {
        $result = 0;

        $coefficient = 1;
        $lastCoefficient = 1;

        for ($i = 0; $i < count($this->words); $i++) {
            $word = $this->words[$i];

            if ($this->isNumber($word)) {
                $result += $this->numbers[$word] * $coefficient;
            } else if ($this->isFigure($word)) {
                if ($lastCoefficient < $this->figures[$word]) {
                    //if last coefficient smaller than current coefficient
                    $coefficient = $this->figures[$word];
                } else {
                    //otherwise last and current coefficients are interconnected
                    $coefficient *= $this->figures[$word];
                }
                $lastCoefficient = $this->figures[$word];
            }
        }

        return $result;
    }

}
