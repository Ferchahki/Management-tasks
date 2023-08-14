<template>
  <div class="container mx-auto my-5">
    <h1 class="text-2xl font-semibold mb-3">Task List</h1>
  
    <TaskItem
      v-for="task in tasks"
      :key="task.id"
      :task="task"
      @deleteTask="deleteTask"
      @updateTask="updateTask"
    />
    <TaskForm @taskAdded="addTask" />
  </div>
</template>

<script>
import axios from 'axios';
import TaskItem from './TaskItem.vue';
import TaskForm from './TaskForm.vue';

export default {
  components: {
    TaskItem,
    TaskForm,
    
  },
  data() {
    return {
      tasks: [],
    };
  },
  created() {
    this.fetchTasks();
  },
  methods: {
    async fetchTasks() {
      const response = await axios.get("/api/tasks");
      this.tasks = response.data;
    },
    async addTask(newTask) {
      const response = await axios.post("/api/tasks", newTask);
      this.tasks.push(response.data);
    },
    async updateTask(task) {
      await axios.put(`/api/tasks/${task.id}`, task);
    },
    async deleteTask(taskId) {
      await axios.delete(`/api/tasks/${taskId}`);
      this.tasks = this.tasks.filter((task) => task.id !== taskId);
    },
  },
};
</script>