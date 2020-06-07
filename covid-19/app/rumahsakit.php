<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rumahsakit extends Model
{
	public $table = 't_rumahsakit';

	protected $fillable = ['nama','provinsi','alamat','telp','fax'];
}