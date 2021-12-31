<?php 

class House {

    private int $idLogement;
    private int $titre;
    private int $adresse;
    private int $ville;
    private int $cp;
    private int $surface;
    private int $prix;
    private int $photo;
    private int $type;
    private int $description;

    public function __construct($idLogement, $titre, $adresse, $ville, $cp, $surface, $prix, $photo, $type, $description){
        $this->idLogement = $idLogement;
        $this->titre = $titre;
        $this->adresse = $adresse;
        $this->ville = $ville; 
        $this->cp = $cp;
        $this->surface = $surface;
        $this->prix = $prix;
        $this->photo = $photo;
        $this->type = $type;
        $this->description = $description;
    }

        /**
         * Get the value of idLogement
         */ 
        public function getIdLogement()
        {
                return $this->idLogement;
        }

        /**
         * Set the value of idLogement
         *
         * @return  self
         */ 
        public function setIdLogement($idLogement)
        {
                $this->idLogement = $idLogement;

                return $this;
        }

        /**
         * Get the value of titre
         */ 
        public function getTitre()
        {
                return $this->titre;
        }

        /**
         * Set the value of titre
         *
         * @return  self
         */ 
        public function setTitre($titre)
        {
                $this->titre = $titre;

                return $this;
        }

        /**
         * Get the value of adresse
         */ 
        public function getAdresse()
        {
                return $this->adresse;
        }

        /**
         * Set the value of adresse
         *
         * @return  self
         */ 
        public function setAdresse($adresse)
        {
                $this->adresse = $adresse;

                return $this;
        }

        /**
         * Get the value of ville
         */ 
        public function getVille()
        {
                return $this->ville;
        }

        /**
         * Set the value of ville
         *
         * @return  self
         */ 
        public function setVille($ville)
        {
                $this->ville = $ville;

                return $this;
        }

        /**
         * Get the value of cp
         */ 
        public function getCp()
        {
                return $this->cp;
        }

        /**
         * Set the value of cp
         *
         * @return  self
         */ 
        public function setCp($cp)
        {
                $this->cp = $cp;

                return $this;
        }

        /**
         * Get the value of surface
         */ 
        public function getSurface()
        {
                return $this->surface;
        }

        /**
         * Set the value of surface
         *
         * @return  self
         */ 
        public function setSurface($surface)
        {
                $this->surface = $surface;

                return $this;
        }

        /**
         * Get the value of prix
         */ 
        public function getPrix()
        {
                return $this->prix;
        }

        /**
         * Set the value of prix
         *
         * @return  self
         */ 
        public function setPrix($prix)
        {
                $this->prix = $prix;

                return $this;
        }

        /**
         * Get the value of photo
         */ 
        public function getPhoto()
        {
                return $this->photo;
        }

        /**
         * Set the value of photo
         *
         * @return  self
         */ 
        public function setPhoto($photo)
        {
                $this->photo = $photo;

                return $this;
        }

        /**
         * Get the value of type
         */ 
        public function getType()
        {
                return $this->type;
        }

        /**
         * Set the value of type
         *
         * @return  self
         */ 
        public function setType($type)
        {
                $this->type = $type;

                return $this;
        }

        /**
         * Get the value of description
         */ 
        public function getDescription()
        {
                return $this->description;
        }

        /**
         * Set the value of description
         *
         * @return  self
         */ 
        public function setDescription($description)
        {
                $this->description = $description;

                return $this;
        }
}