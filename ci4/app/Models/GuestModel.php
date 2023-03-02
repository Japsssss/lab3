<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
    protected $table = 'pjauod_myguest';
    protected $allowedFields = ['name', 'email', 'website', 'comment'];
    
    public function getGuest()
    {
            return $this->findAll();
    }
}
