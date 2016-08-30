<h2>Фотогалерея</h2>
<p></p>
<? for ($i = 0; $i < count($viewdata); $i++) : ?>
    <a class="fancybox" rel="gallery1" href="<?=HOMEDIR?>/gallery/<?=$viewdata[$i]?>" title="">
    <img src="gallery/<?=$viewdata[$i]?>" width="100" height="75" /></a>
  	<? if (($i + 1) % 4 == 0) : ?>
  	   <br />
  	<?endif?>
<? endfor ?>