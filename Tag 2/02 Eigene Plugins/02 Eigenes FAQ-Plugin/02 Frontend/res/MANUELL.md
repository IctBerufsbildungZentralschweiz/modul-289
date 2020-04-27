#### Schritt 1: Componente erstellen


Dazu erstellen wir eine Plugin-Komponente:
1. Geht dazu in euer Plugin-Ordner und erstellt den Ordner `components/`. 
2. Erstelle darin eine PHP-Datei mit dem Namen eurer Komponente.
3. Kopiere den [Vorlagen-Code](res/ComponentName.php) in die PHP-Datei und passe die Komponentenbezeichnung, den Autor-Namespace und den Plugin-Namespace entsprechend an.
4. Erstelle einen Ordner der gleich heisst wie deine Komponente in Kleinbuchstaben und erstelle darin die Datei `default.htm`. Kopiere darin wiederum den Code aus dieser Datei.

Für unser FAQ-Plugin bedeutet das also:
1. Den Ordner `components/` im Plugin-Ordner erstellen.
2. Wir wollen ja mit der Komponente eine Liste aller Fragen (und den dazugehörigen Fragen) ausgeben. Also erstellen wir im Ordner eine Datei mit der Bezeichnung: `QuestionsList.php`
3. Nun kopieren wir den Vorlagen-Code und passen diesen entsprechend an. Das Ergebnis daraus sollte dann folgendermassen aussehen:

```php
<?php namespace Instruktor\Faq\Components;

use Cms\Classes\ComponentBase;

class QuestionsList extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Bezeichnung der Komponente',
            'description' => 'Beschreibung der Komponente'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
}
```

4. Und nun erstellen wir noch die dazugehörige Ansicht mit dem Ordner `questionslist/` und der Datei `default.htm` mit dem dazugehörigen Vorlagen-Code.


#### Schritt 2: Komponente registrieren
Damit unser Plugin nun über die Existenz der Komponente Bescheid weiss, müssen wir die Komponente registrieren. Öffne dazu die Datei `Plugin.php` in deinem Plugin-Ordner und ergänze die Funktion `registerComponents()` mit deiner Komponente in dem du den Namespace zur Komponente hinterlegst und der Komponente einen eindeutigen Namen gibst:

```php
public function registerComponents()
{
    return [
        '\InstruktorNamespace\PluginNamespace\Components\ComponentName' => 'componentName'
    ];
}
```

Oder in unserem Fall:

```php
public function registerComponents()
{
    return [
        '\Instruktor\Faq\Components\QuestionsList' => 'questionsList'
    ];
}
```

##### Static Pages
Damit die Komponenten nicht nur in den CMS Pages verfügbar sind, sondern auch in den Static Pages, muss die Komponente in der Datei `Plugin.php` noch speziell registriert werden. Füge dazu die folgende Funktion hinzu:

```php
public function registerPageSnippets() {}
```

Der Rückgabewert dieser Funktion ist wiederum gleich wie oben:

```php
public function registerPageSnippets() 
{
    return [
        '\Instruktor\Faq\Components\QuestionsList' => 'questionsList'
    ];
}
```

Nach diesem Schritt kannst du auf einer Static Page auf Snippets klicken und dort solltest du die Komponente sehen und einbinden können:

![Komponente auf Static Page einbinden](res/01.jpg)


#### Schritt 3: Abfrage starten
Nun können wir die Dateien aus der Datenbank abfragen. Gehe dazu in deine Komponente: `plugins/instruktor/faq/components/QuestionsList.php`.

Als erstes entscheiden wir, mit welcher Variable unsere Werte aus der Datenbank an die Anzeige übergeben werden soll. Diese Variable definieren wir als `public` in der Klasse.

In unserem Fall eignet sich die Variable `$questions`:

```php
class QuestionsList extends ComponentBase
{
    public $questions;
    ...
}
```

Anschliessend erstellen wir eine `onRun`-Methode. Diese wird automatisch vom October CMS beim Laden dieser Komponente ausgeführt. Das Ziel dieser Methode ist es, die gewünschten Daten in die oben definierte Variable zu speichern.


```php
class QuestionsList extends ComponentBase
{
    public $questions;
    ...
    public function onRun() {
        $this->questions = /* Hier ist unsere Datenbankabfrage */
    }
}
```

Nun müssen wir nur noch die gewünschten Daten abrufen in dem wir den Namespace zum Model angeben und die statische Funktion `get()` darauf aufrufen:


```php
class QuestionsList extends ComponentBase
{
    public $questions;
    ...
    public function onRun() {
        $this->questions = \Instruktor\Faq\Models\Question::get();
    }
}
```

**Geschafft**: Nun werden die Daten aus der Datenbank geladen und in die richtige Variable gespeichert. Mehr Programmieren müsst ihr für den Moment nicht :)

#### Schritt 4: Daten anzeigen
Nun geht es noch darum die Daten auf eurer Website anzuzeigen. Dazu könnt ihr in die Datei `questionslist/default.htm` wechseln. Dieser übergibt die `onRun`-Funktion sämtliche `public`-Variablen, die wir nun anzeigen können.

Die `public`-Variablen können dazu in Twig mit ` __SELF__.variable` aufgerufen werden. Also in unserem Fall: ` __SELF__.questions`

Die Daten können wir nun einfach via Twig-For-Schleife ausgeben:

```php
{% for item in __SELF__.questions %}
    {{ item.question }}
    {{ item.answer | raw }}
{% endfor %}
```