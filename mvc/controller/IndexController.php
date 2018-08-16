<?php
namespace mvc\controller;

class IndexController extends Controller {

    public function welcome() {
        $this->data['name'] = 'renbd';
        return "index/welcome";
    }

    public function index() {
        return "index/index";
    }
}
