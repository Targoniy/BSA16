<?php
declare (strict_types = 1);
require __DIR__ . '/vendor/autoload.php';

$correctNumbers   = [1, 2, 3, 4, 5];
$IncorrectNumbers = ['1', '', null, true, 0];

$cor_num1 = $correctNumbers[random_int(0, 4)];
$cor_num2 = $correctNumbers[random_int(0, 4)];

$in_cor_num1 = $IncorrectNumbers[random_int(0, 4)];
$in_cor_num2 = $IncorrectNumbers[random_int(0, 4)];

$action = ['adding', 'substraction', 'multiplication', 'dividing', 'powerOfTwo'];

foreach ($action as $act) {
    $calculator = new Calculator;
    $calculator->setLogger(

        new class

    {
            public function log($fileName, $operator, $result, $operant1, $operant2)
        {
                if ('powerOfTwo' != $operator) {
                    $data = (date('l jS \of F Y h:i:s A') .
                        ' % ' . $operator . ' % ' .
                        $operant1 . ' with ' .
                        $operant2 . ' % , equal ' .
                        $result . "\n");
                } else {
                    $data = (date('l jS \of F Y h:i:s A') .
                        ' % ' . $operator . ' % ' .
                        $operant1 . ' % , equal ' .
                        $result . "\n");
                }
                file_put_contents($fileName, $data, FILE_APPEND);
                return true;
            }
        }
    );
    try {
        $calculator->$act($cor_num1, $cor_num2) . "<br>";
        $calculator->$act($in_cor_num1, $in_cor_num2) . "<br>";
    } catch (TypeError $e) {
        echo 'Bad input number: ' . $e->getMessage() . "<br>";
    } catch (DivisionByZeroError $e) {
        echo $e->getMessage(). " with nubmers $in_cor_num1 and $in_cor_num2" . "<br>";
    }
}
