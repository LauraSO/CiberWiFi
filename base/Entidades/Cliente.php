<?php
/**
 * @ORM\Entity
 * @ORM\Table(name="cliente")
 */
 
class Cliente

{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
	 protected $id;
	
    /** 
     * @ORM\Column(type="string") 
     */
    protected $apellidoYnombre;

	/** 
     * @ORM\Column(type="double") 
     */
	 protected $dni;
	 
	  /** 
     * @ORM\Column(type="string") 
     */
	 protected $direccion;
	 
	 /** 
     * @ORM\Column(type="integer") 
     */
	 protected $tel;
	 
	  /** 
     * @ORM\Column(type="string") 
     */
	 protected $entrecalles;
	 
	 
	 
	 
	 
	
    public function getId()
    {
        return $this->id;
    }

    public function getApellidoYnombre()
    {
        return $this->apellidoYnombre;
    }

    public function setApellidoYnombre($apellidoYnombre)
    {
        $this->name = $apellidoYnombre;
    }
	
	
    public function getDni()
    {
        return $this->dni;
    }

    public function setDni($dni)
    {
        $this->dni = $dni;
	}
	
	
    public function getDireccion()
    {
		return $this->direccion;
    }

public function setDireccion($direccion){
		$this->direccion = $direccion;
	}
	

	public function getTel(){
		return $this->tel;
	}

	public function setTel($tel){
		$this->tel = $tel;
	}

	public function getEntrecalles(){
		return $this->entrecalles;
	}

	public function setEntrecalles($entrecalles){
		$this->entrecalles = $entrecalles;
	}
}
