<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Rol;
use App\Models\Programa;
use App\Models\Ficha;
use App\Models\Proyecto;
use App\Models\Evidencia;
use App\Models\Evidencia_ficha;
use App\Models\Instructor;
use App\Models\Aprendiz;
use Illuminate\Support\Facades\Hash;

class AvanzerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // BASE DE DATOS_SEGURIDAD_Rol//
        $rol1=Rol::create([
            'idRol' => '1',
            'NombreRol' => 'Administrador',
            ]);

        $rol2=Rol::create([
            'idRol' => '2',
            'NombreRol' => 'Instructor',
            ]);
       
        $rol3=Rol::create([
            'idRol' => '3',
            'NombreRol' => 'Aprendiz',
            ]);
        
        $rol4=Rol::create([
            'idRol' => '4',
            'NombreRol' => 'Coordinador',
            ]);

            // BASE DE DATOS_SEGURIDAD_Usuarios//
        $useradmin=User::create([
            'idRolFK' => '1',
            'email' => 'danino448@misena.edu.co',
            'password' => Hash::make('12345'),
            'estadoUsuario' => '1',
            ]);

        $user1=User::create([
            'idRolFK' => '2',
            'email' => 'carolitaforeros@misena.edu.co',
            'password' => Hash::make('carolita'),
            'estadoUsuario' => '1',
            ]);

        $user2=User::create([
            'idRolFK' => '2',
            'email' => 'amvaca0@misena.edu.co',
            'password' => Hash::make('ana0'),
            'estadoUsuario' => '1',
            ]);
     $user3=User::create([
            'idRolFK' => '3',
            'email' => 'bmdiaz09@misena.edu.co',
            'password' => Hash::make('12345'),
            'estadoUsuario' => '1',
            ]);

        $user4=User::create([
            'idRolFK' => '3',
            'email' => 'dejaimes99@misena.edu.co',
            'password' => Hash::make('12345'),
            'estadoUsuario' => '1',
            ]);

        $user5=User::create([
            'idRolFK' => '3',
            'email' => 'dspineros22@misena.edu.co',
            'password' => Hash::make('12345'),
            'estadoUsuario' => '1',
            ]);

        $user6=User::create([
            'idRolFK' => '3',
            'email' => 'damejia766@misena.edu.co',
            'password' => Hash::make('12345'),
            'estadoUsuario' => '1',
            ]);

        $user7=User::create([
            'idRolFK' => '3',
            'email' => 'jtbernal0@misena.edu.co',
            'password' => Hash::make('12345'),
            'estadoUsuario' => '1',
            ]);

        $user8=User::create([
            'idRolFK' => '3',
            'email' => 'jarodriguez679@misena.edu.co',
            'password' => Hash::make('12345'),
            'estadoUsuario' => '1',
            ]);

        $user9=User::create([
            'idRolFK' => '3',
            'email' => 'jccorrea043@misena.edu.co',
            'password' => Hash::make('12345'),
            'estadoUsuario' => '1',
            ]);

        $user10=User::create([
            'idRolFK' => '3',
            'email' => 'lvabello71@misena.edu.co',
            'password' => Hash::make('12345'),
            'estadoUsuario' => '1',
            ]);

        $user11=User::create([
            'idRolFK' => '3',
            'email' => 'levelandia13@misena.edu.co',
            'password' => Hash::make('12345'),
            'estadoUsuario' => '1',
            ]);

        $user12=User::create([
            'idRolFK' => '3',
            'email' => 'lfariza12@misena.edu.co',
            'password' => Hash::make('12345'),
            'estadoUsuario' => '1',
            ]);

        $user13=User::create([
            'idRolFK' => '3',
            'email' => 'malesmes93@misena.edu.co',
            'password' => Hash::make('12345'),
            'estadoUsuario' => '1',
            ]);

        $user14=User::create([
            'idRolFK' => '3',
            'email' => 'ndleon93@misena.edu.co',
            'password' => Hash::make('12345'),
            'estadoUsuario' => '1',
            ]);

        $user15=User::create([
            'idRolFK' => '3',
            'email' => 'racelemin@misena.edu.co',
            'password' => Hash::make('12345'),
            'estadoUsuario' => '1',
            ]);

        $user16=User::create([
            'idRolFK' => '3',
            'email' => 'spaez89@misena.edu.co',
            'password' => Hash::make('12345'),
            'estadoUsuario' => '1',
            ]);

        $user17=User::create([
            'idRolFK' => '3',
            'email' => 'samalaver8@misena.edu.co',
            'password' => Hash::make('12345'),
            'estadoUsuario' => '1',
            ]);

        $user18=User::create([
            'idRolFK' => '4',
            'email' => 'thuerfano@misena.edu.co,',
            'password' => Hash::make('12345'),
            'estadoUsuario' => '1',
            ]);
        
        $user19=User::create([
            'idRolFK' => '4',
            'email' => 'vmartinez323@misena.edu.co,',
            'password' => Hash::make('12345'),
            'estadoUsuario' => '1',
            ]);
