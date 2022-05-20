<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id_mahasiswa';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'nim',
        'nama',
        'kelas',
        'jurusan',
        'email',
        'alamat',
        'tanggal_lahir'
    ];

    /**
     * One to many with Kelas Models
     *
     * @return relationship
     */

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public static function getByNim($nim)
    {
        return self::where('nim', $nim)->firstOrFail();
    }

    /**
     * Scope a query to search with where
     *
     * @param mixed $query
     * @param mixed $column
     * @param mixed $value
     * 
     * @return object
     */

    public function scopeWhereLike($query, $column, $value)
    {
        return $query->where($column, 'like', '%' . $value . '%');
    }

    /**
     * Scope a query to search with orWhere
     *
     * @param mixed $query
     * @param mixed $column
     * @param mixed $value
     * 
     * @return object
     */

    public function scopeOrWhereLike($query, $column, $value)
    {
        return $query->orWhere($column, 'like', '%' . $value . '%');
    }
}
