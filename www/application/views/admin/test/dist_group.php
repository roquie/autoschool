<?=HTML::style('css/vendor/listbox.css')?>
<?=HTML::style('css/admin/groups.css')?>
<?=HTML::script('js/vendor/listbox.js')?>
<?=HTML::script('js/admin/group.js')?>

<div class="container">
    <h1><small>Распределение слушателей по группам</small></h1>
    <div class="block">

        <div class="row-fluid">

            <form action="<?=URL::site('admin/group/distrib_listeners')?>" method="POST" class="_admins_form <?=empty($none_group_users) ? 'hide' : null?>" data-callback="add_group">

                    <div class="span3">

                        <input type="hidden" name="listeners" id="inp_listeners"/>

                        <select id="listeners" multiple>
                            <?foreach($none_group_users as $k => $user):?>
                                <option value="<?=$k?>"><?=$user?></option>
                            <?endforeach?>
                        </select>
                    </div>

                    <div class="span1 btn-center">
                        <div class="btn-move">
                            <input type="submit" value="Зачислить" class="btn btn-success"/>
                        </div>
                    </div>

                    <div class="span3">
                        <select id="groups" name="group">
                            <?foreach($groups as $group):?>
                                <option value="<?=$group->id?>"><?=$group->name?></option>
                            <?endforeach?>
                        </select>
                    </div>

            </form>

        </div>

        <div class="span12 empty <?=!empty($none_group_users) ? 'hide' : null?>">
            <div class="nolistener">
                <h1>Новых слушателей нет. Все слушатели распределены по группам.</h1>
            </div>
        </div>

    </div>
</div>