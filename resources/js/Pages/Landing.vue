<template>
    <Head title="Paraguay Investing - Asesoría Legal y Fiscal en Paraguay" />

    <LandingLayout>
        <HeroSection />

        <StatsSection />

        <AboutSection />

        <ServicesSection />

        <FaqSection />

        <ContactSection />
    </LandingLayout>
</template>

<script setup>
import { Head } from "@inertiajs/vue3";
import LandingLayout from "@/Layouts/LandingLayout.vue";

// Importamos todas las secciones modulares
import HeroSection from "./Secciones/HeroSection.vue";
import StatsSection from "./Secciones/StatsSection.vue";
import AboutSection from "./Secciones/AboutSection.vue";
import ServicesSection from "./Secciones/ServicesSection.vue";
import FaqSection from "./Secciones/FaqSection.vue";
import ContactSection from "./Secciones/ContactSection.vue";
</script>
