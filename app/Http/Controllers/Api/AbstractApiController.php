<?
namespace App\Http\Controllers\Api;

use  App\Http\Controllers\Controller;
use App\Interfaces\RepositoryInterface;

abstract class AbstractApiController extends Controller {

    protected $json = [];

    protected function displayData($status = 200) {
        return response()
            ->json($this->json);
    }

    protected function addElement($post, RepositoryInterface $repository, $mess_success = '', $mess_error = '') {
        $element  = $repository->add($post);
        $this->json['element'] = $element;
        $this->json['status'] = $element ? true : false;
        $this->json['message'] = $this->json['status'] ? $mess_success : $mess_error;
        return $this->displayData();
    }
}