# Tests & quality

## How the tests work (test/index.js, mocha + power-assert)

A single golden table: `token → expected CSS`. Each entry compiles

```scss
@import "../index";
.foo { @include smcss(<token>); }
```

with dart-sass (legacy `sass.render`, bluebird-wrapped), minifies both actual
and expected with **csso**, and compares strings. ~530 table entries. `bin/release`
refuses to publish unless tests pass.

Strengths:
- Tests the *parser path* (token dispatch), not just the mixins.
- Minified comparison makes expectations readable as plain CSS.
- Very broad value coverage for `abs-*`/`fix-*` (every two-part combination is
  spelled out — ~150 entries).

## Coverage gaps

- **Class emission is untested**: only `smcss()` inline includes are checked;
  `smx`/`sm`/`smx-direct`/`smx-amp` (the exporters that build dist/sm.css) and
  `smcss-export` have no tests, nor does the ordering contract
  (`fluid` after `hsplit`, `.fluid` before `.min-h100`) that lives only in
  demos/sm.sass comments.
- No test that `demos/sm.sass` compiles / that dist output matches committed
  dist (drift between src and committed dist/sm.css would go unnoticed until
  release).
- Untested token families: `sticky`/`sticky-*`? — present (yes, tested);
  missing: `fsi`, `lsN` negative forms beyond samples, `expand` only 2 samples,
  `gridN` only 3/4, padding-group `pgN/piN` single sample each. Sampling is
  reasonable for a generator, but the *generator boundaries* (w0, w1200,
  br999) are not asserted.
- No CI config in the repo (tests run only via bin/release or manually).

## Notable "expected" entries that are questionable CSS

(The tests lock these in — they document current behavior, not correctness.)
- `pa` → `padding: auto` — not a valid CSS value; browsers drop it.
- `outline` → `outline: 1px currentColor` — no outline-style, so nothing
  renders in most browsers.
- `clearfix`/`floats` include `*zoom: 1` (IE6/7 star hack) — dead weight in 2026.
- `flex-fluid`/`fluid` include `-ms-flex-preferred-size: 0` (IE10/11).

## bugs/

- `bugs/button_block.html` — button display repro.
- `bugs/ie11-flow/` — 27 page screenshots + repro of an IE11 flow bug; archival.

Related: [[04-class-inventory]], [[07-observations]]
