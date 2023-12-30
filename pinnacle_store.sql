-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 29, 2023 at 03:58 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pinnacle_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Novel', 'novel', '2023-12-27 21:00:39', '2023-12-27 21:00:39'),
(2, 'Buku', 'Buku', '2023-12-27 21:00:39', '2023-12-27 21:00:39'),
(3, 'Biografi', 'biografi', '2023-12-27 21:00:39', '2023-12-27 21:00:39'),
(4, 'Komik', 'komik', '2023-12-27 21:00:39', '2023-12-27 21:00:39');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_12_114700_create_orders_table', 1),
(6, '2023_12_17_091938_create_categories_table', 1),
(7, '2023_12_18_145903_create_posts_table', 1),
(8, '2023_12_26_135903_add_is_admin_to_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `order_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `author`, `category_id`, `genre`, `price`, `description`, `image`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Melangkah', 'J.S. Khairen', 3, 'Psikologi', '65000', 'Novel karya J. S Khairen yang berjudul Melangkah bertemakan tentang petualangan di Indonesia. Tidak hanya itu, cerita dalam novel ini juga mengutamakan kisah pahlawan. Berbeda dari karya-karya yang sebelumnya, di novel ini Khairen memberi sedikit imajinasi yang ia tanamkan. Terdapat 36 episode dan 5 babak.Listrik padam di seluruh Jawa dan Bali secara misterius. Ancaman nyata kekuatan baru yang hendak menaklukkan Nusantara.\n            Saat yang sama, empat sahabat mendarat di Sumba, hanya untuk mendapati nasib ratusan juta manusia ada di tangan mereka! Empat mahasiswa ekonomi ini, harus bertarung melawan pasukan berkuda yang bisa melontarkan listrik! Semua dipersulit oleh seorang buronan tingkat tinggi bertopeng pahlawan yang punya rencana mengerikan.\n            Ternyata pesan arwah nenek moyang itu benar-benar terwujud. “Akan datang kegelapan yang berderap, bersama ribuan kuda raksasa di kala malam. Mereka bangun setelah sekian lama, untuk menghancurkan Nusantara. Seorang lelaki dan seorang perempuan ditakdirkan membaurkan air di lautan dan api di pegunungan. Menyatukan tanah yang menghujam, dan udara yang terhampar.” Kisah tentang persahabatan, tentang jurang ego anak dan orangtua, tentang menyeimbangkan logika dan perasaan. Juga tentang melangkah menuju masa depan. Bahwa, apa pun yang menjadi luka masa lalu, biarlah mengering bersama waktu.', 'https://cdn.gramedia.com/uploads/items/9786020523316_Melangkah_UV_Spot_R4-1.jpg', NULL, '2023-12-27 21:00:39', '2023-12-27 21:00:39'),
(2, 'Laut Bercerita', 'Leila S. Chudori', 1, 'Fiksi', '84000', 'Buku ini terdiri atas dua bagian. Bagian pertama mengambil sudut pandang seorang mahasiswa aktivis bernama Laut, menceritakan bagaimana Laut dan kawan-kawannya menyusun rencana, berpindah-pindah dalam pelarian, hingga tertangkap oleh pasukan rahasia. Sedangkan bagian kedua dikisahkan oleh Asmara, adik Laut. Bagian kedua mewakili perasaan keluarga korban penghilangan paksa, bagaimana pencarian mereka terhadap kerabat mereka yang tak pernah kembali.\n            Buku ini ditulis sebagai bentuk tribute bagi para aktivis yang diculik, yang kembali, dan yang tak kembali dan keluarga yang terus menerus sampai sekarang mencari-cari jawaban. Novel ini merupakan perwujudan dalam bentuk fiksi bahwa kita sebagai bangsa Indonesia tidak boleh melupakan sejarah yang telah membentuk sekaligus menjadi tumpuan bangsa Ini. Novel ini juga mengajak pembaca menguak misteri-misteri bangsa ini yang mana tidak diajarkan di sekolah. Walaupun novel ini adalah fiksi, laut bercerita menunjukkan kepada pembaca bahwa negeri ini pernah memasuki masa pemerintahan yang kelam. Laut Bercerita, novel terbaru Leila S. Chudori, bertutur tentang kisah keluarga yang kehilangan, sekumpulan sahabat yang merasakan kekosongan di dada, sekelompok orang yang gemar menyiksa dan lancar berkhianat, sejumlah keluarga yang mencari kejelasan makam anaknya, dan tentang cinta yang tak akan luntur.', 'https://cdn.gramedia.com/uploads/items/9786024246945_Laut-Bercerita.png', NULL, '2023-12-27 21:00:39', '2023-12-27 21:00:39'),
(3, 'Jujutsu Kaisen 12', 'Gege Akutami', 4, 'Sains Fiksi', '55000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum cursus dolor, vel consectetur quam aliquam vitae. Vestibulum venenatis, quam ut venenatis fermentum, elit odio commodo nulla, ut scelerisque erat mi vitae eros. Duis nec massa vel justo euismod tincidunt id id justo. Fusce sollicitudin euismod nisl ut congue. Nunc tincidunt sodales enim, ut luctus ex feugiat eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam erat volutpat. In hac habitasse platea dictumst. Suspendisse eget lectus semper, sollicitudin turpis a, gravida urna.\n            Praesent aliquet, lacus id vulputate gravida, quam est fermentum velit, a tincidunt lacus mi eget lacus. Vivamus hendrerit felis euismod, dignissim felis vel, vestibulum tortor. Ut id urna eget libero commodo egestas. Aliquam erat volutpat. Phasellus ac justo vitae elit scelerisque varius. Quisque consequat, arcu a vulputate dictum, erat odio tincidunt mi, eu varius libero dolor in libero. Integer auctor, elit ac fermentum vulputate, sapien justo feugiat metus, eu tristique neque sapien sit amet risus. Nam eu orci vel ex tincidunt feugiat.', 'https://cdn.gramedia.com/uploads/picture_meta/2023/11/17/efri6damk2qz3tuvwn4car.jpg', NULL, '2023-12-27 21:00:39', '2023-12-27 21:00:39'),
(4, 'One Piece 08 (2023)', 'Eiichiro Oda', 4, 'Comedy', '74000', 'Tanpa kenal rasa takut akan kematian, Luffy menantang Krieg berduel. Akhirnya pertarungan sengit di atas restoran terapung pun berakhir. Kini, tibalah saatnya bagi Sanji untuk melanjutkan perjalanan...', 'https://cdn.gramedia.com/uploads/picture_meta/2023/11/13/hfxetxlqxrvqksujtfmsk7.jpg', NULL, '2023-12-27 21:00:39', '2023-12-27 21:00:39'),
(5, 'Bicara Itu Ada Seninya', 'Oh Su Hyang', 3, 'Psikologi', '65000', '\"TAHUKAH ANDA BAHWA BERBICARA ITU ADA SENINYA? Ketika komunikasi menjadi hal yang penting untuk bersaing, pakar komunikasi Oh Su Hyang mengeluarkan buku yang sangat berarti. Selain berisi tentang pengalaman peningkatan diri, buku ini juga memuat berbagai konten mengenai teknik komunikasi, persuasi, dan negosiasi. \n            Lalu bagaimana cara berbicara yang baik? Apakah berbicara dengan artikulasi yang jelas? Atau berbicara tanpa mengambil tarikan napas? Tidak! Sebuah ucapan yang bisa disebut baik adalah yang bisa menggetarkan hati. Ucapan seorang juara memiliki daya tarik tersendiri. Ucapan pemandu acara memiliki kemampuan menghidupkan suasana dan kekuatan kalimatnya yang terus terang. Anda harus pandai berbicara untuk menunjukkan diri Anda kepada lawan bicara dalam kehidupan sosial. Orang yang berbicara dengan mahir akan menjadi lebih maju daripada yang lainnya. Untuk mencapai tujuan komunikasi, persuasi, dan negosiasi, Anda harus mengetahui metode komunikasi yang efisien. Buku ini dijabarkan agar dapat dimengerti oleh siapa saja. Terdapat banyak episode menarik dari orang-orang terkenal dan juga rahasia inti dari komunikasi. Jika Anda membacanya dengan runut, saya yakin rasa percaya diri Anda untuk berbicara pun akan tumbuh dengan sendirinya.\"', 'https://cdn.gramedia.com/uploads/items/9786024553920.png', NULL, '2023-12-27 21:00:39', '2023-12-27 21:00:39'),
(6, 'The Girl who Fell Beneath the Sea', 'Axie Oh', 1, 'Fiksi', '55000', 'Badai mematikan telah merusak tanah kelahiran Mina selama beberapa generasi. Banjir menyapu seluruh desa, sementara perang berdarah dikobarkan untuk memperebutkan sumber daya yang tersisa. Masyarakat di desa Mina memercayai bahwa Dewa Laut mengutuk mereka dengan kematian dan keputusasaan. Dalam upaya untuk menenangkan Dewa Laut, setiap tahun seorang gadis cantik dibuang ke laut untuk menjadi pengantin Dewa Laut, dengan harapan suatu hari \"pengantin sejati\" akan dipilih dan mengakhiri penderitaan mereka. Shim Cheong adalah gadis tercantik di desa, sekaligus kekasih Joon. Banyak yang percaya dialah pengantin sejati Dewa Laut Tapi pada malam Cheong hendak dikorbankan, Joon mengikuti Cheong, meski tahu bahwa ikut campur akan dihadiahi hukuman mati. Untuk menyelamatkan kakaknya, Mina terjun ke air menggantikan Cheong. Kecantikan Mina memang tidak sebanding dengan para pengantin terdahulu. Tapi dia sudah tersapu ke Alam Roh. Kini Mina tak punya banyak waktu untuk menemukan Dewa Laut sebelum dirinya sendiri berubah menjadi arwah. Berbekal kemampuan mendongeng dan bantuan para arwah, Mina harus berhasil menemukan Dewa Laut.', 'https://cdn.gramedia.com/uploads/picture_meta/2023/2/14/iddphd9rbufdfjabf4owuf.jpg', NULL, '2023-12-27 21:00:39', '2023-12-27 21:00:39'),
(7, 'Detektif Conan 103', 'Aoyama Gosho', 4, 'Misteri', '40000', 'Hotel tempat Sera Dan Mary menginap menerima surat ancaman dari pelaku pengeboman! Conan dan pengacara Kisaki harus segera mencari si pelaku di antara berbagai rencana dan pikiran yang bertautan satu sama lain di hotel itu!! Kelompok detektif cilik pergi berwisata ke pantai bersama Subaru Okiya dan… Rumi Wakasa!! Terjadi ketegangan di antara keduanya hingga… Dan Kid si Pencuri menyamar menjadi Azusa Enomoto!! Apa yang dilakukan oleh Conan dan Toru Amuro saat harus menghadapi situasi sulit itu!?\n\n            Detektif Conan yang juga dikenal sebagai Case Closed dan Detective Conan, adalah seri manga detektif Jepang yang ditulis dan diilustrasikan oleh Gosho Aoyama. Serial ini diserialisasikan dalam majalah manga shōnen Weekly Shōnen Sunday yang diterbitkan oleh Shogakukan sejak Januari 1994, dengan bab-babnya dikumpulkan dalam beberapa volume tankōbon. Karena masalah hukum dengan nama Detective Conan, rilisan bahasa Inggris dari Funimation dan Viz diubah namanya menjadi Case Closed. Serial ini bercerita mengenai detektif SMA bernama Shinichi Kudo (atau Jimmy Kudo dalam beberapa terjemahan bahasa Inggris) yang tubuhnya menyusut menjadi kecil ketika menyelidiki sebuah organisasi misterius dan umumnya memecahkan banyak kasus dengan meniru suara dari ayah teman masa kecilnya dan berbagai karakter lain.\n            \n            Komik ini menceritakan seorang detektif SMA yang terkadang bekerja dengan polisi untuk memecahkan kasus tertentu bernama Shinichi Kudo. Selama penyelidikan, ia disergap dan dilumpuhkan oleh anggota sindikat kejahatan yang dikenal sebagai Organisasi Hitam. Dalam upaya untuk membunuh detektif muda itu, mereka menelan paksa obat percobaan yang berbahaya. Namun, obat tersebut mengubahnya menjadi anak-anak daripada membunuhnya. Mengadopsi nama samaran Conan Edogawa dan merahasiakan identitas aslinya, Kudo tinggal bersama teman masa kecilnya Ran Mouri dan ayahnya Kogoro Mouri, yang merupakan seorang detektif swasta. Sepanjang seri tersebut, ia ikut serta dalam kasus yang ditangani oleh Kogoro. Meskipun demikian, setelah Kudo berhasil memecahkan kasus tersebut, ia akan menggunakan jarum bius yang tersembunyi dalam peralatan Prof. Agasa untuk membius Kogoro dan kemudian menggunakan pengubah suara yang dapat menirukan suaranya untuk mengungkapkan pemecahan kasus. Ia juga bersekolah di sekolah dasar setempat di mana ia berteman dengan beberapa teman sekelas yang membentuk Grup Detektif Cilik.', 'https://cdn.gramedia.com/uploads/picture_meta/2023/10/31/egxmfc5jkllsmadjjcklw2.jpg', NULL, '2023-12-27 21:00:39', '2023-12-27 21:00:39'),
(8, 'Atomic Habits: Perubahan Kecil yang Memberikan Hasil Luar Biasa', 'James Clear', 2, 'Pengembangan Diri', '102400', 'Atomic Habits: Perubahan Kecil yang Memberikan Hasil Luar Biasa adalah buku kategori self improvement karya James Clear. Pada umumnya, perubahan-perubahan kecil seringkali terkesan tak bermakna karena tidak langsung membawa perubahan nyata pada hidup suatu manusia. Jika diumpamakan sekeping koin tidak bisa menjadikan kaya, suatu perubahan positif seperti meditasi selama satu menit atau membaca buku satu halaman setiap hari mustahil menghasilkan perbedaan yang bisa terdeteksi. Namun hal tersebut tidak sejalan dengan pemikiran James Clear, ia merupakan seorang pakar dunia yang terkenal dengan \"habits\" atau kebiasaan. Ia tahu bahwa tiap perbaikan kecil bagaikan menambahkan pasir ke sisi positif timbangan dan akan menghasilkan perubahan nyata yang berasal dari efek gabungan ratusan bahkan ribuan keputusan kecil. Ia menamakan perubahan kecil yang membawa pengaruh yang luar biasa dengan nama atomic habits.\n\n            Sebuah sistem revolusioner untuk menjadi 1 persen lebih baik setiap hari. Orang mengira ketika Anda ingin mengubah hidup, Anda perlu memikirkan hal-hal besar. Namun pakar kebiasaan terkenal kelas dunia James Clear telah menemukan sebuah cara lain. Ia tahu bahwa perubahan nyata berasal dari efek gabungan ratusan keputusan kecil—dari mengerjakan dua push-up sehari, bangun lima menit lebih awal, sampai menahan sebentar hasrat untuk menelepon. Ia menyebut semua tadi atomic habits. Dalam buku terobosan ini, Clear pada hakikatnya mengungkapkan bagaimana perubahan perubahan sangat remeh ini dapat tumbuh menjadi hasil-hasil yang sangat mengubah hidup. Ia menyingkap beberapa trik sederhana dalam hidup kita (seni Menumpuk Kebiasaan yang terlupakan, kekuatan tak terduga Aturan Dua Menit, atau trik untuk masuk ke dalam Zona Goldilocks), dan menggali ke dalam teori psikologi dan neurosains paling baru untuk menerangkan mengapa semua itu penting. Dalam rangka itu, ia menceritakan kisah-kisah inspiratif para peraih medali emas Olimpiade, para CEO terkemuka, dan ilmuwan-ilmuwan istimewa yang telah menggunakan sains tentang kebiasaan-kebiasaan kecil untuk tetap produktif, tetap termotivasi, dan bahagia. Perubahan-perubahan kecil ini akan mendatangkan pengaruh revolusioner pada karier Anda, hubungan pribadi Anda, dan hidup Anda.', 'https://cdn.gramedia.com/uploads/items/Atomic_Habits_C-FRONT_HC_-_Mockup.png', NULL, '2023-12-27 21:00:39', '2023-12-27 21:00:39'),
(9, 'Journal of Joy', 'Sarah Amijo', 2, 'Pengembangan Diri', '100000', 'Step into a whimsical world where joy embraces lifes trials. This book will uncover your inner power to radiate joy, even in the face of challenges. From sipping warm peppermint tea to unleashing a mountain-top scream, let these magical moments ignite the spark of joy within.\n\n            This book reminds us that joy is a choice, a guiding light in our darkest hours. Share its wisdom with loved ones and together, lets paint the world with contagious joy. Choose joy and watch your heart take flight!', 'https://cdn.gramedia.com/uploads/picture_meta/2023/11/10/whr7hn47apdpso8wglhrde.jpg', NULL, '2023-12-27 21:00:39', '2023-12-27 21:00:39'),
(10, 'Spy X Family 10', 'Endo Tatsuya', 4, 'Petualangan', '36000', 'Spy X Family mengisahkan tentang seorang mata-mata yang demi melancarkan misi perdamaian harus membangun sebuah keluarga palsu. Master mata-mata Twilight tidak tertandingi dalam hal menyamar dalam misi berbahaya demi kemajuan dunia. Agen dengan sebutan nama “Twilight” atau “Senja”, yang merupakan mata-mata utama di Westalia Intelligence Services’ Eastern (W.I.S.E), hidup dengan kerap kali berganti-ganti identitas. Tugasnya itulah yang membuatnya harus melakukan berbagai kehidupan yang berbeda lewat berbagai penyamaran. Walaupun begitu, ia mendedikasikan hidupnya demi kedamaian dunia.\n\n            Suatu ketika dengan serba dadakan, Loid dan Yor sepakat untuk hadir sebagai ibu Anya dalam wawancara, dan Loid hadir menemani sebagai pasangan Yor di pesta. Berbagai kejadian pun membuat mereka akhirnya sepakat menjadi pasangan, orang tua Anya, dan membentuk keluarga. Di sinilah petualangan mereka dimulai.\n            \n            Sinopsis Buku:\n            Saat kecil, dia hidup dengan damai bersama orangtuanya. Main tentara-tentaraan dengan teman, juga bertengkar dengan ayahnya. Tak pernah terbayang, semua keseharian yang dia anggap wajar itu bisa hilang begitu saja.\n            \n            Di antara jenis buku lainnya, komik memang disukai oleh semua kalangan mulai dari anak kecil hingga orang dewasa. Alasan komik lebih disukai oleh banyak orang karena disajikan dengan penuh dengan gambar dan cerita yang mengasyikan sehingga mampu menghilangkan rasa bosan di kala waktu senggang.\n            \n            Komik seringkali dijadikan sebagai koleksi dan diburu oleh penggemarnya karena serinya yang cukup terkenal dan kepopulerannya terus berlanjut sampai saat ini. Dalam memilih jenis komik, ada baiknya perhatikan terlebih dahulu ringkasan cerita komik di sampul bagian belakang sehingga sesuai dengan preferensi pribadi pembaca.', 'https://cdn.gramedia.com/uploads/picture_meta/2023/10/18/4kq5mvezwr7dmbagujtvev.jpg', NULL, '2023-12-27 21:00:39', '2023-12-27 21:00:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirmPassword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `confirmPassword`, `google_id`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'gilmanarief', 'gilmanarief@gmail.com', NULL, '$2y$12$hROAuU.yk3VQRDlOgKqCzO2Mx31Ct1VNIbbifWQK2t9IjBSQ6j.Oi', '$2y$12$qIBvTq3zmp6kLmlny5YzfOq4qN.v3vRXHyrDWwtyew/JP0qlZ8eEe', '1234567890', NULL, '2023-12-27 21:00:39', '2023-12-27 21:00:39', 1),
(2, 'Gilman Arief', 'gilmanarief23@gmail.com', NULL, '$2y$12$3eGVsGfY/uIgQGhnKket1ufd//M6bO/MqUNSw.5TIGGfxg5tb2lva', NULL, '109498507628504512808', NULL, '2023-12-27 21:01:42', '2023-12-27 21:01:42', 0),
(3, 'Gilman Arief Firmansyah 213040037', 'gilman.213040037@mail.unpas.ac.id', NULL, '$2y$12$qCGoFKRaOvbFO60RVJ/.Huoh2m.Ccb3K43wWVRBPYltDv4zbdxdj.', NULL, '111923367039356436433', NULL, '2023-12-28 20:07:14', '2023-12-28 20:07:14', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_users_id_foreign` (`users_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
