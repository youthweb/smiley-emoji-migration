const fs = require('fs');
const Normalizer = require('../../lib/readme-normalizer');


describe('The README.md file is normalized', () => {
    var dataPromise = null;

    beforeEach(() => {
        dataPromise = new Promise((resolve, reject) => {
            var readmeData = fs.readFileSync('./README.md');
            var readmeNormalizer = new Normalizer();
            var normalized = readmeNormalizer.normalizeData(readmeData.toString());

            resolve(normalized);
        });

    });

    describe('and it contains', () => {
        it('363 entries', () => {
            return dataPromise.then((result) => {
                expect(Object.entries(result).length).toBe(363);
            })
        });
    });

    it('and the entry has a "smiley_image" property', () => {
        return dataPromise.then((result) => {
            var url_regex = /^\/dist\/png\-64\/[a-z0-9-]{4,}\.png$/is;
            for (var shortcode in result) {
                var entry = result[shortcode];

                expect(entry.hasOwnProperty('smiley_image')).toBe(true);
                expect(typeof entry.smiley_image).toBe('string');
                expect(entry.hasOwnProperty('unicode_images')).toBe(true);
                expect(typeof entry.unicode_images).toBe('object');
            }
        });
    });
});
