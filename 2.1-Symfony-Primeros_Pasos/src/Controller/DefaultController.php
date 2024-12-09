<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

$age = 17;

class DefaultController extends AbstractController /* Se hereda de AbstractController para controladores usados en las plantillas Twig*/
{
    #[Route('/saludo')]
    public function saludo()
    {
        return new Response('Hola Mundo');
    }
    #[Route('/segundoSaludo')]
    public function segundoSaludo()
    {
        return new Response('Buenos dias, ¿que tal?');
    }

    /* Ruta variable, accesible unicamente mediante el metodo get() */
    /* #[Route('/user/login/{name}/{edad}', methods: ["GET"])]
    public function login($name, $edad)
    {
        return new Response("Se ha loggueado correctamente $name con edad $edad años");
    } */
    /* Ruta variable, accesible unicamente mediante el metodo post() */
    /* #[Route('/user/login/{name}/{edad}', methods: ["POST"])]
    public function login2($name, $edad)
    {
        return new Response("Se ha loggueado correctamente $name con edad $edad años");
    } */

    /* Añadimos el requerimiento de que edad sea un número positivo, y en el return el response, el segundo argumento es el codigo de error que devuelve y el tercero el array de headers (cabeceras) */
    #[Route('/user/login/{name}/{edad}', methods: ["GET"], requirements: ["edad" => "\d+"])]
    public function loginRequirements($name, $edad)
    {
        return new Response("<h1>Se ha loggueado correctamente $name con edad $edad años y la edad tiene que ir escrita con un número</h1>", 404 /* error que devuelve */, ['Content-Type' => 'text/html']);
    }

    /* Coge el array, lo convierte en json y lo devuelve en las respuesta*/
    #[Route('/listaUsuarios', methods: ["GET"])]
    public function loginArray()
    {
        $usuarios = [
            ["name" => "Juan", "edad" => 17],
            ["name" => "Pedro", "edad" => 18],
            ["name" => "Maria", "edad" => 19],
            ["name" => "Luis", "edad" => 20],
        ];
        
        return new JsonResponse($usuarios);
    }

    /* Controladores con Twig */
    #[Route('/twig/{name}/{apellido}/{edad}/{mensaje}', methods: ["GET"])]
    public function funcionConTwig($name, $apellido, $edad, $mensaje)
    /* 1er argumento, archivo.html.twig
       2º argumento, array de variables que queremos pasar a esa plantilla para ser usadas */
    {
        return $this->render(
            'base.html.twig',
            ["nombre" => $name,
            "apellido" => $apellido,
            "edad" => $edad,
            "mensaje" => $mensaje]
        );
    }
}

