<?php

namespace App\Policies;

use App\Models\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class EventPolicy
{
    use HandlesAuthorization;

    public function adminOnly(Admin $admin)
    {
        // ตรวจสอบว่าผู้ใช้นั้นเป็น admin หรือไม่
        return $admin->isAdmin();
    }
}
