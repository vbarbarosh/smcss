# Coding conventions

Conventions for working on this repo. See also the `## Development` section
in [README.md](README.md) for the build/test/release scripts.

## Sass

### Module system

- The public API of the package is **`sm()` and `smx()`, nothing else**:
  `src/smcss/index.sass` is a single `@forward 'parser/sm' show sm, smx`.
  The `smcss()` parser, `smx-direct`/`smx-amp`, module mixins, and helpers
  are internal — `@use` them by path when hacking on the library itself
  (tests use `parser/smcss` directly).
- Internal `@use` is always `as *`, and calls are bare:
  `@include db`, `@include rel`, `to-number($x)` — never `display.db` or
  the `to-number.to-number($x)` stutter. All mixin names are unique across
  modules, and sass errors loudly on real conflicts.
- Exception: side-effect-only loads where no member is referenced use plain
  `@use` — e.g. `demos/demo.sass` loads `sm.sass` just to emit the classes;
  `as *` there would falsely imply names are consumed.
- Sass built-in modules always keep their namespace: `string.slice(...)`,
  `math.div(...)`, `map.get(...)` — those prefixes carry information.
- `@use`/`@forward` paths use single quotes: `@use 'helpers/to-number' as *`.
- All `@use` lines sit at the very top of the file (above any comments),
  sorted alphabetically by path, followed by one blank line.
- Internal consumers of the public API dogfood it: `demos/sm.sass` starts
  with `@use '../index' as *` and calls `smx('...')` — it does not reach
  into parser files by path.
- Compatibility floor is dart-sass 1.33 (documented in README). Avoid
  syntax newer than that in `src/` — e.g. the new
  `if(sass(...): ...; else: ...)` form is off limits; write `@if`/`@else`
  instead.

## JavaScript

- String literals use single quotes. When a string embeds code that itself
  needs quotes, use double quotes inside rather than escaping:
  `'@use "../index" as *;'` — never `'@use \'../index\' as *;'` and never
  switching the outer quotes.
- Imports (`require` blocks) are sorted alphabetically; insert new imports
  at their alphabetical position instead of appending.

## General

- Repetition is acceptable; weird abstraction is not. The parser's explicit
  if/else branches and the pasted-out token lists in `demos/sm.sass` are
  deliberate: greppable, independently editable, differences visible.
  Extract a helper only when the duplication is exactly the same decision
  and the helper has an obvious name. Never dispatch by derived names or
  convention magic.
- Generated artifacts are committed (`dist/`, `demos/demo.css`, `docs/`)
  and must stay in sync with their sources — CI rebuilds and diffs them,
  and the test suite asserts `dist/sm.css` matches `demos/sm.sass` output.
  If you touch `src/smcss/` or `demos/*.sass`, run `bin/build` and commit
  the regenerated files (and re-run `bin/update-docs` when PHP is around).
- Version pins (`@vbarbarosh/smcss@X.Y.Z` in README and demos) are managed
  by `bin/sync-version`, run automatically by `npm version` during
  `bin/release`; the test suite fails if a pin drifts. Don't hand-edit
  versions — new examples should carry the current version and will be
  bumped automatically from then on.
