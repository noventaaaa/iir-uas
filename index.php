<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Kuis NTS IIR Genap 2021-2022</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <!--Header-->
    <header class="navbar navbar-fixed-top">
        <div class="nav-collapse collapse pull-right">
            <ul class="nav">
                <li class="active"><a href="index.php">Crawling Data</a></li>
            </ul>
        </div>
    </header>
    <!-- /header -->

    <!--Services-->
    <section id="services">
        <div class="container">
            <div class="center gap">
                <h3>Crawling Data Berita</h3>
                <form method="GET" action="index.php">
                    <p class="lead">Input Keyword <input type="text" name="keyword" value="<?php echo (isset($_GET["keyword"])) ? $_GET["keyword"] : "";  ?>"> <input type="submit">
                    </p>
                </form>

                <?php
                //ISIKAN CODE ANDA DISINI

                use MathPHP\Statistics\Distance;
                use Phpml\FeatureExtraction\TfIdfTransformer;
                use Phpml\FeatureExtraction\TokenCountVectorizer;
                use Phpml\Tokenization\WhitespaceTokenizer;
                use Sastrawi\Stemmer\StemmerFactory;
                use Sastrawi\StopWordRemover\StopWordRemoverFactory;

                require_once __DIR__ . '/vendor/autoload.php';
                include_once('simple_html_dom.php');

                $keyword = "";
                if (isset($_GET['keyword'])) {
                    $keyword = str_replace(' ', '+', $_GET["keyword"]);
                }

                $url = "https://scholar.google.com/scholar?q=$keyword&hl=en&as_sdt=0,5&as_rr=1";
                // $url = "https://www.sciencedirect.com/science/article/abs/pii/S1367578807000077";
                $html = file_get_html($url);
                $news = [];




                foreach ($html->find('div[class="gs_ri"]') as $index => $berita) {
                    if ($index == 5) break;



                    $title = $berita->find('a', 0)->innertext;
                    $link = $berita->find('a', 0)->href;
                    $cite = $berita->find('div[class="gs_fl"]', 0);
                    $cited = explode(" ",  $cite->find('a', 2)->innertext)[2];

                    // $context = stream_context_create(array(
                    //     'http' => array(
                    //         'header' => array('User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.1; rv:2.2) Gecko/20110201'),
                    //     ),
                    // ));

                    // $html_2 = file_get_html($link, false, $context);
                    // try {
                    //     foreach ($html_2->find('.surname', 0) as $test) {
                    //         if (in_array("Content-Type: application/pdf", get_headers($url))) {
                    //             break;
                    //         }

                    //         $check = gettype($test);
                    //         // if ($check == )
                    //         // $t = implode(" ", $test);
                    //         // echo $index . " " . $check;
                    //         echo $check;
                    //         echo "<br>";
                    //     }
                    // } catch (\Throwable $th) {
                    //     echo $th;
                    //     echo "<br>";
                    // }



                    $news[] = array(
                        "title" => $title,
                        "link" => $link,
                        "cite" => $cited
                    );
                }



                ?>
            </div>
        </div>
    </section>
    <!--/Services-->

    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Number of citation</th>

            </tr>
        </thead>
        <tbody>
            <?php if (count($news) > 0) : ?>
                <?php foreach ($news as $berita) : ?>
                    <tr>
                        <td><?= $berita["title"] ?> </td>
                        <td><?= $berita["cite"]; ?></td>

                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>

        </tbody>
    </table>

</body>

</html>