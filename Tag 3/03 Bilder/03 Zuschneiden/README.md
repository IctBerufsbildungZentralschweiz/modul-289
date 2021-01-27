# Bilder in October CMS zuschneiden

Bei Plugins mit Dateianhängen kann ein Bild mit der `thumb()` Methode ganz einfach zugeschnitten werden.

```twig
{#  Bild auf 200 Pixel Breite oder 300 Pixel Höhe zuschneiden. 
    Das Seitenverhältnis des Bildes bleibt bestehen. #}
item.image.thumb(200, 300)

{#  Bild auf genau 200x300 Pixel zuschneiden. 
    Das Seitenverhältnis des Bildes bleibt *nicht* bestehen.
    Das Bild wird ggf. verzerrt. #}
item.image.thumb(200, 300, 'exact')

{#  Bild auf genau 200x300 Pixel zuschneiden. 
    Das Seitenverhältnis des Bildes bleibt *nicht* bestehen.
    Das Bild wird nicht verzerrt.  #}
item.image.thumb(200, 300, 'crop')
```

Die resultierende Bild-URL kann ganz einfach in einem `<img>` Tag verwendet werden:

```twig
<img src="{{ item.image.thumb(200, 300) }}" alt="">
```

## Plugins mit mehreren Bildern

Bei manchen Plugins, wie z. B. `RainLab.Blog`, können mehrere Bilder an ein Model angehängt werden. Deshalb muss aus der Sammlung von Bildern vor dem Zuschneiden das Erste (`.first()`) ausgewählt werden.

```twig
{# RainLab.Blog #}
post.featured_images.first().thumb(200, 300)
```

Alternativ können mit einer for-Schleife auch alle Bilder nacheinander ausgegeben werden:

```twig
{% for image in post.featured_images %}
    <img src="{{ image.thumb(200, 300) }}">
{% endfor %}
```

## Vorhandene Dateianhänge ausfindig machen

Es ist nicht immer dokumentiert, welche Dateianhänge bei einem Plugin vorhanden sind.
Diese können jedoch ganz einfach ausfindig gemacht werden, in 
dem das entsprechende Model geöffnet wird.

Die unter `$attachOne` (einzelne Anhänge) und `$attachMany` (mehrere Anhänge) aufgelisteten Namen entsprechen den vorhandenen Dateianhängen.

Hier ein Beispiel Model:

```php
<?php namespace ICT\BZ\Models;

class Product extends Model
{
    public $attachMany = [
        'detail_images' => 'System\Models\File',
    ];
    public $attachOne = [
        'main_image'    => 'System\Models\File',
        'social_image'  => 'System\Models\File',
    ];
}
```

Dieses Model stellt drei Anhänge zur Verfügung:

```twig
{# Alle Detailbilder (attachMany) #}
{% for image in product.detail_images %}
   <img src="{{ image.thumb(200, 200) }}" alt="">
{% endfor %}

{# Hauptbild #}
<img src="{{ product.main_image.thumb(200, 200) }}">

{# Social Media Bild #}
<img src="{{ product.social_image.thumb(200, 200) }}">
```