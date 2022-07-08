<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
	/**
	 * Transform the resource collection into an array.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
	 */
	public function toArray($request)
	{
		return [
			'book_id' => $this->book_id,
			'book_title' => $this->book_title,
			'author_name' => $this->author_name,
			'book_cover_photo' => $this->book_cover_photo,
			'discount_price' => $this->discount_price,
			'book_price' => $this->book_price,
			'final_price' => $this->final_price,
		];
	}
}
