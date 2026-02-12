<x-layout>
    <x-slot:title>
        Privacy Policy
    </x-slot:title>

    <section class="max-w-6xl mx-auto px-4 py-12">
        <div class="text-center mb-10">
            <h1 class="text-3xl md:text-4xl font-bold text-base-content">Privacy Policy</h1>
            <p class="mt-3 text-sm md:text-base text-base-content/70 max-w-2xl mx-auto">
                This page explains how Nova52 collects, uses, and protects your personal information.
            </p>
        </div>

        <div class="bg-base-200 rounded-2xl p-6 md:p-8 border border-base-300 shadow-sm space-y-6 text-base-content/80">
            <div>
                <h2 class="text-lg font-bold text-base-content mb-2">1. What we collect</h2>
                <ul class="list-disc ml-6 space-y-1">
                    <li>Account details (name, email address, login details)</li>
                    <li>Order details (items purchased, delivery address)</li>
                    <li>Payment processing details (handled securely by our payment provider)</li>
                    <li>Basic usage data (pages visited, device/browser info)</li>
                </ul>
            </div>

            <div>
                <h2 class="text-lg font-bold text-base-content mb-2">2. How we use your information</h2>
                <ul class="list-disc ml-6 space-y-1">
                    <li>To process orders and provide customer support</li>
                    <li>To improve our website experience and performance</li>
                    <li>To send order confirmations and important account updates</li>
                </ul>
            </div>

            <div>
                <h2 class="text-lg font-bold text-base-content mb-2">3. Cookies</h2>
                <p>
                    We may use cookies to improve your browsing experience, remember preferences, and help with site functionality.
                    You can manage cookies in your browser settings.
                </p>
            </div>

            <div>
                <h2 class="text-lg font-bold text-base-content mb-2">4. Data security</h2>
                <p>
                    We take security seriously. We use secure systems and best practices to protect your data.
                    Sensitive payment information is processed securely by our payment provider and is not stored on our servers.
                </p>
            </div>

            <div>
                <h2 class="text-lg font-bold text-base-content mb-2">5. Your rights</h2>
                <p>
                    You may request access to your personal information, ask for corrections, or request deletion where appropriate.
                    To make a request, please contact us.
                </p>
            </div>

            <div>
                <h2 class="text-lg font-bold text-base-content mb-2">6. Contact</h2>
                <p>
                    If you have any questions about this Privacy Policy, please reach out via our Contact page.
                </p>
                <a href="/contact" class="btn btn-neutral rounded-full mt-4">Contact Support</a>
            </div>

            <p class="text-xs text-base-content/60 pt-4 border-t border-base-300">
                Last updated: {{ date('F Y') }}
            </p>
        </div>
    </section>
</x-layout>