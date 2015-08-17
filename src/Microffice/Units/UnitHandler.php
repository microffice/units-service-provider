<?php namespace Microffice\Units;

use Microffice\Contracts\Units\Unit;
use Microffice\Contracts\Core\IsViewableResource;

/**
* Unit Handler.
* 
* We use Laravel's Service Container to dynamicaly inject the right Unit implementation
*/
class UnitHandler implements IsViewableResource {

    /**
     * The unit implementation.
     */
    protected $unit;

    /**
     * Create a new instance.
     *
     * We use Laravel's Service Container to dynamicaly inject the right Unit implementation
     * @param  Unit  $unit
     * @return void
     */
    public function __construct(Unit $unit)
    {
        $this->unit = $unit;
    }
    
    /**
    * Return a listing of the resource.
    *
    * @return \Illuminate\Database\Eloquent\Collection
    */
    public function index(){
        return $this->unit->index();
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param array $data
    * @return \Illuminate\Database\Eloquent\Model
    */
    public function store($data){
        return $this->unit->store($data);
    }

    /**
    * Return the specified resource.
    *
    * @param int $id
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function show($id){
        return $this->unit->show($id);
    }

    /**
    * Update the specified resource in storage.
    *
    * @param int $id
    * @param array $data
    * @return \Illuminate\Database\Eloquent\Model
    */
    public function update($id, $data){
        return $this->unit->update($id, $data);
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param int $id
    * @return int (can be checked as boolean)
    */
    public function destroy($id){
        return $this->unit->destroy($id);
    }

    /**
    * Display a form to create a new Unit.
    *
    * @return Illuminate\View
    */
    public function create(){

    }
    
    /**
    * Display a form to edit an existing Unit.
    *
    * @param int $id
    * @return Illuminate\View
    */
    public function edit($id){

    }

}