const fs = require('fs');
const Normalizer = require('../lib/emojidata-normalizer');
const emojiData = require('emoji-datasource-twitter/emoji.json');

var normalizer = new Normalizer();
var data = normalizer.normalizeData(emojiData);

fs.writeFileSync('./dist/emojidata_pretty.json', JSON.stringify(data, null, 4));

console.log('All maps were created.');
