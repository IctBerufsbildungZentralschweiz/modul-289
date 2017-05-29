# Conditional-Tags
Bei den Conditional-Tags handelt es sich um Code-Fragmente, die eine Bedingung aufstellen: «Wenn dies und das erfüllt ist, dann handle so und so.» Angenommen, ein bestimmter Text soll nur auf der Startseite eingeblendet werden:

```php
<?php if ( is_home()) { ?>
    <h2>Willkommen in meinem Weblog</h2>
<?php } ?>
 ```

Wenn Sie etwas nur auf den Seiten (Pages) einblenden wollen:

```php
<?php if ( is_page()) { ?>
    <h2>Dies ist eine Seite</h2>
<?php } ?> 
```
Sie haben selbstverständlich auch die Möglichkeit, Conditional-Tags bestimmte Parameter mitzugeben:

```php
<?php if ( is_page('Impressum')) { ?>
    <h2>Impressum und Kontaktdaten</h2>
 <?php } ?>
 ```
 In diesem Fall stellen Sie eine Seite (Page) als Bedingung, die als Titel Impressum hat. Sie können auch mehrere Bedingungen durch logische Operatoren verknüpfen:
```php
<?php if ( is_page() || is_single()) { ?>
    <p>Lorem ipsum…</p>
<?php } ?>
```

Hier wird als Bedingung "entweder Seite oder einzelner Beitrag" gestellt. Folgende logische Operatoren (die eigentlichen Operatoren sind hervorgehoben) sind zugelassen:

* a || b **=** a oder b
* a or b **=**  a oder b
* a && b **=**  a und b
* a and b **=**  a und b
* !a **=**  nicht a
* a xor b **=**  entweder a oder b, aber nicht beide