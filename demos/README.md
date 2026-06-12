Notes on making demos

## Viewing

Each demo is a standalone `*.html` file — open it directly in a browser.
The demos index (`index.php`) needs PHP; serve from the repo root:

    $ php -S localhost:8000

then visit http://localhost:8000/demos/

## Making a new demo

Copy a nearby demo and strip it down. Two ways to get the styles:

* local build — `<link href="../demo.css" rel="stylesheet">`
  (`npm run build` regenerates it from `demo.sass`)
* unpkg — as in [flex/flex-row-center-left.html](flex/flex-row-center-left.html):

      <link href="https://unpkg.com/@vbarbarosh/smcss@1.4.0/dist/reset.css" rel="stylesheet">
      <link href="https://unpkg.com/@vbarbarosh/smcss@1.4.0/dist/sm.css" rel="stylesheet">

A directory appears in the demos index as soon as it contains at least one
`*.html` file.

## Images

If you need an image in one of your demos feel free to use

* https://unsplash.it/200?random=N
* `images` directory
