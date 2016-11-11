<?php

namespace Youthweb\SmileyEmojiMigration\Tests;

use Youthweb\SmileyEmojiMigration\Parser;

class ParserTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @test
	 */
	public function testParseReadme()
	{
		$parser = new Parser;

		$entries = $parser->parseReadme();

		$this->assertTrue(is_array($entries));
		$this->assertCount(363, $entries);
	}

	/**
	 * @dataProvider EmojiUrlsProvider
	 */
	public function testParseEmojiUrls($string, $expected)
	{
		$parser = new Parser;

		$this->assertSame($expected, $parser->parseEmojiUrls($string));
	}

	/**
	 * EmojiUrlsProvider
	 */
	public function EmojiUrlsProvider()
	{
		return [
			['', []],
			[':question:', []],
			[
				'![](http://cdn.jsdelivr.net/emojione/assets/png/1F60A.png?v=2.2.6)',
				['http://cdn.jsdelivr.net/emojione/assets/png/1F60A.png?v=2.2.6']
			],
			[
				'![](http://cdn.jsdelivr.net/emojione/assets/png/1F60A.png?v=2.2.6)![](http://cdn.jsdelivr.net/emojione/assets/png/1F44D.png?v=2.2.6)',
				['http://cdn.jsdelivr.net/emojione/assets/png/1F60A.png?v=2.2.6', 'http://cdn.jsdelivr.net/emojione/assets/png/1F44D.png?v=2.2.6']
			],
		];
	}

	/**
	 * @dataProvider EntryProvider
	 */
	public function testEntryAttributes($entry)
	{
		$this->assertTrue(is_array($entry));
		$this->assertSame(
			[
				'smiley_code',
				'smiley_filename',
				'smiley_url',
				'emoji_urls',
				'emoji_codes',
			],
			array_keys($entry)
		);

		// Prüfe die Urls
		$this->assertTrue(is_array($entry['emoji_urls']));

		if ( ! empty($entry['emoji_urls']) )
		{
			$expected = '~http:\/\/cdn\.jsdelivr\.net\/emojione\/assets\/png\/[a-z0-9-]{4,}\.png\?v=2\.2\.6~is';

			foreach ($entry['emoji_urls'] as $url)
			{
				$this->assertRegExp($expected, $url);
			}
		}

		$this->assertTrue(is_array($entry['emoji_codes']));

		// return 'has_emoji' für die Statistik
		if ( ! empty($entry['emoji_urls']) )
		{
			return 'has_emoji';
		}
	}

	/**
	 * EntryProvider
	 */
	public function EntryProvider()
	{
		$parser = new Parser;

		$return = [];

		$entries = $parser->parseReadme();

		foreach ($entries as $entry)
		{
			$return[] = [$entry];
		}

		return $return;
	}
}
