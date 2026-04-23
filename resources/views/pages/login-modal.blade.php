{{-- Login Modal Component --}}

<x-modal.open-modal id="loginModal" title="Sign In to Your Account" size="lg" bg-class="bg-zinc-800">
    <form id="loginForm" class="space-y-5" method="POST" action="{{ route('login') }}">
        @csrf

        {{-- Email Input --}}
        <div class="space-y-2">
            <label for="email" class="block text-sm font-medium text-white">Email Address</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="you@example.com"
                class="w-full rounded-lg border border-white/10 bg-zinc-800/50 px-4 py-2.5 text-white placeholder-zinc-500 transition-all duration-200 focus:border-lime-400/50 focus:outline-none focus:ring-2 focus:ring-lime-400/20"
                required />
        </div>

        {{-- Password Input --}}
        <div class="space-y-2">
            <label for="password" class="block text-sm font-medium text-white">Password</label>
            <input type="password" id="password" name="password" placeholder="••••••••"
                class="w-full rounded-lg border border-white/10 bg-zinc-800/50 px-4 py-2.5 text-white placeholder-zinc-500 transition-all duration-200 focus:border-lime-400/50 focus:outline-none focus:ring-2 focus:ring-lime-400/20"
                required />
        </div>

        {{-- Remember Me Checkbox and Forgot Password Link --}}
        <div class="flex items-center justify-between gap-4">
            <label class="flex items-center gap-2 text-sm text-zinc-300">
                <input type="checkbox" id="remember" name="remember"
                    class="h-4 w-4 rounded border-white/10 bg-zinc-800 accent-lime-400" />
                Remember me
            </label>
            <a href="#" class="text-sm text-lime-400 transition-colors duration-200 hover:text-lime-300">
                Forgot password?
            </a>
        </div>

        {{-- Error Messages --}}
        <div id="loginError"
            class="rounded-lg border border-red-500/30 bg-red-500/10 px-4 py-3 text-sm text-red-300 {{ $errors->first('login') || $errors->first('email') || $errors->first('password') ? '' : 'hidden' }}">
            {{ $errors->first('login') ?: $errors->first('email') ?: $errors->first('password') }}
        </div>

        {{-- Submit Button --}}
        <div class="flex justify-end pt-2">
            <button type="submit"
                class="rounded-lg bg-lime-400 px-3 py-2 text-sm font-semibold text-zinc-950 transition-all duration-200 hover:bg-lime-300 focus:outline-none focus:ring-2 focus:ring-lime-400/50">
                Sign In
            </button>
        </div>
    </form>
</x-modal.open-modal>

@if ($errors->any() || session('showLoginModal'))
    @push('scripts')
        <script>
            function openLoginModalIfNeeded() {
                if (typeof openModal === 'function') {
                    openModal('loginModal');
                }
            }

            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', openLoginModalIfNeeded);
            } else {
                openLoginModalIfNeeded();
            }
        </script>
    @endpush
@endif
