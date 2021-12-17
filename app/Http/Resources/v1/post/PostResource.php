<?php

namespace App\Http\Resources\v1\post;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $user = User::find($this->user_id);
        $category = Category::find($this->category_id);

        return [
            'post_id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'category' => [
                'category_id' => $category->id,
                'name_category' => $category->name,
            ],
            'author' => [
                'user_id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
            ],
            'created_at' => $this->created_at->format('Y-m-d'),
            'updated_at' => $this->updated_at->format('Y-m-d'),
        ];
    }


    public function with($request)
    {
        return [
            'meta' => [
                'res' => true,
            ],
        ];
    }
}
