const fs = require('fs');
const EmojidataNormalizer = require('../lib/emojidata-normalizer');
const ReadmeNormalizer = require('../lib/readme-normalizer');
const emojiData = require('emoji-datasource-twitter/emoji.json');

var emojiNormalizer = new EmojidataNormalizer();
var data = emojiNormalizer.normalizeData(emojiData);

fs.writeFileSync('./dist/emojidata_pretty.json', JSON.stringify(data, null, 4));

console.log('Map from emoji-data created.');

var readmeData = fs.readFileSync('./README.md');
var readmeNormalizer = new ReadmeNormalizer();
var data = readmeNormalizer.normalizeData(readmeData.toString());

fs.writeFileSync('./dist/smilies_pretty.json', JSON.stringify(data, null, 4));
console.log('Map from readme-data created.');

var count = 0;
for (var entry of Object.entries(data)) {
    if (entry[1].unicode_images.length > 0) {
        count++;
    }
}
var percent = (100 * count / 363).toFixed(1);
console.log(count+' of 363 ('+percent+'%) smilies have a Emoji replacement.');

console.log('All maps were created.');
