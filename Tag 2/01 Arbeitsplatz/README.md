# Einrichtung Entwicklungsumgebung

## Editor

Um produktiv arbeiten zu können, solltest du einen modernen Text-Editor verwenden. Welchen Editor du für diesen ÜK verwendest, ist dir überlassen. WYSIWYG-Editoren wie zum Beispiel Dreamweaver sind nicht erlaubt.

Es ist von Vorteil, wenn der Editor deiner Wahl Plugins unterstützt.

### Empfehlungen

Wir empfehlen dir einen der folgenden Editoren zu benutzen und die weiter unten aufgeführten Plugins zu installieren.

#### Visual Studio Code

1. Installer von [code.visualstudio.com](https://code.visualstudio.com/) herunterladen
2. Visual Studio Code installieren und starten
3. Bei den Plugins nach unten erwähnten Plugins suchen

#### Sublime Text

1. Installer von [sublimetext.com](https://www.sublimetext.com/3) herunterladen
2. Sublime Text installieren und starten
3. Die Tastenkombination `Ctrl + Shift + P` drücken und `Install Package Control` suchen und markieren
4. Package Control mit Enter installieren und Sublime Text anschliessend neu starten


##### Plugins installieren

Um Plugins zu installieren, drücke die Tastenkombination `Ctrl + Shift + P` und gib `Install Package` ein. Drücke `Enter`. Du kannst jetzt den Namen des Plugins eingeben, mit den Pfeiltasten auswählen und mit `Enter` installieren.

#### Atom

1. Installer von [atom.io](https://atom.io/) herunterladen und ausführen.
2. Das Programm `Atom` starten.

##### Plugins installieren

Um Plugins zu installieren, gehe im Menü auf `File -> Settings -> Install`. Du kannst jetzt den Namen eines Plugins eingeben und es über den «Install»-Button installieren.

### Plugin-Empfehlungen

Folgende Plugins kannst du installieren, um dir das Arbeiten etwas zu vereinfachen.

#### Emmet

Emmet ermöglicht es dir, einen CSS-Selektor via TAB-Taste in die entsprechende HTML-Struktur umzuwandeln.

```
a  -> TAB-Drücken

// ergibt:
<a href=""></a>
_____________________________

h1{Überschrift}+p{Absatz}  -> TAB-Drücken

// ergibt:
<h1>Überschrift</h1>
<p>Absatz</p>
_____________________________

ul>li{Punkt $}*3  -> TAB-Drücken

// ergibt:
<ul>
    <li>Punkt 1</li>
    <li>Punkt 2</li>
    <li>Punkt 3</li>
</ul>
```

#### PHP Hints

Autocomplete-Funktionen, die Dir bei der Eingabe von PHP-Code helfen, kannst Du über folgende Plugins erhalten:

|    Editor    |      Plugin Name      |
|--------------|-----------------------|
| Visual Studio Code     | PHP IntelliSense        |
| Sublime Text | PHP Completions Kit   |
| Atom         | atom-autocomplete-php |

##### Hinweis zu `atom-autocomplete-php`:

Wird bei der Installation ein Fehler ausgeben, gehe nach der Installation in die Plugin-Einstellungen und gib unter `Command php` folgenden Wert ein:

```
c:\xampp\php\php.exe
```

Starte Atom anschliessend neu.

Du wirst jetzt zwar immer noch eine Fehlermeldung erhalten, jedoch funktioniert die Autovervollständigung trotzdem.

`¯\_(ツ)_/¯`

## FTP-Programm

FTP bedeutet File Transfer Protocol. Es ist ein Kommunikationsprotokoll, um Dateien zwischen unterschiedlichen Computersystemen auszutauschen. Die Kommunikation findet nach dem Client-Server-Prinzip statt.

Das heißt, es gibt einen FTP-Client, der wie ein Datei-Manager funktioniert. Und es gibt einen FTP-Server, der dem FTP-Client Dateien zur Verfügung bzw. Speicherplatz für Dateien bereitstellt. Der FTP-Client kann Dateien auf dem FTP-Server ablegen, löschen oder herunterladen.

Der typische Anwendungsfall wäre die Dateiübertragung auf einen Webserver, der nicht nur aus einem HTTP-Server, sondern auch aus einem FTP-Server besteht. Per FTP können also HTML- und Bild-Dateien auf einen Webserver übertragen und verwaltet werden.

#### FTP-Programm installieren

* https://winscp.net/
* https://filezilla-project.org/ (Achtung: McAfee!)