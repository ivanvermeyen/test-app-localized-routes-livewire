<?php

namespace App\Http\Livewire;

use CodeZero\LocalizedRoutes\Facades\LocaleConfig;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Livewire\Livewire;

class Test extends Component
{
    public $locale;
    public $action;
    public $uri;
    public $url;
    public $livewireUrl;
    public $localizedUrls;

    public function update()
    {
        $this->locale = app()->getLocale();
        $this->action = request()->route()?->getAction('locale');
        $this->uri = request()->route()?->uri();
        $this->url = request()->fullUrl();
        $this->livewireUrl = Livewire::originalUrl();
        $this->localizedUrls = ['current' => Route::localizedUrl()];
        foreach (LocaleConfig::getLocales() as $locale) {
            $this->localizedUrls[$locale] = Route::localizedUrl($locale);
        }
    }

    public function render()
    {
        $this->update();

        return view('livewire.test');
    }
}
