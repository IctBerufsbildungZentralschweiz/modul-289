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

Bei manchen Plugins, wie z. B. `RainLab.Blog`, können mehrere Bilder an ein Model angehängt werden. Deshalb muss aus der Sammlung von Bildern vor dem Zuschneiden das Erste (.first) ausgewählt werden.

```twig
{# RainLab.Blog #}
post.featured_images.first().thumb(200, 300)
```

Die resultierende Bild-URL kann ganz einfach in einem `<img>` Tag verwendet werden:

```twig
<img src="{{ post.featured_images.first().thumb(200, 300) }}" alt="">
```