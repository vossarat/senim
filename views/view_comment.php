<!--<h2>Отзывы</h2>
<p><?=$content?>-->
<h3>Отзывы</h3>
<ul id="ticker" class="ticker">
    <?
    foreach ($viewdata as $key=>$text):?>
    <li>
        <span>
            <?=func::cutstr($text)?><a href="<?=HOMEDIR.'/comment/show/'.$key?>">Подробнее</a>
        </span>
    </li>
    <?endforeach?>
</ul>