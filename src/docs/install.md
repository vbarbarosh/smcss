# Installation

```
npm i vbarbarosh/smcss

echo -e "@import 'smcss/index'\n.foo\n\t@include sm('w100 h100 red')" > styles.sass
sass -I node_modules styles.sass > styles.css
```
