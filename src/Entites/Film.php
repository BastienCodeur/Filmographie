<?php


namespace App\Entites;


class Film
{

    private $id;
    private $titre;
    private $description;
    private $duree;
    private $dateSortie;
    private $genre;
    private $commentaires = [];

    /**
     * Film constructor.
     * @param $id
     * @param $titre
     * @param $description
     * @param $duree
     * @param $dateSortie
     * @param $genre
     * @param $commentaires
     */
    public function __construct($id, $titre, $description, $duree, $dateSortie, $commentaires,Genre $genre)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->description = $description;
        $this->duree = $duree;
        $this->dateSortie = $dateSortie;
        $this->genre = $genre;
        $this->commentaires = $commentaires;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function getDateSortie(): ?int
    {
        return $this->dateSortie;
    }







    public function ajouterCommentaire(Commentaire $commentaire) {

        

    }
}