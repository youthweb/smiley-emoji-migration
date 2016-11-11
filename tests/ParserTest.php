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

		$this->assertTrue(is_array($entry['emoji_urls']));
		$this->assertTrue(is_array($entry['emoji_codes']));

		// return 'has_emoji' für die Statistik
		if ( $entry['emoji_codes'][0] !== '' )
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
