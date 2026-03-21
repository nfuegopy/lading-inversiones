<template>
    <section id="contacto" class="py-20 bg-black text-white relative">
        <div
            class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-16"
        >
            <div>
                <span
                    class="text-[#c2a878] font-bold tracking-widest uppercase text-sm"
                    >Hablemos</span
                >
                <h2 class="text-4xl font-bold mt-2 mb-8">
                    Comienza tu proyecto hoy
                </h2>

                <p class="text-gray-400 mb-10 leading-relaxed">
                    Completa el formulario y nuestro equipo se pondrá en
                    contacto contigo a la mayor brevedad posible para analizar
                    tu caso y ofrecerte la mejor estrategia.
                </p>

                <div class="space-y-6 text-gray-300">
                    <div class="flex items-start">
                        <i
                            class="pi pi-map-marker text-[#c2a878] text-xl mr-4 mt-1"
                        ></i>
                        <div>
                            <h4 class="font-bold text-white mb-1">Dirección</h4>
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
                                href="mailto:admin@acbldeveloper.com"
                                class="hover:text-[#c2a878] transition-colors"
                            >
                                admin@acbldeveloper.com
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
                                href="https://wa.me/595982580075?text=Hola,%20me%20gustaría%20realizar%20una%20consulta."
                                target="_blank"
                                class="text-lg font-medium hover:text-[#c2a878] transition-colors"
                            >
                                +595 982 580 075
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
                            >Nombre completo</label
                        >
                        <InputText
                            id="nombre"
                            v-model="form.nombre"
                            required
                            class="w-full bg-gray-800 border-gray-700 text-white p-3 rounded-md focus:border-[#c2a878] outline-none"
                            placeholder="Tu nombre"
                        />
                    </div>

                    <div class="flex flex-col gap-2">
                        <label
                            for="email"
                            class="text-sm font-semibold text-gray-300"
                            >Correo electrónico</label
                        >
                        <InputText
                            id="email"
                            v-model="form.email"
                            type="email"
                            required
                            class="w-full bg-gray-800 border-gray-700 text-white p-3 rounded-md focus:border-[#c2a878] outline-none"
                            placeholder="tu@email.com"
                        />
                    </div>

                    <div class="flex flex-col gap-2">
                        <label
                            for="mensaje"
                            class="text-sm font-semibold text-gray-300"
                            >Mensaje o consulta</label
                        >
                        <Textarea
                            id="mensaje"
                            v-model="form.mensaje"
                            required
                            class="w-full bg-gray-800 border-gray-700 text-white p-3 rounded-md focus:border-[#c2a878] outline-none"
                            rows="4"
                            placeholder="¿En qué podemos ayudarte?"
                        />
                    </div>

                    <Button
                        type="submit"
                        :label="
                            form.processing ? 'ENVIANDO...' : 'ENVIAR CONSULTA'
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
import InputText from "primevue/inputtext";
import Textarea from "primevue/textarea";
import Button from "primevue/button";

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
            alert("¡Gracias! Hemos recibido tu mensaje.");
        },
        onError: () => {
            alert("Hubo un error al enviar el mensaje.");
        },
    });
};
</script>
