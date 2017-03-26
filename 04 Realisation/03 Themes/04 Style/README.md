# Style (CSS)
Grundsätzlich gibt Wordpress bereits eine Datei vor, in der das komplette CSS erfasst werden kann. Somit wird die Datei `style.css`, auf der obersten Ordner-Ebene, automatisch eingebunden.

## Benutzerdefinierte Style-Sheets
Sollen noch mehr Style-Sheets eingebunden werden, können diese einfach in der Datei `functions.php` miteingebunden werden. Dazu kann die gewünschte Datei einfach in der themespezifischen Funktion `THEMENAME_scripts()` eingefügt werden.

```php
function testtheme_scripts() {
	...

	wp_enqueue_style( 'customized', get_template_directory_uri() . '/customized.css' );
	
	...
```

Anschliessend wird die CSS-DAtei automatisch im Head-Bereich der Seite geladen.