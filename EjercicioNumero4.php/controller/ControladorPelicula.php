<?php

//Importacion de las clases del modelo que el controller usará
require_once __DIR__ . '/../model/Pelicula.php';

//Importacion a la view que el controller utilizará
require_once __DIR__ . '/../view/VistaPelicula.php';

class ControladorPelicula {
    private $vista;

    /** @param VistaPelicula $vista */
    public function __construct(VistaPelicula $vista) {
        $this->vista = $vista;
    }

    public function demostrar() {
        $this->vista->mostrarTitulo('Pelicula');

        $peliculas = array(
            new Pelicula('Titanic', 'Romance', 2 , 'F', [3]),
            new Pelicula('Matrix', 'Ficcion', 1, 'A', [4]),
            new Pelicula('La Monja', 'Terror', 2, 'B', [5]),
            new Pelicula('Jumanji', 'Aventura', 2, 'A', [5])
        );

        $this->vista->mostrarSeparador();
        foreach ($peliculas as $pelicula) {
            $this->vista->mostrarPelicula($pelicula);
        }
        $this->vista->mostrarSeparador();

        echo "Total de películas registradas: " . Pelicula::totalPeliculas(); //imprime cuantas peliculas se crearon en total
    }
}