<?php
namespace mvc\controller;

class IndexController extends Controller {

    public function index() {
        $this->data['name'] = 'renbd';
        return "index/welcome";
    }
}
