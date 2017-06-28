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
     * rssHead method
     *
     * @return string|null
     */
protected function svgHead($baseUrl,$title,$description,$ttl)
{
  $rssString =
  '<?xml version="1.0" encoding="UTF-8"?>'.
  '<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">'.
  '<channel>'.
  '<atom:link href="'.$baseUrl.'news/rss'.'" rel="self" type="application/rss+xml"/>'.
  '<title>'.$title.'</title>'.
  '<description>'.$description.'</description>'.
  '<link>'.$baseUrl.'news/</link>'.
  '<lastBuildDate>'.date('r').'</lastBuildDate>'.
  '<pubDate>'.date('r').'</pubDate>'.
  '<ttl>'.$ttl.'</ttl>';

  return $rssString;
}

     /**
     * rssItem method
     *
     * @return string|null
     */
protected function svgItem($itemTitle,$itemDescription,$itemUrl,$permalink,$publishTime)
{
 $rssString = "\n".
 '<item>'.
  '<title>'.$itemTitle.'</title>'.
  '<description>'.$itemDescription.'</description>';
  
  $useUrl = true;
  
  if ($itemUrl != null)
  {
      $useUrl = (strlen($itemUrl)>0);
  }
  else
  {
    $useUrl = false;
  }
  
  if ($useUrl)
  {
     $rssString = $rssString.'<link>'.$itemUrl.'</link>';
  }
  else
  {
   $rssString = $rssString.'<link>'.$permalink.'</link>';
  }
  $rssString = $rssString.
  '<guid isPermaLink="true">'.$permalink.'</guid>'.
  '<pubDate>'.date('r', $publishTime).'</pubDate>'.
 '</item>';
 
 return $rssString;
}

     /**
     * rssTail method
     *
     * @return string|null
     */
protected function svgTail()
{
  return "\n".
'</channel>'.
'</rss>'."\n";
}


     /**
     * svgData method
     *
     * @return SVGImage|null
     */
protected function svgData()
{
$image = new SVGImage(400, 600);
$doc = $image->getDocument();

// blue 40x40 square at (0, 0)
{
$square = new SVGRect(38.572, 14.225, 326.857, 245.341);

/*
    <rect
       style="fill:#008000;fill-rule:evenodd;:;:2.7834549;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       id="rect3336"
       width="324.0737"
       height="242.55823"
       x="87.963165"
       y="421.18774"
       ry="47.71637" />
*/

$square->setStyle('fill', '#008000');
$square->setStyle('fill-rule', 'evenodd');
$square->setStyle('stroke', '#000000');
$square->setStyle('stroke-width', '2');
$square->setStyle('stroke-linecap', 'round');
$square->setStyle('stroke-linejoin', 'miter');
$square->setStyle('stroke-miterlimit', '4');
$doc->addChild($square);
}

{
$square = new SVGRect(90.000, 52.827, 224.000, 168.136);

/*
    <rect
       style="fill:#008000;fill-rule:evenodd;:;:2.7834549;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       id="rect3336"
       width="324.0737"
       height="242.55823"
       x="87.963165"
       y="421.18774"
       ry="47.71637" />
*/

$square->setStyle('fill', '#FFFFFF');
$square->setStyle('fill-rule', 'evenodd');
$square->setStyle('stroke', '#000000');
$square->setStyle('stroke-width', '2');
$square->setStyle('stroke-linecap', 'round');
$square->setStyle('stroke-linejoin', 'miter');
$square->setStyle('stroke-miterlimit', '4');
$doc->addChild($square);
}

return $image;
}


     /**
     * svgBody method
     *
     * @return string|null
     */
