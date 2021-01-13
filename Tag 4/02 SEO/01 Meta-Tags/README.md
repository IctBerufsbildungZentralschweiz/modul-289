# Meta-Tags
Metainformationen sind Information über Informationen. Somit geben die Meta-Tags Information über die Informationen auf einer Website.

Die beiden wichtigsten sind dabei die der Titel und die Description:

### Title-Tag - Seitentitel

`<title>Das ist der Titel der Website</title>`

* ist ein Rankingfaktor
* wird im Suchergebnis als Titel angezeigt

Der Seitentitel erscheint im Tab:

![Titel im Tab](res/01.png)

Und im Suchresultat:

![Titel im SERP](res/02.png)

### Meta-Description

`<meta name="description" content="Hier steht die Meta-Description."> `

* kurze Beschreibung der Seite
* erscheint in den SERPs unter Title und URL

Die Meta-Description erscheint dann beim Suchresultat:

![Description im SERP](res/03.png)

#### Umsetzung im October CMS

```html
<title>{{ this.page.meta_title }}</title>
<meta name="description" content="{{ this.page.meta_description }}">
```