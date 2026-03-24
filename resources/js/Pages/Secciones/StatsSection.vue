<template>
    <section
        class="bg-[#c2a878] py-8 md:py-10 relative z-20 -mt-8 md:-mt-12 mx-4 md:mx-auto max-w-5xl rounded-lg shadow-xl"
    >
        <div
            class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8 text-center text-white px-4"
        >
            <div>
                <div class="text-3xl md:text-4xl font-bold mb-1">+500</div>
                <div
                    class="text-[10px] md:text-xs font-bold uppercase tracking-widest opacity-90"
                >
                    {{ $t("stats.clients") }}
                </div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold mb-1">+150</div>
                <div
                    class="text-[10px] md:text-xs font-bold uppercase tracking-widest opacity-90"
                >
                    {{ $t("stats.projects") }}
                </div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold mb-1">15</div>
                <div
                    class="text-[10px] md:text-xs font-bold uppercase tracking-widest opacity-90"
                >
                    {{ $t("stats.experience") }}
                </div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold mb-1">+300</div>
                <div
                    class="text-[10px] md:text-xs font-bold uppercase tracking-widest opacity-90"
                >
                    {{ $t("stats.advice") }}
                </div>
            </div>
        </div>
    </section>
</template>
