<?php

namespace App\Livewire;

use App\Models\Customer;
use App\Models\Domain;
use App\Models\Niche;
use App\Models\Order;
use App\Models\Plan;
use App\Models\Template;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Illuminate\Support\Str;

class StepByStep extends Component
{
    public Niche $niche;

    public Order $order;

    public $stepCurrent = 1;

    public $domain = 'sitemas.com.br';

    public string $subdomain;

    public $planCurrent;

    public $selectedPlanId = null;

    public $templateCurrent;

    public $selectedTemplateId = null;

    public bool $buttonNextStatus = false;

    public string $messageDomain = '';

    public bool $availableSubdomain = false;

    public string $guidance = '0x Plano selecionado';

    public bool $showButtonSubmit = false;

    public string $company = 'ADC';

    public string $website = 'ADC';

    public string $email = 'adc@gmail.com';

    public string $phone = '1199999-9999';

    protected $rules = [
        'company' => 'required|string|max:255',
        'website' => ['required', 'alpha_dash', 'max:50'],
        'email'   => 'required|email|max:255',
        'phone'   => 'required|string|max:20',
    ];

    protected $messages = [
        'company.required'   => 'O nome da igreja é obrigatório.',
        'website.required'   => 'O nome do site é obrigatório.',
        'website.alpha_dash' => 'O nome do site deve conter apenas letras, números, hífens ou underlines.',
        'email.required'     => 'O e-mail é obrigatório.',
        'email.email'        => 'Informe um e-mail válido.',
        'phone.required'     => 'O telefone é obrigatório.',
        'phone.max'          => 'O telefone deve ter no máximo 20 caracteres.',
    ];

    public function mount(Niche $niche, Order $order)
    {
        $this->niche = $niche;

        $this->order = $order;

        $this->orderHasPlan();

        $this->orderHasTemplate();

        $this->orderHasStepCurrent();
    }

    public function steps()
    {
        return [
            1 => 'stepDomain',
            2 => 'stepPlans',
            3 => 'stepTemplates',
            4 => 'stepData',
            5 => 'stepPayment'
        ];
    }

    public function showStepCurrent($step)
    {
        return $this->steps()[$this->stepCurrent];
    }

    public function getPlans(): Collection
    {
        return $this->niche->plans()->get();
    }

    public function addSelectedPlan($planId)
    {
        if (Plan::find($planId)->exists()) {
            $this->planCurrent = Plan::find($planId);

            $this->order->plan_id = $this->planCurrent->id;

            $this->order->step_current = 1;

            $this->order->save();

            $this->selectedPlanId = $this->planCurrent->id;

            $this->buttonNextStatus = true;

            $this->guidance = '1x Plano selecionado';
        }
    }

    public function removeSelectedPlan($planId)
    {
        $this->planCurrent = null;

        $this->order->plan_id = $this->planCurrent;

        $this->order->save();

        $this->selectedPlanId = null;

        $this->buttonNextStatus = false;

        $this->guidance = '0x Plano selecionado';
    }

    public function orderHasPlan()
    {
        if ($this->order->plan()->exists()) {
            $this->planCurrent = $this->order->plan()->first();

            $this->addSelectedPlan($this->planCurrent->id);
        }
    }

    public function getTemplates(): Collection
    {
        return $this->niche->templates()->get();
    }

    public function addSelectedTemplate($templateId)
    {
        if (Template::find($templateId)->exists()) {
            $this->templateCurrent = Template::find($templateId);

            $this->order->template_id = $this->templateCurrent->id;

            $this->order->step_current = 2;

            $this->order->save();

            $this->selectedTemplateId = $this->templateCurrent->id;

            $this->buttonNextStatus = true;

            $this->guidance = '1x Modelo selecionado';
        }
    }

    public function removeSelectedTemplate()
    {
        $this->templateCurrent = null;

        $this->order->template_id = $this->templateCurrent;

        $this->order->save();

        $this->selectedTemplateId = null;

        $this->buttonNextStatus = false;

        $this->guidance = '0x Modelo selecionado';
    }

