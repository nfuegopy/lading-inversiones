<template>
    <div class="min-h-screen bg-white font-sans text-gray-900 antialiased">
        <header
            class="absolute top-0 w-full z-50 bg-white/90 backdrop-blur-sm shadow-sm"
        >
            <div
                class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center"
            >
                <div class="font-bold text-2xl tracking-tighter text-gray-800">
                    DH<span class="text-[#c2a878]">Abogados</span>
                </div>

                <nav
                    class="hidden md:flex space-x-8 text-sm font-medium text-gray-600"
                >
                    <a href="#" class="hover:text-[#c2a878] transition-colors"
                        >Inicio</a
                    >
                    <a
                        href="#quienes-somos"
                        class="hover:text-[#c2a878] transition-colors"
                        >Quiénes somos</a
                    >
                    <a
                        href="#servicios"
                        class="hover:text-[#c2a878] transition-colors"
                        >Servicios</a
                    >
                    <a
                        href="#faq"
                        class="hover:text-[#c2a878] transition-colors"
                        >Preguntas frecuentes</a
                    >
                </nav>

                <a
                    href="#contacto"
                    class="hidden md:inline-block bg-[#c2a878] text-white px-6 py-2 rounded font-semibold text-sm hover:bg-[#a89060] transition-colors"
                >
                    <i class="pi pi-phone mr-2"></i> CONTACTO
                </a>
            </div>
        </header>

        <main>
            <slot />
        </main>
    </div>
</template>

<script setup>
import "primeicons/primeicons.css"; // Importamos los iconos de PrimeVue
</script>
