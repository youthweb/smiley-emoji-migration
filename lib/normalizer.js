'use strict';

function Normalizer() {}

// class methods
Normalizer.prototype.normalizeEmojiData = function(emojiData) {
    var data = {};

    for (var i = 0; i < emojiData.length; i++) {
        var dataSet = emojiData[i];

        for (var j = 0; j < dataSet.short_names.length; j++) {
            var shortname = dataSet.short_names[j];
            var shortcode = ':'+shortname+':';

            data[shortcode] = {
                unicode_images: [dataSet.unified.toLowerCase()+'.png'],
                smiley_image: null,
            };
        }

    }

    return data;
};

// export the class
module.exports = Normalizer;
