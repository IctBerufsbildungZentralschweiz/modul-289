# Grid einbinden
Als nächstes bereiten wir das Theme so vor, dass wir ein GRID-System für die Gestaltung nutzen können. Wir haben und in diesem Fall für das [Unsemantic](https://unsemantic.com) mini CSS-Framework entschieden.

Das Framework kennt drei Abstufungen von Anzeigegeräten: 
```html
    Desktop     =>      grid-{1-100}            =>      grösser als 1024px
    Tablet      =>      tablet-grid-{1-100}     =>      zwischen 768px und 1024px
    Mobile      =>      mobile-grid-{1-100}     =>      kleiner als 768px
```

Das Grid des Unsematic-Framework besitzt 20 Spalten und somit eine Abstufung von 5% Breite. Die Grid-Klassen sind bezeichnet als grid-x, wobei "x" für die prozentuale Breite des Grid-Elements steht. Diese sind jeweils ein Mehrfaches von 5, bis maximal 100 — grid-5, grid-10 … grid-95, grid-100. Zusätzlich gibt es noch Klassen um die Seite zu dritteln: grid-33 und grid-66 sind 33.3333% und 66.6667%.

```html
<div class="grid-container">
  <div class="grid-25  tablet-grid-50 mobile-grid-100">
    Ich bin 25% breit auf Desktops.
    Ich bin 50% breit auf Tablets.
    Ich bin 100% breit auf Smartphones.
  </div>
```

Nun kannst du das [Framework herunterladen](https://raw.github.com/nathansmith/unsemantic/master/assets/stylesheets/unsemantic-grid-responsive-tablet.css), das CSS in deinen Theme-Ordner verschieben und dieses mit dem `functions.php` einbinden.

Eine ausführliche Dokumentation des Grid-Systems befindet sich auf [unsemantic.com](unsemantic.com).
