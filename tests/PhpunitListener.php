<?php

/**
 * PHPUnit Listener
 */

class PhpunitListener extends \PHPUnit_Framework_BaseTestListener
{
	private $counter = 0;

	/**
	 * Daten für die Auswerung sammeln
	 */
	public function endTest(PHPUnit_Framework_Test $test, $time)
	{
		if ($test->getResult() === 'has_emoji')
		{
			$this->counter++;
		}
	}

	/**
	 * Auswertung anzeigen
	 */
	public function endTestSuite(\PHPUnit_Framework_TestSuite $suite)
	{
		if ( $suite->getName() === 'all' )
		{
			$percent = round(100 * $this->counter / 363, 1);

			echo sprintf("

Alle Tests sind beendet.

%s von 363 Smilies haben einen Emoji-Ersatz.
Das sind %s%%",
				$this->counter,
				$percent
			);
		}
	}
}
