<?php


namespace Stsewa\Contact;

use Illuminate\Database\Eloquent\Model;
class Contact extends Model
{
    protected $guarded = [];
    protected $table = 'sc_contacts';
    protected $fillable = ['name','email','subject','message'];
}
