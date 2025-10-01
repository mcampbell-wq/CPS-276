<?php
class Calculator
{
    public function calc($operator = "+", $number1 = 44, $number2 = 33)
    {


        //ensure 3 arguments were entered
        $parameters = func_num_args();

        if ($parameters < 3) {
            return "Cannot perform operation. You must have three arguments. A string for the operator (+,-,*,/) and two integers or floats for the numbers.<br><br>";
        }


        //check that numbers are either integer or float
        $intCheck1 = is_int($number1);
        $floatCheck1 = is_float($number1);

        $intCheck2 = is_int($number2);
        $floatCheck2 = is_float($number2);

        if ($intCheck1 == true || $floatCheck1 == true) {
            global $number1ok;
            $number1ok = TRUE;
        } else {
            global $number1ok;
            $number1ok = FALSE;
        }

        if ($intCheck2 == true || $floatCheck2 == true) {
            global $number2ok;
            $number2ok = TRUE;
        } else {
            global $number2ok;
            $number2ok = FALSE;
        }

        //return error if numbers are not numbers
        if ($number1ok != true || $number2ok != true) {
            return "Cannot perform operation. You must have three arguments. A string for the operator (+,-,*,/) and two integers or floats for the numbers.<br><br>";
        }

        //ensure arguments match accepted values
        //operators
        switch ($operator) {
            case "+":
                $answer = $number1 + $number2;
                return "The calculation is $number1 $operator $number2. The answer is $answer.<br><br>";
                break;
            case "-":
                $answer = $number1 - $number2;
                return "The calculation is $number1 $operator $number2. The answer is $answer.<br><br>";
                break;
            case "*":
                $answer = $number1 * $number2;
                return "The calculation is $number1 $operator $number2. The answer is $answer.<br><br>";
                break;
            case "/":
                //divide by zero error
                if ($number2 == 0) {
                    return "The calculation is $number1 $operator $number2. The answer is cannot divide a number by zero.<br><br>";
                } else {
                    $answer = $number1 / $number2;
                    return "The calculation is $number1 $operator $number2. The answer is $answer.<br><br>";
                }
                break;
            default:
                return "Cannot perform operation. You must have three arguments. A string for the operator (+,-,*,/) and two integers or floats for the numbers.<br><br>";
        }
    }
}
