<?php
class CartController extends Controller
{
	public function actionIndex()
	{
		$this->layout = 'main';
		$this->breadcrumbs = array(
			'Giỏ hàng' => ''
			);
		$this->pageTitle = 'Giỏ hàng';
		$title = $this->pageTitle;
		$this->render('index', compact('content', 'title'));
	}
}