<template>
    <section
        class="relative h-screen flex items-center justify-center text-left"
    >
        <div class="absolute inset-0 z-0">
            <img
                src="/images/asu-night.png"
                alt="Asunción Paraguay Noche"
                class="w-full h-full object-cover"
            />
            <div class="absolute inset-0 bg-black/60"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 w-full pt-20">
            <div class="max-w-2xl">
                <span
                    class="bg-white/20 text-white text-sm font-medium px-3 py-1 rounded backdrop-blur-sm"
                >
                    {{ $t("hero.badge") }}
                </span>

                <h1
                    class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mt-6 leading-tight"
                >
                    {{ $t("hero.title") }}
                </h1>

                <p class="mt-6 text-base md:text-lg text-gray-200">
                    {{ $t("hero.description") }}
                </p>

                <div class="mt-8 md:mt-10">
                    <a
                        href="#contacto"
                        class="bg-[#c2a878] text-white px-6 md:px-8 py-3 md:py-4 rounded font-bold text-xs md:text-sm hover:bg-[#a89060] transition-colors inline-block text-center w-full md:w-auto"
                    >
                        {{ $t("hero.button") }}
                    </a>
                </div>
            </div>
        </div>
    </section>
</template>
