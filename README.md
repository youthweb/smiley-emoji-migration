# Migration der Smilies zu Emojis

Fortschritt: ![](http://progressed.io/bar/42) (154/363)

[![Build Status](https://travis-ci.org/youthweb/smiley-emoji-migration.svg?branch=master)](https://travis-ci.org/youthweb/smiley-emoji-migration)
[![Gitter](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/youthweb/smiley-emoji-migration?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

Auf Youthweb möchten wir in Zukunft Emojis statt der Smilies verwenden. Das macht es einfacher, Posts und andere Inhalte auch außerhalb von Youthweb (z.B. in einer App) anzuzeigen.

Wir planen, die Emojis von [emojione.com](http://emojione.com) auf Youthweb zu verwenden. Die Umsetzung wird noch etwas Zeit brauchen, aber wir benötigen zur Planung vorab eine Liste, gegen welche Emojis die Smilies ersetzt werden sollen. Wenn wir das nicht machen und schon jetzt auf Emojis umsteigen, machen wir alte Forenposts und andere Inhalte kaputt, die noch auf die Smilies aufbauen.

## Mithelfen

Wenn alle mit anpacken, geht es schneller. Wenn du uns helfen möchtest, die entsprechenden Emojis zu finden, dann kannst du folgendes machen:

1. Speichere die [EmojiIndex.html](https://raw.githubusercontent.com/youthweb/smiley-emoji-migration/master/EmojiIndex.html) auf deinem Rechner und öffne sie in einem Browser.
2. Suche in der Liste unten nach einem Smiley, das noch kein Emoji hat.
3. Suche in der `EmojiIndex.html` nach einem (oder mehrere) Emoji, das dem Smiley am ähnlichsten ist.
4. Bearbeite die Liste und schick uns einen Pull-Request (benötigt einen Github-Account).

Bitte trage das Emoji als Bild (`![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f3a3.png)`) und als Shortcode (`:fishing_pole_and_fish:`) ein, damit man die Bilder besser vergleichen kann. Die Url zu den Emoji-Bildern findest du auf der [Emojione Demoseite](http://www.emojione.com/demo).

Es ist möglich, dass mehrere Emojis für ein Smiley passen. Und es kann sein, dass ein Smiley nicht gegen ein Emoji ersetzt werden kann. Bei solchen Fälle müssen wir einzeln diskutieren und entscheiden. Die Diskussion findet hier auf Github statt. Zur Kommunikation kann das Forum auf Youthweb und [Gitter Chat](https://gitter.im/youthweb/smiley-emoji-migration) verwendet werden.

### Markdown Preview Plugins für Editoren

_Falls du die Liste direkt über das Github-Webinterface bearbeiten möchtest, kannst du diesen Abschnitt überspringen._

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
* **Filename**: Der Dateiname des Smiley bei Youthweb. Alle Smilies liegen bei Youthweb unter `https://youthweb.net/dist/smilies/` ab.

Code | Smiley | Emoji | Emojicode | Filename
-----|--------|-------|-----------|---------
`:fischer:` | ![](https://youthweb.net/dist/smilies/angeln.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f3a3.png) | `:fishing_pole_and_fish:` | `angeln.gif`
`:sleep:` | ![](https://youthweb.net/dist/smilies/14.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f634.png) | `:sleeping:` | `14.gif`
`:angst:` | ![](https://youthweb.net/dist/smilies/angst.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f628.png) | `:fearful:` | `angst.gif`
`:gworsky:` | ![](https://youthweb.net/dist/smilies/crazydace.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f483.png) | `:dancer:` | `crazydace.gif`
`:streiten:` | ![](https://youthweb.net/dist/smilies/093.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f4a2.png) | `:anger:` | `093.gif`
`:baby:` | ![](https://youthweb.net/dist/smilies/Baby.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f476.png) | `:baby:` | `Baby.gif`
`:birthday:` | ![](https://youthweb.net/dist/smilies/birthday.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f382.png) | `:birthday:` | `birthday.gif`
`:bounce:` | ![](https://youthweb.net/dist/smilies/a065.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f603.png) | `:smiley:` | `a065.gif`
`:buck:` | ![](https://youthweb.net/dist/smilies/buck.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f61d.png) | `:stuck_out_tongue_closed_eyes:` | `buck.gif`
`:confused:` | ![](https://youthweb.net/dist/smilies/confused2.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f615.png) | `:confused:` | `confused2.gif`
`:heul:` | ![](https://youthweb.net/dist/smilies/crying.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f62d.png) | `:sob:` | `crying.gif`
`:gg:` | ![](https://youthweb.net/dist/smilies/gg.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f600.png) | `:grinning:` | `gg.gif`
`:king:` | ![](https://youthweb.net/dist/smilies/king.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f451.png) | `:crown:` | `king.gif`
`:krach:` | ![](https://youthweb.net/dist/smilies/Krach.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f621.png) | `:rage:` | `Krach.gif`
`:kreisen:` | ![](https://youthweb.net/dist/smilies/kreisen.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f643.png) | `:upside_down:` | `kreisen.gif`
`:lol:` | ![](https://youthweb.net/dist/smilies/lol.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f606.png) | `:laughing:` | `lol.gif`
`:leaa:` | ![](https://youthweb.net/dist/smilies/smilie_girl_151.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/270c.png)![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f600.png)![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/270c.png) | `:v::grinning::v:` | `smilie_girl_151.gif`
`:esta:` | ![](https://youthweb.net/dist/smilies/496.gif) | :question: | `` | `496.gif`
`:mecker:` | ![](https://youthweb.net/dist/smilies/mecker.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/261d.png)![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f620.png) | `:point_up::angry:` | `mecker.gif`
`:band:` | ![](https://youthweb.net/dist/smilies/Band.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f3a4.png)![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f3b8.png) | `:microphone::guitar:` | `Band.gif`
`:music:` | ![](https://youthweb.net/dist/smilies/kopfhoehrer.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f3a7.png) | `:headphones:` | `kopfhoehrer.gif`
`:band2:` | ![](https://youthweb.net/dist/smilies/musicband.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f3bb.png)![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f3b8.png) | `:violin::guitar:` | `musicband.gif`
`:nervensaege:` | ![](https://youthweb.net/dist/smilies/nervensaege.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f3bb.png) | `:violin:` | `nervensaege.gif`
`:dj:` | ![](https://youthweb.net/dist/smilies/dj.gif) | :question: | `` | `dj.gif`
`:birthday3:` | ![](https://youthweb.net/dist/smilies/birthday3.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f388.png) | `:balloon:` | `birthday3.gif`
`:schulstreit:` | ![](https://youthweb.net/dist/smilies/059.gif) | :question: | `` | `059.gif`
`:lesen:` | ![](https://youthweb.net/dist/smilies/buch.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f4da.png) | `:books:` | `buch.gif`
`:rofl:` | ![](https://youthweb.net/dist/smilies/rofl.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f923.png) | `:rofl:` | `rofl.gif`
`:-)` | ![](https://youthweb.net/dist/smilies/smile0001.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/263a.png) | `:relaxed:` | `smile0001.gif`
`:super:` | ![](https://youthweb.net/dist/smilies/489.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f609.png)![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f44d.png) | `:wink::thumbsup:` | `489.gif`
`:ww:` | ![](https://youthweb.net/dist/smilies/222.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f44b.png) | `:wave:` | `222.gif`
`:blinz:` | ![](https://youthweb.net/dist/smilies/blinkendes_auge.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f609.png) | `:wink:` | `blinkendes_auge.gif`
`:crazy:` | ![](https://youthweb.net/dist/smilies/paranoid.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f61c.png) | `:stuck_out_tongue_winking_eye:` | `paranoid.gif`
`:morgen:` | ![](https://youthweb.net/dist/smilies/morgen.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f634.png)![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f304.png) | `:sleeping::sunrise_over_mountains:` | `morgen.gif`
`:giveup:` | ![](https://youthweb.net/dist/smilies/giveup.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f3f3.png) | `:flag_white:` | `giveup.gif`
`:kruecken:` | ![](https://youthweb.net/dist/smilies/bhindi.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f915.png) | `:head_bandage:` | `bhindi.gif`
`:essen:` | ![](https://youthweb.net/dist/smilies/39[1].gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f374.png) | `:fork_and_knife:` | `39[1].gif`
`:fernsehn:` | ![](https://youthweb.net/dist/smilies/fernsehen.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f6cb.png)![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f4fa.png) | `:couch::tv: ` | `fernsehen.gif`
`:duschen:` | ![](https://youthweb.net/dist/smilies/00001783.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f6bf.png) | `:shower:` | `00001783.gif`
`:abwasch:` | ![](https://youthweb.net/dist/smilies/abwasch.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f37d.png)![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f6b0.png) | `:fork::potable_water:` | `abwasch.gif`
`:arbeiten:` | ![](https://youthweb.net/dist/smilies/00001777.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f528.png) | `:hammer:` | `00001777.gif`
`:toilette:` | ![](https://youthweb.net/dist/smilies/00001798.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f6bd.png) | `:toilet:` | `00001798.gif`
`:sdu8:` | ![](https://youthweb.net/dist/smilies/coolkaugummi.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f60e.png) | `:sunglasses:` | `coolkaugummi.gif`
`:arab:` | ![](https://youthweb.net/dist/smilies/arab.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f473.png) | `:man_with_turban:` | `arab.gif`
`:mcdonalds:` | ![](https://youthweb.net/dist/smilies/mcdonald.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f354.png)![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f35f.png) | `:hamburger::fries:` | `mcdonald.gif`
`:boxen:` | ![](https://youthweb.net/dist/smilies/boxxen.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f94a.png) | `:boxing_glove:` | `boxxen.gif`
`:verrückt:` | ![](https://youthweb.net/dist/smilies/verrueckt.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f44a.png) | `:punch:` | `verrueckt.gif`
`:urlaub:` | ![](https://youthweb.net/dist/smilies/strand.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f3c4.png) | `:surfer:` | `strand.gif`
`:victory:` | ![](https://youthweb.net/dist/smilies/b025.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/270c.png) | `:v:` | `b025.gif`
`:liebesbrief:` | ![](https://youthweb.net/dist/smilies/liebesbrief.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f48c.png) | `:love_letter:` | `liebesbrief.gif`
`:weinen:` | ![](https://youthweb.net/dist/smilies/weinen.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f62d.png) | `:sob:` | `weinen.gif`
`:gucken:` | ![](https://youthweb.net/dist/smilies/00000952[1].gif) | :question: | `` | `00000952[1].gif`
`:pcprob:` | ![](https://youthweb.net/dist/smilies/PcProb.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f4bb.png)![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f620.png)![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f44a.png) | `:computer::angry::punch:` | `PcProb.gif`
`:waschen2:` | ![](https://youthweb.net/dist/smilies/00001797[1].gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f455.png)![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f6bf.png) | `:shirt::shower:` | `00001797[1].gif`
`:koch:` | ![](https://youthweb.net/dist/smilies/Koch.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f373.png) | `:egg:` | `Koch.gif`
`:baden:` | ![](https://youthweb.net/dist/smilies/00001779[1].gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f6c0.png) | `:bath:` | `00001779[1].gif`
`:troesten:` | ![](https://youthweb.net/dist/smilies/troesten.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f917.png) | `:hugging:` | `troesten.gif`
`:bügeln:` | ![](https://youthweb.net/dist/smilies/buegeln.gif) | :question: | `` | `buegeln.gif`
`:respekt:` | ![](https://youthweb.net/dist/smilies/288.gif) | :question: | `` | `288.gif`
`:naund:` | ![](https://youthweb.net/dist/smilies/00000673.gif) | :question: | `` | `00000673.gif`
`:doof:` | ![](https://youthweb.net/dist/smilies/doof.gif) | :question: | `` | `doof.gif`
`:ethe:` | ![](https://youthweb.net/dist/smilies/blumen.gif) | :question: | `` | `blumen.gif`
`:pascholti:` | ![](https://youthweb.net/dist/smilies/paschol.png) | :question: | `` | `paschol.png`
`:love1:` | ![](https://youthweb.net/dist/smilies/Love1.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f491.png) | `:couple_with_heart:` | `Love1.gif`
`:boxen2:` | ![](https://youthweb.net/dist/smilies/box.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f93c.png) | `:wrestlers:` | `box.gif`
`:aldi:` | ![](https://youthweb.net/dist/smilies/aldi.gif) | :question: | `` | `aldi.gif`
`:mama:` | ![](https://youthweb.net/dist/smilies/mama.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f469.png) | `:woman:` | `mama.gif`
`:bye:` | ![](https://youthweb.net/dist/smilies/fol.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f44b.png) | `:wave:` | `fol.gif`
`:birthday2:` | ![](https://youthweb.net/dist/smilies/birthday2.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f38a.png) | `:confetti_ball:` | `birthday2.gif`
`:eingebildet:` | ![](https://youthweb.net/dist/smilies/eingebildet.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f633.png) | `:flushed:` | `eingebildet.gif`
`:bipa:` | ![](https://youthweb.net/dist/smilies/spassbremse.gif) | :question: | `` | `spassbremse.gif`
`:gewalt:` | ![](https://youthweb.net/dist/smilies/Gewalt.gif) | :question: | `` | `Gewalt.gif`
`:kopfschlag:` | ![](https://youthweb.net/dist/smilies/Kopfschlag.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f926.png) | `:face_palm:` | `Kopfschlag.gif`
`:look:` | ![](https://youthweb.net/dist/smilies/atanz2.gif) | :question: | `` | `atanz2.gif`
`:noterror:` | ![](https://youthweb.net/dist/smilies/noterror.gif) | :question: | `` | `noterror.gif`
`:schleimer:` | ![](https://youthweb.net/dist/smilies/schleimer.gif) | :question: | `` | `schleimer.gif`
`:gassi:` | ![](https://youthweb.net/dist/smilies/smilie_hund1.gif) | :question: | `` | `smilie_hund1.gif`
`:heck:` | ![](https://youthweb.net/dist/smilies/heck.gif) | :question: | `` | `heck.gif`
`:baseball:` | ![](https://youthweb.net/dist/smilies/aufsmaul.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/26be.png) | `:baseball:` | `aufsmaul.gif`
`:heuldoch:` | ![](https://youthweb.net/dist/smilies/heuldoch.gif) | :question: | `` | `heuldoch.gif`
`:gutenacht:` | ![](https://youthweb.net/dist/smilies/Gute%20nacht.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f303.png) | `:night_with_stars:` | `Gute nacht.gif`
`:weck` | ![](https://youthweb.net/dist/smilies/62.gif) | :question: | `` | `62.gif`
`:bussi:` | ![](https://youthweb.net/dist/smilies/bussi.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f48f.png) | `:couplekiss:` | `bussi.gif`
`:sani:` | ![](https://youthweb.net/dist/smilies/477.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f691.png) | `:ambulance:` | `477.gif`
`:worship:` | ![](https://youthweb.net/dist/smilies/a030.gif) | :question: | `` | `a030.gif`
`:regin:` | ![](https://youthweb.net/dist/smilies/a035.gif) | :question: | `` | `a035.gif`
`:campen:` | ![](https://youthweb.net/dist/smilies/haus56.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/26fa.png) | `:tent:` | `haus56.gif`
`:inlove:` | ![](https://youthweb.net/dist/smilies/inlove.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f46b.png) | `:couple:` | `inlove.gif`
`:rockon:` | ![](https://youthweb.net/dist/smilies/rockon.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f3b8.png) | `:guitar:` | `rockon.gif`
`:reiten:` | ![](https://youthweb.net/dist/smilies/Reiten.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f3c7.png) | `:horse_racing:` | `Reiten.gif`
`:kotz:` | ![](https://youthweb.net/dist/smilies/kotzen.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f637.png) | `:mask:` | `kotzen.gif`
`:pfeifen:` | ![](https://youthweb.net/dist/smilies/a050.gif) | :question: | `` | `a050.gif`
`:feierabend:` | ![](https://youthweb.net/dist/smilies/feierabend.gif) | :question: | `` | `feierabend.gif`
`:danke:` | ![](https://youthweb.net/dist/smilies/Danke.gif) | :question: | `` | `Danke.gif`
`:dagegen:` | ![](https://youthweb.net/dist/smilies/dagegen.gif) | :question: | `` | `dagegen.gif`
`:frauenpower:` | ![](https://youthweb.net/dist/smilies/frauen_power.gif) | :question: | `` | `frauen_power.gif`
`:bitte:` | ![](https://youthweb.net/dist/smilies/bbitte.gif) | :question: | `` | `bbitte.gif`
`:gibtnix:` | ![](https://youthweb.net/dist/smilies/gibtnix.gif) | :question: | `` | `gibtnix.gif`
`:wiejetzt:` | ![](https://youthweb.net/dist/smilies/haewiejetzt.gif) | :question: | `` | `haewiejetzt.gif`
`:hilfe:` | ![](https://youthweb.net/dist/smilies/iloveme.gif) | :question: | `` | `iloveme.gif`
`:partyon:` | ![](https://youthweb.net/dist/smilies/partyon+.gif) | :question: | `` | `partyon+.gif`
`:wolke7:` | ![](https://youthweb.net/dist/smilies/love5.gif) | :question: | `` | `love5.gif`
`:stecher:` | ![](https://youthweb.net/dist/smilies/stecher.gif) | :question: | `` | `stecher.gif`
`:bart:` | ![](https://youthweb.net/dist/smilies/disguise.gif) | :question: | `` | `disguise.gif`
`:rofll:` | ![](https://youthweb.net/dist/smilies/rofl1.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f616.png) | `:confounded:` | `rofl1.gif`
`:trainieren:` | ![](https://youthweb.net/dist/smilies/weight_lift.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f4aa.png) | `:muscle:` | `weight_lift.gif`
`:sboard:` | ![](https://youthweb.net/dist/smilies/snowboard.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f3c2.png) | `:snowboarder:` | `snowboard.gif`
`:schleimer2:` | ![](https://youthweb.net/dist/smilies/nerd.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f913.png) | :nerd: | `nerd.gif`
`:boxer:` | ![](https://youthweb.net/dist/smilies/boxed3_h4h.gif) | :question: | `` | `boxed3_h4h.gif`
`:ala:` | ![](https://youthweb.net/dist/smilies/ala.gif) | :question: | `` | `ala.gif`
`:bike:` | ![](https://youthweb.net/dist/smilies/biker_h4h.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f3cd.png) | `:motorcycle:` | `biker_h4h.gif`
`:lecker:` | ![](https://youthweb.net/dist/smilies/licklips.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f60b.png) | `:yum:` | `licklips.gif`
`:schlafen:` | ![](https://youthweb.net/dist/smilies/456.gif) | :question: | `` | `456.gif`
`:rappen:` | ![](https://youthweb.net/dist/smilies/rappen.gif) | :question: | `` | `rappen.gif`
`:ohnmacht:` | ![](https://youthweb.net/dist/smilies/Ohnmacht1.gif) | :question: | `` | `Ohnmacht1.gif`
`:wersucht:` | ![](https://youthweb.net/dist/smilies/wrsucht.gif) | :question: | `` | `wrsucht.gif`
`:insel:` | ![](https://youthweb.net/dist/smilies/Insel.gif) | :question: | `` | `Insel.gif`
`:lügen:` | ![](https://youthweb.net/dist/smilies/pinoccio.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f925.png) | `:lying_face:` | `pinoccio.gif`
`:freak:` | ![](https://youthweb.net/dist/smilies/smiley-channel.de_schilder173.gif) | :question: | `` | `smiley-channel.de_schilder173.gif`
`:schwein:` | ![](https://youthweb.net/dist/smilies/smiley-channel.de_schilder195.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f437.png) | `:pig:` | `smiley-channel.de_schilder195.gif`
`:lol4:` | ![](https://youthweb.net/dist/smilies/smiley-channel.de_schilder048.gif) | :question: | `` | `smiley-channel.de_schilder048.gif`
`:admin:` | ![](https://youthweb.net/dist/smilies/admins.gif) | :question: | `` | `admins.gif`
`:firefox:` | ![](https://youthweb.net/dist/smilies/270.gif) | :question: | `` | `270.gif`
`:school:` | ![](https://youthweb.net/dist/smilies/012.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f3eb.png) | `:school:` | `012.gif`
`:charmant:` | ![](https://youthweb.net/dist/smilies/286.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f3a9.png) | `:tophat:` | `286.gif`
`:ausflippen:` | ![](https://youthweb.net/dist/smilies/522.gif) | :question: | `` | `522.gif`
`:ww2:` | ![](https://youthweb.net/dist/smilies/221.gif) | :question: | `` | `221.gif`
`:bigeyes:` | ![](https://youthweb.net/dist/smilies/267.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f440.png) | `:eyes:` | `267.gif`
`:kaputtlachen:` | ![](https://youthweb.net/dist/smilies/281.gif) | :question: | `` | `281.gif`
`:unschuldig:` | ![](https://youthweb.net/dist/smilies/unschuldig.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f607.png) | `:innocent:` | `unschuldig.gif`
`:kirche:` | ![](https://youthweb.net/dist/smilies/kirche.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/26ea.png) | `:church:` | `kirche.gif`
`:frauenklatsch:` | ![](https://youthweb.net/dist/smilies/weiberplausch.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f4ac.png) | `:speech_balloon:` | `weiberplausch.gif`
`:krieger:` | ![](https://youthweb.net/dist/smilies/379.gif) | :question: | `` | `379.gif`
`:essen2:` | ![](https://youthweb.net/dist/smilies/essen.gif) | :question: | `` | `essen.gif`
`:boese:` | ![](https://youthweb.net/dist/smilies/boese.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f620.png) | `:angry:` | `boese.gif`
`:verneigen:` | ![](https://youthweb.net/dist/smilies/verneigen.gif) | :question: | `` | `verneigen.gif`
`;-)` | ![](https://youthweb.net/dist/smilies/winking.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f609.png) | `:wink:` | `winking.gif`
`:ja:` | ![](https://youthweb.net/dist/smilies/ja.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f60a.png)![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f44d.png) | `:blush::thumbsup:` | `ja.gif`
`:-p` | ![](https://youthweb.net/dist/smilies/zunge.gif) | :question: | `` | `zunge.gif`
`:-(` | ![](https://youthweb.net/dist/smilies/mad01.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f620.png) | `:angry:` | `mad01.gif`
`:nein:` | ![](https://youthweb.net/dist/smilies/nein.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f61f.png)![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f44e.png) | `:worried::thumbsdown:` | `nein.gif`
`:uncool:` | ![](https://youthweb.net/dist/smilies/uncool.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f44e.png) | `:thumbsdown:` | `uncool.gif`
`:klatschen:` | ![](https://youthweb.net/dist/smilies/klatschen.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f44f.png) | `:clap:` | `klatschen.gif`
`:handy:` | ![](https://youthweb.net/dist/smilies/handy.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f933.png) | `:selfie:` | `handy.gif`
`:muede:` | ![](https://youthweb.net/dist/smilies/gaehnen.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f62a.png) | `:sleepy:` | `gaehnen.gif`
`:keineahnung:` | ![](https://youthweb.net/dist/smilies/keineahnung.gif) | :question: | `` | `keineahnung.gif`
`:rudolf:` | ![](https://youthweb.net/dist/smilies/rudolf.gif) | :question: | `` | `rudolf.gif`
`:kalt:` | ![](https://youthweb.net/dist/smilies/cold.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f630.png) | `:cold_sweat:` | `cold.gif`
`:wman:` | ![](https://youthweb.net/dist/smilies/weihnachtsmann.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f385.png) | `:santa:` | `weihnachtsmann.gif`
`:zitter:` | ![](https://youthweb.net/dist/smilies/xpb_zitter.gif) | :question: | `` | `xpb_zitter.gif`
`:wman2:` | ![](https://youthweb.net/dist/smilies/woswmann950.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f385.png) | `:santa:` | `woswmann950.gif`
`:wman3:` | ![](https://youthweb.net/dist/smilies/woswmann1550.gif) | :question: | `` | `woswmann1550.gif`
`:hochzeit:` | ![](https://youthweb.net/dist/smilies/hochzeit.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f492.png) | `:wedding:` | `hochzeit.gif`
`:oops:` | ![](https://youthweb.net/dist/smilies/oops.gif) | :question: | `` | `oops.gif`
`:kaputthauen:` | ![](https://youthweb.net/dist/smilies/kaputthauen.gif) | :question: | `` | `kaputthauen.gif`
`:baden3:` | ![](https://youthweb.net/dist/smilies/baden3.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f6c1.png) | `:bathtub:` | `baden3.gif`
`:lenak:` | ![](https://youthweb.net/dist/smilies/484.gif) | :question: | `` | `484.gif`
`:jeff:` | ![](https://youthweb.net/dist/smilies/Jeff.gif) | :question: | `` | `Jeff.gif`
`:knuddell:` | ![](https://youthweb.net/dist/smilies/knuddel.gif) | :question: | `` | `knuddel.gif`
`:ruhe:` | ![](https://youthweb.net/dist/smilies/ruhe.gif) | :question: | `` | `ruhe.gif`
`:cool:` | ![](https://youthweb.net/dist/smilies/cool.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f60e.png) | `:sunglasses:` | `cool.gif`
`:manweisetnich:` | ![](https://youthweb.net/dist/smilies/man_weiset.png) | :question: | `` | `man_weiset.png`
`:(` | ![](https://youthweb.net/dist/smilies/frown.gif) | :question: | `` | `frown.gif`
`:knuddel2:` | ![](https://youthweb.net/dist/smilies/liebe_061.gif) | :question: | `` | `liebe_061.gif`
`:denken:` | ![](https://youthweb.net/dist/smilies/verwirrte_026.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f614.png) | `:pensive:` | `verwirrte_026.gif`
`:denken2:` | ![](https://youthweb.net/dist/smilies/Denken2.gif) | :question: | `` | `Denken2.gif`
`:denken3:` | ![](https://youthweb.net/dist/smilies/idee.gif) | :question: | `` | `idee.gif`
`:knuddel3:` | ![](https://youthweb.net/dist/smilies/liebe_028.gif) | :question: | `` | `liebe_028.gif`
`:romantik:` | ![](https://youthweb.net/dist/smilies/romantik.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f339.png) | `:rose:` | `romantik.gif`
`:foto:` | ![](https://youthweb.net/dist/smilies/fotosmilie.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f4f8.png) | `:camera_flash:` | `fotosmilie.gif`
`:sauer2:` | ![](https://youthweb.net/dist/smilies/sauer.gif) | :question: | `` | `sauer.gif`
`:krankes:` | ![](https://youthweb.net/dist/smilies/Krankes.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f48a.png) | `:pill:` | `Krankes.gif`
`:doof1:` | ![](https://youthweb.net/dist/smilies/bin_ich_doof.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f926-2642.png) | `:man_facepalming:` | `bin_ich_doof.gif`
`:car:` | ![](https://youthweb.net/dist/smilies/car.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f697.png) | `:red_car:` | `car.gif`
`:wayne:` | ![](https://youthweb.net/dist/smilies/wayne_interessierts.gif) | :question: | `` | `wayne_interessierts.gif`
`:snowboard:` | ![](https://youthweb.net/dist/smilies/snowboardler.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f3c2.png) | `:snowboarder:` | `snowboardler.gif`
`:sagnix:` | ![](https://youthweb.net/dist/smilies/ich_sag_nix.gif) | :question: | `` | `ich_sag_nix.gif`
`:regin2:` | ![](https://youthweb.net/dist/smilies/hauen.gif) | :question: | `` | `hauen.gif`
`:kuuhl:` | ![](https://youthweb.net/dist/smilies/kuuuhl.png) | :question: | `` | `kuuuhl.png`
`:saugen:` | ![](https://youthweb.net/dist/smilies/staubsauger!.gif) | :question: | `` | `staubsauger!.gif`
`:para:` | ![](https://youthweb.net/dist/smilies/kreis.gif) | :question: | `` | `kreis.gif`
`:blach:` | ![](https://youthweb.net/dist/smilies/blach.gif) | :question: | `` | `blach.gif`
`:rofllll:` | ![](https://youthweb.net/dist/smilies/smilie_happy_251.gif) | :question: | `` | `smilie_happy_251.gif`
`:spam:` | ![](https://youthweb.net/dist/smilies/forum.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f38f.png) | `:flags:` | `forum.gif`
`:ohnemich:` | ![](https://youthweb.net/dist/smilies/bpb_ohnemi.gif) | :question: | `` | `bpb_ohnemi.gif`
`:osterkuss:` | ![](https://youthweb.net/dist/smilies/o_78-001.gif) | :question: | `` | `o_78-001.gif`
`:eiermaler:` | ![](https://youthweb.net/dist/smilies/ostern_71.gif) | :question: | `` | `ostern_71.gif`
`:hase:` | ![](https://youthweb.net/dist/smilies/HAAAAAAAAAAAASE.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f430.png) | `:rabbit:` | `HAAAAAAAAAAAASE.gif`
`:hase1:` | ![](https://youthweb.net/dist/smilies/hase3.gif) | :question: | `` | `hase3.gif`
`:hase2:` | ![](https://youthweb.net/dist/smilies/HASE4.gif) | :question: | `` | `HASE4.gif`
`:hase3:` | ![](https://youthweb.net/dist/smilies/has2.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f407.png) | `:rabbit2:` | `has2.gif`
`:irre:` | ![](https://youthweb.net/dist/smilies/bunny_4.gif) | :question: | `` | `bunny_4.gif`
`:herz:` | ![](https://youthweb.net/dist/smilies/herzchen.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/2764.png) | `:heart:` | `herzchen.gif`
`:achja:` | ![](https://youthweb.net/dist/smilies/achja.gif) | :question: | `` | `achja.gif`
`:morgähn:` | ![](https://youthweb.net/dist/smilies/morgaehn.gif) | :question: | `` | `morgaehn.gif`
`:amen:` | ![](https://youthweb.net/dist/smilies/amen.gif) | :question: | `` | `amen.gif`
`:aufwachen:` | ![](https://youthweb.net/dist/smilies/aufwachen.gif) | :question: | `` | `aufwachen.gif`
`:vio:` | ![](https://youthweb.net/dist/smilies/phone02.gif) | :question: | `` | `phone02.gif`
`:admins:` | ![](https://youthweb.net/dist/smilies/admin.jpg) | :question: | `` | `admin.jpg`
`:romeo:` | ![](https://youthweb.net/dist/smilies/Romeo.gif) | :question: | `` | `Romeo.gif`
`:shy:` | ![](https://youthweb.net/dist/smilies/jo.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f60a.png) | `:blush:` | `jo.gif`
`:tbaum:` | ![](https://youthweb.net/dist/smilies/1xmas500.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f384.png) | `:christmas_tree:` | `1xmas500.gif`
`:kopf:` | ![](https://youthweb.net/dist/smilies/kopf.gif) | :question: | `` | `kopf.gif`
`:closed:` | ![](https://youthweb.net/dist/smilies/cl.gif) | :question: | `` | `cl.gif`
`:deutschland:` | ![](https://youthweb.net/dist/smilies/deutsc.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f1e9-1f1ea.png) | `:de:` | `deutsc.gif`
`:laugh:` | ![](https://youthweb.net/dist/smilies/deutschland-lacht-ueber-holland.gif) | :question: | `` | `deutschland-lacht-ueber-holland.gif`
`:final:` | ![](https://youthweb.net/dist/smilies/final04.gif) | :question: | `` | `final04.gif`
`:wmleo:` | ![](https://youthweb.net/dist/smilies/wmgoleo.gif) | :question: | `` | `wmgoleo.gif`
`:brasil:` | ![](https://youthweb.net/dist/smilies/brasil.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f1e7-1f1f7.png) | `:br:` | `brasil.gif`
`:fussball:` | ![](https://youthweb.net/dist/smilies/fussball-smilie.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/26bd.png) | `:soccer:` | `fussball-smilie.gif`
`:kopfball:` | ![](https://youthweb.net/dist/smilies/soccer_2.gif) | :question: | `` | `soccer_2.gif`
`:rot:` | ![](https://youthweb.net/dist/smilies/platzverweis.gif) | :question: | `` | `platzverweis.gif`
`:leeep:` | ![](https://youthweb.net/dist/smilies/leep.gif) | :question: | `` | `leep.gif`
`:-[` | ![](https://youthweb.net/dist/smilies/49_2.gif) | :question: | `` | `49_2.gif`
`:togo:` | ![](https://youthweb.net/dist/smilies/wm2006togo1.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f1f9-1f1ec.png) | `:tg:` | `wm2006togo1.gif`
`:japan:` | ![](https://youthweb.net/dist/smilies/wm2006japan0.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f1ef-1f1f5.png) | `:jp:` | `wm2006japan0.gif`
`:roli:` | ![](https://youthweb.net/dist/smilies/boese2.gif) | :question: | `` | `boese2.gif`
`:portugal:` | ![](https://youthweb.net/dist/smilies/portugal.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f1f5-1f1f9.png) | `:pt:` | `portugal.gif`
`:meld:` | ![](https://youthweb.net/dist/smilies/meld.gif) | :question: | `` | `meld.gif`
`:moin:` | ![](https://youthweb.net/dist/smilies/Moin.gif) | :question: | `` | `Moin.gif`
`:hm:` | ![](https://youthweb.net/dist/smilies/hm.gif) | :question: | `` | `hm.gif`
`:blume:` | ![](https://youthweb.net/dist/smilies/6874.gif) | :question: | `` | `6874.gif`
`:inlove2:` | ![](https://youthweb.net/dist/smilies/huglove.gif) | :question: | `` | `huglove.gif`
`:tess:` | ![](https://youthweb.net/dist/smilies/wm2006tschechien1.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f1e8-1f1ff.png) | `:cz:` | `wm2006tschechien1.gif`
`:spanien:` | ![](https://youthweb.net/dist/smilies/wm2006spanien1.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f1ea-1f1f8.png) | `:es:` | `wm2006spanien1.gif`
`:angola:` | ![](https://youthweb.net/dist/smilies/wm2006angola2.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f1e6-1f1f4.png) | `:ao:` | `wm2006angola2.gif`
`:Italien:` | ![](https://youthweb.net/dist/smilies/wm2006italien1.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f1ee-1f1f9.png) | `:it:` | `wm2006italien1.gif`
`:ich:` | ![](https://youthweb.net/dist/smilies/iiich.gif) | :question: | `` | `iiich.gif`
`:shok:` | ![](https://youthweb.net/dist/smilies/1shok.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f62f.png) | `:hushed:` | `1shok.gif`
`:luna:` | ![](https://youthweb.net/dist/smilies/animal-smiley-031.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f431.png) | `:cat:` | `animal-smiley-031.gif`
`:holland:` | ![](https://youthweb.net/dist/smilies/wm2006niederlande1.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f1f3-1f1f1.png) | `:nl:` | `wm2006niederlande1.gif`
`:gelb:` | ![](https://youthweb.net/dist/smilies/gelb.gif) | :question: | `` | `gelb.gif`
`:weight:` | ![](https://youthweb.net/dist/smilies/weight_lift2.gif) | :question: | `` | `weight_lift2.gif`
`:england:` | ![](https://youthweb.net/dist/smilies/wm2006england1.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f1ec-1f1e7.png) | `:gb:` | `wm2006england1.gif`
`:ghana:` | ![](https://youthweb.net/dist/smilies/wm2006ghana1.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f1ec-1f1ed.png) | `:gh:` | `wm2006ghana1.gif`
`:frankreich:` | ![](https://youthweb.net/dist/smilies/wm2006frankreich1.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f1eb-1f1f7.png) | `:fr:` | `wm2006frankreich1.gif`
`:spam1:` | ![](https://youthweb.net/dist/smilies/spamfrust.gif) | :question: | `` | `spamfrust.gif`
`:ukraine:` | ![](https://youthweb.net/dist/smilies/wm2006ukraine1.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f1fa-1f1e6.png) | `:ua:` | `wm2006ukraine1.gif`
`:2cool:` | ![](https://youthweb.net/dist/smilies/cool3.gif) | :question: | `` | `cool3.gif`
`:rulez:` | ![](https://youthweb.net/dist/smilies/smiley-channel.de_lesen021.gif) | :question: | `` | `smiley-channel.de_lesen021.gif`
`:israel:` | ![](https://youthweb.net/dist/smilies/tikva.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f1ee-1f1f1.png) | `:il:` | `tikva.gif`
`:poker:` | ![](https://youthweb.net/dist/smilies/poker.gif) | :question: | `` | `poker.gif`
`:spth:` | ![](https://youthweb.net/dist/smilies/spth.png) | :question: | `` | `spth.png`
`:JoLo:` | ![](https://youthweb.net/dist/smilies/MrSax02.gif) | :question: | `` | `MrSax02.gif`
`:on:` | ![](https://youthweb.net/dist/smilies/On.gif) | :question: | `` | `On.gif`
`:mb:` | ![](https://youthweb.net/dist/smilies/eine_wie_keine.png) | :question: | `` | `eine_wie_keine.png`
`:boese1:` | ![](https://youthweb.net/dist/smilies/boese.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/261d.png) | `:point_up:` | `boese.gif`
`:boese2:` | ![](https://youthweb.net/dist/smilies/boese1.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f446.png) | `:point_up_2:` | `boese1.gif`
`:friend:` | ![](https://youthweb.net/dist/smilies/friend.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f46c.png) | `:two_men_holding_hands:` | `friend.gif`
`:muede1:` | ![](https://youthweb.net/dist/smilies/muede.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f629.png) | `:weary:` | `muede.gif`
`:steffi:` | ![](https://youthweb.net/dist/smilies/traurig.gif) | :question: | `` | `traurig.gif`
`:super1:` | ![](https://youthweb.net/dist/smilies/froh.gif) | :question: | `` | `froh.gif`
`:ody:` | ![](https://youthweb.net/dist/smilies/gg!!!!!!!!!!!!!!!!!!!.gif) | :question: | `` | `gg!!!!!!!!!!!!!!!!!!!.gif`
`:halt:` | ![](https://youthweb.net/dist/smilies/halt_stop.gif) | :question: | `` | `halt_stop.gif`
`:lachen1:` | ![](https://youthweb.net/dist/smilies/hand_vorm_mund.gif) | :question: | `` | `hand_vorm_mund.gif`
`:LP:` | ![](https://youthweb.net/dist/smilies/ironie.gif) | :question: | `` | `ironie.gif`
`:superman:` | ![](https://youthweb.net/dist/smilies/sman.gif) | :question: | `` | `sman.gif`
`:skater:` | ![](https://youthweb.net/dist/smilies/skateboard.gif) | :question: | `` | `skateboard.gif`
`:gelb1:` | ![](https://youthweb.net/dist/smilies/sport.gif) | :question: | `` | `sport.gif`
`:abcheck:` | ![](https://youthweb.net/dist/smilies/blinkendes_auge_mit_herzchen.gif) | :question: | `` | `blinkendes_auge_mit_herzchen.gif`
`:dl:` | ![](https://youthweb.net/dist/smilies/diane.gif) | :question: | `` | `diane.gif`
`:RW:` | ![](https://youthweb.net/dist/smilies/rita.gif) | :question: | `` | `rita.gif`
`:yw:` | ![](https://youthweb.net/dist/smilies/fehler.gif) | :question: | `` | `fehler.gif`
`:schild:` | ![](https://youthweb.net/dist/smilies/schild.gif) | :question: | `` | `schild.gif`
`:firefox1:` | ![](https://youthweb.net/dist/smilies/mozilla.gif) | :question: | `` | `mozilla.gif`
`:2lee:` | ![](https://youthweb.net/dist/smilies/lee.gif) | :question: | `` | `lee.gif`
`:pizzaess:` | ![](https://youthweb.net/dist/smilies/pizzaess.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f355.png) | `:pizza:` | `pizzaess.gif`
`:emoo:` | ![](https://youthweb.net/dist/smilies/emo.gif) | :question: | `` | `emo.gif`
`:hehe:` | ![](https://youthweb.net/dist/smilies/hehe.gif) | :question: | `` | `hehe.gif`
`:ljena:` | ![](https://youthweb.net/dist/smilies/ani_sonstige137.gif) | :question: | `` | `ani_sonstige137.gif`
`:neugierig:` | ![](https://youthweb.net/dist/smilies/Neugierig.gif) | :question: | `` | `Neugierig.gif`
`:F5:` | ![](https://youthweb.net/dist/smilies/ani_schilder55.gif) | :question: | `` | `ani_schilder55.gif`
`:lachen:` | ![](https://youthweb.net/dist/smilies/ani_lachende2.gif) | :question: | `` | `ani_lachende2.gif`
`:saugen1:` | ![](https://youthweb.net/dist/smilies/Saugen1.gif) | :question: | `` | `Saugen1.gif`
`:angi:` | ![](https://youthweb.net/dist/smilies/f025.gif) | :question: | `` | `f025.gif`
`:hau:` | ![](https://youthweb.net/dist/smilies/hau.gif) | :question: | `` | `hau.gif`
`:hust:` | ![](https://youthweb.net/dist/smilies/husten.gif) | :question: | `` | `husten.gif`
`:lolli:` | ![](https://youthweb.net/dist/smilies/lolli.gif) | :question: | `` | `lolli.gif`
`:ranger:` | ![](https://youthweb.net/dist/smilies/ranger.gif) | :question: | `` | `ranger.gif`
`:lena87:` | ![](https://youthweb.net/dist/smilies/a020.gif) | :question: | `` | `a020.gif`
`:partytime:` | ![](https://youthweb.net/dist/smilies/sta_schilder140.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f389.png) | `:tada:` | `sta_schilder140.gif`
`:graade:` | ![](https://youthweb.net/dist/smilies/sta_schilder365.gif) | :question: | `` | `sta_schilder365.gif`
`:wishes:` | ![](https://youthweb.net/dist/smilies/wishes.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f388.png) | `:balloon:` | `wishes.gif`
`:russ:` | ![](https://youthweb.net/dist/smilies/smilies_flaggen056.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f1f7-1f1fa.png) | `:ru:` | `smilies_flaggen056.gif`
`:sorry:` | ![](https://youthweb.net/dist/smilies/sta_schilder116.gif) | :question: | `` | `sta_schilder116.gif`
`:spiegel:` | ![](https://youthweb.net/dist/smilies/lustich.gif) | :question: | `` | `lustich.gif`
`:wman5:` | ![](https://youthweb.net/dist/smilies/woswmann1560.gif) | :question: | `` | `woswmann1560.gif`
`:wmanlachen:` | ![](https://youthweb.net/dist/smilies/woswmann1810.gif) | :question: | `` | `woswmann1810.gif`
`:hannibal:` | ![](https://youthweb.net/dist/smilies/shv.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f482.png) | `:guardsman:` | `shv.gif`
`:sheep:` | ![](https://youthweb.net/dist/smilies/sheep.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f411.png) | `:sheep:` | `sheep.gif`
`:grizzly:` | ![](https://youthweb.net/dist/smilies/Teddy.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f43b.png) | `:bear:` | `Teddy.gif`
`:frauenimforum:` | ![](https://youthweb.net/dist/smilies/frauen_im_forum.gif) | :question: | `` | `frauen_im_forum.gif`
`:checka:` | ![](https://youthweb.net/dist/smilies/peace.gif) | :question: | `` | `peace.gif`
`:yeah:` | ![](https://youthweb.net/dist/smilies/yeeeah.gif) | :question: | `` | `yeeeah.gif`
`:klavier:` | ![](https://youthweb.net/dist/smilies/klvier.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f3b9.png) | `:musical_keyboard:` | `klvier.gif`
`:kante:` | ![](https://youthweb.net/dist/smilies/bodybuilder.gif) | :question: | `` | `bodybuilder.gif`
`:roflll:` | ![](https://youthweb.net/dist/smilies/roflll.gif) | :question: | `` | `roflll.gif`
`:ohnmacht1:` | ![](https://youthweb.net/dist/smilies/ohnmacht.gif) | :question: | `` | `ohnmacht.gif`
`:sylvester:` | ![](https://youthweb.net/dist/smilies/weihnachten17.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f386.png) | `:fireworks:` | `weihnachten17.gif`
`:keks:` | ![](https://youthweb.net/dist/smilies/keks.gif) | :question: | `` | `keks.gif`
`:radfahrer:` | ![](https://youthweb.net/dist/smilies/chiller.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f6b4.png) | `:bicyclist:` | `chiller.gif`
`:nadia:` | ![](https://youthweb.net/dist/smilies/nadia.gif) | :question: | `` | `nadia.gif`
`:bball:` | ![](https://youthweb.net/dist/smilies/baseball.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f3c0.png) | `:basketball:` | `baseball.gif`
`:eis:` | ![](https://youthweb.net/dist/smilies/eis.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f366.png) | `:icecream:` | `eis.gif`
`:geige:` | ![](https://youthweb.net/dist/smilies/gaige.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f3bb.png) | `:violin:` | `gaige.gif`
`:qflöte:` | ![](https://youthweb.net/dist/smilies/querfloete.gif) | :question: | `` | `querfloete.gif`
`:training:` | ![](https://youthweb.net/dist/smilies/training1.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f4aa.png) | `:muscle:` | `training1.gif`
`:chor:` | ![](https://youthweb.net/dist/smilies/schief_singen.gif) | :question: | `` | `schief_singen.gif`
`:luck:` | ![](https://youthweb.net/dist/smilies/good_luck.gif) | :question: | `` | `good_luck.gif`
`:otto:` | ![](https://youthweb.net/dist/smilies/eclipsee_gold_cup.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f3c6.png) | `:trophy:` | `eclipsee_gold_cup.gif`
`:diddy:` | ![](https://youthweb.net/dist/smilies/schlagzeug.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f941.png) | `:drum:` | `schlagzeug.gif`
`:isy:` | ![](https://youthweb.net/dist/smilies/skuchen.gif) | :question: | `` | `skuchen.gif`
`:alex:` | ![](https://youthweb.net/dist/smilies/dunce.gif) | :question: | `` | `dunce.gif`
`:shenok:` | ![](https://youthweb.net/dist/smilies/hund.gif) | :question: | `` | `hund.gif`
`:ade:` | ![](https://youthweb.net/dist/smilies/ADE_Smily.gif) | :question: | `` | `ADE_Smily.gif`
`:dachschaden:` | ![](https://youthweb.net/dist/smilies/a085.gif) | :question: | `` | `a085.gif`
`:yves:` | ![](https://youthweb.net/dist/smilies/smilie_sonst_011.gif) | :question: | `` | `smilie_sonst_011.gif`
`:aly:` | ![](https://youthweb.net/dist/smilies/c080.gif) | :question: | `` | `c080.gif`
`:laurie:` | ![](https://youthweb.net/dist/smilies/ups.gif) | :question: | `` | `ups.gif`
`:blackb:` | ![](https://youthweb.net/dist/smilies/82.gif) | :question: | `` | `82.gif`
`:koko:` | ![](https://youthweb.net/dist/smilies/c010.gif) | :question: | `` | `c010.gif`
`:bahnhof:` | ![](https://youthweb.net/dist/smilies/bahnhof.gif) | :question: | `` | `bahnhof.gif`
`:basketball:` | ![](https://youthweb.net/dist/smilies/basketball.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/26f9.png) | `:basketball_player:` | `basketball.gif`
`:boxer1:` | ![](https://youthweb.net/dist/smilies/boxer.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f94a.png) | `:boxing_glove:` | `boxer.gif`
`:gitarre:` | ![](https://youthweb.net/dist/smilies/gittare.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f3b8.png) | `:guitar:` | `gittare.gif`
`:hand:` | ![](https://youthweb.net/dist/smilies/haendedruck.gif) | :question: | `` | `haendedruck.gif`
`:sos:` | ![](https://youthweb.net/dist/smilies/help_sos.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f198.png) | `:sos:` | `help_sos.gif`
`:krank:` | ![](https://youthweb.net/dist/smilies/krank.gif) | :question: | `` | `krank.gif`
`:krank1:` | ![](https://youthweb.net/dist/smilies/krank1.gif) | :question: | `` | `krank1.gif`
`:lästern:` | ![](https://youthweb.net/dist/smilies/laestern.gif) | :question: | `` | `laestern.gif`
`:küsschen:` | ![](https://youthweb.net/dist/smilies/love_350.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f48f.png) | `:couplekiss:` | `love_350.gif`
`:willkommen:` | ![](https://youthweb.net/dist/smilies/Willkommen.gif) | :question: | `` | `Willkommen.gif`
`:ywsuchti:` | ![](https://youthweb.net/dist/smilies/urlaub_lapi.gif) | :question: | `` | `urlaub_lapi.gif`
`:sun:` | ![](https://youthweb.net/dist/smilies/sun.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f31e.png) | `:sun_with_face:` | `sun.gif`
`:run:` | ![](https://youthweb.net/dist/smilies/run.gif) | :question: | `` | `run.gif`
`:chris:` | ![](https://youthweb.net/dist/smilies/smilie_frech_126.gif) | :question: | `` | `smilie_frech_126.gif`
`:gassi1:` | ![](https://youthweb.net/dist/smilies/smilie_tier_142.gif) | :question: | `` | `smilie_tier_142.gif`
`:olympia:` | ![](https://youthweb.net/dist/smilies/smilie_sp_257.gif) | :question: | `` | `smilie_sp_257.gif`
`:pico:` | ![](https://youthweb.net/dist/smilies/pico.gif) | :question: | `` | `pico.gif`
`:pray:` | ![](https://youthweb.net/dist/smilies/202_animated_person_praying.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f64f.png) | `:pray:` | `202_animated_person_praying.gif`
`:mimi:` | ![](https://youthweb.net/dist/smilies/smilie_frech_129.gif) | :question: | `` | `smilie_frech_129.gif`
`:pecora:` | ![](https://youthweb.net/dist/smilies/n030.gif) | :question: | `` | `n030.gif`
`:achso:` | ![](https://youthweb.net/dist/smilies/99.gif) | :question: | `` | `99.gif`
`:elliw:` | ![](https://youthweb.net/dist/smilies/smilie_winke_003.gif) | :question: | `` | `smilie_winke_003.gif`
`:sunchill:` | ![](https://youthweb.net/dist/smilies/s030.gif) | :question: | `` | `s030.gif`
`:JoLo1:` | ![](https://youthweb.net/dist/smilies/saxo.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f3b7.png) | `:saxophone:` | `saxo.gif`
`:blümchen:` | ![](https://youthweb.net/dist/smilies/blumekuss.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f490.png) | `:bouquet:` | `blumekuss.gif`
`:grill:` | ![](https://youthweb.net/dist/smilies/grillen.gif) | :question: | `` | `grillen.gif`
`:rubin:` | ![](https://youthweb.net/dist/smilies/boast.gif) | :question: | `` | `boast.gif`
`:gamer:` | ![](https://youthweb.net/dist/smilies/gamer4.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/1f3ae.png) | `:video_game:` | `gamer4.gif`
`:manni:` | ![](https://youthweb.net/dist/smilies/smilie_winke_048.gif) | :question: | `` | `smilie_winke_048.gif`
`:evi:` | ![](https://youthweb.net/dist/smilies/smilie_girl_068.gif) | :question: | `` | `smilie_girl_068.gif`
`:ordi:` | ![](https://youthweb.net/dist/smilies/ordi.gif) | :question: | `` | `ordi.gif`
`:bvb:` | ![](https://youthweb.net/dist/smilies/smilie_bvb.gif) | :question: | `` | `smilie_bvb.gif`
`:shy2:` | ![](https://youthweb.net/dist/smilies/smilie_girl_066.gif) | :question: | `` | `smilie_girl_066.gif`
`:deutschland2:` | ![](https://youthweb.net/dist/smilies/WM.gif) | :question: | `` | `WM.gif`
`:uschke:` | ![](https://youthweb.net/dist/smilies/3434.gif) | :question: | `` | `3434.gif`
`:admin2:` | ![](https://youthweb.net/dist/smilies/admins2.gif) | :question: | `` | `admins2.gif`
`:gutebesserung:` | ![](https://youthweb.net/dist/smilies/Gute%20Besserung.gif) | :question: | `` | `Gute Besserung.gif`
`:welcome:` | ![](https://youthweb.net/dist/smilies/welcome.gif) | :question: | `` | `welcome.gif`
`:hotwheel:` | ![](https://youthweb.net/dist/smilies/wheelchair.gif) | ![](https://cdn.jsdelivr.net/emojione/assets/3.0/png/64/267f.png) | `:wheelchair:` | `wheelchair.gif`
`:mokka:` | ![](https://youthweb.net/dist/smilies/mokka.gif) | :question: | `` | `mokka.gif`
`:schalke:` | ![](https://youthweb.net/dist/smilies/s04fahne.gif) | :question: | `` | `s04fahne.gif`
