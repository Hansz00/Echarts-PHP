<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Calendar\YearLabel\Rich;

use Hisune\EchartsPHP\Property;

/**
 * @property string $color Default: '"#fff"'
 *    文字的颜色。
 *
 * @property string $fontStyle Default: 'normal'
 *    文字字体的风格
 *     可选：
 *     
 *     normal
 *     italic
 *     oblique
 *
 * @property string $fontWeight Default: 'normal'
 *    文字字体的粗细
 *     可选：
 *     
 *     normal
 *     bold
 *     bolder
 *     lighter
 *     100 | 200 | 300 | 400...
 *
 * @property string $fontFamily Default: 'sans-serif'
 *    文字的字体系列
 *     还可以是 serif , monospace, Arial, Courier New, Microsoft YaHei, ...
 *
 * @property int $fontSize Default: 12
 *    文字的字体大小
 *
 * @property string $align
 *    文字水平对齐方式，默认自动。
 *     可选：
 *     
 *     left
 *     center
 *     right
 *     
 *     rich 中如果没有设置 align，则会取父层级的 align。例如：
 *     {
 *         align: right,
 *         rich: {
 *             a: {
 *                 // 没有设置 `align`，则 `align` 为 right
 *             }
 *         }
 *     }
 *
 * @property string $verticalAlign
 *    文字垂直对齐方式，默认自动。
 *     可选：
 *     
 *     top
 *     middle
 *     bottom
 *     
 *     rich 中如果没有设置 verticalAlign，则会取父层级的 verticalAlign。例如：
 *     {
 *         verticalAlign: bottom,
 *         rich: {
 *             a: {
 *                 // 没有设置 `verticalAlign`，则 `verticalAlign` 为 bottom
 *             }
 *         }
 *     }
 *
 * @property int $lineHeight
 *    行高。
 *     rich 中如果没有设置 lineHeight，则会取父层级的 lineHeight。例如：
 *     {
 *         lineHeight: 56,
 *         rich: {
 *             a: {
 *                 // 没有设置 `lineHeight`，则 `lineHeight` 为 56
 *             }
 *         }
 *     }
 *
 * @property string|array $backgroundColor Default: 'transparent'
 *    文字块背景色。
 *     可以是直接的颜色值，例如：#123234, red, rgba(0,23,11,0.3)。
 *     可以支持使用图片，例如：
 *     backgroundColor: {
 *         image: xxx/xxx.png
 *         // 这里可以是图片的 URL，
 *         // 或者图片的 dataURI，
 *         // 或者 HTMLImageElement 对象，
 *         // 或者 HTMLCanvasElement 对象。
 *     }
 *     
 *     当使用图片的时候，可以使用 width 或 height 指定高宽，也可以不指定自适应。
 *
 * @property string $borderColor Default: 'transparent'
 *    文字块边框颜色。
 *
 * @property int $borderWidth Default: 0
 *    文字块边框宽度。
 *
 * @property int|array $borderRadius Default: 0
 *    文字块的圆角。
 *
 * @property int|array $padding Default: 0
 *    文字块的内边距。例如：
 *     
 *     padding: [3, 4, 5, 6]：表示 [上, 右, 下, 左] 的边距。
 *     padding: 4：表示 padding: [4, 4, 4, 4]。
 *     padding: [3, 4]：表示 padding: [3, 4, 3, 4]。
 *     
 *     注意，文字块的 width 和 height 指定的是内容高宽，不包含 padding。
 *
 * @property string $shadowColor Default: 'transparent'
 *    文字块的背景阴影颜色。
 *
 * @property int $shadowBlur Default: 0
 *    文字块的背景阴影长度。
 *
 * @property int $shadowOffsetX Default: 0
 *    文字块的背景阴影 X 偏移。
 *
 * @property int $shadowOffsetY Default: 0
 *    文字块的背景阴影 Y 偏移。
 *
 * @property int|string $width
 *    文字块的宽度。一般不用指定，不指定则自动是文字的宽度。在想做表格项或者使用图片（参见 backgroundColor）时，可能会使用它。
 *     注意，文字块的 width 和 height 指定的是内容高宽，不包含 padding。
 *     width 也可以是百分比字符串，如 100%。表示的是所在文本块的 contentWidth（即不包含文本块的 padding）的百分之多少。之所以以 contentWidth 做基数，因为每个文本片段只能基于 content box 布局。如果以 outerWidth 做基数，则百分比的计算在实用中不具有意义，可能会超出。
 *     注意，如果不定义 rich 属性，则不能指定 width 和 height。
 *
 * @property int|string $height
 *    文字块的高度。一般不用指定，不指定则自动是文字的高度。在使用图片（参见 backgroundColor）时，可能会使用它。
 *     注意，文字块的 width 和 height 指定的是内容高宽，不包含 padding。
 *     注意，如果不定义 rich 属性，则不能指定 width 和 height。
 *
 * @property string $textBorderColor Default: 'transparent'
 *    文字本身的描边颜色。
 *
 * @property int $textBorderWidth Default: 0
 *    文字本身的描边宽度。
 *
 * @property string $textShadowColor Default: 'transparent'
 *    文字本身的阴影颜色。
 *
 * @property int $textShadowBlur Default: 0
 *    文字本身的阴影长度。
 *
 * @property int $textShadowOffsetX Default: 0
 *    文字本身的阴影 X 偏移。
 *
 * @property int $textShadowOffsetY Default: 0
 *    文字本身的阴影 Y 偏移。
 *
 * {_more_}
 */
class <user defined style name> extends Property {}