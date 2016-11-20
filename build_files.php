<?php

require('vendor/autoload.php');

$converter = new Youthweb\SmileyEmojiMigration\Converter();

$converter->toJsonFile('dist/smilies.json');
$converter->toJavaScriptFile('dist/smilies.js');

echo "All files created. 🚀\n";
