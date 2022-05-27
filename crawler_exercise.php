<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <?php

    include_once("kompas_crawler.php");
    ?>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Category</th>
                <th scope="col">Title</th>
                <th scope="col">Summary</th>
                <th scope="col">Link</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($news as $index => $berita) : ?>
                <tr>
                    <th scope="row"><?= $index ?></th>
                    <td><?= $berita['category'] ?></td>
                    <td><?= $berita['title'] ?></td>
                    <td><?= $berita['summary'] ?></td>
                    <td><a href="<?= $berita['link'] ?>" target="_blank">Click Here</a></td>
                </tr>
            <?php endforeach; ?>


        </tbody>
    </table>


</body>

</html>