protected function svgBody(
$font,
$title_font,
$title,
$emojitext,
$emojifont,
$fine_print,
$fine_font,
$type,
$owner,
$rect_color,
$description,
$number
)
{

$image = 
'<?xml version="1.0" encoding="UTF-8" standalone="no"?>'
.'<?xml-stylesheet type="text/css" href="/css/emoji.css" ?>'
.'<svg '
.'   xmlns:xlink="http://www.w3.org/1999/xlink"'
.'   xmlns:dc="http://purl.org/dc/elements/1.1/"'
.'   xmlns:cc="http://creativecommons.org/ns#"'
.'   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"'
.'   xmlns:svg="http://www.w3.org/2000/svg"'
.'   xmlns="http://www.w3.org/2000/svg"'
.'   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"'
.'   width="210mm"'
.'   height="297mm"'
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
.'    <rect'
.'       style="fill:'.$rect_color.';fill-rule:evenodd;stroke:#000000;stroke-width:4;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"'
.'       id="rect3336"'
.'       width="465.71429"'
.'       height="348.57144"'
.'       x="139.19009"'
.'       y="177.89539"'
.'       ry="68.571426" />'
.'    <rect'
.'       style="fill:#ffffff;fill-rule:evenodd;stroke:#000000;stroke-width:3;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"'
.'       id="rect3338"'
.'       width="328.57144"'
.'       height="240"'
.'       x="207.76152"'
.'       y="232.18109"'
.'       ry="37.142841" />'
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
.'         style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
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
.'         style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
.'         xml:space="preserve"><tspan'
.'           y="777.60071"'
.'           x="492.95444"'
.'           id="tspan3406"'
.'           sodipodi:role="line">'.($number[0][1]).'</tspan></text>'
.'    </g>'
.'    <text'
.'       xml:space="preserve"'
.'       style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
.'       x="12.121831"'
.'       y="39.765083"'
.'       id="text3408"'
.'       sodipodi:linespacing="125%"><tspan'
.'         sodipodi:role="line"'
.'         id="tspan3410"'
.'         x="12.121831"'
.'         y="39.765083"'
.'         style="font-style:italic;font-variant:normal;font-weight:normal;font-stretch:normal;font-family:'."'$font'".'">'.$type.'</tspan></text>'
.'    <g'
.'       transform="translate(19.63691,-5.259286)"'
.'       id="g3412-2">'
.'      <text'
.'         sodipodi:linespacing="125%"'
.'         id="text3400-4"'
.'         y="777.60071"'
.'         x="48.487324"'
.'         style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
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
.'         style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
.'         xml:space="preserve"><tspan'
.'           y="777.60071"'
.'           x="492.95444"'
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
.'         style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
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
.'         style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
.'         xml:space="preserve"><tspan'
.'           y="777.60071"'
.'           x="492.95444"'
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
.'         style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
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
.'         style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
.'         xml:space="preserve"><tspan'
.'           y="777.60071"'
.'           x="492.95444"'
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
.'         style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
.'         xml:space="preserve"><tspan'
.'           y="777.60071"'
.'           x="48.487324"'
.'           id="tspan3402-89"'
.'           sodipodi:role="line">'.($number[4][0]).'</tspan></text>'
.'      <text'
.'         sodipodi:linespacing="125%"'
.'         id="text3404-1"'
.'         y="777.60071"'
.'         x="492.95444"'
.'         style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
.'         xml:space="preserve"><tspan'
.'           y="777.60071"'
.'           x="492.95444"'
.'           id="tspan3406-5"'
.'           sodipodi:role="line">'.($number[4][1]).'</tspan></text>'
.'    </g>'
/**/
.'    <text'
.'       xml:space="preserve"'
.'       style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;text-align:end;letter-spacing:0px;word-spacing:0px;text-anchor:end;fill:#000080;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
.'       x="730.23999"'
.'       y="39.423279"'
.'       id="text3408-4"'
.'       sodipodi:linespacing="125%"><tspan'
.'         sodipodi:role="line"'
.'         id="tspan3410-9"'
.'         x="50%"'
.'         y="92.5%"'
.'         style="font-style:italic;font-size:30px;font-variant:normal;font-weight:normal;font-stretch:normal;font-family:'."'$fine_font'".';text-align:center;text-anchor:middle;fill:#000000">'.($fine_print[0]).'</tspan></text>'
/**/
.'    <text'
.'       xml:space="preserve"'
.'       style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;text-align:end;letter-spacing:0px;word-spacing:0px;text-anchor:end;fill:#000080;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
.'       x="730.23999"'
.'       y="39.423279"'
.'       id="text3408-4"'
.'       sodipodi:linespacing="125%"><tspan'
.'         sodipodi:role="line"'
.'         id="tspan3410-9"'
.'         x="50%"'
.'         y="95%"'
.'         style="font-style:italic;font-size:30px;font-variant:normal;font-weight:normal;font-stretch:normal;font-family:'."'$fine_font'".';text-align:center;text-anchor:middle;fill:#000000">'.($fine_print[1]).'</tspan></text>'
/**/
.'    <text'
.'       xml:space="preserve"'
.'       style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;text-align:end;letter-spacing:0px;word-spacing:0px;text-anchor:end;fill:#000080;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
.'       x="730.23999"'
.'       y="39.423279"'
.'       id="text3408-4"'
.'       sodipodi:linespacing="125%"><tspan'
.'         sodipodi:role="line"'
.'         id="tspan3410-9"'
.'         x="730.23999"'
.'         y="39.423279"'
.'         style="font-style:italic;font-variant:normal;font-weight:normal;font-stretch:normal;font-family:'."'$font'".';text-align:end;text-anchor:end;fill:#000080">'.$owner.'</tspan></text>'
/**/
.'    <text'
.'       xml:space="preserve"'
.'       style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;text-align:end;letter-spacing:0px;word-spacing:0px;text-anchor:end;fill:#000080;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
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
.'       style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;text-align:end;letter-spacing:0px;word-spacing:0px;text-anchor:end;fill:#000080;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"'
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
.'       id="text4403"'
.'       sodipodi:linespacing="100%"'
.'         sodipodi:role="line"'
.'         x="50%"'
.'         y="39.75%"'
.'         style="font-size:180px;text-align:center;text-anchor:middle;font-family:'."'$emojifont'".';">'.$emojitext.'</text></g>'
.'</svg>'."\n";

    $response = $this->response;
    $response->body(
      $image
    );

    $response = $response->withType('image/svg+xml');
    
    return $response;
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
$rect_color,
$description,
$number
)     
{
    $handle = ImageCreate (200, 300) or die ("Cannot Create image"); 
    $bg_color = ImageColorAllocate ($handle, 0xD0, 0xD0, 0xD0);
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

    for ($r = 0; $r < 5; $r++)
    {
      ImageTTFText ($handle, 15, 0, 10, $r *30 + 170, $black, $font,  ($number[$r][0]));
      ImageTTFText ($handle, 15, 0, 140, $r *30 + 170, $black, $font,  ($number[$r][1]));
    }

    $explode = explode(' ', trim($title));

    $len = 0;
    $baser = 0;

    foreach ($explode as $word)
    {
      $len += strlen($word)+1; 
      if ($len > 14)
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
      $words = $words.' '.$word;      
      if ($len > 14)
      {
        ImageTTFText ($handle, 12, 0,104.85-(strlen($words)*4.85) , (($r)*18) + ($baser), $black, $title_font,  $words);
        $words = '';
	$r++;
	$len = 0;
      }
    }

    ImageTTFText ($handle, 12, 0,104.85-(strlen($words)*4.85), (($r)*18) + ($baser), $black, $title_font,  $words);

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
