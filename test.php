<?php
function getRangeArray($max = 10) {
	$array = [];

	for ($i = 1; $i < $max; $i++) {
		$array[] = $i;
	}

	return $array;
}

function getRangeGenerator($max = 10) {
	for ($i = 1; $i < $max; $i++) {
		yield $i;
	}
}

class SimpleIterator implements Iterator {
	private $position = 1;
	private $max = 1;

	public function __construct($max = 15) {
		$this->position = 1;
		$this->max = $max;
	}

	function rewind() {
		$this->position = 1;
	}

	function current() {
		return $this->position;
	}

	function key() {
		return $this->position;
	}

	function next() {
		++$this->position;
	}

	function valid() {
		return ($this->position < $this->max);
	}
}

// foreach (getRangeArray(15) as $range) {
// 	echo "Value: {$range} \n";
// }

// foreach (getRangeArray(PHP_INT_MAX) as $range) {
// 	echo "Dataset {$range} \n";
// }

// foreach (getRangeGenerator(15) as $range) {
// 	echo "Dataset {$range} \n";
// }

// foreach (getRangeGenerator(PHP_INT_MAX) as $range) {
// 	echo "Dataset {$range} \n";
// }

// foreach ((new SimpleIterator(15)) as $range) {
// 	echo "Value: {$range} \n";
// }

// foreach ((new SimpleIterator(PHP_INT_MAX)) as $range) {
// 	echo "Dataset {$range} \n";
// }
