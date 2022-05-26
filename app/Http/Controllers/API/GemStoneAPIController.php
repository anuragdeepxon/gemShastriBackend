<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\GemStone;
use App\Http\Controllers\AppBaseController;

class GemStoneAPIController extends AppBaseController
{
    public function index()
    {
        $data = GemStone::all();

        if (!$data) {
            return $this->sendError('Data not found', 404);
        }

        return $this->sendResponse($data, 'Data retrieved successfully');
    }
}
