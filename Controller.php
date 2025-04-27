<?php
require_once 'Model.php';
require_once 'View.php';

class Controller {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new Model();
        $this->view = new View();
    }

    public function handle($page) {
        if ($page == 'add') {
            $this->view->formAdd();
        } elseif ($page == 'save') {
            $this->model->save($_POST);
            header('Location: index.php');
        } elseif ($page == 'delete') {
            $this->model->delete($_GET['id']);
            header('Location: index.php');
        } else {
            $data = $this->model->getAll();
            $this->view->listData($data);
        }
    }
}
?>
