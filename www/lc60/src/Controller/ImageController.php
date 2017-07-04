<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Image Controller
 *
 */
class ImageController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    protected function index()
    {

    }

     /**
     * svgData method
     *
     * @return string|null
     */
protected function svgData(
$font,
$title_font,
$title,
$emojitext,
$emojifont,
$fine_print,
$fine_font,
$type,
$owner,
$accumulative,
$rect_color,
$description,
$number,
$image_url = null,
$updated = '',
$header = true,
$width,
$height
)
{
$image = '';

if ($header)
{
$image = 
'<?xml version="1.0" encoding="UTF-8" standalone="no"?>'
.'<?xml-stylesheet type="text/css" href="/css/emoji.css" ?>'
.'<?xml-stylesheet type="text/css" href="/css/roman.css" ?>';
}
$image = $image
.'<svg ';

if ($header)
{
$image = $image
.'   xmlns:xlink="http://www.w3.org/1999/xlink"'
.'   xmlns:dc="http://purl.org/dc/elements/1.1/"'
.'   xmlns:cc="http://creativecommons.org/ns#"'
.'   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"'
.'   xmlns:svg="http://www.w3.org/2000/svg"'
.'   xmlns="http://www.w3.org/2000/svg"'
.'   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"';
}

if ($width != null)
{
$image = $image
.'   width="'.$width.'"';
}

if ($height != null)
{
$image = $image
.'   height="'.$height.'"';
}

$image = $image
.'   viewBox="0 0 744.09448819 1052.3622047"'
.'   id="svg2"'
.'   version="1.1"'
.'>'
.'  <defs'
.'     id="defs4" />'
.'  <sodipodi:namedview'
.'     id="base"'
.'     pagecolor="#ffffff"'
.'     bordercolor="#666666"'
.'     borderopacity="1.0"'
.'/>'
.'  <metadata'
.'     id="metadata7">'
.'    <rdf:RDF>'
.'      <cc:Work'
.'         rdf:about="">'
.'        <dc:format>image/svg+xml</dc:format>'
.'        <dc:type'
.'           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />'
.'        <dc:title />'
.'      </cc:Work>'
.'    </rdf:RDF>'
.'  </metadata>'
.'  <g'
.'     id="layer1">'
.'    <rect'
.'       style="fill:#f9f9f9;stroke-width:4;stroke-miterlimit:4;stroke-dasharray:none"'
.'       id="rect4324"'
.'       width="740"'
.'       height="1054.2858"'
.'       x="-2.8571429"'
.'       y="0.93363327"'
.'       ry="0" />'
.'    <rect'
.'       style="fill:#f9f9f9;stroke-width:4;stroke-miterlimit:4;stroke-dasharray:none;stroke:#000000;stroke-opacity:1"'
.'       id="rect4326"'
.'       width="694.28571"'
.'       height="948.57141"'
.'       x="22.857143"'
.'       y="72.362206" />'
/* original image rectangle was here */
.'    <rect'
.'       style="fill:#000000"'
.'       id="rect3348"'
.'       width="668.57141"'
.'       height="20"'
.'       x="37.761539"'
.'       y="578.07648"'
.'       ry="10" />'
.'    <rect'
.'       style="fill:#000000"'
.'       id="rect3348-3"'
.'       width="668.57141"'
.'       height="7.8781695"'
.'       x="37.761539"'
.'       y="663.07281"'
.'       ry="3.9390848" />'
.'    <g'
.'       id="g3412"'
.'       transform="translate(19.63691,-60.000008)">'
.'      <text'
.'         sodipodi:linespacing="125%"'
.'         id="text3400"'
.'         y="777.60071"'
.'         x="48.487324"'
.'         style="font-style:normal;font-weight:normal;font-size:35px;line-height:125%;font-family:'."'$font'".';letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
.'         xml:space="preserve"><tspan'
.'           y="777.60071"'
.'           x="48.487324"'
.'           id="tspan3402"'
.'           sodipodi:role="line">'.($number[0][0]).'</tspan></text>'
.'      <text'
.'         sodipodi:linespacing="125%"'
.'         id="text3404"'
.'         y="777.60071"'
.'         x="492.95444"'
.'         style="text-align:end;text-anchor:end;font-style:normal;font-weight:normal;font-size:35px;line-height:125%;font-family:'."'$font'".';letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
.'         xml:space="preserve"><tspan'
.'           y="777.60071"'
.'           x="650.00"'
.'           id="tspan3406"'
.'           sodipodi:role="line">'.($number[0][1]).'</tspan></text>'
.'    </g>'
.'    <text'
.'       xml:space="preserve"'
.'       style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:'."'$font'".';letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
.'       x="12.121831"'
.'       y="39.765083"'
.'       id="text3408"'
.'       sodipodi:linespacing="125%"><tspan'
.'         sodipodi:role="line"'
.'         id="tspan3410"'
.'         x="12.121831"'
.'         y="55"'
.'         style="font-style:italic;font-variant:normal;font-weight:normal;font-stretch:normal;font-family:'."'$font'".'">'.$type.'</tspan></text>'
.'    <text'
.'       xml:space="preserve"'
.'       style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:'."'$font'".';letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
.'       x="12.121831"'
.'       y="39.765083"'
.'       id="text3408"'
.'       sodipodi:linespacing="125%"><tspan'
.'         sodipodi:role="line"'
.'         id="tspan3410"'
.'         x="40"'
.'         y="54%"'
.'         style="font-style:italic;font-variant:normal;font-size:25px;font-weight:normal;font-stretch:normal;font-family:'."'$font'".'">'.$accumulative.'</tspan></text>'
.'    <g'
.'       transform="translate(19.63691,-5.259286)"'
.'       id="g3412-2">'
.'      <text'
.'         sodipodi:linespacing="125%"'
.'         id="text3400-4"'
.'         y="777.60071"'
.'         x="48.487324"'
.'         style="font-style:normal;font-weight:normal;font-size:35px;line-height:125%;font-family:'."'$font'".';letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
.'         xml:space="preserve"><tspan'
.'           y="777.60071"'
.'           x="48.487324"'
.'           id="tspan3402-7"'
.'           sodipodi:role="line">'.($number[1][0]).'</tspan></text>'
.'      <text'
.'         sodipodi:linespacing="125%"'
.'         id="text3404-9"'
.'         y="777.60071"'
.'         x="492.95444"'
.'         style="text-align:end;text-anchor:end;font-style:normal;font-weight:normal;font-size:35px;line-height:125%;font-family:'."'$font'".';letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
.'         xml:space="preserve"><tspan'
.'           y="777.60071"'
.'           x="650.00"'
.'           id="tspan3406-3"'
.'           sodipodi:role="line">'.($number[1][1]).'</tspan></text>'
.'    </g>'
.'    <g'
.'       transform="translate(19.63691,49.48145)"'
.'       id="g3412-9">'
.'      <text'
.'         sodipodi:linespacing="125%"'
.'         id="text3400-2"'
.'         y="777.60071"'
.'         x="48.487324"'
.'         style="font-style:normal;font-weight:normal;font-size:35px;line-height:125%;font-family:'."'$font'".';letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
.'         xml:space="preserve"><tspan'
.'           y="777.60071"'
.'           x="48.487324"'
.'           id="tspan3402-8"'
.'           sodipodi:role="line">'.($number[2][0]).'</tspan></text>'
.'      <text'
.'         sodipodi:linespacing="125%"'
.'         id="text3404-3"'
.'         y="777.60071"'
.'         x="492.95444"'
.'         style="text-align:end;text-anchor:end;font-style:normal;font-weight:normal;font-size:35px;line-height:125%;font-family:'."'$font'".';letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
.'         xml:space="preserve"><tspan'
.'           y="777.60071"'
.'           x="650.00"'
.'           id="tspan3406-0"'
.'           sodipodi:role="line">'.($number[2][1]).'</tspan></text>'
.'    </g>'
.'    <g'
.'       transform="translate(19.63691,104.22219)"'
.'       id="g3412-4">'
.'      <text'
.'         sodipodi:linespacing="125%"'
.'         id="text3400-9"'
.'         y="777.60071"'
.'         x="48.487324"'
.'         style="font-style:normal;font-weight:normal;font-size:35px;line-height:125%;font-family:'."'$font'".';letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
.'         xml:space="preserve"><tspan'
.'           y="777.60071"'
.'           x="48.487324"'
.'           id="tspan3402-2"'
.'           sodipodi:role="line">'.($number[3][0]).'</tspan></text>'
.'      <text'
.'         sodipodi:linespacing="125%"'
.'         id="text3404-5"'
.'         y="777.60071"'
.'         x="492.95444"'
.'         style="text-align:end;text-anchor:end;font-style:normal;font-weight:normal;font-size:35px;line-height:125%;font-family:'."'$font'".';letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
.'         xml:space="preserve"><tspan'
.'           y="777.60071"'
.'           x="650.00"'
.'           id="tspan3406-7"'
.'           sodipodi:role="line">'.($number[3][1]).'</tspan></text>'
.'    </g>'
.'    <g'
.'       transform="translate(19.63691,158.96293)"'
.'       id="g3412-1">'
.'      <text'
.'         sodipodi:linespacing="125%"'
.'         id="text3400-7"'
.'         y="777.60071"'
.'         x="48.487324"'
.'         style="font-style:normal;font-weight:normal;font-size:35px;line-height:125%;font-family:'."'$font'".';letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
.'         xml:space="preserve"><tspan'
.'           y="777.60071"'
.'           x="48.487324"'
.'           id="tspan3402-89"'
.'           sodipodi:role="line">'.($number[4][0]).'</tspan></text>'
.'      <text'
.'         sodipodi:linespacing="125%"'
.'         id="text3404-1"'
.'         y="777.60071"'
.'         x="730.95444"'
.'         style="text-align:end;text-anchor:end;font-style:normal;font-weight:normal;font-size:35px;line-height:125%;font-family:'."'$font'".';letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
.'         xml:space="preserve"><tspan'
.'           y="777.60071"'
.'           x="650.00"'
.'           id="tspan3406-5"'
.'           sodipodi:role="line">'.($number[4][1]).'</tspan></text>'
.'    </g>'
/**/
.'    <text'
.'       xml:space="preserve"'
.'       style="font-style:normal;font-weight:normal;font-size:35px;line-height:125%;font-family:'."'$font'".';text-align:end;letter-spacing:0px;word-spacing:0px;text-anchor:end;fill:#000080;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
.'       x="730.23999"'
.'       y="39.423279"'
.'       id="text3408-4"'
.'       sodipodi:linespacing="125%"><tspan'
.'         sodipodi:role="line"'
.'         id="tspan3410-9"'
.'         x="50%"'
.'         y="93%"'
.'         style="font-style:italic;font-size:30px;font-variant:normal;font-weight:normal;font-stretch:normal;font-family:'."'$fine_font'".';text-align:center;text-anchor:middle;fill:#000000">'.($fine_print[0]).'</tspan></text>'
/**/
.'    <text'
.'       xml:space="preserve"'
.'       style="font-style:normal;font-weight:normal;font-size:35px;line-height:125%;font-family:'."'$font'".';text-align:end;letter-spacing:0px;word-spacing:0px;text-anchor:end;fill:#000080;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
.'       x="730.23999"'
.'       y="39.423279"'
.'       id="text3408-4"'
.'       sodipodi:linespacing="125%"><tspan'
.'         sodipodi:role="line"'
.'         id="tspan3410-9"'
.'         x="50%"'
.'         y="95.5%"'
.'         style="font-style:italic;font-size:30px;font-variant:normal;font-weight:normal;font-stretch:normal;font-family:'."'$fine_font'".';text-align:center;text-anchor:middle;fill:#000000">'.($fine_print[1]).'</tspan></text>'
/**/
.'    <text'
.'       xml:space="preserve"'
.'       style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:'."'$font'".';text-align:end;letter-spacing:0px;word-spacing:0px;text-anchor:end;fill:#000080;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
.'       x="730.23999"'
.'       y="39.423279"'
.'       id="text3408-4"'
.'       sodipodi:linespacing="125%"><tspan'
.'         sodipodi:role="line"'
.'         id="tspan3410-9"'
.'         x="730.23999"'
.'         y="55"'
.'         style="font-style:italic;font-variant:normal;font-weight:normal;font-stretch:normal;font-family:'."'$font'".';text-align:end;text-anchor:end;fill:#000080">'.$owner.'</tspan></text>'
/**/
.'    <text'
.'       xml:space="preserve"'
.'       style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:'."'$font'".';text-align:end;letter-spacing:0px;word-spacing:0px;text-anchor:end;fill:#000080;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
.'       x="730.23999"'
.'       y="39.423279"'
.'       id="text3408-4"'
.'       sodipodi:linespacing="125%"><tspan'
.'         sodipodi:role="line"'
.'         id="tspan3410-9"'
.'         x="50%"'
.'         y="13.5%"'
.'         style="font-size:50px;font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:'."'$title_font'".';text-align:center;text-anchor:middle;fill:#000000">'.$title.'</tspan></text>'
/**/
.'    <text'
.'       xml:space="preserve"'
.'       style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:'."'$font'".';text-align:end;letter-spacing:0px;word-spacing:0px;text-anchor:end;fill:#000080;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
.'       x="730.23999"'
.'       y="39.423279"'
.'       id="text3408-4"'
.'       sodipodi:linespacing="125%"><tspan'
.'         sodipodi:role="line"'
.'         id="tspan3410-9"'
.'         x="50%"'
.'         y="61.0%"'
.'         style="font-size:35px;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-family:'."'$font'".';text-align:center;text-anchor:middle;fill:#000000">'.$description.'</tspan></text>'
/**/
.'    <text'
.'       xml:space="preserve"'
.'       style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:'."'$font'".';text-align:end;letter-spacing:0px;word-spacing:0px;text-anchor:end;fill:#000080;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
.'       x="730.23999"'
.'       y="39.423279"'
.'       id="text3408-4"'
.'       sodipodi:linespacing="125%"><tspan'
.'         sodipodi:role="line"'
.'         id="tspan3410-9"'
.'         x="96%"'
.'         y="99.0%"'
.'         style="font-size:20px;font-style:italic;font-variant:normal;font-weight:normal;font-stretch:normal;font-family:'."'$font'".';text-align:end;text-anchor:end;fill:#000000">'.$updated.'</tspan></text>';
/**/
if ($image_url != null)
{
  $image = $image.'</g>'.'<image preserveAspectRatio="xMaxYMid" xlink:href="'.$image_url.'" x="28.0%" y="20.0%" height="26.85%" width="44%" />';
}
else
{
  if (($emojitext != null) && ($emojifont !=null))
  {
    $image = $image
    .'    <text'
    .'       id="text4403"'
    .'       sodipodi:linespacing="100%"'
    .'         sodipodi:role="line"'
    .'         x="50%"'
    .'         y="39.75%"'
    .'         style="font-size:180px;text-align:center;text-anchor:middle;font-family:'."'$emojifont'".';">'.$emojitext.'</text>';
  }

  $image = $image.'</g>';
}

$image= $image
/* superimposed image rectangle as single path */
.'  <path'
.'     style="fill:'.$rect_color.';fill-rule:evenodd;stroke:#000000;stroke-width:4;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"'
.'     d="M 207.76172 177.89453 C 169.77315 177.89453 139.18945 208.47823 139.18945 246.4668 L 139.18945 457.89453 C 139.18945 495.8831 169.77315 526.4668 207.76172 526.4668 L 536.33203 526.4668 C 574.3206 526.4668 604.9043 495.8831 604.9043 457.89453 L 604.9043 246.4668 C 604.9043 208.47823 574.3206 177.89453 536.33203 177.89453 L 207.76172 177.89453 z M 244.9043 232.18164 L 499.18945 232.18164 C 519.76659 232.18164 536.33203 248.74708 536.33203 269.32422 L 536.33203 435.03906 C 536.33203 455.6162 519.76659 472.18164 499.18945 472.18164 L 244.9043 472.18164 C 224.32716 472.18164 207.76172 455.6162 207.76172 435.03906 L 207.76172 269.32422 C 207.76172 248.74708 224.32716 232.18164 244.9043 232.18164 z "'
.'     id="rect3336" />'
/* */
.'</svg>'."\n";


  return $image;
}

