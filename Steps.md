# Guide

## Tasks migration

1. Create a model and a migration 

`php artisan make:model Task -m`

2. Create the migration 

```
    public function up() {
        Schema::create('tasks', function (Blueprint $table) {

            $table->increments('id');

            $table->text('body');

            $table->boolean('completed')->default(0);

        $table->timestamps();

    }); 
    
    }
```
3. Open up database/factories/ModelFactory.php
```
	$factory->define(App\Task::class, function (Faker\Generator $faker) {
    	return [
            'body' => $faker->paragraph
        ];
    }); 
```

4. Go `php artisan tinker` and create ten tasks using `factory('App\Task', 10)->create()`

5. Setup routes.php -  `Route::get('/')`

    $tasks = App\Task::latest()->get();

    return view('welcome');

6. Setup the div.container with the tasks:

   <ul class="list-group">
    @foreach ($tasks as $task):

        <li class="list-group-item">
            {{ $task->body }}
        </li>

    @endforeach
    </ul>

7. Add the scripts

    <script src="node_modules/vue/dist/vue.js" />
    <script src="/js/main.js"> 

8. Rip out to a  template. Note: @ for laravel to not parse as blade 

    <template id="tasks-template">
    <h1> My tasks</h1>
    <ul class="list-group">
        <li class="list-group-item" v-for="task in list">
            @{{ task.body }}
        </li>
        </ul>
    </template>

9. Change the tasks display to a vuejs component/element

    <task list="{{ json_encode($tasks) }}"></tasks>

10. Open up public/js/main.js

    Vue.component('tasks', {
        template: '#tasks-template',
        props: ['list']
    });

    new Vue({
        el: 'body'
    });

11. In browser, you'll see echoing to json_encoded so change that:

    Vue.component('tasks', {
        created() {
            this.list = JSON.parse(this.list);
        }
    }


12. 
