<?php $this->beginContent('//layouts/main'); ?>
<div id="sidebar" class="left">

	<?php
		$this->widget('ext.portlets.HotCates',array('limit'=>12));
		$this->widget('ext.silder.HotItems',array('id'=>'baobao','keyword'=>'麦包包','filename'=>'baobao.js','express'=>36000));
		$this->widget('ext.portlets.NewArticles',array('limit'=>12,'htmlOptions'=>array('style'=>'margin-top:10px;border:1px solid #C2D5E3;')));
		$this->widget('ext.silder.HotItems',array('id'=>'xifu','keyword'=>'西装','filename'=>'xifu.js','express'=>36000));
		$this->widget('ext.silder.HotItems',array('id'=>'shoes','keyword'=>'女鞋','filename'=>'nvxie.js','express'=>36000));
	?>

</div><!-- sidebar -->
<div id="main">
	<?php echo $content; ?>
</div><!-- main -->

<div class="clear"></div>
<?php $this->endContent(); ?>