# Theme Struktur
Um das Theme zu bearbeiten, müssen die einzelnen Bestandteile eines Theme bekannt sein. Im Folgenden werden die wichtigsten Komponente eines Wordpress-Themes aufgelistet.

### Wo ist das Theme zu finden?
Auf der obersten Ebene hat Wordpress gerade einmal drei Ordner:

```text
./wp-admin    - Dateien zum Adminbereich (Backend)
./wp-content  - Benutzerspezifische Dateien und Inhalte (Plugins, Themes, Sprachen etc.)
./wp-includes - Allgemeine CMS Dateien
```

Somit muss sich das Theme im Ordner `wp-content` befinden, genauer gesagt unter dem Pfad:

```
wp-content/themes/ThemeName
``` 

## Functions.php
Die Datei `functions.php` ist eine zentrale Hilfsdatei für das komplette Theme. Man kann sich die Datei als persönlichen Template-Buttler vorstellen, welcher beim Laden des Templates sämtliche Funktionen vorbereitet, damit die Seite erstellt werden kann. 

Hier ein kurzer Auszug von zwei Funktionen:

| Funktion           | Definition                                                           |
|--------------------|----------------------------------------------------------------------|
| register_nav_menus | Registriert die Menüs, welche im Tempalte   verwendet werden können. |
| THEMENAME_scripts  | Lädt die hinterlegten Scripts und Styles in den Template-Head.    |