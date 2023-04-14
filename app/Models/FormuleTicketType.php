<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormuleTicketType extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'id_formule', 'id_ticket_type', 'quantite'
    ];
}
