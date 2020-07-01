
# AdminLTE 3 Bootstrap 4.5 Laravel 7
Paket component AdminLTE yang di conversi kedalam bentuk blade Laravel

## Components
- Sidebar
- Form
- Table

## Sidebar
Pada sidebar dibagi menjadi 3 bagian include yaitu brand, user, dan menu. Pada Menu terdapat dua buah komponen yang digunakan yaitu sidebar menu dan sidebar submenu.

### Sidebar Menu
Sidebar menu adalah component item menu sidebar dengan menggunakan tag `<x-admin.template.sidebar.menu>`

| Atribut | Type | Keterangan |
| ----------- | ----------- | ----------- |
| label | string | Nama menu atau Label item menu |
| href | string | Url item menu |
| has-treeview | true|false | Mengaktifkan submenu |
| is | string | uri menu parent dari submenu |
| badge | string | label pada Badge |
| badge-type | bootstrap color | Warna badge berdasarkan warna yang terdapat pada bootstrap contoh:primary,warning etc. |

### Sidebar Submenu
Sidebar menu adalah component item menu sidebar dengan menggunakan tag `<x-admin.template.sidebar.submenu>`, ditempatkan diantara tag item sidebar menu, contoh :

`<x-admin.template.sidebar.menu>`

    <x-admin.template.sidebar.submenu>

 `</x-admin.template.sidebar.menu>`
 
 

