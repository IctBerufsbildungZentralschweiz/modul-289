# Fehlerseiten 404, 500

Niemand ist ohne Fehler, auch nicht eure Website.

## Fehlerseite 404

`4xy: gescheiterte Anfrage, Ursache wohl clientseitig`

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
* https://www.ict-bz.ch/foobar
* https://github.com/_

Wie findet ihr die aktuelle Lösung auf eurer Website? Wie könnte man daran optimieren?

## Fehlerseite 500

`5xy: Fehler, Ursache auf Seiten des Servers`

Fehler geschehen jedoch nicht nur clientseitig, sondern auch serverseitig. Der «Internal Server Error» kann beim Verarbeiten der Anfrage durch den Webserver entstehen. Der Sammel-Statuscode umfasst alles, was beim Server ungeplant passieren und damit die Ausgabe der Website verhindern kann. 

* Permission-Fehler
* PHP-Timeout
* Fehlerhafter Code in .htaccess
* Fehler in der Syntax oder dem Code in CGI-/Perl-Scripts
* PHP-Memory-Limit.

Hier wiederum Beispiele:
* https://www.ict-bz.ch/500
* https://github.com/500