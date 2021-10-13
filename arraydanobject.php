<?php 

// Array Online Course
$siswaArr = array(
    'nama_sekolah' => 'SDN 16 Mataram',
    'lama_sekolah' => '2 jam',
    'Kelas' => 'III',
    'murid' => array(
        array(
            'nama' => 'husain',
            'umur' => '8 tahun',
            'trackers' => array(
                'masuk' => '10 juni 2019',
                'progress' => 50
            )
        ),
        array(
            'nama' => 'wira',
            'umur' => '8 tahun',
            'trackers' => array(
                'masuk' => '10 juni 2019',
                'progress' => 40
            )
        ),
		array(
            'nama' => 'nurul',
            'umur' => '9 tahun',
            'trackers' => array(
                'masuk' => '20 juni 2019',
                'progress' => 40
            )
        ),
    )
);

// print_r($courseArr);

// Object Online Course
$siswaObj = (object)[
    'nama_sekolah' => 'SDN 16 Mataram',
    'lama_sekolah' => '2 jam',
    'Kelas' => 'III',
    'murid' => array(
        (object)[
            'nama' => 'husain',
            'umur' => 8,
            'trackers' => (object)[
                'masuk' => '10 juni 2019',
                'semester' => 1
            ]
        ],
        (object)[
            'nama' => 'wira',
            'umur' => 7,
            's' => (object)[
                'masuk' => '10 juni 2019',
                'semester' => 1
            ]
        ],
		(object)[
            'nama' => 'nurul',
            'umur' => 9,
            's' => (object)[
                'masuk' => '20 juni 2019',
                'semester' => 1
            ]
        ],
    )
];

echo '<pre>';
print_r($siswaObj);
echo '</pre>';

echo '<br>';

echo "siswa : {$siswaObj->nama_sekolah} <br>" ;
echo "nama_siswa : {$siswaObj->murid[0]->nama} <br>" ;
echo "semester : {$siswaObj->murid[0]->trackers->semester} <br>" ;

?>