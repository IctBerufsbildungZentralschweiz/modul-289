# Script und Style Platzhalter

Viele Plugins möchten eigenes JavaScript oder CSS in ein Theme einfügen. Dafür müssen die 
beiden Platzhalter `{% styles %}` (CSS) und `{% scripts %}` an einer passenden
Stelle im Theme platziert werden.

Ebenfalls wird für einige Plugins die jQuery-Biliothek und das October JavaScript-Framework benötigt.

Wir empfehlen folgende Platzierungen:

## Styles

Die Styles sollten immer im `<head>` des Dokuments stehen. Der `{% styles %}` Platzhalter
kann also idealerweise im `head.htm` Partial platziert werden, das auf allen Layouts
eingebunden wird.

```twig
<meta charset="UTF-8">
<meta name="author" content="EURE NAMEN">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ this.page.title }}</title>

{# ergänzen im head.htm Partial #}
{% styles %}
```

## Scripts

Die Scripts sollten für eine gute Seitenperformance so spät wie möglich geladen werden.
Idealerweise werden diese direkt vor dem schliessenden `</body>` Tag auf jedem
Layout oder einem `footer.htm` Partial eingefügt.

```twig
{# in euren Layouts oder einem footer.htm Partial #}
{% scripts %}
</body>
</html>
```

## jQuery und October Framework

Einige Plugins benötigen zudem die jQuery-Bilbiothek sowie das October CMS JavaScript framework.
Um dieses einzubinden, kann folgendes `<script>` Tag im `head.htm` Partial ergänzt werden:

```twig
<meta charset="UTF-8">
<meta name="author" content="EURE NAMEN">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ this.page.title }}</title>
{% styles %}

{# ergänzen im head.htm Partial #}
<script src="{{ ['@jquery', '@framework'] | theme }}"></script>
```