<div class="twitter">
    <div class="twitter-inner">
        <div class="twitter-logo"><i class="icon-twitter icon-4x icon-light"></i></div>
        <div id="transparent">
            <img src="<?=$tweets[0]->user->profile_image_url?>" />
            <span class="name">
                <a href="//twitter.com/<?=$tweets[0]->user->screen_name?>" rel="nofollow" target="_blank">
                    @<?=$tweets[0]->user->screen_name?>
                </a>
            </span>
            <span class="toolbar pull-right">
                <a href="#" id="update-slide" class="btn"><i class="icon-refresh"></i></a>
                <a href="#" id="close-slide" class="btn"><i class="icon-long-arrow-right"></i></a>
            </span>
        </div>

        <div id="text">
        <?
            foreach ($tweets as $item) :
                $date = strtotime('now')-strtotime($item->created_at);
                if(is_numeric($date) && $date > 0) {
                    if($date < 3) $date_text = "только что";
                    elseif($date < 60) $date_text = floor($date)." секунд назад";
                    elseif($date < 120) $date_text = "минуту назад";
                    elseif($date < 3600) $date_text = floor($date/60)." мин назад";
                    elseif($date < 7200) $date_text = "час назад";
                    elseif($date < 28800) $date_text = floor($date/3600)." ч назад";
                    elseif($date < 86400) $date_text = floor($date/3600)." ч назад";
                    elseif($date > 86400 && $date < 172800) $date_text = "вчера";
                    elseif($date >= 172800 && $date < 432000) $date_text = floor($date/86400)." дня назад";
                    elseif($date < 31536000) $date_text = floor($date/86400) . " дней назад";
                    else $date_text = "больше года назад";
                }
        ?>
                <div id="tweet">
                    <p>
                        <?
                            foreach ($item->entities->urls as $url) :
                                $item->text = str_replace($url->url, '<a href="'.$url->url.'" target="twitter">'.$url->display_url.'</a>', $item->text);
                            endforeach;
                        ?>
                        <?=$item->text?><br>
                    </p>
                    <p id="date">
                        <time datetime="<?=$item->created_at?>"><?=$date_text?></time>
                    </p>
                    <div class="clearfix"></div>
                </div>
        <? endforeach; ?>
        </div>
    </div>
</div>
<script>
    $(function() {
        var navbarH = $('.navbar').outerHeight(),
            footerH = $('#footer').outerHeight();
        $('#text').css({height : $('#pageslide-slide-wrap').height()-$('#text').position().top - navbarH - 5});
        $('#text').slimScroll({
            height : $('#text').height()
        });
    });
</script>