<div class="twitter">
    <div class="twitter-inner">
        <div class="twitter-logo"><i class="icon-twitter icon-4x icon-light"></i></div>
        <a id="logo" href="//twitter.com/<?=$tweets[0]->user->screen_name?>" rel="nofollow" target="_blank">
            <img src="<?=$tweets[0]->user->profile_image_url?>" />
            <div id="text-logo">@<?=$tweets[0]->user->screen_name?></div>
        </a>
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
                <div id="text">
                    <p>
                        <?=$item->text?><br>
                    </p>
                    <p id="date">
                        <a href="//twitter.com/<?=$item->user->screen_name?>/status/<?=$item->id_str?>" target="tweet"><i class="icon-twitter icon-light"></i> Смотреть</a>
                        <time datetime="<?=$item->created_at?>"><?=$date_text?></time>
                    </p>
                </div>
        <? endforeach; ?>
        <div class="button">
            <a href="#" id="close-slide" class="btn pull-left">Закрыть</a>
            <span class="btn btn-primary pull-right" id="update-slide">Обновить</span>
        </div>
    </div>
</div>