<template>
  <div>
    <input type="text" class="todo-input" placeholder="Just do it!" v-model="newTodo" @keyup.enter="addTodo">
  </div>
</template>

<script>


export default {
  name: 'todo-list',
  data () {
    return {
      newTodo: '',
      todos: [
        {
          'id': 1,
          'title': 'Get started with vue'
          'completed': false
        },
        {
          'id': 2,
          'title': 'Connect laravel'
          'completed': false
        }
      ]
    }
  }
}
</script>

<style>
.todo-input {
  width: 100%;
  padding: 15px 15px;
  font-size: 18px;
}

.todo-input:focus {
  outline:0;
}
</style>