protected function svgBody(
$svgData
)
{
   if ($svgData != null)
   {   
    $response = $this->response;
    $response->body(
      $svgData
    );    

    $response = $response->withType('image/svg+xml');
    
    return $response;
   }
   else
   {
    return null;
   }
    
}

/**
@see http://php.net/manual/en/function.imagefilledrectangle.php
*/

private function ImageRectangleWithRoundedCorners(&$im, $x1, $y1, $x2, $y2, $radius, $color) 
{
// draw rectangle without corners
imagefilledrectangle($im, $x1+$radius, $y1, $x2-$radius, $y2, $color);
imagefilledrectangle($im, $x1, $y1+$radius, $x2, $y2-$radius, $color);
// draw circled corners
imagefilledellipse($im, $x1+$radius, $y1+$radius, $radius*2, $radius*2, $color);
imagefilledellipse($im, $x2-$radius, $y1+$radius, $radius*2, $radius*2, $color);
imagefilledellipse($im, $x1+$radius, $y2-$radius, $radius*2, $radius*2, $color);
imagefilledellipse($im, $x2-$radius, $y2-$radius, $radius*2, $radius*2, $color);
}


private function convertEntity($text)
{
$text = html_entity_decode($text);
// Convert UTF-8 string to HTML entities
//$text = mb_convert_encoding($text, 'HTML-ENTITIES',"UTF-8");
// Convert HTML entities into ISO-8859-1
//$text = html_entity_decode($text,ENT_NOQUOTES, "ISO-8859-1");

return($text); 
}

     /**
     * pngBody method
     *
     * @return string|null
     */
