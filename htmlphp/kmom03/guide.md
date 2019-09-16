# Bild som bakgrund

```html
html {
    background-image: url("../img/background.jpg");
    background-attachment: fixed;
    background-position: bottom right;
    background-repeat: no-repeat;
    background-color: black;
    overflow-y: scroll;
}
```

```
html::after{
    content: "";
    background: url("../img/backgroundpattern.png") repeat;
    background-attachment: fixed;
    top: 0;
    left: 0;
    width:100%;
    height:100%;
    position: fixed;
    z-index: -1;
    opacity: 0.2;
}
```

# Transparens

`rgba(255, 255, 0, 0.4);`

`background: transparent;`

# Font

* Google Fonts (https://fonts.google.com/)
* Adobe Fonts (https://fonts.adobe.com/fonts)
* Dafont (https://www.dafont.com/)
* Font Squirrel (https://www.fontsquirrel.com/)

Tre sätt att ladda in

* Via CSS <br>`@import url('https://fonts.googleapis.com/css?family=Fjalla+One');`
* Via HTML <br>`<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">`

* Samt lokala filer om man vill göra på det sättet

När man ska använda en font så kan man t.ex. göra såhär:

```
html {
    font-family: "Fjalla One", Arial, sans-serif;
}
```

`sans-serif` är en fallback, ifall hemsidan inte kan ladda in den andra fonten. Man kan ha flera fonter som fallback, ofta har man en online, en lokal och sen vilken typ det ska vara

`sans-serif` är fonter som inte har serifer och är lika tjock på samtliga ställen.

[Roboto](https://fonts.google.com/specimen/Roboto)

`serif` är fonter som mer efterliknar traditionell skrivstil, tunnare på vissa ställen och med serifer i utkanten av bokstäverna.

[Merriweather](https://fonts.google.com/specimen/Merriweather)

# Position

* https://www.w3schools.com/cssref/playit.asp?filename=playcss_position
* https://www.w3schools.com/cssref/tryit.asp?filename=trycss_position_sticky
* https://css-tricks.com/almanac/properties/p/position/

# Units

* px (1px är 1px, skiljer sig från skärm till skärm)
* em (Relativt till nuvarande elements fontstorlek, storleken av M)
* rem (Relativt till root-elementets fontstorlek, storleken av M)
* % (Procentuellt i jämförelse med föräldrarelement)
* auto (Kan användas för att ta bort förgående värde, t.ex. vid Media Queries)
* vh (Viewport Height: 1vh = 1% of viewport height.) - https://www.w3schools.com/cssref/tryit.asp?filename=trycss_unit_vh

# Parent/child elements

* %

# Border style

* Dotted
* Dashed
* Solid
* Double
* Groove
* Ridge
* Inset
* Outset

# Preprocessors

* LESS
* SASS
* Stylus