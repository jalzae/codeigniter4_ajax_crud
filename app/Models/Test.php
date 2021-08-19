<?php

namespace App\Models;

use CodeIgniter\Model;

class Test extends Model
{

	protected $table                = 'buku';
	public function table()
	{
		return $this->db->table($this->table);
	}
}
