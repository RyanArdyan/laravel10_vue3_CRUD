<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    // definisikan property
    // visibilitas public, variable $status
    public $status;
    public $message;
    public $resource;

    // method __construct otomatis akan dijalankan
    public function __construct($status, $message, $resource)
    {
        // memanggil konstruktor dari kelas induk (parent class) yaitu JsonResource menggunakan parent::. Dalam hal ini, konstruktor dari kelas induk dipanggil dengan meneruskan nilai $resource sebagai argument.
        parent::__construct($resource);
        // panggil property $status yg berada diluar lalu diisi dengan parameter $status
        $this->status  = $status;
        // panggil property $message yang berada diluar lalu diisi dengan parameter $message
        $this->message = $message;
    }

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // kode baru
        return [
            'success'   => $this->status,
            'message'   => $this->message,
            'data'      => $this->resource
        ];
    }
}
