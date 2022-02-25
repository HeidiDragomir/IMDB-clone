<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       

        Category::truncate();
        Movie::where('id', '>', 0)->delete();

        User::create([
            'username' => 'Filip',
            'name' => 'Filip',
            'email' => 'filip@test.se',
            'password' => 'test1234'
        ]);

        User::create([
            'username' => 'Cemil',
            'name' => 'Cemil',
            'email' => 'cemil@test.se',
            'password' => 'test1234'
        ]);

        User::create([
            'username' => 'Heidi',
            'name' => 'Heidi',
            'email' => 'heidi@test.se',
            'password' => 'test1234'
        ]);

        User::create([
            'username' => 'Henrik',
            'name' => 'Henrik',
            'email' => 'henrik@test.se',
            'password' => 'test1234'
        ]);

        User::create([
            'username' => 'Ahmet',
            'name' => 'Ahmet',
            'email' => 'ahmet@test.se',
            'password' => 'test1234'
        ]);

        User::create([
            'username' => 'Alexander',
            'name' => 'Alexander',
            'email' => 'alexander@test.se',
            'password' => 'test1234'
        ]);

        User::create([
            'username' => 'Sebbe',
            'name' => 'Sebbe',
            'email' => 'sebbe@test.se',
            'password' => 'test1234'
        ]);

        $action = Category::create([
            'name' => 'action',
            'slug' => 'action'
        ]);

        $thriller = Category::create([
            'name' => 'thriller',
            'slug' => 'thriller'
        ]);

        $drama = Category::create([
            'name' => 'drama',
            'slug' => 'drama'
        ]);

        $family = Category::create([
            'name' => 'family',
            'slug' => 'family'
        ]);

        $horror = Category::create([
            'name' => 'horror',
            'slug' => 'horror'
        ]);

        $romantic = Category::create([
            'name' => 'romantic',
            'slug' => 'romantic'
        ]);

        $comedy = Category::create([
            'name' => 'comedy',
            'slug' => 'comedy'
        ]);

        Movie::create([
            'category_id' => $action->id,
            'slug' => 'spider-man-no-way-home',
            'title' => 'Spider-Man: No Way Home',
            'year' => 2021,
            'body' => 'Peter Parker is unmasked and no longer able to separate his normal life from the high-stakes of being a super-hero. When he asks for help from Doctor Strange the stakes become even more dangerous, forcing him to discover what it truly means to be Spider-Man.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/1g0dhYtq4irTY1GPXvft6k4YLjm.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/iQFcwSGbZXMkeyKrxbPnwnRo5fl.jpg',
            'is_carousel' => 1
        ]);

        Movie::create([
            'category_id' => $horror->id,
            'slug' => 'the-requin',
            'title' => 'The Requin',
            'year' => 2022,
            'body' => 'A couple on a romantic getaway find themselves stranded at sea when a tropical storm sweeps away their villa. In order to survive, they are forced to fight the elements, while sharks circle below.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/i0z8g2VRZP3dhVvvSMilbOZMKqR.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/eVSa4TpyXbOdk9fXSD6OcORJGtv.jpg',
            'is_carousel' => 1
        ]);

        Movie::create([
            'category_id' => $family->id,
            'title' => 'The Ice Age Adventures of Buck Wild',
            'slug' => 'the-ice-age-adventures-of-buck-wild',
            'year' => 2022,
            'body' => 'The fearless one-eyed weasel Buck teams up with mischievous possum brothers Crash & Eddie as they head off on a new adventure into Buck\'s home: The Dinosaur World.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/zzXFM4FKDG7l1ufrAkwQYv2xvnh.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/eG0oOQVsniPAuecPzDD1B1gnYWy.jpg'
        ]);

        Movie::create([
            'category_id' => $action->id,
            'title' => 'The 355',
            'slug' => 'the-355',
            'year' => 2022,
            'body' => 'A group of top female agents from American, British, Chinese, Columbian and German government agencies are drawn together to try and stop an organization from acquiring a deadly weapon to send the world into chaos.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/wZ2cQ4moYnIrJVaave1KUqH33Gc.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/8pgKccb5PfE1kWB9qqiXJem83VC.jpg',
            'is_carousel' => 1
        ]);

        Movie::create([
            'category_id' => $horror->id,
            'slug' => 'the-jack-in-the-box-awakening',
            'title' => 'The Jack in the Box: Awakening',
            'year' => 2022,
            'body' => 'When a vintage Jack-in-the-box is opened by a dying woman, she enters into a deal with the demon within that would see her illness cured in return for helping it claim six innocent victims.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/3Ib8vlWTrAKRrTWUrTrZPOMW4jp.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/xHRabofjmMGoIV3mb6xgy4nwOcS.jpg',
            'is_carousel' => 1
        ]);

        Movie::create([
            'category_id' => $family->id,
            'slug' => 'sing-2',
            'title' => 'Sing 2',
            'year' => 2021,
            'body' => 'Buster and his new cast now have their sights set on debuting a new show at the Crystal Tower Theater in glamorous Redshore City. But with no connections, he and his singers must sneak into the Crystal Entertainment offices, run by the ruthless wolf mogul Jimmy Crystal, where the gang pitches the ridiculous idea of casting the lion rock legend Clay Calloway in their show. Buster must embark on a quest to find the now-isolated Clay and persuade him to return to the stage.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/aWeKITRFbbwY8txG5uCj4rMCfSP.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/tutaKitJJIaqZPyMz7rxrhb4Yxm.jpg'
        ]);

        Movie::create([
            'category_id' => $romantic->id,
            'slug' => 'through-my-window',
            'title' => 'Through My Window',
            'year' => 2022,
            'body' => 'Raquel\'s longtime crush on her next-door neighbor turns into something more when he starts developing feelings for her, despite his family\'s objections.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/6gg7fvKc1ZxP9yCczweSxIGYp4S.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/4rsomWxlqnHt3muGYK06auhOib6.jpg'
        ]);

        Movie::create([
            'category_id' => $action->id,
            'slug' => 'the-matrix-resurrections',
            'title' => 'The Matrix Resurrections',
            'year' => 2021,
            'body' => 'Plagued by strange memories, Neo\'s life takes an unexpected turn when he finds himself back inside the Matrix.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/8c4a8kE7PizaGQQnditMmI1xbRp.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/eNI7PtK6DEYgZmHWP9gQNuff8pv.jpg',
            'is_carousel' => 1
        ]);

        Movie::create([
            'category_id' => $action->id,
            'slug' => 'last-man-down',
            'title' => 'Last Man Down',
            'year' => 2021,
            'body' => 'After civilization succumbs to a deadly pandemic and his wife is murdered, a special forces soldier abandons his duty and becomes a hermit in the Nordic wilderness. Years later, a wounded woman appears on his doorstep. She\'s escaped from a lab and her pursuers believe her blood is the key to a worldwide cure. He\'s hesitant to get involved, but all doubts are cast aside when he discovers her pursuer is none other than Commander Stone, the man that murdered his wife some years ago.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/4B7liCxNCZIZGONmAMkCnxVlZQV.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/t4To8feUSysyBs4tlBAbXIrKlCv.jpg',
            'is_carousel' => 1
        ]);

        Movie::create([
            'category_id' => $family->id,
            'slug' => 'tom-and-jerry-cowboy-up',
            'title' => 'Tom and Jerry: Cowboy Up!',
            'year' => 2022,
            'body' => 'This time, the rivals team up to help a cowgirl and her brother save their homestead from a greedy land-grabber, and they\'re going to need some help! Jerry\'s three precocious nephews are all ready for action, and Tom is rounding up a posse of prairie dogs. But can a ragtag band of varmints defeat a deceitful desperado determined to deceive a damsel in distress? No matter what happens with Tom and Jerry in the saddle, it\'ll be a rootin\' tootin\' good time!',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/muIaHotSaSUQr0KZCIJOYQEe7y2.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/q1NXVYTqSStNQsnKrCvtU6NPzEk.jpg'
        ]);

        Movie::create([
            'category_id' => $thriller->id,
            'slug' => 'mother-android',
            'title' => 'Mother/Android',
            'year' => 2021,
            'body' => 'Georgia and her boyfriend Sam go on a treacherous journey to escape their country, which is caught in an unexpected war with artificial intelligence. Days away from the arrival of their first child, the couple must face No Man\'s Land—a stronghold of the android uprising—in hopes of reaching safety before giving birth.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/rO3nV9d1wzHEWsC7xgwxotjZQpM.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/AmLpWYm9R3Ur2FLPgj5CH3wR8wp.jpg'
        ]);

        Movie::create([
            'category_id' => $drama->id,
            'slug' => 'house-of-gucci',
            'title' => 'House of Gucci',
            'year' => 2021,
            'body' => 'When Patrizia Reggiani, an outsider from humble beginnings, marries into the Gucci family, her unbridled ambition begins to unravel the family legacy and triggers a reckless spiral of betrayal, decadence, revenge, and ultimately…murder.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/vHla3Ej2m53rNmvmYkzvennLrKn.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/jdLsmpqmP1wTdFUPtmxMnYgoifT.jpg',
            'is_carousel' => 1
        ]);

        Movie::create([
            'category_id' => $action->id,
            'slug' => 'uncharted',
            'title' => 'Uncharted',
            'year' => 2022,
            'body' => 'A young street-smart, Nathan Drake and his wisecracking partner Victor "Sully" Sullivan embark on a dangerous pursuit of "the greatest treasure never found" while also tracking clues that may lead to Nathan\'s long-lost brother.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/nMO3QWa6liTwNWhVICkjzaYfPoH.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/oUoFM0f4YFW2jw7AymxUXYvGv7S.jpg',
            'is_carousel' => 1
        ]);

        Movie::create([
            'category_id' => $action->id,
            'slug' => 'mortal-kombat',
            'title' => 'Mortal Kombat',
            'year' => 2021,
            'body' => 'Washed-up MMA fighter Cole Young, unaware of his heritage, and hunted by Emperor Shang Tsung\'s best warrior, Sub-Zero, seeks out and trains with Earth\'s greatest champions as he prepares to stand against the enemies of Outworld in a high stakes battle for the universe.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/nkayOAUBUu4mMvyNf9iHSUiPjF1.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/9yBVqNruk6Ykrwc32qrK2TIE5xw.jpg',
            'is_carousel' => 1
        ]);

        Movie::create([
            'category_id' => $comedy->id,
            'slug' => 'free-guy',
            'title' => 'Free Guy',
            'year' => 2021,
            'body' => 'A bank teller called Guy realizes he is a background character in an open world video game called Free City that will soon go offline.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/xmbU4JTUm8rsdtn7Y3Fcm30GpeT.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/8Y43POKjjKDGI9MH89NW0NAzzp8.jpg'
        ]);

        Movie::create([
            'category_id' => $family->id,
            'slug' => 'the-boss-baby-family-business',
            'title' => 'The Boss Baby: Family Business',
            'year' => 2021,
            'body' => 'The Templeton brothers — Tim and his Boss Baby little bro Ted — have become adults and drifted away from each other. But a new boss baby with a cutting-edge approach and a can-do attitude is about to bring them together again … and inspire a new family business.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/kv2Qk9MKFFQo4WQPaYta599HkJP.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/pxOiKwRvNp3zFOiuwpYpzlbmEgC.jpg'
        ]);

        Movie::create([
            'category_id' => $action->id,
            'slug' => 'fortress',
            'title' => 'Fortress',
            'year' => 2021,
            'body' => 'The story revolves around a top-secret resort for retired U.S. intelligence officers. A group of criminals led by Balzary breach the compound, hellbent on revenge on Robert, forcing the retired officer and his son to save the day.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/vQxtoPJVfpHgL7DCg9hQFZKDWJa.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/1BqX34aJS5J8PefVnQSfQIEPfkl.jpg'
        ]);

        Movie::create([
            'category_id' => $horror->id,
            'slug' => 'dark-spell',
            'title' => 'Dark Spell',
            'year' => 2021,
            'body' => 'Terror strikes when a heartbroken woman uses black magic to get her husband back.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/2AbGdSGlU6CpiV3lswHUgE5CdAA.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/o2OSpKzXuB1edCDyVC2MXAxXwyJ.jpg'
        ]);

        Movie::create([
            'category_id' => $drama->id,
            'slug' => 'finch',
            'title' => 'Finch',
            'year' => 2021,
            'body' => 'On a post-apocalyptic Earth, a robot, built to protect the life of his dying creator\'s beloved dog, learns about life, love, friendship, and what it means to be human.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/jKuDyqx7jrjiR9cDzB5pxzhJAdv.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/oE6bhqqVFyIECtBzqIuvh6JdaB5.jpg'
        ]);

        Movie::create([
            'category_id' => $action->id,
            'slug' => 'the-last-warrior-root-of-evil',
            'title' => 'The Last Warrior: Root of Evil',
            'year' => 2021,
            'body' => 'Peace and tranquility have set in Belogorie. The evil was defeated and Ivan is now enjoying his well-deserved fame. He is surrounded by his family, friends and small wonders from the modern world that help him lead a comfortable life. Luckily, he has his Magic Sword to cut a gap between the worlds to get some supplies quite regularly. But when an ancient evil rises and the existence of the magic world is put to danger, Ivan has to team up with his old friends and his new rivals. They will set out on a long journey beyond the known world to find a way to defeat the enemies and to return peace to Belogorie.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/4qE7mvUYGY5epfcgeJpM6EfHgq5.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/dIibeeq4QMay5bTJ2vjr72IFFRo.jpg'
        ]);

        Movie::create([
            'category_id' => $romantic->id,
            'slug' => 'le-fabuleux-destin-d-am-lie-poulain',
            'title' => 'Amelie',
            'year' => 2001,
            'body' => 'At a tiny Parisian café, the adorable yet painfully shy Amélie accidentally discovers a gift for helping others. Soon Amelie is spending her days as a matchmaker, guardian angel, and all-around do-gooder. But when she bumps into a handsome stranger, will she find the courage to become the star of her very own love story?',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/oTKduWL2tpIKEmkAqF4mFEAWAsv.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/9TEUJy5aRP7LaM1LKTfcxVK34JK.jpg'
        ]);

        Movie::create([
            'category_id' => $action->id,
            'slug' => 'wrath-of-man',
            'title' => 'Wrath of Man ',
            'year' => 2021,
            'body' => 'A cold and mysterious new security guard for a Los Angeles cash truck company surprises his co-workers when he unleashes precision skills during a heist. The crew is left wondering who he is and where he came from. Soon, the marksman\'s ultimate motive becomes clear as he takes dramatic and irrevocable steps to settle a score.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/M7SUK85sKjaStg4TKhlAVyGlz3.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/70AV2Xx5FQYj20labp0EGdbjI6E.jpg',
            'is_carousel' => 1
        ]);

        Movie::create([
            'category_id' => $action->id,
            'slug' => 'the-lord-of-the-rings-the-fellowship-of-the-ring',
            'title' => 'The Lord of the Rings: The Fellowship of the Ring',
            'year' => 2001,
            'body' => 'Young hobbit Frodo Baggins, after inheriting a mysterious ring from his uncle Bilbo, must leave his home in order to keep it from falling into the hands of its evil creator. Along the way, a fellowship is formed to protect the ringbearer and make sure that the ring arrives at its final destination: Mt. Doom, the only place where it can be destroyed.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/6oom5QYQ2yQTMJIbnvbkBL9cHo6.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1066_and_h600_bestv2/vRQnzOn4HjIMX4LBq9nHhFXbsSu.jpg'
        ]);

        Movie::create([
            'category_id' => $action->id,
            'slug' => 'the-lord-of-the-rings-the-two-towers',
            'title' => 'The Lord of the Rings: The Two Towers',
            'year' => 2002,
            'body' => 'Frodo and Sam are trekking to Mordor to destroy the One Ring of Power while Gimli, Legolas and Aragorn search for the orc-captured Merry and Pippin. All along, nefarious wizard Saruman awaits the Fellowship members at the Orthanc Tower in Isengard.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/5VTN0pR8gcqV3EPUHHfMGnJYN9L.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1066_and_h600_bestv2/7tNTPZMb13W0AhkcuoL6myRrNRr.jpg'
        ]);
    
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'the-lord-of-the-rings-the-return-of-the-king',
            'title' => 'The Lord of the Rings: The Return of the King',
            'year' => 2003,
            'body' => 'Aragorn is revealed as the heir to the ancient kings as he, Gandalf and the other members of the broken fellowship struggle to save Gondor from Sauron\'s forces. Meanwhile, Frodo and Sam take the ring closer to the heart of Mordor, the dark lord\'s realm.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/rCzpDGLbOoPwLjy3OAm5NUPOTrC.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1066_and_h600_bestv2/lXhgCODAbBXL5buk9yEmTpOoOgR.jpg'
        ]);
    
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'retfaerdighedens-ryttere',
            'title' => 'Riders of Justice',
            'year' => 2020,
            'body' => 'Markus returns home to care for his daughter when his wife dies in a tragic train accident. However, when a survivor of the wreck surfaces and claims foul play, Markus suspects his wife was murdered and embarks on a mission to find those responsible.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/sshNnwmQLk720iBQ0dZg3GVGKfK.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/7XZsVVnqTsMJXg3J4CHzeV2Lro9.jpg',
            'is_carousel' => 1
        ]);
    
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'star-wars',
            'title' => 'Star Wars',
            'year' => 1977,
            'body' => 'Princess Leia is captured and held hostage by the evil Imperial forces in their effort to take over the galactic Empire. Venturesome Luke Skywalker and dashing captain Han Solo team together with the loveable robot duo R2-D2 and C-3PO to rescue the beautiful princess and restore peace and justice in the Empire.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/6FfCtAuVAW8XJjZ7eWeLibRLWTw.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1066_and_h600_bestv2/zqkmTXzjkAgXmEWLRsY4UpTWCeo.jpg'
        ]);
    
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'return-of-the-jedi',
            'title' => 'Return of the Jedi ',
            'year' => 1983,
            'body' => 'Luke Skywalker leads a mission to rescue his friend Han Solo from the clutches of Jabba the Hutt, while the Emperor seeks to destroy the Rebellion once and for all with a second dreaded Death Star.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/mDCBQNhR6R0PVFucJl0O4Hp5klZ.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/iP2tEA2A77qhbhRfcFkiD6WFOqH.jpg'
        ]);
    
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'the-empire-strikes-back',
            'title' => 'The Empire Strikes Back',
            'year' => 1980,
            'body' => 'The epic saga continues as Luke Skywalker, in hopes of defeating the evil Galactic Empire, learns the ways of the Jedi from aging master Yoda. But Darth Vader is more determined than ever to capture Luke. Meanwhile, rebel leader Princess Leia, cocky Han Solo, Chewbacca, and droids C-3PO and R2-D2 are thrown into various stages of capture, betrayal and despair.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/7BuH8itoSrLExs2YZSsM01Qk2no.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/dMZxEdrWIzUmUoOz2zvmFuutbj7.jpg'
        ]);
    
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'star-wars-episode-i-the-phantom-menace',
            'title' => 'Star Wars: Episode I - The Phantom Menace',
            'year' => 1999,
            'body' => 'Anakin Skywalker, a young slave strong with the Force, is discovered on Tatooine. Meanwhile, the evil Sith have returned, enacting their plot for revenge against the Jedi.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/6wkfovpn7Eq8dYNKaG5PY3q2oq6.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/fpEYSEpbPAQMppYRyRA66EZoWCX.jpg'
        ]);
    
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'star-wars-episode-ii-attack-of-the-clones',
            'title' => 'Star Wars: Episode II - Attack of the Clones',
            'year' => 2002,
            'body' => 'Following an assassination attempt on Senator Padmé Amidala, Jedi Knights Anakin Skywalker and Obi-Wan Kenobi investigate a mysterious plot that could change the galaxy forever.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/oZNPzxqM2s5DyVWab09NTQScDQt.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1066_and_h600_bestv2/oijmHHYUb4F5owEqaBfwVmaOGrQ.jpg'
        ]);
    
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'star-wars-episode-iii-revenge-of-the-sith',
            'title' => 'Star Wars: Episode III - Revenge of the Sith',
            'year' => 2005,
            'body' => 'The evil Darth Sidious enacts his final plan for unlimited power -- and the heroic Jedi Anakin Skywalker must choose a side.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/xfSAoBEm9MNBjmlNcDYLvLSMlnq.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1066_and_h600_bestv2/uuh6uNEGqLCU7wQ2L4xMqYv0DPr.jpg'
        ]);
    
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'warcraft',
            'title' => 'Warcraft',
            'year' => 2016,
            'body' => 'The peaceful realm of Azeroth stands on the brink of war as its civilization faces a fearsome race of invaders: orc warriors fleeing their dying home to colonize another. As a portal opens to connect the two worlds, one army faces destruction and the other faces extinction. From opposing sides, two heroes are set on a collision course that will decide the fate of their family, their people, and their home.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/nZIIOs06YigBnvmlJ2hxZeA8eTO.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1066_and_h600_bestv2/aTGvZ3F8QnAD8cPpJRaaqRRxFK6.jpg'
        ]);
    
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'guns-akimbo',
            'title' => 'Guns Akimbo',
            'year' => 2020,
            'body' => 'An ordinary guy suddenly finds himself forced to fight a gladiator-like battle for a dark website that streams the violence for viewers. Miles must fight heavily armed Nix and also save his kidnapped ex-girlfriend.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/2kNnf7BwRCEm4bcFkdiE0T4U25s.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1066_and_h600_bestv2/fssCO59bqU5f0zngeYKex0g1vyb.jpg'
        ]);
    
        Movie::create([
            'category_id' => $comedy->id,
            'slug' => 'the-lego-movie',
            'title' => 'The Lego Movie',
            'year' => 2014,
            'body' => 'An ordinary Lego mini-figure, mistakenly thought to be the extraordinary MasterBuilder, is recruited to join a quest to stop an evil Lego tyrant from gluing the universe together.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/lbctonEnewCYZ4FYoTZhs8cidAl.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/9531Jp42H0ppRXjkxxgCulnQNZp.jpg'
        ]);
    
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'star-wars-the-force-awakens',
            'title' => 'Star Wars: The Force Awakens',
            'year' => 2015,
            'body' => 'Thirty years after defeating the Galactic Empire, Han Solo and his allies face a new threat from the evil Kylo Ren and his army of Stormtroopers.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/wqnLdwVXoBjKibFRR5U3y0aDUhs.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/k6EOrckWFuz7I4z4wiRwz8zsj4H.jpg'
        ]);
    
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'rogue-one-a-star-wars-story',
            'title' => 'Rogue One: A Star Wars Story',
            'year' => 2016,
            'body' => 'A rogue band of resistance fighters unite for a mission to steal the Death Star plans and bring a new hope to the galaxy.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/i0yw1mFbB7sNGHCs7EXZPzFkdA1.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/6t8ES1d12OzWyCGxBeDYLHoaDrT.jpg'
        ]);
    
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'star-wars-the-last-jedi',
            'title' => 'Star Wars: The Last Jedi',
            'year' => 2017,
            'body' => 'Rey develops her newly discovered abilities with the guidance of Luke Skywalker, who is unsettled by the strength of her powers. Meanwhile, the Resistance prepares to do battle with the First Order.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/kOVEVeg59E0wsnXmF9nrh6OmWII.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/5Iw7zQTHVRBOYpA0V6z0yypOPZh.jpg'
        ]);
    
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'star-wars-the-rise-of-skywalker',
            'title' => 'Star Wars: The Rise of Skywalker',
            'year' => 2019,
            'body' => 'The surviving Resistance faces the First Order once again as the journey of Rey, Finn and Poe Dameron continues. With the power and knowledge of generations behind them, the final battle begins.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/db32LaOibwEliAmSL2jjDF6oDdj.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/SPkEiZGxq5aHWQ2Zw7AITwSEo2.jpg'
        ]);
    
        Movie::create([
            'category_id' => $thriller->id,
            'slug' => 'joker',
            'title' => 'Joker',
            'year' => 2019,
            'body' => 'During the 1980s, a failed stand-up comedian is driven insane and turns to a life of crime and chaos in Gotham City while becoming an infamous psychopathic crime figure.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/udDclJoHjfjb8Ekgsd4FDteOkCU.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/n6bUvigpRFqSwmPp1m2YADdbRBc.jpg'
        ]);
    
        Movie::create([
            'category_id' => $thriller->id,
            'slug' => 'get-out',
            'title' => 'Get Out',
            'year' => 2017,
            'body' => 'Chris and his girlfriend Rose go upstate to visit her parents for the weekend. At first, Chris reads the family\'s overly accommodating behavior as nervous attempts to deal with their daughter\'s interracial relationship, but as the weekend progresses, a series of increasingly disturbing discoveries lead him to a truth that he never could have imagined.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/tFXcEccSQMf3lfhfXKSU9iRBpa3.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/vZ7EVk7FaNEWYqlVWbFLHP8Z0LU.jpg'
        ]);
    
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'spider-man-into-the-spider-verse',
            'title' => 'Spider-Man: Into the Spider-Verse',
            'year' => 2018,
            'body' => 'Miles Morales is juggling his life between being a high school student and being a spider-man. When Wilson "Kingpin" Fisk uses a super collider, others from across the Spider-Verse are transported to this dimension.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/iiZZdoQBEYBv6id8su7ImL0oCbD.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/x2IqsMlpbOhS8zIUJfyl1yO4gHF.jpg'
        ]);
    
        Movie::create([
            'category_id' => $drama->id,
            'slug' => 'three-billboards-outside-ebbing-missouri',
            'title' => 'Three Billboards Outside Ebbing, Missour',
            'year' => 2017,
            'body' => 'After seven months have passed without a culprit in her daughter\'s murder case, Mildred Hayes makes a bold move, painting three signs leading into her town with a controversial message directed at Bill Willoughby, the town\'s revered chief of police. When his second-in-command Officer Jason Dixon, an immature mother\'s boy with a penchant for violence, gets involved, the battle between Mildred and Ebbing\'s law enforcement is only exacerbated.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/bRYLt8fV82tdVoDppSFTZIcJiLN.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/5g0W5MUP75zyfluLhhVet15F71z.jpg'
        ]);
    
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'solo-a-star-wars-story',
            'title' => 'Solo: A Star Wars Story',
            'year' => 2018,
            'body' => 'Through a series of daring escapades deep within a dark and dangerous criminal underworld, Han Solo meets his mighty future copilot Chewbacca and encounters the notorious gambler Lando Calrissian.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/4oD6VEccFkorEBTEDXtpLAaz0Rl.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/j1l9zqe5ZQPEHGsz91FyZxMldq4.jpg'
        ]);
    
        Movie::create([
            'category_id' => $romantic->id,
            'slug' => 'la-la-land',
            'title' => 'La La Land',
            'year' => 2016,
            'body' => 'Mia, an aspiring actress, serves lattes to movie stars in between auditions and Sebastian, a jazz musician, scrapes by playing cocktail party gigs in dingy bars, but as success mounts they are faced with decisions that begin to fray the fragile fabric of their love affair, and the dreams they worked so hard to maintain in each other threaten to rip them apart.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/uDO8zWDhfWwoFdKS4fzkUJt0Rf0.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/jL6B8mm9TR8vmh9VtgEg0GC7jPy.jpg'
        ]);
    
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'kingsman-the-secret-service',
            'title' => 'Kingsman: The Secret Service',
            'year' => 2014,
            'body' => 'The story of a super-secret spy organization that recruits an unrefined but promising street kid into the agency\'s ultra-competitive training program just as a global threat emerges from a twisted tech genius.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/ay7xwXn1G9fzX9TUBlkGA584rGi.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/1ZIeGwD2lMlLMr4u6IIR302jqhD.jpg'
        ]);

        Movie::create([
            'category_id' => $action->id,
            'slug' => 'guardians-of-the-galaxy',
            'title' => 'Guardians of the Galaxy',
            'year' => 2014,
            'body' => 'Light years from Earth, 26 years after being abducted, Peter Quill finds himself the prime target of a manhunt after discovering an orb wanted by Ronan the Accuser.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/r7vmZjiyZw9rpJMQJdXpjgiCOk9.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/2UFxrUHVuSK3Tth7DvQQlF4mGTd.jpg'
        ]);

        Movie::create([
            'category_id' => $action->id,
            'slug' => 'john-wick',
            'title' => 'John Wick',
            'year' => 2014,
            'body' => 'Ex-hitman John Wick comes out of retirement to track down the gangsters that took everything from him.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/fZPSd91yGE9fCcCe6OoQr6E3Bev.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/7dzngS8pLkGJpyeskCFcjPO9qLF.jpg'
        ]);

            Movie::create([
            'category_id' => $comedy->id,
            'slug' => 'the-voices',
            'title' => 'The Voices',
            'year' => 2014,
            'body' => 'A mentally unhinged factory worker must decide whether to listen to his talking cat and become a killer, or follow his dog\'s advice to keep striving for normalcy.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/mgaUxeI43IxERR6AVbwFmr4bUKl.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/d5tcsjdLw3uxBd318EIcTn9e35X.jpg'
        ]);
        
        Movie::create([
            'category_id' => $horror->id,
            'slug' => 'it-follows',
            'title' => 'It Follows',
            'year' => 2015,
            'body' => 'After a seemingly innocent sexual encounter, Jay finds herself plagued by strange visions and the inescapable sense that someone, something, is following her.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/iwnQ1JH1wdWrGYkgWySptJ5284A.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/ikaRI4yMxKOje5SmOlAhOBUnicL.jpg'
        ]);
        
        Movie::create([
            'category_id' => $drama->id,
            'slug' => 'little-miss-sunshine',
            'title' => 'Little Miss Sunshine',
            'year' => 2006,
            'body' => 'A family loaded with quirky, colorful characters piles into an old van and road trips to California for little Olive to compete in a beauty pageant.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/tFnTds88mCuLcLPBseK1kF2E3qv.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/4YzGG8IPduUQRVnQ0vN5laHA1rH.jpg'
        ]);
        
        Movie::create([
            'category_id' => $drama->id,
            'slug' => 'mommy',
            'title' => 'Mommy',
            'year' => 2014,
            'body' => 'A peculiar neighbor offers hope to a recent widow who is struggling to raise a teenager who is unpredictable and, sometimes, violent',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/iUN8FpWSjrHx0b8lPnBuIoLnd67.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/4UQ8Z2aLAlU24qgC9Fc1N6CX53y.jpg'
        ]);
        
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'the-hobbit-the-desolation-of-smaug',
            'title' => 'The Hobbit: The Desolation of Smaug',
            'year' => 2013,
            'body' => 'The Dwarves, Bilbo and Gandalf have successfully escaped the Misty Mountains, and Bilbo has gained the One Ring. They all continue their journey to get their gold back from the Dragon, Smaug.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/xQYiXsheRCDBA39DOrmaw1aSpbk.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/bSQjIZO9aJCJBqxGX3Sx2xtujzT.jpg'
        ]);
        
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'the-hobbit-an-unexpected-journey',
            'title' => 'The Hobbit: An Unexpected Journey',
            'year' => 2012,
            'body' => 'Bilbo Baggins, a hobbit enjoying his quiet life, is swept into an epic quest by Gandalf the Grey and thirteen dwarves who seek to reclaim their mountain home from Smaug, the dragon.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/yHA9Fc37VmpUA5UncTxxo3rTGVA.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/gioXMobK8vbD6bcTsjKYKfgacNt.jpg'
        ]);
        
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'the-hobbit-the-battle-of-the-five-armies',
            'title' => 'The Hobbit: The Battle of the Five Armies',
            'year' => 2014,
            'body' => 'Immediately after the events of The Desolation of Smaug, Bilbo and the dwarves try to defend Erebor\'s mountain of treasure from others who claim it: the men of the ruined Laketown and the elves of Mirkwood. Meanwhile an army of Orcs led by Azog the Defiler is marching on Erebor, fueled by the rise of the dark lord Sauron. Dwarves, elves and men must unite, and the hope for Middle-Earth falls into Bilbo\'s hands.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/xT98tLqatZPQApyRmlPL12LtiWp.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/zn13a7U9eMTJq8sHthe3bCgsVm4.jpg'
        ]);
        
        Movie::create([
            'category_id' => $thriller->id,
            'slug' => 'gone-girl',
            'title' => 'Gone Girl',
            'year' => 2014,
            'body' => 'With his wife\'s disappearance having become the focus of an intense media circus, a man sees the spotlight turned on him when it\'s suspected that he may not be innocent.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/qymaJhucquUwjpb8oiqynMeXnID.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/x9ezMgOtDPqHatHDvxEG0ILb6Ie.jpg'
        ]);
        
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'edge-of-tomorrow',
            'title' => 'Edge of Tomorrow',
            'year' => 2014,
            'body' => 'Major Bill Cage is an officer who has never seen a day of combat when he is unceremoniously demoted and dropped into combat. Cage is killed within minutes, managing to take an alpha alien down with him. He awakens back at the beginning of the same day and is forced to fight and die again... and again - as physical contact with the alien has thrown him into a time loop.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/uUHvlkLavotfGsNtosDy8ShsIYF.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/b4ZjgjOvbIJ6oJoiCJpnYNT50s2.jpg'
        ]);
        
        Movie::create([
            'category_id' => $romantic->id,
            'slug' => 'her',
            'title' => 'Her',
            'year' => 2013,
            'body' => 'In the not so distant future, Theodore, a lonely writer purchases a newly developed operating system designed to meet the user\'s every needs. To Theodore\'s surprise, a romantic relationship develops between him and his operating system. This unconventional love story blends science fiction and romance in a sweet tale that explores the nature of love and the ways that technology isolates and connects us all.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/yk4J4aewWYNiBhD49WD7UaBBn37.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/sbWZBPSmL7ePJq86u07YJlVohFj.jpg'
        ]);
                
        Movie::create([
            'category_id' => $thriller->id,
            'slug' => 'prisoners',
            'title' => 'Prisoners',
            'year' => 2013,
            'body' => 'Keller Dover faces a parent\'s worst nightmare when his 6-year-old daughter, Anna, and her friend go missing. The only lead is an old motorhome that had been parked on their street. The head of the investigation, Detective Loki, arrests the driver, but a lack of evidence forces Loki to release his only suspect. Dover, knowing that his daughter\'s life is at stake, decides that he has no choice but to take matters into his own hands.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/tuZhZ6biFMr5n9YSVuHOJnNL1uU.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/tlK9mWLquPawoHT9jIWe9WGANKx.jpg'
        ]);
        
        Movie::create([
            'category_id' => $drama->id,
            'slug' => 'the-secret-life-of-walter-mitty',
            'title' => 'The Secret Life of Walter Mitty',
            'year' => 2013,
            'body' => 'A timid magazine photo manager who lives life vicariously through daydreams embarks on a true-life adventure when a negative goes missing.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/g7UNoP2rEEP4y6Xzo3EEslqdxo3.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/pzMrxeP9XkKOtQVUBPTq5yk4ck5.jpg'
        ]);
                
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'kick-ass ',
            'title' => 'Kick-Ass',
            'year' => 2010,
            'body' => 'Dave Lizewski is an unnoticed high school student and comic book fan who one day decides to become a super-hero, even though he has no powers, training or meaningful reason to do so.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/8citjdBmjddZjlPsAHEyCKwGVvD.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/zvRsjPHJDoJhhNdmYkFJqCdqmyr.jpg'
        ]);
        
        Movie::create([
            'category_id' => $horror->id,
            'slug' => 'the-conjuring',
            'title' => 'The Conjuring',
            'year' => 2013,
            'body' => 'Paranormal investigators Ed and Lorraine Warren work to help a family terrorized by a dark presence in their farmhouse. Forced to confront a powerful entity, the Warrens find themselves caught in the most terrifying case of their lives.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/wVYREutTvI2tmxr6ujrHT704wGF.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/l5yp73psXVRYy2ce09lD8yDuu2g.jpg'
        ]);
                
        Movie::create([
            'category_id' => $drama->id,
            'slug' => 'the-place-beyond-the-pines',
            'title' => 'The Place Beyond the Pines',
            'year' => 2013,
            'body' => 'A motorcycle stunt rider considers committing a crime in order to provide for his wife and child, an act that puts him on a collision course with a cop-turned-politician.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/vY5j2xQzMGWmxBuhQo0HfA4Lxqb.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/qnYwh0tGs0wvjkf7pGPr3TmVFh6.jpg'
        ]);
        
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'django',
            'title' => 'Django',
            'year' => 2012,
            'body' => 'With the help of a German bounty hunter, a freed slave sets out to rescue his wife from a brutal Mississippi plantation owner.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/7oWY8VDWW7thTzWh3OKYRkWUlD5.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/2oZklIzUbvZXXzIFzv7Hi68d6xf.jpg'
        ]);
                
        Movie::create([
            'category_id' => $romantic->id,
            'slug' => 'crazy-stupid-love',
            'title' => 'Crazy, Stupid, Love.',
            'year' => 2011,
            'body' => 'Cal Weaver is living the American dream. He has a good job, a beautiful house, great children and a beautiful wife, named Emily. Cal\'s seemingly perfect life unravels, however, when he learns that Emily has been unfaithful and wants a divorce. Over 40 and suddenly single, Cal is adrift in the fickle world of dating. Enter, Jacob Palmer, a self-styled player who takes Cal under his wing and teaches him how to be a hit with the ladies.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/p4RafgAPk558muOjnBMHhMArjS2.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/d7BzfMl7vtNAtXIBmS8oWzo5pVe.jpg'
        ]);
        
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'the-batman',
            'title' => 'The Batman',
            'year' => 2022,
            'body' => 'In his second year of fighting crime, Batman uncovers corruption in Gotham City that connects to his own family while facing a serial killer known as the Riddler.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/3VFI3zbuNhXzx7dIbYdmvBLekyB.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/a6ibWUB8MFdciN6K3fPbP5R6LQi.jpg'
        ]);
                
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'leon-the-professional',
            'title' => 'Léon: The Professional',
            'year' => 1994,
            'body' => 'Léon, the top hit man in New York, has earned a rep as an effective "cleaner". But when his next-door neighbors are wiped out by a loose-cannon DEA agent, he becomes the unwilling custodian of 12-year-old Mathilda. Before long, Mathilda\'s thoughts turn to revenge, and she considers following in Léon\'s footsteps.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/yI6X2cCM5YPJtxMhUd3dPGqDAhw.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/jRJrQ72VLyEnVsvwfep8Xjlvu8c.jpg'
        ]);
        
        Movie::create([
            'category_id' => $family->id,
            'slug' => 'the-lion-king',
            'title' => 'The Lion King',
            'year' => 1994,
            'body' => 'A young lion prince is cast out of his pride by his cruel uncle, who claims he killed his father. While the uncle rules with an iron paw, the prince grows up beyond the Savannah, living by a philosophy: No worries for the rest of your days. But when his past comes to haunt him, the young prince must decide his fate: Will he remain an outcast or face his demons and become what he needs to be?',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/sKCr78MXSLixwmZ8DyJLrpMsd15.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/q00H8EqULYSK74lgevMkhmGGLHn.jpg'
        ]);
                
        Movie::create([
            'category_id' => $horror->id,
            'slug' => 'insidious',
            'title' => 'Insidious',
            'year' => 2010,
            'body' => 'A family discovers that dark spirits have invaded their home after their son inexplicably falls into an endless sleep. When they reach out to a professional for help, they learn things are a lot more personal than they thought.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/tmlDFIUpGRKiuWm9Ixc6CYDk4y0.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/bylGn5OC2h3BWfGLYFtIcxlYxLy.jpg'
        ]);
        
        Movie::create([
            'category_id' => $horror->id,
            'slug' => 'us',
            'title' => 'Us',
            'year' => 2019,
            'body' => 'Husband and wife Gabe and Adelaide Wilson take their kids to their beach house expecting to unplug and unwind with friends. But as night descends, their serenity turns to tension and chaos when some shocking visitors arrive uninvited.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/ux2dU1jQ2ACIMShzB3yP93Udpzc.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/18qxSxzAUs7UjZ3dKCkxAOv0yb1.jpg'
        ]);
        
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'sherlock-holmes',
            'title' => 'Sherlock Holmes',
            'year' => 2009,
            'body' => 'Eccentric consulting detective Sherlock Holmes and Doctor John Watson battle to bring down a new nemesis and unravel a deadly plot that could destroy England.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/momkKuWburNTqKBF6ez7rvhYVhE.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/oLmifRdaETboot2PXxpZN8NqHhK.jpg'
        ]);
        
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'batman-begins',
            'title' => 'Batman Begins',
            'year' => 2005,
            'body' => 'Driven by tragedy, billionaire Bruce Wayne dedicates his life to uncovering and defeating the corruption that plagues his home, Gotham City. Unable to work within the system, he instead creates a new identity, a symbol of fear for the criminal underworld - The Batman.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/8RW2runSEc34IwKN2D1aPcJd2UL.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/y9AuabF1SXnn3xZ0tAJLLhv33Uj.jpg'
        ]);
        
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'the-dark-knight',
            'title' => 'The Dark Knight',
            'year' => 2008,
            'body' => 'Batman raises the stakes in his war on crime. With the help of Lt. Jim Gordon and District Attorney Harvey Dent, Batman sets out to dismantle the remaining criminal organizations that plague the streets. The partnership proves to be effective, but they soon find themselves prey to a reign of chaos unleashed by a rising criminal mastermind known to the terrified citizens of Gotham as the Joker.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/qJ2tW6WMUDux911r6m7haRef0WH.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/nMKdUUepR0i5zn0y1T4CsSB5chy.jpg'
        ]);
        
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'the-dark-knight-rises',
            'title' => 'The Dark Knight Rises',
            'year' => 2012,
            'body' => 'Following the death of District Attorney Harvey Dent, Batman assumes responsibility for Dent\'s crimes to protect the late attorney\'s reputation and is subsequently hunted by the Gotham City Police Department. Eight years later, Batman encounters the mysterious Selina Kyle and the villainous Bane, a new terrorist leader who overwhelms Gotham\'s finest. The Dark Knight resurfaces to protect a city that has branded him an enemy.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/85cWkCVftiVs0BVey6pxX8uNmLt.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/dXbUVPZnvt4WcQHozLQ5MNXvtwV.jpg'
        ]);
        
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'the-avengers',
            'title' => 'The Avengers',
            'year' => 2012,
            'body' => 'When an unexpected enemy emerges and threatens global safety and security, Nick Fury, director of the international peacekeeping agency known as S.H.I.E.L.D., finds himself in need of a team to pull the world back from the brink of disaster. Spanning the globe, a daring recruitment effort begins!',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/RYMX2wcKCBAr24UyPD7xwmjaTn.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/nNmJRkg8wWnRmzQDe2FwKbPIsJV.jpg'
        ]);
        
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'avengers-age-of-ultron',
            'title' => 'Avengers: Age of Ultron',
            'year' => 2015,
            'body' => 'When Tony Stark tries to jumpstart a dormant peacekeeping program, things go awry and Earth’s Mightiest Heroes are put to the ultimate test as the fate of the planet hangs in the balance. As the villainous Ultron emerges, it is up to The Avengers to stop him from enacting his terrible plans, and soon uneasy alliances and unexpected action pave the way for an epic and unique global adventure.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/4ssDuvEDkSArWEdyBl2X5EHvYKU.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/xnqust9Li4oxfhXD5kcPi3UC8i4.jpg'
        ]);
        
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'avengers-infinity-war',
            'title' => 'Avengers: Infinity War',
            'year' => 2018,
            'body' => 'As the Avengers and their allies have continued to protect the world from threats too large for any one hero to handle, a new danger has emerged from the cosmic shadows: Thanos. A despot of intergalactic infamy, his goal is to collect all six Infinity Stones, artifacts of unimaginable power, and use them to inflict his twisted will on all of reality. Everything the Avengers have fought for has led up to this moment - the fate of Earth and existence itself has never been more uncertain.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/7WsyChQLEftFiDOVTGkv3hFpyyt.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/lmZFxXgJE3vgrciwuDib0N8CfQo.jpg'
        ]);
        
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'avengers-endgame',
            'title' => 'Avengers: Endgame',
            'year' => 2019,
            'body' => 'After the devastating events of Avengers: Infinity War, the universe is in ruins due to the efforts of the Mad Titan, Thanos. With the help of remaining allies, the Avengers must assemble once more in order to undo Thanos\' actions and restore order to the universe once and for all, no matter what consequences may be in store.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/or06FN3Dka5tukK1e9sl16pB3iy.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/7RyHsO4yDXtBv1zUU3mTpHeQ0d5.jpg'
        ]);
        
        Movie::create([
            'category_id' => $drama->id,
            'slug' => 'it-s-kind-of-a-funny-story',
            'title' => 'It\'s Kind of a Funny Story',
            'year' => 2010,
            'body' => 'A clinically depressed teenager gets a new start after he checks himself into an adult psychiatric ward',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/hQE4q8Szeaae4davgB7o8MTLmwr.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/l7gkk5K0NnVSqZ0Qr4zkNskH9AC.jpg'
        ]);
        
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'kill-bill-vol-1',
            'title' => 'Kill Bill: Vol. 1',
            'year' => 2003,
            'body' => 'An assassin is shot by her ruthless employer, Bill, and other members of their assassination circle – but she lives to plot her vengeance.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/v7TaX8kXMXs5yFFGR41guUDNcnB.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/ldnt0O6Utnz9roPe15uzc91WNqT.jpg'
        ]);
        
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'inglourious-basterds',
            'title' => 'Inglourious Basterds',
            'year' => 2009,
            'body' => 'In Nazi-occupied France during World War II, a group of Jewish-American soldiers known as "The Basterds" are chosen specifically to spread fear throughout the Third Reich by scalping and brutally killing Nazis. The Basterds, lead by Lt. Aldo Raine soon cross paths with a French-Jewish teenage girl who runs a movie theater in Paris which is targeted by the soldiers.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/7sfbEnaARXDDhKm0CZ7D7uc2sbo.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/50VD6QU0NX0aRB6ftKCVWun80bm.jpg'
        ]);
        
        Movie::create([
            'category_id' => $drama->id,
            'slug' => 'the-wolf-of-wall-street',
            'title' => 'The Wolf of Wall Street',
            'year' => 2013,
            'body' => 'A New York stockbroker refuses to cooperate in a large securities fraud case involving corruption on Wall Street, corporate banking world and mob infiltration. Based on Jordan Belfort\'s autobiography.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/pWHf4khOloNVfCxscsXFj3jj6gP.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/FzOdq23pNBJBW5zULFzEdjQXZD.jpg'
        ]);
        
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'inception',
            'title' => 'Inception',
            'year' => 2010,
            'body' => 'Cobb, a skilled thief who commits corporate espionage by infiltrating the subconscious of his targets is offered a chance to regain his old life as payment for a task considered to be impossible: "inception", the implantation of another person\'s idea into a target\'s subconscious.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/edv5CZvWj09upOsy2Y6IwDhK8bt.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/s3TBrRGB1iav7gFOCNx3H31MoES.jpg'
        ]);
        
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'the-matrix',
            'title' => 'The Matrix',
            'year' => 1999,
            'body' => 'Set in the 22nd century, The Matrix tells the story of a computer hacker who joins a group of underground insurgents fighting the vast and powerful computers who now rule the earth.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/f89U3ADr1oiB1s9GkdPOEpXUk5H.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/ncEsesgOJDNrTUED89hYbA117wo.jpg'
        ]);
        
        Movie::create([
            'category_id' => $family->id,
            'slug' => 'harry-potter-and-the-philosopher-s-stone',
            'title' => 'Harry Potter and the Philosopher\'s Stone',
            'year' => 2001,
            'body' => 'Harry Potter has lived under the stairs at his aunt and uncle\'s house his whole life. But on his 11th birthday, he learns he\'s a powerful wizard—with a place waiting for him at the Hogwarts School of Witchcraft and Wizardry. As he learns to harness his newfound powers with the help of the school\'s kindly headmaster, Harry uncovers the truth about his parents\' deaths—and about the villain who\'s to blame.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/wuMc08IPKEatf9rnMNXvIDxqP4W.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/5jkE2SzR5uR2egEb1rRhF22JyWN.jpg'
        ]);
        
        Movie::create([
            'category_id' => $family->id,
            'slug' => 'harry-potter-and-the-chamber-of-secrets',
            'title' => 'Harry Potter and the Chamber of Secrets',
            'year' => 2002,
            'body' => 'Cars fly, trees fight back, and a mysterious house-elf comes to warn Harry Potter at the start of his second year at Hogwarts. Adventure and danger await when bloody writing on a wall announces: The Chamber Of Secrets Has Been Opened. To save Hogwarts will require all of Harry, Ron and Hermione’s magical abilities and courage.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/sdEOH0992YZ0QSxgXNIGLq1ToUi.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/1stUIsjawROZxjiCMtqqXqgfZWC.jpg'
        ]);
                
        Movie::create([
            'category_id' => $family->id,
            'slug' => 'harry-potter-and-the-prisoner-of-azkaban',
            'title' => 'Harry Potter and the Prisoner of Azkaban',
            'year' => 2004,
            'body' => 'Year three at Hogwarts means new fun and challenges as Harry learns the delicate art of approaching a Hippogriff, transforming shape-shifting Boggarts into hilarity and even turning back time. But the term also brings danger: soul-sucking Dementors hover over the school, an ally of the accursed He-Who-Cannot-Be-Named lurks within the castle walls, and fearsome wizard Sirius Black escapes Azkaban. And Harry will confront them all.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/aWxwnYoe8p2d2fcxOqtvAtJ72Rw.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/vbk5CfaAHOjQPSAcYm6AoRRz2Af.jpg'
        ]);
                
        Movie::create([
            'category_id' => $family->id,
            'slug' => 'harry-potter-and-the-goblet-of-fire',
            'title' => 'Harry Potter and the Goblet of Fire',
            'year' => 2005,
            'body' => 'When Harry Potter\'s name emerges from the Goblet of Fire, he becomes a competitor in a grueling battle for glory among three wizarding schools—the Triwizard Tournament. But since Harry never submitted his name for the Tournament, who did? Now Harry must confront a deadly dragon, fierce water demons and an enchanted maze only to find himself in the cruel grasp of He Who Must Not Be Named.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/fECBtHlr0RB3foNHDiCBXeg9Bv9.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/5rrGVmRUuCKVbqUu41XIWTXJmNA.jpg'
        ]);

        Movie::create([
            'category_id' => $family->id,
            'slug' => 'harry-potter-and-the-order-of-the-phoenix',
            'title' => 'Harry Potter and the Order of the Phoenix',
            'year' => 2007,
            'body' => 'The rebellion begins! Lord Voldemort has returned, but the Ministry of Magic is doing everything it can to keep the wizarding world from knowing the truth – including appointing Ministry official Dolores Umbridge as the new Defence Against the Dark Arts professor at Hogwarts. When Umbridge refuses to teach practical defensive magic, Ron and Hermione convince Harry to secretly train a select group of students for the wizarding war that lies ahead. A terrifying showdown between good and evil awaits in this enthralling film version of the fifth novel in J.K. Rowling’s Harry Potter series. Prepare for battle!',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/tRoHysNFsXC2r0JiBL6iNHELut7.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/sO2VWeJ8qagNtYoznyLRL8TeSkw.jpg'
        ]);
        
        Movie::create([
            'category_id' => $family->id,
            'slug' => 'harry-potter-and-the-half-blood-prince',
            'title' => 'Harry Potter and the Half-Blood Prince',
            'year' => 2009,
            'body' => 'As Lord Voldemort tightens his grip on both the Muggle and wizarding worlds, Hogwarts is no longer a safe haven. Harry suspects perils may even lie within the castle, but Dumbledore is more intent upon preparing him for the final battle fast approaching. Together they work to find the key to unlock Voldemorts defenses and to this end, Dumbledore recruits his old friend and colleague Horace Slughorn, whom he believes holds crucial information. Even as the decisive showdown looms, romance blossoms for Harry, Ron, Hermione and their classmates. Love is in the air, but danger lies ahead and Hogwarts may never be the same again.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/o2j49x3HYJC2VH689rYxmswtSgS.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/urDWNffjwmNi5IQaezw9GwqkUXa.jpg'
        ]);
                
        Movie::create([
            'category_id' => $family->id,
            'slug' => 'harry-potter-and-the-deathly-hallows-part-1',
            'title' => 'Harry Potter and the Deathly Hallows: Part 1',
            'year' => 2010,
            'body' => 'Harry, Ron and Hermione walk away from their last year at Hogwarts to find and destroy the remaining Horcruxes, putting an end to Voldemort\'s bid for immortality. But with Harry\'s beloved Dumbledore dead and Voldemort\'s unscrupulous Death Eaters on the loose, the world is more dangerous than ever.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/iGoXIpQb7Pot00EEdwpwPajheZ5.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/fXRXpzxUApE3OuXhIqsdavQjCVa.jpg'
        ]);
                
        Movie::create([
            'category_id' => $family->id,
            'slug' => 'harry-potter-and-the-deathly-hallows-part-2',
            'title' => 'Harry Potter and the Deathly Hallows: Part 2',
            'year' => 2011,
            'body' => 'Harry, Ron and Hermione continue their quest to vanquish the evil Voldemort once and for all. Just as things begin to look hopeless for the young wizards, Harry discovers a trio of magical objects that endow him with powers to rival Voldemort\'s formidable skills.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/da22ZBmrDOXOCDRvr8Gic8ldhv4.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/n5A7brJCjejceZmHyujwUTVgQNC.jpg'
        ]);
                
        Movie::create([
            'category_id' => $drama->id,
            'slug' => 'whiplash',
            'title' => 'Whiplash',
            'year' => 2014,
            'body' => 'Under the direction of a ruthless instructor, a talented young drummer begins to pursue perfection at any cost, even his humanity.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/oPxnRhyAIzJKGUEdSiwTJQBa3NM.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/fRGxZuo7jJUWQsVg9PREb98Aclp.jpg'
        ]);
        
        Movie::create([
            'category_id' => $drama->id,
            'slug' => 'forrest-gump',
            'title' => 'Forrest Gump',
            'year' => 1994,
            'body' => 'A man with a low IQ has accomplished great things in his life and been present during significant historic events—in each case, far exceeding what anyone imagined he could do. But despite all he has achieved, his one true love eludes him.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/saHP97rTPS5eLmrLQEcANmKrsFl.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/qdIMHd4sEfJSckfVJfKQvisL02a.jpg'
        ]);
        
        Movie::create([
            'category_id' => $drama->id,
            'slug' => 'the-godfather',
            'title' => 'The Godfather',
            'year' => 1972,
            'body' => 'Spanning the years 1945 to 1955, a chronicle of the fictional Italian-American Corleone crime family. When organized crime family patriarch, Vito Corleone barely survives an attempt on his life, his youngest son, Michael steps in to take care of the would-be killers, launching a campaign of bloody revenge.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/eEslKSwcqmiNS6va24Pbxf2UKmJ.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/rSPw7tgCH9c6NqICZef4kZjFOQ5.jpg'
        ]);
        
        Movie::create([
            'category_id' => $drama->id,
            'slug' => 'the-godfather-part-ii',
            'title' => 'The Godfather: Part II',
            'year' => 1974,
            'body' => 'In the continuing saga of the Corleone crime family, a young Vito Corleone grows up in Sicily and in 1910s New York. In the 1950s, Michael Corleone attempts to expand the family business into Las Vegas, Hollywood and Cuba.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/v3KCBeX0CBlZnHZndimm7taYqwo.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/poec6RqOKY9iSiIUmfyfPfiLtvB.jpg'
        ]);
        
        Movie::create([
            'category_id' => $drama->id,
            'slug' => 'the-godfather-part-iii',
            'title' => 'The Godfather: Part III',
            'year' => 1990,
            'body' => 'In the midst of trying to legitimize his business dealings in 1979 New York and Italy, aging mafia don, Michael Corleone seeks forgiveness for his sins while taking a young protege under his wing.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/gh2ShN6ku8VOT8wNyEOgZQwhNtE.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/9jzcBj3K3sOJe1yF73JEFPISIHE.jpg'
        ]);
        
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'gladiator',
            'title' => 'Gladiator',
            'year' => 2000,
            'body' => 'In the year 180, the death of emperor Marcus Aurelius throws the Roman Empire into chaos. Maximus is one of the Roman army\'s most capable and trusted generals and a key advisor to the emperor. As Marcus\' devious son Commodus ascends to the throne, Maximus is set to be executed. He escapes, but is captured by slave traders. Renamed Spaniard and forced to become a gladiator, Maximus must battle to the death with other men for the amusement of paying audiences.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/ehGpN04mLJIrSnxcZBMvHeG0eDc.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/hND7xAaxxBgaIspp9iMsaEXOSTz.jpg'
        ]);
        
        Movie::create([
            'category_id' => $drama->id,
            'slug' => 'the-shawshank-redemption',
            'title' => 'The Shawshank Redemption',
            'year' => 1994,
            'body' => 'Framed in the 1940s for the double murder of his wife and her lover, upstanding banker Andy Dufresne begins a new life at the Shawshank prison, where he puts his accounting skills to work for an amoral warden. During his long stretch in prison, Dufresne comes to be admired by the other inmates -- including an older prisoner named Red -- for his integrity and unquenchable sense of hope.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/q6y0Go1tsGEsmtFryDOJo3dEmqu.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/wPU78OPN4BYEgWYdXyg0phMee64.jpg'
        ]);
        
        Movie::create([
            'category_id' => $action->id,
            'slug' => 'oldboy',
            'title' => 'Oldboy',
            'year' => 2003,
            'body' => 'With no clue how he came to be imprisoned, drugged and tortured for 15 years, a desperate businessman seeks revenge on his captors.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/pWDtjs568ZfOTMbURQBYuT4Qxka.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/47rioCQJLDe6gT7NYdPf7IRy3Nu.jpg'
        ]);
        
        Movie::create([
            'category_id' => $horror->id,
            'slug' => 'a-quiet-place',
            'title' => 'A Quiet Place',
            'year' => 2018,
            'body' => 'A family is forced to live in silence while hiding from creatures that hunt by sound.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/nAU74GmpUk7t5iklEp3bufwDq4n.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/roYyPiQDQKmIKUEhO912693tSja.jpg'
        ]);
        
        Movie::create([
            'category_id' => $horror->id,
            'slug' => 'a-quiet-place-2',
            'title' => 'A Quiet Place Part II',
            'year' => 2021,
            'body' => 'Following the events at home, the Abbott family now face the terrors of the outside world. Forced to venture into the unknown, they realize that the creatures that hunt by sound are not the only threats that lurk beyond the sand path.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/4q2hz2m8hubgvijz8Ez0T2Os2Yv.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/z2UtGA1WggESspi6KOXeo66lvLx.jpg'
        ]);
            
        Movie::create([
            'category_id' => $romantic->id,
            'slug' => '500-days-of-summer',
            'title' => '(500) Days of Summer',
            'year' => 2009,
            'body' => 'Tom, greeting-card writer and hopeless romantic, is caught completely off-guard when his girlfriend, Summer, suddenly dumps him. He reflects on their 500 days together to try to figure out where their love affair went sour, and in doing so, Tom rediscovers his true passions in life.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/f9mbM0YMLpYemcWx6o2WeiYQLDP.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/etBZfuOie3uODTKTV5xnbAKB4Fr.jpg'
        ]);
            
        Movie::create([
            'category_id' => $romantic->id,
            'slug' => 'notting-hill',
            'title' => 'Notting Hill',
            'year' => 1999,
            'body' => 'William Thacker is a London bookstore owner whose humdrum existence is thrown into romantic turmoil when famous American actress Anna Scott appears in his shop. A chance encounter over spilled orange juice leads to a kiss that blossoms into a full-blown affair. As the average bloke and glamorous movie star draw closer and closer together, they struggle to reconcile their radically different lifestyles in the name of love.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/cBpef6K40Su2CcBb3c18WdwRFCL.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/bczMFOV3RTDEpxf6QdKw1m0NxLy.jpg'
        ]);
            
        Movie::create([
            'category_id' => $romantic->id,
            'slug' => 'me-before-you',
            'title' => 'Me Before You',
            'year' => 2016,
            'body' => 'A small town girl is caught between dead-end jobs. A high-profile, successful man becomes wheelchair bound following an accident. The man decides his life is not worth living until the girl is hired for six months to be his new caretaker. Worlds apart and trapped together by circumstance, the two get off to a rocky start. But the girl becomes determined to prove to the man that life is worth living and as they embark on a series of adventures together, each finds their world changing in ways neither of them could begin to imagine.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/oo2Q3T8juOYFh2G1YJ3oSMAfUyq.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/7jjwdoIVPJp7gcDo9uE1sVZi2Rs.jpg'
        ]);
            
        Movie::create([
            'category_id' => $comedy->id,
            'slug' => 'the-hangover',
            'title' => 'The Hangover',
            'year' => 2009,
            'body' => 'When three friends finally come to after a raucous night of bachelor-party revelry, they find a baby in the closet and a tiger in the bathroom. But they can\'t seem to locate their best friend, Doug – who\'s supposed to be tying the knot. Launching a frantic search for Doug, the trio perseveres through a nasty hangover to try to make it to the church on time.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/wTt2BoyAGhr0M00eR1ewVZyQoUq.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/2o0PKGmnSgCGkzoSePNAqse8Ure.jpg'
        ]);
            
        Movie::create([
            'category_id' => $comedy->id,
            'slug' => 'superbad',
            'title' => 'Superbad',
            'year' => 2007,
            'body' => 'Two co-dependent high school seniors are forced to deal with separation anxiety after their plan to stage a booze-soaked party goes awry.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/ek8e8txUyUwd2BNqj6lFEerJfbq.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/bwYhIvGPh81gLRTx3gWnU0Ho6nc.jpg'
        ]);
            
        Movie::create([
            'category_id' => $comedy->id,
            'slug' => 'the-40-year-old-virgin',
            'title' => 'The 40 Year Old Virgin',
            'year' => 2005,
            'body' => 'Andy Stitzer has a pleasant life with a nice apartment and a job stamping invoices at an electronics store. But at age 40, there\'s one thing Andy hasn\'t done, and it\'s really bothering his sex-obsessed male co-workers: Andy is still a virgin. Determined to help Andy get laid, the guys make it their mission to de-virginize him. But it all seems hopeless until Andy meets small business owner Trish, a single mom.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/szdW79wZtHoWGZmxZFMaKjNzb1v.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/3Wej7JW8Ikrzbm6h0lmSdeOYMmu.jpg'
        ]);
            
        Movie::create([
            'category_id' => $comedy->id,
            'slug' => 'bridesmaids',
            'title' => 'Bridesmaids',
            'year' => 2011,
            'body' => 'Annie\'s life is a mess. But when she finds out her lifetime best friend is engaged, she simply must serve as Lillian\'s maid of honor. Though lovelorn and broke, Annie bluffs her way through the expensive and bizarre rituals. With one chance to get it perfect, she’ll show Lillian and her bridesmaids just how far you’ll go for someone you love.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/cruSkSZJEmv9pbDoHBwdHdsnvHO.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/1pkpV7a02phSfAPeGVmpHaQd99J.jpg'
        ]);
                
        Movie::create([
            'category_id' => $comedy->id,
            'slug' => 'role-models',
            'title' => 'Role Models',
            'year' => 2008,
            'body' => 'Two salesmen trash a company truck on an energy drink-fueled bender. Upon their arrest, the court gives them a choice: do hard time or spend 150 service hours with a mentorship program. After one day with the kids, however, jail doesn\'t look half bad.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/ki79dSjh6Rr51xrsz4dT04UGxSU.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/wEnMNW8rGX1RVhKY4Lj5sVDYSK8.jpg'
        ]);
                
        Movie::create([
            'category_id' => $thriller->id,
            'slug' => 'phone-booth',
            'title' => 'Phone Booth',
            'year' => 2002,
            'body' => 'A slick New York publicist who picks up a ringing receiver in a phone booth is told that if he hangs up, he\'ll be killed... and the little red light from a laser rifle sight is proof that the caller isn\'t kidding.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/2vvF0IyTuzfHy4XK5p1oWJ8NwFz.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/oBU55I99gZTRYag25Q5eJUKZeG6.jpg'
        ]);
                
        Movie::create([
            'category_id' => $thriller->id,
            'slug' => 'taken',
            'title' => 'Taken',
            'year' => 2008,
            'body' => 'While vacationing with a friend in Paris, an American girl is kidnapped by a gang of human traffickers intent on selling her into forced prostitution. Working against the clock, her ex-spy father must pull out all the stops to save her. But with his best years possibly behind him, the job may be more than he can handle.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/wrJjDB8SSJJKcpXVf4KAxZIHvBZ.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/9iQWsXwjOMGDvTDdvCnpiyR0UG3.jpg'
        ]);
                
        Movie::create([
            'category_id' => $thriller->id,
            'slug' => 'ocean-s-eleven',
            'title' => 'Ocean\'s Eleven',
            'year' => 2001,
            'body' => 'Less than 24 hours into his parole, charismatic thief Danny Ocean is already rolling out his next plan: In one night, Danny\'s hand-picked crew of specialists will attempt to steal more than $150 million from three Las Vegas casinos. But to score the cash, Danny risks his chances of reconciling with ex-wife, Tess.',
            'photo_poster' => 'https://www.themoviedb.org/t/p/w1280/v5D7K4EHuQHFSjveq8LGxdSfrGS.jpg',
            'photo_bg' => 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/43BEez1EGdmNpg8rcPUFToujlii.jpg'
        ]);
    
               // Movie::create([
        //     'category_id' => $action->id,
        //     'slug' => '',
        //     'title' => '',
        //     'year' => ,
        //     'body' => '',
        //     'photo_poster' => '',
        //     'photo_bg' => ''
        // ]);
    }
}
