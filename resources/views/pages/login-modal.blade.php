{{-- Login Modal Component --}}

<x-modal.open-modal id="loginModal" title="Sign In to Your Account" size="lg" bg-class="bg-zinc-800">
    <form id="loginForm" class="space-y-5">
        @csrf

        {{-- Email Input --}}
        <div class="space-y-2">
            <label for="email" class="block text-sm font-medium text-white">Email Address</label>
            <input type="email" id="email" name="email" placeholder="you@example.com"
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
            class="hidden rounded-lg border border-red-500/30 bg-red-500/10 px-4 py-3 text-sm text-red-300">
        </div>

        {{-- Submit Button & Close --}}
        @slot('footer')
            <button type="submit"
                class="ml-auto rounded-lg bg-lime-400 px-3 py-2 text-sm font-semibold text-zinc-950 transition-all duration-200 hover:bg-lime-300 
                focus:outline-none focus:ring-2 focus:ring-lime-400/50">
                Sign In
            </button>
        @endslot
    </form>
</x-modal.open-modal>

@once
    @push('scripts')
        <script>
            document.getElementById('loginForm').addEventListener('submit', async (e) => {
                e.preventDefault();

                const formData = new FormData(e.target);
                const errorDiv = document.getElementById('loginError');
                const submitBtn = e.target.querySelector('button[type="submit"]');

                // Show loading state
                submitBtn.disabled = true;
                submitBtn.textContent = 'Signing In...';
                errorDiv.classList.add('hidden');

                try {
                    const response = await fetch('/login', {
                        method: 'POST',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json',
                        },
                        body: formData
                    });

                    const data = await response.json();

                    if (response.ok) {
                        // Login successful
                        window.location.href = data.redirect || '/dashboard';
                    } else {
                        // Show error message
                        errorDiv.textContent = data.message || 'Login failed. Please try again.';
                        errorDiv.classList.remove('hidden');
                    }
                } catch (error) {
                    errorDiv.textContent = 'An error occurred. Please try again.';
                    errorDiv.classList.remove('hidden');
                    console.error('Login error:', error);
                } finally {
                    submitBtn.disabled = false;
                    submitBtn.textContent = 'Sign In';
                }
            });
        </script>
    @endpush
@endonce
