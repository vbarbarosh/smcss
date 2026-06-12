# Backgrounds

Background patterns for demos and prototypes.

## Hatch

Diagonal stripes drawn from `currentColor`, so the pattern picks up the text
color of the element it is applied to:

```css
.bg-hatch {
    background: repeating-linear-gradient(135deg, rgba(from currentColor r g b / 0.2) 0 1px,transparent 0 5px);
}
```

```html
<div class="h100 bg-hatch"></div>
```

Useful for marking reference areas — e.g.
[demos/flex/flex-row-center-left.html](../../demos/flex/flex-row-center-left.html)
hatches the container behind each `flex-row-*` sample.

## Checkerboard

Already in smcss as the `checkerboard` class — a gray checker pattern, useful
behind images with transparency:

```html
<body class="checkerboard">
```

## Resources

- https://www.magicpattern.design/tools/css-backgrounds
- http://www.patternify.com/
