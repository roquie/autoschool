<?=HTML::style('css/admin/listeners.css')?>
<?=HTML::style('css/admin/msg.css')?>

    <div class="container">
    <div class="row">
        <div class="span4">
            <h1><small>Сообщения</small></h1>
        </div>

    </div>

    <div class="row">
        <div class="span3 l_select_group">
            <div class="well">
                <h5 class="header_block">Номер группы</h5>
                <label for="">Выберите:</label>
                <select name="select2">
                    <option selected="selected">Все ...</option>
                    <option>01-13</option>
                    <option>02-13</option>
                    <option>03-13</option>
                    <option>04-13</option>
                    <option>05-13</option>
                </select>
            </div>
        </div>
        <div class="span9 l_sort">
            <div class="well" style="height: 100px">
                <h5 class="header_block">Отправить сообщение слушателю</h5>
                    <form action="#" method="post" accept-charset="utf-8" novalidate>
                       <div class="row">
                           <div class="span1">
                               <img style="box-shadow: 0 1px 1px rgba(0,0,0,0.2)" src="<?=URL::site('img/admin_avatar.png')?>" alt="admin_logo"/>
                           </div>
                           <textarea name="msg" id="admin_msg" style="height: 44px; width: 483px; resize: none" placeholder="Введите сообщение"></textarea>
                           <input type="hidden" name="csrf" value="<?=Security::token()?>"/>
                           <input style="margin-top: 12px" type="submit" class="btn" name="submit"/>
                       </div>

                    </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="span3 l_fio">
            <div class="well">
                <h5 class="header_block">Фамилия И.О.</h5>
                <div class="wrap">
                    <?for($i=1;$i<=99;++$i):?>
                        <!-- http://stackoverflow.com/questions/9709209/html-select-only-one-checkbox-in-a-group -->
                        <input type="radio" name="listeners_names" style="margin-bottom: 6px"/><span> Петров Г.А. <?=$i?></span><br>
                    <?endfor?>
                </div>

            </div>
        </div>
        <div class="span9 l_info">
            <div class="well">
                <h5 class="header_block">Переписка с Петров Г.А.</h5>
                <div class="row" style="margin-bottom: 10px">
                    <div class="span1">
                        <img style="border-radius: 3px; box-shadow: 0 1px 1px rgba(0,0,0,0.2); height: 60px; width: 60px" src="https://lh5.googleusercontent.com/-8tZI2QQx310/AAAAAAAAAAI/AAAAAAAAADo/7_ZOUfX0-gk/photo.jpg" alt="img_user"/>
                    </div>
                    <div class="span6" style="background-color: #ffffff; border-radius: 3px; box-shadow: 0 0 1px rgba(0,0,0,0.2); height: 50px; padding: 5px">
                        <?=Text::limit_chars('1asd ad adka; ajdaajkahk adhakj akhdah kahdkjah kah dkjahdakjh akjdhajh dakjdhakjdhak hakjhd akh akjhdkaj hkajhdakjhd akhdkaj ahdkajhjkahdajkhdakjh akjh dajhdakhdakjhdakj hakhd akjh dkajdhakjdh akjdhakjdh akjhd akjh dkajshajkshdakjhdak jhkjadhakjhdakjdh', 125)?>
                    </div>
                    <div class="span1" style="background-color: #ffffff; border-radius: 3px; box-shadow: 0 0 1px rgba(0,0,0,0.2); height: 50px; width: 80px; padding: 5px">
                        <?=date('Y.m.d')?><br/>
                        <?=date('H:i:s')?>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 10px">
                    <div class="span1">
                        <img style="border-radius: 3px; box-shadow: 0 1px 1px rgba(0,0,0,0.2); height: 60px;" src="<?=URL::site('img/admin_avatar.png')?>" alt="img_admin"/>
                    </div>
                    <div class="span6" style="background-color: #ffffff; border-radius: 3px; box-shadow: 0 0 1px rgba(0,0,0,0.2); height: 50px; padding: 5px">
                        <?=Text::limit_chars('2asd ad adka; ajdaajkahk adhakj akhdah kahdkjah kah dkjahdakjh akjdhajh dakjdhakjdhak hakjhd akh akjhdkaj hkajhdakjhd akhdkaj ahdkajhjkahdajkhdakjh akjh dajhdakhdakjhdakj hakhd akjh dkajdhakjdh akjdhakjdh akjhd akjh dkajshajkshdakjhdak jhkjadhakjhdakjdh', 125)?>
                    </div>
                    <div class="span1" style="background-color: #ffffff; border-radius: 3px; box-shadow: 0 0 1px rgba(0,0,0,0.2); height: 50px; width: 80px; padding: 5px">
                        <?=date('Y.m.d')?><br/>
                        <?=date('H:i:s')?>
                    </div>
                </div>

            </div>
        </div>
    </div>

    </div>

<?=HTML::script('js/admin/editable.js')?>