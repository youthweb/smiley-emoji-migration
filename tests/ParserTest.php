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

		// return 'has_emoji' für die Statistik
		if ( $entry['emoji_codes'] !== '' )
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
