const Normalizer = require('../../lib/normalizer');

describe('The Normalizer', () => {
    describe('on method normalizeEmojiData()', () => {
        var normalizer = new Normalizer();
        // Data from https://github.com/iamcal/emoji-data#using-the-data
        var data = [
            {
                "name": "WHITE UP POINTING INDEX",
                "unified": "261D-FE0F",
                "non_qualified": "261D",
                "docomo": null,
                "au": "E4F6",
                "softbank": "E00F",
                "google": "FEB98",
                "image": "261d.png",
                "sheet_x": 1,
                "sheet_y": 2,
                "short_name": "point_up",
                "short_names": [
                    "point_up"
                ],
                "text": null,
                "texts": null,
                "category": "Smileys & People",
                "sort_order": 116,
                "added_in": "1.4",
                "has_img_apple": true,
                "has_img_google": true,
                "has_img_twitter": true,
                "has_img_facebook": false,
                "has_img_messenger": false,
                "skin_variations": {
                    "1F3FB": {
                        "unified": "261D-1F3FB",
                        "image": "261d-1f3fb.png",
                        "sheet_x": 1,
                        "sheet_y": 3,
                        "added_in": "6.0",
                        "has_img_apple": true,
                        "has_img_google": false,
                        "has_img_twitter": false,
                        "has_img_facebook": false,
                        "has_img_messenger": false,
                    }
                },
                "obsoletes": "ABCD-1234",
                "obsoleted_by": "5678-90EF"
            },
            {
                "name": "THUMBS UP SIGN",
                "unified": "1F44D",
                "non_qualified": null,
                "docomo": "E727",
                "au": "E4F9",
                "softbank": "E00E",
                "google": "FEB97",
                "image": "1f44d.png",
                "sheet_x": 14,
                "sheet_y": 49,
                "short_name": "+1",
                "short_names": [
                    "+1",
                    "thumbsup"
                ],
                "text": null,
                "texts": null,
                "category": "Smileys & People",
                "sort_order": 358,
                "added_in": "6.0",
                "has_img_apple": true,
                "has_img_google": true,
                "has_img_twitter": true,
                "has_img_facebook": true,
                "has_img_messenger": true,
                "skin_variations": {
                    "1F3FB": {
                        "unified": "1F44D-1F3FB",
                        "non_qualified": null,
                        "image": "1f44d-1f3fb.png",
                        "sheet_x": 14,
                        "sheet_y": 50,
                        "added_in": "8.0",
                        "has_img_apple": true,
                        "has_img_google": true,
                        "has_img_twitter": true,
                        "has_img_facebook": true,
                        "has_img_messenger": true
                    },
                    "1F3FC": {
                        "unified": "1F44D-1F3FC",
                        "non_qualified": null,
                        "image": "1f44d-1f3fc.png",
                        "sheet_x": 14,
                        "sheet_y": 51,
                        "added_in": "8.0",
                        "has_img_apple": true,
                        "has_img_google": true,
                        "has_img_twitter": true,
                        "has_img_facebook": true,
                        "has_img_messenger": true
                    },
                    "1F3FD": {
                        "unified": "1F44D-1F3FD",
                        "non_qualified": null,
                        "image": "1f44d-1f3fd.png",
                        "sheet_x": 15,
                        "sheet_y": 0,
                        "added_in": "8.0",
                        "has_img_apple": true,
                        "has_img_google": true,
                        "has_img_twitter": true,
                        "has_img_facebook": true,
                        "has_img_messenger": true
                    },
                    "1F3FE": {
                        "unified": "1F44D-1F3FE",
                        "non_qualified": null,
                        "image": "1f44d-1f3fe.png",
                        "sheet_x": 15,
                        "sheet_y": 1,
                        "added_in": "8.0",
                        "has_img_apple": true,
                        "has_img_google": true,
                        "has_img_twitter": true,
                        "has_img_facebook": true,
                        "has_img_messenger": true
                    },
                    "1F3FF": {
                        "unified": "1F44D-1F3FF",
                        "non_qualified": null,
                        "image": "1f44d-1f3ff.png",
                        "sheet_x": 15,
                        "sheet_y": 2,
                        "added_in": "8.0",
                        "has_img_apple": true,
                        "has_img_google": true,
                        "has_img_twitter": true,
                        "has_img_facebook": true,
                        "has_img_messenger": true
                    }
                }
            },
        ];

        var expected = {
            ':point_up:': {
                'unicode_images': [
                    '261d-fe0f.png',
                ],
                'smiley_image': null,
            },
            ':+1:': {
                'unicode_images': [
                    '1f44d.png',
                ],
                'smiley_image': null,
            },
            ':thumbsup:': {
                'unicode_images': [
                    '1f44d.png',
                ],
                'smiley_image': null,
            },
        };

        it('returns normalized data', () => {
            expect(normalizer.normalizeEmojiData(data)).toEqual(expected);
        });
    });
});
