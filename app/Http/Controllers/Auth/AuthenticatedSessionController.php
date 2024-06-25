<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        // Check if there's a redirect_to parameter and store it in the session
        if ($request->has('redirect_to')) {
            $request->session()->put('redirect_to', $request->input('redirect_to'));
        }

        return $this->redirectToIntendedOrRoleBased();
    }

    /**
     * Redirect to intended URL or role-based URL if no intended URL exists.
     */
    protected function redirectToIntendedOrRoleBased(): RedirectResponse
    {
        // Check if there is a redirect_to URL in the session and use it if present
        $redirectTo = session()->pull('redirect_to');

        $user = auth()->user();

        if ($redirectTo) {
            return redirect()->intended($redirectTo);
        }

        // Role-based redirection logic
        if ($user->role === 1) {
            return redirect()->route('adminDashboard');
        } elseif ($user->role === 3) {
            return redirect()->route('distributor.code');
        } else {
            return redirect()->route('main');
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
