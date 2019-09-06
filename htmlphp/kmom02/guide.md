# Kursmoment 2

## Struktur

* Finns det fler HTML-element?
* Förra veckan la vi till `<header>` och `<footer>`
* I `<main>` lägger vi sidans huvudsakliga innehåll
* Vi lägger också till en `<article>` runt vårt innehåll, samt en egen `<header>` och `<footer>` till den.

```html
<main>
    <article>
        <header>
            <h1>Article header</h1>
            <p class="author">Updated <time datetime="2018-06-25 11:17:43">25th June 2018</time> by Murphy</p>    
        </header>

        <p>Article content, images etc.</p>

        <footer class="byline">
            <p>Content for a byline, images etc.</p>
        </footer>
    </article>
</main>
```

## Några bra konstruktioner

* Scrollbar - `overflow-y: scroll`
* Sidans höjd - `min-height: 30em`
* Gradient - `background: linear-gradient(to bottom right, #43C6AC, #191654)`

## Responsiv webbplats

* `<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=2.0;">`

```
En webbläsares viewport är det området där innehållet kan visas. En fullt renderad sida kan resultera i att användaren behöver scrolla för att se mer. Det är med andra ord inte samma område som dess viewport.

Vi kan se att attributet content har egenskaper och värden.

width=device-width; talar om att bredden ska vara så bred som den använda enhetens skärm är.

initial-scale=1.0; talar om hur sidan ska zoomas när den laddas in.

maximum-scale=2.0; talar om hur mycket användaren får zooma.
```

<GÖR EXEMPEL PÅ MEDIA QUERIES>

## Navbar som visar nuvarande sida

```html
<nav class="navbar">
    <a href="index.html" class="selected">Home</a>
    <a href="about.html">About</a>
</nav>
```