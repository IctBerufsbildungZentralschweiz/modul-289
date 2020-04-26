### Aufgabe: Erstes Bulma-Layout

#### Vorbereitung

1. Gehe dazu auf [https://codepen.io/pen/](https://codepen.io/pen/).
2. Binde Bulma in deinen Codepen ein indem du auf `Settings` -> `CSS` und Suche im Bereich `Add External Stylesheets/Pens` nach `Bulma` und wähle das gefundene CSS-Framework aus:

![Codepan Bulma](../02%20Aufgabe%20mit%20Bulma/res/codepen-bulm.jpg)

3. Kopiere folgenden HTML-Code in dein Codepen:

```html
<header>
  <div class="logo">
    <div>Logo</div>
  </div>
  <nav class="navigation">
    <div>Navigation</div>
  </nav>
  <div class="lead">
    <div>Lead</div>
  </div>
</header>
<main>
  <div class="content">
    Inhalte      
  </div>
  <div class="blog-entries">
    <div class="blog-entry">
      <div>Blogbeitrag 1</div>
    </div>
    <div class="blog-entry">
      <div>Blogbeitrag 2</div>
    </div>
    <div class="blog-entry">
      <div>Blogbeitrag 3</div>
    </div>
  </div>
</main>
<footer>
  <div class="address">
    <div>
      Adresse
    </div>
  </div>
  <div class="map">
    <div>
      Karte
    </div>
  </div>
</footer>
```

4. Kopiere folgenden CSS-Code in dein Codepen (für die Aufgabe musst du daran nichts mehr ändern):

```css
body {
  padding: 1rem;
}

.logo div,
.navigation div,
.lead div,
.content,
.blog-entry div,
.address div,
.map div{
  padding: 1rem;
  border-radius: 5px;
  text-align: center;
}

.logo div { 
  background: teal;
  color: white;
}

.navigation div {
  background: tomato;
  color: white;
}

.lead div {
  background: orange;
}

.content {
  background: green;
  color: white;
}

.blog-entry div {
  background: lightblue;
}

.address div,
.map div {
  background: aquamarine;
}
```

#### Aufgabe 1: Desktop
Passe nun das HTML soweit an, dass folgendes Layout daraus entsteht:

![Desktop-Layout](../02%20Aufgabe%20mit%20Bulma/res/Web%201920%20–%201.jpg)

#### Aufgabe 2: Tablet
Sorge nun dafür, dass sich das Layout wie folgt auf Tablets anpasst:

![Tablet-Layout](../02%20Aufgabe%20mit%20Bulma/res/iPad%20–%201.jpg)

Tipp: Für die Blog-Posts solltest du dir multiline `columns` anschauen.

#### Aufgabe 3: Mobile
Sorge nun dafür, dass sich das Layout wie folgt auf Smartphones anpasst:

![Smartphone-Layout](../02%20Aufgabe%20mit%20Bulma/res/iPhone%206-7-8%20–%201.jpg)

Tipp: Damit du das Grid auch auf mobilen Geräten nutzen kannst, schaue dir die `is-mobile` Klasse genauer an.

#### Aufgabe 4: Container
Umschliesse nun sämtliche HTML-Tags mit dem Element `<div class="container">...</div>`. Was hat sich verändert und wozu könnte diese Klasse gut sein?