<?php


namespace App\Entites;


class Commentaire
{

    private $id;
    private $auteur;
    private $note;
    private $contenue;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAuteur(): ?string
    {
        return $this->auteur;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function getContenue(): ?string
    {
        return $this->contenue;
    }
    /**
     * Commentaire constructor.
     * @param $id
     * @param $auteur
     * @param $note
     * @param $contenu
     */
    public function __construct($id, $auteur, $note, $contenu)
    {
        $this->id = $id;
        $this->auteur = $auteur;
        $this->note = $note;
        $this->contenu = $contenu;
    }



}