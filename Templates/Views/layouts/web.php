<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title_web ?? 'Welcome to CodeIgniter 4!';?></title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="<?= base_url('favicon.ico');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/web.css');?>">
</head>
<body>
    <!-- HEADER: MENU + HEROE SECTION -->
    <?= modulesView('Templates/components/web/navbar');?>
    <!-- CONTENT -->
    <?= modulesView($view_template);?>
    <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
    <?= modulesView('Templates/components/web/footer');?>
</body>

</html>