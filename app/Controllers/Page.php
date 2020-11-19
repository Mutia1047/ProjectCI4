<?php namespace App\Controllers;

class Page extends BaseController
{
	public function admin()
	{
		echo view("tucil/admin");
	}

	public function about()
	{
		echo view("tucil/about");
	}
    
    public function login()
	{
		echo view("tucil/login");
    }

    public function register()
	{
		echo view("tucil/register");
    }

    public function detail()
	{
        // membuat data untuk dikirim ke view
        $detail['data_pengurus'] = [
			[
				'siapa' => 'Muhammad Romli',
				'apa' => 'Pembina Komunitas'
			],
			[
				'siapa' => 'Zulkarnain',
				'apa' => 'Ketua Komunitas '
			],
			[
				'siapa' => 'Erika Salim',
				'apa' => 'Pengembangan SDM'
            ],
			[
				'siapa' => 'Mela Kalina',
				'apa' => 'Media dan Informasi'
            ],
            [
				'siapa' => 'Faiz Ubadillah',
				'apa' => 'Humas dan Networking'
            ],
            [
				'siapa' => 'Wahyu Damar',
				'apa' => 'Usaha Mandir'
            ]

        ];
        
        // load view dengan detail
		echo view("tucil/detail", $detail);
	}
	
}