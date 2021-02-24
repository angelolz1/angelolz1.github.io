<html>
    <head>
        <title>ACBot Profile Themes</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/themes.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap" rel="stylesheet">

        <link rel="icon" type="image/ico" sizes="32x32" href="/favicons/acbot.ico">
        <meta property="og:title" content="Animal Crossing Bot Profile Themes">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://angelolz.dev/acbot-themes">
        <meta name="og:image" itemprop="image" content="https://angelolz.dev/favicons/acbot@250.png">
        <meta property="og:description" content="Check out some themes for your AC:NH Profile here!">
    </head>
    <body>
        <div class="body">
            <div class="content">
                <h1>Profile Themes</h1>
                <h3>Take a preview of all the themes we have for your profile!</h3>
                <p><i>Note: This is only for <u>supporters</u>. If you want to be a supporter,
                    click <a href="https://www.ko-fi.com/angelolz" target="_blank" rel="noreferrer noopener">here</a>!</i></p>
                <br>
                <p><b>Do you think you have cool ideas for a theme? Join my <a href="https://discord.gg/jwMmh6d" target="_blank" rel="noreferrer noopener">support server</a> and let's talk!</b></p>
                <div class="theme-list">
                    <?php
                        $total_themes = count(glob("themes/*", GLOB_ONLYDIR));
                        for($i = 1; $i <= $total_themes; $i++)
                        {
                            $json = file_get_contents("themes/$i/theme.json");
                            $arr = json_decode($json);
                            $name = $arr -> theme_info -> name;
                            $creators = $arr -> creators[0] -> name;
                            if(count($arr-> creators) == 2)
                            {
                                $creators = $creators . " and " . $arr -> creators[1] -> name;
                            }

                            echo '<span class="theme-container">';
                            echo "<img src=\"themes/$i/preview.png\"/>";
                            echo "<p><b>$name</b></p>";
                            echo "<p>Created by $creators</p>";
                            echo "<p><i>ac!profile set background $i</i></p>";
                            echo '</span>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
