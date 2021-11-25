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
        <form action="validar_formulario.php" method="POST">

          <!--   PREGUNTA 1-->   
          <div class="mb-5 form-check form-check">
            <label class="mb-3">1. ¿Tienes entre 18 y 60 años?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="respuesta1" id="1-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="respuesta1" id="1-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
          </div>

          <!--   PREGUNTA 2-->   
          <div class="mb-5 form-check form-check">
              <label class="mb-3">2. ¿Pesas más de 50 kilos y tienes un IMC >= 20?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="respuesta2" id="2-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="respuesta2" id="2-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="respuesta2" id="2-3" value="opcion3">
                  <label class="form-check-label" for="inlineRadio3">No se</label>
               </div>
            </div>

            <!--   PREGUNTA 3-->   
          <div class="mb-5 form-check form-check">
              <label class="mb-3">3. ¿Has dormido las horas habituales?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="respuesta3" id="3-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="respuesta3" id="3-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="respuesta3" id="3-3" value="opcion3">
                  <label class="form-check-label" for="inlineRadio3">No se</label>
               </div>
            </div>

            <!--   PREGUNTA 4-->   
          <div class="mb-5 form-check form-check">
              <label class="mb-3">4. ¿Has comido en las últimas 5 horas? (desayuno y/o almuerzo)</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="respuesta4" id="4-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="respuesta4" id="4-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
          </div>

             <!--   PREGUNTA 5-->   
          <div class="mb-5 form-check form-check">
              <label class="mb-3">5. ¿Has consumido alcohol en las últimas 12 horas previas a donar?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="respuesta5" id="5-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="respuesta5" id="5-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
          </div>

           
            <!-- PREGUNTA 6-->
            <div class="mb-5 form-check form-check">
              <label class="mb-3">6. ¿Has consumido marihuana en las últimas 24 horas previas a donar?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="respuesta6" id="6-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="respuesta6" id="6-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="respuesta6" id="6-3" value="opcion3">
                  <label class="form-check-label" for="inlineRadio3">Prefiero no responder</label>
               </div>      
            </div>

            <!-- PREGUNTA 7-->
            <div class="mb-5 form-check form-check">
              <label class="mb-3">7. ¿Tienes hipertensión controlada?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="respuesta7" id="7-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="respuesta7" id="7-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
            </div>

            <!-- PREGUNTA 8-->
            <div class="mb-5 form-check form-check">
              <label class="mb-3">8. ¿Tiene heridas en la boca o lesiones en la zona de punción?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="respuesta8" id="8-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="respuesta8" id="8-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
            </div>

            <!-- PREGUNTA 9-->
            <div class="mb-5 form-check form-check">
              <label class="mb-3">9. ¿Has tenido diarrea, vómitos, fiebre o consumido antibióticos en las últimas 2 semanas?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="respuesta9" id="9-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="respuesta9" id="9-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
            </div>

            <!-- PREGUNTA 10-->
            <div class="mb-5 form-check form-check">
              <label class="mb-3">10. ¿Te has vacunado contra la fiebre amarilla, rubeóla o sarampión en los últimos 2 meses?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="respuesta10" id="10-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="respuesta10" id="10-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div> 
            </div>

            <!-- PREGUNTA 11-->
            <div class="mb-5 form-check form-check">
              <label class="mb-3">11. ¿Has tenido Cáncer?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="respuesta11" id="11-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="respuesta11" id="11-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>  
            </div>

            <!-- PREGUNTA 12-->
            <div class="mb-5 form-check form-check">
              <label class="mb-3">12. ¿Tienes una enfermedad cardiaca o renal?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="respuesta12" id="12-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="respuesta12" id="12-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="respuesta12" id="12-3" value="opcion3">
                  <label class="form-check-label" for="inlineRadio3">No se</label>
               </div>      
            </div>

            <!-- PREGUNTA 13-->
            <div class="mb-5 form-check form-check">
              <label class="mb-3">13. ¿Te inyectas insulina?</label><br>            
                       
                <div  class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="respuesta13" id="13-1" value="opcion1">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="respuesta13" id="13-2" value="opcion2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>  
            </div>

             <!--   PREGUNTA 14-->   
          <div class="mb-5 form-check form-check">
            <label class="mb-3">14. ¿En los últimos 4 meses te recetaron Isotretinoína?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="respuesta14" id="14-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="respuesta14" id="14-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
          </div>


           <!--   PREGUNTA 15-->   
           <div class="mb-5 form-check form-check">
            <label class="mb-3">15. ¿En los últimos 2 meses te recetaron Finasteride?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="respuesta15" id="15-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="respuesta15" id="15-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
          </div>

          <!-- PREGUNTA 16-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">16. ¿Has tenido una nueva pareja sexual? (Considerando menos de 6 meses)</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="respuesta16" id="16-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="respuesta16" id="16-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="respuesta16" id="16-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">Prefiero no responder</label>
             </div>      
          </div>

          <!-- PREGUNTA 17-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">17. ¿Estás embarazada o crees estarlo?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="respuesta17" id="17-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="respuesta17" id="17-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div> 
          </div>
          <!-- PREGUNTA 18-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">18. ¿Te has realizado piercing, tatuajes o acupuntura en el último año?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="respuesta18" id="18-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="respuesta18" id="18-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
          </div>

          <!-- PREGUNTA 19-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">19. ¿Has consumido cocaína y sus derivados o drogas inyectables en el último año?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="respuesta19" id="19-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="respuesta19" id="19-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="respuesta19" id="19-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">Prefiero no responder</label>
             </div>
          </div>

          <!-- PREGUNTA 20-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">20. ¿Te has realizado endoscopía o colonoscopía en el último año?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="respuesta20" id="20-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="respuesta20" id="20-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>     
          </div>

          <!-- PREGUNTA 21-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">21. ¿Has tenído una cirugía con más de 5 días de hospitalización en el último año?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="respuesta21" id="21-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="respuesta21" id="21-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>    
          </div>

          <!-- PREGUNTA 22-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">22. ¿Has consumido Etretinato en el último año?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="respuesta22" id="22-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="respuesta22" id="22-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
          </div>

          <!-- PREGUNTA 23-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">23. ¿Has tenído más de una pareja sexual en el último año?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="respuesta23" id="23-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="respuesta23" id="23-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="respuesta23" id="23-3" value="opcion3">
                <label class="form-check-label" for="inlineRadio3">Prefiero no responder</label>
             </div>      
          </div>

          <!-- PREGUNTA 24-->
          <div class="mb-5 form-check form-check">
            <label class="mb-3">24. ¿Has tenído o crees tener alguna enfermedad de transmisión sexual?</label><br>            
                     
              <div  class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="respuesta24" id="24-1" value="opcion1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="respuesta24" id="24-2" value="opcion2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
          </div>
          <hr>
          <br><br>

          <button type="submit" class="btn btn-primary">Enviar</button>
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