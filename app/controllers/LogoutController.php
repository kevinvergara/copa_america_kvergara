<?php

class LogoutController extends BaseController {

    public function getIndex(){

        session_destroy();

        return Redirect::to('/');

    }

}
