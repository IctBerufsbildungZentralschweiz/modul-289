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

## Wie sind Themes aufgebaut?
Innerhalb des jeweiligen Themes-Ordners befinden sich Dateien – Template-Dateien – und weitere Unterordner. Die verschiedenen Template-Dateien haben unterschiedliche Funktionen. Manche Dateien müssen auf jeden Fall vorhanden sein, andere sind optional. Im weiteren Verlauf werden wir die folgenden Begriffe anschauen:

* Template-Dateien
* Include-Tags
* Template-Hooks
* Conditional-Tags
* Der Loop
* Zusätzliche Seiten-Templates

