</div>

<div id="right">

    <div id="comment">
        <h3>Отзывы</h3>
        <ul id="ticker" class="ticker">
            <?foreach ($comment as $key=>$text):?>
            <li>
                <span>
                    <?=func::cutstr($text)?><a href="<?=HOMEDIR.'/comment/show/'.$key?>">Подробнее</a>
                </span>
            </li>
            <?endforeach?>
        </ul>
    </div>

</div>

<?include('view_flower.php')?>


<div id="footer">
    <a href="<?=HOMEDIR?>"><?=$footer?> РГУ «Центр социально-психологической реабилитации наркозависимых лиц» &copy; 2016</a>
</div>

</div><!--конец блока page-->
</body>
</html>