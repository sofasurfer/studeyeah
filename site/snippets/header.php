<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?= $site->title()->html() ?></title>
    <meta name="description" content="<?= $site->description()->html() ?>">
    <meta name="keywords" content="<?= $site->keywords()->html() ?>">
    <meta name="author" content="<?= $site->author()->html() ?>">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">   
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <?= css('assets/css/index.css?v=1') ?>

</head>
