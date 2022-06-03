<?php
$list = [
    'GettingStarted' => ['Installation',
        'EditorSetup',
        'UsingWithPreprocessors',
        'OptimizingForProduction',
        'BrowserSupport',
        'UpgradeGuide',],
    'CoreConcepts' => ['UtilityFirstFundamentals',
        'HoverFocusAndOtherStates',
        'ResponsiveDesign',
        'DarkMode',
        'ReusingStyles',
        'AddingCustomStyles',
        'FunctionsDirectives',],
    'Customization' => ['Configuration',
        'Content',
        'Theme',
        'Screens',
        'Colors',
        'Spacing',
        'Plugins',
        'Presets',],
    'BaseStyles' => ['Preflight',],
    'Layout' => ['AspectRatio',
        'Container',
        'Columns',
        'BreakAfter',
        'BreakBefore',
        'BreakInside',
        'BoxDecorationBreak',
        'BoxSizing',
        'Display',
        'Floats',
        'Clear',
        'Isolation',
        'ObjectFit',
        'ObjectPosition',
        'Overflow',
        'OverscrollBehavior',
        'Position',
        'TopRightBottomLeft',
        'Visibility',
        'ZIndex',],
    'Flexbox&Grid' => ['FlexBasis',
        'FlexDirection',
        'FlexWrap',
        'Flex',
        'FlexGrow',
        'FlexShrink',
        'Order',
        'GridTemplateColumns',
        'GridColumnStartEnd',
        'GridTemplateRows',
        'GridRowStartEnd',
        'GridAutoFlow',
        'GridAutoColumns',
        'GridAutoRows',
        'Gap',
        'JustifyContent',
        'JustifyItems',
        'JustifySelf',
        'AlignContent',
        'AlignItems',
        'AlignSelf',
        'PlaceContent',
        'PlaceItems',
        'PlaceSelf',],
    'Spacing' => ['Padding',
        'Margin',
        'SpaceBetween',],
    'Sizing' => ['Width',
        'MinWidth',
        'MaxWidth',
        'Height',
        'MinHeight',
        'MaxHeight',],
    'Typography' => ['FontFamily',
        'FontSize',
        'FontSmoothing',
        'FontStyle',
        'FontWeight',
        'FontVariantNumeric',
        'LetterSpacing',
        'LineHeight',
        'ListStyleType',
        'ListStylePosition',
        'TextAlign',
        'TextColor',
        'TextDecoration',
        'TextDecorationColor',
        'TextDecorationStyle',
        'TextDecorationThickness',
        'TextUnderlineOffset',
        'TextTransform',
        'TextOverflow',
        'TextIndent',
        'VerticalAlign',
        'Whitespace',
        'WordBreak',
        'Content',],
    'Backgrounds' => ['BackgroundAttachment',
        'BackgroundClip',
        'BackgroundColor',
        'BackgroundOrigin',
        'BackgroundPosition',
        'BackgroundRepeat',
        'BackgroundSize',
        'BackgroundImage',
        'GradientColorStops',],
    'Borders' => ['BorderRadius',
        'BorderWidth',
        'BorderColor',
        'BorderStyle',
        'DivideWidth',
        'DivideColor',
        'DivideStyle',
        'OutlineWidth',
        'OutlineColor',
        'OutlineStyle',
        'OutlineOffset',
        'RingWidth',
        'RingColor',
        'RingOffsetWidth',
        'RingOffsetColor',],
    'Effects' => ['BoxShadow',
        'BoxShadowColor',
        'Opacity',
        'MixBlendMode',
        'BackgroundBlendMode',],
    'Filters' => ['Blur',
        'Brightness',
        'Contrast',
        'DropShadow',
        'Grayscale',
        'HueRotate',
        'Invert',
        'Saturate',
        'Sepia',
        'BackdropBlur',
        'BackdropBrightness',
        'BackdropContrast',
        'BackdropGrayscale',
        'BackdropHueRotate',
        'BackdropInvert',
        'BackdropOpacity',
        'BackdropSaturate',
        'BackdropSepia',],
    'Tables' => ['BorderCollapse',
        'TableLayout',],
    'Transitions&Animation' => ['TransitionProperty',
        'TransitionDuration',
        'TransitionTimingFunction',
        'TransitionDelay',
        'Animation',],
    'Transforms' => ['Scale',
        'Rotate',
        'Translate',
        'Skew',
        'TransformOrigin',],
    'Interactivity' => ['AccentColor',
        'Appearance',
        'Cursor',
        'CaretColor',
        'PointerEvents',
        'Resize',
        'ScrollBehavior',
        'ScrollMargin',
        'ScrollPadding',
        'ScrollSnapAlign',
        'ScrollSnapStop',
        'ScrollSnapType',
        'TouchAction',
        'UserSelect',
        'WillChange',],
    'SVG' => ['Fill',
        'Stroke',
        'StrokeWidth',],
    'Accessibility' => ['ScreenReaders',],
    'OfficialPlugins' => ['Typography',
        'Forms',
        'AspectRatio',
        'LineClamp',],
];
/**
 * @param $value
 * @return string
 */
function getStr($value)
{
    $txt = '<!doctype html>
<html>
<head>
    <title>' . $value . '</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../dist/output.css" rel="stylesheet">
    <script src="../../live.js"></script>
</head>
<body>

</body>
</html>';
    return $txt;
}

/**
 * @param array $list
 * @return void
 */
function extracted(array $list)
{
    foreach ($list as $key => $item) {
        echo $key . '</br>';
        mkdir($key, 0777, true);
        if (file_exists($key)) {

            foreach ($item as $value) {
                $address = $key . '/' . $value . '.html';
                chmod($address, 0777);
                $myfile = fopen($address, "w") or die("Unable to open file!");
                $txt = getStr($value);
                fwrite($myfile, $txt);
                fclose($myfile);

            }
        }

    }
}

extractedMain($list);


/**
 * @param array $list
 * @return void
 */
function extractedMain(array $list)
{
    foreach ($list as $key => $item) {
        echo $key . '</br>';
        mkdir($key, 0777, true);
        if (file_exists($key)) {

            foreach ($item as $value) {
                $address = $key . '/' . $value . '*.mkv';
                chmod($address, 0777);
                $myfile = fopen($address, "w") or die("Unable to open file!");
//                $txt = getStr($value);
//                fwrite($myfile, $txt);
                fclose($myfile);

            }
        }

    }
}