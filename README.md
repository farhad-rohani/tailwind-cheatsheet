# TailwindCSS Cheatsheet V3


This README contains a complete list of the TailwindCSS class names for a quick reference.

There is also a more condensed, printable one-page jpg version:

![Printable TailwindCSS Cheatsheet](https://github.com/farhad321/tailwind-cheatsheet/blob/main/TailwindCSS%20Cheatsheet.jpg)

## Default Config

[View the TailwindCSS default configuration](https://github.com/tailwindlabs/tailwindcss/blob/v1/stubs/defaultConfig.stub.js)

**[Breakpoints](https://tailwindcss.com/docs/responsive-design)**

sm:640px | md:768px | lg:1024px | xl:1280px | 2xl:1536px

**[Spacing](https://tailwindcss.com/docs/customizing-spacing)**

px|0|1|2|3|4|5|6|7|8|9|10|11|12|14|16|20|24|28|32|36|40|44|48|52|56|60|64|72|80|96

**[Modifiers](https://tailwindcss.com/docs/hover-focus-and-other-states)**
* hover|focus|focus-within|focus-visible|active|visited|target|first|last|only|odd|even|first-of-type|last-of-type|only-of-type|empty
* disabled|checked|indeterminate|default|required|valid|invalid|in-range|out-of-range|placeholder-shown|autofill|read-only
* open|before|after|first-letter|first-line|marker|selection|file|placeholder
* sm|md|lg|xl|2xl|dark|portrait|landscape|motion-safe|motion-reduce|print
* rtl|ltr
* group-{modifier}|peer-{modifier}

**[Colors](https://tailwindcss.com/docs/customizing-colors)**

- slate|gray|zinc|neutral|stone|red|orange|amber|yellow|lime|green|emerald|teal|cyan|sky|blue|indigo|violet|purple|fuchsia|pink|rose

**[ColorWithOpacity]()**

- .Property-[transparent|current|black|white]
- .Property-[themeColors]-[50|100|200|300|400|500|600|700|800|900][  |/themeOpacity]

**[Color]()**
 
- .Property-[transparent|current|black|white]
- .Property-[themeColors]-[50|100|200|300|400|500|600|700|800|900]

## Utility Classes

### LAYOUT

**[Aspect Ratio](https://tailwindcss.com/docs/aspect-ratio)**

- .aspect-[auto|square|video]

**[Container](https://tailwindcss.com/docs/container)**

- .container

**[Columns](https://tailwindcss.com/docs/columns)**

- .columns-[1|2|3|4|5|6|7|8|9|10|11|12|auto|3xs|2xs|sm|md|lg|xl|2xl|3xl|4xl|5xl|6xl|7xl]

**[Break After ](https://tailwindcss.com/docs/break-after)[ & Before ](https://tailwindcss.com/docs/break-before)[& Inside](https://tailwindcss.com/docs/break-inside)**

- .break-[after|before]-[auto|avoid|all|avoid-page|page|left|right|column]
- .break-inside-[auto|avoid|avoid-page|avoid-column]

**[Box Decoration Break](https://tailwindcss.com/docs/box-decoration-break)**

- .box-decoration-[clone|slice]

**[Box Sizing](https://tailwindcss.com/docs/box-sizing)**

- .box-[border|content]

**[Display](https://tailwindcss.com/docs/display)**

- .[  |inline]-[  |block|flex|table|grid]
- .table-[caption|cell|column|column-group|footer-group|header-group|row-group|row]
- .[flow-root|contents|list-item|hidden]

**[Floats](https://tailwindcss.com/docs/float)**

- .float-[right|left|none]

**[Clear](https://tailwindcss.com/docs/clear)**

- .clear-[left|right|both|none]

**[Isolation](https://tailwindcss.com/docs/isolation)**

- .isolation-[  |auto]

**[Object Fit](https://tailwindcss.com/docs/object-fit)**

- .object-[contain|cover|fill|none|scale-down]

**[Object Position](https://tailwindcss.com/docs/object-position)**

- .object-[bottom|center|top]
- .object-[left|right]-[  |bottom|top]

**[Overflow](https://tailwindcss.com/docs/overflow)**

- .overflow-[  |x|y]-[auto|hidden|clip|visible|scroll]

**[Overscroll Behavior](https://tailwindcss.com/docs/overscroll-behavior)**

- .overscroll-[  |x|y]-[auto|contain|none]

**[Position](https://tailwindcss.com/docs/position)**

- .[static|fixed|absolute|relative|sticky]

**[Top / Right / Bottom / Left](https://tailwindcss.com/docs/top-right-bottom-left)**

- .inset-[  |x|y]-[*themeSpacing*|auto|n/2|n/3|n/4|full]
- .[top|right|bottom|left]-[*themeSpacing*|auto|n/2|n/3|n/4|full]

**[Visibility](https://tailwindcss.com/docs/visibility)**

- .[visible|invisible]

**[Z-index](https://tailwindcss.com/docs/z-index)**

- .z-[0|10|20|30|40|50|auto]

### FLEXBOX

**[Flex Basis](https://tailwindcss.com/docs/flex-basis)**

- .basis-[*themeSpacing*|auto|n/2|n/3|n/4|n/5|n/6|n/12|full]

**[Flex Direction](https://tailwindcss.com/docs/flex-direction)**

- .flex-[row|col]-[  |reverse]

**[Flex Wrap](https://tailwindcss.com/docs/flex-wrap)**

- .flex-wrap-[  |reverse]
- .flex-nowrap

**[Flex](https://tailwindcss.com/docs/flex)**

- .flex-[1|auto|initial|none]

**[Flex Grow](https://tailwindcss.com/docs/flex-grow)**

- .flex-grow-[  |0]

**[Flex Shrink](https://tailwindcss.com/docs/flex-shrink)**

- .flex-shrink-[  |0]

**[Order](https://tailwindcss.com/docs/order)**

- .order-[1|2|3|4|5|6|7|8|9|10|11|12|first|last|none]

### GRID

**[Grid Template Columns](https://tailwindcss.com/docs/grid-template-columns)**

- .grid-cols-[1|2|3|4|5|6|7|8|9|10|11|12|none]

**[Grid Column Start / End](https://tailwindcss.com/docs/grid-column)**

- .col-auto
- .col-span-[1|2|3|4|5|6|7|8|9|10|11|12|full]
- .col-[start|end]-[1|2|3|4|5|6|7|8|9|10|11|12|13|auto]

**[Grid Template Rows](https://tailwindcss.com/docs/grid-template-rows)**

- .grid-rows-[1|2|3|4|5|6|none]

**[Grid Row Start / End](https://tailwindcss.com/docs/grid-row)**

- .row-auto
- .row-span-[1|2|3|4|5|6|full]
- .row-[start|end]-[1|2|3|4|5|6|7|auto]

**[Grid Auto Flow](https://tailwindcss.com/docs/grid-auto-flow)**

- .grid-flow-[row|col]-[  |dense]

**[Grid Auto Columns ](https://tailwindcss.com/docs/grid-auto-columns) & [Rows](https://tailwindcss.com/docs/grid-auto-rows)**

- .auto-[cols|rows]-[auto|min|max|fr]

**[Gap](https://tailwindcss.com/docs/gap)**

- .gap-[  |x|y]-[*themeSpacing*]

### BOX ALIGNMENT

**[(justify)=>(x) & (  |content)=>(y) & (place)=>(xy)]()** 

**[content]()**
- .[justify|content]-[start|end|center|between|around|evenly]
- .place-content-[start|end|center|between|around|evenly|stretch]

**[items]()**
- .[justify|place]-items-[start|end|center|stretch]
- .items-[start|end|center|stretch|baseline]

**[self]()**
- .[justify|place]-self-[auto|start|end|center|stretch]
- .self-[auto|start|end|center|stretch|baseline]

**[Justify Content](https://tailwindcss.com/docs/justify-content)**

- .justify-[start|end|center|between|around|evenly]

**[Justify Items](https://tailwindcss.com/docs/justify-items)**

- .justify-items-[start|end|center|stretch]

**[Justify Self](https://tailwindcss.com/docs/justify-self)**

- .justify-self-[auto|start|end|center|stretch]

**[Align Content](https://tailwindcss.com/docs/align-content)**

- .content-[center|start|end|between|around|evenly]

**[Align Items](https://tailwindcss.com/docs/align-items)**

- .items-[start|end|center|baseline|stretch]

**[Align Self](https://tailwindcss.com/docs/align-self)**

- .self-[auto|start|end|center|stretch|baseline]

**[Place Content](https://tailwindcss.com/docs/place-content)**

- .place-content-[center|start|end|between|around|evenly|stretch]

**[Place Items](https://tailwindcss.com/docs/place-items)**

- .place-items-[start|end|center|stretch]

**[Place Self](https://tailwindcss.com/docs/place-self)**

- .place-self-[auto|start|end|center|stretch]

### SPACING

**[Padding](https://tailwindcss.com/docs/padding)**

- .p[  |y|x|t|r|b|l]-[*themeSpacing*]

**[Margin](https://tailwindcss.com/docs/margin)**

- .m[  |y|x|t|r|b|l]-[*themeSpacing*|auto]
- .-m[  |y|x|t|r|b|l]-[*themeSpacing*]

**[Space Between](https://tailwindcss.com/docs/space)**

- .space-[x|y]-[*themeSpacing*|reverse]
- .-space-[x|y]-[*themeSpacing*]

### SIZING

**[Width](https://tailwindcss.com/docs/width)**

- .w-[*themeSpacing*|auto|n/2|n/3|n/4|n/5|n/6|n/12|full|screen|min|max|fit]

**[Min-Width](https://tailwindcss.com/docs/min-width)**

- .min-w-[0|full|min|max|fit]

**[Max-Width](https://tailwindcss.com/docs/max-width)**

- .max-w-[0|none|xs|sm|md|lg|xl|2xl|3xl|4xl|5xl|6xl|7xl|full|min|max|fit|prose]
- .max-w-screen-[sm|md|lg|xl|2xl]

**[Height](https://tailwindcss.com/docs/height)**

- .h-[*themeSpacing*|auto|n/2|n/3|n/4|n/5|n/6|full|screen|min|max|fit]

**[Min-Height](https://tailwindcss.com/docs/min-height)**

- .min-h-[0|full|screen|min|max|fit]

**[Max-Height](https://tailwindcss.com/docs/max-height)**

- .max-h-[*themeSpacing*|full|screen|min|max|fit]

### TYPOGRAPHY

**[Font Family](https://tailwindcss.com/docs/font-family)**

- .font-[sans|serif|mono]

**[Font Size](https://tailwindcss.com/docs/font-size)**

- .text-[xs|sm|base|lg|xl|2xl|3xl|4xl|5xl|6xl|7xl|8xl|9xl]

**[Font Smoothing](https://tailwindcss.com/docs/font-smoothing)**

- .[  |subpixel]-antialiased

**[Font Style](https://tailwindcss.com/docs/font-style)**

- .[  |not]-italic

**[Font Weight](https://tailwindcss.com/docs/font-weight)**

- .font-[hairline|thin|light|normal|medium|semibold|bold|extrabold|black]

**[Font Variant Numeric](https://tailwindcss.com/docs/font-variant-numeric)**

- .[normal|lining|oldstyle|proportional|tabular]-nums
- .[ordinal|slashed-zero]
- .[diagonal|stacked]-fractions

**[Letter Spacing](https://tailwindcss.com/docs/letter-spacing)**

- .tracking-[tighter|tight|normal|wide|wider|widest]

**[Line Height](https://tailwindcss.com/docs/line-height)**

- .leading-[3|4|5|6|7|8|9|10|none|tight|snug|normal|relaxed|loose]

**[List Style Type](https://tailwindcss.com/docs/list-style-type)**

- .list-[none|disc|decimal]

**[List Style Position](https://tailwindcss.com/docs/list-style-position)**

- .list-[inside|outside]

**[Text Align](https://tailwindcss.com/docs/text-align)**

- .text-[left|center|right|justify]

**[Text Color](https://tailwindcss.com/docs/text-color)**

- .text-[*themeColorWithOpacity*]

**[Text Decoration](https://tailwindcss.com/docs/text-decoration)**

- .[under|no-under|over]line
- .line-through

**[Text Decoration Color](https://tailwindcss.com/docs/text-decoration-color)**

- .decoration-[*themeColor*]

**[Text Decoration Style](https://tailwindcss.com/docs/text-decoration-style)**

- .decoration-[solid|double|dotted|dashed|wavy]

**[Text Decoration Thickness](https://tailwindcss.com/docs/text-decoration-thickness)**

- .decoration-[auto|from-font|0|1|2|4|8]

**[Text Underline Offset](https://tailwindcss.com/docs/text-underline-offset)**

- .underline-offset-[auto|0|1|2|4|8]

**[Text Transform](https://tailwindcss.com/docs/text-transform)**

- .[upper|lower|normal-]case
- .capitalize

**[Text Indent](https://tailwindcss.com/docs/text-indent)**

- .indent-[*themeSpacing*]

**[Vertical Align](https://tailwindcss.com/docs/vertical-align)**

- .align-[baseline|top|middle|bottom|text-top|text-bottom|sub|super]

**[Whitespace](https://tailwindcss.com/docs/whitespace)**

- .whitespace-[normal|nowrap|pre|pre-line|pre-wrap]

**[Word Break](https://tailwindcss.com/docs/word-break)**

- .break-[normal|words|all]

**[Content](https://tailwindcss.com/docs/content)**

- .content-none

### BACKGROUNDS

**[Background Attachment](https://tailwindcss.com/docs/background-attachment)**

- .bg-[fixed|local|scroll]

**[Background Clip](https://tailwindcss.com/docs/background-clip)**

- .bg-clip-[border|padding|content|text]

**[Background Color](https://tailwindcss.com/docs/background-color)**

- .bg-[*themeColorWithOpacity*]

**[Background Origin](https://tailwindcss.com/docs/background-origin)**

- .bg-origin-[border|padding|content]

**[Background Position](https://tailwindcss.com/docs/background-position)**

- .bg-[bottom|center|top]
- .bg-[left|right]-[bottom|top]

**[Background Repeat](https://tailwindcss.com/docs/background-repeat)**

- .bg-repeat-[  |x|y|round|space]
- .bg-no-repeat

**[Background Size](https://tailwindcss.com/docs/background-size)**

- .bg-[auto|cover|contain]

**[Background Image](https://tailwindcss.com/docs/background-image)**

- .bg-none
- .bg-gradient-to-[t|b][  |r|l]
- .bg-gradient-to-[r|l]

**[Gradient Color Stops](https://tailwindcss.com/docs/gradient-color-stops)**

- .[from|via|to]-[*themeColor*]

### BORDERS

**[Border Radius](https://tailwindcss.com/docs/border-radius)**

- .rounded-[  |none|sm|md|lg|xl|2xl|3xl|full]
- .rounded-[r|l]-[none|sm|md|lg|xl|2xl|3xl|full]
- .rounded-[t|b][  |r|l]-[none|sm|md|lg|xl|2xl|3xl|full]

**[Border Width](https://tailwindcss.com/docs/border-width)**

- .border-[  |x|y|t|r|b|l]-[  |0|2|4|8]

**[Border Color](https://tailwindcss.com/docs/border-color)**

- .border-[*themeColorWithOpacity*]

**[Border Style](https://tailwindcss.com/docs/border-style)**

- .border-[solid|dashed|dotted|double|hidden|none]

**[Divide Width](https://tailwindcss.com/docs/divide-width)**

- .divide-[x|y]-[  |0|2|4|8|reverse]

**[Divide Color](https://tailwindcss.com/docs/divide-color)**

- .divide-[*themeColorWithOpacity*]

**[Divide Style](https://tailwindcss.com/docs/divide-style)**

- .divide-[solid|dashed|dotted|double|none]

**[Outline Width](https://tailwindcss.com/docs/outline-width)**

- .outline-[0|1|2|4|8]

**[Outline Color](https://tailwindcss.com/docs/outline-color)**

- .outline-[*themeColorWithOpacity*]

**[Outline Style](https://tailwindcss.com/docs/outline-style)**

- .outline-[  |dashed|dotted|double|hidden|none]

**[Outline Offset](https://tailwindcss.com/docs/outline-offset)**

- .outline-offset-[0|1|2|4|8]

**[Ring Width](https://tailwindcss.com/docs/ring-width)**

- .ring-[0|1|2|  |4|8|inset]

**[Ring Color](https://tailwindcss.com/docs/ring-color)**

- .ring-[*themeColorWithOpacity*]

**[Ring Offset Width](https://tailwindcss.com/docs/ring-offset-width)**

- .ring-offset-[0|1|2|4|8]

**[Ring Offset Color](https://tailwindcss.com/docs/ring-offset-color)**

- .ring-offset-[*themeColorWithOpacity*]


### EFFECTS

**[Box Shadow](https://tailwindcss.com/docs/box-shadow)**

- .shadow-[sm|  |md|lg|xl|2xl|inner|none]

**[Box Shadow Color](https://tailwindcss.com/docs/box-shadow-color)**

- .shadow-[*themeColorWithOpacity*]

**[Opacity](https://tailwindcss.com/docs/opacity)**

- .opacity-[0|5|10|20|25|30|40|50|60|70|75|80|90|95|100]


**[Mix Blend Mode](https://tailwindcss.com/docs/mix-blend-mode)**

- . mix-blend-[multiply|screen|overlay|darken|lighten|color-dodge
|color-burn|hard-light|soft-light|difference|exclusion]

**[Background Blend Mode](https://tailwindcss.com/docs/background-blend-mode)**

- . bg-blend-[normal|multiply|screen|overlay|darken|lighten|color-dodge|color-burn
|hard-light|soft-light|difference|exclusion|hue|saturation|color|luminosity]

### Filter

**[Backdrop Blur](https://tailwindcss.com/docs/backdrop-blur) & [Blur](https://tailwindcss.com/docs/blur)**

- .[  |backdrop]-blur-[none|sm|  |md|lg|xl|2xl|3xl]

**[Backdrop Brightness](https://tailwindcss.com/docs/backdrop-brightness) & [Brightness](https://tailwindcss.com/docs/brightness)**

- .[  |backdrop]-brightness-[0|50|75|90|95|100|105|110|125|150|200]

**[Backdrop Contrast](https://tailwindcss.com/docs/backdrop-contrast) & [Contrast](https://tailwindcss.com/docs/contrast)**

- .[  |backdrop]-contrast-[0|50|75|100|125|150|200]

**[Backdrop Drop Shadow](https://tailwindcss.com/docs/backdrop-drop-shadow) & [Drop Shadow](https://tailwindcss.com/docs/drop-shadow)**

- .[  |backdrop]-drop-shadow-[sm|  |md|lg|xl|2xl|none]

**[Backdrop Grayscale](https://tailwindcss.com/docs/backdrop-grayscale) & [Grayscale](https://tailwindcss.com/docs/grayscale)**

- .[  |backdrop]-grayscale-[  |0]

**[Backdrop Hue Rotate](https://tailwindcss.com/docs/backdrop-hue-rotate) & [Hue Rotate](https://tailwindcss.com/docs/hue-rotate)**

- .[  |backdrop]-hue-rotate-[0|15|30|60|90|180]

**[Backdrop Invert](https://tailwindcss.com/docs/backdrop-invert) & [Invert](https://tailwindcss.com/docs/invert)**

- .[  |backdrop]-invert-[  |0]

**[Backdrop Saturate](https://tailwindcss.com/docs/backdrop-saturate) & [Saturate](https://tailwindcss.com/docs/saturate)**

- .[  |backdrop]-saturate-[0|50|100|150|200]

**[Backdrop Sepia](https://tailwindcss.com/docs/backdrop-sepia) & [Sepia](https://tailwindcss.com/docs/sepia)**

- .[  |backdrop]-sepia-[  |0]

### TABLES

**[Border Collapse](https://tailwindcss.com/docs/border-collapse)**

- .border-[collapse|separate]

**[Table Layout](https://tailwindcss.com/docs/table-layout)**

- .table-[auto|fixed]

### TRANSITIONS AND ANIMATION

**[Transition Property](https://tailwindcss.com/docs/transition-property)**

- .transition-[none|all|  |colors|opacity|shadow|transform]

**[Transition Duration](https://tailwindcss.com/docs/transition-duration)**

- .duration-[75|100|150|200|300|500|700|1000]

**[Transition Timing Function](https://tailwindcss.com/docs/transition-timing-function)**

- .ease-[linear|in|out|in-out]

**[Transition Delay](https://tailwindcss.com/docs/transition-delay)**

- .delay-[75|100|150|200|300|500|700|1000]

**[Animation](https://tailwindcss.com/docs/animation)**

- .animate-[none|spin|ping|pulse|bounce]

### TRANSFORMS

**[Scale](https://tailwindcss.com/docs/scale)**

- .[  | - ]scale-[  |x|y]-[0|50|75|90|95|100|105|110|125|150]

**[Rotate](https://tailwindcss.com/docs/rotate)**

- .[  | - ]rotate-[0|1|2|3|6|12|45|90|180]

**[Translate](https://tailwindcss.com/docs/translate)**

- .[  | - ]translate-[x|y]-[*themeSpacing*|n/2|n/3|n/4|full]

**[Skew](https://tailwindcss.com/docs/skew)**

- .[  | - ]skew-[x|y]-[0|1|2|3|6|12]

**[Transform Origin](https://tailwindcss.com/docs/transform-origin)**

- .origin-[right|center|left]
- .origin-[top|bottom]-[right|left]

### INTERACTIVITY

**[Accent Color](https://tailwindcss.com/docs/accent-color)**

- .accent-[*themeColorWithOpacity*]
- .accent-auto

**[Appearance](https://tailwindcss.com/docs/appearance)**

- .appearance-none

**[Cursor](https://tailwindcss.com/docs/cursor)**

- .cursor-[auto|default|pointer|wait|text|move|help|not-allowed|none|context-menu
|progress|cell|crosshair|vertical-text|alias|copy|no-drop|grab|grabbing|all-scroll]
- .cursor-[auto|col|row|n|e|s|w|ne|nw|se|sw|ew|ns|nesw|nwse]-resize
- .cursor-zoom-[in|out]

**[Caret Color](https://tailwindcss.com/docs/caret-color)**

- .caret-[*themeColorWithOpacity*]

**[Pointer Events](https://tailwindcss.com/docs/pointer-events)**

- .pointer-events-[none|auto]

**[Resize](https://tailwindcss.com/docs/resize)**

- .resize-[none|y|x|  ]

**[Scroll Behavior](https://tailwindcss.com/docs/scroll-behavior)**

- .scroll-[auto|smooth]

**[Scroll Margin](https://tailwindcss.com/docs/scroll-margin)**

- .scroll-m[  |x|y|t|r|b|l]-[*themeSpacing*]

**[Scroll Padding](https://tailwindcss.com/docs/scroll-padding)**

- .scroll-p[  |x|y|t|r|b|l]-[*themeSpacing*]

**[Scroll Snap Align](https://tailwindcss.com/docs/scroll-snap-align)**

- .snap-[start|end|center|align-none]

**[Scroll Snap Stop](https://tailwindcss.com/docs/scroll-snap-stop)**

- .snap-[normal|always]

**[Scroll Snap Type](https://tailwindcss.com/docs/scroll-snap-type)**

- .snap-[none|x|y|both|mandatory|proximity]

**[Touch Action](https://tailwindcss.com/docs/touch-action)**

- .touch-[auto|none|pinch-zoom|manipulation]
- .touch-pan-[x|left|right|y|up|down]

**[User Select](https://tailwindcss.com/docs/user-select)**

- .select-[none|text|all|auto]

**[Will Change](https://tailwindcss.com/docs/will-change)**

- .will-change-[auto|scroll|contents|transform]

### SVG

**[Fill](https://tailwindcss.com/docs/fill)**

- .fill-[*themeColor*]

**[Stroke](https://tailwindcss.com/docs/stroke)**

- .stroke-[*themeColor*]

**[Stroke Width](https://tailwindcss.com/docs/stroke-width)**

- .stroke-[0|1|2]

### ACCESSIBILITY

**[Screen Readers](https://tailwindcss.com/docs/screen-readers)**

- .[  |not]-sr-only

