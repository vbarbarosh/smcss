# Demos, docs pages & playground

> **Addendum 2026-07-14:** since this was written ([audit](audit-2026-07-13.md)):
> `proto/` is renamed `research/` and its vendored jquery/vue files load from
> unpkg instead; demo version pins are managed by `bin/sync-version`; the
> broken `../vue/dd.js` references load `@vbarbarosh/dd` from unpkg; the
> CodePen exports pin the release version instead of `@latest`.

## demos/ (copied into docs/demos at update-docs time)

Standalone HTML files, one directory per topic; a directory appears in the
demos index once it contains an `*.html`. Styles come either from the local
`demo.css` build or from unpkg (pinned `@1.4.0` in demos/README — stale).

Topics: `abs` (anchoring), `basic`, `blog` (4 article-style demos: dynamic
hover, scrollbar tricks, vertical alignment), `border`, `button`,
`components-input/-progress/-range` (form-control styling exercises),
`container` (10+ pages, the most elaborated concept), `cursor` (gallery with a
PNG per cursor), `flex` (10 pages), `float`, `hsplit` (7 pages), `issues`
(6 numbered problem repros, one with a vendored `bn_1.0.0.min.js`), `layouts`
(scroll-sync, fixed-left table, fit-content), `modal` (2 marked `-issue`),
`object-fit`, `resize`, `specificity`, `text`, `toggle`,
`vertical-alignment`, `vue` (mixins for input autosizing).

`demos/index.php` — PHP directory listing used both locally (`php -S`) and to
generate `docs/demos/index.html`. Recent feature: per-demo **CodePen export**
with an smcss attribution link (commits 540fcc7, f3bd7e3).

`demos2/backgrounds` — newer, README-only so far (CSS `background` patterns:
hatch from currentColor via `rgba(from currentColor …)`); a possible seed for a
future `bg-*` module — not yet in src.

## docs site structure

- `/` → redirect to `/concepts`
- `/concepts` — container, hsplit, margin-group essays (src/docs/concepts/*.php)
- `/reference` — per-module class reference (one PHP per module; includes a
  `toggle.php` page with no matching src module — likely Easy-Toggle-State usage)
- `/demos` — generated index over the copied demos tree
- `/try` — playground: CodeMirror 5 (cdnjs), hsplit editor/preview, live
  render, demo-prefill dropdown, light/dark theme toggle (localStorage),
  version badge read from package.json
- Recent redesign: dark theme, new layout, preview modal (commit a038100)

## proto/

Pre-1.0 sandbox (2019-era): flow/v2-flow experiments, modal, gallery,
round-button, media-query, flex-center, box-shadow — with vendored jquery and
vue minified builds. Purely historical; superseded by demos/.

Related: [[03-build-and-distribution]], [[07-observations]]
