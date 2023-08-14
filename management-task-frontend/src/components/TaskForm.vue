<template>
    <div class="mb-4">
      <h2 class="text-lg font-semibold mb-2">Add New Task</h2>
      <form @submit.prevent="submitForm">
        <div class="mb-2">
          <label class="block text-gray-700">Title</label>
          <input v-model="newTask.title" class="border rounded p-1 w-full" />
        </div>
        <div class="mb-2">
          <label class="block text-gray-700">Description</label>
          <textarea
            v-model="newTask.description"
            class="border rounded p-1 w-full"
          ></textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white py-1 px-2 rounded">
          Add Task
        </button>
      </form>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        newTask: {
          title: "",
          description: "",
        },
      };
    },
    methods: {
      async submitForm() {
        this.$emit("taskAdded", { ...this.newTask });
        this.newTask.title = "";
        this.newTask.description = "";
      },
    },
  };
  </script>