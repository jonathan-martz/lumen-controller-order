<?php
/**
 * @copyright by Jonathan Martz
 */

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class OrderController extends Controller
{
    public function view()
    {
        $validatedData = $this->request->validate([]);
        return $this->getResponse();
    }

    public function collection()
    {
        $validatedData = $this->request->validate([]);
        return $this->getResponse();
    }
}
