<template>
    <section id="servicios" class="py-20 md:py-32 bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 md:mb-20">
                <span
                    class="text-[#c2a878] font-bold tracking-widest uppercase text-xs md:text-sm"
                    >{{ $t("services.badge") }}</span
                >
                <h2
                    class="text-3xl md:text-4xl lg:text-5xl font-bold mt-4 mb-6 leading-tight"
                >
                    {{ $t("services.title") }}
                </h2>
                <p class="text-gray-400 max-w-2xl mx-auto text-sm md:text-base">
                    {{ $t("services.desc") }}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <Card
                    class="bg-gray-800 border border-gray-700 hover:border-[#c2a878] transition-colors shadow-none text-white"
                >
                    <template #title>
                        <div
                            class="flex items-center text-xl font-bold text-white mb-2"
                        >
                            <i
                                class="pi pi-compass text-[#c2a878] text-2xl mr-3"
                            ></i
                            >{{ $t("services.s1_title") }}
                        </div>
                    </template>
                    <template #content
                        ><p class="text-gray-400 text-sm leading-relaxed">
                            {{ $t("services.s1_desc") }}
                        </p></template
                    >
                </Card>

                <Card
                    class="bg-gray-800 border border-gray-700 hover:border-[#c2a878] transition-colors shadow-none text-white"
                >
                    <template #title>
                        <div
                            class="flex items-center text-xl font-bold text-white mb-2"
                        >
                            <i
                                class="pi pi-id-card text-[#c2a878] text-2xl mr-3"
                            ></i
                            >{{ $t("services.s2_title") }}
                        </div>
                    </template>
                    <template #content
                        ><p class="text-gray-400 text-sm leading-relaxed">
                            {{ $t("services.s2_desc") }}
                        </p></template
                    >
                </Card>

                <Card
                    class="bg-gray-800 border border-gray-700 hover:border-[#c2a878] transition-colors shadow-none text-white"
                >
                    <template #title>
                        <div
                            class="flex items-center text-xl font-bold text-white mb-2"
                        >
                            <i
                                class="pi pi-building text-[#c2a878] text-2xl mr-3"
                            ></i
                            >{{ $t("services.s3_title") }}
                        </div>
                    </template>
                    <template #content
                        ><p class="text-gray-400 text-sm leading-relaxed">
                            {{ $t("services.s3_desc") }}
                        </p></template
                    >
                </Card>

                <Card
                    class="bg-gray-800 border border-gray-700 hover:border-[#c2a878] transition-colors shadow-none text-white"
                >
                    <template #title>
                        <div
                            class="flex items-center text-xl font-bold text-white mb-2"
                        >
                            <i
                                class="pi pi-home text-[#c2a878] text-2xl mr-3"
                            ></i
                            >{{ $t("services.s4_title") }}
                        </div>
                    </template>
                    <template #content
                        ><p class="text-gray-400 text-sm leading-relaxed">
                            {{ $t("services.s4_desc") }}
                        </p></template
                    >
                </Card>

                <Card
                    class="bg-gray-800 border border-gray-700 hover:border-[#c2a878] transition-colors shadow-none text-white"
                >
                    <template #title>
                        <div
                            class="flex items-center text-xl font-bold text-white mb-2"
                        >
                            <i
                                class="pi pi-chart-line text-[#c2a878] text-2xl mr-3"
                            ></i
                            >{{ $t("services.s5_title") }}
                        </div>
                    </template>
                    <template #content
                        ><p class="text-gray-400 text-sm leading-relaxed">
                            {{ $t("services.s5_desc") }}
                        </p></template
                    >
                </Card>

                <Card
                    class="bg-gray-800 border border-gray-700 hover:border-[#c2a878] transition-colors shadow-none text-white"
                >
                    <template #title>
                        <div
                            class="flex items-center text-xl font-bold text-white mb-2"
                        >
                            <i
                                class="pi pi-briefcase text-[#c2a878] text-2xl mr-3"
                            ></i
                            >{{ $t("services.s6_title") }}
                        </div>
                    </template>
                    <template #content
                        ><p class="text-gray-400 text-sm leading-relaxed">
                            {{ $t("services.s6_desc") }}
                        </p></template
                    >
                </Card>
            </div>
        </div>
    </section>
</template>

<script setup>
import Card from "primevue/card";
</script>
