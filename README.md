# TailwindCSS Cheatsheet (ARCHIVED)

Update 04/29/2022:

This README contains a complete list of the TailwindCSS class names for a quick reference.

There is also a more condensed, printable one-page jpg version:

![Printable TailwindCSS Cheatsheet](https://github.com/gojutin/tailwindcss-cheatsheet/blob/main/printable-tailwindcss-cheatsheet.jpg?raw=true)

## Default Config

[View the TailwindCSS default configuration](https://github.com/tailwindlabs/tailwindcss/blob/v1/stubs/defaultConfig.stub.js)

Breakpoints: 
sm:640px | md:768px | lg:1024px | xl:1280px | 2xl:1536px

Colors:
inherit|current|transparent|black|white|slate|gray|zinc|neutral|stone|red|orange
|amber|yellow|lime|green|emerald|teal|cyan|sky|blue|indigo|violet|purple|fuchsia|pink|rose

Spacing:
px|0|0|1|1|2|2|3|3|4|5|6|7|8|9|10|11|12|14|16|20|24|28|32|36|40|44|48|52|56|60|64|72|80|96

modifiers :
hover|focus|focus-within|focus-visible|active|visited|target|first|last|only|odd|even|first-of-type|last-of-type|only-of-type|empty
disabled|checked|indeterminate|default|required|valid|invalid|in-range|out-of-range|placeholder-shown|autofill|read-only
open|before|after|first-letter|first-line|marker|selection|file|placeholder
sm|md|lg|xl|2xl|dark|portrait|landscape|motion-safe|motion-reduce|print
rtl|ltr
group-{modifier}|peer-{modifier}
## Utility Classes

### LAYOUT

**Aspect Ratio**

- .aspect-[auto|square|video]

**Container**

- .container

**Columns**

- .columns-[1|2|3|4|5|6|7|8|9|10|11|12|auto|3xs|2xs|sm|md|lg|xl|2xl|3xl|4xl|5xl|6xl|7xl]

**Break After & Before & Inside**

- .break-[after|before]-[auto|avoid|all|avoid-page|page|left|right|column]
- .break-inside-[auto|avoid|avoid-page|avoid-column]

**Box Decoration Break**

- .box-decoration-[clone|slice]

**Box Sizing**

- .box-[border|content]

**Display**

- .[  |inline]-[  |block|flex|table|grid]
- .table-[caption|cell|column|column-group|footer-group|header-group|row-group|row]
- .[flow-root|contents|list-item|hidden]

**Floats**

- .float-[right|left|none]

**Clear**

- .clear-[left|right|both|none]

**Isolation**

- .isolation-[  |auto]

**Object Fit**

- .object-[contain|cover|fill|none|scale-down]

**Object Position**

- .object-[bottom|center|top]
- .object-[left|right]-[  |bottom|top]

**Overflow**

- .overflow-[  |x|y]-[auto|hidden|clip|visible|scroll]

**Overscroll Behavior**

- .overscroll-[  |x|y]-[auto|contain|none]

**Position**

- .[static|fixed|absolute|relative|sticky]

**Top / Right / Bottom / Left**

- .inset-[  |x|y]-[*themeSpacing-0_96*|auto|1/2|1/3|2/3|1/4|2/4|3/4|full]
- .[top|right|bottom|left]-[*themeSpacing-0_96*|auto|1/2|1/3|2/3|1/4|2/4|3/4|full]

**Visibility**

- .[visible|invisible]

**Z-index**

- .z-[0|10|20|30|40|50|auto]

### FLEXBOX

> Make sure to use the `.flex` class with the classes below!

**Flex Basis**

- .basis-[*themeSpacing-0_96*|auto|n/2|n/3|n/4|n/5|n/6|n/12|full]

**Flex Direction**

- .flex-[row|col]-[  |reverse]

**Flex Wrap**

- .flex-wrap-[  |reverse]
- .flex-nowrap

**Flex**

- .flex-[1|auto|initial|none]

**Flex Grow**

- .flex-grow-[  |0]

**Flex Shrink**

- .flex-shrink-[  |0]

**Order**

- .order-[1|2|3|4|5|6|7|8|9|10|11|12|first|last|none]

### GRID

**Grid Template Columns**

- .grid-cols-[1|2|3|4|5|6|7|8|9|10|11|12|none]

**Grid Column Start / End**

- .col-auto
- .col-span-[1|2|3|4|5|6|7|8|9|10|11|12|full]
- .col-[start|end]-[1|2|3|4|5|6|7|8|9|10|11|12|13|auto]

**Grid Template Rows**

- .grid-rows-[1|2|3|4|5|6|none]

**Grid Row Start / End**

- .row-auto
- .row-span-[1|2|3|4|5|6|full]
- .row-[start|end]-[1|2|3|4|5|6|7|auto]

**Grid Auto Flow**

- .grid-flow-[row|col]-[  |dense]

**Grid Auto Columns & Rows**

- .auto-[cols|rows]-[auto|min|max|fr]

**Gap**

- .gap-[  |x|y]-[*themeSpacing-0_96*]

### BOX ALIGNMENT

**(justify)=>(x) & (  |content)=>(y) & (place)=>(xy)** 

**content**
- .[justify|content]-[start|end|center|between|around|evenly]
- .place-content-[start|end|center|between|around|evenly|stretch]

**items**
- .[justify|place]-items-[start|end|center|stretch]
- .items-[start|end|center|stretch|baseline]

**self**
- .[justify|place]-self-[auto|start|end|center|stretch]
- .self-[auto|start|end|center|stretch|baseline]

**Justify Content**

- .justify-[start|end|center|between|around|evenly]

**Justify Items**

- .justify-items-[start|end|center|stretch]

**Justify Self**

- .justify-self-[auto|start|end|center|stretch]

**Align Content**

- .content-[center|start|end|between|around|evenly]

**Align Items**

- .items-[start|end|center|baseline|stretch]

**Align Self**

- .self-[auto|start|end|center|stretch|baseline]

**Place Content**

- .place-content-[center|start|end|between|around|evenly|stretch]

**Place Items**

- .place-items-[start|end|center|stretch]

**Place Self**

- .place-self-[auto|start|end|center|stretch]

### SPACING

**Padding**

- .p[  |y|x|t|r|b|l]-[*themeSpacing-0_96*]

**Margin**

- .m[  |y|x|t|r|b|l]-[*themeSpacing-0_96*|auto]
- .-m[  |y|x|t|r|b|l]-[*themeSpacing-0_96*]

**Space Between**

- .space-[x|y]-[*themeSpacing-0_96*|reverse]
- .-space-[x|y]-[*themeSpacing-0_96*]

### SIZING

**Width**

- .w-[*themeSpacing-0_96*|auto|n/2|n/3|n/4|n/5|n/6|n/12|full|screen|min|max|fit]

**Min-Width**

- .min-w-[0|full|min|max|fit]

**Max-Width**

- .max-w-[0|none|xs|sm|md|lg|xl|2xl|3xl|4xl|5xl|6xl|7xl|full|min|max|fit|prose]
- .max-w-screen-[sm|md|lg|xl|2xl]

**Height**

- .h-[*themeSpacing-0_96*|auto|n/2|n/3|n/4|n/5|n/6|full|screen|min|max|fit]

**Min-Height**

- .min-h-[0|full|screen|min|max|fit]

**Max-Height**

- .max-h-[*themeSpacing-0_96*|full|screen|min|max|fit]

### TYPOGRAPHY

**Font Family**

- .font-[sans|serif|mono]

**Font Size**

- .text-[xs|sm|base|lg|xl|2xl|3xl|4xl|5xl|6xl|7xl|8xl|9xl]

**Font Smoothing**

- .[  |subpixel]-antialiased

**Font Style**

- .[  |not]-italic

**Font Weight**

- .font-[hairline|thin|light|normal|medium|semibold|bold|extrabold|black]

**Font Variant Numeric**

- .[normal|lining|oldstyle|proportional|tabular]-nums
- .[ordinal|slashed-zero]
- .[diagonal|stacked]-fractions

**Letter Spacing**

- .tracking-[tighter|tight|normal|wide|wider|widest]

**Line Height**

- .leading-[3|4|5|6|7|8|9|10|none|tight|snug|normal|relaxed|loose]

**List Style Type**

- .list-[none|disc|decimal]

**List Style Position**

- .list-[inside|outside]

**Text Align**

- .text-[left|center|right|justify]

**Text Color**

- .text-[transparent|current|black|white]
- .text-[*themeColors*]-[100|200|300|400|500|600|700|800|900][  |/*themeOpacity*]

**Text Decoration**

- .[under|no-under|over]line
- .line-through

**Text Decoration Color**

- .decoration-[*themeColors*]-[50|100|200|300|400|500|600|700|800|900]

**Text Decoration Style**

- .decoration-[solid|double|dotted|dashed|wavy]

**Text Decoration Thickness**

- .decoration-[auto|from-font|0|1|2|4|8]

**Text Underline Offset**

- .underline-offset-[auto|0|1|2|4|8]


**Text Transform**

- .[upper|lower|normal-]case
- .capitalize

**Text Indent**

- .indent-[*themeSpacing-0_96*]


**Vertical Align**

- .align-[baseline|top|middle|bottom|text-top|text-bottom|sub|super]

**Whitespace**

- .whitespace-[normal|nowrap|pre|pre-line|pre-wrap]

**Word Break**

- .break-[normal|words|all]

**Content**

- .content-none


### BACKGROUNDS

**Background Attachment**

- .bg-[fixed|local|scroll]

**Background Clip**

- .bg-clip-[border|padding|content|text]

**Background Color**

- .bg-[inherit|transparent|current|black|white]
- .bg-[*themeColors*]-[50|100|200|300|400|500|600|700|800|900][  |/*themeOpacity*]

**Background Origin**

- .bg-origin-[border|padding|content]

**Background Position**

- .bg-[bottom|center|top]
- .bg-[left|right]-[bottom|top]

**Background Repeat**

- .bg-repeat-[  |x|y|round|space]
- .bg-no-repeat

**Background Size**

- .bg-[auto|cover|contain]

**Background Image**

- .bg-none
- .bg-gradient-to-[t|b][  |r|l]
- .bg-gradient-to-[r|l]

**Gradient Color Stops**

- .[from|via|to]-[transparent|current|black|white]
- .[from|via|to]-[*themeColors*]-[50|100|200|300|400|500|600|700|800|900]

### BORDERS

**Border Radius**

- .rounded
- .rounded-[  |none|sm|md|lg|xl|2xl|3xl|full]
- .rounded-[r|l]-[none|sm|md|lg|xl|2xl|3xl|full]
- .rounded-[t|b][  |r|l]-[none|sm|md|lg|xl|2xl|3xl|full]
- 
**Border Width**

- .border-[  |x|y|t|r|b|l]-[  |0|2|4|8]

**Border Color**

- .border-[inherit|current|transparent|black|white]
- .border-[  |x|y|t|r|b|l]-[*themeColors*]-[50|100|200|300|400|500|600|700|800|900][  |/*themeOpacity*]

**Border Style**

- .border-[solid|dashed|dotted|double|hidden|none]

**Divide Width**

- .divide-[x|y]-[  |0|2|4|8|reverse]

**Divide Color**

- .divide-[inherit|current|transparent|black|white]
- .divide-[*themeColors*]-[50|100|200|300|400|500|600|700|800|900][  |/*themeOpacity*]

**Divide Style**

- .divide-[solid|dashed|dotted|double|none]

**Outline Width**

- .outline-[0|1|2|4|8]

**Outline Color**

- .outline-[inherit|current|transparent|black|white]
- .outline-[*themeColors*]-[50|100|200|300|400|500|600|700|800|900][  |/*themeOpacity*]

**Outline Style**

- .outline-[  |dashed|dotted|double|hidden|none]

**Outline Offset**

- .outline-offset-[0|1|2|4|8]

**Ring Width**

- .ring-[0|1|2|  |4|8|inset]

**Ring Color**

- .ring-[inherit|current|transparent|black|white]
- .ring-[*themeColors*]-[50|100|200|300|400|500|600|700|800|900][  |/*themeOpacity*]

**Ring Offset Width**

- .ring-offset-[0|1|2|4|8]

**Ring Offset Color**

- .ring-offset-[inherit|current|transparent|black|white]
- .ring-offset-[*themeColors*]-[50|100|200|300|400|500|600|700|800|900][  |/*themeOpacity*]


### EFFECTS

**Box Shadow**

- .shadow-[sm|  |md|lg|xl|2xl|inner|none]

**Box Shadow Color**

- .shadow-[inherit|current|transparent|black|white]
- .shadow-[*themeColors*]-[50|100|200|300|400|500|600|700|800|900][  |/*themeOpacity*]

**Opacity**

- .opacity-[0|5|10|20|25|30|40|50|60|70|75|80|90|95|100]


**Mix Blend Mode**

- . mix-blend-[multiply|screen|overlay|darken|lighten|color-dodge|color-burn|hard-light|soft-light|difference|exclusion]

**Background Blend Mode**

- . bg-blend-[normal|multiply|screen|overlay|darken|lighten|color-dodge|color-burn
|hard-light|soft-light|difference|exclusion|hue|saturation|color|luminosity]

### Filter

**(Backdrop) Blur**

- .[  |backdrop]-blur-[none|sm|  |md|lg|xl|2xl|3xl]

**(Backdrop) Brightness**

- .[  |backdrop]-brightness-[0|50|75|90|95|100|105|110|125|150|200]

**(Backdrop) Contrast**

- .[  |backdrop]-contrast-[0|50|75|100|125|150|200]

**(Backdrop) Drop Shadow**

- .[  |backdrop]-drop-shadow-[sm|  |md|lg|xl|2xl|none]

**(Backdrop) Grayscale**

- .[  |backdrop]-grayscale-[  |0]

**(Backdrop) Hue Rotate**

- .[  |backdrop]-hue-rotate-[0|15|30|60|90|180]

**(Backdrop) Invert**

- .[  |backdrop]-invert-[  |0]

**(Backdrop) Saturate**

- .[  |backdrop]-saturate-[0|50|100|150|200]

**(Backdrop) Sepia**

- .[  |backdrop]-sepia-[  |0]



### TABLES

**Border Collapse**

- .border-[collapse|separate]

**Table Layout**

- .table-[auto|fixed]



### TRANSITIONS AND ANIMATION

**Transition Property**

- .transition-[none|all|  |colors|opacity|shadow|transform]

**Transition Duration**

- .duration-[75|100|150|200|300|500|700|1000]

**Transition Timing Function**

- .ease-[linear|in|out|in-out]

**Transition Delay**

- .delay-[75|100|150|200|300|500|700|1000]

**Animation**

- .animate-[none|spin|ping|pulse|bounce]

### TRANSFORMS

**Scale**

- .[  | - ]scale-[  |x|y]-[0|50|75|90|95|100|105|110|125|150]

**Rotate**

- .[  | - ]rotate-[0|1|2|3|6|12|45|90|180]

**Translate**

- .[  | - ]translate-[x|y]-[*themeSpacing-0_96*|n/2|n/3|n/4|full]

**Skew**

- .[  | - ]skew-[x|y]-[0|1|2|3|6|12]

**Transform Origin**

- .origin-[right|center|left]
- .origin-[top|bottom]-[right|left]


### INTERACTIVITY

**Accent Color**

- .accent-[inherit|current|transparent|black|white]
- .accent-[*themeColors*]-[50|100|200|300|400|500|600|700|800|900][  |/*themeOpacity*]
- .accent-auto

**Appearance**

- .appearance-none

**Cursor**

- .cursor-[auto|default|pointer|wait|text|move|help|not-allowed|none|context-menu
|progress|cell|crosshair|vertical-text|alias|copy|no-drop|grab|grabbing|all-scroll]
- .cursor-[auto|col|row|n|e|s|w|ne|nw|se|sw|ew|ns|nesw|nwse]-resize
- .cursor-zoom-[in|out]

**Caret Color**

- .caret-[inherit|current|transparent|black|white]
- .caret-[*themeColors*]-[50|100|200|300|400|500|600|700|800|900]

**Pointer Events**

- .pointer-events-[none|auto]

**Resize**

- .resize-[none|y|x|  ]

**Scroll Behavior**

- .scroll-[auto|smooth]

**Scroll Margin**

- .scroll-m[  |x|y|t|r|b|l]-[*themeSpacing-0_96*]

**Scroll Padding**

- .scroll-p[  |x|y|t|r|b|l]-[*themeSpacing-0_96*]

**Scroll Snap Align**

- .snap-[start|end|center|align-none]

**Scroll Snap Stop**

- .snap-[none|x|y|both|mandatory|proximity]

**Scroll Snap Stop**

- .snap-[normal|always]

**Touch Action**

- .touch-[auto|none|pinch-zoom|manipulation]
- .touch-pan-[x|left|right|y|up|down]

**User Select**

- .select-[none|text|all|auto]

**Will Change**

- .will-change-[auto|scroll|contents|transform]

### SVG

**Fill**

- .fill-[inherit|current|transparent|black|white]
- .fill-[*themeColors*]-[50|100|200|300|400|500|600|700|800|900]

**Stroke**

- .stroke-[inherit|current|transparent|black|white]
- .stroke-[*themeColors*]-[50|100|200|300|400|500|600|700|800|900]


**Stroke Width**

- .stroke-[0|1|2]

### ACCESSIBILITY

**Screen Readers**

- .[  |not]-sr-only

