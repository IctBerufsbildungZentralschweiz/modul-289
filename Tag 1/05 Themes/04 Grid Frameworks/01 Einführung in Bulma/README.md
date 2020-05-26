# Bulma

Als nächstes bereiten wir das Theme so vor, dass wir ein GRID-System für die Gestaltung nutzen können. Wir haben uns in diesem Fall für das [Bulma](https://bulma.com) CSS-Framework entschieden.

### Die Basics
Um das Grid-System von Bulma zu nutzen, braucht es grundsätzlich zwei Komponenten:

1. Füge einen `columns` Container hinzu
2. Füge soviele `column` Elemente darin ein, wie du willst

Jedes `column` Elment hat die gleiche Breite, egal wie viele du davon hinzufügst.

```html
<div class="columns">
  <div class="column">
    First column
  </div>
  <div class="column">
    Second column
  </div>
  <div class="column">
    Third column
  </div>
  <div class="column">
    Fourth column
  </div>
</div>
```

### Spaltengrössen
Eventuell sollen nicht alle Spalten gleich gross sein. Um dies zu erreichen, kann die Grösse der einzelnen `columns` Elemente mit zusätzlichen Klassen definiert werden:

* `is-three-quarters`
* `is-two-thirds`
* `is-half`
* `is-one-third`
* `is-one-quarter`
* `is-full`
* `is-four-fifths`
* `is-three-fifths`
* `is-two-fifths`
* `is-one-fifth`

Die anderen Spalten teilen den **restlichen** Platz unter sich auf.

```html
<div class="columns">
  <div class="column is-four-fifths">is-four-fifths</div>
  <div class="column">Auto</div>
  <div class="column">Auto</div>
</div>
```

### Responsive
Standardmässig sind die `columns` nur bei der Anzeige grösseren Bildschirmen (Tablets und grösser) aktiviert. Somit werden die Spalten automatisch auf mobilen Geräten untereinander gestellt.

Sollen die `columns` auch auf mobilen Geräten funktionieren, muss einfach die Klasse `is-mobile` beim Container hinzugefügt werden:

```html
<div class="columns is-mobile">
  <div class="column">1</div>
  <div class="column">2</div>
  <div class="column">3</div>
  <div class="column">4</div>
</div>
```

Sollen `columns` nur auf grossen Displays (Desktop und grösser) angezeigt werden, muss einfach die Klasse `is-desktop` beim Container hinzugefügt werden:

```html
<div class="columns is-desktop">
  <div class="column">1</div>
  <div class="column">2</div>
  <div class="column">3</div>
  <div class="column">4</div>
</div>
```

#### Unterschiedliche Spaltengrössen pro Viewport (Mobil, Tablet, Desktop)

Unter Umständen soll ein eine Spalte (`column`) auf eine Dektop anders aussehen, als auf mobilen Geräten. Entsprechend kann diese abhängig vom Viewport definiert werden:

```html
<div class="columns is-mobile">
  <div class="column is-three-quarters-mobile is-two-thirds-tablet is-half-desktop">
    <code>is-three-quarters-mobile</code><br>
    <code>is-two-thirds-tablet</code><br>
    <code>is-half-desktop</code><br>
  </div>
  <div class="column">2</div>
  <div class="column">3</div>
  <div class="column">4</div>
  <div class="column">5</div>
</div>
```

## Bulma - mehr als nur Grid
Bulma erleichtert jedoch nicht nur die Positionierung von Elementen auf einer Website, das CSS-Framework bietet eine ganze Reihe von nützlichen Werkzeugen. Schaut euch darum während dem Projekt die Dokumentation genau an: [Bulma-Dokumentation](https://bulma.io/documentation/modifiers/).

So könnt ihr beispielsweise bei euren Projekte viel Zeit sparen, wenn ihr auf die vorgefertigten Formular-Klassen von Bluma zurückgreift: [Bulma-Formularklassen](https://bulma.io/documentation/form/)
