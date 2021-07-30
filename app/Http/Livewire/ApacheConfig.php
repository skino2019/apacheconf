<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ApacheConfig extends Component
{

    public $serverAdmin;
    public $serverName;
    public $serverAlias;
    public $documentRoot;
    public $certificateFile;
    public $certificateKey;
    public $certificateChain;
    public $showSsl = false;

    public function render()
    {
        return view('livewire.apache-config');
    }

}
