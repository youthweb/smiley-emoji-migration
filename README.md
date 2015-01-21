# Migration der Smilies zu Emojis

[![Gitter](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/youthweb/smiley-emoji-migration?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

Auf Youthweb möchten wir in Zukunft Emojis statt der Smilies verwenden. Das macht es später einfacher, Posts und andere Inhalte auch außerhalb von Youthweb (z.B. in einer App) anzuzeigen.

Wir planen, die Emojis von [emojione.com](http://emojione.com) auf Youthweb zu verwenden. Die Umsetzung wird noch etwas Zeit brauchen, aber wir benötigen zur Planung vorab eine Liste, gegen welche Emojis die Smilies ersetzt werden sollen. Wenn wir das nicht machen und schon jetzt auf Emojis umsteigen, machen wir alte Forenposts und andere Inhalte kaputt, die noch auf die Smilies aufbauen.

## Mithelfen

Wenn alle mit anpacken, geht es schneller. Wenn du uns helfen möchtest, die entsprechenden Emojis zu finden, dann kannst du folgendes machen:

1. Guck in der Liste unten, ob es ein Smiley gibt, das noch kein Emoji hat.
2. Suche auf der [Emojione Demoseite](http://www.emojione.com/demo) nach einem Emoji, dass dem Smiley am ähnlichsten ist.
3. Bearbeite die Liste und schick uns einen Pull-Request (benötigt einen Github-Account).

Bitte trage das Emoji als Bild (`<img src="http://cdn.jsdelivr.net/emojione/assets/png/1F3A3.png?v=1.2.4" />`) und als Shortcode (`:fishing_pole_and_fish:`) ein, damit man die Bilder besser vergleichen kann. Die Url zu den Emoji-Bildern findest du auf der [Emojione Demoseite](http://www.emojione.com/demo).

Es ist möglich, dass mehrere Emojis für ein Smiley passen. Und es kann sein, dass ein Smiley nicht gegen ein Emoji ersetzt werden kann. Bei solchen Fälle müssen wir einzeln diskutieren und entscheiden. Die Diskussion findet hier auf Github statt. Zur Kommunikation kann das Forum auf Youthweb und [Gitterchat](https://gitter.im/youthweb/smiley-emoji-migration) verwendet werden.

## Smilies vs Emojis

### Legende

Die nachfolgende Liste zeigt alle 363 Smilies, die derzeit auf Youthweb verwendet werden. Die Spalten haben folgende Bedeutung:

* **Code**: Der Code, der als Smiley/Emoji interpretiert wird.
* **Smiley**: Das Smiley, das angezeigt wird.
* **Emoji**: Das Emoji, gegen das das Smiley ersetzt wird. Mehrere Emojis sind möglich, falls es mehrere zur Auswahl gibt.
* **Emoji Shortcode**: Der Shortcode für das Emoji
* **Filename**: Der Dateiname des Smiley bei Youthweb. Alle Smilies liegen bei Youthweb unter `https://youthweb.net/public/vendor/smilies/` ab.

Code | Smiley | Emoji | Emojicode | Filename
-----|--------|-------|-----------|---------
`:fischer:` | <img src="https://youthweb.net/public/vendor/smilies/angeln.gif" /> | <img src="http://cdn.jsdelivr.net/emojione/assets/png/1F3A3.png?v=1.2.4" /> | `:fishing_pole_and_fish:` | `angeln.gif`
`:sleep:` | <img src="https://youthweb.net/public/vendor/smilies/14.gif" /> | <img src="http://cdn.jsdelivr.net/emojione/assets/png/1F634.png?v=1.2.4" /> | `:sleeping:` | `14.gif`
`:angst:` | <img src="https://youthweb.net/public/vendor/smilies/angst.gif" /> | <img src="http://cdn.jsdelivr.net/emojione/assets/png/1F628.png?v=1.2.4" /> | `:fearful:` | `angst.gif`
`:gworsky:` | <img src="https://youthweb.net/public/vendor/smilies/crazydace.gif" /> | <img src="http://cdn.jsdelivr.net/emojione/assets/png/1F483.png?v=1.2.4" /> | `:dancer:` | `crazydace.gif`
`:streiten:` | <img src="https://youthweb.net/public/vendor/smilies/093.gif" /> | <img src="http://cdn.jsdelivr.net/emojione/assets/png/1F4A2.png?v=1.2.4" /> | `:anger:` | `093.gif`
`:baby:` | <img src="https://youthweb.net/public/vendor/smilies/Baby.gif" /> | :question: | `` | `Baby.gif`
`:birthday:` | <img src="https://youthweb.net/public/vendor/smilies/birthday.gif" /> | :question: | `` | `birthday.gif`
`:bounce:` | <img src="https://youthweb.net/public/vendor/smilies/a065.gif" /> | :question: | `` | `a065.gif`
`:buck:` | <img src="https://youthweb.net/public/vendor/smilies/buck.gif" /> | :question: | `` | `buck.gif`
`:confused:` | <img src="https://youthweb.net/public/vendor/smilies/confused2.gif" /> | :question: | `` | `confused2.gif`
`:heul:` | <img src="https://youthweb.net/public/vendor/smilies/crying.gif" /> | :question: | `` | `crying.gif`
`:gg:` | <img src="https://youthweb.net/public/vendor/smilies/gg.gif" /> | :question: | `` | `gg.gif`
`:king:` | <img src="https://youthweb.net/public/vendor/smilies/king.gif" /> | :question: | `` | `king.gif`
`:krach:` | <img src="https://youthweb.net/public/vendor/smilies/Krach.gif" /> | :question: | `` | `Krach.gif`
`:kreisen:` | <img src="https://youthweb.net/public/vendor/smilies/kreisen.gif" /> | :question: | `` | `kreisen.gif`
`:lol:` | <img src="https://youthweb.net/public/vendor/smilies/lol.gif" /> | :question: | `` | `lol.gif`
`:leaa:` | <img src="https://youthweb.net/public/vendor/smilies/smilie_girl_151.gif" /> | :question: | `` | `smilie_girl_151.gif`
`:esta:` | <img src="https://youthweb.net/public/vendor/smilies/496.gif" /> | :question: | `` | `496.gif`
`:mecker:` | <img src="https://youthweb.net/public/vendor/smilies/mecker.gif" /> | :question: | `` | `mecker.gif`
`:band:` | <img src="https://youthweb.net/public/vendor/smilies/Band.gif" /> | :question: | `` | `Band.gif`
`:music:` | <img src="https://youthweb.net/public/vendor/smilies/kopfhoehrer.gif" /> | :question: | `` | `kopfhoehrer.gif`
`:band2:` | <img src="https://youthweb.net/public/vendor/smilies/musicband.gif" /> | :question: | `` | `musicband.gif`
`:nervensaege:` | <img src="https://youthweb.net/public/vendor/smilies/nervensaege.gif" /> | :question: | `` | `nervensaege.gif`
`:dj:` | <img src="https://youthweb.net/public/vendor/smilies/dj.gif" /> | :question: | `` | `dj.gif`
`:birthday3:` | <img src="https://youthweb.net/public/vendor/smilies/birthday3.gif" /> | :question: | `` | `birthday3.gif`
`:schulstreit:` | <img src="https://youthweb.net/public/vendor/smilies/059.gif" /> | :question: | `` | `059.gif`
`:lesen:` | <img src="https://youthweb.net/public/vendor/smilies/buch.gif" /> | :question: | `` | `buch.gif`
`:rofl:` | <img src="https://youthweb.net/public/vendor/smilies/rofl.gif" /> | :question: | `` | `rofl.gif`
`:-)` | <img src="https://youthweb.net/public/vendor/smilies/smile0001.gif" /> | :question: | `` | `smile0001.gif`
`:super:` | <img src="https://youthweb.net/public/vendor/smilies/489.gif" /> | :question: | `` | `489.gif`
`:ww:` | <img src="https://youthweb.net/public/vendor/smilies/222.gif" /> | :question: | `` | `222.gif`
`:blinz:` | <img src="https://youthweb.net/public/vendor/smilies/blinkendes_auge.gif" /> | :question: | `` | `blinkendes_auge.gif`
`:crazy:` | <img src="https://youthweb.net/public/vendor/smilies/paranoid.gif" /> | :question: | `` | `paranoid.gif`
`:morgen:` | <img src="https://youthweb.net/public/vendor/smilies/morgen.gif" /> | :question: | `` | `morgen.gif`
`:giveup:` | <img src="https://youthweb.net/public/vendor/smilies/giveup.gif" /> | :question: | `` | `giveup.gif`
`:kruecken:` | <img src="https://youthweb.net/public/vendor/smilies/bhindi.gif" /> | :question: | `` | `bhindi.gif`
`:essen:` | <img src="https://youthweb.net/public/vendor/smilies/39[1].gif" /> | :question: | `` | `39[1].gif`
`:fernsehn:` | <img src="https://youthweb.net/public/vendor/smilies/fernsehen.gif" /> | :question: | `` | `fernsehen.gif`
`:duschen:` | <img src="https://youthweb.net/public/vendor/smilies/00001783.gif" /> | :question: | `` | `00001783.gif`
`:abwasch:` | <img src="https://youthweb.net/public/vendor/smilies/abwasch.gif" /> | :question: | `` | `abwasch.gif`
`:arbeiten:` | <img src="https://youthweb.net/public/vendor/smilies/00001777.gif" /> | :question: | `` | `00001777.gif`
`:toilette:` | <img src="https://youthweb.net/public/vendor/smilies/00001798.gif" /> | :question: | `` | `00001798.gif`
`:sdu8:` | <img src="https://youthweb.net/public/vendor/smilies/coolkaugummi.gif" /> | :question: | `` | `coolkaugummi.gif`
`:arab:` | <img src="https://youthweb.net/public/vendor/smilies/arab.gif" /> | :question: | `` | `arab.gif`
`:mcdonalds:` | <img src="https://youthweb.net/public/vendor/smilies/mcdonald.gif" /> | :question: | `` | `mcdonald.gif`
`:boxen:` | <img src="https://youthweb.net/public/vendor/smilies/boxxen.gif" /> | :question: | `` | `boxxen.gif`
`:verrückt:` | <img src="https://youthweb.net/public/vendor/smilies/verrueckt.gif" /> | :question: | `` | `verrueckt.gif`
`:urlaub:` | <img src="https://youthweb.net/public/vendor/smilies/strand.gif" /> | :question: | `` | `strand.gif`
`:victory:` | <img src="https://youthweb.net/public/vendor/smilies/b025.gif" /> | :question: | `` | `b025.gif`
`:liebesbrief:` | <img src="https://youthweb.net/public/vendor/smilies/liebesbrief.gif" /> | :question: | `` | `liebesbrief.gif`
`:weinen:` | <img src="https://youthweb.net/public/vendor/smilies/weinen.gif" /> | :question: | `` | `weinen.gif`
`:gucken:` | <img src="https://youthweb.net/public/vendor/smilies/00000952[1].gif" /> | :question: | `` | `00000952[1].gif`
`:pcprob:` | <img src="https://youthweb.net/public/vendor/smilies/PcProb.gif" /> | :question: | `` | `PcProb.gif`
`:waschen2:` | <img src="https://youthweb.net/public/vendor/smilies/00001797[1].gif" /> | :question: | `` | `00001797[1].gif`
`:koch:` | <img src="https://youthweb.net/public/vendor/smilies/Koch.gif" /> | :question: | `` | `Koch.gif`
`:baden:` | <img src="https://youthweb.net/public/vendor/smilies/00001779[1].gif" /> | :question: | `` | `00001779[1].gif`
`:troesten:` | <img src="https://youthweb.net/public/vendor/smilies/troesten.gif" /> | :question: | `` | `troesten.gif`
`:bügeln:` | <img src="https://youthweb.net/public/vendor/smilies/buegeln.gif" /> | :question: | `` | `buegeln.gif`
`:respekt:` | <img src="https://youthweb.net/public/vendor/smilies/288.gif" /> | :question: | `` | `288.gif`
`:naund:` | <img src="https://youthweb.net/public/vendor/smilies/00000673.gif" /> | :question: | `` | `00000673.gif`
`:doof:` | <img src="https://youthweb.net/public/vendor/smilies/doof.gif" /> | :question: | `` | `doof.gif`
`:ethe:` | <img src="https://youthweb.net/public/vendor/smilies/blumen.gif" /> | :question: | `` | `blumen.gif`
`:pascholti:` | <img src="https://youthweb.net/public/vendor/smilies/paschol.png" /> | :question: | `` | `paschol.png`
`:love1:` | <img src="https://youthweb.net/public/vendor/smilies/Love1.gif" /> | :question: | `` | `Love1.gif`
`:boxen2:` | <img src="https://youthweb.net/public/vendor/smilies/box.gif" /> | :question: | `` | `box.gif`
`:aldi:` | <img src="https://youthweb.net/public/vendor/smilies/aldi.gif" /> | :question: | `` | `aldi.gif`
`:mama:` | <img src="https://youthweb.net/public/vendor/smilies/mama.gif" /> | :question: | `` | `mama.gif`
`:bye:` | <img src="https://youthweb.net/public/vendor/smilies/fol.gif" /> | :question: | `` | `fol.gif`
`:birthday2:` | <img src="https://youthweb.net/public/vendor/smilies/birthday2.gif" /> | :question: | `` | `birthday2.gif`
`:eingebildet:` | <img src="https://youthweb.net/public/vendor/smilies/eingebildet.gif" /> | :question: | `` | `eingebildet.gif`
`:bipa:` | <img src="https://youthweb.net/public/vendor/smilies/spassbremse.gif" /> | :question: | `` | `spassbremse.gif`
`:gewalt:` | <img src="https://youthweb.net/public/vendor/smilies/Gewalt.gif" /> | :question: | `` | `Gewalt.gif`
`:kopfschlag:` | <img src="https://youthweb.net/public/vendor/smilies/Kopfschlag.gif" /> | :question: | `` | `Kopfschlag.gif`
`:look:` | <img src="https://youthweb.net/public/vendor/smilies/atanz2.gif" /> | :question: | `` | `atanz2.gif`
`:noterror:` | <img src="https://youthweb.net/public/vendor/smilies/noterror.gif" /> | :question: | `` | `noterror.gif`
`:schleimer:` | <img src="https://youthweb.net/public/vendor/smilies/schleimer.gif" /> | :question: | `` | `schleimer.gif`
`:gassi:` | <img src="https://youthweb.net/public/vendor/smilies/smilie_hund1.gif" /> | :question: | `` | `smilie_hund1.gif`
`:heck:` | <img src="https://youthweb.net/public/vendor/smilies/heck.gif" /> | :question: | `` | `heck.gif`
`:baseball:` | <img src="https://youthweb.net/public/vendor/smilies/aufsmaul.gif" /> | :question: | `` | `aufsmaul.gif`
`:heuldoch:` | <img src="https://youthweb.net/public/vendor/smilies/heuldoch.gif" /> | :question: | `` | `heuldoch.gif`
`:gutenacht:` | <img src="https://youthweb.net/public/vendor/smilies/Gute%20nacht.gif" /> | :question: | `` | `Gute nacht.gif`
`:weck` | <img src="https://youthweb.net/public/vendor/smilies/62.gif" /> | :question: | `` | `62.gif`
`:bussi:` | <img src="https://youthweb.net/public/vendor/smilies/bussi.gif" /> | :question: | `` | `bussi.gif`
`:sani:` | <img src="https://youthweb.net/public/vendor/smilies/477.gif" /> | :question: | `` | `477.gif`
`:worship:` | <img src="https://youthweb.net/public/vendor/smilies/a030.gif" /> | :question: | `` | `a030.gif`
`:regin:` | <img src="https://youthweb.net/public/vendor/smilies/a035.gif" /> | :question: | `` | `a035.gif`
`:campen:` | <img src="https://youthweb.net/public/vendor/smilies/haus56.gif" /> | :question: | `` | `haus56.gif`
`:inlove:` | <img src="https://youthweb.net/public/vendor/smilies/inlove.gif" /> | :question: | `` | `inlove.gif`
`:rockon:` | <img src="https://youthweb.net/public/vendor/smilies/rockon.gif" /> | :question: | `` | `rockon.gif`
`:reiten:` | <img src="https://youthweb.net/public/vendor/smilies/Reiten.gif" /> | :question: | `` | `Reiten.gif`
`:kotz:` | <img src="https://youthweb.net/public/vendor/smilies/kotzen.gif" /> | :question: | `` | `kotzen.gif`
`:pfeifen:` | <img src="https://youthweb.net/public/vendor/smilies/a050.gif" /> | :question: | `` | `a050.gif`
`:feierabend:` | <img src="https://youthweb.net/public/vendor/smilies/feierabend.gif" /> | :question: | `` | `feierabend.gif`
`:danke:` | <img src="https://youthweb.net/public/vendor/smilies/Danke.gif" /> | :question: | `` | `Danke.gif`
`:dagegen:` | <img src="https://youthweb.net/public/vendor/smilies/dagegen.gif" /> | :question: | `` | `dagegen.gif`
`:frauenpower:` | <img src="https://youthweb.net/public/vendor/smilies/frauen_power.gif" /> | :question: | `` | `frauen_power.gif`
`:bitte:` | <img src="https://youthweb.net/public/vendor/smilies/bbitte.gif" /> | :question: | `` | `bbitte.gif`
`:gibtnix:` | <img src="https://youthweb.net/public/vendor/smilies/gibtnix.gif" /> | :question: | `` | `gibtnix.gif`
`:wiejetzt:` | <img src="https://youthweb.net/public/vendor/smilies/haewiejetzt.gif" /> | :question: | `` | `haewiejetzt.gif`
`:hilfe:` | <img src="https://youthweb.net/public/vendor/smilies/iloveme.gif" /> | :question: | `` | `iloveme.gif`
`:partyon:` | <img src="https://youthweb.net/public/vendor/smilies/partyon+.gif" /> | :question: | `` | `partyon+.gif`
`:wolke7:` | <img src="https://youthweb.net/public/vendor/smilies/love5.gif" /> | :question: | `` | `love5.gif`
`:stecher:` | <img src="https://youthweb.net/public/vendor/smilies/stecher.gif" /> | :question: | `` | `stecher.gif`
`:bart:` | <img src="https://youthweb.net/public/vendor/smilies/disguise.gif" /> | :question: | `` | `disguise.gif`
`:rofll:` | <img src="https://youthweb.net/public/vendor/smilies/rofl1.gif" /> | :question: | `` | `rofl1.gif`
`:trainieren:` | <img src="https://youthweb.net/public/vendor/smilies/weight_lift.gif" /> | :question: | `` | `weight_lift.gif`
`:sboard:` | <img src="https://youthweb.net/public/vendor/smilies/snowboard.gif" /> | :question: | `` | `snowboard.gif`
`:schleimer2:` | <img src="https://youthweb.net/public/vendor/smilies/nerd.gif" /> | :question: | `` | `nerd.gif`
`:boxer:` | <img src="https://youthweb.net/public/vendor/smilies/boxed3_h4h.gif" /> | :question: | `` | `boxed3_h4h.gif`
`:ala:` | <img src="https://youthweb.net/public/vendor/smilies/ala.gif" /> | :question: | `` | `ala.gif`
`:bike:` | <img src="https://youthweb.net/public/vendor/smilies/biker_h4h.gif" /> | :question: | `` | `biker_h4h.gif`
`:lecker:` | <img src="https://youthweb.net/public/vendor/smilies/licklips.gif" /> | :question: | `` | `licklips.gif`
`:schlafen:` | <img src="https://youthweb.net/public/vendor/smilies/456.gif" /> | :question: | `` | `456.gif`
`:rappen:` | <img src="https://youthweb.net/public/vendor/smilies/rappen.gif" /> | :question: | `` | `rappen.gif`
`:ohnmacht:` | <img src="https://youthweb.net/public/vendor/smilies/Ohnmacht1.gif" /> | :question: | `` | `Ohnmacht1.gif`
`:wersucht:` | <img src="https://youthweb.net/public/vendor/smilies/wrsucht.gif" /> | :question: | `` | `wrsucht.gif`
`:insel:` | <img src="https://youthweb.net/public/vendor/smilies/Insel.gif" /> | :question: | `` | `Insel.gif`
`:lügen:` | <img src="https://youthweb.net/public/vendor/smilies/pinoccio.gif" /> | :question: | `` | `pinoccio.gif`
`:freak:` | <img src="https://youthweb.net/public/vendor/smilies/smiley-channel.de_schilder173.gif" /> | :question: | `` | `smiley-channel.de_schilder173.gif`
`:schwein:` | <img src="https://youthweb.net/public/vendor/smilies/smiley-channel.de_schilder195.gif" /> | :question: | `` | `smiley-channel.de_schilder195.gif`
`:lol4:` | <img src="https://youthweb.net/public/vendor/smilies/smiley-channel.de_schilder048.gif" /> | :question: | `` | `smiley-channel.de_schilder048.gif`
`:admin:` | <img src="https://youthweb.net/public/vendor/smilies/admins.gif" /> | :question: | `` | `admins.gif`
`:firefox:` | <img src="https://youthweb.net/public/vendor/smilies/270.gif" /> | :question: | `` | `270.gif`
`:school:` | <img src="https://youthweb.net/public/vendor/smilies/012.gif" /> | :question: | `` | `012.gif`
`:charmant:` | <img src="https://youthweb.net/public/vendor/smilies/286.gif" /> | :question: | `` | `286.gif`
`:ausflippen:` | <img src="https://youthweb.net/public/vendor/smilies/522.gif" /> | :question: | `` | `522.gif`
`:ww2:` | <img src="https://youthweb.net/public/vendor/smilies/221.gif" /> | :question: | `` | `221.gif`
`:bigeyes:` | <img src="https://youthweb.net/public/vendor/smilies/267.gif" /> | :question: | `` | `267.gif`
`:kaputtlachen:` | <img src="https://youthweb.net/public/vendor/smilies/281.gif" /> | :question: | `` | `281.gif`
`:unschuldig:` | <img src="https://youthweb.net/public/vendor/smilies/unschuldig.gif" /> | :question: | `` | `unschuldig.gif`
`:kirche:` | <img src="https://youthweb.net/public/vendor/smilies/kirche.gif" /> | :question: | `` | `kirche.gif`
`:frauenklatsch:` | <img src="https://youthweb.net/public/vendor/smilies/weiberplausch.gif" /> | :question: | `` | `weiberplausch.gif`
`:krieger:` | <img src="https://youthweb.net/public/vendor/smilies/379.gif" /> | :question: | `` | `379.gif`
`:essen2:` | <img src="https://youthweb.net/public/vendor/smilies/essen.gif" /> | :question: | `` | `essen.gif`
`:boese:` | <img src="https://youthweb.net/public/vendor/smilies/boese.gif" /> | :question: | `` | `boese.gif`
`:verneigen:` | <img src="https://youthweb.net/public/vendor/smilies/verneigen.gif" /> | :question: | `` | `verneigen.gif`
`;-)` | <img src="https://youthweb.net/public/vendor/smilies/winking.gif" /> | :question: | `` | `winking.gif`
`:ja:` | <img src="https://youthweb.net/public/vendor/smilies/ja.gif" /> | :question: | `` | `ja.gif`
`:-p` | <img src="https://youthweb.net/public/vendor/smilies/zunge.gif" /> | :question: | `` | `zunge.gif`
`:-(` | <img src="https://youthweb.net/public/vendor/smilies/mad01.gif" /> | :question: | `` | `mad01.gif`
`:nein:` | <img src="https://youthweb.net/public/vendor/smilies/nein.gif" /> | :question: | `` | `nein.gif`
`:uncool:` | <img src="https://youthweb.net/public/vendor/smilies/uncool.gif" /> | :question: | `` | `uncool.gif`
`:klatschen:` | <img src="https://youthweb.net/public/vendor/smilies/klatschen.gif" /> | :question: | `` | `klatschen.gif`
`:handy:` | <img src="https://youthweb.net/public/vendor/smilies/handy.gif" /> | :question: | `` | `handy.gif`
`:muede:` | <img src="https://youthweb.net/public/vendor/smilies/gaehnen.gif" /> | :question: | `` | `gaehnen.gif`
`:keineahnung:` | <img src="https://youthweb.net/public/vendor/smilies/keineahnung.gif" /> | :question: | `` | `keineahnung.gif`
`:rudolf:` | <img src="https://youthweb.net/public/vendor/smilies/rudolf.gif" /> | :question: | `` | `rudolf.gif`
`:kalt:` | <img src="https://youthweb.net/public/vendor/smilies/cold.gif" /> | :question: | `` | `cold.gif`
`:wman:` | <img src="https://youthweb.net/public/vendor/smilies/weihnachtsmann.gif" /> | :question: | `` | `weihnachtsmann.gif`
`:zitter:` | <img src="https://youthweb.net/public/vendor/smilies/xpb_zitter.gif" /> | :question: | `` | `xpb_zitter.gif`
`:wman2:` | <img src="https://youthweb.net/public/vendor/smilies/woswmann950.gif" /> | :question: | `` | `woswmann950.gif`
`:wman3:` | <img src="https://youthweb.net/public/vendor/smilies/woswmann1550.gif" /> | :question: | `` | `woswmann1550.gif`
`:hochzeit:` | <img src="https://youthweb.net/public/vendor/smilies/hochzeit.gif" /> | :question: | `` | `hochzeit.gif`
`:oops:` | <img src="https://youthweb.net/public/vendor/smilies/oops.gif" /> | :question: | `` | `oops.gif`
`:kaputthauen:` | <img src="https://youthweb.net/public/vendor/smilies/kaputthauen.gif" /> | :question: | `` | `kaputthauen.gif`
`:baden3:` | <img src="https://youthweb.net/public/vendor/smilies/baden3.gif" /> | :question: | `` | `baden3.gif`
`:lenak:` | <img src="https://youthweb.net/public/vendor/smilies/484.gif" /> | :question: | `` | `484.gif`
`:jeff:` | <img src="https://youthweb.net/public/vendor/smilies/Jeff.gif" /> | :question: | `` | `Jeff.gif`
`:knuddell:` | <img src="https://youthweb.net/public/vendor/smilies/knuddel.gif" /> | :question: | `` | `knuddel.gif`
`:ruhe:` | <img src="https://youthweb.net/public/vendor/smilies/ruhe.gif" /> | :question: | `` | `ruhe.gif`
`:cool:` | <img src="https://youthweb.net/public/vendor/smilies/cool.gif" /> | :question: | `` | `cool.gif`
`:manweisetnich:` | <img src="https://youthweb.net/public/vendor/smilies/man_weiset.png" /> | :question: | `` | `man_weiset.png`
`:(` | <img src="https://youthweb.net/public/vendor/smilies/frown.gif" /> | :question: | `` | `frown.gif`
`:knuddel2:` | <img src="https://youthweb.net/public/vendor/smilies/liebe_061.gif" /> | :question: | `` | `liebe_061.gif`
`:denken:` | <img src="https://youthweb.net/public/vendor/smilies/verwirrte_026.gif" /> | :question: | `` | `verwirrte_026.gif`
`:denken2:` | <img src="https://youthweb.net/public/vendor/smilies/Denken2.gif" /> | :question: | `` | `Denken2.gif`
`:denken3:` | <img src="https://youthweb.net/public/vendor/smilies/idee.gif" /> | :question: | `` | `idee.gif`
`:knuddel3:` | <img src="https://youthweb.net/public/vendor/smilies/liebe_028.gif" /> | :question: | `` | `liebe_028.gif`
`:romantik:` | <img src="https://youthweb.net/public/vendor/smilies/romantik.gif" /> | :question: | `` | `romantik.gif`
`:foto:` | <img src="https://youthweb.net/public/vendor/smilies/fotosmilie.gif" /> | :question: | `` | `fotosmilie.gif`
`:sauer2:` | <img src="https://youthweb.net/public/vendor/smilies/sauer.gif" /> | :question: | `` | `sauer.gif`
`:krankes:` | <img src="https://youthweb.net/public/vendor/smilies/Krankes.gif" /> | :question: | `` | `Krankes.gif`
`:doof1:` | <img src="https://youthweb.net/public/vendor/smilies/bin_ich_doof.gif" /> | :question: | `` | `bin_ich_doof.gif`
`:car:` | <img src="https://youthweb.net/public/vendor/smilies/car.gif" /> | :question: | `` | `car.gif`
`:wayne:` | <img src="https://youthweb.net/public/vendor/smilies/wayne_interessierts.gif" /> | :question: | `` | `wayne_interessierts.gif`
`:snowboard:` | <img src="https://youthweb.net/public/vendor/smilies/snowboardler.gif" /> | :question: | `` | `snowboardler.gif`
`:sagnix:` | <img src="https://youthweb.net/public/vendor/smilies/ich_sag_nix.gif" /> | :question: | `` | `ich_sag_nix.gif`
`:regin2:` | <img src="https://youthweb.net/public/vendor/smilies/hauen.gif" /> | :question: | `` | `hauen.gif`
`:kuuhl:` | <img src="https://youthweb.net/public/vendor/smilies/kuuuhl.png" /> | :question: | `` | `kuuuhl.png`
`:saugen:` | <img src="https://youthweb.net/public/vendor/smilies/staubsauger!.gif" /> | :question: | `` | `staubsauger!.gif`
`:para:` | <img src="https://youthweb.net/public/vendor/smilies/kreis.gif" /> | :question: | `` | `kreis.gif`
`:blach:` | <img src="https://youthweb.net/public/vendor/smilies/blach.gif" /> | :question: | `` | `blach.gif`
`:rofllll:` | <img src="https://youthweb.net/public/vendor/smilies/smilie_happy_251.gif" /> | :question: | `` | `smilie_happy_251.gif`
`:spam:` | <img src="https://youthweb.net/public/vendor/smilies/forum.gif" /> | :question: | `` | `forum.gif`
`:ohnemich:` | <img src="https://youthweb.net/public/vendor/smilies/bpb_ohnemi.gif" /> | :question: | `` | `bpb_ohnemi.gif`
`:osterkuss:` | <img src="https://youthweb.net/public/vendor/smilies/o_78-001.gif" /> | :question: | `` | `o_78-001.gif`
`:eiermaler:` | <img src="https://youthweb.net/public/vendor/smilies/ostern_71.gif" /> | :question: | `` | `ostern_71.gif`
`:hase:` | <img src="https://youthweb.net/public/vendor/smilies/HAAAAAAAAAAAASE.gif" /> | :question: | `` | `HAAAAAAAAAAAASE.gif`
`:hase1:` | <img src="https://youthweb.net/public/vendor/smilies/hase3.gif" /> | :question: | `` | `hase3.gif`
`:hase2:` | <img src="https://youthweb.net/public/vendor/smilies/HASE4.gif" /> | :question: | `` | `HASE4.gif`
`:hase3:` | <img src="https://youthweb.net/public/vendor/smilies/has2.gif" /> | :question: | `` | `has2.gif`
`:irre:` | <img src="https://youthweb.net/public/vendor/smilies/bunny_4.gif" /> | :question: | `` | `bunny_4.gif`
`:herz:` | <img src="https://youthweb.net/public/vendor/smilies/herzchen.gif" /> | :question: | `` | `herzchen.gif`
`:achja:` | <img src="https://youthweb.net/public/vendor/smilies/achja.gif" /> | :question: | `` | `achja.gif`
`:morgähn:` | <img src="https://youthweb.net/public/vendor/smilies/morgaehn.gif" /> | :question: | `` | `morgaehn.gif`
`:amen:` | <img src="https://youthweb.net/public/vendor/smilies/amen.gif" /> | :question: | `` | `amen.gif`
`:aufwachen:` | <img src="https://youthweb.net/public/vendor/smilies/aufwachen.gif" /> | :question: | `` | `aufwachen.gif`
`:vio:` | <img src="https://youthweb.net/public/vendor/smilies/phone02.gif" /> | :question: | `` | `phone02.gif`
`:admins:` | <img src="https://youthweb.net/public/vendor/smilies/admin.jpg" /> | :question: | `` | `admin.jpg`
`:romeo:` | <img src="https://youthweb.net/public/vendor/smilies/Romeo.gif" /> | :question: | `` | `Romeo.gif`
`:shy:` | <img src="https://youthweb.net/public/vendor/smilies/jo.gif" /> | :question: | `` | `jo.gif`
`:tbaum:` | <img src="https://youthweb.net/public/vendor/smilies/1xmas500.gif" /> | :question: | `` | `1xmas500.gif`
`:kopf:` | <img src="https://youthweb.net/public/vendor/smilies/kopf.gif" /> | :question: | `` | `kopf.gif`
`:closed:` | <img src="https://youthweb.net/public/vendor/smilies/cl.gif" /> | :question: | `` | `cl.gif`
`:deutschland:` | <img src="https://youthweb.net/public/vendor/smilies/deutsc.gif" /> | :question: | `` | `deutsc.gif`
`:laugh:` | <img src="https://youthweb.net/public/vendor/smilies/deutschland-lacht-ueber-holland.gif" /> | :question: | `` | `deutschland-lacht-ueber-holland.gif`
`:final:` | <img src="https://youthweb.net/public/vendor/smilies/final04.gif" /> | :question: | `` | `final04.gif`
`:wmleo:` | <img src="https://youthweb.net/public/vendor/smilies/wmgoleo.gif" /> | :question: | `` | `wmgoleo.gif`
`:brasil:` | <img src="https://youthweb.net/public/vendor/smilies/brasil.gif" /> | :question: | `` | `brasil.gif`
`:fussball:` | <img src="https://youthweb.net/public/vendor/smilies/fussball-smilie.gif" /> | :question: | `` | `fussball-smilie.gif`
`:kopfball:` | <img src="https://youthweb.net/public/vendor/smilies/soccer_2.gif" /> | :question: | `` | `soccer_2.gif`
`:rot:` | <img src="https://youthweb.net/public/vendor/smilies/platzverweis.gif" /> | :question: | `` | `platzverweis.gif`
`:leeep:` | <img src="https://youthweb.net/public/vendor/smilies/leep.gif" /> | :question: | `` | `leep.gif`
`:-[` | <img src="https://youthweb.net/public/vendor/smilies/49_2.gif" /> | :question: | `` | `49_2.gif`
`:togo:` | <img src="https://youthweb.net/public/vendor/smilies/wm2006togo1.gif" /> | :question: | `` | `wm2006togo1.gif`
`:japan:` | <img src="https://youthweb.net/public/vendor/smilies/wm2006japan0.gif" /> | :question: | `` | `wm2006japan0.gif`
`:roli:` | <img src="https://youthweb.net/public/vendor/smilies/boese2.gif" /> | :question: | `` | `boese2.gif`
`:portugal:` | <img src="https://youthweb.net/public/vendor/smilies/portugal.gif" /> | :question: | `` | `portugal.gif`
`:meld:` | <img src="https://youthweb.net/public/vendor/smilies/meld.gif" /> | :question: | `` | `meld.gif`
`:moin:` | <img src="https://youthweb.net/public/vendor/smilies/Moin.gif" /> | :question: | `` | `Moin.gif`
`:hm:` | <img src="https://youthweb.net/public/vendor/smilies/hm.gif" /> | :question: | `` | `hm.gif`
`:blume:` | <img src="https://youthweb.net/public/vendor/smilies/6874.gif" /> | :question: | `` | `6874.gif`
`:inlove2:` | <img src="https://youthweb.net/public/vendor/smilies/huglove.gif" /> | :question: | `` | `huglove.gif`
`:tess:` | <img src="https://youthweb.net/public/vendor/smilies/wm2006tschechien1.gif" /> | :question: | `` | `wm2006tschechien1.gif`
`:spanien:` | <img src="https://youthweb.net/public/vendor/smilies/wm2006spanien1.gif" /> | :question: | `` | `wm2006spanien1.gif`
`:angola:` | <img src="https://youthweb.net/public/vendor/smilies/wm2006angola2.gif" /> | :question: | `` | `wm2006angola2.gif`
`:Italien:` | <img src="https://youthweb.net/public/vendor/smilies/wm2006italien1.gif" /> | :question: | `` | `wm2006italien1.gif`
`:ich:` | <img src="https://youthweb.net/public/vendor/smilies/iiich.gif" /> | :question: | `` | `iiich.gif`
`:shok:` | <img src="https://youthweb.net/public/vendor/smilies/1shok.gif" /> | :question: | `` | `1shok.gif`
`:luna:` | <img src="https://youthweb.net/public/vendor/smilies/animal-smiley-031.gif" /> | :question: | `` | `animal-smiley-031.gif`
`:holland:` | <img src="https://youthweb.net/public/vendor/smilies/wm2006niederlande1.gif" /> | :question: | `` | `wm2006niederlande1.gif`
`:gelb:` | <img src="https://youthweb.net/public/vendor/smilies/gelb.gif" /> | :question: | `` | `gelb.gif`
`:weight:` | <img src="https://youthweb.net/public/vendor/smilies/weight_lift2.gif" /> | :question: | `` | `weight_lift2.gif`
`:england:` | <img src="https://youthweb.net/public/vendor/smilies/wm2006england1.gif" /> | :question: | `` | `wm2006england1.gif`
`:ghana:` | <img src="https://youthweb.net/public/vendor/smilies/wm2006ghana1.gif" /> | :question: | `` | `wm2006ghana1.gif`
`:frankreich:` | <img src="https://youthweb.net/public/vendor/smilies/wm2006frankreich1.gif" /> | :question: | `` | `wm2006frankreich1.gif`
`:spam1:` | <img src="https://youthweb.net/public/vendor/smilies/spamfrust.gif" /> | :question: | `` | `spamfrust.gif`
`:ukraine:` | <img src="https://youthweb.net/public/vendor/smilies/wm2006ukraine1.gif" /> | :question: | `` | `wm2006ukraine1.gif`
`:2cool:` | <img src="https://youthweb.net/public/vendor/smilies/cool3.gif" /> | :question: | `` | `cool3.gif`
`:rulez:` | <img src="https://youthweb.net/public/vendor/smilies/smiley-channel.de_lesen021.gif" /> | :question: | `` | `smiley-channel.de_lesen021.gif`
`:israel:` | <img src="https://youthweb.net/public/vendor/smilies/tikva.gif" /> | :question: | `` | `tikva.gif`
`:poker:` | <img src="https://youthweb.net/public/vendor/smilies/poker.gif" /> | :question: | `` | `poker.gif`
`:spth:` | <img src="https://youthweb.net/public/vendor/smilies/spth.png" /> | :question: | `` | `spth.png`
`:JoLo:` | <img src="https://youthweb.net/public/vendor/smilies/MrSax02.gif" /> | :question: | `` | `MrSax02.gif`
`:on:` | <img src="https://youthweb.net/public/vendor/smilies/On.gif" /> | :question: | `` | `On.gif`
`:mb:` | <img src="https://youthweb.net/public/vendor/smilies/eine_wie_keine.png" /> | :question: | `` | `eine_wie_keine.png`
`:boese1:` | <img src="https://youthweb.net/public/vendor/smilies/boese.gif" /> | :question: | `` | `boese.gif`
`:boese2:` | <img src="https://youthweb.net/public/vendor/smilies/boese1.gif" /> | :question: | `` | `boese1.gif`
`:friend:` | <img src="https://youthweb.net/public/vendor/smilies/friend.gif" /> | :question: | `` | `friend.gif`
`:muede1:` | <img src="https://youthweb.net/public/vendor/smilies/muede.gif" /> | :question: | `` | `muede.gif`
`:steffi:` | <img src="https://youthweb.net/public/vendor/smilies/traurig.gif" /> | :question: | `` | `traurig.gif`
`:super1:` | <img src="https://youthweb.net/public/vendor/smilies/froh.gif" /> | :question: | `` | `froh.gif`
`:ody:` | <img src="https://youthweb.net/public/vendor/smilies/gg!!!!!!!!!!!!!!!!!!!.gif" /> | :question: | `` | `gg!!!!!!!!!!!!!!!!!!!.gif`
`:halt:` | <img src="https://youthweb.net/public/vendor/smilies/halt_stop.gif" /> | :question: | `` | `halt_stop.gif`
`:lachen1:` | <img src="https://youthweb.net/public/vendor/smilies/hand_vorm_mund.gif" /> | :question: | `` | `hand_vorm_mund.gif`
`:LP:` | <img src="https://youthweb.net/public/vendor/smilies/ironie.gif" /> | :question: | `` | `ironie.gif`
`:superman:` | <img src="https://youthweb.net/public/vendor/smilies/sman.gif" /> | :question: | `` | `sman.gif`
`:skater:` | <img src="https://youthweb.net/public/vendor/smilies/skateboard.gif" /> | :question: | `` | `skateboard.gif`
`:gelb1:` | <img src="https://youthweb.net/public/vendor/smilies/sport.gif" /> | :question: | `` | `sport.gif`
`:abcheck:` | <img src="https://youthweb.net/public/vendor/smilies/blinkendes_auge_mit_herzchen.gif" /> | :question: | `` | `blinkendes_auge_mit_herzchen.gif`
`:dl:` | <img src="https://youthweb.net/public/vendor/smilies/diane.gif" /> | :question: | `` | `diane.gif`
`:RW:` | <img src="https://youthweb.net/public/vendor/smilies/rita.gif" /> | :question: | `` | `rita.gif`
`:yw:` | <img src="https://youthweb.net/public/vendor/smilies/fehler.gif" /> | :question: | `` | `fehler.gif`
`:schild:` | <img src="https://youthweb.net/public/vendor/smilies/schild.gif" /> | :question: | `` | `schild.gif`
`:firefox1:` | <img src="https://youthweb.net/public/vendor/smilies/mozilla.gif" /> | :question: | `` | `mozilla.gif`
`:2lee:` | <img src="https://youthweb.net/public/vendor/smilies/lee.gif" /> | :question: | `` | `lee.gif`
`:pizzaess:` | <img src="https://youthweb.net/public/vendor/smilies/pizzaess.gif" /> | :question: | `` | `pizzaess.gif`
`:emoo:` | <img src="https://youthweb.net/public/vendor/smilies/emo.gif" /> | :question: | `` | `emo.gif`
`:hehe:` | <img src="https://youthweb.net/public/vendor/smilies/hehe.gif" /> | :question: | `` | `hehe.gif`
`:ljena:` | <img src="https://youthweb.net/public/vendor/smilies/ani_sonstige137.gif" /> | :question: | `` | `ani_sonstige137.gif`
`:neugierig:` | <img src="https://youthweb.net/public/vendor/smilies/Neugierig.gif" /> | :question: | `` | `Neugierig.gif`
`:F5:` | <img src="https://youthweb.net/public/vendor/smilies/ani_schilder55.gif" /> | :question: | `` | `ani_schilder55.gif`
`:lachen:` | <img src="https://youthweb.net/public/vendor/smilies/ani_lachende2.gif" /> | :question: | `` | `ani_lachende2.gif`
`:saugen1:` | <img src="https://youthweb.net/public/vendor/smilies/Saugen1.gif" /> | :question: | `` | `Saugen1.gif`
`:angi:` | <img src="https://youthweb.net/public/vendor/smilies/f025.gif" /> | :question: | `` | `f025.gif`
`:hau:` | <img src="https://youthweb.net/public/vendor/smilies/hau.gif" /> | :question: | `` | `hau.gif`
`:hust:` | <img src="https://youthweb.net/public/vendor/smilies/husten.gif" /> | :question: | `` | `husten.gif`
`:lolli:` | <img src="https://youthweb.net/public/vendor/smilies/lolli.gif" /> | :question: | `` | `lolli.gif`
`:ranger:` | <img src="https://youthweb.net/public/vendor/smilies/ranger.gif" /> | :question: | `` | `ranger.gif`
`:lena87:` | <img src="https://youthweb.net/public/vendor/smilies/a020.gif" /> | :question: | `` | `a020.gif`
`:partytime:` | <img src="https://youthweb.net/public/vendor/smilies/sta_schilder140.gif" /> | :question: | `` | `sta_schilder140.gif`
`:graade:` | <img src="https://youthweb.net/public/vendor/smilies/sta_schilder365.gif" /> | :question: | `` | `sta_schilder365.gif`
`:wishes:` | <img src="https://youthweb.net/public/vendor/smilies/wishes.gif" /> | :question: | `` | `wishes.gif`
`:russ:` | <img src="https://youthweb.net/public/vendor/smilies/smilies_flaggen056.gif" /> | :question: | `` | `smilies_flaggen056.gif`
`:sorry:` | <img src="https://youthweb.net/public/vendor/smilies/sta_schilder116.gif" /> | :question: | `` | `sta_schilder116.gif`
`:spiegel:` | <img src="https://youthweb.net/public/vendor/smilies/lustich.gif" /> | :question: | `` | `lustich.gif`
`:wman5:` | <img src="https://youthweb.net/public/vendor/smilies/woswmann1560.gif" /> | :question: | `` | `woswmann1560.gif`
`:wmanlachen:` | <img src="https://youthweb.net/public/vendor/smilies/woswmann1810.gif" /> | :question: | `` | `woswmann1810.gif`
`:hannibal:` | <img src="https://youthweb.net/public/vendor/smilies/shv.gif" /> | :question: | `` | `shv.gif`
`:sheep:` | <img src="https://youthweb.net/public/vendor/smilies/sheep.gif" /> | :question: | `` | `sheep.gif`
`:grizzly:` | <img src="https://youthweb.net/public/vendor/smilies/Teddy.gif" /> | :question: | `` | `Teddy.gif`
`:frauenimforum:` | <img src="https://youthweb.net/public/vendor/smilies/frauen_im_forum.gif" /> | :question: | `` | `frauen_im_forum.gif`
`:checka:` | <img src="https://youthweb.net/public/vendor/smilies/peace.gif" /> | :question: | `` | `peace.gif`
`:yeah:` | <img src="https://youthweb.net/public/vendor/smilies/yeeeah.gif" /> | :question: | `` | `yeeeah.gif`
`:klavier:` | <img src="https://youthweb.net/public/vendor/smilies/klvier.gif" /> | :question: | `` | `klvier.gif`
`:kante:` | <img src="https://youthweb.net/public/vendor/smilies/bodybuilder.gif" /> | :question: | `` | `bodybuilder.gif`
`:roflll:` | <img src="https://youthweb.net/public/vendor/smilies/roflll.gif" /> | :question: | `` | `roflll.gif`
`:ohnmacht1:` | <img src="https://youthweb.net/public/vendor/smilies/ohnmacht.gif" /> | :question: | `` | `ohnmacht.gif`
`:sylvester:` | <img src="https://youthweb.net/public/vendor/smilies/weihnachten17.gif" /> | :question: | `` | `weihnachten17.gif`
`:keks:` | <img src="https://youthweb.net/public/vendor/smilies/keks.gif" /> | :question: | `` | `keks.gif`
`:radfahrer:` | <img src="https://youthweb.net/public/vendor/smilies/chiller.gif" /> | :question: | `` | `chiller.gif`
`:nadia:` | <img src="https://youthweb.net/public/vendor/smilies/nadia.gif" /> | :question: | `` | `nadia.gif`
`:bball:` | <img src="https://youthweb.net/public/vendor/smilies/baseball.gif" /> | :question: | `` | `baseball.gif`
`:eis:` | <img src="https://youthweb.net/public/vendor/smilies/eis.gif" /> | :question: | `` | `eis.gif`
`:geige:` | <img src="https://youthweb.net/public/vendor/smilies/gaige.gif" /> | :question: | `` | `gaige.gif`
`:qflöte:` | <img src="https://youthweb.net/public/vendor/smilies/querfloete.gif" /> | :question: | `` | `querfloete.gif`
`:training:` | <img src="https://youthweb.net/public/vendor/smilies/training1.gif" /> | :question: | `` | `training1.gif`
`:chor:` | <img src="https://youthweb.net/public/vendor/smilies/schief_singen.gif" /> | :question: | `` | `schief_singen.gif`
`:luck:` | <img src="https://youthweb.net/public/vendor/smilies/good_luck.gif" /> | :question: | `` | `good_luck.gif`
`:otto:` | <img src="https://youthweb.net/public/vendor/smilies/eclipsee_gold_cup.gif" /> | :question: | `` | `eclipsee_gold_cup.gif`
`:diddy:` | <img src="https://youthweb.net/public/vendor/smilies/schlagzeug.gif" /> | :question: | `` | `schlagzeug.gif`
`:isy:` | <img src="https://youthweb.net/public/vendor/smilies/skuchen.gif" /> | :question: | `` | `skuchen.gif`
`:alex:` | <img src="https://youthweb.net/public/vendor/smilies/dunce.gif" /> | :question: | `` | `dunce.gif`
`:shenok:` | <img src="https://youthweb.net/public/vendor/smilies/hund.gif" /> | :question: | `` | `hund.gif`
`:ade:` | <img src="https://youthweb.net/public/vendor/smilies/ADE_Smily.gif" /> | :question: | `` | `ADE_Smily.gif`
`:dachschaden:` | <img src="https://youthweb.net/public/vendor/smilies/a085.gif" /> | :question: | `` | `a085.gif`
`:yves:` | <img src="https://youthweb.net/public/vendor/smilies/smilie_sonst_011.gif" /> | :question: | `` | `smilie_sonst_011.gif`
`:aly:` | <img src="https://youthweb.net/public/vendor/smilies/c080.gif" /> | :question: | `` | `c080.gif`
`:laurie:` | <img src="https://youthweb.net/public/vendor/smilies/ups.gif" /> | :question: | `` | `ups.gif`
`:blackb:` | <img src="https://youthweb.net/public/vendor/smilies/82.gif" /> | :question: | `` | `82.gif`
`:koko:` | <img src="https://youthweb.net/public/vendor/smilies/c010.gif" /> | :question: | `` | `c010.gif`
`:bahnhof:` | <img src="https://youthweb.net/public/vendor/smilies/bahnhof.gif" /> | :question: | `` | `bahnhof.gif`
`:basketball:` | <img src="https://youthweb.net/public/vendor/smilies/basketball.gif" /> | :question: | `` | `basketball.gif`
`:boxer1:` | <img src="https://youthweb.net/public/vendor/smilies/boxer.gif" /> | :question: | `` | `boxer.gif`
`:gitarre:` | <img src="https://youthweb.net/public/vendor/smilies/gittare.gif" /> | :question: | `` | `gittare.gif`
`:hand:` | <img src="https://youthweb.net/public/vendor/smilies/haendedruck.gif" /> | :question: | `` | `haendedruck.gif`
`:sos:` | <img src="https://youthweb.net/public/vendor/smilies/help_sos.gif" /> | :question: | `` | `help_sos.gif`
`:krank:` | <img src="https://youthweb.net/public/vendor/smilies/krank.gif" /> | :question: | `` | `krank.gif`
`:krank1:` | <img src="https://youthweb.net/public/vendor/smilies/krank1.gif" /> | :question: | `` | `krank1.gif`
`:lästern:` | <img src="https://youthweb.net/public/vendor/smilies/laestern.gif" /> | :question: | `` | `laestern.gif`
`:küsschen:` | <img src="https://youthweb.net/public/vendor/smilies/love_350.gif" /> | :question: | `` | `love_350.gif`
`:willkommen:` | <img src="https://youthweb.net/public/vendor/smilies/Willkommen.gif" /> | :question: | `` | `Willkommen.gif`
`:ywsuchti:` | <img src="https://youthweb.net/public/vendor/smilies/urlaub_lapi.gif" /> | :question: | `` | `urlaub_lapi.gif`
`:sun:` | <img src="https://youthweb.net/public/vendor/smilies/sun.gif" /> | :question: | `` | `sun.gif`
`:run:` | <img src="https://youthweb.net/public/vendor/smilies/run.gif" /> | :question: | `` | `run.gif`
`:chris:` | <img src="https://youthweb.net/public/vendor/smilies/smilie_frech_126.gif" /> | :question: | `` | `smilie_frech_126.gif`
`:gassi1:` | <img src="https://youthweb.net/public/vendor/smilies/smilie_tier_142.gif" /> | :question: | `` | `smilie_tier_142.gif`
`:olympia:` | <img src="https://youthweb.net/public/vendor/smilies/smilie_sp_257.gif" /> | :question: | `` | `smilie_sp_257.gif`
`:pico:` | <img src="https://youthweb.net/public/vendor/smilies/pico.gif" /> | :question: | `` | `pico.gif`
`:pray:` | <img src="https://youthweb.net/public/vendor/smilies/202_animated_person_praying.gif" /> | :question: | `` | `202_animated_person_praying.gif`
`:mimi:` | <img src="https://youthweb.net/public/vendor/smilies/smilie_frech_129.gif" /> | :question: | `` | `smilie_frech_129.gif`
`:pecora:` | <img src="https://youthweb.net/public/vendor/smilies/n030.gif" /> | :question: | `` | `n030.gif`
`:achso:` | <img src="https://youthweb.net/public/vendor/smilies/99.gif" /> | :question: | `` | `99.gif`
`:elliw:` | <img src="https://youthweb.net/public/vendor/smilies/smilie_winke_003.gif" /> | :question: | `` | `smilie_winke_003.gif`
`:sunchill:` | <img src="https://youthweb.net/public/vendor/smilies/s030.gif" /> | :question: | `` | `s030.gif`
`:JoLo1:` | <img src="https://youthweb.net/public/vendor/smilies/saxo.gif" /> | :question: | `` | `saxo.gif`
`:blümchen:` | <img src="https://youthweb.net/public/vendor/smilies/blumekuss.gif" /> | :question: | `` | `blumekuss.gif`
`:grill:` | <img src="https://youthweb.net/public/vendor/smilies/grillen.gif" /> | :question: | `` | `grillen.gif`
`:rubin:` | <img src="https://youthweb.net/public/vendor/smilies/boast.gif" /> | :question: | `` | `boast.gif`
`:gamer:` | <img src="https://youthweb.net/public/vendor/smilies/gamer4.gif" /> | :question: | `` | `gamer4.gif`
`:manni:` | <img src="https://youthweb.net/public/vendor/smilies/smilie_winke_048.gif" /> | :question: | `` | `smilie_winke_048.gif`
`:evi:` | <img src="https://youthweb.net/public/vendor/smilies/smilie_girl_068.gif" /> | :question: | `` | `smilie_girl_068.gif`
`:ordi:` | <img src="https://youthweb.net/public/vendor/smilies/ordi.gif" /> | :question: | `` | `ordi.gif`
`:bvb:` | <img src="https://youthweb.net/public/vendor/smilies/smilie_bvb.gif" /> | :question: | `` | `smilie_bvb.gif`
`:shy2:` | <img src="https://youthweb.net/public/vendor/smilies/smilie_girl_066.gif" /> | :question: | `` | `smilie_girl_066.gif`
`:deutschland2:` | <img src="https://youthweb.net/public/vendor/smilies/WM.gif" /> | :question: | `` | `WM.gif`
`:uschke:` | <img src="https://youthweb.net/public/vendor/smilies/3434.gif" /> | :question: | `` | `3434.gif`
`:admin2:` | <img src="https://youthweb.net/public/vendor/smilies/admins2.gif" /> | :question: | `` | `admins2.gif`
`:gutebesserung:` | <img src="https://youthweb.net/public/vendor/smilies/Gute%20Besserung.gif" /> | :question: | `` | `Gute Besserung.gif`
`:welcome:` | <img src="https://youthweb.net/public/vendor/smilies/welcome.gif" /> | :question: | `` | `welcome.gif`
`:hotwheel:` | <img src="https://youthweb.net/public/vendor/smilies/wheelchair.gif" /> | :question: | `` | `wheelchair.gif`
`:mokka:` | <img src="https://youthweb.net/public/vendor/smilies/mokka.gif" /> | :question: | `` | `mokka.gif`
`:schalke:` | <img src="https://youthweb.net/public/vendor/smilies/s04fahne.gif" /> | :question: | `` | `s04fahne.gif`
