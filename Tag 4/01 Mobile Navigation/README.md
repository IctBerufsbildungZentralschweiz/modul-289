# Mobiles Menü implementieren

Damit euer Menü auch auf mobilen Geräten verfügbar ist und nicht allzuviel vom begränzten Platz einnimmt, hat sich das sogenannte Hamburger-Menü durchgesetzt. Dabei ersetzt der Hamburger das eigentliche Menü und öffnet bei einem Klick darauf ein Popup/Fenster/Bereich mit den Menüpunkten.

Mit dem folgenden Schritten könnt ihr euer Menü auf mobilen Geräten in ein Hamburger-Menü umwandeln.

Eure aktuelle Menü-Komponente sollte momentan ungefähr so aussehen:

```html
[staticMenu]
code = "hauptmenu"
==
<nav class="navbar">
  {% component 'staticMenu' %}
</nav>
```

#### Schritt 1: Toggle implementieren
Als erstes wollen wir das normale Menü in der mobilen Ansicht ausblenden, und dafür den Hamburger einblenden. Dafür fügen wir zuerst unser Bild/Text/Zeichen ein, dass wir als Hamburger verwenden wollen:

```html
[staticMenu]
code = "hauptmenu"
==
<nav class="navbar">
  {% component 'staticMenu' %}
  <a href="#">Hamburger</a>
</nav>
```

Um die Anzeige der Elemente zu steuern, können wir auf die [Helfer-Klassen](https://bulma.io/documentation/modifiers/helpers/) von Bulma zurückgreifen:

```html
[staticMenu]
code = "hauptmenu"
==
<nav class="navbar">
    <div class="is-hidden-touch">
      {% component 'staticMenu' %}
    </div>
    <a class="is-hidden-desktop" href="#">Hamburger</a>
</nav>
```

* `is-hidden-touch` - Element wird auf Tablets und Smartphones versteckt.
* `is-hidden-desktop` - Element wird auf Desktops versteckt.

#### Schritt 2: Mobiles Menü einfügen
Meistens kann der Inhalt und die Struktur des normalen Menü für das mobile Menü übernommen werden, da die Menüpunkte übereinstimmen. Aus diesem Grund kann einfach die `staticMenu`-Komponente für das mobile Menü kopiert werden.

Für eine einfachere Positionierung und die Suchmaschinenfreundlichkeit sollte das versteckte mobile Menü je nach Möglichkeit am Schluss der Website eingebunden werden.

```html
[staticMenu]
code = "hauptmenu"
==
<nav class="navbar">
    <div class="is-hidden-touch">
      {% component 'staticMenu' %}
    </div>
    <a class="is-hidden-desktop" href="#">Hamburger</a>
</nav>

<nav class="nav-mobile is-hidden-desktop">
  {% component 'staticMenu' %}
</nav>
```

Auch hier können wir mit der Klasse `is-hidden-desktop`, dass das Menü nur auf mobilen Geräten sichtbar ist.

#### Schritt 3: Mobiles Menü verstecken
Nun soll aber auch auf mobilen Geräten das Menü nicht immer sichtbar sein. Darum blenden wir es standardmässig mit Bulmas `.is-hidden` Klasse aus:

```html
[staticMenu]
code = "hauptmenu"
==
<nav class="navbar">
    <div class="is-hidden-touch">
        {% component 'staticMenu' %}
    </div>
    <a class="is-hidden-desktop" href="#">Hamburger</a>
</nav>

<nav class="nav-mobile is-hidden-desktop is-hidden">
    {% component 'staticMenu' %}
</nav>
```

#### Schritt 4: Mobiles Menü togglebar machen
Das Menü soll nun ein- und ausgeblendet werden, in dem eine Klasse (in unserem Beispiel `is-hidden`) dem Element vergeben oder entfernt wird:

```html
<nav class="nav-mobile is-hidden-desktop is-hidden"> <!-- nicht sichtbar -->
    {% component 'staticMenu' %}
</nav>
```


```html
<nav class="nav-mobile is-hidden-desktop">  <!-- sichtbar (ausser auf Desktop) -->
    {% component 'staticMenu' %}
</nav>
```


#### Schritt 5: Interaktivität hinzufügen
Nun müssen wir nur noch dafür sorgen, dass diese Klasse hinzugefügt wird, wenn ich auf den Hamburger klicke. Dazu muss der Hamurger noch mit einer `.nav-mobile-toggle` Klasse ausgestattet werden, um diesen via JavaScript anzusprechen:

```html
[staticMenu]
code = "hauptmenu"
==
<nav class="navbar">
    <div class="is-hidden-touch">
      {% component 'staticMenu' %}
    </div>
    <a class="nav-mobile-toggle is-hidden-desktop" href="#">Hamburger</a>
</nav>

<nav class="nav-mobile is-hidden-desktop is-hidden">
    {% component 'staticMenu' %}
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var nav = document.querySelector('.nav-mobile')
        document.querySelector('.nav-mobile-toggle').addEventListener('click', function(e) {
            e.preventDefault();
            nav.classList.toggle('is-hidden')
        })
    })
</script>
```

#### Schritt 6: Mobiles Menü schliessen
Damit das mobile Menü wieder geschlossen werden kann, braucht es noch einen Schliessen-Button, der die Klasse `is-hidden` wieder ergänzt:

```html
[staticMenu]
code = "hauptmenu"
==
<nav class="navbar">
    <div class="is-hidden-touch">
      {% component 'staticMenu' %}
    </div>
    <a class="nav-mobile-toggle is-hidden-desktop" href="#">Hamburger</a>
</nav>

<nav class="nav-mobile is-hidden-desktop">
    <a href="#" class="nav-mobile-close">×</a>
    {% component 'staticMenu' %}
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var nav = document.querySelector('.nav-mobile')
        document.querySelector('.nav-mobile-toggle').addEventListener('click', function(e) {
            e.preventDefault();
            nav.classList.toggle('is-hidden')
        })
        document.querySelector('.nav-mobile-close').addEventListener('click', function(e) {
            e.preventDefault();
            nav.classList.add('is-hidden')
        })
    })
</script>
```

### Beispiel
Wie das oben gezeigte Beispiel umgesetzt wird, zeigt [dieser Codepen](https://codepen.io/tobiasoffline/pen/RwrNrmK).