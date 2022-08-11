<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'members';
    protected $fillable = ['nama', 'umur', 'alamat'];
    protected $guarded = ['_token', 'id'];

    public function getCreatedAtAttribute(){
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, d F Y H:i');
    }

    public function getUpdatedAtAttribute(){
        return Carbon::parse($this->attributes['updated_at'])->translatedFormat('l, d F Y H:i');
    }
}
