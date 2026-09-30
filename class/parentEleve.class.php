<?php
class ParentEleve
{
    private ?int $id;
    private string $civilite;
    private string $nomParent;
    private string $prenomParent;
    private string $adresseParent;
    private string $telParent;

    public function __construct(?int $id, string $civilite, string $nom,
                                string $prenom, string $adresse, string $tel)
    {
        $this->id       = $id;
        $this->civilite = $civilite;
        $this->nomParent      = $nom;
        $this->prenomParent   = $prenom;
        $this->adresseParent  = $adresse;
        $this->telParent      = $tel;
    }

    // Getters
    public function getId(): ?int         { return $this->id; }
    public function getCivilite(): string { return $this->civilite; }
    public function getNomParent(): string      { return $this->nomParent; }
    public function getPrenomParent(): string   { return $this->prenomParent; }
    public function getAdresseParent(): string  { return $this->adresseParent; }
    public function getTelParent(): string      { return $this->telParent; }

    public function getNomComplet(): string
    {
        return $this->civilite . ' ' . $this->prenomParent . ' ' . strtoupper($this->nomParent);
    }

    // Setters
    public function setId(int $id): void             { $this->id = $id; }
    public function setCivilite(string $c): void     { $this->civilite = $c; }
    public function setNomParent(string $nom): void        { $this->nomParent = $nom; }
    public function setPrenomParent(string $prenom): void  { $this->prenomParent = $prenom; }
    public function setAdresseParent(string $adr): void    { $this->adresseParent = $adr; }
    public function setTelParent(string $tel): void        { $this->telParent  = $tel; }
}