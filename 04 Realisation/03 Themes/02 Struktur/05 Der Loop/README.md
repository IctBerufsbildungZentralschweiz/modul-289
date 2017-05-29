# Der Loop – das Herzstück eines WordPress-Themes
The Loop oder auch der Loop ist so gesehen das Herzstück von WordPress. Der Loop ist dafür zuständig, dass die Beiträge und die Inhalte einer Seite ausgegeben werden. Der Loop wird in der Datei index.php und in jeder Template-Datei eingebunden, die für die Ausgabe der Beiträge und Inhalte verantwortlich ist (z. B. page.php und single.php).
```php
<?php
while ( have_posts() ) : the_post();

    get_template_part( 'template-parts/content', 'page' );

    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;

endwhile; // End of the loop.
?>
```
Innerhalb der `while`-Schlaufe werden die Informationen zu den Seiten oder Beiträgen mit der `the_post()`-Funktion geladen und mit der `get_template_part()`-Funktion ausgegeben. 

####  have_posts()
Der Befehl `have_posts()` gibt einen Boolean zurück, ob mindestens ein Post vorhanden ist. Mit dem IF-Konstrukt wird also überprüft, ob der nachfolgende Code für die Anzeige der Inhalte überhaupt ausgeführt werden muss.

**Wichtig**: Wordpress unterscheidet bei dieser Überprüfung nicht zwischen Seiten und Beiträgen.

```php
    <?php
    if ( have_posts() ) :   // Code wird nur ausgeführt, wenn Posts vorhanden sind.
        
        ...

    else :                  // Code wird ausgeführt, wenn kein Post vorhanden ist.

        get_template_part( 'template-parts/content', 'none' );

    endif; ?>
```

Die Funktion hat noch eine zweite Aufgabe: Wird die Funktion in einem While-Konstrukt aufgerufen, gibt diese solange ein `TRUE` zurück, bis alle Posts durchlaufen wurden. Dazu muss die While-Schleife jedoch noch die Funktion `the_post()` (siehe unten) beinhalten.


### the_post()
Wird die Funktion `the_post()` in einer While-Schlaufe aufgerufen, werden die einzelnen Post nacheinander in die dafür vorgesehen `the_`-Funktionen geladen. Am Schluss der Schlaufe, stellt die Funktion noch den Rückgabewert der Funktion `have_posts()` auf `FALSE`, um die Schlaufe zu unterbrechen.

```php
    while ( have_posts() ) : // Gibt solange ein TRUE zurück, bis sämtliche POST durchlaufen wurden.
        
        the_post(); // Speichert die Informationen des Post pro Durchlauf in die daführ vorgesehnen 'the_'.Funktionen.

        get_template_part( 'template-parts/content', get_post_format() );

    endwhile;
```

## get_template_part()
Die verschiedenen Informationen sollen angezeigt werden, nachdem sie mit der `the_post();`-Funktion geladen wurden. Je nach Post-Typ (Seite, Beitrag) gibt es dabei unterschiedliche Anforderungen an die Struktur des Inhaltes. Aus diesem Grund können unterschiedliche Vorlagen für die Anzeige von Posts im Ordner `template-parts/` erfasst werden.

```text
.content        =>      Vorlage für die Anzeige von Beiträgen.
.content-none   =>      Vorlage für die Anzeige, falls kein Post vorhanden ist.
.content-page   =>      Vorlage für die Anzeige von Seiten.
.content-search =>      Vorlage für die Anzeige von Suchresultaten.
```

Mit der Funktion `get_template_part()` kann der Inhalt der Datei definiert werden, welcher an dieser Stelle eingefügt werden soll.

Die Funktion benötigt dazu zwei Parameter:
1. Name des allgemeinen Template-Parts.
1. Name der spezifischen Template-Part-Variation (none, page, search)

Zur Verdeutlichung einige Beispiele:
```php
    get_template_part( 'template-parts/content' );          => include 'tempaltes-parts/content.php'
    get_template_part( 'template-parts/content', 'page' );  => include 'tempaltes-parts/content-page.php'
    get_template_part( 'template-parts/content', 'none' );  => include 'tempaltes-parts/content-none.php'
```

### `the_`-Funktionen
Um auf die verschiedenen Informationen eines Post während einem Schlaufen-Durchlauf zuzugreifen zu könnenm, werden diese in sogenannte `the_`-Funktionen gespeichert.

| Funktion       | Gespeicherte Informationen |
|----------------|----------------------------|
| the_title()    | Titel des Posts            |
| the_content()  | Inhalt des Posts           |
| the_category() | Kategorie des Posts        |

Eine abschliessende Auflistung der `the_`-Funktionen befindet sich auf der offiziellen [Wordpress-Dokumentation](https://wordpress.org/search/the_).
