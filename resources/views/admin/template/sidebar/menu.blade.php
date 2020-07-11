<x-admin.template.sidebar.menu 
 label="Dasboard" 
 icon="fas fa-tachometer-alt" 
 href="{{route('admin.dashboard')}}" />

<li class="nav-header">COMPONENTS</li>

<x-admin.template.sidebar.menu 
 label="Form" 
 icon="far fa-list-alt "
 :href="route('admin.form')" />


 <x-admin.template.sidebar.menu 
 label="Upload" 
 icon="fas fa-image "
 :href="route('admin.upload')" />

 <x-admin.template.sidebar.menu 
 label="Tabel" 
 icon="fas fa-th-list "
 :href="route('admin.table')" />

<li class="nav-header">SETTINGS</li>

<x-admin.template.sidebar.menu 
 label="Users" 
 icon="fas fa-user-friends"
 is="user*"
 has-treeview="true">

  <x-admin.template.sidebar.submenu
   label="All User"
   href="#"/>

  <x-admin.template.sidebar.submenu
   label="Add New"
   href="#"/>

</x-admin.template.sidebar.menu>

<x-admin.template.sidebar.menu 
 label="Simple Link" 
 icon="fas fa-th"
 badge="New" />

 <x-admin.template.sidebar.menu 
 label="About" 
 icon="fas fa-exclamation-circle"
 :href="route('admin.about')" />