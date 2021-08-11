<?
namespace App\Http\Controllers;

use  App\Http\Controllers\Controller;

abstract class AbstractController extends Controller {

    protected $data = [];

    /**
     * Display view.
     *
     * @param  string  $template
     * @return \Illuminate\Http\Response
     */
    protected function displayView($template) {
        return response()
            ->view($template, $this->data, 200)
            ->header('Content-Type', 'text/html'); 
    }
}