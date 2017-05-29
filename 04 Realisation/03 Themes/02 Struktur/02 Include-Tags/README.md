# Include-Tags
Wenn Inhalte der Template-Dateien in die Auslagerungsdateien (header.php, sidebar.php und footer.php) auslagert werden, müssen diese in der jeweiligen Template-Datei auch «verlink» werden. Nur so weiss das CMS, dass es an der bestimmten Stelle den Code aus der Auslagerungsdatei einbinden soll. Dafür haben die Entwickler spezielle Include-Tags erstellt:

* `<?php get_header(); ?>` – an der Stelle wird die header.php eingebunden.
* `<?php get_sidebar(); ?>` – an der Stelle wird die sidebar.php eingebunden.
* `<?php get_footer(); ?>` – an der Stelle wird die footer.php eingebunden.

Diese speziellen Include-Tags erfüllen die gleiche Funktion, wie die Include-Anweisung von PHP. Mit dem Unterschied, dass man sich bei den Include-Tags keine Sorge um den Pfad und den Dateinamen machen muss, wenn man die Dateien alle im dafür vorgesehenen Ordner belässt.

Selbstverständlich kann man auch benutzerspezifische Template-Dateien in die offiziellen Template-Dateien einbinden, z.B.: `<?php include (TEMPLATEPATH . "/deine-datei.php"); ?>`. Der Wert TEMPLATEPATH gibt dann die absolute Adresse des Theme-Ordners auf dem Server wider. Mit benutzerdefinierten Template-Dateien bezeichnet man Dateien, die nicht zum offiziellen Umfang gehören.

#### Grundsätzliche Funktionsweise: get_{FILENAME}
Mit den verschiedenen get-Funktionen (get_header, get_footer, get_sidebar) werden die verschiedenen Template-Teile aus anderen Dateien in die Datei `index.php` geladen.

Der Befehl `get_header();` ist somit gleichwertig mit den normalen Include-Befehl `include 'header.php;`.