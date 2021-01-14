# Fehlerseiten 404, 500

Niemand ist ohne Fehler, auch nicht eure Website.

## Fehlerseite 404

`4xx: gescheiterte Anfrage, Ursache wohl clientseitig`

Ein 404-Fehler ist ein Fehlercode, der darauf hinweist, dass die angeforderte Seite oder Ressource nicht verfügbar ist. Die Ursachen dieses Fehlers können folgende sein:

* Domain oder Domainname existiert nicht
* Unerreichbarer Webserver
* Neu vergebene Domain, weshalb Website ohne Inhalt ist
* Schreibfehler im Link der Ursprungsseite (Groß-/Kleinschreibung, falsches Zeichen)
* Zielwebseite/-datei ist gelöscht, verschoben oder umbenannt worden
* Schreibfehler bei verlinkenden Seiten
* Domainname kann nicht in IP konvertiert werden

### Aufgabe
Provoziert einen 404-Fehler auf eurer Website, in dem ihr eine URL aufruft, die nicht exisiert und beobachtet. Was passiert?

Zum Beispiel: `www.<eure-projekt-domain>.ch/blablablabla`

Was passiert auf anderen Seiten?
* [ICT-BZ 404-Fehlerseite](https://www.ict-bz.ch/blablablabla)
* [GitHub 404-Fehlerseite](https://github.com/_blablabla)

Wie findet ihr die aktuelle Lösung auf eurer Website? Was könnte man daran optimieren?

## Fehlerseite 500

`5xx: Fehler, Ursache auf Seite des Servers`

Fehler geschehen jedoch nicht nur clientseitig, sondern auch serverseitig. Der «Internal Server Error» kann beim Verarbeiten der Anfrage durch den Webserver entstehen. Der Sammel-Statuscode umfasst alles, was beim Server ungeplant passieren und damit die Ausgabe der Website verhindern kann. 

* Timeout erreicht (Datenbank, Dateisystem)
* Fehlerhafte Server-Konfiguration
* Fehlerhafter Code (Syntaxfehler)
* Server-Ressourcen aufgebraucht (RAM, Speicherplatz)

Hier wiederum Beispiele:
* [ICT-BZ Fehlerseite](https://www.ict-bz.ch/500)
* [GitHub Fehlerseite](https://github.com/500)

### Aufgabe

Provoziert einen 500-Fehler auf eurer Website. Dazu könnt ihr im Backend unter `CMS` > `Seiten` im `Code` Tab des Codeeditors ungültigen PHP-Code einfügen und die Seite anschliessend aufrufen:

```php
// Schliessendes " und ; fehlen hier absichtlich!
echo "Syntax Error
```

## Umsetzung im October CMS

Damit ihr steuern könnt, was bei einem 404- oder 500-Fehler angezeigt werden soll, könnt ihr unter `CMS` > `Seiten` zwei neue Seiten erstellen mit der URL `/404` und `/error`. Diese werden nun automatisch angezeigt, wenn einer dieser Fehler auftaucht.
