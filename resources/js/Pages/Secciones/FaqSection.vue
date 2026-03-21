<template>
    <section
        id="faq"
        class="relative py-24 md:py-32 bg-gray-900 overflow-hidden"
    >
        <div class="absolute top-0 left-0 w-full h-full z-0 overflow-hidden">
            <div
                class="absolute -top-24 -left-24 w-96 h-96 bg-[#c2a878]/10 rounded-full blur-3xl"
            ></div>
            <div
                class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-[#c2a878]/5 rounded-full blur-3xl"
            ></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                <div class="lg:col-span-4 lg:sticky lg:top-32">
                    <span
                        class="text-[#c2a878] font-bold tracking-widest uppercase text-xs"
                        >FAQ</span
                    >
                    <h2
                        class="text-4xl md:text-5xl font-bold mt-4 text-white leading-tight"
                    >
                        Consultas <br />
                        <span class="text-[#c2a878]">Frecuentes</span>
                    </h2>
                    <p class="text-gray-400 mt-6 text-lg leading-relaxed">
                        Despejamos tus dudas sobre el ecosistema legal y fiscal
                        paraguayo.
                    </p>
                    <div class="mt-8 hidden lg:block">
                        <div class="h-1 w-20 bg-[#c2a878]"></div>
                    </div>
                </div>

                <div class="lg:col-span-8">
                    <Accordion :multiple="true" class="flex flex-col gap-6">
                        <AccordionPanel value="0" class="faq-card">
                            <AccordionHeader>
                                <div class="flex items-center gap-4">
                                    <span
                                        class="text-[#c2a878] font-mono text-sm"
                                        >01.</span
                                    >
                                    <span class="font-bold text-white text-lg"
                                        >Ventajas Fiscales</span
                                    >
                                </div>
                            </AccordionHeader>
                            <AccordionContent>
                                <div
                                    class="pt-2 text-gray-300 leading-relaxed border-t border-white/10 mt-4"
                                >
                                    Paraguay opera bajo el sistema del
                                    <strong>10-10-10</strong> (IVA, Renta
                                    Personal y Empresarial). Es uno de los
                                    esquemas más sencillos y económicos de la
                                    región, ideal para maximizar el retorno de
                                    tu capital.
                                </div>
                            </AccordionContent>
                        </AccordionPanel>

                        <AccordionPanel value="1" class="faq-card">
                            <AccordionHeader>
                                <div class="flex items-center gap-4">
                                    <span
                                        class="text-[#c2a878] font-mono text-sm"
                                        >02.</span
                                    >
                                    <span class="font-bold text-white text-lg"
                                        >Constitución de Sociedades</span
                                    >
                                </div>
                            </AccordionHeader>
                            <AccordionContent>
                                <div
                                    class="pt-2 text-gray-300 leading-relaxed border-t border-white/10 mt-4"
                                >
                                    No necesitas ser residente para ser
                                    accionista. Podemos gestionar la apertura de
                                    tu SA o SRL de forma remota en gran parte
                                    del proceso, obteniendo tu RUC para operar
                                    legalmente.
                                </div>
                            </AccordionContent>
                        </AccordionPanel>

                        <AccordionPanel value="2" class="faq-card">
                            <AccordionHeader>
                                <div class="flex items-center gap-4">
                                    <span
                                        class="text-[#c2a878] font-mono text-sm"
                                        >03.</span
                                    >
                                    <span class="font-bold text-white text-lg"
                                        >Residencia Legal</span
                                    >
                                </div>
                            </AccordionHeader>
                            <AccordionContent>
                                <div
                                    class="pt-2 text-gray-300 leading-relaxed border-t border-white/10 mt-4"
                                >
                                    Tramitamos tu radicación y cédula paraguaya.
                                    Es un paso fundamental si buscas optimizar
                                    tu fiscalidad a nivel global y establecerte
                                    físicamente en el país.
                                </div>
                            </AccordionContent>
                        </AccordionPanel>

                        <AccordionPanel value="3" class="faq-card">
                            <AccordionHeader>
                                <div class="flex items-center gap-4">
                                    <span
                                        class="text-[#c2a878] font-mono text-sm"
                                        >04.</span
                                    >
                                    <span class="font-bold text-white text-lg"
                                        >Seguridad en Propiedades</span
                                    >
                                </div>
                            </AccordionHeader>
                            <AccordionContent>
                                <div
                                    class="pt-2 text-gray-300 leading-relaxed border-t border-white/10 mt-4"
                                >
                                    Realizamos
                                    <em>due diligence</em> exhaustiva.
                                    Verificamos certificados de libertad de
                                    gravamen y condiciones de dominio para que
                                    tu inversión inmobiliaria sea sólida y sin
                                    vicios legales.
                                </div>
                            </AccordionContent>
                        </AccordionPanel>
                    </Accordion>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import Accordion from "primevue/accordion";
import AccordionPanel from "primevue/accordionpanel";
import AccordionHeader from "primevue/accordionheader";
import AccordionContent from "primevue/accordioncontent";
</script>

<style scoped>
.faq-card {
    @apply bg-white/5 border border-white/10 rounded-xl transition-all duration-300 backdrop-blur-md;
}

.faq-card:hover {
    @apply bg-white/10 border-[#c2a878]/30 transform -translate-y-1;
}

/* Estilos para quitar el look nativo de PrimeVue y hacerlo moderno */
:deep(.p-accordion-header-link) {
    @apply bg-transparent border-none py-6 px-8 flex justify-between items-center text-white no-underline shadow-none !important;
}

:deep(.p-accordion-content) {
    @apply bg-transparent border-none px-8 pb-6 text-gray-300 !important;
}

:deep(.p-accordion-header-action) {
    @apply flex-row-reverse justify-between w-full;
}
</style>
