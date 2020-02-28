<?php
//php artsina migrate:rollback   (--step=1) eliminar tablas (cuantos pasos)
 // usado-> php artisan make:model Project
//php artisan make:model MiModelo -m : crear modelo con su migracion


/* AÑADIR CAMPOS A TABLA SIN BORRAR DATOS , con otra migracion 
    php artisan make:migration add_phone_to_users_table
    php artisan migrate
 AÑADIR CAMPOS A TABLA SIN BORRAR DATOS  */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = ['title', 'url', 'description'];


   public function getRouteKeyName(){
       return 'url';
   }
}
