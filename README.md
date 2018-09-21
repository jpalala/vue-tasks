- [ ] Step 1: 
 
![vuecli prompts](vueinit.png)

- [ ] Step 2: Create a todolist component in `src/components/` and refer to it in App

- [ ] Step 3: Create input field

- [ ] Step 4: Create list of todos in todolist's data ()  

- [ ] Step 5: Create addTodo method

- [ ] Step 6: Create editTodo,  doneEdit methods,  add completed checkbox


# Integrating with Laravel

- [ ] Step 7: Create backend, Option 1: Copycomponents to resources/assets/js/components/ in Laravel

- [ ] Step 8:  add `Vue.component('todo-list', require('./components/TodoList.vue'));` to your assets and use laravel mix (see laravel mix documentation]

- [ ] Step 9: Create migration, model, and resource routes 


> `php artisan make:migration create_tasks_table --create=tasks`

> `php artisan make:model Task`

> `php artisan make:resource Task`

- [ ] Step 9B: Allow cross origin requests to your laravel backend

- [ ] Step 10. Install laravel-cors package:

* Require using composer:

  ```bash
    composer require spatie/laravel-cors
  ```


* After that you must register the Cors middleware:

  ```php
  // app/Http/Kernel.php

  protected $middleware = [
      ...
      \Spatie\Cors\Cors::class
  ];
  ```

* Publish a service provider to use CorsServiceProvider:
  ```bash
   php artisan vendor:publish --provider="Spatie\Cors\CorsServiceProvider" --tag="config"`
   ```
All Done! Now your app should accept cross origin requests.
