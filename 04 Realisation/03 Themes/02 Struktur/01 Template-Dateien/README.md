# Welche Template-Dateien gibt es?
Die Template-Dateien lassen sich in drei Gruppen aufteilen. Zum einen sind das Dateien, die zum Einsatz kommen, wenn ein bestimmter Zustand abgefragt wird: Auflistung der Suchergebnisse, Ansicht der einzelnen Beiträge etc. Die andere Gruppe sind Template-Dateien, die lediglich dazu dienen, den Code auszulagern (z. B. header.php für den Kopfbereich) und somit auch die Pflege des Themes erleichtern. In die dritte Gruppe fallen alle restlichen Dateien, wie z.B. die screenshot.png, die lediglich dazu dient, im Admin-Bereich die Auswahl zu erleichtern. Hier folgt eine Auflistung möglicher Template-Dateien:

## Template-Dateien für bestimmte Zustände
* **index.php** – die Hauptdatei eines Themes. Diese Datei muss vorhanden sein.
* **style.css** – die Stylesheet-Datei. Diese Datei muss vorhanden sein.
* **category.php** – die Datei für die Ausgabe der Kategorieübersicht. Diese Datei ist optional, wenn sie fehlt, wird die index.php eingesetzt.
* **comments.php** – das Kommentar-Template. Diese Datei ist eigentlich optional. Wenn sie nicht vorhanden ist, wird die Kommentardatei aus dem Default-Theme genutzt. Falls man ein eigenes Theme erstellt, ist es daher empfehlenswert, auch die comments.php zu erstellen.
* **page.php** – die Datei ist zuständig für die Ausgabe der Seiten (Pages). Diese Datei ist optional, wenn sie fehlt, wird die index.php eingesetzt.
* **single.php** – diese Datei ist zuständig für die Ausgabe eines Beitrags in der Einzelansicht. Diese Datei ist optional, wenn sie fehlt, wird die index.php eingesetzt.
* **archive.php** – diese Datei ist zuständig für die Ausgabe des Archivs. Diese Datei ist optional, wenn sie fehlt, wird die index.php eingesetzt.
* **search.php** – mit dieser Datei wird die Ausgabe der Suchergebnisse beeinflusst. Diese Datei ist optional, wenn sie fehlt, wird die index.php eingesetzt.
* **404.php** – wenn WordPress einen Beitrag nicht finden kann, wird eine Meldung ausgegeben. Ist die 404.php vorhanden, greift WordPress auf diese Datei zu. Auch diese Datei ist optional, wenn sie fehlt, wird die index.php eingesetzt.
* **author.php** – steuert die Ausgabe, wenn nach einem bestimmten Autor gesucht wird. Diese Datei ist optional, wenn sie fehlt, wird die index.php eingesetzt.
* **date.php** – steuert die Ausgabe, wenn nach einem bestimmten Zeitabschnitt gesucht wird. Diese Datei ist optional, wenn sie fehlt, wird die index.php eingesetzt.
* **image.php** – ist zuständig für die Anzeige der einzelnen Bilder, wenn die Galerie-Funktion von WordPress zum Einsatz kommt.

## Template-Dateien mit Auslagerungsfunktion
* **header.php** – hier wird der Kopfbereich der Seite ausgelagert.
* **sidebar.php** – hier wird die Seitenleiste (Sidebar) der Website ausgelagert.
* **footer.php** – hier wird der Fussbereich der Website ausgelagert.

## Sonstige Template-Dateien
Die Datei `functions.php` ist eine zentrale Hilfsdatei für das komplette Theme. Man kann sich die Datei als persönlichen Template-Buttler vorstellen, welcher beim Laden des Templates sämtliche Funktionen vorbereitet, damit die Seite erstellt werden kann. 

Hier ein kurzer Auszug von zwei Funktionen:

| Funktion           | Definition                                                           |
|--------------------|----------------------------------------------------------------------|
| register_nav_menus | Registriert die Menüs, welche im Tempalte   verwendet werden können. |
| THEMENAME_scripts  | Lädt die hinterlegten Scripts und Styles in den Template-Head.    |

#### `index.php` - Startseite
Das Zusammenspiel sämtlicher Dateien, sieht dann wie folgt aus:

```php
<?php
/**
 * The main template file
 * ...
 * 
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php
        if ( have_posts() ) :

            if ( is_home() && ! is_front_page() ) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>

            <?php
            endif;

            /* Start the Loop */
            while ( have_posts() ) : the_post();

                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part( 'template-parts/content', get_post_format() );

            endwhile;

            the_posts_navigation();

        else :

            get_template_part( 'template-parts/content', 'none' );

        endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
```