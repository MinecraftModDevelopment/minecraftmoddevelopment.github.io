<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Members | Minecraft Mod Development</title>
        <meta name="description" content="">
        <meta name="author" content="Minecraft Mod Development">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        
        <!--Open Graph protocol info for embeds-->
        <meta property="og:title" content="Minecraft Mod Developement" />
        <meta property="og:description" content="Members"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://mcmoddev.com/members/" />
        <meta property="og:image" content="https://raw.githubusercontent.com/MinecraftModDevelopment/MMD-Site/master/img/logo_cutout.png" />
        <meta property="og:image:width" content="741" />
        <meta property="og:image:height" content="210" />

        <link rel="shortcut icon" href="../img/favicon.ico">
        <link rel="stylesheet" type="text/css" href="../css/ink-flex.min.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <!--[if lt IE 9 ]>
        <link rel="stylesheet" href="css/ink-ie.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
        <![endif]-->
        <script type="text/javascript" src="../js/modernizr.js"></script>
        <script type="text/javascript">
            Modernizr.load({
              test: Modernizr.flexbox,
              nope: 'css/ink-legacy.min.css'
            });
        </script>
        <script type="text/javascript" src="../js/holder.js"></script>
        <script type="text/javascript" src="../js/ink-all.min.js"></script>
        <script type="text/javascript" src="../js/autoload.js"></script>
    </head>
    <body>
        <div class="ink-grid">
            <!--[if lte IE 9 ]>
            <div class="ink-alert basic" role="alert">
                <button class="ink-dismiss">&times;</button>
                <p>
                    <strong>You are using an outdated Internet Explorer version.</strong>
                    Please <a href="http://browsehappy.com/">upgrade to a modern browser</a> to improve your web experience.
                </p>
            </div>
            -->
            <header class="vertical-space">
			    <a href="https://nodecraft.com/r/mmd" class="nodecraft-header"><img src="https://nodecraft.com/assets/images/logo-dark.png" width="300" height="75" alt="Nodecraft Banner" align="right"></a>
                <br>
                <nav class="ink-navigation">
                    <ul class="menu horizontal black">
                        <?php $json=file_get_contents( 'https://raw.githubusercontent.com/MinecraftModDevelopment/MMD-Site/master/data/navbar.json'); $arr=json_decode($json); foreach ($arr->{'data'} as $key => $value) { echo '
                        <li><a href="'.$value->{'href'}.'">'.$value->{'text'}.'</a>
                        </li>'; } ?>
                    </ul>
                </nav>
            </header>
            <div class="column-group vertical-space">
                <div class="all-100">
                    <img src="../img/logo.jpg" alt="MMD Logo">
                </div>
            </div>
            <h1>Administration</h1>
            <div class="column-group gutters">
                <?php $json=file_get_contents( 'https://raw.githubusercontent.com/MinecraftModDevelopment/MMD-Site/master/data/staff.json'); $arr=json_decode($json); foreach ($arr as $key=> $value) { echo '
                <div class="xlarge-25 large-25 all-50">'; echo '
                    <figure class="ink-image">'; echo '
                        <figcaption class="dark">'; echo '
                            <center><b>'.$value->{'user'}.'</b>
                            </center>'; echo ' </figcaption>'; echo ' <img src="'.$value->{'icon'}.'">'; echo '
                        <figcaption class="over-bottom">'; echo '
                            <center><b>'.$value->{'role'}.'</b>
                            </center>'; echo ' </figcaption>'; echo ' </figure>'; echo ' </div>'; } ?>
            </div>
            <h1>Other</h1>
            <div class="column-group gutters">
                <?php $json=file_get_contents( 'https://raw.githubusercontent.com/MinecraftModDevelopment/MMD-Site/master/data/members.json'); $arr=json_decode($json); foreach ($arr as $key=> $value) { echo '
                <div class="xlarge-25 large-25 all-50">'; echo '
                    <figure class="ink-image">'; echo '
                        <figcaption class="dark">'; echo '
                            <center><b>'.$value->{'user'}.'</b>
                            </center>'; echo ' </figcaption>'; echo ' <img src="'.$value->{'icon'}.'">'; echo '
                        <figcaption class="over-bottom">'; echo '
                            <center><b>'.$value->{'role'}.'</b>
                            </center>'; echo ' </figcaption>'; echo ' </figure>'; echo ' </div>'; } ?>
            </div>
        </div>
        <footer class="clearfix">
            <div class="ink-grid">
                <ul class="unstyled inline half-vertical-space">
                    <?php $json=file_get_contents( 'https://raw.githubusercontent.com/MinecraftModDevelopment/MMD-Site/master/data/navbar.json'); $arr=json_decode($json); foreach ($arr->{'data'} as $key => $value) { echo '
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