# Observations & opportunities

Findings only — nothing here has been changed.

## Staleness / drift

1. **README + demos/README pin unpkg at `@1.4.0`** while the package is at
   1.5.1 (README.md:22-23). Either pin the current version at release time
   (bin/release could sed it) or drop the pin.
2. **`index.sass` header comment is obsolete**: it documents the ruby-sass /
   sass-css-importer / global-autoprefixer workflow (src/smcss/index.sass:1-8);
   the actual build is dart-sass + postcss via npm scripts.
3. **`src/templates/app/`** starter uses autoprefixer ^7 and dependency
   `"smcss": "github:vbarbarosh/smcss"` (pre-scope name); nothing references
   this template — candidate for refresh or removal.
4. `src/templates/sm.sass` (curated small export) is not wired to any build;
   its top has a stub `@mixin smx` with body `// true`.
5. `src/docs/reference/toggle.php` has no corresponding module in src/smcss.
6. `proto/` and `bugs/ie11-flow/` are historical; fine to keep, but they are
   the bulk of repo weight (screenshots, vendored jquery/vue).

## Deprecated SASS features (future breakage)

7. The whole tree uses **`@import`**, deprecated in dart-sass (slated for
   removal in Dart Sass 3.0), and **`/` division** in `eval-size.sass` and
   `container/grid.sass` (deprecated in favor of `math.div`). Compiles today
   (sass ^1.72 with warnings); a module-system (`@use/@forward`) migration is
   the single biggest maintenance item on the horizon.

## Correctness nits (locked in by tests — see [[06-tests-and-quality]])

8. `pa` emits `padding: auto` (invalid CSS, silently dropped by browsers).
9. `outline` emits `outline: 1px currentColor` with no style keyword — renders
   nothing; probably intended `1px solid currentColor` like `border`.
10. IE-era artifacts still shipped: `*zoom: 1` star hack in clearfix/floats,
    `-ms-flex-preferred-size` in fluid, `-moz-scrollbars-none`.

## Size / output

11. `dist/sm.css` is 332 KB (38k lines) because sizes are brute-force
    enumerated (`w0..w1200`, `h0..h1200`, `min/max 0..500`, `br1p..br100p`,
    `lh0..lh100`). No minified build is published (csso is already a
    devDependency — a `dist/sm.min.css` would be nearly free). For prototyping
    this is acceptable; gzip likely reduces it drastically due to repetition.
12. Enumerations live as pasted-out token strings in `demos/sm.sass` with the
    generating `echo w{0..1200}` command kept in comments — a SASS `@for` over
    `smx` could replace the paste, at the cost of losing the literal list.

## Maintenance friction

13. **Five touch-points per new class family**: module mixin, 944-line
    parser if/else chain, demos/sm.sass export list, test table, reference PHP
    page. The parser chain (~440 branches) is the most fragile — a map of
    token→mixin isn't possible in pure SASS for parameterized tokens, but
    keyword tokens (the majority) could dispatch via a SASS map +
    `mixin-exists`/`meta.apply` to shrink it substantially.
14. Ordering contracts (fluid vs hsplit vs min-h100) are enforced only by
    comment + manual ordering in demos/sm.sass; nothing tests them.

## Ideas already seeded in the repo

15. `demos2/backgrounds` README sketches `currentColor`-based background
    patterns (hatch etc.) — natural next module.
16. demos/sm.sass legend mentions `h-p5` (hover:) and `child-p5` (children)
    prefixes as a possible variant grammar — never implemented.
17. Margin groups predate CSS `gap`; a note in the docs comparing `mgN/miN`
    with `gap` (and when each applies — mg works on non-flex blocks) would
    modernize the story without changing the API.

Related: [[02-architecture]], [[03-build-and-distribution]], [[06-tests-and-quality]]
