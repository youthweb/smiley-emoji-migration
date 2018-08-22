const fs = require('fs');
const EmojidataNormalizer = require('../lib/emojidata-normalizer');
const ReadmeNormalizer = require('../lib/readme-normalizer');
const emojiData = require('emoji-datasource-twitter/emoji.json');

var emojiNormalizer = new EmojidataNormalizer();
var data = emojiNormalizer.normalizeData(emojiData);

fs.writeFileSync('./dist/emojidata_pretty.json', JSON.stringify(data, null, 4));

var readmeData = fs.readFileSync('./README.md');
var readmeNormalizer = new ReadmeNormalizer();
var data = readmeNormalizer.normalizeData(readmeData.toString());

fs.writeFileSync('./dist/readmedata_pretty.json', JSON.stringify(data, null, 4));

console.log('All maps were created.');
