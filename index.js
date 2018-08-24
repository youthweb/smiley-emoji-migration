const emojisData = require('./dist/emojidata_pretty.json');
const smiliesData = require('./dist/smilies_pretty.json');

module.exports.maps = {
    shortcodeToImagesMap: Object.assign({}, emojisData, smiliesData),
};
