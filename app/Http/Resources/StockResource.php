<?php

namespace App\Http\Resources;
use App\Models\Attribute;
use App\Models\Value;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockResource extends JsonResource
{
    
    public function toArray($request)
    {
        $result = [
            'quantity' => $this->quantity,
            // 'color' => 'red',
            // 'material' => 'MDF',

        ];
        
        return $this->getAttributes($result);
        
    }
    public function getAttributes($result){
        $attributes = json_decode($this->attributes);
        foreach($attributes as $stockAttribute){
            $attribute = Attribute::find($stockAttribute->attribute_id);
            $value = Value::find($stockAttribute->attribute_id +1);
            $result[$attribute->name] = $value->getTranslations('name');
            
        }
        
        
        return $result;
    }
}
