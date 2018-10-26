<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activitys';

    protected  $primaryKey = 'uuid';

    protected $fillable = [
        'document_id',
        'user_id',
        'description',
    ];

    public static function registerActivityProyecto($requestUuid, $requestName){

        $respuesta = self::sendMessage("Se ha creado el proyecto " . $requestName);


        setlocale(LC_ALL, 'es_ES').': ';
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
    
        $log = 'Mauricio ha agregado una tarea al proyecto "Construcción de bodega" el día ' . 
                iconv('ISO-8859-1', 'UTF-8', strftime('%A %d de %B de %Y', time())) . 
                ' a las ' . date("H:i:s");

        $activity = new Activity();
        $activity->document_id = $requestUuid;
        $activity->user_id = "1";
        $activity->description = $log;
        $activity->save();

        dd($respuesta); return;
    
    }

    public static function sendMessage($mensaje){
		$content = array(
			"en" => "abc ...", "es" => $mensaje
			);
		
		$fields = array(
			'app_id' => "f99528d1-c8a4-494f-a64e-9c64b01bcf68",
			'include_player_ids' => array("1672c00d-f055-479a-8ae0-dcd43750d72d"),
			'data' => array("foo" => "bar"),
			'contents' => $content,
			'headings' => array("foo" => "bar"),
			'subtitle' => array("foowww" => "xxx")
		);
		
		$fields = json_encode($fields);
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

		$response = curl_exec($ch);
		curl_close($ch);
		
		return $response;
	}
}