protected function pngBody(
$font,
$title_font,
$title,
$emojitext,
$emojifont,
$fine_print,
$fine_font,
$type,
$owner,
$accumulative,
$rect_color,
$description,
$number,
$image_url = null,
$updated = ''
)
{
    $handle = ImageCreate (200, 300) or die ("Cannot Create image"); 
    $bg_color = ImageColorAllocate ($handle, 0xE0, 0xE0, 0xE0);
    $black = ImageColorAllocate ($handle, 0x00, 0x00, 0x00);
    $navy = ImageColorAllocate ($handle, 0x00, 0x00, 0xA0);
    //$white = ImageColorAllocate ($handle, 0xFF, 0xFF, 0xFF);

    $red = hexdec(substr($rect_color,1,2));
    $green = hexdec(substr($rect_color,3,2));
    $blue = hexdec(substr($rect_color,5,2));

    $chosen_color = ImageColorAllocate ($handle, $red, $green, $blue); 

    imagerectangle($handle, 0, 0, 200-1, 300-1, $black);

    $this->ImageRectangleWithRoundedCorners($handle, 10,10+15,215-25,10+120, 5, $black);
    $this->ImageRectangleWithRoundedCorners($handle, 10+2,10+15+2,215-25-2,10+120-2, 5, $chosen_color);
    $this->ImageRectangleWithRoundedCorners($handle, 25,10+35,200-25-2,10+100, 5, $black);
    $this->ImageRectangleWithRoundedCorners($handle, 25+2,10+35+2,200-25-2-2,10+100-2, 5, $bg_color);
    
    ImageTTFText ($handle, 14, 0, 10, 20, $navy, $title_font,  ($owner != null)? $owner : $type);
    
    $i = 0;
    foreach ($fine_print as $print)
    {
      ImageTTFText ($handle, 9, 0, 10, ($i++)*10 + 265, $black, $fine_font,  $print);
    }
    
    ImageTTFText ($handle, 9, 0, 10,145, $black, $font,  $description);
    
    ImageTTFText ($handle, 9, 0, 10, 26 + 265, $black, $font,  $updated);

    ImageTTFText ($handle, 12, 0, 10, 165, $black, $font, ($number[0][0]).'  '.($number[0][1]));
    for ($r = 1; $r < 5; $r++)
    {
      ImageTTFText ($handle, 12, 0, 10, $r *20 + 165, $black, $font,  ($number[$r][0]));
      ImageTTFText ($handle, 12, 0, 110, $r *20 + 165, $black, $font,  ($number[$r][1]));
    }

    $explode = explode(' ', trim($title));

    $len = 0;
    $baser = 0;

    foreach ($explode as $word)
    {
      $len += strlen($word)+1; 
      if ($len > 17)
      {
	$baser++;
	$len = 0;
      }     
    }

    $len = 0;
    $baser = 85.5-($baser *18/2);
    $r = 0;
    $words ='';
    foreach ($explode as $word)
    {      
      $len += strlen($word)+1;           
      if ($len > 17)
      {
        ImageTTFText ($handle, 12, 0,28, (($r)*18) + ($baser), $black, $title_font,  $words);
        $words = '';
	$r++;
	$len = 0;
      }
      $words = $words.' '.$word;
    }

    ImageTTFText ($handle, 12, 0,28, (($r)*18) + ($baser), $black, $title_font,  $words);

    // Enable output buffering
    ob_start();
    imagepng($handle);
    // Capture the output
    $imagedata = ob_get_contents();
    // Clear the output buffer
    ob_end_clean();
  
    $response = $this->response;
    $response->body(
      $imagedata
    );
    $response = $response->withType('image/png');
    
    return $response;
}


}
