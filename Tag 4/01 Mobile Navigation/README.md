# Mobiles Menü implementieren

Damit euer Menü auch auf mobilen Geräten verfügbar ist und nicht allzuviel vom begränzten Platz einnimmt, hat sich das sogenannte Hamburger-Menü durchgesetzt. Dabei ersetzt der Hamburger das eigentliche Menü und öffnet bei einem Klick darauf ein Popup/Fenster/Bereich mit den Menüpunkten.

Mit dem folgenden Schritten könnt ihr euer Menü auf mobilen Geräten in ein Hamburger-Menü umwandeln.

Eure aktuelle Menü-Komponente sollte momentan ungefähr so aussehen:

```html
[staticMenu mainMenu]
code = "hauptmenu"
==
<nav class="navbar">
  {% partial 'mainMenu' %}
</nav>
```

#### Schritt 1: Toggle implementieren
Als erstes wollen wir das normale Menü in der mobilen Ansicht ausblenden, und dafür den Hamburger einblenden. Dafür fügen wir zuerst unser Bild/Text/Zeichen ein, dass wir als Hamburger verwenden wollen:

```html
[staticMenu mainMenu]
code = "hauptmenu"
==
<nav class="navbar">
  {% partial 'mainMenu' %}
  <a href="#">Hamburger</a>
</nav>
```

Um die Anzeige der Elemente zu steuern, können wir auf die [Helfer-Klassen](https://bulma.io/documentation/modifiers/helpers/) von Bulma zurückgreifen:

```html
[staticMenu mainMenu]
code = "hauptmenu"
==
<nav class="navbar">
    <div class="is-hidden-touch">
      {% partial 'mainMenu' %}
    </div>
    <a class="is-hidden-desktop" href="#">Hamburger</a>
</nav>
```

* `is-hidden-touch` - Element wird auf Tablets und Smartphones versteckt.
* `is-hidden-desktop` - Element wird auf Desktops versteckt.

#### Schritt 2: Mobiles Menü einfügen
Meistens kann der Inhalt und die Struktur des normalen Menü für das mobile Menü übernommen werden, da die Menüpunkte übereinstimmen. Aus diesem Grund kann einfach die `mainMenu`-Komponente für das mobile Menü kopiert werden.

Für eine einfachere Positionierung und die Suchmaschinenfreundlichkeit sollte das versteckte mobile Menü je nach Möglichkeit am Schluss der Website eingebunden werden.

```html
[staticMenu mainMenu]
code = "hauptmenu"
==
<nav class="navbar">
    <div class="is-hidden-touch">
      {% partial 'mainMenu' %}
    </div>
    <a class="is-hidden-desktop" href="#">Hamburger</a>
</nav>

<nav class="is-hidden-desktop">
  {% partial 'mainMenu' %}
</nav>
```

Auch hier können wir mit der Klasse `is-hidden-desktop`, dass das Menü nur auf mobilen Geräten sichtbar ist.

#### Schritt 3: Mobiles Menü verstecken
Nun soll aber auch auf mobilen Geräten das Menü nicht immer sichtbar sein. Darum blenden wir es standardmässig aus:

```html
[staticMenu mainMenu]
code = "hauptmenu"
==
<nav class="navbar">
    <div class="is-hidden-touch">
        {% partial 'mainMenu' %}
    </div>
    <a class="is-hidden-desktop" href="#">Hamburger</a>
</nav>

<nav class="nav-mobile is-hidden-desktop">
    {% partial 'mainMenu' %}
</nav>
```

Dafür statten wir unser mobiles Menü mit einer neuen Klasse aus und blenden damit das mobile Menü aus:
```css
.nav-mobile {
    display: none;
}
```

#### Schritt 4: Mobiles Menü togglebar machen
Das Menü soll nun ein- und ausgeblendet werden, in dem eine Klasse (in unserem Beispiel `is-visible`) am Element vergeben oder entfernt wird:

```html
<nav class="nav-mobile is-hidden-desktop"> <!-- nicht sichtbar -->
    {% partial 'mainMenu' %}
</nav>
```


```html
<nav class="nav-mobile is-hidden-desktop is-visible">  <!-- sichtbar -->
    {% partial 'mainMenu' %}
</nav>
```

Dazu können wir die Klasse wie folgt im CSS definieren:

```css
.nav-mobile.is-visible {
    display: block;
}
```

#### Schritt 5: Interaktivität hinzufügen
Nun müssen wir nur noch dafür sorgen, dass diese Klasse hinzugefügt wird, wenn ich auf den Hamburger klicke. Dazu muss der Hamurger noch mit einer Klasse ausgestattet werden, um diesen via JavaScript/jQuery anzusprechen:

```html
[staticMenu mainMenu]
code = "hauptmenu"
==
<nav class="navbar">
    <div class="is-hidden-touch">
      {% partial 'mainMenu' %}
    </div>
    <a class="nav-mobile-toggle is-hidden-desktop" href="#">Hamburger</a>
</nav>

<nav class="nav-mobile is-hidden-desktop">
    {% partial 'mainMenu' %}
</nav>
```

```javascript
$('.nav-mobile-toggle').on('click', function() {
  $('.nav-mobile').addClass('is-visible')
})
```

#### Schritt 6: Mobiles Menü schliessen
Damit das mobile Menü wieder geschlossen werden kann, braucht es noch einen Schliessen-Button, der die Klasse `is-visible` wieder entfernt:

```html
[staticMenu mainMenu]
code = "hauptmenu"
==
<nav class="navbar">
    <div class="is-hidden-touch">
      {% partial 'mainMenu' %}
    </div>
    <a class="nav-mobile-toggle is-hidden-desktop" href="#">Hamburger</a>
</nav>

<nav class="nav-mobile is-hidden-desktop">
    <a href="#" class="nav-mobile-close">×</a>
    {% partial 'mainMenu' %}
</nav>
```

```javascript
$('.nav-mobile-toggle').on('click', function() {
  $('.nav-mobile').addClass('is-visible')
})

$('.nav-mobile-close').on('click', function() {
  $('.nav-mobile').removeClass('is-visible')
})
```

### Beispiel
Wie das oben gezeigte Beispiel umgesetzt wird, zeigt [dieser Codepen](https://codepen.io/pen/MWamzLR).