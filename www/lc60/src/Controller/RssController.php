<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Rss Controller
 *
 */
class RssController extends AppController
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
protected function rssHead($baseUrl,$title,$description,$ttl)
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
protected function rssItem($itemTitle,$itemDescription,$itemUrl,$permalink,$publishTime)
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
protected function rssTail()
{
  return "\n".
'</channel>'.
'</rss>'."\n";
}

     /**
     * rss method
     *
     * @return string|null
     */
protected function rssBody($rssString='')     
{
    $response = $this->response;
    $response->body(
      $rssString
    );

    $response = $response->withType('application/rss+xml');
    
    

    // Optionally force file download
    //$response = $response->withDownload('filename_for_download.ics');

    // Return response object to prevent controller from trying to render
    // a view.
    return $response;
}

}
