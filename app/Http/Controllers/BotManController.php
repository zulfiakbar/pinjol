<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\Question;



class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function ($botman, $message) {
            $message = preg_replace('/[^a-zA-Z0-9_ -]/s', '', $message);
            $message = strtolower($message);
            if ($message == 'assalamualaikum') {
                $botman->reply("Waalaikumusalam");
            } elseif ($message == 'mau tanya dong') {
                $botman->reply(Question::create('Mau tanya apa ?')->addButtons([
                    Button::create('Apa kepanjangan dari pinjol?')->value('apa kepanjangan dari pinjol'),
                    Button::create('Apa yang dimaksud dengan pinjaman online?')->value('apa yang dimaksud dengan pinjaman online'),
                    Button::create('Apa saja jenis-jenis pinjaman online?')->value('apa saja jenis-jenis pinjaman online'),
                    Button::create('Apa dasar hukum pinjaman online?')->value('apa dasar hukum pinjaman online'),
                    Button::create('Apa perbedaan pinjaman online ilegal dan legal?')->value('apa perbedaan pinjaman online ilegal dan legal'),
                    Button::create('Bagaimana cara mengetahui antara legal dan ilegal?')->value('bagaimana cara mengetahui antara legal dan ilegal'),
                    Button::create('Pinjaman online apakah halal?')->value('pinjaman online apakah halal'),
                    Button::create('Apakah kalau pinjaman online termasuk riba?')->value('apakah kalau pinjaman online termasuk riba'),
                    Button::create('Mengapa pinjaman online haram?')->value('mengapa pinjaman online haram'),
                    Button::create('Bagaimana pinjaman online yang halal?')->value('bagaimana pinjaman online yang halal'),
                    Button::create('Apa itu pinjaman online syariah?')->value('apa itu pinjaman online syariah'),
                    Button::create('Apa manfaat pinjaman online syariah?')->value('apa manfaat pinjaman online syariah'),
                    Button::create('Apa pengganti bunga di sistem pinjaman syariah?')->value('apa pengganti bunga di sistem pinjaman syariah'),
                    Button::create('Apa dalil tentang pinjaman?')->value('apa dalil tentang pinjaman'),
                    Button::create('Apakah pinjol melanggar hukum?')->value('apakah pinjol melanggar hukum'),

                ]));
            } elseif ($message == 'apa kepanjangan dari pinjol') {
                $botman->reply("Pinjol adalah Pinjaman Online");
            } elseif ($message == 'apa yang dimaksud dengan pinjaman online') {
                $botman->reply("Pinjaman Online adalah fasilitas pinjaman uang oleh penyedia jasa keuangan yang beroperasi secara daring");
            } elseif ($message == 'apa saja jenis-jenis pinjaman online') {
                $botman->reply("Kredit tanpa Angunan (KTA), Peer-to-peer Leanding, dan Pinjaman multiguna");
            } elseif ($message == 'apa dasar hukum pinjaman online') {
                $botman->reply("Diatur pada Otoritas Jasa Keuangan (OJK) No.77/PJOK.01/2016 tentang layanan pinjam meminjam uang berbasis teknologi informasi");
            } elseif ($message == 'apa perbedaan pinjaman online ilegal dan legal') {
                $botman->reply("Pinjaman Online ilegal melakukan penagihan dengan cara-cara yang kasar cenderung mengancam, tidak manusiawi, dan bertentangan dengan hukum. Sementara yang legal, wajib mengikuti sertifikasi tenaga penagih yang dilakukan oleh AFPI. ");
            } elseif ($message == 'bagaimana cara mengetahui antara legal dan ilegal') {
                $botman->reply("Pinjaman online Legal telah terdaftar di Otoritas Jasa Keuangan (OJK). Sementara yang Ilegal tidak terdaftar");
            } elseif ($message == 'pinjaman online apakah halal') {
                $botman->reply("Ketua Majelis Ulama Indonesia (MUI) Asrorun Niam Sholeh memutuskan fatwa haram bagi pinjaman online (pinjol) maupun pinjaman offline yang mengandung riba. Fatwa haram itu disampaikan Asrorun dalam Forum Ijtima Ulama MUI, Kamis (11/11) lalu.");
            } elseif ($message == 'apakah kalau pinjaman online termasuk riba') {
                $botman->reply("Layanan kredit baik online maupun offline yang mengandung riba hukumnya haram, meskipun dilakukan di atas dasar kerelaan");
            } elseif ($message == 'mengapa pinjaman online haram') {
                $botman->reply("Dilansir Antara pada Kamis (11/11/2021), disebutkan fatwa haram tersebut dikarenakan 3 alasan, yaitu terdapat unsur riba, memberikan ancaman, dan membuka rahasia atau aib seseorang kepada rekan orang yang berutang.");
            } elseif ($message == 'bagaimana pinjaman online yang halal') {
                $botman->reply("Pinjaman online yang halal adalah pinjaman online yang berbasis syariah, yaitu dasar hukum dan operasionalnya sesuai dengan syariat islam. Tentunya pinjaman online yang halal bebas dari bunga atau riba");
            } elseif ($message == 'apa itu pinjaman online syariah') {
                $botman->reply("Pinjaman online syariah adalah pinjaman dana yang operasional dan dasar hukumnya sesuai dengan syariat islam dan terbebas dari bunga atau riba");
            } elseif ($message == 'apa manfaat pinjaman online syariah') {
                $botman->reply("manfaatnya yaitu proses dan sistemnya yang sesuai dengan syariat serta hukum Islam. Jadi, Anda tak perlu takut jika dana yang Anda terima riba atau melanggar hukum Islam.");
            } elseif ($message == 'apa pengganti bunga di sistem pinjaman syariah') {
                $botman->reply("Lembaga keuangan syariah tidak menerapkan sistem bunga dalam aktivitas ekonomi dan transaksinya. Bunga dianggap bagian dari riba dan haram dalam agama Islam. Sebagai gantinya , lembaga keuangan syariah yang berlandaskan syariah ini menerapkan sistem bagi hasil atau nisbah yang menurut Islam sah untuk dilakukan.");
            } elseif ($message == 'apa dalil tentang pinjaman') {
                $botman->reply("Terdapat dalam hadis (Syaikh Ahmad bin Umar Asy-Syathiri, Syarh al-Yaqut an-Nafiis, II/22), yang artinya :Yang dipertimbangkan dalam akad-akad adalah subtansinya bukan bentuk lafadznya, dan jual beli via telpon, telegram dan sejenisnya telah menjadi alternatif yang utama dan dipraktekkan.");
            } elseif ($message == 'apakah pinjol melanggar hukum') {
                $botman->reply("Pinjol ilegal dinilai melanggar ketentuan pidana. Sehingga baik secara perdata maupun pidana, semua perjanjian utang pinjol ilegal dianggap tidak sah di mata hukum Indonesia");
            } else {
                $botman->reply("Pertanyaan anda tidak di daftar");
            }
        });

        $botman->listen();
    }
}
