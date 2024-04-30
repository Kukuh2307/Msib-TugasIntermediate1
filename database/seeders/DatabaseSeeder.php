<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Profilekotaku;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);

        ProfileKotaku::create([
                "nama" => "Tulungagung",
                "sejarah" => "<p>Versi pertama adalah nama \"Tulungagung\" dipercaya berasal dari kata \"Pitulungan Agung\" (Tulang Gunung). Nama ini berasal dari peristiwa saat seorang pemuda dari Gunung Wilis bernama Joko Baru mengeringkan sumber air di Ngrowo (Kabupaten Tulungagung tempo dulu) dengan menyumbat semua sumber air tersebut dengan lidi dari sebuah pohon enau atau aren. Joko Baru dikisahkan sebagai seorang pemuda yang dikutuk menjadi ular oleh ayahnya, orang sekitar kerap menyebutnya dengan Baru Klinthing. Ayahnya mengatakan bahwa untuk kembali menjadi manusia sejati, Joko Baru harus mampu melingkarkan tubuhnya di Gunung Wilis. Namun, malang menimpanya karena tubuhnya hanya kurang sejengkal untuk dapat benar-benar melingkar sempurna. Alhasil Joko Baru menjulurkan lidahnya. Disaat yang bersamaan, ayah Joko Baru memotong lidahnya. Secara ajaib, lidah tersebut berubah menjadi tombak sakti yang hingga saat ini dipercaya sebagai \"gaman\" atau \"senjata sakti\". Tombak ini masih disimpan dan dirawat hingga saat ini oleh masyarakat sekitar.</p><p>Sedangkan, versi kedua nama Tulungagung berasal dua kata, tulung dan agung, tulung artinya sumber yang besar, sedangkan agung artinya besar. Dalam pengartian berbahasa Jawa tersebut, Tulungagung adalah daerah yang memiliki sumber air yang besar. Sebelum dibangunnya Terowongan Neyama di Tulungagung bagian selatan oleh tentara Jepang, di Tulungagung sangat mudah ditemui rawa. Pada masa lalu, karena terlalu banyaknya sumber air di sana, banyak kawasan yang tergenang air, baik di musim kemarau maupun musim hujan. Dugaan yang paling kuat mengenai etimologi nama kabupaten ini adalah versi kedua, penamaan nama ini dimulai ketika ibu kota Tulungagung mulai pindah ke tempat sekarang ini. Sebelumnya ibu kota Tulungagung bertempat di daerah Kalangbret dan diberi nama Kadipaten Ngrowo (Ngrowo juga berarti sumber air). Perpindahan ini terjadi sekitar tahun 1901 Masehi.</p>",
                "batasUtara"=> "Kabupaten Kediri dan Kabupaten Nganjuk",
                "batasSelatan"=> "Samudera Hindia",
                "batasBarat"=> "Kabupaten Trenggalek dan Kabupaten Ponorogo",
                "batasTimur"=> "Kabupaten Blitar",
                "iklim" => "<p>Wilayah Kabupaten Tulungagung menurut klasifikasi iklim Koppen beriklim tropis basah dan kering (Aw) dengan dua musim, yaitu musim penghujan dan musim kemarau. Musim penghujan di wilayah Tulungagung berlangsung pada periode November hingga April dengan bulan terbasah adalah Januari yang curah hujan bulanannya lebih dari 270 mm per bulan. Sedangkan, musim kemarau berlangsung pada periode Mei hingga Oktober dengan bulan terkering adalah Agustus yang curah hujan bulanannya kurang dari 20 mm per bulan. Suhu udara di wilayah Tulungagung bervariasi antara 21°–32 °C. Curah hujan tahunan di wilayah Tulungagung berkisar pada angka 1.400–1.800 mm per tahun dengan jumlah hari hujan berkisar antara 90–120 hari hujan per tahun.</p>",
                "wisataAlam" => "Terdapat perkebunan Teh Penampihan atau Penampean di kaki pegunungan Wilis tepatnya di Desa Geger, Kecamatan Sendang. Perkebunan teh seluas 2 hektar ini merupakan peninggalan kolonial Verenigde Oost-Indische Compagnie atau VOC.[18]",
                "wisataPantai" => "Kabupaten Tulungagung diuntungkan dengan letak geografis yang berada di tepi Samudera Hindia, sehingga memiliki banyak pantai yang menarik untuk dikunjungi diantaranya Pantai Popoh, Pantai Sidem, Pantai Brumbun, Pantai Sine, Pantai Molang, Pantai Klatak, Pantai Gerangan, Pantai Sanggar, Pantai Gemah, Pantai Ngalur, Pantai Coro, Pantai Pacar, Pantai Lumbung, Pantai Dlodo, Pantai Pathok Gebang dan Pantai Kedung Tumpang.",
                "wisataAir" => "Di kecamatan Bandung, tepatnnya di desa Sukoharjo terdapat beberapa wisata alam yang menawan, di antaranya \"Sumber Ece\", yang terletak di dusun Nglempung, Desa Sukoharjo, Kecamatan Bandung.[19]. Selain itu ada Bendungan Wonorejo, sebuah bendungan yang terletak di Kecamatan Pagerwojo.",
                "wisataCandi" => "Selain itu Tulungagung juga mempunyai Beberapa Bangunan Candi yang tersebar di beberapa tempat, yaitu Candi Dadi yang terletak di Puncak bukit di Desa Sanggrahan Kecamatan Boyolangu, Candi Cungkup (Candi Sanggrahan) yang terletak di Desa Sanggrahan Kecamatan Boyolangu, Candi Gayatri (Boyolangu) yang terletak di Kecamatan Boyolangu, Candi Mirigambar terletak di Kecamatan sumbergempol, Candi Bodho terletak di Kecamatan Kalidawir, Candi Penampihan berada di Lereng Gunung Wilis Kecamatan Sendang. Di selatan Tulungagung tepatnya di Kecamatan Campurdarat sebuah Telaga yang bernama Telaga Buret, telaga ini tak pernah kering walaupun letaknya di Perbukitan kapur selatan yang terkenal kering dan panas saat musim kemarau datang. Arca Joko Budhek, adalah sebentuk batu yang ukurannya besar yang bentuknya seperti seorang pria yang bertapa,arca ini berada di puncakbukit, dan bisa dilihat dari jalan raya karena ukurannya yang besar.",
                "topografi" => "Secara topografi, Tulungagung terletak pada ketinggian 85 m di atas permukaan laut (dpl). Bagian barat laut Kabupaten Tulungagung merupakan daerah pegunungan yang merupakan bagian dari pegunungan Wilis-Liman. Bagian tengah adalah dataran rendah, sedangkan bagian selatan adalah pegunungan yang merupakan rangkaian dari Pegunungan Kidul. Di sebelah barat laut Tulungagung, tepatnya di Kecamatan Sendang, terdapat Gunung Wilis sebagai titik tertinggi di Kabupaten Tulungagung yang memiliki ketinggian 2552 m. Di tengah Kota Tulungagung, terdapat Kali Ngrowo yang merupakan anak Kali Brantas dan seolah membagi Kota Tulungagung menjadi dua bagian: utara dan selatan. Kali ini sering disebut dengan Kali Parit Raya dari rangkaian Kali Parit Agung.",
                "wisataKuliner" => "Tulungagung memiliki berbagai pilihan kuliner yang menggugah selera. Dari makanan khas seperti Sate Tulungagung yang terkenal dengan bumbu kacangnya yang khas, hingga Pecel Semanggi yang tidak kalah populer di kalangan wisatawan maupun penduduk lokal. Jangan lupa mencoba Nasi Pecel, yang merupakan kombinasi dari nasi dengan sayuran rebus dan bumbu pecel, serta disajikan dengan peyek kacang. Untuk pencuci mulut, Cobek Mercon, yang merupakan campuran buah-buahan segar dengan sambal pedas, bisa menjadi pilihan yang unik dan menyegarkan."
        ]);
    }
}
