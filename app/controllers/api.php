<?php

class API extends Controller {
    private $_authError = array('data' => "You're not aloud to access this", "name" => "error");

    public function index($path = '', $sec = '')
    {
        switch($path) {
            case 'page':
                break;
            default:
                $this->api(array('error' => 'You must hit a valid endpoint.'), 'errors');
                break;
        }
    }

    private function _authCheck($json)
    {

    }

    private function handlePageRoute($secPath)
    {
        
    }
}