# Installation

Nachdem wir nun nun die Verbindung mit dem Server aufgebaut haben, können wir mit der Installation von October beginnen.

[Hier geht's zur offiziellen Installationsanleitung.](https://docs.octobercms.com/2.x/setup/installation.html)

### Datenbank

Bevor wir mit der Installation starten können, benötigen wir noch eine Datenbank. Diese lässt sich einfach über das Hosting-ControlPanel erstellen. Die dazugehörigen Benutzerdaten findest Du ebenfalls im Moodle.

Hier gelangst Du zum ControlPanel von Cyon: [https://my.cyon.ch/](https://my.cyon.ch/)

#### Datenbank erstellen

Wechsle nun im Reiter «Datenbank» auf den Punkt «MySQL»:

![Menüpunkt für Datenbanken](res/01.png)

Dort kannst du anschliessend eine Datenbank erstellen. Der Prefix ist dabei bei allen gleich: `hostinguser_`. Wenn ihr die Datenbank nun nach eurem Gruppennamen benennt, entsteht folgender Datenbank-Name: `hostinguser_gruppename`.

![Bezeichnung der Datenbank mit Prefix](res/02.png)

Nach dem Hinzufügen der Datenbank werden euch die Benutzerdaten für die Datenbank im blauen Balken am oberen Bildschirmrand angezeigt:

![Benutzerdaten für Datenbank](res/03.png)

Nun sind wir bereit, das October CMS zu installieren!

### Subdomain erstellen

Damit jedes Projekt über eine individuelle URL erreichbar ist, erstellen wir für jedes Projekt eine separate Subdomain. Wechsle nun im Reiter «Webhosting» auf den Punkt «Subdomain»:

![Subdomain einrichten](res/04.png)

Wählt anschliessend eine Subdomain und verweist bei Verzeichnis auf den vorher erstellen Projektordner (Achtung: Der Pfad in den `public_html` müsst ihr nicht nochmal eingeben):

![Subdomain erstellen](res/05.png)

### SSL-Zertifikat aktivieren

Damit unsere Website später durch `HTTPS` geschützt ist, müssen wir im Reiter «Sicherheit» unter «Kostenlose SSL-Zertifikate» das SSL-Zertifikat der erstellen Subdomain noch aktiveren.

![SSL-Zertifikat erstellen](res/06.png)