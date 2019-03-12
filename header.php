<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>
    <?php wp_head(); ?>
</head>
<body>

    <header class='header'>
        
        <?php include get_template_directory() . '/template-parts/1-header/1-top-nav.php'; ?>

    </header>
    
</body>
</html>