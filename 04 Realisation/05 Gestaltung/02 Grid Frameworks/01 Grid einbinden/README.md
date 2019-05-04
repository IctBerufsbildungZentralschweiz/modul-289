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
</div>
```

## Einbinden in October CMS Theme

1. [Lade das CSS-Framework herunter](https://raw.github.com/nathansmith/unsemantic/master/assets/stylesheets/unsemantic-grid-responsive-tablet.css)
1. Lade es auf den Webserver nach `themes/dein-theme/assets/unsemantic.css`
1. Binde die CSS-Datei mit einem normalen `link` Tag in deinem `default` Layout ein:

```twig
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Beispielseite</title>

  <link rel="stylesheet" href="{{ 'assets/unsemantic.css' | theme }}">
</head>
<body>
  <h2>Standardlayout</h2>

  {% page %}
</body>
</html>
```

1. Verwende dieses neue Markup für deine Homepage:

```html
<div class="grid-container">
  <div class="grid-25 tablet-grid-50 mobile-grid-100" style="background: #ffd1b4">
    Ich bin 25% breit auf Desktops.
    Ich bin 50% breit auf Tablets.
    Ich bin 100% breit auf Smartphones.
  </div>
</div>
```

1. Überprüfe die Darstellung des Divs im Browser.