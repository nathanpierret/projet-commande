<?php

class Commande {

    private int $noCommande;
    private DateTime $dateCommande;
    private Client $client;
    private array $listeProduitsComms;

    public function __construct(int $noCommande, DateTime $dateCommande, Client $client)
    {
        $this->dateCommande = $dateCommande;
        $this->noCommande = $noCommande;
        $this->client = $client;
        $this->listeProduitsComms = [];
    }

    public function getNoCommande(): int
    {
        return $this->noCommande;
    }

    public function setNoCommande(int $noCommande): void
    {
        $this->noCommande = $noCommande;
    }

    public function getDateCommande(): DateTime
    {
        return $this->dateCommande;
    }

    public function setDateCommande(DateTime $dateCommande): void
    {
        $this->dateCommande = $dateCommande;
    }

    public function getClient(): Client
    {
        return $this->client;
    }

    public function setNoClient(Client $client): void
    {
        $this->client = $client;
    }

    public function getTotalHT(): int
    {
        return $this->totalHT;
    }

    public function setTotalHT(int $totalHT): void
    {
        $this->totalHT = $totalHT;
    }

    public function getTotalTVA(): int
    {
        return $this->totalTVA;
    }

    public function setTotalTVA(int $totalTVA): void
    {
        $this->totalTVA = $totalTVA;
    }

    public function getTotalTTC(): int
    {
        return $this->totalTTC;
    }

    public function setTotalTTC(int $totalTTC): void
    {
        $this->totalTTC = $totalTTC;
    }

    public function ajouterProduit(Produit $produit, int $quantite): void {
        $produitComm = new ProduitComm($quantite, $produit);
        $this->listeProduitsComms[] = $produitComm;
    }

    private function totalHT(): float {
        $totalHT = 0;
        foreach ($this->listeProduitsComms as $produitComm) {
            $totalHT += 1;
        }
    }
}