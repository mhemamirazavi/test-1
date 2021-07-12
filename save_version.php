<!DOCTYPE html>
<html lang="fa-IR">

<head>
    <meta charset="UTF-8">
    <title>firstnews.ir</title>
    <meta http-equiv="refresh" content="20" />
    <?php
    error_reporting();
    $rss_array = ["https://www.sena.ir/rss", "https://www.asriran.com/fa/rss/allnews", "https://fararu.com/fa/rss/allnews", "https://www.irna.ir/rss", "https://www.farsnews.ir/rss", "https://khabarfarsi.com/rss/top", "https://www.tabnak.ir/fa/rss/allnews", "https://www.mehrnews.com/rss", "https://www.iribnews.ir/fa/rss/allnews"];
    foreach ($rss_array as $rss_url) {
        $rss = simplexml_load_file($rss_url);
        echo '<h1>' . $rss->channel->title . '</h1>';
        echo '<h2><a href="' . $rss->channel->item->link . '">' . $rss->channel->item->title . "</a></h2>";
        echo $rss->channel->item->pubDate;
        echo $rss->channel->itemdescription;
    }
    //rss tansim bekhater ndashtane title monaseb (name site) dar line 20 
    $RSSout = simplexml_load_file("https://www.tasnimnews.com/fa/rss/feed/0/7/0/%D8%A2%D8%AE%D8%B1%DB%8C%D9%86-%D8%A7%D8%AE%D8%A8%D8%A7%D8%B1-%D8%A7%D8%AE%D8%A8%D8%A7%D8%B1-%D8%B1%D9%88%D8%B2");
    echo '<h1>' . $RSSout->channel->title . '|خبر گذاری ی تسنیم' . '</h1>';
    echo '<h2><a href="' . $RSSout->channel->item->link . '">' . $RSSout->channel->item->title . "</a></h2>";
    echo $RSSout->channel->item->pubDate;
    echo $RSSout->channel->itemdescription;
    ?>
</head>

<body>

</body>

</html>