<?php

$content = file_get_contents('README.md');

$content = explode('---------', $content);

$content = array_pop($content);

$entries = [];

foreach (explode("\n", $content) as $key => $line)
{
    if ( trim($line) === '' )
    {
        continue;
    }

    $parts = explode('|', $line);


    // TODO: Es können mehrere Emojis angegeben sein,
    // daher müssen emoji_urls und emoji_codes in Arrays geparst werden
    $entries[] = [
        'smiley_code' => trim($parts[0], ' `'),
        'smiley_filename' => trim($parts[4], ' `'),
        'smiley_url' => trim($parts[1], ' ![]()'),
        'emoji_urls' => trim($parts[2], ' ![]()'),
        'emoji_codes' => trim($parts[3], ' `'),
    ];
}

$output = json_encode($entries);

//var_dump($output);
return $output;
