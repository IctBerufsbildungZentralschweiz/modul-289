# Static Pages

Die Basisfunktionalität von October richtet sich besonders an technische Anwender. Um das Erarbeiten von Inhalten etwas zu vereinfachen, verwenden wir das [Static Pages Plugin](https://octobercms.com/plugin/rainlab-pages).

## Installation

1. Navigiere zu `Einstellungen -> Aktualisierungen` und klicke auf `Install plugins`
1. Suche nach `Static Pages`
1. Klicke es in der Trefferliste an um die Installation zu starten

Du findest im Hauptmenü neu den Menüpunkt «Seiten».


## Seiten und Menüs

Das Static Pages plugin ermöglicht es, über den neuen «Seiten» Menüpunkt einfache Inhaltsseiten und Menüs zu erstellen.


### Ein Menü erstellen und anzeigen

1. Navigiere zu `Seiten -> Menüs`
1. Klicke auf `Neu`
1. Nenne das Menü `Hauptmenü`
1. Klicke auf `Neuer Menüpunkt`
1. Suche in der Suchbox nach deiner `Homepage` und klicke sie an
1. Klicke auf `Anwenden`
1. Erstelle einen weiteren Menüpunk
1. Belasse den Typ auf `URL`, gib als Titel `Google` ein
1. In das URL Feld gibst du `https://google.ch` ein
1. Klicke auf `Anwenden`
1. Klicke auf `Speichern`

Du hast ein neues Menü erstellt.

1. Navigiere zu `CMS -> Layouts`
1. Wähle das `default` Layout aus
1. Klicke im Untermenü auf `Komponenten`.
1. Ziehe die Komponente `Seiten -> Static menu` mit der Maus irgendwo in den Inhalt deines Layouts
1. Klicke die Komponenten im orangen Bereich an und stelle sicher, dass dein Hauptmenü ausgewählt ist
1. Klicke auf `Speichern`

Wenn du deine Website jetzt aufrufst, wird dir das Menü im Inhalt angezeigt.

### Layout für die Nutzung von Static Pages aktivieren

Damit du ein Layout für Static Pages nutzen kannst, musst du wie folgt vorgehen:

1. Navigiere zu `CMS -> Layouts`
1. Wähle das `default` Layout aus
1. Klicke im Untermenü auf `Komponenten`.
1. Klicke die Komponente `Seiten -> Static page` an um sie zum Layout hinzuzufügen
1. Klicke auf `Speichern`

Du kannst im Hauptmenü unter `Seiten -> Neu` beliebige neue Seiten mit einem WYSIWYG-Editor erstellen und bearbeiten.

Versuche eine neue Seite zu erstellen und diesem dem Hauptmenü hinzuzufügen.

## Custom page fields

Das Static Pages Plugin bietet eine einfache Möglichkeit, die Eingabemaske für den Endkunden mit weiteren Feldern zu ergänzen. 

Du kannst mit der `{variable}` Syntax in einem `Layout` beliebige Felder definieren. Diese werden dann automatisch im Backend-Seiteneditor angezeigt:

```html
<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<title>Ein Layout</title>
</head>
<body>

	{variable name="eineVariable" tab="Mein Tab" label="Bezeichnung des Feldes" type="text"}{/variable}
	{variable name="eineAndereVariable" tab="Mein Tab" label="Anderes Feldes" type="text"}{/variable}

	<p>
		Die Variablen können via Twig-Syntax ausgegeben werden:
		{{ eineVariable }}
	</p>
	<p>
		{{ eineAndereVariable }}
	</p>
</body>
</html>
```

### Übersicht

Eine Übersicht aller vorhandener Feld-Typen findest du auf octobertricks.com:

[RainLab.Pages: Custom page field cheatsheet auf octobertricks.com](https://octobertricks.com/tricks/custom-page-field-cheatsheet)