<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Projects | Minecraft Mod Development</title>
        <meta name="description" content="">
        <meta name="author" content="Minecraft Mod Development">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        
        <!--Open Graph protocol info for embeds-->
        <meta property="og:title" content="Minecraft Mod Developement" />
        <meta property="og:description" content="Mods"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://mcmoddev.com/projects/mods/" />
        <meta property="og:image" content="https://raw.githubusercontent.com/MinecraftModDevelopment/MMD-Site/master/img/logo_cutout.png" />
        <meta property="og:image:width" content="741" />
        <meta property="og:image:height" content="210" />

        <link rel="shortcut icon" href="../../img/favicon.ico">
        <link rel="stylesheet" type="text/css" href="../../css/ink-flex.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/main.css">
        <!--[if lt IE 9 ]>
        <link rel="stylesheet" href="css/ink-ie.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
        <![endif]-->
        <script type="text/javascript" src="../../js/modernizr.js"></script>
        <script type="text/javascript">
            Modernizr.load({
              test: Modernizr.flexbox,
              nope: 'css/ink-legacy.min.css'
            });
        </script>
        <script type="text/javascript" src="../../js/holder.js"></script>
        <script type="text/javascript" src="../../js/ink-all.min.js"></script>
        <script type="text/javascript" src="../../js/autoload.js"></script>
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
			    <a href="https://nodecraft.com/r/mmd"><img src="https://nodecraft.com/assets/images/logo-dark.png" widht="300" height="75" alt="Nodecraft Banner" align="right"></a>
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
                    <img src="../../img/logo.jpg" alt="MMD Logo">
                    <br>
                    <br>
                    <nav class="ink-navigation">
                         <ul class="breadcrumbs black">
                            <li><a href="#">Projects</a></li>
                            <li class="active"><a href="#">Mods</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        <h1>Mods</h1>
        <div class="ink-grid">
            <div class="column-group horizontal-gutters">
                <div class="all-33">
                    <nav class="ink-navigation">
                        <ul class="pagination black">
                            <li><a href="#"><<</a></li>
                            <li class="disabled"><a href="#">...</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li class="disabled"><a href="#">...</a></li>
                            <li><a href="#">>></a></li>
                        </ul>
                    </nav>
                    <br>
                    <nav class="ink-navigation">
                        <ul class="menu vertical black">
                            <li>
                                <a href="#">Technology</a>
                                <ul class="submenu">
                                    <li><a href="#">...</a></li>
                                </ul>
                            </li>
                            <li class="disabled"><a href="#">Magic</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="all-66">
                    <form class="ink-form">
                        <div class="column-group gutters">
                            <div class="control-group all-33">
                                <label for="search">Search</label>
                                <div class="control">
                                    <input type="text" name="search" id="search">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div>
<?php
    $json=file_get_contents('https://raw.githubusercontent.com/MinecraftModDevelopment/MMD-Site/master/data/mods.json'); 
    $arr=json_decode($json);

    foreach($arr as $entry) {
        $curse_json=file_get_contents('https://mcmoddev.com/curse/cursereader.php?c='.$entry->{'curseforge'});
        $curse=json_decode($curse_json);
        echo "\n"; 
        echo "                        <div class=\"column-group horizontal-gutters\">\n"; 
        echo "                            <div class=\"all-15\">\n"; 
        echo "                                <img src=\"".$curse->{'icon'}."\" style=\"width:90px;height:90px;vertical-align:middle\">\n"; 
        echo "                            </div>\n"; 
        echo "                            <div class=\"all-85\">\n"; 
        echo "                                <b><font size=\"5\">".$curse->{'name'}."</font></b> <small>by <b>".$curse->{'authors'}->{1}."</b></small>\n"; 
        echo "                                <br>\n";
        echo "                                <img src=\"https://cf.way2muchnoise.eu/".$entry->{'curseforge'}.".svg\"></img>   <img src=\"http://cf.way2muchnoise.eu/versions/".$entry->{'curseforge'}.".svg\"></img> ".$curse->{'desc'}."\n"; 
        echo "                            </div>\n"; 
        echo "                        </div>\n"; 
        echo "                        <hr>\n";
    }
?>
                    </div>
                </div>
            </div>
        </div>
		<div class="push"></div>
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
