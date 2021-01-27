# Frontend: Bilder ins Plugin einfügen

Um die Bilder nun in Deiner Frontend-Komponente anzuzeigen. Kannst du die For-Schlaufe auf deiner Seite, Partial oder Layout einfach ergänzen:

```html
<ul>
    {% for record in __SELF__.records %}
        <li>
            {{ record.portrait.path }}
            <strong>{{ record.name }}</strong><br>
            {{ record.email }}
        </li>
    {% endfor %}
</ul>
```

Dies Ausgabe davon wäre ungefähr:

```html
<ul>
    {% for record in __SELF__.records %}
        <li>
            https://url-deiner-website/storage/upload/max-muster.jpg
            <strong>Max Muster</strong><br>
            max.muster@ict-bz.ch
        </li>
    {% endfor %}
</ul>
```

Die Variable enthält also nicht die eingentliche Bilddatei, sondern nur den Pfad dorthin.

Damit das Bild effektiv angezeigt wird, müssen wir den ausgegebenen Pfad also entsprechend noch in einem `img`-Tag einbinden und den Output aus `{{ record.portrait.path }}` ins src-Attribute einfügen:

```html
<ul>
    {% for record in __SELF__.records %}
        <li>
            <img src="{{ record.portrait.path }}">
            <strong>{{ record.name }}</strong><br>
            {{ record.email }}
        </li>
    {% endfor %}
</ul>
```