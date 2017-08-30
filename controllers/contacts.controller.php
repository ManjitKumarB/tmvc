<?php

/**
* 
*/
class ContactsController extends Controller
{
	public function __construct($data = array()){
		parent::__construct($data);
		$this->model = new Message();
	}

	public function index()
	{
		if ($_POST) {
			if ($this->model->save($_POST)) {
				Session::setFlash("Thank you! Your message was sent successfully!");
			}
		}
		//$this->data['test_content'] = 'Here will be a contacts list';
	}

	public function view(){
		$params = App::getRouter()->getParams();

		if (isset($params[0])) {
			$alias = strtolower($params[0]);
			$this->data['content'] = "Here will be a contact with '{$alias}' alias";
		}
	}

	public function admin_index(){
		$this->data = $this->model->getList();
	}
}

?>