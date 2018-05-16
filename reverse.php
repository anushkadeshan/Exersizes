<?php

class reverse
{

	public function PrintString()
	{
		$word = "Deshan Dharmasena";
		
		return strrev($word);
	}
}

$text = new reverse();
echo $text->PrintString();

?>

