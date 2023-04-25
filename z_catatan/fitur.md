[] User Profile
[] Rombak artikel
    [] Super admin edit author
[] Vistor counter refresh perangkat



$view = path_view();
$data = compact('page_attr', 'view');
$data['compact'] = $data;
return view($view, $data);

@php
    $resource = resource_loader(
        blade_path: $view,
        params: [
            'can_update' => $can_update ? 'true' : 'false',
            'can_delete' => $can_delete ? 'true' : 'false',
            'page_title' => $page_attr['title'],
        ],
    );
@endphp
<script src="{{ $resource }}"></script>

const can_update = "{{ $can_update == 'true' ? 'true' : 'false' }}" === "true";
const can_delete = "{{ $can_delete == 'true' ? 'true' : 'false' }}" === "true";

$page_title


data-toggle="tooltip"

<i class="fas fa-edit"></i></button>
<i class="fas fa-trash"></i></button>

[x] Halaman pengunjung detail di panel admin
    [x] Detail ip
    [x] Hapus localhost
[] hapus pengunjung dengan ip ignore di config
[] ignore ip local saat simpan data vistor tracker
[] Buat halaman versioning di panel admin
