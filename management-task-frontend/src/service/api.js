import axios from 'axios';

const apiClient = axios.create({
  baseURL: '/api',
});

export default {
  getTasks() {
    return apiClient.get('/tasks');
  },
  createTask(taskData) {
    return apiClient.post('/tasks', taskData);
  },
  updateTask(taskId, taskData) {
    return apiClient.put(`/tasks/${taskId}`, taskData);
  },
  deleteTask(taskId) {
    return apiClient.delete(`/tasks/${taskId}`);
  },
};