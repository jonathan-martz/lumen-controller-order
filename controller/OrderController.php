<?php
/**
 * @copyright by Jonathan Martz
 */

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

/**
 * Class OrderController
 * @package App\Http\Controllers
 */
class OrderController extends Controller
{
    /**
     * @return mixed
     */
    public function view()
    {
        $validatedData = $this->request->validate([]);
        return $this->getResponse();
    }

    /**
     * @return mixed
     */
    public function collection()
    {
        $validatedData = $this->request->validate([]);
        return $this->getResponse();
    }
}
