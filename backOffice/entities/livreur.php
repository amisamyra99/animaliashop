<?PHP
class Livreur{
	private $nom;
	private $prenom;
	private $adresse;
	private $region;
    private $cite;
    private $codePostale;
    private $numero;
    private $email;
	function __construct($nom,$prenom,$adresse,$region,$cite,$codePostale,$numero,$email){
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->adresse=$adresse;
		$this->region=$region;
        $this->cite=$cite;
        $this->codePostale=$codePostale;
        $this->numero=$numero;
		$this->email=$email;
    }
	
	public function getNom()
	{
		return $this->nom;
	}
	public function setNom($nom)
	{
		$this->nom = $nom;

		return $this;
    }
    
	public function getPrenom()
	{
		return $this->prenom;
	}

	public function setPrenom($prenom)
	{
		$this->prenom = $prenom;

		return $this;
	}
	public function getAdresse()
	{
		return $this->adresse;
	}
	public function setAdresse($adresse)
	{
		$this->adresse = $adresse;

		return $this;
	}
	public function getRegion()
	{
		return $this->region;
	}

	public function setRegion($region)
	{
		$this->region = $region;

		return $this;
	}
    public function getCite()
    {
        return $this->cite;
    }
    public function setCite($cite)
    {
        $this->cite = $cite;

        return $this;
    }
    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getCodePostale()
    {
        return $this->codePostale;
    }

    /**
     * Set the value of codePostale
     *
     * @return  self
     */ 
    public function setCodePostale($codePostale)
    {
        $this->codePostale = $codePostale;

        return $this;
    }
}

?>