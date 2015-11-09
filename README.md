# Migration der Smilies zu Emojis

Fortschritt: ![](http://progressed.io/bar/40) (145/363)

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
* **Filename**: Der Dateiname des Smiley bei Youthweb. Alle Smilies liegen bei Youthweb unter `https://youthweb.net/vendor/smilies/` ab.

Code | Smiley | Emoji | Emojicode | Filename
-----|--------|-------|-----------|---------
`:fischer:` | ![](https://youthweb.net/vendor/smilies/angeln.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F3A3.png?v=1.2.4) | `:fishing_pole_and_fish:` | `angeln.gif`
`:sleep:` | ![](https://youthweb.net/vendor/smilies/14.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F634.png?v=1.2.4) | `:sleeping:` | `14.gif`
`:angst:` | ![](https://youthweb.net/vendor/smilies/angst.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F628.png?v=1.2.4) | `:fearful:` | `angst.gif`
`:gworsky:` | ![](https://youthweb.net/vendor/smilies/crazydace.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F483.png?v=1.2.4) | `:dancer:` | `crazydace.gif`
`:streiten:` | ![](https://youthweb.net/vendor/smilies/093.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F4A2.png?v=1.2.4) | `:anger:` | `093.gif`
`:baby:` | ![](https://youthweb.net/vendor/smilies/Baby.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F476.png?v=1.2.4) | `:baby:` | `Baby.gif`
`:birthday:` | ![](https://youthweb.net/vendor/smilies/birthday.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F382.png?v=1.2.4) | `:birthday:` | `birthday.gif`
`:bounce:` | ![](https://youthweb.net/vendor/smilies/a065.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F603.png?v=1.2.4) | `:smiley:` | `a065.gif`
`:buck:` | ![](https://youthweb.net/vendor/smilies/buck.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F61D.png?v=1.2.4) | `:stuck_out_tongue_closed_eyes:` | `buck.gif`
`:confused:` | ![](https://youthweb.net/vendor/smilies/confused2.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F615.png?v=1.2.4) | `:confused:` | `confused2.gif`
`:heul:` | ![](https://youthweb.net/vendor/smilies/crying.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F62D.png?v=1.2.4) | `:sob:` | `crying.gif`
`:gg:` | ![](https://youthweb.net/vendor/smilies/gg.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F600.png?v=1.2.4) | `:grinning:` | `gg.gif`
`:king:` | ![](https://youthweb.net/vendor/smilies/king.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F451.png?v=1.2.4) | `:crown:` | `king.gif`
`:krach:` | ![](https://youthweb.net/vendor/smilies/Krach.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F621.png?v=1.2.4) | `:rage:` | `Krach.gif`
`:kreisen:` | ![](https://youthweb.net/vendor/smilies/kreisen.gif) | :question: | `` | `kreisen.gif`
`:lol:` | ![](https://youthweb.net/vendor/smilies/lol.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F606.png?v=1.2.4) | `:laughing:` | `lol.gif`
`:leaa:` | ![](https://youthweb.net/vendor/smilies/smilie_girl_151.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/270C.png?v=1.2.4)![](http://cdn.jsdelivr.net/emojione/assets/png/1F600.png?v=1.2.4) | `:v::grinning:` | `smilie_girl_151.gif`
`:esta:` | ![](https://youthweb.net/vendor/smilies/496.gif) | :question: | `` | `496.gif`
`:mecker:` | ![](https://youthweb.net/vendor/smilies/mecker.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F446.png?v=1.2.4) | `:point_up_2:` | `mecker.gif`
`:band:` | ![](https://youthweb.net/vendor/smilies/Band.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F3A4.png?v=1.2.4)![](http://cdn.jsdelivr.net/emojione/assets/png/1F3B8.png?v=1.2.4) | `:microphone::guitar:` | `Band.gif`
`:music:` | ![](https://youthweb.net/vendor/smilies/kopfhoehrer.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F3A7.png?v=1.2.4) | `:headphones:` | `kopfhoehrer.gif`
`:band2:` | ![](https://youthweb.net/vendor/smilies/musicband.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F3BB.png?v=1.2.4)![](http://cdn.jsdelivr.net/emojione/assets/png/1F3B8.png?v=1.2.4) | `:violin::guitar:` | `musicband.gif`
`:nervensaege:` | ![](https://youthweb.net/vendor/smilies/nervensaege.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F3BB.png?v=1.2.4) | `:violin:` | `nervensaege.gif`
`:dj:` | ![](https://youthweb.net/vendor/smilies/dj.gif) | :question: | `` | `dj.gif`
`:birthday3:` | ![](https://youthweb.net/vendor/smilies/birthday3.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F388.png?v=1.2.4) | `:balloon:` | `birthday3.gif`
`:schulstreit:` | ![](https://youthweb.net/vendor/smilies/059.gif) | :question: | `` | `059.gif`
`:lesen:` | ![](https://youthweb.net/vendor/smilies/buch.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F4DA.png?v=1.2.4) | `:books:` | `buch.gif`
`:rofl:` | ![](https://youthweb.net/vendor/smilies/rofl.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F606.png?v=1.2.4) | `:laughing:` | `rofl.gif`
`:-)` | ![](https://youthweb.net/vendor/smilies/smile0001.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F60A.png?v=1.2.4) | `:blush:` | `smile0001.gif`
`:super:` | ![](https://youthweb.net/vendor/smilies/489.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F44D.png?v=1.2.4) | `:thumbsup:` | `489.gif`
`:ww:` | ![](https://youthweb.net/vendor/smilies/222.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F44B.png?v=1.2.4) | `:wave:` | `222.gif`
`:blinz:` | ![](https://youthweb.net/vendor/smilies/blinkendes_auge.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F609.png?v=1.2.4) | `:wink:` | `blinkendes_auge.gif`
`:crazy:` | ![](https://youthweb.net/vendor/smilies/paranoid.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F61C.png?v=1.2.4) | `:stuck_out_tongue_winking_eye:` | `paranoid.gif`
`:morgen:` | ![](https://youthweb.net/vendor/smilies/morgen.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F307.png?v=1.2.4) | `:city_sunset:` | `morgen.gif`
`:giveup:` | ![](https://youthweb.net/vendor/smilies/giveup.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F3F3.png?v=1.2.4) | `:flag_white:` | `giveup.gif`
`:kruecken:` | ![](https://youthweb.net/vendor/smilies/bhindi.gif) | :question: | `` | `bhindi.gif`
`:essen:` | ![](https://youthweb.net/vendor/smilies/39[1].gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F374.png?v=1.2.4) | `:fork_and_knife:` | `39[1].gif`
`:fernsehn:` | ![](https://youthweb.net/vendor/smilies/fernsehen.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F6CB.png?v=1.2.4)![](http://cdn.jsdelivr.net/emojione/assets/png/1F4FA.png?v=1.2.4) | `:couch::tv: ` | `fernsehen.gif`
`:duschen:` | ![](https://youthweb.net/vendor/smilies/00001783.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F6BF.png?v=1.2.4) | `:shower:` | `00001783.gif`
`:abwasch:` | ![](https://youthweb.net/vendor/smilies/abwasch.gif) | :question: | `` | `abwasch.gif`
`:arbeiten:` | ![](https://youthweb.net/vendor/smilies/00001777.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F528.png?v=1.2.4) | `:hammer:` | `00001777.gif`
`:toilette:` | ![](https://youthweb.net/vendor/smilies/00001798.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F6BD.png?v=1.2.4) | `:toilet:` | `00001798.gif`
`:sdu8:` | ![](https://youthweb.net/vendor/smilies/coolkaugummi.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F60E.png?v=1.2.4) | `:sunglasses:` | `coolkaugummi.gif`
`:arab:` | ![](https://youthweb.net/vendor/smilies/arab.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F473.png?v=1.2.4) | `:man_with_turban:` | `arab.gif`
`:mcdonalds:` | ![](https://youthweb.net/vendor/smilies/mcdonald.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F354.png?v=1.2.4)![](http://cdn.jsdelivr.net/emojione/assets/png/1F35F.png?v=1.2.4) | `:hamburger::fries:` | `mcdonald.gif`
`:boxen:` | ![](https://youthweb.net/vendor/smilies/boxxen.gif) | !()[http://cdn.jsdelivr.net/emojione/assets/png/1F44A.png?v=1.2.4] | `:punch:` | `boxxen.gif`
`:verrückt:` | ![](https://youthweb.net/vendor/smilies/verrueckt.gif) | !()[http://cdn.jsdelivr.net/emojione/assets/png/1F44A.png?v=1.2.4] | `:punch:` | `verrueckt.gif`
`:urlaub:` | ![](https://youthweb.net/vendor/smilies/strand.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F3C4.png?v=1.2.4) | `:surfer:` | `strand.gif`
`:victory:` | ![](https://youthweb.net/vendor/smilies/b025.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/270C.png?v=1.2.4) | `:v:` | `b025.gif`
`:liebesbrief:` | ![](https://youthweb.net/vendor/smilies/liebesbrief.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F48C.png?v=1.2.4) | `:love_letter:` | `liebesbrief.gif`
`:weinen:` | ![](https://youthweb.net/vendor/smilies/weinen.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F62D.png?v=1.2.4) | `:sob:` | `weinen.gif`
`:gucken:` | ![](https://youthweb.net/vendor/smilies/00000952[1].gif) | :question: | `` | `00000952[1].gif`
`:pcprob:` | ![](https://youthweb.net/vendor/smilies/PcProb.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F4BB.png?v=1.2.4)![](http://cdn.jsdelivr.net/emojione/assets/png/1F620.png?v=1.2.4)![](http://cdn.jsdelivr.net/emojione/assets/png/1F44A.png?v=1.2.4) | `:computer::angry::punch:` | `PcProb.gif`
`:waschen2:` | ![](https://youthweb.net/vendor/smilies/00001797[1].gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F455.png?v=1.2.4)![](http://cdn.jsdelivr.net/emojione/assets/png/1F6BF.png?v=1.2.4) | `:shirt::shower:` | `00001797[1].gif`
`:koch:` | ![](https://youthweb.net/vendor/smilies/Koch.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F373.png?v=1.2.4) | `:egg:` | `Koch.gif`
`:baden:` | ![](https://youthweb.net/vendor/smilies/00001779[1].gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F6C0.png?v=1.2.4) | `:bath:` | `00001779[1].gif`
`:troesten:` | ![](https://youthweb.net/vendor/smilies/troesten.gif) | :question: | `` | `troesten.gif`
`:bügeln:` | ![](https://youthweb.net/vendor/smilies/buegeln.gif) | :question: | `` | `buegeln.gif`
`:respekt:` | ![](https://youthweb.net/vendor/smilies/288.gif) | :question: | `` | `288.gif`
`:naund:` | ![](https://youthweb.net/vendor/smilies/00000673.gif) | :question: | `` | `00000673.gif`
`:doof:` | ![](https://youthweb.net/vendor/smilies/doof.gif) | :question: | `` | `doof.gif`
`:ethe:` | ![](https://youthweb.net/vendor/smilies/blumen.gif) | :question: | `` | `blumen.gif`
`:pascholti:` | ![](https://youthweb.net/vendor/smilies/paschol.png) | :question: | `` | `paschol.png`
`:love1:` | ![](https://youthweb.net/vendor/smilies/Love1.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F491.png?v=1.2.4) | `:couple_with_heart:` | `Love1.gif`
`:boxen2:` | ![](https://youthweb.net/vendor/smilies/box.gif) | :question: | `` | `box.gif`
`:aldi:` | ![](https://youthweb.net/vendor/smilies/aldi.gif) | :question: | `` | `aldi.gif`
`:mama:` | ![](https://youthweb.net/vendor/smilies/mama.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F469.png?v=1.2.4) | `:woman:` | `mama.gif`
`:bye:` | ![](https://youthweb.net/vendor/smilies/fol.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F44B.png?v=1.2.4) | `:wave:` | `fol.gif`
`:birthday2:` | ![](https://youthweb.net/vendor/smilies/birthday2.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F38A.png?v=1.2.4) | `:confetti_ball:` | `birthday2.gif`
`:eingebildet:` | ![](https://youthweb.net/vendor/smilies/eingebildet.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F633.png?v=1.2.4) | `:flushed:` | `eingebildet.gif`
`:bipa:` | ![](https://youthweb.net/vendor/smilies/spassbremse.gif) | :question: | `` | `spassbremse.gif`
`:gewalt:` | ![](https://youthweb.net/vendor/smilies/Gewalt.gif) | :question: | `` | `Gewalt.gif`
`:kopfschlag:` | ![](https://youthweb.net/vendor/smilies/Kopfschlag.gif) | :question: | `` | `Kopfschlag.gif`
`:look:` | ![](https://youthweb.net/vendor/smilies/atanz2.gif) | :question: | `` | `atanz2.gif`
`:noterror:` | ![](https://youthweb.net/vendor/smilies/noterror.gif) | :question: | `` | `noterror.gif`
`:schleimer:` | ![](https://youthweb.net/vendor/smilies/schleimer.gif) | :question: | `` | `schleimer.gif`
`:gassi:` | ![](https://youthweb.net/vendor/smilies/smilie_hund1.gif) | :question: | `` | `smilie_hund1.gif`
`:heck:` | ![](https://youthweb.net/vendor/smilies/heck.gif) | :question: | `` | `heck.gif`
`:baseball:` | ![](https://youthweb.net/vendor/smilies/aufsmaul.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/26BE.png?v=1.2.4) | `:baseball:` | `aufsmaul.gif`
`:heuldoch:` | ![](https://youthweb.net/vendor/smilies/heuldoch.gif) | :question: | `` | `heuldoch.gif`
`:gutenacht:` | ![](https://youthweb.net/vendor/smilies/Gute%20nacht.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F303.png?v=1.2.4) | `:night_with_stars:` | `Gute nacht.gif`
`:weck` | ![](https://youthweb.net/vendor/smilies/62.gif) | :question: | `` | `62.gif`
`:bussi:` | ![](https://youthweb.net/vendor/smilies/bussi.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F48F.png?v=1.2.4) | `:couplekiss:` | `bussi.gif`
`:sani:` | ![](https://youthweb.net/vendor/smilies/477.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F691.png?v=1.2.4) | `:ambulance:` | `477.gif`
`:worship:` | ![](https://youthweb.net/vendor/smilies/a030.gif) | :question: | `` | `a030.gif`
`:regin:` | ![](https://youthweb.net/vendor/smilies/a035.gif) | :question: | `` | `a035.gif`
`:campen:` | ![](https://youthweb.net/vendor/smilies/haus56.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/26FA.png?v=1.2.4) | `:tent:` | `haus56.gif`
`:inlove:` | ![](https://youthweb.net/vendor/smilies/inlove.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F46B.png?v=1.2.4) | `:couple:` | `inlove.gif`
`:rockon:` | ![](https://youthweb.net/vendor/smilies/rockon.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F3B8.png?v=1.2.4) | `:guitar:` | `rockon.gif`
`:reiten:` | ![](https://youthweb.net/vendor/smilies/Reiten.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F3C7.png?v=1.2.4) | `:horse_racing:` | `Reiten.gif`
`:kotz:` | ![](https://youthweb.net/vendor/smilies/kotzen.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F637.png?v=1.2.4) | `:mask:` | `kotzen.gif`
`:pfeifen:` | ![](https://youthweb.net/vendor/smilies/a050.gif) | :question: | `` | `a050.gif`
`:feierabend:` | ![](https://youthweb.net/vendor/smilies/feierabend.gif) | :question: | `` | `feierabend.gif`
`:danke:` | ![](https://youthweb.net/vendor/smilies/Danke.gif) | :question: | `` | `Danke.gif`
`:dagegen:` | ![](https://youthweb.net/vendor/smilies/dagegen.gif) | :question: | `` | `dagegen.gif`
`:frauenpower:` | ![](https://youthweb.net/vendor/smilies/frauen_power.gif) | :question: | `` | `frauen_power.gif`
`:bitte:` | ![](https://youthweb.net/vendor/smilies/bbitte.gif) | :question: | `` | `bbitte.gif`
`:gibtnix:` | ![](https://youthweb.net/vendor/smilies/gibtnix.gif) | :question: | `` | `gibtnix.gif`
`:wiejetzt:` | ![](https://youthweb.net/vendor/smilies/haewiejetzt.gif) | :question: | `` | `haewiejetzt.gif`
`:hilfe:` | ![](https://youthweb.net/vendor/smilies/iloveme.gif) | :question: | `` | `iloveme.gif`
`:partyon:` | ![](https://youthweb.net/vendor/smilies/partyon+.gif) | :question: | `` | `partyon+.gif`
`:wolke7:` | ![](https://youthweb.net/vendor/smilies/love5.gif) | :question: | `` | `love5.gif`
`:stecher:` | ![](https://youthweb.net/vendor/smilies/stecher.gif) | :question: | `` | `stecher.gif`
`:bart:` | ![](https://youthweb.net/vendor/smilies/disguise.gif) | :question: | `` | `disguise.gif`
`:rofll:` | ![](https://youthweb.net/vendor/smilies/rofl1.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F616.png?v=1.2.4) | `:confounded:` | `rofl1.gif`
`:trainieren:` | ![](https://youthweb.net/vendor/smilies/weight_lift.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F4AA.png?v=1.2.4) | `:muscle:` | `weight_lift.gif`
`:sboard:` | ![](https://youthweb.net/vendor/smilies/snowboard.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F3C2.png?v=1.2.4) | `:snowboarder:` | `snowboard.gif`
`:schleimer2:` | ![](https://youthweb.net/vendor/smilies/nerd.gif) | :question: | `` | `nerd.gif`
`:boxer:` | ![](https://youthweb.net/vendor/smilies/boxed3_h4h.gif) | :question: | `` | `boxed3_h4h.gif`
`:ala:` | ![](https://youthweb.net/vendor/smilies/ala.gif) | :question: | `` | `ala.gif`
`:bike:` | ![](https://youthweb.net/vendor/smilies/biker_h4h.gif) | :question: | `` | `biker_h4h.gif`
`:lecker:` | ![](https://youthweb.net/vendor/smilies/licklips.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F60B.png?v=1.2.4) | `:yum:` | `licklips.gif`
`:schlafen:` | ![](https://youthweb.net/vendor/smilies/456.gif) | :question: | `` | `456.gif`
`:rappen:` | ![](https://youthweb.net/vendor/smilies/rappen.gif) | :question: | `` | `rappen.gif`
`:ohnmacht:` | ![](https://youthweb.net/vendor/smilies/Ohnmacht1.gif) | :question: | `` | `Ohnmacht1.gif`
`:wersucht:` | ![](https://youthweb.net/vendor/smilies/wrsucht.gif) | :question: | `` | `wrsucht.gif`
`:insel:` | ![](https://youthweb.net/vendor/smilies/Insel.gif) | :question: | `` | `Insel.gif`
`:lügen:` | ![](https://youthweb.net/vendor/smilies/pinoccio.gif) | :question: | `` | `pinoccio.gif`
`:freak:` | ![](https://youthweb.net/vendor/smilies/smiley-channel.de_schilder173.gif) | :question: | `` | `smiley-channel.de_schilder173.gif`
`:schwein:` | ![](https://youthweb.net/vendor/smilies/smiley-channel.de_schilder195.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F437.png?v=1.2.4) | `:pig:` | `smiley-channel.de_schilder195.gif`
`:lol4:` | ![](https://youthweb.net/vendor/smilies/smiley-channel.de_schilder048.gif) | :question: | `` | `smiley-channel.de_schilder048.gif`
`:admin:` | ![](https://youthweb.net/vendor/smilies/admins.gif) | :question: | `` | `admins.gif`
`:firefox:` | ![](https://youthweb.net/vendor/smilies/270.gif) | :question: | `` | `270.gif`
`:school:` | ![](https://youthweb.net/vendor/smilies/012.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F3EB.png?v=1.2.4) | `:school:` | `012.gif`
`:charmant:` | ![](https://youthweb.net/vendor/smilies/286.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F3A9.png?v=1.2.4) | `:tophat:` | `286.gif`
`:ausflippen:` | ![](https://youthweb.net/vendor/smilies/522.gif) | :question: | `` | `522.gif`
`:ww2:` | ![](https://youthweb.net/vendor/smilies/221.gif) | :question: | `` | `221.gif`
`:bigeyes:` | ![](https://youthweb.net/vendor/smilies/267.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F440.png?v=1.2.4) | `:eyes:` | `267.gif`
`:kaputtlachen:` | ![](https://youthweb.net/vendor/smilies/281.gif) | :question: | `` | `281.gif`
`:unschuldig:` | ![](https://youthweb.net/vendor/smilies/unschuldig.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F607.png?v=1.2.4) | `:innocent:` | `unschuldig.gif`
`:kirche:` | ![](https://youthweb.net/vendor/smilies/kirche.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/26EA.png?v=1.2.4) | `:church:` | `kirche.gif`
`:frauenklatsch:` | ![](https://youthweb.net/vendor/smilies/weiberplausch.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F4AC.png?v=1.2.4) | `:speech_balloon:` | `weiberplausch.gif`
`:krieger:` | ![](https://youthweb.net/vendor/smilies/379.gif) | :question: | `` | `379.gif`
`:essen2:` | ![](https://youthweb.net/vendor/smilies/essen.gif) | :question: | `` | `essen.gif`
`:boese:` | ![](https://youthweb.net/vendor/smilies/boese.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F620.png?v=1.2.4) | `:angry:` | `boese.gif`
`:verneigen:` | ![](https://youthweb.net/vendor/smilies/verneigen.gif) | :question: | `` | `verneigen.gif`
`;-)` | ![](https://youthweb.net/vendor/smilies/winking.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F609.png?v=1.2.4) | `:wink:` | `winking.gif`
`:ja:` | ![](https://youthweb.net/vendor/smilies/ja.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F60A.png?v=1.2.4)![](http://cdn.jsdelivr.net/emojione/assets/png/1F44D.png?v=1.2.4) | `:blush::thumbsup:` | `ja.gif`
`:-p` | ![](https://youthweb.net/vendor/smilies/zunge.gif) | :question: | `` | `zunge.gif`
`:-(` | ![](https://youthweb.net/vendor/smilies/mad01.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F620.png?v=1.2.4) | `:angry:` | `mad01.gif`
`:nein:` | ![](https://youthweb.net/vendor/smilies/nein.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F61F.png?v=1.2.4)![](http://cdn.jsdelivr.net/emojione/assets/png/1F44E.png?v=1.2.4) | `:worried::thumbsdown:` | `nein.gif`
`:uncool:` | ![](https://youthweb.net/vendor/smilies/uncool.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F44E.png?v=1.2.4) | `:thumbsdown:` | `uncool.gif`
`:klatschen:` | ![](https://youthweb.net/vendor/smilies/klatschen.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F44F.png?v=1.2.4) | `:clap:` | `klatschen.gif`
`:handy:` | ![](https://youthweb.net/vendor/smilies/handy.gif) | :question: | `` | `handy.gif`
`:muede:` | ![](https://youthweb.net/vendor/smilies/gaehnen.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F62A.png?v=1.2.4) | `:sleepy:` | `gaehnen.gif`
`:keineahnung:` | ![](https://youthweb.net/vendor/smilies/keineahnung.gif) | :question: | `` | `keineahnung.gif`
`:rudolf:` | ![](https://youthweb.net/vendor/smilies/rudolf.gif) | :question: | `` | `rudolf.gif`
`:kalt:` | ![](https://youthweb.net/vendor/smilies/cold.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F630.png?v=1.2.4) | `:cold_sweat:` | `cold.gif`
`:wman:` | ![](https://youthweb.net/vendor/smilies/weihnachtsmann.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F385.png?v=1.2.4) | `:santa:` | `weihnachtsmann.gif`
`:zitter:` | ![](https://youthweb.net/vendor/smilies/xpb_zitter.gif) | :question: | `` | `xpb_zitter.gif`
`:wman2:` | ![](https://youthweb.net/vendor/smilies/woswmann950.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F385.png?v=1.2.4) | `:santa:` | `woswmann950.gif`
`:wman3:` | ![](https://youthweb.net/vendor/smilies/woswmann1550.gif) | :question: | `` | `woswmann1550.gif`
`:hochzeit:` | ![](https://youthweb.net/vendor/smilies/hochzeit.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F492.png?v=1.2.4) | `:wedding:` | `hochzeit.gif`
`:oops:` | ![](https://youthweb.net/vendor/smilies/oops.gif) | :question: | `` | `oops.gif`
`:kaputthauen:` | ![](https://youthweb.net/vendor/smilies/kaputthauen.gif) | :question: | `` | `kaputthauen.gif`
`:baden3:` | ![](https://youthweb.net/vendor/smilies/baden3.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F6C1.png?v=1.2.4) | `:bathtub:` | `baden3.gif`
`:lenak:` | ![](https://youthweb.net/vendor/smilies/484.gif) | :question: | `` | `484.gif`
`:jeff:` | ![](https://youthweb.net/vendor/smilies/Jeff.gif) | :question: | `` | `Jeff.gif`
`:knuddell:` | ![](https://youthweb.net/vendor/smilies/knuddel.gif) | :question: | `` | `knuddel.gif`
`:ruhe:` | ![](https://youthweb.net/vendor/smilies/ruhe.gif) | :question: | `` | `ruhe.gif`
`:cool:` | ![](https://youthweb.net/vendor/smilies/cool.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F60E.png?v=1.2.4) | `:sunglasses:` | `cool.gif`
`:manweisetnich:` | ![](https://youthweb.net/vendor/smilies/man_weiset.png) | :question: | `` | `man_weiset.png`
`:(` | ![](https://youthweb.net/vendor/smilies/frown.gif) | :question: | Fast gleich mit dem Smiley ":-)" - Kann man entfernen! | `frown.gif`
`:knuddel2:` | ![](https://youthweb.net/vendor/smilies/liebe_061.gif) | :question: | `` | `liebe_061.gif`
`:denken:` | ![](https://youthweb.net/vendor/smilies/verwirrte_026.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F614.png?v=1.2.4) | `:pensive:` | `verwirrte_026.gif`
`:denken2:` | ![](https://youthweb.net/vendor/smilies/Denken2.gif) | :question: | `` | `Denken2.gif`
`:denken3:` | ![](https://youthweb.net/vendor/smilies/idee.gif) | :question: | `` | `idee.gif`
`:knuddel3:` | ![](https://youthweb.net/vendor/smilies/liebe_028.gif) | :question: | `` | `liebe_028.gif`
`:romantik:` | ![](https://youthweb.net/vendor/smilies/romantik.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F339.png?v=1.2.4) | `:rose:` | `romantik.gif`
`:foto:` | ![](https://youthweb.net/vendor/smilies/fotosmilie.gif) | :question: | `` | `fotosmilie.gif`
`:sauer2:` | ![](https://youthweb.net/vendor/smilies/sauer.gif) | :question: | `` | `sauer.gif`
`:krankes:` | ![](https://youthweb.net/vendor/smilies/Krankes.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F48A.png?v=1.2.4) | `:pill:` | `Krankes.gif`
`:doof1:` | ![](https://youthweb.net/vendor/smilies/bin_ich_doof.gif) | :question: | `` | `bin_ich_doof.gif`
`:car:` | ![](https://youthweb.net/vendor/smilies/car.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F697.png?v=1.2.4) | `:red_car:` | `car.gif`
`:wayne:` | ![](https://youthweb.net/vendor/smilies/wayne_interessierts.gif) | :question: | `` | `wayne_interessierts.gif`
`:snowboard:` | ![](https://youthweb.net/vendor/smilies/snowboardler.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F3C2.png?v=1.2.4) | `:snowboarder:` | `snowboardler.gif`
`:sagnix:` | ![](https://youthweb.net/vendor/smilies/ich_sag_nix.gif) | :question: | `` | `ich_sag_nix.gif`
`:regin2:` | ![](https://youthweb.net/vendor/smilies/hauen.gif) | :question: | `` | `hauen.gif`
`:kuuhl:` | ![](https://youthweb.net/vendor/smilies/kuuuhl.png) | :question: | `` | `kuuuhl.png`
`:saugen:` | ![](https://youthweb.net/vendor/smilies/staubsauger!.gif) | :question: | `` | `staubsauger!.gif`
`:para:` | ![](https://youthweb.net/vendor/smilies/kreis.gif) | :question: | `` | `kreis.gif`
`:blach:` | ![](https://youthweb.net/vendor/smilies/blach.gif) | :question: | `` | `blach.gif`
`:rofllll:` | ![](https://youthweb.net/vendor/smilies/smilie_happy_251.gif) | :question: | `` | `smilie_happy_251.gif`
`:spam:` | ![](https://youthweb.net/vendor/smilies/forum.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F38F.png?v=1.2.4) | `:flags:` | `forum.gif`
`:ohnemich:` | ![](https://youthweb.net/vendor/smilies/bpb_ohnemi.gif) | :question: | `` | `bpb_ohnemi.gif`
`:osterkuss:` | ![](https://youthweb.net/vendor/smilies/o_78-001.gif) | :question: | `` | `o_78-001.gif`
`:eiermaler:` | ![](https://youthweb.net/vendor/smilies/ostern_71.gif) | :question: | `` | `ostern_71.gif`
`:hase:` | ![](https://youthweb.net/vendor/smilies/HAAAAAAAAAAAASE.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F430.png?v=1.2.4) | `:rabbit:` | `HAAAAAAAAAAAASE.gif`
`:hase1:` | ![](https://youthweb.net/vendor/smilies/hase3.gif) | :question: | `` | `hase3.gif`
`:hase2:` | ![](https://youthweb.net/vendor/smilies/HASE4.gif) | :question: | `` | `HASE4.gif`
`:hase3:` | ![](https://youthweb.net/vendor/smilies/has2.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F407.png?v=1.2.4) | `:rabbit2:` | `has2.gif`
`:irre:` | ![](https://youthweb.net/vendor/smilies/bunny_4.gif) | :question: | `` | `bunny_4.gif`
`:herz:` | ![](https://youthweb.net/vendor/smilies/herzchen.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/2764.png?v=1.2.4) | `:heart:` | `herzchen.gif`
`:achja:` | ![](https://youthweb.net/vendor/smilies/achja.gif) | :question: | `` | `achja.gif`
`:morgähn:` | ![](https://youthweb.net/vendor/smilies/morgaehn.gif) | :question: | `` | `morgaehn.gif`
`:amen:` | ![](https://youthweb.net/vendor/smilies/amen.gif) | :question: | `` | `amen.gif`
`:aufwachen:` | ![](https://youthweb.net/vendor/smilies/aufwachen.gif) | :question: | `` | `aufwachen.gif`
`:vio:` | ![](https://youthweb.net/vendor/smilies/phone02.gif) | :question: | `` | `phone02.gif`
`:admins:` | ![](https://youthweb.net/vendor/smilies/admin.jpg) | :question: | `` | `admin.jpg`
`:romeo:` | ![](https://youthweb.net/vendor/smilies/Romeo.gif) | :question: | `` | `Romeo.gif`
`:shy:` | ![](https://youthweb.net/vendor/smilies/jo.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F60A.png?v=1.2.4) | `:blush:` | `jo.gif`
`:tbaum:` | ![](https://youthweb.net/vendor/smilies/1xmas500.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F384.png?v=1.2.4) | `:christmas_tree:` | `1xmas500.gif`
`:kopf:` | ![](https://youthweb.net/vendor/smilies/kopf.gif) | :question: | `` | `kopf.gif`
`:closed:` | ![](https://youthweb.net/vendor/smilies/cl.gif) | :question: | `` | `cl.gif`
`:deutschland:` | ![](https://youthweb.net/vendor/smilies/deutsc.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F1E9-1F1EA.png?v=1.2.4) | `:de:` | `deutsc.gif`
`:laugh:` | ![](https://youthweb.net/vendor/smilies/deutschland-lacht-ueber-holland.gif) | :question: | `` | `deutschland-lacht-ueber-holland.gif`
`:final:` | ![](https://youthweb.net/vendor/smilies/final04.gif) | :question: | `` | `final04.gif`
`:wmleo:` | ![](https://youthweb.net/vendor/smilies/wmgoleo.gif) | :question: | `` | `wmgoleo.gif`
`:brasil:` | ![](https://youthweb.net/vendor/smilies/brasil.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F1E7-1F1F7.png?v=1.2.4) | `:br:` | `brasil.gif`
`:fussball:` | ![](https://youthweb.net/vendor/smilies/fussball-smilie.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/26BD.png?v=1.2.4) | `:soccer:` | `fussball-smilie.gif`
`:kopfball:` | ![](https://youthweb.net/vendor/smilies/soccer_2.gif) | :question: | `` | `soccer_2.gif`
`:rot:` | ![](https://youthweb.net/vendor/smilies/platzverweis.gif) | :question: | `` | `platzverweis.gif`
`:leeep:` | ![](https://youthweb.net/vendor/smilies/leep.gif) | :question: | `` | `leep.gif`
`:-[` | ![](https://youthweb.net/vendor/smilies/49_2.gif) | :question: | `` | `49_2.gif`
`:togo:` | ![](https://youthweb.net/vendor/smilies/wm2006togo1.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F1F9-1F1EC.png?v=1.2.4) | `:tg:` | `wm2006togo1.gif`
`:japan:` | ![](https://youthweb.net/vendor/smilies/wm2006japan0.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F1EF-1F1F5.png?v=1.2.4) | `:jp:` | `wm2006japan0.gif`
`:roli:` | ![](https://youthweb.net/vendor/smilies/boese2.gif) | :question: | `` | `boese2.gif`
`:portugal:` | ![](https://youthweb.net/vendor/smilies/portugal.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F1F5-1F1F9.png?v=1.2.4) | `:pt:` | `portugal.gif`
`:meld:` | ![](https://youthweb.net/vendor/smilies/meld.gif) | :question: | `` | `meld.gif`
`:moin:` | ![](https://youthweb.net/vendor/smilies/Moin.gif) | :question: | `` | `Moin.gif`
`:hm:` | ![](https://youthweb.net/vendor/smilies/hm.gif) | :question: | `` | `hm.gif`
`:blume:` | ![](https://youthweb.net/vendor/smilies/6874.gif) | :question: | `` | `6874.gif`
`:inlove2:` | ![](https://youthweb.net/vendor/smilies/huglove.gif) | :question: | `` | `huglove.gif`
`:tess:` | ![](https://youthweb.net/vendor/smilies/wm2006tschechien1.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F1E8-1F1FF.png?v=1.2.4) | `:cz:` | `wm2006tschechien1.gif`
`:spanien:` | ![](https://youthweb.net/vendor/smilies/wm2006spanien1.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F1EA-1F1F8.png?v=1.2.4) | `:es:` | `wm2006spanien1.gif`
`:angola:` | ![](https://youthweb.net/vendor/smilies/wm2006angola2.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F1E6-1F1F4.png?v=1.2.4) | `:ao:` | `wm2006angola2.gif`
`:Italien:` | ![](https://youthweb.net/vendor/smilies/wm2006italien1.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F1EE-1F1F9.png?v=1.2.4) | `:it:` | `wm2006italien1.gif`
`:ich:` | ![](https://youthweb.net/vendor/smilies/iiich.gif) | :question: | `` | `iiich.gif`
`:shok:` | ![](https://youthweb.net/vendor/smilies/1shok.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F62F.png?v=1.2.4) | `:hushed:` | `1shok.gif`
`:luna:` | ![](https://youthweb.net/vendor/smilies/animal-smiley-031.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F431.png?v=1.2.4) | `:cat:` | `animal-smiley-031.gif`
`:holland:` | ![](https://youthweb.net/vendor/smilies/wm2006niederlande1.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F1F3-1F1F1.png?v=1.2.4) | `:nl:` | `wm2006niederlande1.gif`
`:gelb:` | ![](https://youthweb.net/vendor/smilies/gelb.gif) | :question: | `` | `gelb.gif`
`:weight:` | ![](https://youthweb.net/vendor/smilies/weight_lift2.gif) | :question: | `` | `weight_lift2.gif`
`:england:` | ![](https://youthweb.net/vendor/smilies/wm2006england1.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F1EC-1F1E7.png?v=1.2.4) | `:gb:` | `wm2006england1.gif`
`:ghana:` | ![](https://youthweb.net/vendor/smilies/wm2006ghana1.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F1EC-1F1ED.png?v=1.2.4) | `:gh:` | `wm2006ghana1.gif`
`:frankreich:` | ![](https://youthweb.net/vendor/smilies/wm2006frankreich1.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F1EB-1F1F7.png?v=1.2.4) | `:fr:` | `wm2006frankreich1.gif`
`:spam1:` | ![](https://youthweb.net/vendor/smilies/spamfrust.gif) | :question: | `` | `spamfrust.gif`
`:ukraine:` | ![](https://youthweb.net/vendor/smilies/wm2006ukraine1.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F1FA-1F1E6.png?v=1.2.4) | `:ua:` | `wm2006ukraine1.gif`
`:2cool:` | ![](https://youthweb.net/vendor/smilies/cool3.gif) | :question: | `` | `cool3.gif`
`:rulez:` | ![](https://youthweb.net/vendor/smilies/smiley-channel.de_lesen021.gif) | :question: | `` | `smiley-channel.de_lesen021.gif`
`:israel:` | ![](https://youthweb.net/vendor/smilies/tikva.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F1EE-1F1F1.png?v=1.2.4) | `:il:` | `tikva.gif`
`:poker:` | ![](https://youthweb.net/vendor/smilies/poker.gif) | :question: | `` | `poker.gif`
`:spth:` | ![](https://youthweb.net/vendor/smilies/spth.png) | :question: | `` | `spth.png`
`:JoLo:` | ![](https://youthweb.net/vendor/smilies/MrSax02.gif) | :question: | `` | `MrSax02.gif`
`:on:` | ![](https://youthweb.net/vendor/smilies/On.gif) | :question: | `` | `On.gif`
`:mb:` | ![](https://youthweb.net/vendor/smilies/eine_wie_keine.png) | :question: | `` | `eine_wie_keine.png`
`:boese1:` | ![](https://youthweb.net/vendor/smilies/boese.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/261D.png?v=1.2.4) | `:point_up:` | `boese.gif`
`:boese2:` | ![](https://youthweb.net/vendor/smilies/boese1.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F446.png?v=1.2.4) | `:point_up_2:` | `boese1.gif`
`:friend:` | ![](https://youthweb.net/vendor/smilies/friend.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F46C.png?v=1.2.4) | `:two_men_holding_hands:` | `friend.gif`
`:muede1:` | ![](https://youthweb.net/vendor/smilies/muede.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F629.png?v=1.2.4) | `:weary:` | `muede.gif`
`:steffi:` | ![](https://youthweb.net/vendor/smilies/traurig.gif) | :question: | `` | `traurig.gif`
`:super1:` | ![](https://youthweb.net/vendor/smilies/froh.gif) | :question: | `` | `froh.gif`
`:ody:` | ![](https://youthweb.net/vendor/smilies/gg!!!!!!!!!!!!!!!!!!!.gif) | :question: | `` | `gg!!!!!!!!!!!!!!!!!!!.gif`
`:halt:` | ![](https://youthweb.net/vendor/smilies/halt_stop.gif) | :question: | `` | `halt_stop.gif`
`:lachen1:` | ![](https://youthweb.net/vendor/smilies/hand_vorm_mund.gif) | :question: | `` | `hand_vorm_mund.gif`
`:LP:` | ![](https://youthweb.net/vendor/smilies/ironie.gif) | :question: | `` | `ironie.gif`
`:superman:` | ![](https://youthweb.net/vendor/smilies/sman.gif) | :question: | `` | `sman.gif`
`:skater:` | ![](https://youthweb.net/vendor/smilies/skateboard.gif) | :question: | `` | `skateboard.gif`
`:gelb1:` | ![](https://youthweb.net/vendor/smilies/sport.gif) | :question: | `` | `sport.gif`
`:abcheck:` | ![](https://youthweb.net/vendor/smilies/blinkendes_auge_mit_herzchen.gif) | :question: | `` | `blinkendes_auge_mit_herzchen.gif`
`:dl:` | ![](https://youthweb.net/vendor/smilies/diane.gif) | :question: | `` | `diane.gif`
`:RW:` | ![](https://youthweb.net/vendor/smilies/rita.gif) | :question: | `` | `rita.gif`
`:yw:` | ![](https://youthweb.net/vendor/smilies/fehler.gif) | :question: | `` | `fehler.gif`
`:schild:` | ![](https://youthweb.net/vendor/smilies/schild.gif) | :question: | `` | `schild.gif`
`:firefox1:` | ![](https://youthweb.net/vendor/smilies/mozilla.gif) | :question: | `` | `mozilla.gif`
`:2lee:` | ![](https://youthweb.net/vendor/smilies/lee.gif) | :question: | `` | `lee.gif`
`:pizzaess:` | ![](https://youthweb.net/vendor/smilies/pizzaess.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F355.png?v=1.2.4) | `:pizza:` | `pizzaess.gif`
`:emoo:` | ![](https://youthweb.net/vendor/smilies/emo.gif) | :question: | `` | `emo.gif`
`:hehe:` | ![](https://youthweb.net/vendor/smilies/hehe.gif) | :question: | `` | `hehe.gif`
`:ljena:` | ![](https://youthweb.net/vendor/smilies/ani_sonstige137.gif) | :question: | `` | `ani_sonstige137.gif`
`:neugierig:` | ![](https://youthweb.net/vendor/smilies/Neugierig.gif) | :question: | `` | `Neugierig.gif`
`:F5:` | ![](https://youthweb.net/vendor/smilies/ani_schilder55.gif) | :question: | `` | `ani_schilder55.gif`
`:lachen:` | ![](https://youthweb.net/vendor/smilies/ani_lachende2.gif) | :question: | `` | `ani_lachende2.gif`
`:saugen1:` | ![](https://youthweb.net/vendor/smilies/Saugen1.gif) | :question: | `` | `Saugen1.gif`
`:angi:` | ![](https://youthweb.net/vendor/smilies/f025.gif) | :question: | `` | `f025.gif`
`:hau:` | ![](https://youthweb.net/vendor/smilies/hau.gif) | :question: | `` | `hau.gif`
`:hust:` | ![](https://youthweb.net/vendor/smilies/husten.gif) | :question: | `` | `husten.gif`
`:lolli:` | ![](https://youthweb.net/vendor/smilies/lolli.gif) | :question: | `` | `lolli.gif`
`:ranger:` | ![](https://youthweb.net/vendor/smilies/ranger.gif) | :question: | `` | `ranger.gif`
`:lena87:` | ![](https://youthweb.net/vendor/smilies/a020.gif) | :question: | `` | `a020.gif`
`:partytime:` | ![](https://youthweb.net/vendor/smilies/sta_schilder140.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F389.png?v=1.2.4) | `:tada:` | `sta_schilder140.gif`
`:graade:` | ![](https://youthweb.net/vendor/smilies/sta_schilder365.gif) | :question: | `` | `sta_schilder365.gif`
`:wishes:` | ![](https://youthweb.net/vendor/smilies/wishes.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F388.png?v=1.2.4) | `:balloon:` | `wishes.gif`
`:russ:` | ![](https://youthweb.net/vendor/smilies/smilies_flaggen056.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F1F7-1F1FA.png?v=1.2.4) | `:ru:` | `smilies_flaggen056.gif`
`:sorry:` | ![](https://youthweb.net/vendor/smilies/sta_schilder116.gif) | :question: | `` | `sta_schilder116.gif`
`:spiegel:` | ![](https://youthweb.net/vendor/smilies/lustich.gif) | :question: | `` | `lustich.gif`
`:wman5:` | ![](https://youthweb.net/vendor/smilies/woswmann1560.gif) | :question: | `` | `woswmann1560.gif`
`:wmanlachen:` | ![](https://youthweb.net/vendor/smilies/woswmann1810.gif) | :question: | `` | `woswmann1810.gif`
`:hannibal:` | ![](https://youthweb.net/vendor/smilies/shv.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F482.png?v=1.2.4) | `:guardsman:` | `shv.gif`
`:sheep:` | ![](https://youthweb.net/vendor/smilies/sheep.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F411.png?v=1.2.4) | `:sheep:` | `sheep.gif`
`:grizzly:` | ![](https://youthweb.net/vendor/smilies/Teddy.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F43B.png?v=1.2.4) | `:bear:` | `Teddy.gif`
`:frauenimforum:` | ![](https://youthweb.net/vendor/smilies/frauen_im_forum.gif) | :question: | `` | `frauen_im_forum.gif`
`:checka:` | ![](https://youthweb.net/vendor/smilies/peace.gif) | :question: | `` | `peace.gif`
`:yeah:` | ![](https://youthweb.net/vendor/smilies/yeeeah.gif) | :question: | `` | `yeeeah.gif`
`:klavier:` | ![](https://youthweb.net/vendor/smilies/klvier.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F3B9.png?v=1.2.4) | `:musical_keyboard:` | `klvier.gif`
`:kante:` | ![](https://youthweb.net/vendor/smilies/bodybuilder.gif) | :question: | `` | `bodybuilder.gif`
`:roflll:` | ![](https://youthweb.net/vendor/smilies/roflll.gif) | :question: | `` | `roflll.gif`
`:ohnmacht1:` | ![](https://youthweb.net/vendor/smilies/ohnmacht.gif) | :question: | `` | `ohnmacht.gif`
`:sylvester:` | ![](https://youthweb.net/vendor/smilies/weihnachten17.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F386.png?v=1.2.4) | `:fireworks:` | `weihnachten17.gif`
`:keks:` | ![](https://youthweb.net/vendor/smilies/keks.gif) | :question: | `` | `keks.gif`
`:radfahrer:` | ![](https://youthweb.net/vendor/smilies/chiller.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F6B4.png?v=1.2.4) | `:bicyclist:` | `chiller.gif`
`:nadia:` | ![](https://youthweb.net/vendor/smilies/nadia.gif) | :question: | `` | `nadia.gif`
`:bball:` | ![](https://youthweb.net/vendor/smilies/baseball.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F3C0.png?v=1.2.4) | `:basketball:` | `baseball.gif`
`:eis:` | ![](https://youthweb.net/vendor/smilies/eis.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F366.png?v=1.2.4) | `:icecream:` | `eis.gif`
`:geige:` | ![](https://youthweb.net/vendor/smilies/gaige.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F3BB.png?v=1.2.4) | `:violin:` | `gaige.gif`
`:qflöte:` | ![](https://youthweb.net/vendor/smilies/querfloete.gif) | :question: | `` | `querfloete.gif`
`:training:` | ![](https://youthweb.net/vendor/smilies/training1.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F4AA.png?v=1.2.4) | `:muscle:` | `training1.gif`
`:chor:` | ![](https://youthweb.net/vendor/smilies/schief_singen.gif) | :question: | `` | `schief_singen.gif`
`:luck:` | ![](https://youthweb.net/vendor/smilies/good_luck.gif) | :question: | `` | `good_luck.gif`
`:otto:` | ![](https://youthweb.net/vendor/smilies/eclipsee_gold_cup.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F3C6.png?v=1.2.4) | `:trophy:` | `eclipsee_gold_cup.gif`
`:diddy:` | ![](https://youthweb.net/vendor/smilies/schlagzeug.gif) | :question: | `` | `schlagzeug.gif`
`:isy:` | ![](https://youthweb.net/vendor/smilies/skuchen.gif) | :question: | `` | `skuchen.gif`
`:alex:` | ![](https://youthweb.net/vendor/smilies/dunce.gif) | :question: | `` | `dunce.gif`
`:shenok:` | ![](https://youthweb.net/vendor/smilies/hund.gif) | :question: | `` | `hund.gif`
`:ade:` | ![](https://youthweb.net/vendor/smilies/ADE_Smily.gif) | :question: | `` | `ADE_Smily.gif`
`:dachschaden:` | ![](https://youthweb.net/vendor/smilies/a085.gif) | :question: | `` | `a085.gif`
`:yves:` | ![](https://youthweb.net/vendor/smilies/smilie_sonst_011.gif) | :question: | `` | `smilie_sonst_011.gif`
`:aly:` | ![](https://youthweb.net/vendor/smilies/c080.gif) | :question: | `` | `c080.gif`
`:laurie:` | ![](https://youthweb.net/vendor/smilies/ups.gif) | :question: | `` | `ups.gif`
`:blackb:` | ![](https://youthweb.net/vendor/smilies/82.gif) | :question: | `` | `82.gif`
`:koko:` | ![](https://youthweb.net/vendor/smilies/c010.gif) | :question: | `` | `c010.gif`
`:bahnhof:` | ![](https://youthweb.net/vendor/smilies/bahnhof.gif) | :question: | `` | `bahnhof.gif`
`:basketball:` | ![](https://youthweb.net/vendor/smilies/basketball.gif) | :question: | `` | `basketball.gif`
`:boxer1:` | ![](https://youthweb.net/vendor/smilies/boxer.gif) | :question: | `` | `boxer.gif`
`:gitarre:` | ![](https://youthweb.net/vendor/smilies/gittare.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F3B8.png?v=1.2.4) | `:guitar:` | `gittare.gif`
`:hand:` | ![](https://youthweb.net/vendor/smilies/haendedruck.gif) | :question: | `` | `haendedruck.gif`
`:sos:` | ![](https://youthweb.net/vendor/smilies/help_sos.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F198.png?v=1.2.4) | `:sos:` | `help_sos.gif`
`:krank:` | ![](https://youthweb.net/vendor/smilies/krank.gif) | :question: | `` | `krank.gif`
`:krank1:` | ![](https://youthweb.net/vendor/smilies/krank1.gif) | :question: | `` | `krank1.gif`
`:lästern:` | ![](https://youthweb.net/vendor/smilies/laestern.gif) | :question: | `` | `laestern.gif`
`:küsschen:` | ![](https://youthweb.net/vendor/smilies/love_350.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F48F.png?v=1.2.4) | `:couplekiss:` | `love_350.gif`
`:willkommen:` | ![](https://youthweb.net/vendor/smilies/Willkommen.gif) | :question: | `` | `Willkommen.gif`
`:ywsuchti:` | ![](https://youthweb.net/vendor/smilies/urlaub_lapi.gif) | :question: | `` | `urlaub_lapi.gif`
`:sun:` | ![](https://youthweb.net/vendor/smilies/sun.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F31E.png?v=1.2.4) | `:sun_with_face:` | `sun.gif`
`:run:` | ![](https://youthweb.net/vendor/smilies/run.gif) | :question: | `` | `run.gif`
`:chris:` | ![](https://youthweb.net/vendor/smilies/smilie_frech_126.gif) | :question: | `` | `smilie_frech_126.gif`
`:gassi1:` | ![](https://youthweb.net/vendor/smilies/smilie_tier_142.gif) | :question: | `` | `smilie_tier_142.gif`
`:olympia:` | ![](https://youthweb.net/vendor/smilies/smilie_sp_257.gif) | :question: | `` | `smilie_sp_257.gif`
`:pico:` | ![](https://youthweb.net/vendor/smilies/pico.gif) | :question: | `` | `pico.gif`
`:pray:` | ![](https://youthweb.net/vendor/smilies/202_animated_person_praying.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F64F.png?v=1.2.4) | `:pray:` | `202_animated_person_praying.gif`
`:mimi:` | ![](https://youthweb.net/vendor/smilies/smilie_frech_129.gif) | :question: | `` | `smilie_frech_129.gif`
`:pecora:` | ![](https://youthweb.net/vendor/smilies/n030.gif) | :question: | `` | `n030.gif`
`:achso:` | ![](https://youthweb.net/vendor/smilies/99.gif) | :question: | `` | `99.gif`
`:elliw:` | ![](https://youthweb.net/vendor/smilies/smilie_winke_003.gif) | :question: | `` | `smilie_winke_003.gif`
`:sunchill:` | ![](https://youthweb.net/vendor/smilies/s030.gif) | :question: | `` | `s030.gif`
`:JoLo1:` | ![](https://youthweb.net/vendor/smilies/saxo.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F3B7.png?v=1.2.4) | `:saxophone:` | `saxo.gif`
`:blümchen:` | ![](https://youthweb.net/vendor/smilies/blumekuss.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F490.png?v=1.2.4) | `:bouquet:` | `blumekuss.gif`
`:grill:` | ![](https://youthweb.net/vendor/smilies/grillen.gif) | :question: | `` | `grillen.gif`
`:rubin:` | ![](https://youthweb.net/vendor/smilies/boast.gif) | :question: | `` | `boast.gif`
`:gamer:` | ![](https://youthweb.net/vendor/smilies/gamer4.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/1F3AE.png?v=1.2.4) | `:video_game:` | `gamer4.gif`
`:manni:` | ![](https://youthweb.net/vendor/smilies/smilie_winke_048.gif) | :question: | `` | `smilie_winke_048.gif`
`:evi:` | ![](https://youthweb.net/vendor/smilies/smilie_girl_068.gif) | :question: | `` | `smilie_girl_068.gif`
`:ordi:` | ![](https://youthweb.net/vendor/smilies/ordi.gif) | :question: | `` | `ordi.gif`
`:bvb:` | ![](https://youthweb.net/vendor/smilies/smilie_bvb.gif) | :question: | `` | `smilie_bvb.gif`
`:shy2:` | ![](https://youthweb.net/vendor/smilies/smilie_girl_066.gif) | :question: | `` | `smilie_girl_066.gif`
`:deutschland2:` | ![](https://youthweb.net/vendor/smilies/WM.gif) | :question: | `` | `WM.gif`
`:uschke:` | ![](https://youthweb.net/vendor/smilies/3434.gif) | :question: | `` | `3434.gif`
`:admin2:` | ![](https://youthweb.net/vendor/smilies/admins2.gif) | :question: | `` | `admins2.gif`
`:gutebesserung:` | ![](https://youthweb.net/vendor/smilies/Gute%20Besserung.gif) | :question: | `` | `Gute Besserung.gif`
`:welcome:` | ![](https://youthweb.net/vendor/smilies/welcome.gif) | :question: | `` | `welcome.gif`
`:hotwheel:` | ![](https://youthweb.net/vendor/smilies/wheelchair.gif) | ![](http://cdn.jsdelivr.net/emojione/assets/png/267F.png?v=1.2.4) | `:wheelchair:` | `wheelchair.gif`
`:mokka:` | ![](https://youthweb.net/vendor/smilies/mokka.gif) | :question: | `` | `mokka.gif`
`:schalke:` | ![](https://youthweb.net/vendor/smilies/s04fahne.gif) | :question: | `` | `s04fahne.gif`
