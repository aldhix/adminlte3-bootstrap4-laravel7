
# AdminLTE 3 Bootstrap 4.5 Laravel 7
Paket component AdminLTE yang di conversi kedalam bentuk blade Laravel

## Components
- Sidebar
- Form
- Table

## Sidebar
Pada sidebar dibagi menjadi 3 bagian include yaitu brand, user, dan menu. Pada Menu terdapat dua buah komponen yang digunakan yaitu sidebar menu dan sidebar submenu.

### Sidebar Menu
Sidebar menu adalah component item menu sidebar dengan menggunakan tag `<x-admin.template.sidebar.menu />`, adapun slot digunakan untuk meletakan sub menu.

| Attribut | Type | Keterangan |
| ----------- | ----------- | ----------- |
| label | string | Nama menu atau Label item menu |
| href | string | Url item menu |
| icon | string | Icon Item menu fonts Awesome |
| has-treeview | true|false | Mengaktifkan submenu |
| is | string | Uri menu parent dari submenu |
| badge | string | label pada Badge |
| badge-type | bootstrap color | Warna badge berdasarkan warna yang terdapat pada bootstrap contoh:primary,warning etc. |

### Sidebar Submenu
Sidebar menu adalah component item menu sidebar dengan menggunakan tag `<x-admin.template.sidebar.submenu />`, ditempatkan diantara tag item sidebar menu, contoh :

`<x-admin.template.sidebar.menu>`

    <x-admin.template.sidebar.submenu />

 `</x-admin.template.sidebar.menu>`
 
 | Attribut | Type | Keterangan |
| ----------- | ----------- | ----------- |
| label | string | Nama menu atau Label item sub menu |
| href | string | Url item sub menu |
| icon | string | Icon Item sub menu fonts Awesome |
 
## Form (form-card)
Membuat form menggunakan tag `<x-admin.form-card>` untuk attibutnya menggunakan atribut form html dan penambahan attribut `type` adalah untuk memberi warna card header sesuai warna yang terdapat pada bootstrap contoh : primary, warning etc. Selain attribut form pada tag ini ada **slot** diletakan pada card body fungsi slot ini untuk menyisipkan component-component input,textarea,button,select etc. 

Selain slot utama ada tambahan lainya diantaranya slot header dengan tag `<x-slot name="header">` digunakan untuk memberi label card header, slot lainya slot footer diletakan dibagian card footer dengan menggunakan tag `<x-slot name="footer">`.

Untuk melengkapi form diperlukan tag lain seperti input, button, textarea etc. dibawah ini ada beberapa component tambahan untuk input yang sudah dilengkapi dengan form-group dan error laravel.

### Input
Tag input menggunakan `<x-admin.input />`

| Attribut | Type | Keterangan |
| ----------- | ----------- | ----------- |
| label | string | Nama Label Input |
| type | string | Type input contoh : text, email, password etc. |
| name | string | name atribut input pada umumnya |
| value | string | value sebuah atribut nilai input pada umumnya |

Selain atribut diatas bisa menggunakan atribut input html lainnya.

### Textarea 
Tag textarea menggunakan `<x-admin.textarea />`

| Attribut | Type | Keterangan |
| ----------- | ----------- | ----------- |
| label | string | Nama label textarea |
| name | string | name atribut textarea pada umumnya |
| value | string | value sebuah atribut nilai textarea |

Selain atribut diatas bisa menggunakan atribut textarea html lainnya.

### Select
Tag select menggunakan `<x-admin.select />`, pada tag ini terdapat slot yang digunakan pada label option pertama (default).

| Attribut | Type | Keterangan |
| ----------- | ----------- | ----------- |
| label | string | Nama label select |
| name | string | name atribut select pada umumnya |
| value | string | value sebuah atribut nilai select default |
| option | array | Option pada tag select dengan ketentuan field array **value** dan **label**, contoh : `[ ['value'=>'0','label'=>'Female'], ['value'=>'1','label'=>'Male'] ]`   |

Selain atribut diatas bisa menggunakan atribut select html lainnya.

### Button 
Tag button menggunakan `<x-admin.button>`, pada tag ini terdapat slot yang disisipkan diantara tag button atau achor (a).

| Attribut | Type | Keterangan |
| ----------- | ----------- | ----------- |
| type | submit,button,link | Type-type button, untuk type link tag yang digunakan menggunakan tag achor (a)  |
| btn | string | Warna button menggunakan warna pada bootstrap, contoh : primary,warning,success etc.  |

Selain atribut diatas bisa menggunakan atribut button dan a html lainnya.

## Table (table-card)
Table tag untuk membuat tabel penulisannya `<x-admin.table-card>`, selain tag utama adanya slot utama digunakan untuk menyisipkan tag `<tr>` dan `<td>` sebagai data utama. Selain slot utama ada slot tambahan yaitu thead `<x-slot name="thead">` berfungsi untuk kolom judul, slot tambahan lainnya untuk footer dengan tag `<x-slot name="footer">`.

Component lainnya yang dibutuhkan pada table-card ini adalah component **action** yang berfungsi memberikan tiga tombol utama yaitu edit,view dan delete. Serta modal delete sudah ada pada bagian component ini.

| Attribut | Type | Keterangan |
| ----------- | ----------- | ----------- |
| label | string | Nama label card table |
| search | false|true | Mengaktifkan input search nilai atribut `name` adalah `keyword` |

### Action
Tag action untuk membuat tombol aksi yang diantaranya Edit, View dan Delete penulisannya `<x-admin.action>` yang disimpan diantara tag `<td>`.

| Attribut | Type | Keterangan |
| ----------- | ----------- | ----------- |
| size | sm|md|lg | Ukuran tabel berdasarkan ketentuan ukuran boostrap |
| edit | string | Url link ke halaman edit |
| view | string | Url link ke halaman view |
| delete | string | Url link ke halaman delete, yang akan menampilkan modal sebelum terjadi selanjutnya |
