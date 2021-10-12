<?php

include_once 'db.php';

class Encuesta extends DB{

    private $totalVotos;
    // private $respuestas;
    // private $nombre;

    public function respuestas($nombre, $genero, $hobby, $tiempo){
        $this->nombre = $nombre;
        $this->genero = $genero;
        $this->hobby = $hobby;
        $this->tiempo = $tiempo;
    }

    public function votacion()
    {
        $sql = "INSERT into respuesta (nombre, genero, hobby, tiempo) values(:nombre, :genero, :hobby, :tiempo)";
        $query = $this->connect()->prepare($sql);
        $query->execute([
            'nombre' => $this->nombre,
            'genero' => $this->genero,
            'hobby' => $this->hobby,
            'tiempo' => $this->tiempo
        ]);
    }

    public function verResultados()
    {
        return $this->connect()->query('SELECT * FROM respuesta');
    }

    public function getTotalVotos()
    {
        $query =$this->connect()->query('SELECT count(*) AS votos_totales FROM respuesta');
        $this->totalVotos = $query->fetch(PDO::FETCH_OBJ)->votos_totales;
        return $this->totalVotos;
    }

    public function getVotosPorcentaje($votos)
    {
        return round(($votos / $this->totalVotos) * 100, 0);
    }
}

?>