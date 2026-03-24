<template>
    <section id="quienes-somos" class="py-16 md:py-24 bg-white text-gray-800">
        <div
            class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center"
        >
            <div class="relative mt-10 lg:mt-0 order-2 lg:order-1">
                <div
                    class="relative rounded-2xl shadow-xl overflow-hidden bg-gradient-to-b from-[#f5f0e6] to-[#e0d5c3] border-4 border-white h-[400px] md:h-[500px] w-full flex justify-center items-end"
                >
                    <img
                        src="/images/luis-del-hoyo.png"
                        alt="Luis del Hoyo - Paraguay Investing"
                        class="w-auto h-[90%] object-contain object-bottom"
                    />
                </div>
                <div
                    class="absolute -bottom-6 -right-2 md:-bottom-8 md:-right-8 bg-white p-4 md:p-6 shadow-2xl rounded-xl w-[90%] md:max-w-xs border-t-4 border-[#c2a878] z-20"
                >
                    <h3
                        class="font-bold text-base md:text-lg text-gray-900 leading-tight"
                    >
                        Luis del Hoyo Pérez de Rada
                    </h3>
                    <p
                        class="text-[#c2a878] text-xs md:text-sm font-bold mb-3 md:mb-4 mt-1"
                    >
                        {{ $t("about.role") }}
                    </p>
                    <ul
                        class="text-[11px] md:text-xs text-gray-600 space-y-2 md:space-y-3"
                    >
                        <li class="flex items-center">
                            <i
                                class="pi pi-graduation-cap text-[#c2a878] mr-2 text-sm md:text-base"
                            ></i
                            >{{ $t("about.degree") }}
                        </li>
                        <li class="flex items-center">
                            <i
                                class="pi pi-briefcase text-[#c2a878] mr-2 text-sm md:text-base"
                            ></i
                            >{{ $t("about.exp") }}
                        </li>
                        <li class="flex items-center">
                            <i
                                class="pi pi-language text-[#c2a878] mr-2 text-sm md:text-base"
                            ></i
                            >{{ $t("about.langs") }}
                        </li>
                    </ul>
                </div>
            </div>

            <div class="order-1 lg:order-2 lg:pl-8">
                <span
                    class="text-[#c2a878] font-bold tracking-widest uppercase text-xs md:text-sm"
                    >{{ $t("about.badge") }}</span
                >
                <h2
                    class="text-3xl md:text-4xl font-bold mt-2 md:mt-3 mb-5 md:mb-6 text-gray-900 leading-tight"
                >
                    {{ $t("about.title") }}
                </h2>

                <div
                    class="space-y-4 text-gray-600 leading-relaxed text-sm md:text-base"
                >
                    <p class="text-base md:text-lg text-gray-800 font-medium">
                        {{ $t("about.p1") }}
                    </p>
                    <p>{{ $t("about.p2") }}</p>
                    <p>{{ $t("about.p3") }}</p>
                </div>

                <a
                    href="#servicios"
                    class="inline-flex items-center text-gray-900 font-bold hover:text-[#c2a878] transition-colors border-b-2 border-[#c2a878] pb-1 mt-8 text-sm md:text-base"
                >
                    {{ $t("about.link") }}
                    <i class="pi pi-arrow-right ml-2 text-xs md:text-sm"></i>
                </a>
            </div>
        </div>
    </section>
</template>
