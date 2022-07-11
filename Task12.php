<?php

namespace Test_Innowise\Task12;

    class MyCalculator 
    {
        protected $firstNumber;
        protected $secondNumber;
        protected $res;

        function __construct(int $firstNumber, int $secondNumber)
        {
            $this -> firstNumber = $firstNumber;
            $this -> secondNumber = $secondNumber;
            
        }

        public function add() : object {
            $this->res = $this->firstNumber + $this->secondNumber;
            return $this;
        }

        public function multiply() : object {
            $this -> res = $this->firstNumber*$this->secondNumber;
            return $this;
        }

        public function divideBy(int $number) : int {
            
            return $this -> res = $this->res/$number;
        }

        public function substract() : object {
            if ($this->firstNumber>=$this->secondNumber) {
                $this->res = $this->firstNumber - $this->secondNumber;
            }
            else {
                $this->res = $this->secondNumber - $this->firstNumber;
            }
            
            return $this;
        }

    }

    function main() {
        $mycalc = new MyCalculator(12, 6);
        echo $mycalc->substract()->divideBy(3);
    }

    main();

?>