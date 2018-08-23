const Normalizer = require('../../lib/readme-normalizer');

describe('The Readme-Normalizer', () => {
    describe('on method normalizeData()', () => {
        var normalizer = new Normalizer();
        // Data from https://github.com/iamcal/emoji-data#using-the-data
        var data = "\n"+
'Code | Smiley | Emoji | Emojicode | Filename'+"\n"+
'-----|--------|-------|-----------|---------'+"\n"+
'`:fischer:` | ![](https://youthweb.net/dist/smilies/angeln.gif) | ![](/dist/png-64/1f3a3.png) | `:fishing_pole_and_fish:` | `angeln.gif`'+"\n"+
'`:leaa:` | ![](https://youthweb.net/dist/smilies/smilie_girl_151.gif) | ![](/dist/png-64/270c-fe0f.png)![](/dist/png-64/1f600.png)![](/dist/png-64/270c-fe0f.png) | `:v::grinning::v:` | `smilie_girl_151.gif`'+"\n"+
'';

        var expected = {
            ':fischer:': {
                'unicode_images': [
                    '1f3a3.png',
                ],
                'smiley_image': 'angeln.gif',
            },
            ':leaa:': {
                'unicode_images': [
                    '270c-fe0f.png',
                    '1f600.png',
                    '270c-fe0f.png',
                ],
                'smiley_image': 'smilie_girl_151.gif',
            },
        };

        it('returns normalized data', () => {
            expect(normalizer.normalizeData(data)).toEqual(expected);
        });
    });
});
