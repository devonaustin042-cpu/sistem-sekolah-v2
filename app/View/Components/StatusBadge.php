<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StatusBadge extends Component
{
    public $status;
    public $badgeClass;

    public function __construct($status)
    {
        $this->status = $status;

        if (in_array(strtolower($status), ['aktif', '1', 'true'])) {
            $this->badgeClass = 'bg-emerald-100 text-emerald-800 border-emerald-300';
        } else {
            $this->badgeClass = 'bg-rose-100 text-rose-800 border-rose-300';
        }
    }

    public function render()
    {
        return view('components.status-badge');
    }
}
