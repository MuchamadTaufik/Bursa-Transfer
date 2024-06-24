<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Pemain extends Model
{
    use HasFactory;

    use Sluggable;

    protected $guarded = ['id'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function performansi()
    {
        return $this->hasOne(Performansi::class, 'pemain_id');
    }
}
