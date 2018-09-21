
## Create the created function in your tasks vue component

    created: function() {
        var vmodel = this;

        axios.get('api/tasks')

            .then(function(response){

            console.log(response.data); // ex.: { user: 'Your User'}

            vmodel.list = tasks;
        });  

    }



## In laravel, create the api/task route to get tasks

    Route::get('api/tasks', function() {
        return App\tasks::latest()->all();
    });

## In our component in main.js, no need for props

    Vue.component('tasks', {
        template: '#tasks-template',

        data: function() {
            return {
                list: []               
            }
        }

        //ES6: try `created()`

        created: function() {
            var vmodel = this;

            //you could also try vue-resource
            axios.get('api/tasks')

                .then(function(response){

                console.log(response.data); // ex.:  { body: 'Task 1'} 

                vmodel.list = response.data;
            });
        }
