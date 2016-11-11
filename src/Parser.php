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
	/**
	 * parse the README.md
	 */
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

			$urls = $this->parseEmojiUrls($parts[2]);

			$entries[] = [
				'smiley_code' => trim($parts[0], ' `'),
				'smiley_url' => trim($parts[1], ' ![]()'),
				'smiley_filename' => trim($parts[4], ' `'),
				'emoji_codes' => $this->parseEmojiCodes($parts[3]),
				'emoji_urls' => $urls,
				'emoji_filenames' => $this->parseEmojiFilenames($urls),
			];
		}

		return $entries;
	}

	/**
	 * parse the emoji urls
	 */
	public function parseEmojiUrls($string)
	{
		$urls = [];

		$string = trim($string);

		if ($string === ':question:' or $string === '')
		{
			return $urls;
		}

		$parts = explode(')![](', $string);

		foreach ($parts as $part)
		{
			$urls[] = trim($part, ' ![]()');
		}

		return $urls;
	}

	/**
	 * parse the emoji codes
	 */
	public function parseEmojiCodes($string)
	{
		$codes = [];

		$string = trim($string);
		$string = trim($string, ' `');

		if ($string === '')
		{
			return $codes;
		}

		$parts = explode('::', $string);

		foreach ($parts as $part)
		{
			$codes[] = sprintf(':%s:', trim($part, ' :'));
		}

		return $codes;
	}

	/**
	 * parse the emoji filenames from urls
	 */
	public function parseEmojiFilenames(array $urls)
	{
		$filenames = [];

		foreach ($urls as $url)
		{
			// Beispiel: http://cdn.jsdelivr.net/emojione/assets/png/1F3B7.png?v=2.2.6
			$filename = substr($url, 44, -8);
			$filenames[] = strtolower($filename);
		}

		return $filenames;
	}
}
