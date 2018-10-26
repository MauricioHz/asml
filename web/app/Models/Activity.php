<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'projects';

    protected  $primaryKey = 'uuid';

    protected $fillable = [
        'document_id',
        'user_id',
        'description',
    ];

    public static function registerActivityProyecto($projectName){
    // Peggy agregó un comentario al proyecto "alfa"
    // Claire agregó a la lista de tareas "Realizar inventario" 
    // Mayra Montes ha guardado en Jardin
    // Mauricio ha adjuntado 20180730_170142.jpg a Sistema gestión documental 30 de jul. a las 17:02
    // Mauricio ha añadido Contribuciones sitio pucon a TAREAS_1 19 de abr. a las 12:31

    // Mauricio ha creado el proyecto "Construcción de bodega" el día 23 de octubre a las 17:15 horas
    // Mauricio ha modificado el proyecto "Construcción de bodega" el día 24 de octubre a las 17:15 horas
    // Mauricio ha subido el documento "informe de terreno.xls" al proyecto "Construcción de bodega" el día 24 de octubre a las 11:25 horas
    // Mauricio ha eliminado el documento "informe de terreno.xls" del proyecto "Construcción de bodega" el día 24 de octubre a las 11:25 horas
    // Mauricio agregó un comentario al documento "informe de terreno.xls" del proyecto "Construcción de bodega" el día 25 de octubre a las 12:10 horas
    // Mauricio agregó una tarea al documento "informe de terreno.xls" el día 24 de octubre a las 11:25 horas
    // Mauricio ha agregado una tarea al proyecto "Construcción de bodega" el día 24 de octubre a las 13:45 horas

    /**/
        $activity = new Activity();
        $activity->document_id = "1";
        $activity->user_id = "1";
        $activity->description = "Mauricio ha creado el proyecto " . $projectName . " el día 23 de octubre a las 17:15 horas";
        $activity->save();
    
    }
}
