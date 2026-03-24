<template>
    <div class="min-h-screen bg-white font-sans text-gray-900 antialiased">
        <header
            class="absolute top-0 w-full z-50 bg-white/90 backdrop-blur-sm shadow-sm"
        >
            <div
                class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center"
            >
                <div class="font-bold text-2xl tracking-tighter text-gray-800">
                    Paraguay<span class="text-[#c2a878]">Investing</span>
                </div>

                <nav
                    class="hidden md:flex space-x-8 text-sm font-medium text-gray-600 items-center"
                >
                    <a
                        href="#"
                        class="hover:text-[#c2a878] transition-colors"
                        >{{ $t("nav.home") }}</a
                    >
                    <a
                        href="#quienes-somos"
                        class="hover:text-[#c2a878] transition-colors"
                        >{{ $t("nav.about") }}</a
                    >
                    <a
                        href="#servicios"
                        class="hover:text-[#c2a878] transition-colors"
                        >{{ $t("nav.services") }}</a
                    >
                    <a
                        href="#faq"
                        class="hover:text-[#c2a878] transition-colors"
                        >{{ $t("nav.faq") }}</a
                    >
                </nav>

                <div class="flex items-center gap-4">
                    <select
                        v-model="$i18n.locale"
                        class="bg-transparent border-none text-sm font-medium text-gray-600 focus:ring-0 cursor-pointer uppercase"
                    >
                        <option value="es">ES</option>
                        <option value="en">EN</option>
                        <option value="pt">PT</option>
                    </select>

                    <a
                        href="#contacto"
                        class="hidden md:inline-block bg-[#c2a878] text-white px-6 py-2 rounded font-semibold text-sm hover:bg-[#a89060] transition-colors"
                    >
                        <i class="pi pi-phone mr-2"></i> {{ $t("nav.contact") }}
                    </a>
                </div>
            </div>
        </header>

        <main>
            <slot />
        </main>
        <footer class="bg-black py-8 border-t border-white/10">
            <div
                class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center text-xs text-gray-500"
            >
                <p class="mb-4 md:mb-0">
                    &copy; {{ new Date().getFullYear() }} Paraguay Investing.
                    Todos los derechos reservados.
                </p>
                <div class="flex items-center gap-4">
                    <a
                        href="mailto:acbleguizamon@gmail.com"
                        class="hover:text-[#c2a878] transition-colors flex items-center gap-1"
                    >
                        <i class="pi pi-envelope text-[10px]"></i>
                        acbleguizamon@gmail.com
                    </a>
                    <span class="text-gray-700">|</span>
                    <a
                        href="https://wa.me/595982580075"
                        target="_blank"
                        class="hover:text-[#c2a878] transition-colors flex items-center gap-1"
                    >
                        <i class="pi pi-whatsapp text-[10px]"></i> +595 982 580
                        075
                    </a>
                </div>
            </div>
        </footer>
    </div>
</template>

<script setup>
import "primeicons/primeicons.css";
</script>
