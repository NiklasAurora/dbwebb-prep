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
        - Link-taggen används för att referera till en extern resurs, så som CSS, fonter och favicon
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
    - Text-align center och färg `#ecf0f1` på h1
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

## Header

- Vi lägger till en header på sidan, som innehåller en snygg bild och en catch-phrase
    - `<header></header>`
        - `<img src="#" alt="logo">`
        - `<span class="site-title">Stormtrooper-Murphy</span>`
        - `<span class="site-slogan">Deathstar's finest.</span>`
    - `src` måste finnas i en img-tag då det pekar vart bilden finns
    - `alt` måste också finnas med, ger en alternativ text om bilden inte laddas samt används det för folk med nedsatt syn vid uppläsning av sidans innehåll.
    - `class` är ett sätt att lägga till stil på ett element. Ett annat sätt att göra det är med hjälp utav `id`, men då man sällan lägger en specifik stil så är det bättre att göra generella regler, t.ex. alla våra `<h1>`:or ser ut på ett specifikt sätt.
    
---

- Vi lägger till lite design för att få allt att hänga ihop

```css
.site-header {
    background-color: #fff;
    overflow: auto;
}

.site-header img {
    float: left;
}

.site-title {
    display: block;
    padding-top: 1em;
    padding-left: 50px;
    font-size: 32px;
    overflow: auto;
}

.site-slogan {
    display: block;
    padding-left: 50px;
    font-style: italic;
    overflow: auto;
}
```

```
float: left kopplar bort elementet från det naturliga flödet och positionerar det så långt till vänster det går i sitt omslutande element.

overflow: auto talar om vad som ska hända om ett elements innehåll blir för stort för att få plats. Värdet auto ritar om det omslutande elementet om innehållet blir för stort.

display: block talar om att elementet ska ta upp hela utrymmet det har horisontellt. Kommande element hamnar då på en ny rad.

padding talar om hur mycket utrymme inåt som ska finnas i elementet innan dess innehåll ritas ut.

font-style: italic talar om att texten ska visas som kursiv.
```

- Gå igenom samtliga regler och att en inledande punkt innebär att det är en klass medans en inledande brädgård pekar på ett id

## Favicon

- Vi lägger till en favicon, den lilla ikonen som syns längst upp i webbläsaren.
- Den läggs till på ett liknande sätt som vårt stylesheet
- `<link rel="icon" href="https://sstatic.se/image/theme/leaf_40x40.png">`
- Här lånar jag vårt kära dbwebb-löv som används på diverse sidor kopplade till programmet.
- Ursprungligen så användes filformatet `.ico`, men nu stödjer även de flesta webbläsare vanliga `.png` filer, som vi ser i vårt exempel. Ta gärna inte en stor bild, då det ger onödig laddningstid till sidan.

## Footer

- Det är nog dags att uppdatera vår footer, den är inte riktigt så fin som vi vill ha den.
- Vi börjar med att lägga till en klass på vår footer:
    - `<footer class="site-footer>`
    - Vi lägger till en regel i vår CSS-fil:
        - `.site-footer {}`
- Vi laddar om sidan för att se uppdateringen vi gjorde.

## Bild

- Lite innehåll på sidan vill vi allt ha
- Vi har använt `<img>`-taggen tidigare, så vi lägger in en bild på oss själva på vår sida, tillsammans med en rubrik och en paragraf
    - `<img src="img/me.jpg" alt="This is me!" class="me">`
    - `<h1>` - `<p>`
- Tänk på att använda rätt bild för rätt syfte. Det är en övervägning om man vill ha en skarp bild som kanske tar lite längre tid att ladda eller om man vill ha en mindre bild som kanske inte är lika skarp.
- Den vi fick var påtok för stor, så vi får minska den lite.
- `.me {width: 400px}` ger oss en bredd på 400px på bilden, vi laddar om och ser om det ser mer rätt ut.

## Navbar

- Vi vill ju kunna navigera runt mellan våra sidor, så vi lägger till navigering:

- `<nav>` är ett element som används runt navigeringsmenyer på sidor för att dels hjälpa när man ska lägga till stil men även som guide på att just detta är en meny.

```html
<nav class="navbar">
    <a href="index.html">Home</a>
    <a href="about.html">About</a>
</nav>
```

- Nu har vi bara en sida, men vi gör en snabb kopia på vår `index.html` och döper den till `about.html` istället. Då har vi två sidor och vår navbar borde fungera.
- Vi lägger till lite style till den, nu ser den lite tråkig ut:

```css
.navbar {
    padding: 1em;
    background-color: #fff;
    border-top: 1px solid #000;
    border-bottom: 1px solid #000;
}

.navbar a {
    background-color: #eee;
    display: inline-block;
    padding: 0.5em 1em;
    border: 1px solid #999;
    text-decoration: none;
    color: #000;
}

.navbar a:hover {
    background-color: #000;
    color: #fff;
}
```

Gå igenom regel för regel.