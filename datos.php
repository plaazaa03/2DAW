<?php
class Articulo {
    // Atributos que tiene el articulo
    private $nombreArt;
    private $contenido;
    private $tags;
    private $likes;

    // metodo constructor

    public function __construct($nombreArt, $contenido, $tags, $likes) {
        $this->nombreArt = $nombreArt;
        $this->contenido = $contenido;
        $this->tags = $tags;
        $this->likes = $likes;
    }


    // getter
    public function getNombreArt() {
        return $this->nombreArt;
    }
    
    public function getContenido() {
        return $this->contenido;
    }

    public function getTags() {
        return $this->tags;
    }

    public function getLikes() {
        return $this->likes;
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

// class Tags {
//     private $nombreTags;
    

//     public function __construct($nombreTags) {
//         $this->nombreTags = $nombreTags;
//     }

//     public function getNombreTags() {
//         return $this->nombreTags;
//     }

// }

function obtenerArticulos() {
    $articulos = [
        new Articulo(
            "Avión de Air Canadá", 
            "El País Uruguay", 
            ["aterrizaje forzoso", "Air Canadá", "problemas técnicos"], 
            120
        ),
        new Articulo(
            "Problemas en vuelo de Lufthansa", 
            "La Nación Argentina", 
            ["Lufthansa", "sistema hidráulico", "emergencia"], 
            90
        ),
        new Articulo(
            "Incidente con avión de British Airways", 
            "El Mundo España", 
            ["British Airways", "problemas técnicos", "Heathrow"], 
            150
        ),
        new Articulo(
            "Aterrizaje de emergencia en Chile", 
            "El Mercurio Chile", 
            ["Latam", "tren de aterrizaje", "emergencia"], 
            80
        ),
        new Articulo(
            "Retraso en vuelo de Delta Airlines", 
            "Clarín Argentina", 
            ["Delta Airlines", "retraso", "problemas mecánicos"], 
            70
        ),
        new Articulo(
            "Vuelo de American Airlines interrumpido", 
            "La Tercera Chile", 
            ["American Airlines", "presurización", "desvío"], 
            60
        ),
        new Articulo(
            "Aterrizaje forzoso en Brasil", 
            "O Globo Brasil", 
            ["Gol Linhas Aéreas", "fallos eléctricos", "São Paulo"], 
            110
        ),
        new Articulo(
            "Incidente en vuelo de Iberia", 
            "ABC España", 
            ["Iberia", "sistema de navegación", "Madrid"], 
            140
        ),
        new Articulo(
            "Vuelo de Emirates cancelado", 
            "The Times UK", 
            ["Emirates", "sistema de combustible", "Dubái"], 
            100
        ),
        new Articulo(
            "Aterrizaje de emergencia en Perú", 
            "El Comercio Perú", 
            ["Avianca", "falla en motor", "Lima"], 
            85
        ),
        new Articulo(
            "Problemas en vuelo de KLM", 
            "De Telegraaf Países Bajos", 
            ["KLM", "fuga de combustible", "Ámsterdam"], 
            130
        )
    ];
    return $articulos;
}

// function insertarArticulos(array $articulos) {
    

// }



?>