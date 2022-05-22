<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Todolist
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $text
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Todolist newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Todolist newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Todolist query()
 * @method static \Illuminate\Database\Eloquent\Builder|Todolist whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Todolist whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Todolist whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Todolist whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Todolist whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Todolist whereUserId($value)
 * @mixin \Eloquent
 */
class Todolist extends Model
{
    use HasFactory;

    protected $fillable = ['text', 'status'];
}
