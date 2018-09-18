<template>
  <div>
    <input type="text" class="todo-input" placeholder="Just do it!" v-model="newTodo" @keyup.enter="addTodo">
    <div v-for="todo in todos" :key="todo.id" class="todo-item">
      <div class="todo-item-left"> 
        <div v-if="!todo.editing" @dblclick="editTodo(todo)" class="todo-item-label">{{ todo.title }}</div>
      </div>
       
        <input type="text" class="todo-item-edit">v-model="todo.title">
      <div class="remove-item">&times;</div>
    </div>
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
          'title': 'Get started with vue',
          'completed': false,
          'editing': false,
        },
        {
          'id': 2,
          'title': 'Connect laravel',
          'completed': false,
          'editing': false,
        }
      ]
    }
  },
  methods: {
      addTodo() {
        if (this.newTodo.trim().length == 0) {
          return
        }
        this.todos.push({
              id: this.idForTodo,
              title: this.newTodo,
              completed: false
        });
        this.newTodo = '';
        this.idForTodo++;
      },
      editTodo(todo) {
        todo.editing = true;
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

.todo-item {
  margin-bottom: 15px;
  display:flex;
  align-items: center;
  justify-content: space-between;
}
.remove-item {
   cursor: pointer;
   margin-left: 14px;

}
.remove-item:hover{
  color:black;

}

</style>
