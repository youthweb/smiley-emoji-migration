const fs = require('fs');
const Normalizer = require('../../lib/readme-normalizer');

describe('The README.md file is normalized', () => {
    var dataPromise = new Promise((resolve, reject) => {
        var readmeData = fs.readFileSync('./README.md');
        var readmeNormalizer = new Normalizer();
        var normalized = readmeNormalizer.normalizeData(readmeData.toString());

        resolve(normalized);
    });

    it('and contains 363 entries', () => {
        return dataPromise.then((result) => {
            expect(Object.entries(result).length).toBe(363);
        })
    });
});

describe('The README.md file is normalized', () => {
    var readmeData = fs.readFileSync('./README.md');
    var readmeNormalizer = new Normalizer();
    var normalized = readmeNormalizer.normalizeData(readmeData.toString());

    for (var code in normalized) {
        describe('and the entry "'+code+'"', () => {
            var shortcode = code;
            var entry = normalized[shortcode];

            it('has the right shortcode format', () => {
                expect(shortcode).toMatch(/^:[a-z0-9äöü]+:$|^[:|;]-[\)|\(|\[|p]$|^:\($/gi);
            });

            it('has the right properties', () => {
                expect(Object.keys(entry)).toEqual(['unicode_images', 'smiley_image']);
            });

            it('has a correct "unicode_images" property of type string', () => {
                expect(typeof entry.unicode_images).toBe('object');

                for (var image of entry.unicode_images) {
                    expect(typeof image).toBe('string');
                    expect(image).toMatch(/^[a-z0-9-]{4,}\.png$/is);
                }
            });

            it('has a correct "smiley_image" property of type string', () => {
                expect(typeof entry.smiley_image).toBe('string');
            });
        });
    }
});
