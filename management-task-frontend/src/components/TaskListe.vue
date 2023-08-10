<template>
    <div class="max-w-md mx-auto p-4">
      <h1 class="text-2xl font-bold mb-4">Task Management App</h1>
      <form @submit.prevent="addTask" class="mb-4">
        <input
          v-model="newTask.title"
          placeholder="New Task"
          class="border rounded py-1 px-2 w-3/4"
        />
        <button type="submit" class="bg-blue-500 text-white py-1 px-3 rounded ml-2">
          Add
        </button>
      </form>
      <ul>
        <li v-for="task in tasks" :key="task.id" class="mb-2">
          <input
            type="checkbox"
            v-model="task.completed"
            @change="toggleTaskCompletion(task.id)"
          />
          <span :class="{ 'line-through': task.completed }">{{ task.title }}</span>
          <button @click="deleteTask(task.id)" class="ml-2 text-red-500">Delete</button>
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        tasks: [],
        newTask: { title: '', completed: false },
      };
    },
    methods: {
      addTask() {
        if (this.newTask.title.trim() !== '') {
          this.tasks.push({
            id: Date.now(),
            title: this.newTask.title,
            completed: false,
          });
          this.newTask.title = '';
        }
      },
      toggleTaskCompletion(taskId) {
        const task = this.tasks.find(task => task.id === taskId);
        if (task) task.completed = !task.completed;
      },
      deleteTask(taskId) {
        this.tasks = this.tasks.filter(task => task.id !== taskId);
      },
    },
  };
  </script>
  
  <style scoped>
  /* Add styling using Tailwind CSS classes */
  </style>
  