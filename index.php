<?php

ini_set('user_agent', 'Wikipedia RSS/0.1 (http://danielrayjones.com/; dan@danielrayjones.com)');

$random = file_get_contents('http://en.wikipedia.org/w/api.php?action=query&list=random&rnnamespace=0&format=json');
$data = json_decode($random);

$title = $data['query']['random'][0]['title'];
$id = $data['query']['random'][0]['id'];

// http://en.wikipedia.org/w/index.php?action=render&title={$title} // Rendered HTML
// http://en.wikipedia.org/w/index.php?action=raw&title={$title}    // Raw wikitext
// http://en.wikipedia.org/w/api.php?action=query&prop=revisions&rvprop=content&titles={$title}&format=json // JSON with wikitext
// $page['query']['pages'][$id]['revisions'][0]['*']