// BASE DE DATOS_SEGURIDAD_INSTRUCTOR//
        $instructor1=Instructor::create([
            'idUsuarioFK' => '2',
            'nombreInstructor' => 'Carolina',
            'apellidoInstructor' => 'Forero',
            'documentoInstructor' => '8158181',
            ]);

        $instructor2=Instructor::create([
            'idUsuarioFK' => '3',
            'nombreInstructor' => 'Fernando',
            'apellidoInstructor' => 'Galindo',
            'documentoInstructor' => '7181019',
            ]);

        $programa=Programa::create([
            'nombrePrograma' => 'ADSI-2021',
            'versionPrograma' => '2.0',
            ]);
        //// BASE DE DATOS_SEGURIDAD_FICHA//

        $ficha1=Ficha::create([
            'idProgramaFK' => '1',
            'idInstructorFK' => '1',
            'ficha' => '2242755',
            'fechaInicio' => '2021-02-01',
            'fechaFin' => '2021-12-20',
            'estadoFicha' => '1',
            ]);
        $ficha2=Ficha::create([
            'idProgramaFK' => '1',
            'idInstructorFK' => '1',
            'ficha' => '2242756',
            'fechaInicio' => '2021-02-01',
            'fechaFin' => '2021-12-20',
            'estadoFicha' => '1',
            ]);
      $ficha4=Ficha::create([
            'idProgramaFK' => '1',
            'idInstructorFK' => '2',
            'ficha' => '2242757',
            'fechaInicio' => '2021-02-01',
            'fechaFin' => '2021-12-20',
            'estadoFicha' => '1',
            ]);
// BASE DE DATOS_SEGURIDAD_Proyecto//
        $proyecto1=Proyecto::create([
            'idFichaFK' => '3',
            'nombreProyecto' => 'Medicitas',
            'descripcionProyecto' => 'Citas consultorios medicos',
            'estadoProyecto' => '1',
            ]);

        $proyecto1=Proyecto::create([
            'idFichaFK' => '3',
            'nombreProyecto' => 'JudiCitas',
            'descripcionProyecto' => 'citas con abogados',
            'estadoProyecto' => '1',
            ]);

        $proyecto1=Proyecto::create([
            'idFichaFK' => '1',
            'nombreProyecto' => 'Asistencia SENA',
            'descripcionProyecto' => 'Asitencia clases y reportes',
            'estadoProyecto' => '1',
            ]);

        $proyecto1=Proyecto::create([
            'idFichaFK' => '1',
            'nombreProyecto' => 'Renault',
            'descripcionProyecto' => 'Venta de carros',
            'estadoProyecto' => '1',
            ]);

        $proyecto1=Proyecto::create([
            'idFichaFK' => '2',
            'nombreProyecto' => 'Taxis',
            'descripcionProyecto' => 'Solictar taxis en plataforma',
            'estadoProyecto' => '1',
            ]);
// BASE DE DATOS_SEGURIDAD_EVIDENCIA//
        $evidencia1=Evidencia::create([
            'trimestre' => '1',
            'nombreEvidencia' => 'Java-Inducción',
            'faseEvidencia' => 'Planeación',
            'evidenciaP' => 'https://drive.google.com/drive/folders/1nfb-bY3lK47otVS-e5PBPTYWUquNbdIn?usp=sharing',
            'estadoEvidencia' => '0',
            ]);

        $evidencia2=Evidencia::create([
            'trimestre' => '1',
            'nombreEvidencia' => 'Documentación',
            'faseEvidencia' => 'Planeación',
            'evidenciaP' => 'https://drive.google.com/drive/folders/1nfb-bY3lK47otVS-e5PBPTYWUquNbdIn?usp=sharing',
            'estadoEvidencia' => '0',
            ]);
        
        $evidencia3=Evidencia::create([
            'trimestre' => '2',
            'nombreEvidencia' => 'Base de datos',
            'faseEvidencia' => 'Desarrollo',
            'evidenciaP' => 'https://drive.google.com/drive/folders/1nfb-bY3lK47otVS-e5PBPTYWUquNbdIn?usp=sharing',
            'estadoEvidencia' => '0',
            ]);

        $evidencia4=Evidencia::create([
            'trimestre' => '3',
            'nombreEvidencia' => 'Vistas',
            'faseEvidencia' => 'Desarrollo',
            'evidenciaP' => 'https://drive.google.com/drive/folders/1nfb-bY3lK47otVS-e5PBPTYWUquNbdIn?usp=sharing',
            'estadoEvidencia' => '1',
            ]);
