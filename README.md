
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
Sidebar menu adalah component item menu sidebar dengan menggunakan tag `<x-admin.template.sidebar.submenu>`, ditempatkan diantara tag item sidebar menu, contoh :

`<x-admin.template.sidebar.menu>`

    <x-admin.template.sidebar.submenu>

 `</x-admin.template.sidebar.menu>`
 
 | Attribut | Type | Keterangan |
| ----------- | ----------- | ----------- |
| label | string | Nama menu atau Label item sub menu |
| href | string | Url item sub menu |
| icon | string | Icon Item sub menu fonts Awesome |
 
## Form (form-card)
Untuk membuat form menggunakan tag `<x-admin.form-card>` untuk attibutnya menggunakan atribut form html dan penambahan attribut `type` adalah untuk memberi warna card header sesuai warna yang terdapat pada bootstrap contoh : primary, warning etc. Selain attribut form pada tag ini ada **slot** diletakan pada card body, selain slot utama ada tambahan lainya diantaranya slot header dengan tag `<x-slot name="header">` digunakan untuk memberi label card header, slot lainya slot footer diletakan dibagian card footer dengan menggunakan tag `<x-slot name="footer">`.
