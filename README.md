## How we desinge a admin panel of slider
  1 Create a modal,migration & controler of Slider and the controller is resource controller
  2 create a route of resource controller
  3 make slider folder in this folder three file index,create,edit
  4 add route of index page in sidebar 
  5 add route of create page and desinge the create page that are make in slider folder
  6 we create a new table for slider so we  already do a slider migration in migration define structure
  7 admin.slider.store route is used to submit data form
  8 when same code use again and again then we make traits for resuable
  ## Installation process of yajra datatable
    step 1- composer require yajra/laravel-datatables
    step 2- link jquey datatable css & js 
    step 3- php artisan datatables:make Users(Modal name)