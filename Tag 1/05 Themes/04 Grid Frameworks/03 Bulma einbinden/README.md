# Einbinden in October CMS Theme

1. Lade das CSS-Framework herunter
2. Lade es auf den Webserver nach `themes/dein-theme/assets/bulma.min.css`
3. Binde die CSS-Datei mit einem normalen link Tag in deinem default Layout ein:

```html
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Beispielseite</title>

  <link rel="stylesheet" href="{{ 'assets/bulma.min.css' | theme }}">
</head>
<body>
  <h2>Standardlayout</h2>

  {% page %}
</body>
</html>
```

Verwende dieses neue Markup für deine Homepage:

```html
<div class="columns">
  <div class="column is-half is-one-quarter-desktop" style="background: #ffd1b4">
    Ich bin 25% breit auf Desktops.
    Ich bin 50% breit auf Tablets.
    Ich bin 100% breit auf Smartphones.
  </div>
</div>
```

Überprüfe die Darstellung des Divs im Browser.
