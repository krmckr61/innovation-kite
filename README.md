Hello,

I have completed the task you requested.

The class you want me to develop is App/Library/TextToDigit.php .

This class works completely independently of Laravel. I only developed it with Laravel 8 so that processes such as building and writing unit tests do not take long.

<b>Usage Example</b><br>
<code><br>
$textToDigitObj = new \App\Library\TextToDigit('One hundred twenty four thousand three hundred and fifty');<br>
echo $textToDigitObj->convert();    <br>
</code>

Apart from that, there is a test in the tests/unit folder just for example.
