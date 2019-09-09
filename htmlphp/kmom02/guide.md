# Kursmoment 2

## Float, clear och clear-fix

* `htmlphp/example/float/`

Vårt element går över footern för footern inte vet att det är något där. Löses genom att använda `clear` på footern

* `htmlphp/example/clearfix`

Vårt element hamnar utanför dess föräldrarelement. Löses genom att lägga `overflow: auto` på föräldrarelementet

## Color Picker

* Hexdecimal - `#BF7F3F`
* RGB/RGBA (Red, green, blue, alpha) - `rgba(191, 127, 63, 0.7)`
* HSL/HSLA (Hue, saturation, lightness, alpha) - `hsla(30, 50%, 50%, 0.7)`

## CSS Box Model

https://dbwebb.se/kunskap/skapa-en-webbsida-med-html-css-och-php-steg-2#boxmodel

* Content
* Padding
* Border
* Margin
* Outline

## Can I Use

https://caniuse.com/

* Verktyg för att se vilka webbläsare som stödjer vad
* Chrome, Firefox, Safari och Edge
* Flexbox

## Struktur

* `<main>` och `<article>`
* `overflow-y: scroll;`
* `min-height/max-height`

## Style:a länkar

```
.navbar a {
    color: #ecf0f1;
}
```

https://dbwebb.se/kunskap/skapa-en-webbsida-med-html-css-och-php-steg-2#link

## Style:a navbar för nuvarande sida

* Lägg till lite style

```
<a class="<?= basename($_SERVER['REQUEST_URI']) == "me.php" ? "selected" : ""; ?>" href="me.php">Hem</a>
```

Länken finns i övningen.

## Titel på sidan

`<?= $title ?> `

## Responsiv

`<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=2.0;">`

En webbläsares **viewport** är det området där innehållet kan visas. En fullt renderad sida kan resultera i att användaren behöver scrolla för att se mer. Det är med andra ord inte samma område som dess viewport.

Vi kan se att attributet **content** har egenskaper och värden.

**width=device-width;** talar om att bredden ska vara så bred som den använda enhetens skärm är.

**initial-scale=1.0;** talar om hur sidan ska zoomas när den laddas in.

**maximum-scale=2.0;** talar om hur mycket användaren får zooma.

`@media (max-width: 960px)`