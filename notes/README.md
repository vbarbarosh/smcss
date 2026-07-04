# Project analysis notes — smcss

Analysis of `@vbarbarosh/smcss` v1.5.1 as of 2026-07-04 (commit a91568d).

1. [Purpose & core concept](01-purpose-and-concept.md) — what smcss is, the
   token grammar, how it differs from Tailwind/Tachyons.
2. [Architecture & source map](02-architecture.md) — modules → parser →
   exporters; the `smcss()` dispatch chain; other repo roots.
3. [Build, docs & release pipeline](03-build-and-distribution.md) — npm
   scripts, bin/*, what ships to npm/unpkg, PHP-generated docs site.
4. [Utility class inventory](04-class-inventory.md) — the full vocabulary by
   group, plus single-letter naming collisions.
5. [Demos, docs pages & playground](05-demos-docs-playground.md) — demos/,
   demos2/, proto/, the try playground, CodePen export.
6. [Tests & quality](06-tests-and-quality.md) — golden-table test design,
   coverage gaps, questionable locked-in CSS.
7. [Observations & opportunities](07-observations.md) — staleness, deprecated
   SASS features, correctness nits, maintenance friction, seeded ideas.
