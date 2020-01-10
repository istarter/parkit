<?php
class Location extends BaseModel
{
    
  private $user_id;
  private $slot_id;
  private $place_id;
  


 
  public function __construct($user_id,$slot_id,$place_id)
    {
        parent::__construct(); //1st implement the parent constructor


      $this->user_id   = $user_id;
      $this->slot_id = $slot_id;
      $this->place_id = $place_id;
    }

   public function save(){
      $data = [
               
               'user_id'    => $this->user_id,
               'place_id' => $this->place_id,
               'slot_id'  => $this->slot_id,
      ];
      $check=$this->insert($data);
    return $check;
   }   
}

