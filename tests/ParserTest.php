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
	 * @dataProvider EmojiCodesProvider
	 */
	public function testParseEmojiCodes($string, $expected)
	{
		$parser = new Parser;

		$this->assertSame($expected, $parser->parseEmojiCodes($string));
	}

	/**
	 * EmojiCodesProvider
	 */
	public function EmojiCodesProvider()
	{
		return [
			['', []],
			['``', []],
			[' `` ', []],
			['`:angry:`', [':angry:']],
			[' `:angry:` ', [':angry:']],
			[
				'`:worried::thumbsdown:`',
				[':worried:', ':thumbsdown:'],
			],
			[
				'`:computer::angry::punch:`',
				[':computer:', ':angry:', ':punch:'],
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
			$url_regex = '~http:\/\/cdn\.jsdelivr\.net\/emojione\/assets\/png\/[a-z0-9-]{4,}\.png\?v=2\.2\.6~is';

			foreach ($entry['emoji_urls'] as $url)
			{
				$this->assertRegExp($url_regex, $url);
			}
		}

		$this->assertTrue(is_array($entry['emoji_codes']));

		if ( ! empty($entry['emoji_codes']) )
		{
			$code_regex = '~:[a-z0-9_]+:~is';

			foreach ($entry['emoji_codes'] as $code)
			{
				$this->assertRegExp($code_regex, $code);
			}
		}

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
