'use strict';

function Normalizer() {}

/**
 * parse the emoji unicode from urls
 */
function parseEmojiUnicode(urlString) {
    // string could be something like `![](/dist/png-64/1f3a3.png)` or
    // `![](/dist/png-64/270c-fe0f.png)![](/dist/png-64/1f600.png)![](/dist/png-64/270c-fe0f.png)`
    var urlString = urlString.trim();

    if (urlString === ':question:' || urlString === '') {
        return [];
    }

    var unicode_images = [];

    var parts = urlString.split(')![](');

    for (var i = 0; i < parts.length; i++) {
        var part = parts[i].trim().replace(/\!|\[|\]|\(|\)/g, '');

        // /dist/png-64/1f3b7.png
        unicode_images.push(part.substring(13).toLowerCase());
    }

    return unicode_images;
}

// class methods
Normalizer.prototype.normalizeData = function(readmeData) {
    var data = {};

    // CLean up readme data
    readmeData = readmeData.split('-----|--------|-------|-----------|---------').pop();

    var lines = readmeData.split('\n');

    for (var i = 0; i < lines.length; i++) {
        var line = lines[i].trim();

        if (line.length === 0) {
            continue;
        }

        if (line.substring(0, 1) !== '`') {
            continue;
        }

        var parts = line.split('|');

        var shortcode = parts[0].trim();
        shortcode = shortcode.substring(1, shortcode.length - 1);

        var image = parts[4].trim();
        image = image.substring(1, image.length - 1);

        data[shortcode] = {
            unicode_images: parseEmojiUnicode(parts[2]),
            smiley_image: image,
        };
    }

    return data;
};

// export the class
module.exports = Normalizer;
