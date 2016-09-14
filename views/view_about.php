<script src="<?=$jsScript?>"></script>
<link rel="stylesheet" type="text/css" href="/css/ppt.css" />
<h2>О центре</h2>
<?=$viewdata["content"]?>
<br />
<button class="controls" id="previous"><</button>
<button class="controls" id="next">></button>
<div id = "ppts">
<li class="ppt turn_on"><img src="../images/ppt/<?=$viewdata["ppt"][0]?>"></li>
<?foreach ($viewdata["ppt"] as $file):?>
<li class="ppt"><img src="../images/ppt/<?=$file?>"></li>
<?endforeach;?>
</div>