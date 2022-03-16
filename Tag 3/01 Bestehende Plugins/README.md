# Plugins

Eine Vielzahl an Plugins findest du im [October Marketplace](https://octobercms.com/plugins).

Plugins erweitern die Funktionalität eines CMS. Für October gibt es kostenlose sowie kostenpflichtige Plugins.

Achte bei der Auswahl eines Plugins auf folgende Punkte:

1. **Bewertungen/Anzahl Installationen**: Das Arbeiten mit beliebten und gut bewerteten Plugins wird dir einfacher fallen
1. **Aktualität**: Plugins sollten regelmässig aktualisiert werden. Falls ein Plugin seit Jahren keine Updates erhalten hat, muss davon ausgegangen werden, dass es nicht mehr unterhalten wird und somit unsicher sein kann.
1. **Lizenz**: Nicht alle Plugins sind kostenlos. Falls ein kostenpflichtiges Plugin eine grosse Zeitersparnis bedeutet, lohnt es sich einen Entwickler finanziell zu unterstützen. In diesem ÜK werden wir auf kostenpflichtige Plugins verzichten.

## Plugins installieren

Wenn du im Marketplace ein Plugin gefunden hast, kannst du es wie folgt installieren:

1. Navigiere zu `Einstellungen -> Aktualisierungen` und klicke auf `Install packages`
2. Wechsle oben zum Reiter `Plugins`
3. Suche nach dem gewünschten Plugin
4. Klicke auf das Plugin in der Trefferliste
5. Nun erscheint der Code, damit du das Plugin auf dem Server installieren kannst

```shell
php artisan plugin:install autor.plugin
```

Verbinde dich nun wieder via [SSH auf den Server](../../Tag%202/02%20SSH-Verbindung), navigiere in den Projektordner (`cd public_html/projektnameXY/`), füge den kopierten Code ein und klick `Enter`.

### Datenbank-Tabellen erstellen
Nun hast du das Plugin-Paket heruntergeladen, jedoch die dazugehörigen Datenbank-Tabellen noch nicht erstellt. Damit diese automatisch erstellt werden, führe folgenden Befehl aus:

```shell
php artisan october:migrate
```

## Plugins deinstallieren

1. Navigiere zu `Einstellungen -> Aktualisierungen` und klicke auf das gewünschte Plugin
2. Kopiere den Code im roten Bereich, verbinde dich mit dem Server und führe den kopierten Code aus.

```shell
php artisan plugin:remove autor.plugin
```

## Komponenten

Plugins in October bestehen immer aus zwei Teilen: 

1. Menüpunkte und Einstellungen im Backend
1. `Komponenten` für das Frontend

Komponenten können auf Layouts und Seiten platziert werden und bieten dir zusätzliche Funktionalität. 

### Eine Komponente verwenden

1. Navigiere zu `Editor`
1. Wähle eine Seite unter `Pages` aus
1. Klicke auf `Components`. Hier findest du alle von Plugins bereitgestellten Komponenten.
1. Ziehe die Komponente mit der Maus irgendwo ins Markup
1. Klicke auf `Speichern`
