<?php
/**
 * Copyright (C) Youthweb e.V. 2004 - 2016
 * All rights reserved.
 */

namespace Youthweb\SmileyEmojiMigration;

/**
 * README.md parser
 */

class Converter
{
	/**
	 * export as json
	 */
	public function toJsonFile($file_path, $options = 0)
	{
		$file_path = realpath($file_path);

		$data = $this->createJson($options);

		file_put_contents($file_path, $data);
	}

	/**
	 * export as JS file
	 */
	public function toJavaScriptFile($file_path)
	{
		$file_path = realpath($file_path);

		$data = $this->createJson();

		$content = sprintf('var youthweb_smilies = %s;', $data);

		file_put_contents($file_path, $content);
	}

	private function createJson($options = 0)
	{
		$parser = new Parser();

		$data = [];

		$raw = $parser->parseReadme();

		foreach ($raw as $raw_part)
		{
			if ( count($raw_part['unicodes']) === 0 )
			{
				continue;
			}

			$smiley_code = $raw_part['smiley_code'];

			$data[$smiley_code] = [
				'unicode_images' => $raw_part['unicodes'],
				'smiley_image' => $raw_part['smiley_filename'],
			];
		}

		return json_encode($data, $options);
	}
}
