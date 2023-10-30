class Product extends Model {
    protected $table = 'product';
    protected $primaryKey = 'product_Id';

    public function subkategori() {
        return $this->belongsTo('Subkategori', 'id_sub_kategori');
    }

    public function katalog() {
        return $this->belongsTo('Katalog', 'katalog_id');
    }

    public function grade() {
        return $this->belongsTo('Grade', 'grade');
    }

    public function akun() {
        return $this->belongsTo('Akun', 'akun_id');
    }

    public function hargaProduct() {
        return $this->hasMany('HargaProduct', 'product_id');
    }

    public function sertifikasi() {
        return $this->hasMany('ProductSertifikasi', 'product_id');
    }

    public function masaPanen() {
        return $this->hasMany('ProductMasaPanen', 'product_id');
    }
}

