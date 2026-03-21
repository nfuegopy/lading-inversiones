<template>
    <section id="servicios" class="py-20 md:py-32 bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 md:mb-20">
                <span
                    class="text-[#c2a878] font-bold tracking-widest uppercase text-xs md:text-sm"
                    >Áreas de Práctica</span
                >
                <h2
                    class="text-3xl md:text-4xl lg:text-5xl font-bold mt-4 mb-6 leading-tight"
                >
                    Asistencia integral a inversores
                </h2>
                <p class="text-gray-400 max-w-2xl mx-auto text-sm md:text-base">
                    Acompañamiento integral con presencia en Paraguay para
                    gestionar trámites presencialmente y resolver gestiones con
                    rapidez y eficacia.
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
                            ></i>
                            Planificación fiscal
                        </div>
                    </template>
                    <template #content>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Diseñamos la estructura fiscal más eficiente para
                            proteger el patrimonio y optimizar la tributación
                            internacional antes de invertir en Paraguay.
                        </p>
                    </template>
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
                            ></i>
                            Cambio de residencia
                        </div>
                    </template>
                    <template #content>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Gestionamos íntegramente el proceso de traslado,
                            tramitando obligaciones en el país de origen y
                            acompañando en la obtención de residencia en
                            destino.
                        </p>
                    </template>
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
                            ></i>
                            Constitución de sociedades
                        </div>
                    </template>
                    <template #content>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Creamos tu empresa de forma legal, ocupándonos de la
                            redacción de estatutos, inscripción registral y
                            obtención del RUC para operar con validez.
                        </p>
                    </template>
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
                            ></i>
                            Compraventa de propiedades
                        </div>
                    </template>
                    <template #content>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Asesoramos en la adquisición de inmuebles mediante
                            due diligence completa, revisión de contratos y
                            coordinación del cierre ante escribano público.
                        </p>
                    </template>
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
                            ></i>
                            Proyectos de inversión
                        </div>
                    </template>
                    <template #content>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Asesoramos definiendo la estructura jurídica y
                            fiscal adecuada y gestionando la documentación para
                            proyectos de inversión propios o de terceros.
                        </p>
                    </template>
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
                            ></i>
                            Fiscalidad empresarial
                        </div>
                    </template>
                    <template #content>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Analizamos cada estructura para asegurar el
                            cumplimiento y optimizar tributos, aprovechando un
                            sistema donde el impuesto a la renta y el IVA rondan
                            el 10%.
                        </p>
                    </template>
                </Card>
            </div>
        </div>
    </section>
</template>

<script setup>
import Card from "primevue/card";
</script>
