1. vue init webpack frontend

![vuecli prompts](vueinit.png)

2. create a todolist component in `src/components/` and refer to it in App

3. Create input field

4. Create list of todos in todolist's data ()  

5. Create addTodo method

6. create editTodo,  doneEdit methods,  add completed checkbox

7. Copy components to resources/assets/js/components/ in Laravel

8. add `Vue.component('todo-list', require('./components/TodoList.vue'));` to your assets and use mix

9. Create migration, model, and resource routes 


> php artisan make:migration create_tasks_table --create=tasks

> php artisan make:model Task

> php artisan make:resource Task


10. Install laravel-cors package:

  * Require using composer
  ```
    composer require spatie/laravel-cors
  ```


  * After that you must register the Cors middleware

  ```
  // app/Http/Kernel.php

  protected $middleware = [
      ...
      \Spatie\Cors\Cors::class
  ];
  ```

  * Publish a service provider to use CorsServiceProvider:

  `php artisan vendor:publish --provider="Spatie\Cors\CorsServiceProvider" --tag="config"`

Now your app should accept cross origin requests.# New Document. 
