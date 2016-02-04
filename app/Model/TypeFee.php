<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TypeFee extends Model
{
    /**
     * The table associated with the model.
     * @var string
     */
    protected $table = 'type_fee';
    public $timestamps = false;
    protected $id;
    protected $description;

    public function getId() {
        return $this->id;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }
}
