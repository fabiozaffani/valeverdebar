<?php

final class Calculator {

	public function __construct() {
        $this->startValue = 1500;
        // valor por pessoa de sabado
        $this->personSaturday = 6;
        // valor por pessoa de final de semana
        $this->personWeekend = 4;
        // valor por pessoa durante a semana
        $this->personWeek = 2;
        // valor de locação por pessoa para mesa e cadeira extra
        $this->chairsAndTables = 18;

		$this->parsePOST();
	}

	private function sanitize($str) {
		return strip_tags(stripslashes(trim($str)));
	}

	private function validate() {

		$result = false;

		// honeypot bitches!
		if ($this->calculatorData['tipo']) {
			$result = 'Erro indescritível...';
		} else if($this->calculatorData['weekday'] == '') {
			$result = 'Escolha o dia da semana';
		} else if($this->calculatorData['guests'] == '') {
			$result = 'Digite um número de convidados';
		}

		return $result;
	}

	private function parsePOST() {
		if ($_POST) {
			$this->calculatorData = array(
				'tipo' => (string)$this->sanitize($_POST['tipo']),
				'weekday' => (string)$this->sanitize($_POST['weekday']),
				'guests' => (int)$this->sanitize($_POST['guests'])
			);
		}
	}

    private function getExtraIfBiggerThanMaximum($guests) {
        if ($guests <= 200) {
            return 0;
        };
        return $this->chairsAndTables * ($guests - 200);
    }

	private function getValuePeople() {

		$weekday = $this->calculatorData['weekday'];
		$guests = $this->calculatorData['guests'];
		$value = $this->startValue;

		if ($weekday == 'saturday') {
			$value += ($this->personSaturday * $guests) + $this->getExtraIfBiggerThanMaximum($guests);
		} else if ($weekday == 'weekend') {
			$value += ($this->personWeekend * $guests) + $this->getExtraIfBiggerThanMaximum($guests);
		} else if ($weekday == 'week') {
			$value += ($this->personWeek * $guests) + $this->getExtraIfBiggerThanMaximum($guests);
		}
		return $value * 100; // to return in cents
	}

	public function calc() {
		$this->parsePOST();
		$validState = $this->validate();

		if ($validState) {
			// not returning the valid state because we are validating if the result
			// has something (the value of the renting) or false if something went wrong
			return false;
		}

		return $this->getValuePeople();
	}

}
