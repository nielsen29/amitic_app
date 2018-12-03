<?php

use Illuminate\Database\Seeder;
use App\Topicos;

class TopicosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla de topicos antes de ingresar los datos
        Topicos::truncate();

        //Se definen los topicos por defecto que se presentan en congresos AmITIC

        $topico = new Topicos();
        $topico->id_congreso = 1;
        $topico->nombre ='E-learning aplicado a entornos móviles.';
        $topico->descripcion='';
        $topico->save();

        $topico = new Topicos();
        $topico->id_congreso = 1;
        $topico->nombre ='Redes de sensores.';
        $topico->descripcion='';
        $topico->save();

        $topico = new Topicos();
        $topico->id_congreso = 1;
        $topico->nombre ='Ingeniería de Software aplicado a salud.';
        $topico->descripcion='';
        $topico->save();

        $topico = new Topicos();
        $topico->id_congreso = 1;
        $topico->nombre ='Diseño de interfaces móviles.';
        $topico->descripcion='';
        $topico->save();

        $topico = new Topicos();
        $topico->id_congreso = 1;
        $topico->nombre ='Nuevos desarrollos en Ingeniería de Software.';
        $topico->descripcion='';
        $topico->save();

        $topico = new Topicos();
        $topico->id_congreso = 1;
        $topico->nombre ='Seguridad y privacidad en redes.';
        $topico->descripcion='';
        $topico->save();

        $topico = new Topicos();
        $topico->id_congreso = 1;
        $topico->nombre ='Sistemas de salud médicos.';
        $topico->descripcion='';
        $topico->save();

        $topico = new Topicos();
        $topico->id_congreso = 1;
        $topico->nombre ='Reconocimientos de actividades.';
        $topico->descripcion='';
        $topico->save();

        $topico = new Topicos();
        $topico->id_congreso = 1;
        $topico->nombre ='Realidad Aumentada.';
        $topico->descripcion='';
        $topico->save();

        $topico = new Topicos();
        $topico->id_congreso = 1;
        $topico->nombre ='Interacción Persona-Computador.';
        $topico->descripcion='';
        $topico->save();

        $topico = new Topicos();
        $topico->id_congreso = 1;
        $topico->nombre ='Inteligencia Ambiental.';
        $topico->descripcion='';
        $topico->save();

        $topico = new Topicos();
        $topico->id_congreso = 1;
        $topico->nombre ='Computación Ubicua.';
        $topico->descripcion='';
        $topico->save();

        $topico = new Topicos();
        $topico->id_congreso = 1;
        $topico->nombre ='Inteligencia Artificial.';
        $topico->descripcion='';
        $topico->save();

        $topico = new Topicos();
        $topico->id_congreso = 1;
        $topico->nombre ='Web semántica.';
        $topico->descripcion='';
        $topico->save();

        $topico = new Topicos();
        $topico->id_congreso = 1;
        $topico->nombre ='Salud electrónica y móvil.';
        $topico->descripcion='';
        $topico->save();

        $topico = new Topicos();
        $topico->id_congreso = 1;
        $topico->nombre ='Ciudades Inteligentes.';
        $topico->descripcion='';
        $topico->save();

        $topico = new Topicos();
        $topico->id_congreso = 1;
        $topico->nombre ='Nuevas soluciones en Ciencias Computacionales.';
        $topico->descripcion='';
        $topico->save();

        $topico = new Topicos();
        $topico->id_congreso = 1;
        $topico->nombre ='Inteligencia de negocios, Big data y Open data.';
        $topico->descripcion='';
        $topico->save();

        $topico = new Topicos();
        $topico->id_congreso = 1;
        $topico->nombre ='Internet de las cosas.';
        $topico->descripcion='';
        $topico->save();

        $topico = new Topicos();
        $topico->id_congreso = 1;
        $topico->nombre ='Tecnologías Disruptivas.';
        $topico->descripcion='';
        $topico->save();

    }
}
