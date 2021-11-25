<?php include("header.php");?>

<!DOCTYPE html>
<html lang="es">
<head>
  
  <title>Formulario</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>

<div class="wrapper bgded overlay gradient" style="background-image:url('images/demo/backgrounds/doc.jpg');">
    <div id="pageintro" class="hoc clear">     
        <div class="container" id="advanced-search-form">

        <body>
    
    
    <div id ="informacion" class="form">
      <div class="form-content">
        <h3 style="padding-bottom: 4%;">DOCUMENTO DE PREPARACIÓN PARA CUESTIONARIO PRE DONACIÓN</h3>
        <p>
          Cada una de las preguntas de este cuestionario es importante, tanto
          para su salud como la de los que recibirán su sangre.
        </p>
        <p>
          La seguridad de los enfermos depende de la honestidad y exactitud de
          sus respuestas, esto puede significar que algunos criterios impidan
          que usted done su sangre.
        </p>
        <p>
          Si usted no está seguro(a) sobre alguna respuesta, marque en el
          casillero “no sé” para que la pregunta sea analizada durante la
          entrevista.
          <br />
          La información que usted entregue es confidencial y está bajo secreto
          médico.
        </p>
        <p>
          Usted puede retirarse libremente en cualquier etapa de la donación si
          lo desea. Su decisión será respetada sin consecuencias para usted.
        </p>
        <p>
          IMPORTANTE: Nunca intente donar su sangre con el objetivo de hacerse
          el examen del VIH. El médico o el profesional le dirán dónde dirigirse
          para ello. <br />
          <p style="text-align: center;">¡Muchas gracias por venir a donar!</p>
        </p>
      </div>
    </div>

    <div class="form">
      
      <div id ="form" class="form-content">
        <h5 class="mb-5">ESTADO DE SALUD PARA PODER DONAR SU SANGRE</h5>
        <form action="" method="post">

          <!--   PREGUNTA 1-->   
          <div class="mb-5 form-check form-check">
            <label class="mb-3">1. ¿Se siente bien de salud para donar sangre?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>
          </div>

          <!--   PREGUNTA 2-A-->   
          <div class="mb-5 form-check form-check">
              <label class="mb-3">2) A. ¿Ha consultado a un médico en los últimos 6 meses?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                  <label class="form-check-label" for="inlineRadio3">No se</label>
               </div>
            </div>

            <!--   PREGUNTA 2-B-->   
          <div class="mb-5 form-check form-check">
              <label class="mb-3">2) B. ¿Se ha realizado exámenes (de sangre, radiografías, etc.) en los últimos 4 meses? </label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                  <label class="form-check-label" for="inlineRadio3">No se</label>
               </div>
            </div>

            <!--   PREGUNTA 2-C-->   
          <div class="mb-5 form-check form-check">
              <label class="mb-3">2) C. ¿Ha tomado medicamentos (incluyendo los que toma todos los días)?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                  <label class="form-check-label" for="inlineRadio3">No se</label>
               </div>

               <div class="mt-3 mb-3 textarea" id="textarea">
                  <label for="exampleFormControlTextarea1" class="form-label">¿Cuál?</label>
                  <textarea class="form-control" id="textarea" rows="1"></textarea>
                </div>
            </div>

             <!--   PREGUNTA 2-D-->   
          <div class="mb-5 form-check form-check">
              <label class="mb-3">2) D. ¿Tiene alguna enfermedad que requiere control médico regular?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                  <label class="form-check-label" for="inlineRadio3">No se</label>
               </div>

               <div class="mt-3 mb-3 textarea">
                  <label for="exampleFormControlTextarea1" class="form-label">¿Cuál?</label>
                  <textarea class="form-control" id="textarea" rows="1"></textarea>
                </div>
            </div>

           
            <!-- PREGUNTA 2E-->
            <div class="mb-5 form-check form-check">
              <label class="mb-3">2) E. ¿Ha recibido inyecciones de desensibilización para la alergia en los últimos 15 días?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                  <label class="form-check-label" for="inlineRadio3">No se</label>
               </div>      
            </div>

            <!-- PREGUNTA 3A-->
            <div class="mb-5 form-check form-check">
              <label class="mb-3">3) A. ¿Se ha vacunado contra la hepatitis B?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                  <label class="form-check-label" for="inlineRadio3">No se</label>
               </div>      
            </div>

             <!-- PREGUNTA 3B-->
             <div class="mb-5 form-check form-check">
              <label class="mb-3">3) B. ¿Se ha vacunado contra la rabia en el último año?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                  <label class="form-check-label" for="inlineRadio3">No se</label>
               </div>      
            </div>

            <!-- PREGUNTA 3C-->
            <div class="mb-5 form-check form-check">
              <label class="mb-3">3) C. ¿Se ha vacunado contra el tetano?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                  <label class="form-check-label" for="inlineRadio3">No se</label>
               </div>      
            </div>

            <!-- PREGUNTA 3D-->
            <div class="mb-5 form-check form-check">
              <label class="mb-3">3) D. ¿Se ha vacunado contra otras enfermedades en el último mes?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                  <label class="form-check-label" for="inlineRadio3">No se</label>
               </div>      
            </div>

            <!-- PREGUNTA 4-->
            <div class="mb-5 form-check form-check">
              <label class="mb-3">4. ¿Ha tenido recientemente sangramientos (de la nariz, hemorroides, menstruaciones muy abundantes)?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                  <label class="form-check-label" for="inlineRadio3">No se</label>
               </div>      
            </div>

            <!-- PREGUNTA 5-->
            <div class="mb-5 form-check form-check">
              <label class="mb-3">5. ¿Ha sentido en los últimos días o semanas un dolor en el pecho o dificultad para respirar al hacer un esfuerzo?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                  <label class="form-check-label" for="inlineRadio3">No se</label>
               </div>      
            </div>

            <!-- PREGUNTA 6-->
            <div class="mb-5 form-check form-check">
              <label class="mb-3">6. ¿Ha sido tratado por psoriasis?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                  <label class="form-check-label" for="inlineRadio3">No se</label>
               </div>      
            </div>

             <!--   PREGUNTA 7-->   
          <div class="mb-5 form-check form-check">
            <label class="mb-3">7. Tiene programada alguna actividad de esfuerzo físico después de la donación (por deporte o por trabajo)?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>

             <div class="mt-3 mb-3 textarea">
                <label for="exampleFormControlTextarea1" class="form-label">¿Cuál?</label>
                <textarea class="form-control" id="textarea" rows="1"></textarea>
              </div>
          </div>


           <!--   PREGUNTA 8-->   
           <div class="mb-5 form-check form-check">
            <label class="mb-3">8. ¿Ha consultado a un cardiólogo?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>

             <div class="mt-3 mb-3 textarea">
                <label for="exampleFormControlTextarea1" class="form-label">¿Por qué?</label>
                <textarea class="form-control" id="textarea" rows="1"></textarea>
              </div>
          </div>

          <!-- PREGUNTA 9-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">9. ¿Ha sido operado u hospitalizado?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>      
          </div>

          <!-- PREGUNTA 10-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">10. ¿Ha tenido asma o reacciones alérgicas importantes?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>      
          </div>
          <!-- NO HAY 11 NI 12-->
          <!-- PREGUNTA 13-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">13. ¿Tiene alguna enfermedad de la coagulación de la sangre?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>      
          </div>

          <!-- PREGUNTA 14-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">14. ¿Ha tenido anemia, falta de glóbulos rojos o un tratamiento por falta de fierro?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>      
          </div>

          <!-- PREGUNTA 15-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">15. ¿Ha tenido un diagnóstico de cáncer (incluyendo melanoma, leucemia, linfoma)?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>      
          </div>

          <!-- PREGUNTA 16-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">16. ¿Ha tenido un accidente vascular cerebral, un accidente isquémico transitorio, crisis epilépticas, convulsiones, síncopes repetidos?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>      
          </div>

          <!-- PREGUNTA 17-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">17. ¿Está embarazada en este momento o lo estuvo en los últimos 6 meses?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>      
          </div>
          <hr>
          <div class="detalles">
              <h5>¿Por qué se hacen preguntas sobre sus viajes?</h5><br>
              <p>Para investigar si usted es portador de una enfermedad adquirida durante su viaje que pudo pasar desapercibida, ya que ella se puede transmitir por la sangre y provocar una enfermedad grave en algunos enfermos.</p>
          </div>
          
         

          <!-- PREGUNTA 18-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">18. ¿Ha viajado, aunque sea solo una vez en la vida, fuera del país?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>      
          </div>

          <!-- PREGUNTA 19-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">19. ¿Ha estado fuera del país en los últimos 12 meses?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>  
             <div class="mt-3 mb-3 textarea">
              <label for="exampleFormControlTextarea1" class="form-label">¿En que país?</label>
              <textarea class="form-control" id="textarea" rows="1"></textarea>
            </div>    
          </div>

          <!-- PREGUNTA 20-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">20. ¿Ha vivido fuera de Chile por más de 6 meses?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>  
             <div class="mt-3 mb-3 textarea">
              <label for="exampleFormControlTextarea1" class="form-label">¿En que país?</label>
              <textarea class="form-control" id="textarea" rows="1"></textarea>
            </div>    
          </div>

          <!-- PREGUNTA 21-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">21. ¿Ha presentado una crisis de malaria?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>  
                
          </div>

          <!-- PREGUNTA 22-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">22. ¿Durante o después de un viaje fuera de Chile ha presentado un episodio de fiebre?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>  
                
          </div>

          <!-- PREGUNTA 23-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">23. ¿Ha vivido en Reino Unido entre los años 1980 a 1996?  </label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>  
                
          </div>

          

          <hr>
          <p>
            <h5>¿Por qué se hacen otros tipos de preguntas?</h5>
            <br>
            Las siguientes preguntas buscan investigar si usted tiene alguna infección que puede ser transmitida al receptor y que no será detectada en los estudios de laboratorio.
          </p>
          <p> RIESGOS DE SER PORTADOR DE UNA INFECCIÓN TRANSMISIBLE POR LA SANGRE</p>
          <br>


          <!-- PREGUNTA 24-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">24. ¿Ha ido al dentista en los últimos 7 días? </label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>  
                
          </div>

          <!-- PREGUNTA 25-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">25. ¿Ha tenido fiebre (mayor a 38° C), diarrea o un problema infeccioso en los últimos 15 días?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>  
                
          </div>

          <!-- PREGUNTA 26-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">26. ¿Ha tenido una lesión o una infección en la piel en los últimos 15 días?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>  
                
          </div>

          <!-- PREGUNTA 27-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">27. En el último mes ¿Ha estado en contacto con una persona con una enfermedad contagiosa? </label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>  
             <div class="mt-3 mb-3 textarea">
              <label for="exampleFormControlTextarea1" class="form-label">¿Cuál?</label>
              <textarea class="form-control" id="textarea" rows="1"></textarea>
            </div> 
                
          </div>

          <!-- PREGUNTA 28-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">28. ¿Se ha hecho un tatuaje o un piercing (incluyendo perforación de las orejas) en los últimos 6 meses?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>  
                
          </div>

          <!-- PREGUNTA 29-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">29. ¿Ha estado en contacto con sangre humana a través de un pinchazo, una herida o salpicadura en los últimos 6 meses?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>  
                
          </div>

          <!-- PREGUNTA 30-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">30. ¿Se ha hecho algún tratamiento con agujas (acupuntura, mesoterapia) o esclerosis de várices en los últimos 6 meses?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>  
                
          </div>

          <!-- PREGUNTA 31-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">31. ¿Se ha hecho una endoscopía (fibroscopía, gastroscopía, colonoscopía) en los últimos 6 meses?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>  
                
          </div>

          <!-- PREGUNTA 32-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">32. ¿Ha tenido varias infecciones urinarias en los últimos 12 meses?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>  
                
          </div>

          <!-- PREGUNTA 33-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">33. Usted o su madre ¿han tenido Enfermedad de Chagas?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>  
                
          </div>
          <hr>
          <br><h5>Durante su vida</h5><br>

          <!-- PREGUNTA 34-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">34. ¿Ha recibido una transfusión o un trasplante de órganos?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>  
                
          </div>

          <!-- PREGUNTA 35-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">35. ¿Ha recibido un trasplante de córnea o de duramadre?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>  
                
          </div>

          <!-- PREGUNTA 36-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">36. ¿Ha recibido tratamiento con hormona de crecimiento antes de 1989?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>  
                
          </div>

          <!-- PREGUNTA 37-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">37. Algún miembro de su familia ¿ha presentado la enfermedad de Creutzfeldt Jakob?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">No se</label>
             </div>  
                
          </div>
          <hr>
          <div class="detalles">
            <h5>¿Por qué se hacen preguntas íntimas?</h5><br>
            <p>A través de las siguientes preguntas buscamos averiguar si usted ha podido contraer el virus del SIDA, los virus de la hepatitis B o C o el virus HTLV.</p>
            <p>Estos virus son estudiados en todas las donaciones de sangre con técnicas de alta eficiencia. Sin embargo, existe un “periodo de ventana” al comienzo del contagio, donde los exámenes son negativos y no logran detectar la infección. Si se dona en este periodo se puede transmitir la enfermedad a través de la transfusión a un enfermo, debido a que el virus ya se encuentra en la sangre.</p>
            <p>Lea atentamente las siguientes preguntas. Puede completar esta parte del cuestionario con el médico o el profesional durante la entrevista.</p>

          </div>
          <br>

          <hr><br>
          <h5>OTROS RIESGOS DE SER PORTADOR DE UNA INFECCIÓN TRANSMISIBLE POR LA SANGRE</h5><br>

          <!-- PREGUNTA 38-->
          <div class="mb-5 form-check form-check">
              <label class="mb-3">38. ¿Ha tenido algún resultado positivo en exámenes de VIH / SIDA, de virus de la hepatitis B, de virus de la hepatitis C o el virus HTLV?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                  <label class="form-check-label" for="inlineRadio3">No se</label>
               </div>  
                  
            </div>

            <!-- PREGUNTA 39-->
          <div class="mb-5 form-check form-check">
              <label class="mb-3">39. ¿Cree usted que necesita hacerse un examen para el VIH / SIDA, del virus de la hepatitis B, del virus de la hepatitis C?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                  <label class="form-check-label" for="inlineRadio3">No se</label>
               </div>  
                  
            </div>

            <!-- PREGUNTA 40-->
          <div class="mb-5 form-check form-check">
              <label class="mb-3">40. ¿Sabe usted si entre sus cercanos hay alguna persona que sea portadora de la hepatitis B?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                  <label class="form-check-label" for="inlineRadio3">No se</label>
               </div>  
                  
            </div>

            <!-- PREGUNTA 41-->
          <div class="mb-5 form-check form-check">
              <label class="mb-3">41. ¿Ha utilizado drogas u otras sustancias por vía inyectable que no hayan sido recetadas por un médico?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                  <label class="form-check-label" for="inlineRadio3">No se</label>
               </div>  
                  
            </div>

            <!-- PREGUNTA 42-->
          <div class="mb-5 form-check form-check">
              <label class="mb-3">42. ¿Ha tenido usted una infección de transmisión sexual? (SÍFILIS, clamidia, gonorrea, herpes genital, etc.)</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                  <label class="form-check-label" for="inlineRadio3">No se</label>
               </div>  
                  
            </div>

            <hr><br>
            <h5>En los últimos 6 meses:</h5>
            <br>
            <!-- PREGUNTA 43-->
          <div class="mb-5 form-check form-check">
              <label class="mb-3">43. ¿Ha tenido contacto sexual con una persona nueva?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                  <label class="form-check-label" for="inlineRadio3">No se</label>
               </div>  
                  
            </div>

            <!-- PREGUNTA 44 A -->
          <div class="mb-5 form-check form-check">
              <label class="mb-3">44. A. ¿Ha tenido contacto sexual con más de una persona?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                  <label class="form-check-label" for="inlineRadio3">No se</label>
               </div>  
                  
            </div>

            <!-- PREGUNTA 44 B -->
          <div class="mb-5 form-check form-check">
              <label class="mb-3">44. B. ¿Su pareja ha tenido contacto sexual con más de una persona?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                  <label class="form-check-label" for="inlineRadio3">No se</label>
               </div>  
                  
            </div>

            <hr><br>
            <h5>En los últimos 12 meses:</h5>
            <br>

            <!-- PREGUNTA 45 -->
            <div class="mb-5 form-check form-check">
                <label class="mb-3">45. ¿Ha tenido usted un contacto sexual a cambio de dinero o drogas en los últimos 12 meses?  </label><br>            
                         
                  <div  class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                    <label class="form-check-label" for="inlineRadio1">Si</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                    <label class="form-check-label" for="inlineRadio3">No se</label>
                 </div>  
                    
              </div>

              <hr><br>
              <h5>46. En los últimos 12 meses ha tenido un contacto sexual con una persona que:</h5>
              <br>

              <!-- PREGUNTA 46 A -->
            <div class="mb-5 form-check form-check">
                <label class="mb-3">A. ¿Está infectado(a) con VIH / SIDA, el virus de la hepatitis B, el virus de la hepatitis C o el virus HTLV?    </label><br>            
                         
                  <div  class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                    <label class="form-check-label" for="inlineRadio1">Si</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                    <label class="form-check-label" for="inlineRadio3">No se</label>
                 </div>  
                    
              </div>

              <!-- PREGUNTA 46 B -->
            <div class="mb-5 form-check form-check">
                <label class="mb-3"> B. ¿Ha utilizado drogas u otras sustancias por vía inyectable que no hayan sido recetadas por un médico? </label><br>            
                         
                  <div  class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                    <label class="form-check-label" for="inlineRadio1">Si</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                    <label class="form-check-label" for="inlineRadio3">No se</label>
                 </div>  
                    
              </div>

              <!-- PREGUNTA 46 C -->
            <div class="mb-5 form-check form-check">
                <label class="mb-3">  C. ¿Ha tenido un contacto sexual a cambio de dinero o drogas?</label><br>            
                         
                  <div  class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                    <label class="form-check-label" for="inlineRadio1">Si</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                    <label class="form-check-label" for="inlineRadio3">No se</label>
                 </div>  
                    
              </div>

              <!-- PREGUNTA 46 D -->
            <div class="mb-5 form-check form-check">
                <label class="mb-3"> D ¿Ha tenido una infección de transmisión sexual? (SÍFILIS, clamidia, gonorrea, herpes genital)</label><br>            
                         
                  <div  class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pregunta" id="1-1" value="opcion1">
                    <label class="form-check-label" for="inlineRadio1">Si</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pregunta" id="1-2" value="opcion2">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pregunta" id="1-3" value="opcion3">
                    <label class="form-check-label" for="inlineRadio3">No se</label>
                 </div>  
                    
              </div>
              <br><br><br>

          



            <button type="button" class="btn btn-primary">Enviar</button>
            <br><br>
        </form>
      </div>
    </div>
  </body>
            
        </div>
    </div>
</div>
    
</body>
</html>