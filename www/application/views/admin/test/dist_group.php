<div class="row">
    <div class="container">
        <h1><small>Распределение слушателей по группам</small></h1>
        <div class="well">
            фывик :)
            <br> <br>
            <?foreach($none_group_users as $k => $user):?>
                <ul>
                    <li><?=$k.' - '.$user?></li>
                </ul>
            <?endforeach?>
        </div>
    </div>
</div>