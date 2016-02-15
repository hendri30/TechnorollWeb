<?php

class SliderWidget extends CWidget {
	
	public function run() {

		$criteria=new CDbCriteria();
		$criteria->condition="active='1'";
		$criteria->order="sequence ASC";
		$models=Slider::model()->findAll($criteria);
		
		$this->render('slider', array(
			'models'=>$models
		));

	}
}

?>