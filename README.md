# Migration der Smilies zu Emojis

Fortschritt: ![](http://progressed.io/bar/3)

[![Gitter](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/youthweb/smiley-emoji-migration?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

Auf Youthweb möchten wir in Zukunft Emojis statt der Smilies verwenden. Das macht es später einfacher, Posts und andere Inhalte auch außerhalb von Youthweb (z.B. in einer App) anzuzeigen.

Wir planen, die Emojis von [emojione.com](http://emojione.com) auf Youthweb zu verwenden. Die Umsetzung wird noch etwas Zeit brauchen, aber wir benötigen zur Planung vorab eine Liste, gegen welche Emojis die Smilies ersetzt werden sollen. Wenn wir das nicht machen und schon jetzt auf Emojis umsteigen, machen wir alte Forenposts und andere Inhalte kaputt, die noch auf die Smilies aufbauen.

## Mithelfen

Wenn alle mit anpacken, geht es schneller. Wenn du uns helfen möchtest, die entsprechenden Emojis zu finden, dann kannst du folgendes machen:

1. Guck in der Liste unten, ob es ein Smiley gibt, das noch kein Emoji hat.
2. Suche auf der [Emojione Demoseite](http://www.emojione.com/demo) nach einem Emoji, dass dem Smiley am ähnlichsten ist.
3. Bearbeite die Liste und schick uns einen Pull-Request (benötigt einen Github-Account).

Bitte trage das Emoji als Bild (`![](http://cdn.jsdelivr.net/emojione/assets/png/1F3A3.png?v=1.2.4)`) und als Shortcode (`:fishing_pole_and_fish:`) ein, damit man die Bilder besser vergleichen kann. Die Url zu den Emoji-Bildern findest du auf der [Emojione Demoseite](http://www.emojione.com/demo).

Es ist möglich, dass mehrere Emojis für ein Smiley passen. Und es kann sein, dass ein Smiley nicht gegen ein Emoji ersetzt werden kann. Bei solchen Fälle müssen wir einzeln diskutieren und entscheiden. Die Diskussion findet hier auf Github statt. Zur Kommunikation kann das Forum auf Youthweb und [Gitterchat](https://gitter.im/youthweb/smiley-emoji-migration) verwendet werden.

### Markdown Preview Plugins für Editoren

Da bei allen Online-Markdown Editoren leider keine .gif-Grafiken unterstützt werden, gibt es hier Lösungen für Plugins beliebter Editoren:

1. Wer Sublime als Texteditor nutzt kann auf [dieses Plugin](https://github.com/revolunet/sublimetext-markdown-preview) zurückgreifen und bekommt so eine Live-Preview (z.B. im Browser) mit der man dann schöner und schneller arbeiten kann.
2. Für [Atom](https://atom.io/) gibt es ebenfalls das [Offizielle Markdown Preview](https://github.com/atom/markdown-preview) Package.

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
`:fischer:` | ![](https://youthweb.net/public/vendor/smilies/angeln.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F3A3.png?v=1.2.4) | `:fishing_pole_and_fish:` | `angeln.gif`
`:sleep:` | ![](https://youthweb.net/public/vendor/smilies/14.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F634.png?v=1.2.4) | `:sleeping:` | `14.gif`
`:angst:` | ![](https://youthweb.net/public/vendor/smilies/angst.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F628.png?v=1.2.4) | `:fearful:` | `angst.gif`
`:gworsky:` | ![](https://youthweb.net/public/vendor/smilies/crazydace.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F483.png?v=1.2.4) | `:dancer:` | `crazydace.gif`
`:streiten:` | ![](https://youthweb.net/public/vendor/smilies/093.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F4A2.png?v=1.2.4) | `:anger:` | `093.gif`
`:baby:` | ![](https://youthweb.net/public/vendor/smilies/Baby.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F476.png?v=1.2.4) | `:baby:` | `Baby.gif`
`:birthday:` | ![](https://youthweb.net/public/vendor/smilies/birthday.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F382.png?v=1.2.4) | `:birthday:` | `birthday.gif`
`:bounce:` | ![](https://youthweb.net/public/vendor/smilies/a065.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F603.png?v=1.2.4) | `:smiley:` | `a065.gif`
`:buck:` | ![](https://youthweb.net/public/vendor/smilies/buck.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F60B.png?v=1.2.4) | `:yum:` | `buck.gif`
`:confused:` | ![](https://youthweb.net/public/vendor/smilies/confused2.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F615.png?v=1.2.4) | `:confused:` | `confused2.gif`
`:heul:` | ![](https://youthweb.net/public/vendor/smilies/crying.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F62D.png?v=1.2.4) | `:sob:` | `crying.gif`
`:gg:` | ![](https://youthweb.net/public/vendor/smilies/gg.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F600.png?v=1.2.4) | `:grinning:` | `gg.gif`
`:king:` | ![](https://youthweb.net/public/vendor/smilies/king.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F451.png?v=1.2.4) | `:crown:` | `king.gif`
`:krach:` | ![](https://youthweb.net/public/vendor/smilies/Krach.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F621.png?v=1.2.4) | `:rage:` | `Krach.gif`
`:kreisen:` | ![](https://youthweb.net/public/vendor/smilies/kreisen.gif) | :question: | `` | `kreisen.gif`
`:lol:` | ![](https://youthweb.net/public/vendor/smilies/lol.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F61C.png?v=1.2.4) | `:stuck_out_tongue_winking_eye:` | `lol.gif`
`:leaa:` | ![](https://youthweb.net/public/vendor/smilies/smilie_girl_151.gif) | :question: | `` | `smilie_girl_151.gif`
`:esta:` | ![](https://youthweb.net/public/vendor/smilies/496.gif) | :question: | `` | `496.gif`
`:mecker:` | ![](https://youthweb.net/public/vendor/smilies/mecker.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F446.png?v=1.2.4) | `:point_up_2:` | `mecker.gif`
`:band:` | ![](https://youthweb.net/public/vendor/smilies/Band.gif) | :question: | `` | `Band.gif`
`:music:` | ![](https://youthweb.net/public/vendor/smilies/kopfhoehrer.gif) | :question: | `` | `kopfhoehrer.gif`
`:band2:` | ![](https://youthweb.net/public/vendor/smilies/musicband.gif) | :question: | `` | `musicband.gif`
`:nervensaege:` | ![](https://youthweb.net/public/vendor/smilies/nervensaege.gif) | :question: | `` | `nervensaege.gif`
`:dj:` | ![](https://youthweb.net/public/vendor/smilies/dj.gif) | :question: | `` | `dj.gif`
`:birthday3:` | ![](https://youthweb.net/public/vendor/smilies/birthday3.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F388.png?v=1.2.4) | `:balloon:` | `birthday3.gif`
`:schulstreit:` | ![](https://youthweb.net/public/vendor/smilies/059.gif) | :question: | `` | `059.gif`
`:lesen:` | ![](https://youthweb.net/public/vendor/smilies/buch.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F4DA.png?v=1.2.4) | `:books:` | `buch.gif`
`:rofl:` | ![](https://youthweb.net/public/vendor/smilies/rofl.gif) | :question: | `` | `rofl.gif`
`:-)` | ![](https://youthweb.net/public/vendor/smilies/smile0001.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F603.png?v=1.2.4) | `:smiley:` | `smile0001.gif`
`:super:` | ![](https://youthweb.net/public/vendor/smilies/489.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F44D.png?v=1.2.4) | `:thumbsup:` | `489.gif`
`:ww:` | ![](https://youthweb.net/public/vendor/smilies/222.gif) | :question: | `` | `222.gif`
`:blinz:` | ![](https://youthweb.net/public/vendor/smilies/blinkendes_auge.gif) | :question: | `` | `blinkendes_auge.gif`
`:crazy:` | ![](https://youthweb.net/public/vendor/smilies/paranoid.gif) | :question: | `` | `paranoid.gif`
`:morgen:` | ![](https://youthweb.net/public/vendor/smilies/morgen.gif) | :question: | `` | `morgen.gif`
`:giveup:` | ![](https://youthweb.net/public/vendor/smilies/giveup.gif) | :question: | `` | `giveup.gif`
`:kruecken:` | ![](https://youthweb.net/public/vendor/smilies/bhindi.gif) | :question: | `` | `bhindi.gif`
`:essen:` | ![](https://youthweb.net/public/vendor/smilies/39[1].gif) | :question: | `` | `39[1].gif`
`:fernsehn:` | ![](https://youthweb.net/public/vendor/smilies/fernsehen.gif) | :question: | `` | `fernsehen.gif`
`:duschen:` | ![](https://youthweb.net/public/vendor/smilies/00001783.gif) | :question: | `` | `00001783.gif`
`:abwasch:` | ![](https://youthweb.net/public/vendor/smilies/abwasch.gif) | :question: | `` | `abwasch.gif`
`:arbeiten:` | ![](https://youthweb.net/public/vendor/smilies/00001777.gif) | :question: | `` | `00001777.gif`
`:toilette:` | ![](https://youthweb.net/public/vendor/smilies/00001798.gif) | :question: | `` | `00001798.gif`
`:sdu8:` | ![](https://youthweb.net/public/vendor/smilies/coolkaugummi.gif) | :question: | `` | `coolkaugummi.gif`
`:arab:` | ![](https://youthweb.net/public/vendor/smilies/arab.gif) | :question: | `` | `arab.gif`
`:mcdonalds:` | ![](https://youthweb.net/public/vendor/smilies/mcdonald.gif) | :question: | `` | `mcdonald.gif`
`:boxen:` | ![](https://youthweb.net/public/vendor/smilies/boxxen.gif) | :question: | `` | `boxxen.gif`
`:verrückt:` | ![](https://youthweb.net/public/vendor/smilies/verrueckt.gif) | :question: | `` | `verrueckt.gif`
`:urlaub:` | ![](https://youthweb.net/public/vendor/smilies/strand.gif) | :question: | `` | `strand.gif`
`:victory:` | ![](https://youthweb.net/public/vendor/smilies/b025.gif) | :question: | `` | `b025.gif`
`:liebesbrief:` | ![](https://youthweb.net/public/vendor/smilies/liebesbrief.gif) | :question: | `` | `liebesbrief.gif`
`:weinen:` | ![](https://youthweb.net/public/vendor/smilies/weinen.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F62D.png?v=1.2.4) | `:sob:` | `weinen.gif`
`:gucken:` | ![](https://youthweb.net/public/vendor/smilies/00000952[1].gif) | :question: | `` | `00000952[1].gif`
`:pcprob:` | ![](https://youthweb.net/public/vendor/smilies/PcProb.gif) | :question: | `` | `PcProb.gif`
`:waschen2:` | ![](https://youthweb.net/public/vendor/smilies/00001797[1].gif) | :question: | `` | `00001797[1].gif`
`:koch:` | ![](https://youthweb.net/public/vendor/smilies/Koch.gif) | :question: | `` | `Koch.gif`
`:baden:` | ![](https://youthweb.net/public/vendor/smilies/00001779[1].gif) | :question: | `` | `00001779[1].gif`
`:troesten:` | ![](https://youthweb.net/public/vendor/smilies/troesten.gif) | :question: | `` | `troesten.gif`
`:bügeln:` | ![](https://youthweb.net/public/vendor/smilies/buegeln.gif) | :question: | `` | `buegeln.gif`
`:respekt:` | ![](https://youthweb.net/public/vendor/smilies/288.gif) | :question: | `` | `288.gif`
`:naund:` | ![](https://youthweb.net/public/vendor/smilies/00000673.gif) | :question: | `` | `00000673.gif`
`:doof:` | ![](https://youthweb.net/public/vendor/smilies/doof.gif) | :question: | `` | `doof.gif`
`:ethe:` | ![](https://youthweb.net/public/vendor/smilies/blumen.gif) | :question: | `` | `blumen.gif`
`:pascholti:` | ![](https://youthweb.net/public/vendor/smilies/paschol.png) | :question: | `` | `paschol.png`
`:love1:` | ![](https://youthweb.net/public/vendor/smilies/Love1.gif) | :question: | `` | `Love1.gif`
`:boxen2:` | ![](https://youthweb.net/public/vendor/smilies/box.gif) | :question: | `` | `box.gif`
`:aldi:` | ![](https://youthweb.net/public/vendor/smilies/aldi.gif) | :question: | `` | `aldi.gif`
`:mama:` | ![](https://youthweb.net/public/vendor/smilies/mama.gif) | :question: | `` | `mama.gif`
`:bye:` | ![](https://youthweb.net/public/vendor/smilies/fol.gif) | :question: | `` | `fol.gif`
`:birthday2:` | ![](https://youthweb.net/public/vendor/smilies/birthday2.gif) | :question: | `` | `birthday2.gif`
`:eingebildet:` | ![](https://youthweb.net/public/vendor/smilies/eingebildet.gif) | :question: | `` | `eingebildet.gif`
`:bipa:` | ![](https://youthweb.net/public/vendor/smilies/spassbremse.gif) | :question: | `` | `spassbremse.gif`
`:gewalt:` | ![](https://youthweb.net/public/vendor/smilies/Gewalt.gif) | :question: | `` | `Gewalt.gif`
`:kopfschlag:` | ![](https://youthweb.net/public/vendor/smilies/Kopfschlag.gif) | :question: | `` | `Kopfschlag.gif`
`:look:` | ![](https://youthweb.net/public/vendor/smilies/atanz2.gif) | :question: | `` | `atanz2.gif`
`:noterror:` | ![](https://youthweb.net/public/vendor/smilies/noterror.gif) | :question: | `` | `noterror.gif`
`:schleimer:` | ![](https://youthweb.net/public/vendor/smilies/schleimer.gif) | :question: | `` | `schleimer.gif`
`:gassi:` | ![](https://youthweb.net/public/vendor/smilies/smilie_hund1.gif) | :question: | `` | `smilie_hund1.gif`
`:heck:` | ![](https://youthweb.net/public/vendor/smilies/heck.gif) | :question: | `` | `heck.gif`
`:baseball:` | ![](https://youthweb.net/public/vendor/smilies/aufsmaul.gif) | :question: | `` | `aufsmaul.gif`
`:heuldoch:` | ![](https://youthweb.net/public/vendor/smilies/heuldoch.gif) | :question: | `` | `heuldoch.gif`
`:gutenacht:` | ![](https://youthweb.net/public/vendor/smilies/Gute%20nacht.gif) | :question: | `` | `Gute nacht.gif`
`:weck` | ![](https://youthweb.net/public/vendor/smilies/62.gif) | :question: | `` | `62.gif`
`:bussi:` | ![](https://youthweb.net/public/vendor/smilies/bussi.gif) | :question: | `` | `bussi.gif`
`:sani:` | ![](https://youthweb.net/public/vendor/smilies/477.gif) | :question: | `` | `477.gif`
`:worship:` | ![](https://youthweb.net/public/vendor/smilies/a030.gif) | :question: | `` | `a030.gif`
`:regin:` | ![](https://youthweb.net/public/vendor/smilies/a035.gif) | :question: | `` | `a035.gif`
`:campen:` | ![](https://youthweb.net/public/vendor/smilies/haus56.gif) | :question: | `` | `haus56.gif`
`:inlove:` | ![](https://youthweb.net/public/vendor/smilies/inlove.gif) | :question: | `` | `inlove.gif`
`:rockon:` | ![](https://youthweb.net/public/vendor/smilies/rockon.gif) | :question: | `` | `rockon.gif`
`:reiten:` | ![](https://youthweb.net/public/vendor/smilies/Reiten.gif) | :question: | `` | `Reiten.gif`
`:kotz:` | ![](https://youthweb.net/public/vendor/smilies/kotzen.gif) | :question: | `` | `kotzen.gif`
`:pfeifen:` | ![](https://youthweb.net/public/vendor/smilies/a050.gif) | :question: | `` | `a050.gif`
`:feierabend:` | ![](https://youthweb.net/public/vendor/smilies/feierabend.gif) | :question: | `` | `feierabend.gif`
`:danke:` | ![](https://youthweb.net/public/vendor/smilies/Danke.gif) | :question: | `` | `Danke.gif`
`:dagegen:` | ![](https://youthweb.net/public/vendor/smilies/dagegen.gif) | :question: | `` | `dagegen.gif`
`:frauenpower:` | ![](https://youthweb.net/public/vendor/smilies/frauen_power.gif) | :question: | `` | `frauen_power.gif`
`:bitte:` | ![](https://youthweb.net/public/vendor/smilies/bbitte.gif) | :question: | `` | `bbitte.gif`
`:gibtnix:` | ![](https://youthweb.net/public/vendor/smilies/gibtnix.gif) | :question: | `` | `gibtnix.gif`
`:wiejetzt:` | ![](https://youthweb.net/public/vendor/smilies/haewiejetzt.gif) | :question: | `` | `haewiejetzt.gif`
`:hilfe:` | ![](https://youthweb.net/public/vendor/smilies/iloveme.gif) | :question: | `` | `iloveme.gif`
`:partyon:` | ![](https://youthweb.net/public/vendor/smilies/partyon+.gif) | :question: | `` | `partyon+.gif`
`:wolke7:` | ![](https://youthweb.net/public/vendor/smilies/love5.gif) | :question: | `` | `love5.gif`
`:stecher:` | ![](https://youthweb.net/public/vendor/smilies/stecher.gif) | :question: | `` | `stecher.gif`
`:bart:` | ![](https://youthweb.net/public/vendor/smilies/disguise.gif) | :question: | `` | `disguise.gif`
`:rofll:` | ![](https://youthweb.net/public/vendor/smilies/rofl1.gif) | :question: | `` | `rofl1.gif`
`:trainieren:` | ![](https://youthweb.net/public/vendor/smilies/weight_lift.gif) | :question: | `` | `weight_lift.gif`
`:sboard:` | ![](https://youthweb.net/public/vendor/smilies/snowboard.gif) | :question: | `` | `snowboard.gif`
`:schleimer2:` | ![](https://youthweb.net/public/vendor/smilies/nerd.gif) | :question: | `` | `nerd.gif`
`:boxer:` | ![](https://youthweb.net/public/vendor/smilies/boxed3_h4h.gif) | :question: | `` | `boxed3_h4h.gif`
`:ala:` | ![](https://youthweb.net/public/vendor/smilies/ala.gif) | :question: | `` | `ala.gif`
`:bike:` | ![](https://youthweb.net/public/vendor/smilies/biker_h4h.gif) | :question: | `` | `biker_h4h.gif`
`:lecker:` | ![](https://youthweb.net/public/vendor/smilies/licklips.gif) | :question: | `` | `licklips.gif`
`:schlafen:` | ![](https://youthweb.net/public/vendor/smilies/456.gif) | :question: | `` | `456.gif`
`:rappen:` | ![](https://youthweb.net/public/vendor/smilies/rappen.gif) | :question: | `` | `rappen.gif`
`:ohnmacht:` | ![](https://youthweb.net/public/vendor/smilies/Ohnmacht1.gif) | :question: | `` | `Ohnmacht1.gif`
`:wersucht:` | ![](https://youthweb.net/public/vendor/smilies/wrsucht.gif) | :question: | `` | `wrsucht.gif`
`:insel:` | ![](https://youthweb.net/public/vendor/smilies/Insel.gif) | :question: | `` | `Insel.gif`
`:lügen:` | ![](https://youthweb.net/public/vendor/smilies/pinoccio.gif) | :question: | `` | `pinoccio.gif`
`:freak:` | ![](https://youthweb.net/public/vendor/smilies/smiley-channel.de_schilder173.gif) | :question: | `` | `smiley-channel.de_schilder173.gif`
`:schwein:` | ![](https://youthweb.net/public/vendor/smilies/smiley-channel.de_schilder195.gif) | :question: | `` | `smiley-channel.de_schilder195.gif`
`:lol4:` | ![](https://youthweb.net/public/vendor/smilies/smiley-channel.de_schilder048.gif) | :question: | `` | `smiley-channel.de_schilder048.gif`
`:admin:` | ![](https://youthweb.net/public/vendor/smilies/admins.gif) | :question: | `` | `admins.gif`
`:firefox:` | ![](https://youthweb.net/public/vendor/smilies/270.gif) | :question: | `` | `270.gif`
`:school:` | ![](https://youthweb.net/public/vendor/smilies/012.gif) | :question: | `` | `012.gif`
`:charmant:` | ![](https://youthweb.net/public/vendor/smilies/286.gif) | :question: | `` | `286.gif`
`:ausflippen:` | ![](https://youthweb.net/public/vendor/smilies/522.gif) | :question: | `` | `522.gif`
`:ww2:` | ![](https://youthweb.net/public/vendor/smilies/221.gif) | :question: | `` | `221.gif`
`:bigeyes:` | ![](https://youthweb.net/public/vendor/smilies/267.gif) | :question: | `` | `267.gif`
`:kaputtlachen:` | ![](https://youthweb.net/public/vendor/smilies/281.gif) | :question: | `` | `281.gif`
`:unschuldig:` | ![](https://youthweb.net/public/vendor/smilies/unschuldig.gif) | :question: | `` | `unschuldig.gif`
`:kirche:` | ![](https://youthweb.net/public/vendor/smilies/kirche.gif) | :question: | `` | `kirche.gif`
`:frauenklatsch:` | ![](https://youthweb.net/public/vendor/smilies/weiberplausch.gif) | :question: | `` | `weiberplausch.gif`
`:krieger:` | ![](https://youthweb.net/public/vendor/smilies/379.gif) | :question: | `` | `379.gif`
`:essen2:` | ![](https://youthweb.net/public/vendor/smilies/essen.gif) | :question: | `` | `essen.gif`
`:boese:` | ![](https://youthweb.net/public/vendor/smilies/boese.gif) | :question: | `` | `boese.gif`
`:verneigen:` | ![](https://youthweb.net/public/vendor/smilies/verneigen.gif) | :question: | `` | `verneigen.gif`
`;-)` | ![](https://youthweb.net/public/vendor/smilies/winking.gif) | :question: | `` | `winking.gif`
`:ja:` | ![](https://youthweb.net/public/vendor/smilies/ja.gif) | :question: | `` | `ja.gif`
`:-p` | ![](https://youthweb.net/public/vendor/smilies/zunge.gif) | :question: | `` | `zunge.gif`
`:-(` | ![](https://youthweb.net/public/vendor/smilies/mad01.gif) | :question: | `` | `mad01.gif`
`:nein:` | ![](https://youthweb.net/public/vendor/smilies/nein.gif) | :question: | `` | `nein.gif`
`:uncool:` | ![](https://youthweb.net/public/vendor/smilies/uncool.gif) | :question: | `` | `uncool.gif`
`:klatschen:` | ![](https://youthweb.net/public/vendor/smilies/klatschen.gif) | :question: | `` | `klatschen.gif`
`:handy:` | ![](https://youthweb.net/public/vendor/smilies/handy.gif) | :question: | `` | `handy.gif`
`:muede:` | ![](https://youthweb.net/public/vendor/smilies/gaehnen.gif) | :question: | `` | `gaehnen.gif`
`:keineahnung:` | ![](https://youthweb.net/public/vendor/smilies/keineahnung.gif) | :question: | `` | `keineahnung.gif`
`:rudolf:` | ![](https://youthweb.net/public/vendor/smilies/rudolf.gif) | :question: | `` | `rudolf.gif`
`:kalt:` | ![](https://youthweb.net/public/vendor/smilies/cold.gif) | :question: | `` | `cold.gif`
`:wman:` | ![](https://youthweb.net/public/vendor/smilies/weihnachtsmann.gif) | :question: | `` | `weihnachtsmann.gif`
`:zitter:` | ![](https://youthweb.net/public/vendor/smilies/xpb_zitter.gif) | :question: | `` | `xpb_zitter.gif`
`:wman2:` | ![](https://youthweb.net/public/vendor/smilies/woswmann950.gif) | :question: | `` | `woswmann950.gif`
`:wman3:` | ![](https://youthweb.net/public/vendor/smilies/woswmann1550.gif) | :question: | `` | `woswmann1550.gif`
`:hochzeit:` | ![](https://youthweb.net/public/vendor/smilies/hochzeit.gif) | :question: | `` | `hochzeit.gif`
`:oops:` | ![](https://youthweb.net/public/vendor/smilies/oops.gif) | :question: | `` | `oops.gif`
`:kaputthauen:` | ![](https://youthweb.net/public/vendor/smilies/kaputthauen.gif) | :question: | `` | `kaputthauen.gif`
`:baden3:` | ![](https://youthweb.net/public/vendor/smilies/baden3.gif) | :question: | `` | `baden3.gif`
`:lenak:` | ![](https://youthweb.net/public/vendor/smilies/484.gif) | :question: | `` | `484.gif`
`:jeff:` | ![](https://youthweb.net/public/vendor/smilies/Jeff.gif) | :question: | `` | `Jeff.gif`
`:knuddell:` | ![](https://youthweb.net/public/vendor/smilies/knuddel.gif) | :question: | `` | `knuddel.gif`
`:ruhe:` | ![](https://youthweb.net/public/vendor/smilies/ruhe.gif) | :question: | `` | `ruhe.gif`
`:cool:` | ![](https://youthweb.net/public/vendor/smilies/cool.gif) | :question: | `` | `cool.gif`
`:manweisetnich:` | ![](https://youthweb.net/public/vendor/smilies/man_weiset.png) | :question: | `` | `man_weiset.png`
`:(` | ![](https://youthweb.net/public/vendor/smilies/frown.gif) | :question: | `` | `frown.gif`
`:knuddel2:` | ![](https://youthweb.net/public/vendor/smilies/liebe_061.gif) | :question: | `` | `liebe_061.gif`
`:denken:` | ![](https://youthweb.net/public/vendor/smilies/verwirrte_026.gif) | :question: | `` | `verwirrte_026.gif`
`:denken2:` | ![](https://youthweb.net/public/vendor/smilies/Denken2.gif) | :question: | `` | `Denken2.gif`
`:denken3:` | ![](https://youthweb.net/public/vendor/smilies/idee.gif) | :question: | `` | `idee.gif`
`:knuddel3:` | ![](https://youthweb.net/public/vendor/smilies/liebe_028.gif) | :question: | `` | `liebe_028.gif`
`:romantik:` | ![](https://youthweb.net/public/vendor/smilies/romantik.gif) | :question: | `` | `romantik.gif`
`:foto:` | ![](https://youthweb.net/public/vendor/smilies/fotosmilie.gif) | :question: | `` | `fotosmilie.gif`
`:sauer2:` | ![](https://youthweb.net/public/vendor/smilies/sauer.gif) | :question: | `` | `sauer.gif`
`:krankes:` | ![](https://youthweb.net/public/vendor/smilies/Krankes.gif) | :question: | `` | `Krankes.gif`
`:doof1:` | ![](https://youthweb.net/public/vendor/smilies/bin_ich_doof.gif) | :question: | `` | `bin_ich_doof.gif`
`:car:` | ![](https://youthweb.net/public/vendor/smilies/car.gif) | :question: | `` | `car.gif`
`:wayne:` | ![](https://youthweb.net/public/vendor/smilies/wayne_interessierts.gif) | :question: | `` | `wayne_interessierts.gif`
`:snowboard:` | ![](https://youthweb.net/public/vendor/smilies/snowboardler.gif) | :question: | `` | `snowboardler.gif`
`:sagnix:` | ![](https://youthweb.net/public/vendor/smilies/ich_sag_nix.gif) | :question: | `` | `ich_sag_nix.gif`
`:regin2:` | ![](https://youthweb.net/public/vendor/smilies/hauen.gif) | :question: | `` | `hauen.gif`
`:kuuhl:` | ![](https://youthweb.net/public/vendor/smilies/kuuuhl.png) | :question: | `` | `kuuuhl.png`
`:saugen:` | ![](https://youthweb.net/public/vendor/smilies/staubsauger!.gif) | :question: | `` | `staubsauger!.gif`
`:para:` | ![](https://youthweb.net/public/vendor/smilies/kreis.gif) | :question: | `` | `kreis.gif`
`:blach:` | ![](https://youthweb.net/public/vendor/smilies/blach.gif) | :question: | `` | `blach.gif`
`:rofllll:` | ![](https://youthweb.net/public/vendor/smilies/smilie_happy_251.gif) | :question: | `` | `smilie_happy_251.gif`
`:spam:` | ![](https://youthweb.net/public/vendor/smilies/forum.gif) | :question: | `` | `forum.gif`
`:ohnemich:` | ![](https://youthweb.net/public/vendor/smilies/bpb_ohnemi.gif) | :question: | `` | `bpb_ohnemi.gif`
`:osterkuss:` | ![](https://youthweb.net/public/vendor/smilies/o_78-001.gif) | :question: | `` | `o_78-001.gif`
`:eiermaler:` | ![](https://youthweb.net/public/vendor/smilies/ostern_71.gif) | :question: | `` | `ostern_71.gif`
`:hase:` | ![](https://youthweb.net/public/vendor/smilies/HAAAAAAAAAAAASE.gif) | :question: | `` | `HAAAAAAAAAAAASE.gif`
`:hase1:` | ![](https://youthweb.net/public/vendor/smilies/hase3.gif) | :question: | `` | `hase3.gif`
`:hase2:` | ![](https://youthweb.net/public/vendor/smilies/HASE4.gif) | :question: | `` | `HASE4.gif`
`:hase3:` | ![](https://youthweb.net/public/vendor/smilies/has2.gif) | :question: | `` | `has2.gif`
`:irre:` | ![](https://youthweb.net/public/vendor/smilies/bunny_4.gif) | :question: | `` | `bunny_4.gif`
`:herz:` | ![](https://youthweb.net/public/vendor/smilies/herzchen.gif) | :question: | `` | `herzchen.gif`
`:achja:` | ![](https://youthweb.net/public/vendor/smilies/achja.gif) | :question: | `` | `achja.gif`
`:morgähn:` | ![](https://youthweb.net/public/vendor/smilies/morgaehn.gif) | :question: | `` | `morgaehn.gif`
`:amen:` | ![](https://youthweb.net/public/vendor/smilies/amen.gif) | :question: | `` | `amen.gif`
`:aufwachen:` | ![](https://youthweb.net/public/vendor/smilies/aufwachen.gif) | :question: | `` | `aufwachen.gif`
`:vio:` | ![](https://youthweb.net/public/vendor/smilies/phone02.gif) | :question: | `` | `phone02.gif`
`:admins:` | ![](https://youthweb.net/public/vendor/smilies/admin.jpg) | :question: | `` | `admin.jpg`
`:romeo:` | ![](https://youthweb.net/public/vendor/smilies/Romeo.gif) | :question: | `` | `Romeo.gif`
`:shy:` | ![](https://youthweb.net/public/vendor/smilies/jo.gif) | :question: | `` | `jo.gif`
`:tbaum:` | ![](https://youthweb.net/public/vendor/smilies/1xmas500.gif) | :question: | `` | `1xmas500.gif`
`:kopf:` | ![](https://youthweb.net/public/vendor/smilies/kopf.gif) | :question: | `` | `kopf.gif`
`:closed:` | ![](https://youthweb.net/public/vendor/smilies/cl.gif) | :question: | `` | `cl.gif`
`:deutschland:` | ![](https://youthweb.net/public/vendor/smilies/deutsc.gif) | :question: | `` | `deutsc.gif`
`:laugh:` | ![](https://youthweb.net/public/vendor/smilies/deutschland-lacht-ueber-holland.gif) | :question: | `` | `deutschland-lacht-ueber-holland.gif`
`:final:` | ![](https://youthweb.net/public/vendor/smilies/final04.gif) | :question: | `` | `final04.gif`
`:wmleo:` | ![](https://youthweb.net/public/vendor/smilies/wmgoleo.gif) | :question: | `` | `wmgoleo.gif`
`:brasil:` | ![](https://youthweb.net/public/vendor/smilies/brasil.gif) | :question: | `` | `brasil.gif`
`:fussball:` | ![](https://youthweb.net/public/vendor/smilies/fussball-smilie.gif) | :question: | `` | `fussball-smilie.gif`
`:kopfball:` | ![](https://youthweb.net/public/vendor/smilies/soccer_2.gif) | :question: | `` | `soccer_2.gif`
`:rot:` | ![](https://youthweb.net/public/vendor/smilies/platzverweis.gif) | :question: | `` | `platzverweis.gif`
`:leeep:` | ![](https://youthweb.net/public/vendor/smilies/leep.gif) | :question: | `` | `leep.gif`
`:-[` | ![](https://youthweb.net/public/vendor/smilies/49_2.gif) | :question: | `` | `49_2.gif`
`:togo:` | ![](https://youthweb.net/public/vendor/smilies/wm2006togo1.gif) | :question: | `` | `wm2006togo1.gif`
`:japan:` | ![](https://youthweb.net/public/vendor/smilies/wm2006japan0.gif) | :question: | `` | `wm2006japan0.gif`
`:roli:` | ![](https://youthweb.net/public/vendor/smilies/boese2.gif) | :question: | `` | `boese2.gif`
`:portugal:` | ![](https://youthweb.net/public/vendor/smilies/portugal.gif) | :question: | `` | `portugal.gif`
`:meld:` | ![](https://youthweb.net/public/vendor/smilies/meld.gif) | :question: | `` | `meld.gif`
`:moin:` | ![](https://youthweb.net/public/vendor/smilies/Moin.gif) | :question: | `` | `Moin.gif`
`:hm:` | ![](https://youthweb.net/public/vendor/smilies/hm.gif) | :question: | `` | `hm.gif`
`:blume:` | ![](https://youthweb.net/public/vendor/smilies/6874.gif) | :question: | `` | `6874.gif`
`:inlove2:` | ![](https://youthweb.net/public/vendor/smilies/huglove.gif) | :question: | `` | `huglove.gif`
`:tess:` | ![](https://youthweb.net/public/vendor/smilies/wm2006tschechien1.gif) | :question: | `` | `wm2006tschechien1.gif`
`:spanien:` | ![](https://youthweb.net/public/vendor/smilies/wm2006spanien1.gif) | :question: | `` | `wm2006spanien1.gif`
`:angola:` | ![](https://youthweb.net/public/vendor/smilies/wm2006angola2.gif) | :question: | `` | `wm2006angola2.gif`
`:Italien:` | ![](https://youthweb.net/public/vendor/smilies/wm2006italien1.gif) | :question: | `` | `wm2006italien1.gif`
`:ich:` | ![](https://youthweb.net/public/vendor/smilies/iiich.gif) | :question: | `` | `iiich.gif`
`:shok:` | ![](https://youthweb.net/public/vendor/smilies/1shok.gif) | :question: | `` | `1shok.gif`
`:luna:` | ![](https://youthweb.net/public/vendor/smilies/animal-smiley-031.gif) | :question: | `` | `animal-smiley-031.gif`
`:holland:` | ![](https://youthweb.net/public/vendor/smilies/wm2006niederlande1.gif) | :question: | `` | `wm2006niederlande1.gif`
`:gelb:` | ![](https://youthweb.net/public/vendor/smilies/gelb.gif) | :question: | `` | `gelb.gif`
`:weight:` | ![](https://youthweb.net/public/vendor/smilies/weight_lift2.gif) | :question: | `` | `weight_lift2.gif`
`:england:` | ![](https://youthweb.net/public/vendor/smilies/wm2006england1.gif) | :question: | `` | `wm2006england1.gif`
`:ghana:` | ![](https://youthweb.net/public/vendor/smilies/wm2006ghana1.gif) | :question: | `` | `wm2006ghana1.gif`
`:frankreich:` | ![](https://youthweb.net/public/vendor/smilies/wm2006frankreich1.gif) | :question: | `` | `wm2006frankreich1.gif`
`:spam1:` | ![](https://youthweb.net/public/vendor/smilies/spamfrust.gif) | :question: | `` | `spamfrust.gif`
`:ukraine:` | ![](https://youthweb.net/public/vendor/smilies/wm2006ukraine1.gif) | :question: | `` | `wm2006ukraine1.gif`
`:2cool:` | ![](https://youthweb.net/public/vendor/smilies/cool3.gif) | :question: | `` | `cool3.gif`
`:rulez:` | ![](https://youthweb.net/public/vendor/smilies/smiley-channel.de_lesen021.gif) | :question: | `` | `smiley-channel.de_lesen021.gif`
`:israel:` | ![](https://youthweb.net/public/vendor/smilies/tikva.gif) | :question: | `` | `tikva.gif`
`:poker:` | ![](https://youthweb.net/public/vendor/smilies/poker.gif) | :question: | `` | `poker.gif`
`:spth:` | ![](https://youthweb.net/public/vendor/smilies/spth.png) | :question: | `` | `spth.png`
`:JoLo:` | ![](https://youthweb.net/public/vendor/smilies/MrSax02.gif) | :question: | `` | `MrSax02.gif`
`:on:` | ![](https://youthweb.net/public/vendor/smilies/On.gif) | :question: | `` | `On.gif`
`:mb:` | ![](https://youthweb.net/public/vendor/smilies/eine_wie_keine.png) | :question: | `` | `eine_wie_keine.png`
`:boese1:` | ![](https://youthweb.net/public/vendor/smilies/boese.gif) | :question: | `` | `boese.gif`
`:boese2:` | ![](https://youthweb.net/public/vendor/smilies/boese1.gif) | :question: | `` | `boese1.gif`
`:friend:` | ![](https://youthweb.net/public/vendor/smilies/friend.gif) | :question: | `` | `friend.gif`
`:muede1:` | ![](https://youthweb.net/public/vendor/smilies/muede.gif) | :question: | `` | `muede.gif`
`:steffi:` | ![](https://youthweb.net/public/vendor/smilies/traurig.gif) | :question: | `` | `traurig.gif`
`:super1:` | ![](https://youthweb.net/public/vendor/smilies/froh.gif) | :question: | `` | `froh.gif`
`:ody:` | ![](https://youthweb.net/public/vendor/smilies/gg!!!!!!!!!!!!!!!!!!!.gif) | :question: | `` | `gg!!!!!!!!!!!!!!!!!!!.gif`
`:halt:` | ![](https://youthweb.net/public/vendor/smilies/halt_stop.gif) | :question: | `` | `halt_stop.gif`
`:lachen1:` | ![](https://youthweb.net/public/vendor/smilies/hand_vorm_mund.gif) | :question: | `` | `hand_vorm_mund.gif`
`:LP:` | ![](https://youthweb.net/public/vendor/smilies/ironie.gif) | :question: | `` | `ironie.gif`
`:superman:` | ![](https://youthweb.net/public/vendor/smilies/sman.gif) | :question: | `` | `sman.gif`
`:skater:` | ![](https://youthweb.net/public/vendor/smilies/skateboard.gif) | :question: | `` | `skateboard.gif`
`:gelb1:` | ![](https://youthweb.net/public/vendor/smilies/sport.gif) | :question: | `` | `sport.gif`
`:abcheck:` | ![](https://youthweb.net/public/vendor/smilies/blinkendes_auge_mit_herzchen.gif) | :question: | `` | `blinkendes_auge_mit_herzchen.gif`
`:dl:` | ![](https://youthweb.net/public/vendor/smilies/diane.gif) | :question: | `` | `diane.gif`
`:RW:` | ![](https://youthweb.net/public/vendor/smilies/rita.gif) | :question: | `` | `rita.gif`
`:yw:` | ![](https://youthweb.net/public/vendor/smilies/fehler.gif) | :question: | `` | `fehler.gif`
`:schild:` | ![](https://youthweb.net/public/vendor/smilies/schild.gif) | :question: | `` | `schild.gif`
`:firefox1:` | ![](https://youthweb.net/public/vendor/smilies/mozilla.gif) | :question: | `` | `mozilla.gif`
`:2lee:` | ![](https://youthweb.net/public/vendor/smilies/lee.gif) | :question: | `` | `lee.gif`
`:pizzaess:` | ![](https://youthweb.net/public/vendor/smilies/pizzaess.gif) | :question: | `` | `pizzaess.gif`
`:emoo:` | ![](https://youthweb.net/public/vendor/smilies/emo.gif) | :question: | `` | `emo.gif`
`:hehe:` | ![](https://youthweb.net/public/vendor/smilies/hehe.gif) | :question: | `` | `hehe.gif`
`:ljena:` | ![](https://youthweb.net/public/vendor/smilies/ani_sonstige137.gif) | :question: | `` | `ani_sonstige137.gif`
`:neugierig:` | ![](https://youthweb.net/public/vendor/smilies/Neugierig.gif) | :question: | `` | `Neugierig.gif`
`:F5:` | ![](https://youthweb.net/public/vendor/smilies/ani_schilder55.gif) | :question: | `` | `ani_schilder55.gif`
`:lachen:` | ![](https://youthweb.net/public/vendor/smilies/ani_lachende2.gif) | :question: | `` | `ani_lachende2.gif`
`:saugen1:` | ![](https://youthweb.net/public/vendor/smilies/Saugen1.gif) | :question: | `` | `Saugen1.gif`
`:angi:` | ![](https://youthweb.net/public/vendor/smilies/f025.gif) | :question: | `` | `f025.gif`
`:hau:` | ![](https://youthweb.net/public/vendor/smilies/hau.gif) | :question: | `` | `hau.gif`
`:hust:` | ![](https://youthweb.net/public/vendor/smilies/husten.gif) | :question: | `` | `husten.gif`
`:lolli:` | ![](https://youthweb.net/public/vendor/smilies/lolli.gif) | :question: | `` | `lolli.gif`
`:ranger:` | ![](https://youthweb.net/public/vendor/smilies/ranger.gif) | :question: | `` | `ranger.gif`
`:lena87:` | ![](https://youthweb.net/public/vendor/smilies/a020.gif) | :question: | `` | `a020.gif`
`:partytime:` | ![](https://youthweb.net/public/vendor/smilies/sta_schilder140.gif) | :question: | `` | `sta_schilder140.gif`
`:graade:` | ![](https://youthweb.net/public/vendor/smilies/sta_schilder365.gif) | :question: | `` | `sta_schilder365.gif`
`:wishes:` | ![](https://youthweb.net/public/vendor/smilies/wishes.gif) | :question: | `` | `wishes.gif`
`:russ:` | ![](https://youthweb.net/public/vendor/smilies/smilies_flaggen056.gif) | :question: | `` | `smilies_flaggen056.gif`
`:sorry:` | ![](https://youthweb.net/public/vendor/smilies/sta_schilder116.gif) | :question: | `` | `sta_schilder116.gif`
`:spiegel:` | ![](https://youthweb.net/public/vendor/smilies/lustich.gif) | :question: | `` | `lustich.gif`
`:wman5:` | ![](https://youthweb.net/public/vendor/smilies/woswmann1560.gif) | :question: | `` | `woswmann1560.gif`
`:wmanlachen:` | ![](https://youthweb.net/public/vendor/smilies/woswmann1810.gif) | :question: | `` | `woswmann1810.gif`
`:hannibal:` | ![](https://youthweb.net/public/vendor/smilies/shv.gif) | :question: | `` | `shv.gif`
`:sheep:` | ![](https://youthweb.net/public/vendor/smilies/sheep.gif) | :question: | `` | `sheep.gif`
`:grizzly:` | ![](https://youthweb.net/public/vendor/smilies/Teddy.gif) | :question: | `` | `Teddy.gif`
`:frauenimforum:` | ![](https://youthweb.net/public/vendor/smilies/frauen_im_forum.gif) | :question: | `` | `frauen_im_forum.gif`
`:checka:` | ![](https://youthweb.net/public/vendor/smilies/peace.gif) | :question: | `` | `peace.gif`
`:yeah:` | ![](https://youthweb.net/public/vendor/smilies/yeeeah.gif) | :question: | `` | `yeeeah.gif`
`:klavier:` | ![](https://youthweb.net/public/vendor/smilies/klvier.gif) | :question: | `` | `klvier.gif`
`:kante:` | ![](https://youthweb.net/public/vendor/smilies/bodybuilder.gif) | :question: | `` | `bodybuilder.gif`
`:roflll:` | ![](https://youthweb.net/public/vendor/smilies/roflll.gif) | :question: | `` | `roflll.gif`
`:ohnmacht1:` | ![](https://youthweb.net/public/vendor/smilies/ohnmacht.gif) | :question: | `` | `ohnmacht.gif`
`:sylvester:` | ![](https://youthweb.net/public/vendor/smilies/weihnachten17.gif) | :question: | `` | `weihnachten17.gif`
`:keks:` | ![](https://youthweb.net/public/vendor/smilies/keks.gif) | :question: | `` | `keks.gif`
`:radfahrer:` | ![](https://youthweb.net/public/vendor/smilies/chiller.gif) | :question: | `` | `chiller.gif`
`:nadia:` | ![](https://youthweb.net/public/vendor/smilies/nadia.gif) | :question: | `` | `nadia.gif`
`:bball:` | ![](https://youthweb.net/public/vendor/smilies/baseball.gif) | :question: | `` | `baseball.gif`
`:eis:` | ![](https://youthweb.net/public/vendor/smilies/eis.gif) | :question: | `` | `eis.gif`
`:geige:` | ![](https://youthweb.net/public/vendor/smilies/gaige.gif) | :question: | `` | `gaige.gif`
`:qflöte:` | ![](https://youthweb.net/public/vendor/smilies/querfloete.gif) | :question: | `` | `querfloete.gif`
`:training:` | ![](https://youthweb.net/public/vendor/smilies/training1.gif) | :question: | `` | `training1.gif`
`:chor:` | ![](https://youthweb.net/public/vendor/smilies/schief_singen.gif) | :question: | `` | `schief_singen.gif`
`:luck:` | ![](https://youthweb.net/public/vendor/smilies/good_luck.gif) | :question: | `` | `good_luck.gif`
`:otto:` | ![](https://youthweb.net/public/vendor/smilies/eclipsee_gold_cup.gif) | :question: | `` | `eclipsee_gold_cup.gif`
`:diddy:` | ![](https://youthweb.net/public/vendor/smilies/schlagzeug.gif) | :question: | `` | `schlagzeug.gif`
`:isy:` | ![](https://youthweb.net/public/vendor/smilies/skuchen.gif) | :question: | `` | `skuchen.gif`
`:alex:` | ![](https://youthweb.net/public/vendor/smilies/dunce.gif) | :question: | `` | `dunce.gif`
`:shenok:` | ![](https://youthweb.net/public/vendor/smilies/hund.gif) | :question: | `` | `hund.gif`
`:ade:` | ![](https://youthweb.net/public/vendor/smilies/ADE_Smily.gif) | :question: | `` | `ADE_Smily.gif`
`:dachschaden:` | ![](https://youthweb.net/public/vendor/smilies/a085.gif) | :question: | `` | `a085.gif`
`:yves:` | ![](https://youthweb.net/public/vendor/smilies/smilie_sonst_011.gif) | :question: | `` | `smilie_sonst_011.gif`
`:aly:` | ![](https://youthweb.net/public/vendor/smilies/c080.gif) | :question: | `` | `c080.gif`
`:laurie:` | ![](https://youthweb.net/public/vendor/smilies/ups.gif) | :question: | `` | `ups.gif`
`:blackb:` | ![](https://youthweb.net/public/vendor/smilies/82.gif) | :question: | `` | `82.gif`
`:koko:` | ![](https://youthweb.net/public/vendor/smilies/c010.gif) | :question: | `` | `c010.gif`
`:bahnhof:` | ![](https://youthweb.net/public/vendor/smilies/bahnhof.gif) | :question: | `` | `bahnhof.gif`
`:basketball:` | ![](https://youthweb.net/public/vendor/smilies/basketball.gif) | :question: | `` | `basketball.gif`
`:boxer1:` | ![](https://youthweb.net/public/vendor/smilies/boxer.gif) | :question: | `` | `boxer.gif`
`:gitarre:` | ![](https://youthweb.net/public/vendor/smilies/gittare.gif) | :question: | `` | `gittare.gif`
`:hand:` | ![](https://youthweb.net/public/vendor/smilies/haendedruck.gif) | :question: | `` | `haendedruck.gif`
`:sos:` | ![](https://youthweb.net/public/vendor/smilies/help_sos.gif) | :question: | `` | `help_sos.gif`
`:krank:` | ![](https://youthweb.net/public/vendor/smilies/krank.gif) | :question: | `` | `krank.gif`
`:krank1:` | ![](https://youthweb.net/public/vendor/smilies/krank1.gif) | :question: | `` | `krank1.gif`
`:lästern:` | ![](https://youthweb.net/public/vendor/smilies/laestern.gif) | :question: | `` | `laestern.gif`
`:küsschen:` | ![](https://youthweb.net/public/vendor/smilies/love_350.gif) | :question: | `` | `love_350.gif`
`:willkommen:` | ![](https://youthweb.net/public/vendor/smilies/Willkommen.gif) | :question: | `` | `Willkommen.gif`
`:ywsuchti:` | ![](https://youthweb.net/public/vendor/smilies/urlaub_lapi.gif) | :question: | `` | `urlaub_lapi.gif`
`:sun:` | ![](https://youthweb.net/public/vendor/smilies/sun.gif) | :question: | `` | `sun.gif`
`:run:` | ![](https://youthweb.net/public/vendor/smilies/run.gif) | :question: | `` | `run.gif`
`:chris:` | ![](https://youthweb.net/public/vendor/smilies/smilie_frech_126.gif) | :question: | `` | `smilie_frech_126.gif`
`:gassi1:` | ![](https://youthweb.net/public/vendor/smilies/smilie_tier_142.gif) | :question: | `` | `smilie_tier_142.gif`
`:olympia:` | ![](https://youthweb.net/public/vendor/smilies/smilie_sp_257.gif) | :question: | `` | `smilie_sp_257.gif`
`:pico:` | ![](https://youthweb.net/public/vendor/smilies/pico.gif) | :question: | `` | `pico.gif`
`:pray:` | ![](https://youthweb.net/public/vendor/smilies/202_animated_person_praying.gif) | :question: | `` | `202_animated_person_praying.gif`
`:mimi:` | ![](https://youthweb.net/public/vendor/smilies/smilie_frech_129.gif) | :question: | `` | `smilie_frech_129.gif`
`:pecora:` | ![](https://youthweb.net/public/vendor/smilies/n030.gif) | :question: | `` | `n030.gif`
`:achso:` | ![](https://youthweb.net/public/vendor/smilies/99.gif) | :question: | `` | `99.gif`
`:elliw:` | ![](https://youthweb.net/public/vendor/smilies/smilie_winke_003.gif) | :question: | `` | `smilie_winke_003.gif`
`:sunchill:` | ![](https://youthweb.net/public/vendor/smilies/s030.gif) | :question: | `` | `s030.gif`
`:JoLo1:` | ![](https://youthweb.net/public/vendor/smilies/saxo.gif) | :question: | `` | `saxo.gif`
`:blümchen:` | ![](https://youthweb.net/public/vendor/smilies/blumekuss.gif) | :question: | `` | `blumekuss.gif`
`:grill:` | ![](https://youthweb.net/public/vendor/smilies/grillen.gif) | :question: | `` | `grillen.gif`
`:rubin:` | ![](https://youthweb.net/public/vendor/smilies/boast.gif) | :question: | `` | `boast.gif`
`:gamer:` | ![](https://youthweb.net/public/vendor/smilies/gamer4.gif) | :question: | `` | `gamer4.gif`
`:manni:` | ![](https://youthweb.net/public/vendor/smilies/smilie_winke_048.gif) | :question: | `` | `smilie_winke_048.gif`
`:evi:` | ![](https://youthweb.net/public/vendor/smilies/smilie_girl_068.gif) | :question: | `` | `smilie_girl_068.gif`
`:ordi:` | ![](https://youthweb.net/public/vendor/smilies/ordi.gif) | :question: | `` | `ordi.gif`
`:bvb:` | ![](https://youthweb.net/public/vendor/smilies/smilie_bvb.gif) | :question: | `` | `smilie_bvb.gif`
`:shy2:` | ![](https://youthweb.net/public/vendor/smilies/smilie_girl_066.gif) | :question: | `` | `smilie_girl_066.gif`
`:deutschland2:` | ![](https://youthweb.net/public/vendor/smilies/WM.gif) | :question: | `` | `WM.gif`
`:uschke:` | ![](https://youthweb.net/public/vendor/smilies/3434.gif) | :question: | `` | `3434.gif`
`:admin2:` | ![](https://youthweb.net/public/vendor/smilies/admins2.gif) | :question: | `` | `admins2.gif`
`:gutebesserung:` | ![](https://youthweb.net/public/vendor/smilies/Gute%20Besserung.gif) | :question: | `` | `Gute Besserung.gif`
`:welcome:` | ![](https://youthweb.net/public/vendor/smilies/welcome.gif) | :question: | `` | `welcome.gif`
`:hotwheel:` | ![](https://youthweb.net/public/vendor/smilies/wheelchair.gif) | :question: | `` | `wheelchair.gif`
`:mokka:` | ![](https://youthweb.net/public/vendor/smilies/mokka.gif) | :question: | `` | `mokka.gif`
`:schalke:` | ![](https://youthweb.net/public/vendor/smilies/s04fahne.gif) | :question: | `` | `s04fahne.gif`
