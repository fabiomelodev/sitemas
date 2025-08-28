<?php

namespace App\Livewire;

use App\Models\Domain;
use App\Models\Niche;
use Livewire\Component;
use Illuminate\Support\Str;

class FindDomain extends Component
{
    public Niche $niche;

    public string $domain = 'sitemas.com.br';

    public string $subdomain;

    public string $message;

    public bool $availableSubdomain = false;

    public function mount(Niche $niche)
    {
        $this->niche = $niche;
    }

    public function updatedSubdomain()
    {
        $this->message = '';

        $sub = Str::finish(Str::before($this->subdomain, '.'), '');

        if (strlen($sub) < 3) {
            $this->message = 'Subdomínio deve ter no mínimo 3 caracteres.';
            return;
        }

        $fullDomain = $sub . '.' . $this->domain;

        if (Domain::where('title', $fullDomain)->exists()) {
            $this->message = 'O subdomínio "' . $fullDomain . '" já está em uso.';

            $this->availableSubdomain = false;
        } else {
            $this->message = '✅ Subdomínio disponível!';

            $this->availableSubdomain = true;
        }
    }

    public function render()
    {
        return view('livewire.find-domain');
    }
}
