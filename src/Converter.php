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
	public function toJsonFile($file_path)
	{
		$file_path = realpath($file_path);

		$data = $this->createJson();

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

	private function createJson()
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

			$unicode = implode('-', $raw_part['unicodes']);

			$data_set = [
				//'isCanonical' = false,
				'unicode' => [$unicode],
				'isSmiley' => true,
			];

			$data[$raw_part['smiley_code']] = $data_set;
		}

		return json_encode($data);
	}
}
