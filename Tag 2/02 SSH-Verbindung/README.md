# SSH-Verbindung

Damit wir auf dem Server die Befehle für die October-Installation ausführen können, müssen wir uns zunächst mit diesem via SSH (Secure Shell) verbinden.

Die für die Verbindung benötigten Zugangsdaten findet ihr im Moodle. Öffne anschliessend die Konsole im VS Code und gib folgenden Befehl ein, um die SSH-Verbindung zum Server aufzubauen:

```shell
# ssh benutzername@server
ssh m289gX@m289gX.kurse.ict-bz.ch
```
Eventuell fragt dich dein Computer, ob du dem Server zukünftig vertrauen möchtest. Du kannst diese Meldung mit `yes` quittieren.

```shell
# Mit "yes" + Enter bestätigen
The authenticity of host 'm289gX.kurse.ict-bz.ch (0.0.0.0)' can't be established.
ECDSA key fingerprint is SHA256:vhobukhkbcnnbgdlkohebychfwkontzwq.  
Are you sure you want to continue connecting (yes/no/[fingerprint])? 
```
Anschliessend kannst du das Passwort eingeben:

```shell
m289gX@m289gX.kurse.ict-bz.ch's password: 
```

**Achtung**: Bei der Eingabe des Passworts siehst Du keine Zeichen - du musst also blind schreiben.

### Navigieren

Nach der erfolgreichen Verbindung mit dem Server sind wir nun im Home-Verzeichnis gelandet. Das Hosting ist so eingestellt, dass sämtliche Aufrufe der Domain `m289gX.kurse.ict-bz.ch` ins `/web`-Verzeichnis geleitet werden. Um das Verzeichnis zu betreten, kann der `cd` (change directory) Befehl verwendet werden:

```shell
cd web
```

Anschliessend sollte die letzte Linie der Konsole so aussehen: `m289gX@dedi5011:[~/web]:`. 

Mit dem `ls` (list directory contents) Befehl kannst du überprüfen, welche Dateien und Ordner bereits existieren:

```shell
ls
```
