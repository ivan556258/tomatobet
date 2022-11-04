<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\RedirectResponse;

/**
 * Class LocalizationController
 * @package App\Http\Controllers
 */
class LocalizationController extends Controller
{
    /**
     * @param $locale
     * @return RedirectResponse
     */
    public function index($locale): RedirectResponse
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
