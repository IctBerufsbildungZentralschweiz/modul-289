# Theme Installation

October bietet dir über das Backend eine einfache Möglichkeit, ein leeres Theme zu erstellen. Dieses kannst du als Basis für die weitere Arbeit verwenden.

1. Navigiere zu `Einstellungen -> Frontend Theme` und klicke auf `Erstelle ein neues (leeres) Theme`.
1. Fülle alle benötigten Informationen aus
1. Klicke bei deinem neuen Theme auf `Aktivieren`
1. Besuche deine Website

Da dein neues Theme überhaupt keine Daten enthält, kann das CMS dir momentan nur eine Fehlerseite anzeigen.

## Layout und Seiten erstellen

1. Navigiere zu `Editor` und klicke neben Layouts auf `⋮` und im Untermenü auf `New Layout`
1. Nenne dein neues Layout `default.htm`
1. Füge folgenden Code als Markup ein:

```twig
<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="EURE NAMEN">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{ this.page.title }}</title>
	{% styles %}
</head>
<body>
    <!-- Header -->
	<h2>Standardlayout - {{ this.page.title }}</h2>

    <!-- Content -->
	{% page %}

    <!-- Scripts -->
	<script src="{{ [ '@jquery', '@framework' ] | theme }}"></script>
	{% scripts %}
</body>
</html>
```

1. Navigiere zu `Editor` und klicke neben Pages auf `⋮` und im Untermenü auf `New Page`
1. Nenne die Seite `Homepage`, wähle als URL `/`
1. Öffne die Settings und wähle bei `Layout` das zuvor erstellte Default-Layout aus
1. Füge folgenden Code als Markup ein:

```twig
<p>Mein Seiteninhalt</p>
```

Wenn du deine Website erneut aufrufst, sollte deine neu erstellte Seite nun erscheinen.
