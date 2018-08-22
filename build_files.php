<?php

require('vendor/autoload.php');

$converter = new Youthweb\SmileyEmojiMigration\Converter();

$converter->toJsonFile('dist/smilies.json');
$converter->toJsonFile('dist/smilies_pretty.json', JSON_PRETTY_PRINT);
$converter->toJavaScriptFile('dist/smilies.js');

echo "All files created. 🚀\n";
