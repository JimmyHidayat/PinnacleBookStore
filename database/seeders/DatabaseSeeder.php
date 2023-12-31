<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'username' => 'gilmanarief',
            'email' => 'gilmanarief@gmail.com',
            'password' => bcrypt('password'),
            'confirmPassword' => bcrypt('password'),
            'google_id' => '1234567890',
            'is_admin' => true
        ]);

        // User::factory(3)->create();

        Category::create([
            'name' => 'Novel',
            'slug' => 'novel'
        ]);

        Category::create([
            'name' => 'Buku',
            'slug' => 'Buku'
        ]);

        Category::create([
            'name' => 'Biografi',
            'slug' => 'biografi'
        ]);

        Category::create([
            'name' => 'Komik',
            'slug' => 'komik'
        ]);

        Post::create([
            'title' => 'Melangkah',
            'author' => 'J.S. Khairen',
            'category_id' => 3,
            'genre' => 'Psikologi',
            'price' => 65000,
            'description' => 'Novel karya J. S Khairen yang berjudul Melangkah bertemakan tentang petualangan di Indonesia. Tidak hanya itu, cerita dalam novel ini juga mengutamakan kisah pahlawan. Berbeda dari karya-karya yang sebelumnya, di novel ini Khairen memberi sedikit imajinasi yang ia tanamkan. Terdapat 36 episode dan 5 babak.Listrik padam di seluruh Jawa dan Bali secara misterius. Ancaman nyata kekuatan baru yang hendak menaklukkan Nusantara.
            Saat yang sama, empat sahabat mendarat di Sumba, hanya untuk mendapati nasib ratusan juta manusia ada di tangan mereka! Empat mahasiswa ekonomi ini, harus bertarung melawan pasukan berkuda yang bisa melontarkan listrik! Semua dipersulit oleh seorang buronan tingkat tinggi bertopeng pahlawan yang punya rencana mengerikan.
            Ternyata pesan arwah nenek moyang itu benar-benar terwujud. “Akan datang kegelapan yang berderap, bersama ribuan kuda raksasa di kala malam. Mereka bangun setelah sekian lama, untuk menghancurkan Nusantara. Seorang lelaki dan seorang perempuan ditakdirkan membaurkan air di lautan dan api di pegunungan. Menyatukan tanah yang menghujam, dan udara yang terhampar.” Kisah tentang persahabatan, tentang jurang ego anak dan orangtua, tentang menyeimbangkan logika dan perasaan. Juga tentang melangkah menuju masa depan. Bahwa, apa pun yang menjadi luka masa lalu, biarlah mengering bersama waktu.',
            'image' => 'https://cdn.gramedia.com/uploads/items/9786020523316_Melangkah_UV_Spot_R4-1.jpg'
        ]);
        Post::create([
            'title' => 'Filosofi Teras',
            'author' => 'Henry Manampiring',
            'category_id' => 1,
            'genre' => 'Fiksi',
            'price' => 88200,
            'description' => 'Lebih dari 2000 tahun lalu, sebuah mazhab filsafat menemukan akar masalah dan juga solusi dari banyak emosi negatif. Stoisisme, atau Filosofi Teras, adalah filsafat Yunani-Romawi kuno yang bisa membantu kita mengatasi emosi negatif dan menghasilkan mental yang tangguh dalam menghadapi naik-turun nya kehidupan.
            Jauh dari kesan filsafat sebagai topik berat dan mengawang-awang, Filosofi Teras justru bersifat praktis dan relevan dengan kehidupan Generasi Milenial dan Gen-Z masa kini.
            Buku yang pertama kali diterbitkan pada 2019 ini mengajarkan kita tentang pengendalian emosi negatif yang ada dalam diri kita. Buku Filosofi Teras menjadi buku mega best seller, dan memenangkan Book of the Year di Indonesia International Book Fair pada 2019. Filosofi Teras memiliki tebal sebanyak 344 halaman.
            Buku ini mudah dipahami dengan ilustrasi tokoh filsafat, serta kata-kata bijak yang menambah daya tarik dalam membaca. Buku karangan Henry Manampiring ini sangat cocok dibaca untuk para generasi milenial, dan Gen Z dalam menghadapi ketakutan, kekhawatiran, kecemasan, serta hal negatif lainnya.
            Awal mula kehadiran buku ini tidak lain dari latar belakang kondisi sang penulis yang didiagnosis major depressive disorder. Hingga akhirnya ia menemukan buku tentang penerapan filsafat stoa dalam hidup.
            Stoa sendiri identik dengan kesederhanaan, dan menerima keadaan yang tidak bisa dikendalikan. Namun, stoicism bukan berarti pasrah dan tidak peduli sama sekali. Filsafat ini mengajarkan kita untuk memiliki prinsip indifferent.',
            'image' => 'https://cdn.gramedia.com/uploads/items/img20220101_11444970.jpg'
        ]);
        Post::create([
            'title' => 'Amr bin Ash',
            'author' => 'Dr. Mahmud Syalabi',
            'category_id' => 3,
            'genre' => 'Fiksi',
            'price' => 99000,
            'description' => 'Nama Amr bin Ash sangat terkenal dalam sejarah Islam. Sahabat dekat Nabi Muhammad dan panglima besar penakluk Mesir, Afrika Utara, dan Palestina ini juga seorang politikus kontroversial, bahkan dianggap sebagai pengkhianat dan pemberontak: dari menolak membaiat Ali, berpihak kepada Muawiyah dalam Perang Shiffin, hingga peristiwa tahkim (arbitrase) yang merupakan puncak dari konflik besar pertama yang berdarah-darah di antara sesama Muslim.
            Di balik sosoknya yang kontroversial, Amr punya pandangan yang kuat dan visioner. Mulai dari komitmennya membela Utsman yang tewas dibunuh tetapi para pelakunya tak kunjung diusut oleh Ali, filosofi dan taktik politiknya, hingga pemikirannya tentang masa depan Islam dan kaum Muslim di wilayah baru yang jauh dari pusat Islam di Madinah. Bagi Amr, politik adalah urusan duniawi yang dinamis, dan model politik khilafah tak lagi relevan dan efektif untuk mengontrol wilayah taklukan yang luas.
            Sosok seorang laki-laki yang tiada bandingannya dan masuk di jajaran minoritas orang yang tidak ditemukan dalam banyak peradaban, kecuali jumlahnya amat sedikit. Allah telah menganugerahkannya akal yang cerdas, menyinari batinnya dengan cahaya Islam, dan menjadikannya sosok yang selalu menjalankan berbagai perbuatan mulia dengan penuh kesungguhan tanpa mengenal rasa jemu sedikit pun. Kesungguhan itulah yang mampu menggetarkan singgasana para kaisar dan memberangus angan-angan para panglima besar. la terkenal memiliki kepiawaian yang luar biasa dan keahlian dalam berpolitik.
            Buku ini menjelaskan seorang Amr bin Ash yang sangat berjasa terhadap Islam dan kaum Muslim, tetapi kemudian dianggap sebagai pengkhianat, pemberontak, serta ambisius terhadap kekayaan dan kekuasaan. Penulisnya tak membela mati-matian Amr, tak juga mencelanya habis-habisan, tetapi menggambarkan sosoknya secara objektif dan proporsional yang jarang dilakukan para penulis biografi tentangnya.',
            'image' => 'https://cdn.gramedia.com/uploads/picture_meta/2023/11/17/byxipf6gjphe3qcggsccrz.jpg'
        ]);
        Post::create([
            'title' => 'One Piece 08 (2023)',
            'author' => 'Eiichiro Oda',
            'category_id' => 4,
            'genre' => 'Comedy',
            'price' => 74000,
            'description' => 'Tanpa kenal rasa takut akan kematian, Luffy menantang Krieg berduel. Akhirnya pertarungan sengit di atas restoran terapung pun berakhir. Kini, tibalah saatnya bagi Sanji untuk melanjutkan perjalanan...',
            'image' => 'https://cdn.gramedia.com/uploads/picture_meta/2023/11/13/hfxetxlqxrvqksujtfmsk7.jpg'
        ]);
        Post::create([
            'title' => 'Bicara Itu Ada Seninya',
            'author' => 'Oh Su Hyang',
            'category_id' => 2,
            'genre' => 'Psikologi',
            'price' => 65000,
            'description' => '"TAHUKAH ANDA BAHWA BERBICARA ITU ADA SENINYA? Ketika komunikasi menjadi hal yang penting untuk bersaing, pakar komunikasi Oh Su Hyang mengeluarkan buku yang sangat berarti. Selain berisi tentang pengalaman peningkatan diri, buku ini juga memuat berbagai konten mengenai teknik komunikasi, persuasi, dan negosiasi. 
            Lalu bagaimana cara berbicara yang baik? Apakah berbicara dengan artikulasi yang jelas? Atau berbicara tanpa mengambil tarikan napas? Tidak! Sebuah ucapan yang bisa disebut baik adalah yang bisa menggetarkan hati. Ucapan seorang juara memiliki daya tarik tersendiri. Ucapan pemandu acara memiliki kemampuan menghidupkan suasana dan kekuatan kalimatnya yang terus terang. Anda harus pandai berbicara untuk menunjukkan diri Anda kepada lawan bicara dalam kehidupan sosial. Orang yang berbicara dengan mahir akan menjadi lebih maju daripada yang lainnya. Untuk mencapai tujuan komunikasi, persuasi, dan negosiasi, Anda harus mengetahui metode komunikasi yang efisien. Buku ini dijabarkan agar dapat dimengerti oleh siapa saja. Terdapat banyak episode menarik dari orang-orang terkenal dan juga rahasia inti dari komunikasi. Jika Anda membacanya dengan runut, saya yakin rasa percaya diri Anda untuk berbicara pun akan tumbuh dengan sendirinya."',
            'image' => 'https://cdn.gramedia.com/uploads/items/9786024553920.png'
        ]);
        Post::create([
            'title' => 'The Girl who Fell Beneath the Sea',
            'author' => 'Axie Oh',
            'category_id' => 1,
            'genre' => 'Fiksi',
            'price' => 55000,
            'description' => 'Badai mematikan telah merusak tanah kelahiran Mina selama beberapa generasi. Banjir menyapu seluruh desa, sementara perang berdarah dikobarkan untuk memperebutkan sumber daya yang tersisa. Masyarakat di desa Mina memercayai bahwa Dewa Laut mengutuk mereka dengan kematian dan keputusasaan. Dalam upaya untuk menenangkan Dewa Laut, setiap tahun seorang gadis cantik dibuang ke laut untuk menjadi pengantin Dewa Laut, dengan harapan suatu hari "pengantin sejati" akan dipilih dan mengakhiri penderitaan mereka. Shim Cheong adalah gadis tercantik di desa, sekaligus kekasih Joon. Banyak yang percaya dialah pengantin sejati Dewa Laut Tapi pada malam Cheong hendak dikorbankan, Joon mengikuti Cheong, meski tahu bahwa ikut campur akan dihadiahi hukuman mati. Untuk menyelamatkan kakaknya, Mina terjun ke air menggantikan Cheong. Kecantikan Mina memang tidak sebanding dengan para pengantin terdahulu. Tapi dia sudah tersapu ke Alam Roh. Kini Mina tak punya banyak waktu untuk menemukan Dewa Laut sebelum dirinya sendiri berubah menjadi arwah. Berbekal kemampuan mendongeng dan bantuan para arwah, Mina harus berhasil menemukan Dewa Laut.',
            'image' => 'https://cdn.gramedia.com/uploads/picture_meta/2023/2/14/iddphd9rbufdfjabf4owuf.jpg'
        ]);
        Post::create([
            'title' => 'Detektif Conan 103',
            'author' => 'Aoyama Gosho',
            'category_id' => 4,
            'genre' => 'Misteri',
            'price' => 40000,
            'description' => 'Hotel tempat Sera Dan Mary menginap menerima surat ancaman dari pelaku pengeboman! Conan dan pengacara Kisaki harus segera mencari si pelaku di antara berbagai rencana dan pikiran yang bertautan satu sama lain di hotel itu!! Kelompok detektif cilik pergi berwisata ke pantai bersama Subaru Okiya dan… Rumi Wakasa!! Terjadi ketegangan di antara keduanya hingga… Dan Kid si Pencuri menyamar menjadi Azusa Enomoto!! Apa yang dilakukan oleh Conan dan Toru Amuro saat harus menghadapi situasi sulit itu!?

            Detektif Conan yang juga dikenal sebagai Case Closed dan Detective Conan, adalah seri manga detektif Jepang yang ditulis dan diilustrasikan oleh Gosho Aoyama. Serial ini diserialisasikan dalam majalah manga shōnen Weekly Shōnen Sunday yang diterbitkan oleh Shogakukan sejak Januari 1994, dengan bab-babnya dikumpulkan dalam beberapa volume tankōbon. Karena masalah hukum dengan nama Detective Conan, rilisan bahasa Inggris dari Funimation dan Viz diubah namanya menjadi Case Closed. Serial ini bercerita mengenai detektif SMA bernama Shinichi Kudo (atau Jimmy Kudo dalam beberapa terjemahan bahasa Inggris) yang tubuhnya menyusut menjadi kecil ketika menyelidiki sebuah organisasi misterius dan umumnya memecahkan banyak kasus dengan meniru suara dari ayah teman masa kecilnya dan berbagai karakter lain.
            
            Komik ini menceritakan seorang detektif SMA yang terkadang bekerja dengan polisi untuk memecahkan kasus tertentu bernama Shinichi Kudo. Selama penyelidikan, ia disergap dan dilumpuhkan oleh anggota sindikat kejahatan yang dikenal sebagai Organisasi Hitam. Dalam upaya untuk membunuh detektif muda itu, mereka menelan paksa obat percobaan yang berbahaya. Namun, obat tersebut mengubahnya menjadi anak-anak daripada membunuhnya. Mengadopsi nama samaran Conan Edogawa dan merahasiakan identitas aslinya, Kudo tinggal bersama teman masa kecilnya Ran Mouri dan ayahnya Kogoro Mouri, yang merupakan seorang detektif swasta. Sepanjang seri tersebut, ia ikut serta dalam kasus yang ditangani oleh Kogoro. Meskipun demikian, setelah Kudo berhasil memecahkan kasus tersebut, ia akan menggunakan jarum bius yang tersembunyi dalam peralatan Prof. Agasa untuk membius Kogoro dan kemudian menggunakan pengubah suara yang dapat menirukan suaranya untuk mengungkapkan pemecahan kasus. Ia juga bersekolah di sekolah dasar setempat di mana ia berteman dengan beberapa teman sekelas yang membentuk Grup Detektif Cilik.',
            'image' => 'https://cdn.gramedia.com/uploads/picture_meta/2023/10/31/egxmfc5jkllsmadjjcklw2.jpg'
        ]);
        Post::create([
            'title' => 'Atomic Habits: Perubahan Kecil yang Memberikan Hasil Luar Biasa',
            'author' => 'James Clear',
            'category_id' => 2,
            'genre' => 'Pengembangan Diri',
            'price' => 102400,
            'description' => 'Atomic Habits: Perubahan Kecil yang Memberikan Hasil Luar Biasa adalah buku kategori self improvement karya James Clear. Pada umumnya, perubahan-perubahan kecil seringkali terkesan tak bermakna karena tidak langsung membawa perubahan nyata pada hidup suatu manusia. Jika diumpamakan sekeping koin tidak bisa menjadikan kaya, suatu perubahan positif seperti meditasi selama satu menit atau membaca buku satu halaman setiap hari mustahil menghasilkan perbedaan yang bisa terdeteksi. Namun hal tersebut tidak sejalan dengan pemikiran James Clear, ia merupakan seorang pakar dunia yang terkenal dengan "habits" atau kebiasaan. Ia tahu bahwa tiap perbaikan kecil bagaikan menambahkan pasir ke sisi positif timbangan dan akan menghasilkan perubahan nyata yang berasal dari efek gabungan ratusan bahkan ribuan keputusan kecil. Ia menamakan perubahan kecil yang membawa pengaruh yang luar biasa dengan nama atomic habits.

            Sebuah sistem revolusioner untuk menjadi 1 persen lebih baik setiap hari. Orang mengira ketika Anda ingin mengubah hidup, Anda perlu memikirkan hal-hal besar. Namun pakar kebiasaan terkenal kelas dunia James Clear telah menemukan sebuah cara lain. Ia tahu bahwa perubahan nyata berasal dari efek gabungan ratusan keputusan kecil—dari mengerjakan dua push-up sehari, bangun lima menit lebih awal, sampai menahan sebentar hasrat untuk menelepon. Ia menyebut semua tadi atomic habits. Dalam buku terobosan ini, Clear pada hakikatnya mengungkapkan bagaimana perubahan perubahan sangat remeh ini dapat tumbuh menjadi hasil-hasil yang sangat mengubah hidup. Ia menyingkap beberapa trik sederhana dalam hidup kita (seni Menumpuk Kebiasaan yang terlupakan, kekuatan tak terduga Aturan Dua Menit, atau trik untuk masuk ke dalam Zona Goldilocks), dan menggali ke dalam teori psikologi dan neurosains paling baru untuk menerangkan mengapa semua itu penting. Dalam rangka itu, ia menceritakan kisah-kisah inspiratif para peraih medali emas Olimpiade, para CEO terkemuka, dan ilmuwan-ilmuwan istimewa yang telah menggunakan sains tentang kebiasaan-kebiasaan kecil untuk tetap produktif, tetap termotivasi, dan bahagia. Perubahan-perubahan kecil ini akan mendatangkan pengaruh revolusioner pada karier Anda, hubungan pribadi Anda, dan hidup Anda.',
            'image' => 'https://cdn.gramedia.com/uploads/items/Atomic_Habits_C-FRONT_HC_-_Mockup.png'
        ]);
        
        Post::create([
            'title' => 'Journal of Joy',
            'author' => 'Sarah Amijo',
            'category_id' => 2,
            'genre' => 'Pengembangan Diri',
            'price' => 100000,
            'description' => 'Step into a whimsical world where joy embraces lifes trials. This book will uncover your inner power to radiate joy, even in the face of challenges. From sipping warm peppermint tea to unleashing a mountain-top scream, let these magical moments ignite the spark of joy within.

            This book reminds us that joy is a choice, a guiding light in our darkest hours. Share its wisdom with loved ones and together, lets paint the world with contagious joy. Choose joy and watch your heart take flight!',
            'image' => 'https://cdn.gramedia.com/uploads/picture_meta/2023/11/10/whr7hn47apdpso8wglhrde.jpg'
        ]);
        Post::create([
            'title' => 'Spy X Family 10',
            'author' => 'Endo Tatsuya',
            'category_id' => 4,
            'genre' => 'Petualangan',
            'price' => 36000,
            'description' => 'Spy X Family mengisahkan tentang seorang mata-mata yang demi melancarkan misi perdamaian harus membangun sebuah keluarga palsu. Master mata-mata Twilight tidak tertandingi dalam hal menyamar dalam misi berbahaya demi kemajuan dunia. Agen dengan sebutan nama “Twilight” atau “Senja”, yang merupakan mata-mata utama di Westalia Intelligence Services’ Eastern (W.I.S.E), hidup dengan kerap kali berganti-ganti identitas. Tugasnya itulah yang membuatnya harus melakukan berbagai kehidupan yang berbeda lewat berbagai penyamaran. Walaupun begitu, ia mendedikasikan hidupnya demi kedamaian dunia.

            Suatu ketika dengan serba dadakan, Loid dan Yor sepakat untuk hadir sebagai ibu Anya dalam wawancara, dan Loid hadir menemani sebagai pasangan Yor di pesta. Berbagai kejadian pun membuat mereka akhirnya sepakat menjadi pasangan, orang tua Anya, dan membentuk keluarga. Di sinilah petualangan mereka dimulai.
            
            Sinopsis Buku:
            Saat kecil, dia hidup dengan damai bersama orangtuanya. Main tentara-tentaraan dengan teman, juga bertengkar dengan ayahnya. Tak pernah terbayang, semua keseharian yang dia anggap wajar itu bisa hilang begitu saja.
            
            Di antara jenis buku lainnya, komik memang disukai oleh semua kalangan mulai dari anak kecil hingga orang dewasa. Alasan komik lebih disukai oleh banyak orang karena disajikan dengan penuh dengan gambar dan cerita yang mengasyikan sehingga mampu menghilangkan rasa bosan di kala waktu senggang.
            
            Komik seringkali dijadikan sebagai koleksi dan diburu oleh penggemarnya karena serinya yang cukup terkenal dan kepopulerannya terus berlanjut sampai saat ini. Dalam memilih jenis komik, ada baiknya perhatikan terlebih dahulu ringkasan cerita komik di sampul bagian belakang sehingga sesuai dengan preferensi pribadi pembaca.',
            'image' => 'https://cdn.gramedia.com/uploads/picture_meta/2023/10/18/4kq5mvezwr7dmbagujtvev.jpg'
        ]);
    }
}
