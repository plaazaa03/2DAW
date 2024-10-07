<?php
class Articulo {
    // Atributos que tiene el articulo
    private $nombreArt;
    private $autor;
    private $fecha;
    private $texto;

    // metodo constructor

    public function __construct($nombreArt, $autor, $fecha, $texto) {
        $this->nombreArt = $nombreArt;
        $this->autor = $autor;
        $this->fecha = $fecha;
        $this->texto = $texto;
    }


    // getter
    public function getNombreArt() {
        return $this->nombreArt;
    }
    
    public function getAutor() {
        return $this->autor;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getTexto() {
        return $this->texto;
    }

    // setters

    public function setNombreAuthor($nombreAuthor) {
        $this->nombreAuthor = $nombreAuthor;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

}

class Tags {
    private $nombreTags;

    public function __construct($nombreTags) {
        $this->nombreTags = $nombreTags;
    }

    public function getNombreTags() {
        return $this->nombreTags;
    }

}

function obtenerArticulos() {
    $articulos = [
        new Articulo("Avion de Air Canadá", "El País Uruguay", "3 de febrero de 2020", "Avión de Air Canadá con problemas en motor y rueda hizo su aterrizaje forzoso en Barajas"),
        new Articulo("Problemas en vuelo de Lufthansa", "La Nación Argentina", "12 de marzo de 2021", "Un avión de Lufthansa realizó un aterrizaje de emergencia en Frankfurt tras fallos en el sistema hidráulico"),
        new Articulo("Incidente con avión de British Airways", "El Mundo España", "25 de agosto de 2019", "Un avión de British Airways tuvo que regresar al aeropuerto de Heathrow por problemas técnicos durante el vuelo"),
        new Articulo("Aterrizaje de emergencia en Chile", "El Mercurio Chile", "7 de abril de 2022", "Un avión de Latam aterrizó de emergencia en Santiago debido a un problema en el tren de aterrizaje"),
        new Articulo("Retraso en vuelo de Delta Airlines", "Clarín Argentina", "14 de septiembre de 2020", "Un avión de Delta Airlines sufrió un retraso debido a problemas mecánicos en uno de sus motores"),
        new Articulo("Vuelo de American Airlines interrumpido", "La Tercera Chile", "22 de noviembre de 2018", "Un vuelo de American Airlines fue desviado a Miami por un problema en el sistema de presurización de la cabina"),
        new Articulo("Aterrizaje forzoso en Brasil", "O Globo Brasil", "10 de febrero de 2023", "Un avión de Gol Linhas Aéreas tuvo que realizar un aterrizaje forzoso en São Paulo por fallos eléctricos"),
        new Articulo("Incidente en vuelo de Iberia", "ABC España", "5 de junio de 2021", "Un avión de Iberia tuvo que regresar a Madrid tras detectar un problema con el sistema de navegación"),
        new Articulo("Vuelo de Emirates cancelado", "The Times UK", "18 de enero de 2020", "Un vuelo de Emirates fue cancelado en Dubái por fallos en el sistema de combustible del avión"),
        new Articulo("Aterrizaje de emergencia en Perú", "El Comercio Perú", "30 de octubre de 2022", "Un avión de Avianca aterrizó de emergencia en Lima tras un fallo en uno de sus motores"),
        new Articulo("Problemas en vuelo de KLM", "De Telegraaf Países Bajos", "11 de julio de 2021", "Un avión de KLM tuvo que aterrizar de emergencia en Ámsterdam debido a una fuga de combustible detectada en pleno vuelo")
        
    ];
    return $articulos;
}

function insertarArticulos(array $articulos) {
    

}



?>