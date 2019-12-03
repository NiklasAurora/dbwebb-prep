# Design kmom05 - Bild

## Webbplatsers laddningstid

Lighthouse - https://developers.google.com/web/tools/lighthouse
Finns tillgängligt via flera olika ställen, jag brukar använda deras hemsida: https://developers.google.com/speed/pagespeed/insights/

* Visa devtools:
    * Requests
    * Storlek
    * Laddningstider
    * Full refresh, tänk på Cache (visa hur man kan stänga av sin cache)
    * Går att köra på sidor som kräver login om man kör via Chrome

* Notera Throttling

## Exempel

Testa och visa:
* https://jsramverk.me/
* https://dbwebb.se/
* https://www.lingscars.com/

# SEO

* Fancy flashord
    * Komprimera filer
        * Webbserver - gzip
    * Minify - minifiera CSS/JavaScript för att ta bort onödig storlek
        * Tar bort onödigt fluff-fluff runt omkring
    * Caching
        * Går att specificera olika lång cachning på olika typer av filer
    * CDN - Content Delivery Network
        * Serverar som har kopior på din sida, eller delar av den, så det finns redundans samt finns det möjlighet att utnyttja serverar som är närmre dig
    * Optimera bilder
        * Skillnaden mellan stora, små bilder (storleksmässigt, format, RAW). Mikael kommer prata mer om det under onsdagens föreläsning

## Rapporten

* Gå igenom rapportmallen
* http://www.student.bth.se/~niaa16/dbwebb-kurser/design/me/anax-flat/htdocs/analysis/speed-and-usability
* http://www.student.bth.se/~mabn17/dbwebb-kurser/design/me/anax-flat/htdocs/analysis/speed-and-usability

## Examensarbete

Ibland måste man marknadsföra sig själv lite

* Jag och Bäck skrev om ett sätt Google valt att lösa problem
    * Notera hur mycket skillnad laddningstid kan göra i pengar: https://moz.com/blog/amp-digital-marketing-2018 (Conversion rates)
    * https://www.cloudflare.com/learning/performance/more/website-performance-conversion-rates/

* Klasskamrat, Simon, valde att skriva om olika att minska storleken på JavaScript applikationer
