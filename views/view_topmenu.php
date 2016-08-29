<?foreach ($viewdata as $link => $caption):?>
<ul>
    <li>
        <a href="<?=HOMEDIR."/".$link?>"><?=$caption?></a>
    </li>
</ul>
<?endforeach?>