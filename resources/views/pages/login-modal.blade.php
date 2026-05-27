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
            <div class="relative">
                <input type="password" id="password" name="password" placeholder="••••••••"
                    class="w-full rounded-lg border border-white/10 bg-zinc-800/50 px-4 py-2.5 text-white placeholder-zinc-500 transition-all duration-200 focus:border-lime-400/50 focus:outline-none focus:ring-2 focus:ring-lime-400/20"
                    required />
                <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 flex items-center pr-3.5 text-zinc-400 hover:text-white transition-colors duration-200">
                    <!-- Eye Icon (Visible) -->
                    <svg id="eyeIconOpen" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    <!-- Eye Icon (Hidden/Closed) -->
                    <svg id="eyeIconClosed" class="h-5 w-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.024 10.024 0 014.168-5.008M21.157 12a10.025 10.025 0 01-4.168 5.008M9.888 9.888a3 3 0 104.242 4.242M9.888 9.888L3 3m18 18l-3-3" />
                    </svg>
                </button>
            </div>
        </div>

        {{-- Remember Me Checkbox and Forgot Password Link --}}
        <div class="flex items-center justify-between gap-4">
            <label class="flex items-center gap-2 text-sm text-zinc-300">
                <input type="checkbox" id="remember" name="remember" value="1"
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

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const rememberCheckbox = document.getElementById('remember');
            const loginForm = document.getElementById('loginForm');

            if (emailInput && passwordInput && rememberCheckbox) {
                // Pre-fill email, password and check checkbox if saved in localStorage
                const rememberedEmail = localStorage.getItem('remembered_email');
                const rememberedPassword = localStorage.getItem('remembered_password');
                if (rememberedEmail) {
                    emailInput.value = rememberedEmail;
                    rememberCheckbox.checked = true;
                }
                if (rememberedPassword) {
                    passwordInput.value = rememberedPassword;
                }

                // Password Visibility Toggle
                const togglePasswordBtn = document.getElementById('togglePassword');
                const eyeIconOpen = document.getElementById('eyeIconOpen');
                const eyeIconClosed = document.getElementById('eyeIconClosed');

                if (togglePasswordBtn && eyeIconOpen && eyeIconClosed) {
                    togglePasswordBtn.addEventListener('click', function () {
                        const isPassword = passwordInput.getAttribute('type') === 'password';
                        passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
                        
                        if (isPassword) {
                            eyeIconOpen.classList.add('hidden');
                            eyeIconClosed.classList.remove('hidden');
                        } else {
                            eyeIconOpen.classList.remove('hidden');
                            eyeIconClosed.classList.add('hidden');
                        }
                    });
                }

                // Save or clear credentials on form submission
                if (loginForm) {
                    loginForm.addEventListener('submit', function () {
                        if (rememberCheckbox.checked) {
                            localStorage.setItem('remembered_email', emailInput.value);
                            localStorage.setItem('remembered_password', passwordInput.value);
                        } else {
                            localStorage.removeItem('remembered_email');
                            localStorage.removeItem('remembered_password');
                        }
                    });
                }
            }
        });

        @if ($errors->any() || session('showLoginModal'))
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
        @endif
    </script>
@endpush


