<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Home | Minecraft Mod Development</title>
        <meta name="description" content="">
        <meta name="author" content="Minecraft Mod Development">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <!--Open Graph protocol info for embeds-->
        <meta property="og:title" content="Minecraft Mod Developement" />
        <meta property="og:description" content="Home"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://mcmoddev.com/" />
        <meta property="og:image" content="https://mcmoddev.com/img/logo_cutout.png" />
        <meta property="og:image:width" content="741" />
        <meta property="og:image:height" content="210" />

        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/ink-flex.min.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!--[if lt IE 9 ]>
        <link rel="stylesheet" href="css/ink-ie.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
        <![endif]-->
        <script type="text/javascript" src="js/modernizr.js"></script>
        <script type="text/javascript">
            Modernizr.load({
              test: Modernizr.flexbox,
              nope: 'css/ink-legacy.min.css'
            });
        </script>
        <script type="text/javascript" src="js/holder.js"></script>
        <script type="text/javascript" src="js/ink-all.min.js"></script>
        <script type="text/javascript" src="js/autoload.js"></script>
    </head>
    <body>
        <div class="ink-grid">
            <header class="vertical-space">
			    <a href="https://mcmoddev.com" class="logo-header"><img src="img/mmd_logo.png" width="125" height="125" alt="MMD Banner" align="left"></a>
                <br>
                <nav class="ink-navigation">
                    <ul class="menu horizontal black">
                        <?php $json=file_get_contents( 'data/navbar.json'); $arr=json_decode($json); foreach ($arr->{'data'} as $key => $value) { echo '
                        <li><a href="'.$value->{'href'}.'">'.$value->{'text'}.'</a>
                        </li>'; } ?>
                    </ul>
                </nav>
            </header>
        </div>
        <div class="column-group vertical-space align-center">
            <div class="all-100">
                <h1>COMING SOON!!!</h1>
            </div>
        </div>
		<div class="push"></div>
        <footer class="clearfix">
            <div class="ink-grid">
                <ul class="unstyled inline half-vertical-space">
                    <?php $json=file_get_contents( 'data/navbar.json'); $arr=json_decode($json); foreach ($arr->{'data'} as $key => $value) { echo '
                    <li><a href="'.$value->{'href'}.'">'.$value->{'text'}.'</a>
                    </li>'; } ?>
                </ul>
                <p class="note">
                    <?php echo $arr->{'settings'}->{'copy'}; ?>
                </p>
                <br>
            </div>
        </footer>
    </body>
</html>
