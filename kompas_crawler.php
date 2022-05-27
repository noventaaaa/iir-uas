<?php

// use Sastrawi\Stemmer\StemmerFactory;
// use Wamania\Snowball\StemmerFactory;

use markfullmer\porter2\Porter2;
use Sastrawi\StopWordRemover\StopWordRemoverFactory;

require_once __DIR__ . '/vendor/autoload.php';
include_once('simple_html_dom.php');
include_once('porter2.php');


$i = 0;
// $stemmerFactory = new StemmerFactory();
// $stemmer  = $stemmerFactory->createStemmer();


// LINK STEMMER PORTER : https://github.com/markfullmer/porter2

$stopWordRemoverFactory = new StopWordRemoverFactory();
$stopWordRemover = $stopWordRemoverFactory->createStopWordRemover();

$html = file_get_html("https://www.kompas.com/");
$news = [];


foreach ($html->find('div[class="article__list clearfix"]') as $berita) {
    $title = $berita->find('a[class="article__link"]', 0)->innertext;
    $date = $berita->find('div[class="article__date"]', 0)->innertext;


    $stemmedTitle = Porter2::stem($title);

    $stopTitle = $stopWordRemover->remove($stemmedTitle);

    $news[] = array(
        "date" => $date,
        "title" => $title,
        "stem_title" => $stemmedTitle,
        "stop_title" => $stopTitle,
        "link" => $berita->find('a[class="article__link"]', 0)->href
    );
}

// Contoh basing
$text = Porter2::stem('consistently');
echo $text; // consist
echo "<br>";
echo "<br>";
foreach ($news as $index => $berita) {
    echo "Date : {$berita['date']}";
    echo "<br>";
    echo "Title Original : {$berita['title']}";
    echo "<br>";
    echo "Title Stemmed : {$berita['stem_title']}";
    echo "<br>";
    echo "Title Stop Removed  : {$berita['stop_title']}";
    echo "<br>";
    echo "News Link  : {$berita['link']}";
    echo "<br>";
    echo "<br>";
    echo "<br>";
}
