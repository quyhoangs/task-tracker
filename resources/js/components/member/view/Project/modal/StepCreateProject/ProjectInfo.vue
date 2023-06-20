<template>
    <div class="flex flex-col w-[600px] h-[600px]">
        <div class="flex flex-col sm:flex-row items-center">
            <h2 class="font-semibold text-lg mb-10">Create new project</h2>
        </div>
        <div class="form">
            <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">

                <div class="w-full flex flex-col mb-3">
                    <label class="font-semibold text-gray-600 py-2">Description</label>
                    <input placeholder="Short description of your project" name="description"
                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                        type="text">
                </div>

                <div class="w-full flex flex-col mb-3">
                    <label class=" font-semibold text-gray-600 py-2">Deadline
                        <span class="text-xs text-gray-400 text-left my-3"> (Start date - End date) </span>
                    </label>
                    <div class="flex flex-wrap items-stretch w-full mb-4 relative">

                        <VueDatePicker placeholder="Pick a date" v-model="dateRange" range multi-calendars
                            :format="dateFormat">
                        </VueDatePicker>

                    </div>
                </div>

                <button type="button" @click="saveForm">Save
                </button>


            </div>
            <div class="flex-auto w-full mb-1 text-xs space-y-2">
                <label class="font-semibold text-gray-600 py-2">Notes</label>
                <textarea name="message" id=""
                    class="w-full min-h-[100px] max-h-[300px] h-28 appearance-none block bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4"
                    placeholder="These are some additional notes for Project" spellcheck="false"></textarea>
                <p class="text-xs text-gray-400 text-left my-3">You inserted 0
                    characters</p>
            </div>
            <p class="text-xs text-red-500 text-right my-3">Required fields are
                marked with an
                asterisk <abbr title="Required field">*</abbr></p>

        </div>
    </div>
</template>

<script>

import VueDatePicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css'

export default {
    components: { VueDatePicker },
    data() {
        return {
            dateRange: null,
            dateFormat: 'dd/MM/yyyy',
        }
    },
    methods: {
        saveForm() {
            console.log('Project Name:');

            // Access the valid form values
            const { projectName, colorSelected } = this.formValues;
            // Perform your desired actions with the form values
            console.log('Project Name:', projectName);
            console.log('Color Selected:', colorSelected);
            // ...
        },
    },

}
</script>

