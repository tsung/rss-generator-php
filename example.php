<?php
include('RssGenerator.php');

$articles = array(
    1 => array(
        'title' => 'title1',
        'desc'  => 'desc1',
        'link'  => 'http://example.com/1.html',
        'cdate' => '2013-01-01 10:10:59',
    ),
    2 => array(
        'title' => 'title2',
        'desc'  => 'desc2',
        'link'  => 'http://example.com/2.html',
        'cdate' => '2013-01-01 10:11:59',
    ),
);

$rss = new RssGenerator();
$rss->set('title', 'this is a title.');

foreach ($articles as $i => $a) {
    $items[$i]['title']       =  $a['title'];
    $items[$i]['description'] = $a['desc'];
    $items[$i]['link']        = $a['link'];
    $items[$i]['pubDate']     = $a['cdate'];
}

echo $rss->get($items);
?>