// BASE DE DATOS_SEGURIDAD_EVIDENCIA:FICHA//
        $evidenciaficha1=Evidencia_ficha::create([
            'idFichaFK' => '3',
            'idEvidenciaFK' => '1',
            'estadoEvidenciaFi' => '0',
            'fechaInicio' => '2021-10-01',
            'fechaFin' => '2021-10-30',
            ]);
        
        $evidenciaficha2=Evidencia_ficha::create([
            'idFichaFK' => '2',
            'idEvidenciaFK' => '2',
            'estadoEvidenciaFi' => '0',
            'fechaInicio' => '2021-10-01',
            'fechaFin' => '2021-10-30',
            ]);
        $evidenciaficha3=Evidencia_ficha::create([
            'idFichaFK' => '1',
            'idEvidenciaFK' => '3',
            'estadoEvidenciaFi' => '0',
            'fechaInicio' => '2021-10-01',
            'fechaFin' => '2021-10-30',
            ]);
        // BASE DE DATOS_SEGURIDAD_APRENDIZES//
        $aprendiz1=Aprendiz::create([
            'idUsuarioFK' => '3',
            'idFichaFK' => '1',
            'nombreAprendiz' => 'Brian',
            'apellidoAprendiz' => 'Diaz',
            'documentoAprendiz' => '17118718',
            ]);

        $aprendiz2=Aprendiz::create([
            'idUsuarioFK' => '4',
            'idFichaFK' => '1',
            'nombreAprendiz' => 'Daniel',
            'apellidoAprendiz' => 'Jaimes',
            'documentoAprendiz' => '17118711',
            ]);

        $aprendiz3=Aprendiz::create([
            'idUsuarioFK' => '5',
            'idFichaFK' => '1',
            'nombreAprendiz' => 'David',
            'apellidoAprendiz' => 'Piñeros',
            'documentoAprendiz' => '17118712',
            ]);

        $aprendiz4=Aprendiz::create([
            'idUsuarioFK' => '6',
            'idFichaFK' => '1',
            'nombreAprendiz' => 'Daniel',
            'apellidoAprendiz' => 'Mejia',
            'documentoAprendiz' => '17118713',
            ]);

        $aprendiz5=Aprendiz::create([
            'idUsuarioFK' => '7',
            'idFichaFK' => '2',
            'nombreAprendiz' => 'Jennifer',
            'apellidoAprendiz' => 'Bernal',
            'documentoAprendiz' => '17118714',
            ]);

        $aprendiz6=Aprendiz::create([
            'idUsuarioFK' => '8',
            'idFichaFK' => '2',
            'nombreAprendiz' => 'Juan',
            'apellidoAprendiz' => 'Rodiguez',
            'documentoAprendiz' => '17118715',
        ]);

        $aprendiz7=Aprendiz::create([
            'idUsuarioFK' => '9',
            'idFichaFK' => '3',
            'nombreAprendiz' => 'Juan david',
            'apellidoAprendiz' => 'Correa',
            'documentoAprendiz' => '17118716',
            ]);

        $aprendiz8=Aprendiz::create([
            'idUsuarioFK' => '10',
            'idFichaFK' => '3',
            'nombreAprendiz' => 'Laura ',
            'apellidoAprendiz' => 'abello',
            'documentoAprendiz' => '17118717',
            ]);

        $aprendiz9=Aprendiz::create([
            'idUsuarioFK' => '11',
            'idFichaFK' => '3',
            'nombreAprendiz' => 'Layonel',
            'apellidoAprendiz' => 'Velandia',
            'documentoAprendiz' => '17118719',
            ]);

        $aprendiz10=Aprendiz::create([
            'idUsuarioFK' => '12',
            'idFichaFK' => '2',
            'nombreAprendiz' => 'Luisa',
            'apellidoAprendiz' => 'Ariza',
            'documentoAprendiz' => '17118720',
            ]);

        $aprendiz11=Aprendiz::create([
            'idUsuarioFK' => '13',
            'idFichaFK' => '2',
            'nombreAprendiz' => 'Miguel',
            'apellidoAprendiz' => 'Lesmes',
            'documentoAprendiz' => '17118721',
            ]);

        $aprendiz12=Aprendiz::create([
            'idUsuarioFK' => '14',
            'idFichaFK' => '3',
            'nombreAprendiz' => 'Nicolas',
            'apellidoAprendiz' => 'Leon',
            'documentoAprendiz' => '17118722',
            ]);

        $aprendiz13=Aprendiz::create([
            'idUsuarioFK' => '15',
            'idFichaFK' => '1',
            'nombreAprendiz' => 'Raul',
            'apellidoAprendiz' => 'Celemin',
            'documentoAprendiz' => '17118723',
            ]);

        $aprendiz14=Aprendiz::create([
            'idUsuarioFK' => '16',
            'idFichaFK' => '1',
            'nombreAprendiz' => 'Sebastián',
            'apellidoAprendiz' => 'Paez',
            'documentoAprendiz' => '17118724',
            ]);

        $aprendiz15=Aprendiz::create([
            'idUsuarioFK' => '17',
            'idFichaFK' => '1',
            'nombreAprendiz' => 'Johana',
            'apellidoAprendiz' => 'Sanchez',
            'documentoAprendiz' => '17118725',
            ]);
    }
}
