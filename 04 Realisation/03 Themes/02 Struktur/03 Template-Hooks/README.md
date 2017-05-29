# Template-Hooks
Wenn Sie ein bestehendes Theme bearbeiten oder ein neues erstellen, sollten darauf geachtet werden, dass die Template-Hooks (Hook = engl. für Haken) nicht gelöscht bzw. dass diese eingebunden werden. Diese Hooks werden von einigen Plugins benötigt, damit sie richtig bzw. überhaupt funktionieren können. Man kann sich die Funktion der Plugin-Hooks auch bildlich als «Haken» vorstellen, die den Plugins einen Punkt bieten, an dem sie ansetzen können.

Das Statistik-Plugin (Stats) beispielsweise kann automatisch den benötigten Code im Fussbereich der Website ( footer.php ) einbinden. Dafür muss sich allerdings in der footer.php der Hook `wp_footer();` befinden. Ohne diesen Hook findet das Plugin nicht die Stelle, an der es den Statistik-Code einbinden soll.

Die wichtigsten zwei Hooks sind folgende:

* `<?php wp_head(); ?>` – meistens im header.php
* `<?php wp_footer(); ?>` – meistens im footer.php

Grundsätzlich sollten diese beiden Hooks **nie** gelöscht werden.