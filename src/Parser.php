<?php
/**
 * Copyright (C) Youthweb e.V. 2004 - 2016
 * All rights reserved.
 */

namespace Youthweb\SmileyEmojiMigration;

/**
 * README.md parser
 */

class Parser
{
	public function parseReadme()
	{
		$file_path = realpath(__DIR__) . \DIRECTORY_SEPARATOR . '..' . \DIRECTORY_SEPARATOR . 'README.md';

		$content = file_get_contents($file_path);

		$content = explode('---------', $content);

		$content = array_pop($content);

		$entries = [];

		foreach (explode("\n", $content) as $key => $line)
		{
			if ( trim($line) === '' )
			{
				continue;
			}

			$parts = explode('|', $line);


			// TODO: Es können mehrere Emojis angegeben sein,
			// daher müssen emoji_urls und emoji_codes in Arrays geparst werden
			$entries[] = [
				'smiley_code' => trim($parts[0], ' `'),
				'smiley_filename' => trim($parts[4], ' `'),
				'smiley_url' => trim($parts[1], ' ![]()'),
				'emoji_urls' => trim($parts[2], ' ![]()'),
				'emoji_codes' => trim($parts[3], ' `'),
			];
		}

		//$output = json_encode($entries);

		return $entries;
	}
}
