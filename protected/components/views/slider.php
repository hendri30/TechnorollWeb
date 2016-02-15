<?php foreach ($models as $model) { ?>
  <div class="ls-slide" data-ls="slidedelay:3250;transition3d: 24,25,27,28;">
    <img src="<?php echo Yii::app()->request->baseUrl.'/images/slider/'.$model->file_name; ?>" class="ls-bg" alt="Slide background">
    <h1 class="ls-l" style="top:60px;left:700px;font-weight: 300;font-size:40px;color:#fff;white-space: nowrap;" data-ls="offsetxin:50;durationin:2000;rotateyin:60;transformoriginin:right 50% 0;offsetxout:-50;durationout:3000;showuntil:3000;rotateyout:-60;transformoriginout:left 50% 0;"><?php echo $model->caption; ?></h1>
    <p class="ls-l" style="top:100px;left:700px;font-weight: 500;font-size:30px;color:#e4545b;white-space: nowrap;" data-ls="offsetxin:-50;durationin:2000;delayin:500;rotateyin:-60;transformoriginin:left 50% 0;offsetxout:50;durationout:2000;showuntil:3000;rotateyout:60;transformoriginout:right 50% 0;"><?php echo $model->quotes; ?></p>
  </div>
<?php } ?>