<?php

require('vendor/autoload.php');

$converter = new Youthweb\SmileyEmojiMigration\Converter();

$converter->toJsonFile('dist/smilies_pretty.json', JSON_PRETTY_PRINT);

echo "All files created. 🚀\n";
