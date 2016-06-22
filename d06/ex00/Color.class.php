<?php
Class Color {

	public static $verbose = FALSE;
	public $red = 0;
	public $green = 0;
	public $blue = 0;

	public static function doc() {
		$doc = file_get_contents(Color.doc.txt);
		return $doc;
	}

	public function __construct(array $kwargs) {
		if ($kwargs['rgb']) {
			$this->red = intval($kwargs['rgb'] >> 16);
			$this->green = intval($kwargs['rgb'] >> 8 & 0xFF);
			$this->blue = intval($kwargs['rgb'] & 0xFF);
		} elseif ($kwargs['red'] || $kwargs['green'] || $kwargs['blue']) {
			$this->red = intval($kwargs['red']);
			$this->green = intval($kwargs['green']);
			$this->blue = intval($kwargs['blue']);
		}
		if (Color::verbose === TRUE)
			print('Constructed.' . PHP_EOL);
		return;
	}

	public function __destruct() {
		if (Color::verbose === TRUE)
			print('destructed.' . PHP_EOL);
		return;
	}

	public function __tostring() {
		return 'Color( red: '. $this->red .', green: '. $this->green .', blue: '. $this->blue .' )';
	}
}
 ?>
