# Kursmoment 1 - Guide

## Grunderna

- HTML
    - Står för *HyperText Markup Language*
    - Standard när man skapar hemsidor
    - Markerar strukturen på en hemsida med hjälp utav HTML-element
    - I kod visas dessa element genom HTML-taggar, ex `<element></element>`
    - Hemsidan visar inte själva taggen utan använder den som hjälp vid rendering av sidan.
- CSS
    - Står för Cascading Style Sheets
    - Beskriver hur sidan ska se ut på skärmen
    - Består huvudsakligen av:
        - Selektorer (Selectors)
        - Deklareringar (Declarations)
        - Egenskaper (Properties)
        - Värden (Values)
    - <Lägg till bild som pekar på vilken varje del är>
    - (https://dbwebb.se/guide/kom-igang-med-html-och-css/grunderna)

## HTML

- Vi inleder med att skapa en enkel sida och dess style
    - Skapa en fil som heter `index.html` (laddas automatiskt av webbläsaren)
    - Vi kommer skapa `.php` filer sen, men just nu räcker det med en `.html`
    - Detta görs enklast via att köra `touch index.html`.
    
Följande är en bra grund på en HTML-sida:

```html
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Stormtrooper Murphy</title>
</head>
<body>

</body>
</html>
```

*`<!doctype html>`* är egentligen ingen HTML-tagg, utan en deklarering eller instruktion till webbläsaren att dokumentet innehåller HTML kod.

*`<html>`* representerar roten av dokumentet och verkar som en behållare för alla andra element som sidan behöver.

*`<html lang=”en”>`* talar om för webbläsaren vilket språk som kommer användas. Innehåller kommer tillslut vara på engelska (en).

*`<head>`* visas inte på sidan utan innehåller övrig information som vilken teckenkodning som ska användas eller titel på sidan (Den som syns uppe i fliken i webbläsaren).

*`<meta charset=”utf-8”>`* talar om för webbläsaren att det är den typen av encoding som ska användas på sidan. Varje tecken vi skriver har en numerisk representation (code unit). Bokstaven H ser till exempel ut såhär: U+0048. Det konverteras sedan till binärkod som datorn klarar av att läsa (character encoding). Då blir H såhär med utf-8: 01001000.

*`<title>`* är ganska självförklarande, det är titeln som ska visas i flikens topp.

*`<body>`* är själva stommen och ska husera allt innehåll som visas.

## CSS

- Lite style skulle inte skada
- Skapa ny mapp, `style` och i den så skapar vi filen `style.css`
    - `mkdir style && touch style/style.css`
    - Här ska all stil för sidan hamna
    - För att använda den behöver vi länka den i vår HTML
        - I vår `<head>` lägger till följande rad:
        - `<link rel="stylesheet" href="style/style.css">`
        - Link-taggen används för att referera till en extern resurs, så som CSS och JavaScript, men även fonter och annat
    - Vi inleder med att lägga lite stil på vår sida:
        - `background-color: #fcc`
        - Ladda om sidan
        - Kanske inte blev det snyggaste, så vi kör en annan färg
        - `background-color: #e74c3c`
        - Det vi beskriver färgen med här kallas hexdecimal kod, som i sin tur förklarar för datorn vilken färg vi vill ha med hjälp utav RGB (Red, Green, Blue). Vi går igenom mer med färger senare.

## Innehåll

- Vi lägger till lite text på sidan
    - Lägg till `<h1>` - `<h6>`
    - Lägg till `<p>`
    - Båda innehåller lite standard stil, som lägger till lite luft under och över.

- Vi ändrar stilen på våra `<h1>`:or och våra paragrafer:
    - Text-align center och färg white på h1
    - Border 1px solid på våra paragrafer

## Header och footer

- Finns flera element som kan hjälpa en att göra en bra sida
    - `<header>`
        - Används för att markera den översta delen på sidan samt
    - `<footer>`
        - Som används längst ner.
    - Vi tar bort våra h1-h6, för att tydligare se vad vi pysslar med

Vår HTML kan se hur såhär

```html
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Stormtrooper Murphy</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header></header>
    <h1>I am Stormtrooper Murphy!</h1>
    <p>This is my website.</p>
    <footer></footer>
</body>
</html>
```

Och vår CSS kan se ut såhär

```css
html {
    background-color: #ffc;
}

body {
    background-color: #ddd;
    width: 1000px;
    margin: 8px auto;
}

header {
    width: 1000px;
    height: 100px;
    background-color: red;
}

footer {
    width: 1000px;
    height: 70px;
    background-color: green;
}
```

## Validering

- Hur vet man då att man skriver rätt kod?
    - Det finns flera verktyg för detta, vi tänker använda
        - Markup Validation Service
        - W3C är en organisation som är med och bestämmer hur webben ska se ut
        - Vi använder https://validator.w3.org/
        - Här kan vi klistra in vår kod och se så att allt är grönt
    - Det finns ett liknande verktyg för CSS:
        - https://jigsaw.w3.org/css-validator
    - För smidigheten skull lägger vi till dem i vår footer, så kan man bara trycka på länken sen när de är publicerade på studentservern
        - `<a href="http://validator.w3.org/check/referer">HTML5</a>`
        - `<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>`
    - Vi kan också lägga till Unicorn, som i sin tur kör fler tester fast på både HTML och CSS.
    - `<a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a>`
