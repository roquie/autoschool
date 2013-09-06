<ul class="unstyled files">
    <?php
        foreach ($files as $key => $value) :
            if ($value['type'] === 'dir') :
    ?>
            <li><a data-url="<?=URL::site('admin/mail/attache')?>" type="<?=$value['type']?>" href="<?=$path.'/'.$value['file']?>"><i class="icon-folder-close"></i> <?=$value['file']?></a></li>
    <?php
            else :
    ?>
            <li>
                <div class="check file">
                    <?=$value['file']?>
                    <input type="checkbox" value="<?=$path.'/'.$value['file']?>" id="file" />
                </div>
            </li>
    <?php
            endif;
        endforeach;
    ?>
</ul>