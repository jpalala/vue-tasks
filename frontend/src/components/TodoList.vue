<template>
  <div>
    <input type="text" class="todo-input" placeholder="Just do it!" v-model="newTodo" @keyup.enter="addTodo">
    <div v-for="todo in todos" :key="todo.id" class="todo-item">
      <div class="todo-item-left"> 
        <div v-if="!todo.editing" 
        @dblclick="editTodo(todo)" 
        @blur="doneEdit(todo)" 
        @keyup.enter="doneEdit(todo)" 
        @keyup.esc="cancelEdit(todo)" 
        class="todo-item-label" v-focus>{{todo.title}}</div>
        <input v-else type="text" class="todo-item-edit" @blur="doneEdit(todo)" v-model="todo.title">
      </div>
      
       
       
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
      beforeEditCache: '',
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
        this.beforeEditCache = todo.title;
        todo.editing = true;
      },
      cancelEdit(todo) {
        todo.editing = false;
        todo.title = this.beforeEditCache; 
      },
      doneEdit(todo) {
        todo.editing = false;
      }
  },
  directives: {
    focus: {
      //directive def
      inserted: function(el){ 
        el.focus();
      }
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
.todo-item-edit {
  font-size: 24px;
  color: #2c3ecc;
  margin-left: 12px;
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  font-family: Helvetica, Arial, sans-serif;

}
.todo-item-edit:focus {
  outline:n one;

}
</style>
