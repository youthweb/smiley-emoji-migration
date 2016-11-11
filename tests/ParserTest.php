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

		$this->assertTrue(is_array($parser->parseReadme()));
	}
}
