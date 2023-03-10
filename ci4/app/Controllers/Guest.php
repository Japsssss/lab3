<?php

namespace App\Controllers;

use App\Models\GuestModel;

class Guest extends BaseController
{
    public function index()
    {
        $model = model(GuestModel::class);

        $data = [
            'guest'  => $model->getGuest(),
            'title' => 'Guest Book 2023',
        ];

        return view('templates/header', $data)
            . view('guest/index')
            . view('templates/footer');
    }
}