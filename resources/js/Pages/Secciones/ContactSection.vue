<template>
    <section id="contacto" class="py-20 bg-black text-white relative">
        <div
            class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-16"
        >
            <div>
                <span
                    class="text-[#c2a878] font-bold tracking-widest uppercase text-sm"
                    >{{ $t("contact.badge") }}</span
                >
                <h2 class="text-4xl font-bold mt-2 mb-8">
                    {{ $t("contact.title") }}
                </h2>

                <p class="text-gray-400 mb-10 leading-relaxed">
                    {{ $t("contact.desc") }}
                </p>

                <div class="space-y-6 text-gray-300">
                    <div class="flex items-start">
                        <i
                            class="pi pi-map-marker text-[#c2a878] text-xl mr-4 mt-1"
                        ></i>
                        <div>
                            <h4 class="font-bold text-white mb-1">
                                {{ $t("contact.address") }}
                            </h4>
                            <p>Av. Gabriel Alomar, 37, Entlo. C</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <i
                            class="pi pi-envelope text-[#c2a878] text-xl mr-4 mt-1"
                        ></i>
                        <div>
                            <h4 class="font-bold text-white mb-1">Email</h4>
                            <a
                                href="mailto:comercial@paraguayinvesting.com"
                                class="hover:text-[#c2a878] transition-colors"
                            >
                                comercial@paraguayinvesting.com
                            </a>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <i
                            class="pi pi-whatsapp text-[#c2a878] text-xl mr-4 mt-1"
                        ></i>
                        <div>
                            <h4 class="font-bold text-white mb-1">WhatsApp</h4>
                            <a
                                href="https://wa.me/595983350535?text=Hola,%20me%20gustaría%20realizar%20una%20consulta."
                                target="_blank"
                                class="text-lg font-medium hover:text-[#c2a878] transition-colors"
                            >
                                +595 983 350 535
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="bg-gray-900 p-8 rounded-xl border border-gray-800 shadow-2xl"
            >
                <form @submit.prevent="enviarFormulario" class="space-y-6">
                    <div class="flex flex-col gap-2">
                        <label
                            for="nombre"
                            class="text-sm font-semibold text-gray-300"
                            >{{ $t("contact.name") }}</label
                        >
                        <InputText
                            id="nombre"
                            v-model="form.nombre"
                            required
                            class="w-full bg-gray-800 border-gray-700 text-white p-3 rounded-md focus:border-[#c2a878] outline-none"
                            :placeholder="$t('contact.name_ph')"
                        />
                    </div>

                    <div class="flex flex-col gap-2">
                        <label
                            for="email"
                            class="text-sm font-semibold text-gray-300"
                            >{{ $t("contact.email") }}</label
                        >
                        <InputText
                            id="email"
                            v-model="form.email"
                            type="email"
                            required
                            class="w-full bg-gray-800 border-gray-700 text-white p-3 rounded-md focus:border-[#c2a878] outline-none"
                            :placeholder="$t('contact.email_ph')"
                        />
                    </div>

                    <div class="flex flex-col gap-2">
                        <label
                            for="mensaje"
                            class="text-sm font-semibold text-gray-300"
                            >{{ $t("contact.msg") }}</label
                        >
                        <Textarea
                            id="mensaje"
                            v-model="form.mensaje"
                            required
                            class="w-full bg-gray-800 border-gray-700 text-white p-3 rounded-md focus:border-[#c2a878] outline-none"
                            rows="4"
                            :placeholder="$t('contact.msg_ph')"
                        />
                    </div>

                    <Button
                        type="submit"
                        :label="
                            form.processing
                                ? $t('contact.btn_sending')
                                : $t('contact.btn_send')
                        "
                        :disabled="form.processing"
                        class="w-full bg-[#c2a878] border-none hover:bg-[#a89060] font-bold py-3 text-white rounded-md mt-4 transition-colors"
                    />
                </form>
            </div>
        </div>
    </section>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";
import { useI18n } from "vue-i18n";
import InputText from "primevue/inputtext";
import Textarea from "primevue/textarea";
import Button from "primevue/button";

const { t } = useI18n(); // Importamos la función de traducción para usarla en los alerts

const form = useForm({
    nombre: "",
    email: "",
    mensaje: "",
});

const enviarFormulario = () => {
    form.post(route("contacto.enviar"), {
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
            alert(t("contact.alert_success"));
        },
        onError: () => {
            alert(t("contact.alert_error"));
        },
    });
};
</script>
