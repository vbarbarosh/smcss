# Utility class inventory

Authoritative sources: `test/index.js` table (semantics), `demos/sm.sass`
(what actually ships in dist/sm.css). Grouped as in the source modules.

## Text & font
- align: `l r c j` (text-align), `vm vt vb` (vertical-align)
- decoration: `x u o s` (none/underline/overline/line-through);
  transform: `xx uc lc cc`; wrap: `nowrap`
- ellipsis: `ellipsis` (1 line), `ellipsis2`, `ellipsis3` (line-clamp)
- font: `fsN` (px, 1–30 + 36/48/60/72), `xfs`, `fw3..fw9`, `xfw`, `b n i q ii`
  (weight/style), `lhN` (px 0–100), `lhNNm` (em/10, 10–50), `lsN`

## Box model
- margin: `mN mvN mhN mtN mlN mbN mrN` (+`n` negative), `ma`, resets `xm xmt…`
- padding: same grammar with `p`, `pa`, resets `xp xpt…`
- **groups**: `mgN` (child margin-bottom), `miN` (child margin-right),
  `pgN`/`piN` padding analogs — gap between immediate children
- sizing: `wN hN` (0–1200px), `wNp hNp` (%), `wa ww ha hh`,
  `min/max`, `minN maxN`, `minAxB maxAxB`, `min-wN max-wN min-hN max-hN`
  (0–500), `bbox cbox`
- border: `border dashed` (1px currentColor), directional removals
  `xborder-{t,l,r,b,v,h,vl,vr,ht,hb}`, radius `brN` (1–20, 999), `brNp`, `xbr`
- shadow: `bsN` (box-shadow), `isN` (inset), `xbs`; outline: `outline xoutline`

## Layout
- display: `xd db di dib dt dtc`
- position: `stat rel abs fix sticky sticky-{t,l,r,b}`
- anchoring: `abs-f abs-t abs-b abs-l abs-r abs-c abs-ct abs-cb abs-cl abs-cr`
  plus two-part `abs-<parent>-<self>` for all corner/center-edge pairs;
  the whole grammar duplicated as `fix-*`; offsets `tN lN bN rN`, `ta la ba ra`,
  `l50p`, `tlbr[N]`
- flex: `flex-row flex-col` (+`-rev`), `iflex-*` inline variants,
  9-point alignment shorthand `flex-row-{c,cl,cr,ct,cb,tl,tr,bl,br}` (same for
  col), long forms `flex-row-center`, `flex-align-*`, `flex-justify-*`,
  `flex-wrap flex-nowrap flex-wrap-rev`, `flex-grow/nogrow/shrink/noshrink/fluid`
- split: `hsplit vsplit` (nowrap flex, children `flex:none`) with child
  modifiers `fluid shrink grow`
- float legacy: `fl fr xf`, `cb cl cr xc`, `clearfix`, `floats`
- grid: `gridN` → `> .col1..colN` percentage widths
- expand: `expand-A-B` (aspect-ratio via padding-top pseudo)
- z-index: `zN zNn`; overflow: `oa oh os`; `no-scrollbars`

## Visual / interaction
- backgrounds: `black gray silver white red green blue yellow cyan`
  (pastel debug colors), `gradient checkerboard rainbow` (rainbow colors
  children in triplets), `xbg`
- themes: `theme-<clrs.cc color>` — 16 paired color+background combos
- cursor: `cur-*` for every standard cursor value (with screenshot gallery demo)
- transform: `hflip vflip scaleN rotateN`; opacity `oN xo`;
  `no-user-select`, `no-pointer-events`; resize `resize resize-h resize-v xresize`
- `xbutton` — complete button appearance reset

## Naming collisions to be aware of
Single letters are heavily overloaded and context-resolved by the parser:
`cb` = clear:both (float) — while `flex-row-cb` and `abs-cb` mean
center-bottom; `cl`/`cr` similarly mean clear:left/right *and* center-left/right
in flex/abs compounds. `o` = overline, `oN` = opacity, `oa/oh/os` = overflow.
`s` = line-through, `b` = bold.

Related: [[01-purpose-and-concept]], [[06-tests-and-quality]]
