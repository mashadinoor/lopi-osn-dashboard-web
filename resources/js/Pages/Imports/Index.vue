<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, useForm } from "@inertiajs/vue3";

const form = useForm({
  year: "",
  file: null,
});

function handleFileSelect(event) {
  form.file = event.target.files[0];
  console.log(form.file);
}

function submit() {
  form.post(route("imports.store"), {
    forceFormData: true,
    perserveScroll: true,

    onError: (errors) => {
      console.log(errors);
      console.log(form.errors);
    },
  });
}
</script>

<template>
  <Head title="Import Data" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="text-xl font-semibold leading-tight text-gray-800">
        Import Data
      </h2>
    </template>

    <div class="py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div
        class="overflow-hidden bg-white shadow-sm sm:rounded-lg p-6 text-gray-900"
      >
        <form @submit.prevent="submit">
          <div class="flex flex-col items-center justify-center mb-4">
            <!-- Input Word -->
            <div class="w-full mb-4">
              <label
                for="year"
                class="block mb-2.5 text-sm font-medium text-heading"
                >Masukan Tahun Olimpiade Sains Nasional (OSN)</label
              >
              <input
                type="number"
                id="year"
                v-model="form.year"
                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                placeholder="Contoh: '2026' atau '2025'"
                required
              />
            </div>

            <!-- File Area -->
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
                <p class="mb-2 text-sm">Click the button below to upload</p>
                <p class="text-xs mb-4">
                  Max. File Size:
                  <span class="font-semibold">30MB</span>
                </p>
                <!-- Upload Button -->

                <button
                  type="button"
                  onclick="document.getElementById('dropzone-file-2').click()"
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
              @change="handleFileSelect"
            />
          </div>

          <!-- Button -->
          <button
            type="submit"
            class="text-white bg-sky-600 box-border border border-transparent hover:bg-sky-700 focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none"
          >
            Submit
          </button>
        </form>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
