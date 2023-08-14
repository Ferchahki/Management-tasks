<template>
  <div class="border p-3 mb-3">
    <div class="flex justify-between">
      <h3 class="text-lg font-semibold">{{ task.title }}</h3>
      <button
        class="text-red-500"
        @click="$emit('deleteTask', task.id)">
          Delete
      </button>
    </div>
    <p>{{ task.description }}</p>
    <label class="mt-2">
      <input
        type="checkbox"
       
        @change="$emit('updateTask', task)"
      />
      Completed
    </label>
  </div>
</template>

<script>
export default {
  props: ["task"],
};
</script>