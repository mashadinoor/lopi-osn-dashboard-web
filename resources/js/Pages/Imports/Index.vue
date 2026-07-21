<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import { useForm } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Import Data" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Import Data
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <form>
                            <div class="mb-6">
                                <label
                                    for="email"
                                    class="block mb-2.5 text-sm font-medium text-heading"
                                    >Email address</label
                                >
                                <input
                                    type="email"
                                    id="email"
                                    class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                                    placeholder="john.doe@company.com"
                                    required
                                />
                            </div>
                            <div class="mb-6">
                                <label
                                    for="password"
                                    class="block mb-2.5 text-sm font-medium text-heading"
                                    >Password</label
                                >
                                <input
                                    type="password"
                                    id="password"
                                    class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                                    placeholder="•••••••••"
                                    required
                                />
                            </div>
                            <div
                                class="flex items-center justify-center w-full"
                            >
                                <div
                                    class="flex flex-col items-center justify-center w-full h-64 bg-neutral-secondary-medium border border-dashed border-default-strong rounded-base"
                                >
                                    <div
                                        class="flex flex-col items-center justify-center text-body pt-5 pb-6"
                                    >
                                        <svg
                                            class="w-8 h-8 mb-4"
                                            aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                stroke="currentColor"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M12 5v9m-5 0H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-2M8 9l4-5 4 5m1 8h.01"
                                            />
                                        </svg>
                                        <p class="mb-2 text-sm">
                                            Click the button below to upload
                                        </p>
                                        <p class="text-xs mb-4">
                                            Max. File Size:
                                            <span class="font-semibold"
                                                >30MB</span
                                            >
                                        </p>
                                        <!-- Upload Button -->
                                        <button
                                            type="button"
                                            onclick="
                                                document
                                                    .getElementById(
                                                        'dropzone-file-2',
                                                    )
                                                    .click()
                                            "
                                            class="inline-flex items-center text-white bg-sky-600 hover:bg-sky-700 box-border border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-3 py-2 focus:outline-none"
                                        >
                                            <svg
                                                class="w-4 h-4 me-1.5"
                                                aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke="currentColor"
                                                    stroke-linecap="round"
                                                    stroke-width="2"
                                                    d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"
                                                />
                                            </svg>
                                            Browse file
                                        </button>
                                    </div>
                                </div>
                                <!-- Hidden File Input (Outside Label) -->
                                <input
                                    id="dropzone-file-2"
                                    type="file"
                                    class="hidden"
                                />
                            </div>
                            <button
                                type="submit"
                                class="text-white bg-sky-600 box-border border border-transparent hover:bg-sky-700 focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none"
                            >
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto max-w-4xl sm:px-6 lg:px-8">
                <!-- nanti isi form di sini -->
            </div>
        </div>
    </AuthenticatedLayout>
</template>
