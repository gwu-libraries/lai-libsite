<?php // adapted from Tony Thomas http://anthonygthomas.com/2011/03/12/simple-rss-parsing-and-caching-using-php/
class RssParser
{
  public function checkCache($data=array())
  {
    foreach ($data as $service => $feed)
    {
      $path = '/tmp/' . $service . '.cache';
      // $path = '../sites/default/files/feed/' . $service . '.cache';
      if ((!file_exists($path) || time() - filemtime($path) > 60) && $cache = fopen($path, 'w+'))
      {
        $rss_contents = $this->getFeed($feed);
        fwrite($cache, $rss_contents);
        fclose($cache);
        return unserialize($rss_contents);
      }
      else
      {
        $cache = fopen($path, 'r');
        return unserialize(file_get_contents($path));
        fclose($cache);
      }
    }
  }
   
  protected function getFeed($url)
  {
    $xml = array();
    $doc = new DOMDocument();
    $doc->load($url);
    foreach ($doc->getElementsByTagName('item') as $node)
    {
      $rss = array ( 
        'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
        'description' => $node->getElementsByTagName('description')->item(0)->nodeValue,
        'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
        'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue
        );
      array_push($xml, $rss);
    } //endforeach element ids
    return serialize($xml);
  }
}