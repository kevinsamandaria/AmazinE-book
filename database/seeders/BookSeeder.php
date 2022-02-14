<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('book')->insert([
            [
                'title'=>'Dune',
                'author'=>'Frank Herbert',
                'description'=>'Set on the desert planet Arrakis, Dune is the story of the boy Paul Atreides, heir to a noble family tasked with ruling an inhospitable world where the only thing of value is the “spice” melange, a drug capable of extending life and enhancing consciousness. Coveted across the known universe, melange is a prize worth killing for...

                When House Atreides is betrayed, the destruction of Paul’s family will set the boy on a journey toward a destiny greater than he could ever have imagined. And as he evolves into the mysterious man known as Muad’Dib, he will bring to fruition humankind’s most ancient and unattainable dream.'
            ],
            [
                'title'=>'Frankenstein',
                'author'=>'Mary Shelley',
                'description'=>'Mary Shelley seminal novel of the scientist whose creation becomes a monster

                This edition is the original 1818 text, which preserves the hard-hitting and politically charged aspects of Shelley original writing, as well as her unflinching wit and strong female voice. This edition also includes a new introduction and suggestions for further reading by author and Shelley expert Charlotte Gordon, literary excerpts and reviews selected by Gordon and a chronology and essay by preeminent Shelley scholar Charles E. Robinson.'
            ],
            [
                'title'=>'The Lord Of The Rings',
                'author'=>'J. R. R. Tolkien',
                'description'=>'In ancient times the Rings of Power were crafted by the Elven-smiths, and Sauron, the Dark Lord, forged the One Ring, filling it with his own power so that he could rule all others. But the One Ring was taken from him, and though he sought it throughout Middle-earth, it remained lost to him. After many ages it fell by chance into the hands of the hobbit Bilbo Baggins.'
            ],
            [
                'title'=>'Marmut Merah Jambu',
                'author'=>'Raditya Dika',
                'description'=>'... Momennya lagi pas banget, pikir gue. Seperti yang Ara tadi anjurkan lewat telepon, ini adalah saatnya gue bilang ke Ina kalau gue sangat menikmati malam ini. ‘Tau gak sih, Na,’ kata gue sambil menyetir, memberanikan diri untuk bicara. ‘Gue seneng banget hari ini.’
                ‘Seneng kenapa?’ tanya Ina.
                ‘Seneng, soalnya,’ kata gue, berhenti bicara sebentar dan menengok ke kiri untuk melihat muka Ina. Gue masang muka sok ganteng. Gue natap mukanya dengan jelas, memasang mata nanar, berkata dengan sungguh-sungguh, ‘Seneng... soalnya... hari ini akhirnya... gue bisa pergi sama-’
                ‘AWAS!!!!’ jerit Ina memecahkan suasana.

                BRAK! Mobil gue naik ke atas trotoar. Mobil masih melaju kencang, dan di depan ada pohon gede'
            ],
            [
                'title'=>'Si Putih',
                'author'=>'Tere Liye',
                'description'=>'Bagaimana jika hewan kesayangan kalian ternyata hewan dengan kekuatan terbesar di dunia paralel? Bagaimana jika hewan yang terlihat imut, menggemaskan, ternyata bisa menjadi salah satu petarung paling hebat? Kali ini kita akan bertualang di klan baru, dengan tokoh-tokoh baru. Termasuk mengetahui bahwa pandemi yang menyusahkan penduduk juga terjadi di klan-klan jauh. Tapi ingatlah selalu, setiap ada kesusahan, selalu muncul hal-hal menarik yang positif. Kisah ini tentang si Putih, kucing kesayangan Raib. Masa lalu si Putih tidak kalah menarik, sebelum akhirnya kucing itu diletakkan di depan pintu rumah sebagai hadiah ulang tahun Raib. Buku ini adalah buku ke-10 dari serial BUMI.'
            ],
            [
                'title'=>'Laskar Pelangi',
                'author'=>'Andrea Hirata',
                'description'=>'Begitu banyak hal menakjubkan yang terjadi dalam masa kecil para anggota Laskar Pelangi. Sebelas orang anak Melayu Belitong yang luar biasa ini tak menyerah walau keadaan tak bersimpati pada mereka. Tengoklah Lintang, seorang kuli kopra cilik yang genius dan dengan senang hati bersepeda 80 kilometer pulang pergi untuk memuaskan dahaganya akan ilmu—bahkan terkadang hanya untuk menyanyikan Padamu Negeri di akhir jam sekolah. Atau Mahar, seorang pesuruh tukang parut kelapa sekaligus seniman dadakan yang imajinatif, tak logis, kreatif, dan sering diremehkan sahabat-sahabatnya, namun berhasil mengangkat derajat sekolah kampung mereka dalam karnaval 17 Agustus.'
            ],
            [
                'title'=>'Dilan',
                'author'=>'Pidi Baiq',
                'description'=>'"Milea, kamu cantik, tapi aku belum mencintaimu. Enggak tahu kalau sore. Tunggu aja" (Dilan 1990)

                "Milea, jangan pernah bilang ke aku ada yang menyakitimu, nanti, besoknya, orang itu akan hilang." (Dilan 1990)

                "Cinta sejati adalah kenyamanan, kepercayaan, dan dukungan. Kalau kamu tidak setuju, aku tidak peduli." (Milea 1990) '
            ],
            [
                'title'=>'Harry Potter And the Philosopher Stone',
                'author'=>'J.K. Rowling',
                'description'=>'Harry Potter‘s life is miserable. His parents are dead and he‘s stuck with his heartless relatives, who force him to live in a tiny closet under the stairs. But his fortune changes when he receives a letter that tells him the truth about himself: he‘s a wizard. A mysterious visitor rescues him from his relatives and takes him to his new home, Hogwarts School of Witchcraft and Wizardry.'
            ],
            [
                'title'=>'The Hunger Games',
                'author'=>'Suzanne Collins',
                'description'=>'In the ruins of a place once known as North America lies the nation of Panem, a shining Capitol surrounded by twelve outlying districts. The Capitol is harsh and cruel and keeps the districts in line by forcing them all to send one boy and one girl between the ages of twelve and eighteen to participate in the annual Hunger Games, a fight to the death on live TV.'
            ],
            [
                'title'=>'Master Laravel For Beginners: Get From Zero To Proficiency In The Laravel Framework: Laravel Book',
                'author'=>'Jeromy Minasian',
                'description'=>'Buy this if you want to learn about Laravel.'
            ],
            [
                'title'=>'Beginning Programming for Dummies',
                'author'=>'Wallace Wang',
                'description'=>'Do you think the programmers who work at your office are magical wizards who hold special powers that manipulate your computer? Believe it or not, anyone can learn how to write programs, and it doesn’t take a higher math and science education to start.
                Beginning Programming for Dummies shows you how computer programming works without all the technical details or hard programming language. It explores the common parts of every computer programming language and how to write for multiple platforms like Windows, Mac OS X, or Linux.'
            ],
            [
                'title'=>'Learn Android Studio 3 with Kotlin: Efficient Android App Development',
                'author'=>'Ted Hagos',
                'description'=>'Build Android apps using the popular and efficient Android Studio 3 suite of tools, an integrated development environment (IDE) with which Android developers can now use the Kotlin programming language. With this book, you’ll learn the latest and most productive tools in the Android tools ecosystem, ensuring quick Android app development and minimal effort on your part.  Along the way, you’ll use Android Studio to develop apps tier by tier through practical examples. These examples cover core Android topics such as Activities, Intents, BroadcastReceivers, Services and AsyncTask.'
            ],
            [
                'title'=>'The Shining',
                'author'=>'Stephen King',
                'description'=>'Jack Torrance`s new job at the Overlook Hotel is the perfect chance for a fresh start. As the off-season caretaker at the atmospheric old hotel, he`ll have plenty of time to spend reconnecting with his family and working on his writing. But as the harsh winter weather sets in, the idyllic location feels ever more remote...and more sinister. And the only one to notice the strange and terrible forces gathering around the Overlook is Danny Torrance, a uniquely gifted five-year-old.'
            ],
            [
                'title'=>'The Christmast Bell',
                'author'=>'L.A Detwiler',
                'description'=>'When Candace Mills, 26, heads home for the holidays to visit her mother and ailing grandmother, she`s expecting a peaceful, dull Christmas. She has no idea, though, that a single Christmas ornament is about to send her into a whirling chasm of evil.

                It starts with the Christmas bell, scratched and worn in one of Grandma Anne`s boxes in the attic. Once they put it on the tree, Grandma Anne starts to say terrifying things and act strangely. Candace and her mother assume it`s her dementia talking—until they start to have dangerous encounters with a fiendish being.

                As the secrets of Anne`s past involving her twin sister rise to the surface, the women face sinister horrors from a dark force looking for revenge.'
            ]
        ]);
    }
}
