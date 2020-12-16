<?php


namespace App\Entites;


class Filmographie
{

    private $id;
    private $libelle;
    private $films=[];

    /**
     * Filmographie constructor.
     * @param $id
     * @param $libelle
     * @param $films
     */
    public function __construct($id, $libelle, $films)
    {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->films = $films;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }





    public function ajouterFilm(Film $film) {

    }





}