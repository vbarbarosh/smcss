# Architecture & source map

> **Addendum 2026-07-14:** the module system migration landed since this was
> written ([audit](audit-2026-07-13.md) A2): `@import` is now `@use`/`@forward`
> throughout, `index.sass` forwards only `sm` and `smx` (the `smcss()` parser
> and module mixins are internal), `helper/` is renamed `helpers/`, the
> `helper/index` and `parser/index` aggregators are gone, `src/templates/` is
> deleted, and `proto/` is renamed `research/`. The dispatch-chain description
> below is otherwise still accurate.

## Layers

```
index.sass                      → @import src/smcss/index (npm main)
src/smcss/
  index.sass                    → imports all modules + helper + parser + container/grid
  <module>.sass  (~35 files)    → one @mixin per token family (pure mixins, no CSS output)
  parser/
    smcss.sass                  → @mixin smcss($expr): 944-line if/else chain (~440 branches)
                                  mapping token strings → module mixins
    eval-size.sass              → shared size grammar: a/i/w/h/0, Np(%), Nn(-px), Nm(em/10), N(px)
    sm.sass                     → @mixin sm('a b c')      include declarations inline
                                  @mixin smx('a b c')     emit .a{}, .b{} classes
                                  smx-direct (> .a), smx-amp (&.a) variants
    smcss-export.sass           → older single-token class exporter
  helper/
    str-split.sass, to-number.sass → hand-rolled SASS string→list / string→number
  container/grid.sass           → grid3/grid4… (.colN percentage widths), imported
  experimental/                 → cage, flow, table, transition + 3 CSS files; NOT imported
```

## The parser is the heart

`smcss($expr)` slices the token into prefixes (`$a1..$a7`) and suffixes
(`$b1..$b7`) and dispatches: exact matches for keyword tokens
(`flex-row-center`, `xbutton`), prefix matches for parameterized ones
(`$a2 == br` → `br($b2)`, `$a1 == w` → `w($b1)`). All numeric parsing funnels
through `eval-size`.

Consequences:

- **Every new token must be added in two places**: its module mixin *and* the
  dispatch chain in `parser/smcss.sass` (plus the export list in
  `demos/sm.sass` if it should appear in `dist/sm.css`, plus the test table,
  plus the reference PHP page). Five touch-points per class family.
- Match order matters (longest prefixes checked via exact `==` first).
- SASS indentation quirks are worked around with in-code comments (author
  notes "the syntax of SASS is so weird…").

## Module conventions

- One file per CSS concern, named after the property (`margin.sass`,
  `display-flex.sass`, `position-abs.sass`).
- Mixins are named exactly like the emitted class (`@mixin mt($size)` → `.mt5`).
- Files carry design commentary (e.g. `margin-group.sass` documents the three
  possible child-gap selectors and why `:not(:last-child)` was chosen — it
  survives wrapping).
- Specificity/ordering constraints are encoded by import/export order, not
  selectors: `.shrink/.grow/.fluid` must be emitted *after* `hsplit/vsplit` to
  override their `> *` rules; `.fluid` before `.min-h100` (commit 68cfde4).

## Other roots

- `reset/reset.css` — Meyer reset v2.0 + additions; copied verbatim to dist.
- `src/templates/app/` — starter project skeleton (old: autoprefixer ^7,
  dep `smcss: github:vbarbarosh/smcss` under the pre-scope name).
- `src/templates/sm.sass` — a smaller curated export list (alternative to
  demos/sm.sass); not referenced by the build.
- `proto/` — pre-1.0 HTML experiments (flow, hsplit, modal, gallery…), with
  vendored jquery/vue; historical.
- `bugs/` — bug repros: `button_block.html`, `ie11-flow/` (screenshots of an
  IE11 flow-layout bug).

Related: [[03-build-and-distribution]], [[07-observations]]
