# Werkzeuge

## Editor & Konsole

Um produktiv arbeiten zu können, solltest du einen modernen Text-Editor verwenden. Welchen Editor und welche Konsole du für diesen ÜK verwendest, ist grundsätzlich dir überlassen. WYSIWYG-Editoren wie zum Beispiel Dreamweaver sind nicht erlaubt.

### Empfehlungen

Wir empfehlen wir in diesem Kurs mit dem Visual Studio Code (VS Code) zu arbeiten. Natürlich gibt es auch viele andere tolle Editoren, aber in diesem Kurs werden sämtliche Arbeitsschritte mit diesem vorgezeigt und das VS Code hat bereits eine Konsole integriert. So musst du nur ein Programm installieren.

Solltest du dich für ein anderes Programm entscheiden, ist es in deiner Verantwortung dich um eine SSH-fähige Konsole zu kümmern und diese zu unterhalten.

#### Installation

1. Installer von [code.visualstudio.com](https://code.visualstudio.com/) herunterladen
2. Visual Studio Code installieren und starten
3. Bei den Plugins nach unten erwähnten Plugins suchen

### Plugins

Plugins sind Erweiterungen für deinen Code-Editor, um dir das Arbeiten etwas zu vereinfachen. Um Plugins zu installieren, gehe im Menü auf `File -> Preferences -> Extensions` (Ctrl + Shift + X). Du kannst jetzt den Namen eines Plugins eingeben und es über den «Install»-Button installieren.

Folgende Plugins könnten für die nützlich sein:

| Plugin Name      | Beschreibung                                                                                                    |
|------------------|-----------------------------------------------------------------------------------------------------------------|
| PHP Intelephense | Autocomplete-Funktionen, die Dir bei der Eingabe von PHP-Code helfen, kannst Du über folgende Plugins erhalten. |
| CSS Formatter   | Ermöglicht das automatische Formatieren von CSS-Code.                                                           |

#### Bereits vorinstalliert: Emmet

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

### Konsole (Terminal)

Die Konsole, oder eben auch Terminal, ist eine alternative Art einen Computer zu steuern. Also anstelle von Maus und Tastatur, kann der Computer mit Befehlen gesteuert werden.

Ein Beispiel: Du klickst im Datei-Explorer auf den Ordner `Bilder` . Dies ist gleichbedeutend mit dem Konsolenbefehl `cd Bilder`.

Via Konsole haben wir auch die Möglichkeit uns mit einem anderen Computer via SSH zu verbinden. Anschliessend können das verbundene Gerät mit Befehlen steuern. Du ahnst also wieso wir die Konsole in diesem ÜK benötigen: Wir möchten uns mit dem Hosting-Server verbinden und darauf die Befehle ausführen, um das CMS oder Plugins zu installieren.

#### Konsole öffnen
Um die Konsole im VS Code zu öffnen, gehe im Menü auf `View -> Terminal` (Ctrl + ¨). Nun öffnet sich das Terminal auf der unteren Seite des Editors. 

#### SSH-Test

Damit wir uns mit dem Server verbinden können, benötigen wir das SSH-Modul. Um zu testen, ob das Modul in deiner Konsole verfügbar ist, gib den Befehl `SSH` ein. Sofern das Modul installiert ist, solltest du eine ähnliche Rückmeldung wie diese erhalten:

```shell
PS C:\Users\user> ssh
usage: ssh [-46AaCfGgKkMNnqsTtVvXxYy] [-B bind_interface]
           [-b bind_address] [-c cipher_spec] [-D [bind_address:]port]
           [-E log_file] [-e escape_char] [-F configfile] [-I pkcs11]      
           [-i identity_file] [-J [user@]host[:port]] [-L address]
           [-l login_name] [-m mac_spec] [-O ctl_cmd] [-o option] [-p port]
           [-Q query_option] [-R address] [-S ctl_path] [-W host:port]
           [-w local_tun[:remote_tun]] destination [command]
```


## FTP-Programm

FTP bedeutet File Transfer Protocol. Es ist ein Kommunikationsprotokoll, um Dateien zwischen unterschiedlichen Computersystemen auszutauschen. Die Kommunikation findet nach dem Client-Server-Prinzip statt.

Das heißt, es gibt einen FTP-Client, der wie ein Datei-Manager funktioniert. Und es gibt einen FTP-Server, der dem FTP-Client Dateien zur Verfügung bzw. Speicherplatz für Dateien bereitstellt. Der FTP-Client kann Dateien auf dem FTP-Server ablegen, löschen oder herunterladen.

Der typische Anwendungsfall wäre die Dateiübertragung auf einen Webserver, der nicht nur aus einem HTTP-Server, sondern auch aus einem FTP-Server besteht. Per FTP können also HTML- und Bild-Dateien auf einen Webserver übertragen und verwaltet werden.

#### FTP-Programm installieren

* https://winscp.net/
* https://filezilla-project.org/ (Achtung: McAfee!)