<?php
class StringHelper 
{
	public static function trimToExcerpt($text)
	{
		$returnText = $text;
		if(strlen($text) > 200) 
		{
			$returnText = substr($text, 0, 200) . '...';
		}

		return $returnText;
	}
}