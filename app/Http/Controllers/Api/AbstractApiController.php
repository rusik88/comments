<?
namespace App\Http\Controllers\Api;

use  App\Http\Controllers\Controller;

abstract class AbstractApiController extends Controller {

    protected $json = [];

    protected function displayData($status = 200) {
        return response()
            ->json($this->json);
    }
}