    public function orderHasTemplate()
    {
        if ($this->order->template()->exists()) {
            $this->templateCurrent = $this->order->template()->first();

            $this->addSelectedTemplate($this->templateCurrent->id);
        }
    }

    public function addStep()
    {
        $this->stepCurrent = $this->stepCurrent + 1;
    }

    public function removeStep()
    {
        if ($this->stepCurrent != 1) {
            $this->stepCurrent = $this->stepCurrent - 1;
        }
    }

    public function orderHasStepCurrent()
    {
        if ($this->order->step_current) {
            $this->stepCurrent = $this->order->step_current;
        }
    }

    public function updatedSubdomain()
    {
        $this->messageDomain = '';

        $sub = Str::finish(Str::before($this->subdomain, '.'), '');

        if (strlen($sub) < 3) {
            $this->messageDomain = 'Subdomínio deve ter no mínimo 3 caracteres.';
            return;
        }

        $fullDomain = $sub . '.' . $this->domain;

        if (Domain::where('title', $fullDomain)->exists()) {
            $this->messageDomain = 'O subdomínio "' . $fullDomain . '" já está em uso.';

            $this->availableSubdomain = false;
        } else {
            $this->messageDomain = '✅ Subdomínio disponível!';

            $this->availableSubdomain = true;
        }
    }

    public function getValidateStepDomain(): bool
    {
        return $this->availableSubdomain;
    }

    public function getValidateStepPlans(): bool
    {
        if ($this->planCurrent != null && Plan::find($this->planCurrent->id)->exists()) {
            return true;
        }

        return false;
    }

    public function getValidateSecondStep(): bool
    {
        if ($this->templateCurrent != null && Template::find($this->templateCurrent->id)->exists()) {
            return true;
        }

        return false;
    }

    public function getValidateThirdStep(): bool
    {
        return true;
    }

    public function prev()
    {
        $this->removeStep();

        if ($this->showStepCurrent($this->stepCurrent) == 'stepDomain') {
            if ($this->getValidateStepDomain()) {
                $this->guidance = '1x Plano selecionado';

                $this->buttonNextStatus = true;

                $this->showButtonSubmit = false;
            }

            return;
        }

        if ($this->showStepCurrent($this->stepCurrent) == 'stepPlans') {
            if ($this->getValidateFirstStep()) {
                $this->guidance = '1x Plano selecionado';

                $this->buttonNextStatus = true;

                $this->showButtonSubmit = false;
            }

            return;
        }

        if ($this->showStepCurrent($this->stepCurrent) == 'stepTemplates') {

            if ($this->getValidateSecondStep()) {
                $this->guidance = '1x Modelo selecionado';

                $this->showButtonSubmit = false;
            }

            return;
        }
    }

    public function next()
    {
        if ($this->showStepCurrent($this->stepCurrent) == 'stepPlans') {

            if ($this->getValidateStepPlans()) {
                $this->addStep();


                if ($this->getValidateSecondStep()) {

                    $this->guidance = '1x Modelo selecionado';

                    return;
                }

                $this->buttonNextStatus = false;

                $this->guidance = '0x Modelo selecionado';

                return;
            }
        }

        if ($this->showStepCurrent($this->stepCurrent) == 'stepTemplates') {

            if ($this->getValidateSecondStep()) {
                $this->addStep();

                $this->showButtonSubmit = true;

                $this->guidance = 'Preencha todos os campos';
            }

            return;
        }

        if ($this->showStepCurrent($this->stepCurrent) == 'stepData') {
            // if ($this->getValidateThirdStep()) {

            // }

            // return;
        }
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedFields = $this->validate();

        $customer = Customer::create($validatedFields);

        $this->order->customer_id = $customer->id;

        $this->order->save();

        // session()->flash('success', 'Solicitação enviada com sucesso!');

        return redirect()->route('order.checkout', [
            'niche' => $this->niche,
            'order' => $this->order
        ]);
    }

    public function render()
    {
        return view('livewire.step-by-step');
    }
}
