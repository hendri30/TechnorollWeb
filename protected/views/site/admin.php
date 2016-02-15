<?php 
if(Yii::app()->user->isGuest){ 
	header('location:login');
}
if(!Yii::app()->user->isGuest){ ?>

Selamat datang di halaman Admin

<?php } ?>