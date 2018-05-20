<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class JobResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->title,
            'location' => $this->state,
            'body' => $this->description,
            'salary_up'=>$this->salary_from,
            'salary_down'=>$this->salary_down,
            'deadline'=>$this->close_at,
            'date' => $this->post_at->diffForHumans()
        ];
    }
}