<?php

class ItemController extends BaseController
{


    public function getindex()
    {
        return View::Make('item.showitem');
    }

     public function getItems() {

        $dataTableArray = array();

       
        $items = Item :: select('id', 'itemname', 'description', 'price')->get();
        //Construct Data Table
        foreach ($items as $item) {
$item_id = $item->id;
           $createSelect = '<button class="btn btn-default btn-rounded btn-sm edit" id="'.$item_id.'"><span class="fa fa-pencil"></span></button><button class="btn btn-danger btn-rounded btn-sm" type="button" id="'.$item_id.'"><span class="fa fa-times"></span></button>';
		 

            $dataTableArray['data'][] = array(
                'itemname' => $item->itemname,
                'description' => $item->description,
                'price' => number_format($item->price,2),               
                'item_id' => $createSelect
				
            );
        }
        return json_encode($dataTableArray);
    }

    public function postNewItem() {
        $rules = array(
            'itemname' => 'required',
            'description' => 'required',
            'price' => 'required');

        $v = Validator::make(Input::all(), $rules);

        if ($v->passes()) {
           // die('here');
            //insert into database
			if(Input::get('item_id') !=''){
				$ItemMain = Item :: find(Input::get('item_id'));
			}else
            $ItemMain = new Item();
			
            $ItemMain->itemname = Input::get('itemname');
            $ItemMain->description = Input::get('description');
            $ItemMain->price = Input::get('price');
            $ItemMain->save();

           
            return Redirect::to('/applications/item/main');
        } else {
            return Redirect::to('/applications/item/main')->withInput()->withErrors($v);
        }
    }
	public function destroy() {
   $id = $_POST['id'];
    $item = Item::find( $id );

   
        $item->delete();

       
   
}

public function getItemdetails(){
	
	 $id = Input::get('id');
	
    $item = Item::find( $id );
	
	echo $item->itemname."~".$item->description."~".number_format($item->price);
	
	
}


}
