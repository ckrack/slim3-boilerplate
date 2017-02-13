<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Slim3 Boilerplate</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Short description of the page (limit to 150 characters) -->
        <!-- In *some* situations this description is used as a part of the snippet shown in the search results. -->
        <meta name="description" content="">

        <link rel="stylesheet" href="/css/main.css">

        <link rel="author" href="humans.txt">

        <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <h1>Slim3 Boilerplate</h1>
        <div>a microframework for PHP with opinionated defaults</div>

        <?php if (isset($name)) : ?>
            <h2>Hello <?= htmlspecialchars($name); ?>!</h2>
        <?php else : ?>
            <p>Try <a href="/SlimFramework">SlimFramework</a>
        <?php endif; ?>
        <script src="/js/main.js"></script>
    </body>
</html>

