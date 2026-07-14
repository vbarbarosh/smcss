# Purpose & core concept

> **Addendum 2026-07-14:** still accurate, with one grammar change: the
> `pa`/`pva`/`pha`/`pta`/`pla`/`pra`/`pba` tokens (padding: auto — invalid
> CSS) were removed; the parser now rejects them. See
> [audit](audit-2026-07-13.md).

**smcss** (`@vbarbarosh/smcss`, v1.5.1) is a small utility-class CSS library for
*prototyping layouts*. Each class does exactly one thing, so an element's class
list reads as a plain-language description of the element:

```html
<div class="abs-f ma hsplit w800 h200 bs10 rainbow">
```

= "an 800×200 box centered on the screen, split horizontally, with a shadow and
rainbow-colored children".

## What makes it different from Tailwind/Tachyons

1. **It is a SASS mixin system first, a class sheet second.** The core is the
   `smcss(...)` mixin (`src/smcss/parser/smcss.sass`), which maps a short token
   (`w200`, `flex-row-c`, `abs-tl-br`) to CSS declarations. The shipped
   `dist/sm.css` is just one *export* of that mixin over an enumerated token
   list (`demos/sm.sass`). Users can instead `@import` the SASS and use
   `@include sm('fix-c w400 h300 border')` inside their own selectors.
2. **Layout-first vocabulary.** The distinctive pieces are not spacing scales
   but layout primitives:
   - `hsplit` / `vsplit` + `fluid` / `shrink` / `grow` — app-shell splitting
     where children are inflexible by default and `fluid` takes the remainder.
   - `abs-XX[-YY]` / `fix-XX[-YY]` — a full two-part anchoring grammar:
     first part = which point of the parent, second part = which point of the
     element (e.g. `abs-tl-br` pins the element's bottom-right to the parent's
     top-left). ~9×9 combinations for both `absolute` and `fixed`.
   - **Margin groups** `mgN`/`miN` (and `pgN`/`piN`) — gap between immediate
     children via `> :not(:last-child)`, predating CSS `gap`.
3. **The `x` prefix means "remove/reset"**: `xm` (margin:0), `xborder`,
   `xbutton` (full button reset), `xd` (display:none), `xls` (list-style:none).
4. **Numbers are raw pixels**, not scale steps: `p5` = 5px padding, `w200` =
   200px. Suffixes: `p` = percent (`w50p`), `n` = negative (`mt5n`),
   `m` = tenths of em (`lh12m` = 1.2em).

## Token legend (from demos/sm.sass header)

- `x` prefix — removal / reset to initial state
- `N` — pixels; `Np` — percent; `Nn` — negative; `Nm` — N/10 em
- planned/noted but not implemented: `h-p5` (hover variant), `child-p5`

## Positioning vs. the ecosystem

README's "Interesting Projects" list (Tachyons, Tailwind, rscss, construct.css)
shows the author knows the field; smcss deliberately stays tiny, px-based, and
prototype-oriented rather than becoming a design-system toolkit.

Related: [[02-architecture]], [[04-class-inventory]]
