<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Movies;
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
        // \App\Models\User::factory(10)->create();

        Category::truncate();
        Movies::truncate();

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

        Movies::create([
            'category_id' => $action->id,
            'slug' => 'spider-man-no-way-home',
            'title' => 'Spider-Man: No Way Home',
            'year' => 2021,
            'body' => 'Peter Parker is unmasked and no longer able to separate his normal life from the high-stakes of being a super-hero. When he asks for help from Doctor Strange the stakes become even more dangerous, forcing him to discover what it truly means to be Spider-Man.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/1g0dhYtq4irTY1GPXvft6k4YLjm.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/iQFcwSGbZXMkeyKrxbPnwnRo5fl.jpg'
        ]);

        Movies::create([
            'category_id' => $horror->id,
            'slug' => 'the-requin',
            'title' => 'The Requin',
            'year' => 2022,
            'body' => 'A couple on a romantic getaway find themselves stranded at sea when a tropical storm sweeps away their villa. In order to survive, they are forced to fight the elements, while sharks circle below.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/i0z8g2VRZP3dhVvvSMilbOZMKqR.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/eVSa4TpyXbOdk9fXSD6OcORJGtv.jpg'
        ]);

        Movies::create([
            'category_id' => $family->id,
            'title' => 'The Ice Age Adventures of Buck Wild',
            'slug' => 'the-ice-age-adventures-of-buck-wild',
            'year' => 2022,
            'body' => 'The fearless one-eyed weasel Buck teams up with mischievous possum brothers Crash & Eddie as they head off on a new adventure into Buck\'s home: The Dinosaur World.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/zzXFM4FKDG7l1ufrAkwQYv2xvnh.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/eG0oOQVsniPAuecPzDD1B1gnYWy.jpg'
        ]);

        Movies::create([
            'category_id' => $action->id,
            'title' => 'The 355',
            'slug' => 'the-355',
            'year' => 2022,
            'body' => 'A group of top female agents from American, British, Chinese, Columbian and German government agencies are drawn together to try and stop an organization from acquiring a deadly weapon to send the world into chaos.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/wZ2cQ4moYnIrJVaave1KUqH33Gc.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/8pgKccb5PfE1kWB9qqiXJem83VC.jpg'
        ]);

        Movies::create([
            'category_id' => $horror->id,
            'slug' => 'the-jack-in-the-box-awakening',
            'title' => 'The Jack in the Box: Awakening',
            'year' => 2022,
            'body' => 'When a vintage Jack-in-the-box is opened by a dying woman, she enters into a deal with the demon within that would see her illness cured in return for helping it claim six innocent victims.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/3Ib8vlWTrAKRrTWUrTrZPOMW4jp.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/xHRabofjmMGoIV3mb6xgy4nwOcS.jpg'
        ]);

        Movies::create([
            'category_id' => $family->id,
            'slug' => 'sing-2',
            'title' => 'Sing 2',
            'year' => 2021,
            'body' => 'Buster and his new cast now have their sights set on debuting a new show at the Crystal Tower Theater in glamorous Redshore City. But with no connections, he and his singers must sneak into the Crystal Entertainment offices, run by the ruthless wolf mogul Jimmy Crystal, where the gang pitches the ridiculous idea of casting the lion rock legend Clay Calloway in their show. Buster must embark on a quest to find the now-isolated Clay and persuade him to return to the stage.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/aWeKITRFbbwY8txG5uCj4rMCfSP.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/tutaKitJJIaqZPyMz7rxrhb4Yxm.jpg'
        ]);

        Movies::create([
            'category_id' => $romantic->id,
            'slug' => 'through-my-window',
            'title' => 'Through My Window',
            'year' => 2022,
            'body' => 'Raquel\'s longtime crush on her next-door neighbor turns into something more when he starts developing feelings for her, despite his family\'s objections.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/6gg7fvKc1ZxP9yCczweSxIGYp4S.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/4rsomWxlqnHt3muGYK06auhOib6.jpg'
        ]);

        Movies::create([
            'category_id' => $action->id,
            'slug' => 'the-matrix-resurrections',
            'title' => 'The Matrix Resurrections',
            'year' => 2021,
            'body' => 'Plagued by strange memories, Neo\'s life takes an unexpected turn when he finds himself back inside the Matrix.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/8c4a8kE7PizaGQQnditMmI1xbRp.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/eNI7PtK6DEYgZmHWP9gQNuff8pv.jpg'
        ]);

        Movies::create([
            'category_id' => $action->id,
            'slug' => 'last-man-down',
            'title' => 'Last Man Down',
            'year' => 2021,
            'body' => 'After civilization succumbs to a deadly pandemic and his wife is murdered, a special forces soldier abandons his duty and becomes a hermit in the Nordic wilderness. Years later, a wounded woman appears on his doorstep. She\'s escaped from a lab and her pursuers believe her blood is the key to a worldwide cure. He\'s hesitant to get involved, but all doubts are cast aside when he discovers her pursuer is none other than Commander Stone, the man that murdered his wife some years ago.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/4B7liCxNCZIZGONmAMkCnxVlZQV.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/t4To8feUSysyBs4tlBAbXIrKlCv.jpg'
        ]);

        Movies::create([
            'category_id' => $family->id,
            'slug' => 'tom-and-jerry-cowboy-up',
            'title' => 'Tom and Jerry: Cowboy Up!',
            'year' => 2022,
            'body' => 'This time, the rivals team up to help a cowgirl and her brother save their homestead from a greedy land-grabber, and they\'re going to need some help! Jerry\'s three precocious nephews are all ready for action, and Tom is rounding up a posse of prairie dogs. But can a ragtag band of varmints defeat a deceitful desperado determined to deceive a damsel in distress? No matter what happens with Tom and Jerry in the saddle, it\'ll be a rootin\' tootin\' good time!',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/muIaHotSaSUQr0KZCIJOYQEe7y2.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/q1NXVYTqSStNQsnKrCvtU6NPzEk.jpg'
        ]);

        Movies::create([
            'category_id' => $thriller->id,
            'slug' => 'mother-android',
            'title' => 'Mother/Android',
            'year' => 2021,
            'body' => 'Georgia and her boyfriend Sam go on a treacherous journey to escape their country, which is caught in an unexpected war with artificial intelligence. Days away from the arrival of their first child, the couple must face No Man\'s Land—a stronghold of the android uprising—in hopes of reaching safety before giving birth.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/rO3nV9d1wzHEWsC7xgwxotjZQpM.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/AmLpWYm9R3Ur2FLPgj5CH3wR8wp.jpg'
        ]);

        Movies::create([
            'category_id' => $drama->id,
            'slug' => 'house-of-gucci',
            'title' => 'House of Gucci',
            'year' => 2021,
            'body' => 'When Patrizia Reggiani, an outsider from humble beginnings, marries into the Gucci family, her unbridled ambition begins to unravel the family legacy and triggers a reckless spiral of betrayal, decadence, revenge, and ultimately…murder.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/vHla3Ej2m53rNmvmYkzvennLrKn.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/jdLsmpqmP1wTdFUPtmxMnYgoifT.jpg'
        ]);

        Movies::create([
            'category_id' => $action->id,
            'slug' => 'uncharted',
            'title' => 'Uncharted',
            'year' => 2022,
            'body' => 'A young street-smart, Nathan Drake and his wisecracking partner Victor "Sully" Sullivan embark on a dangerous pursuit of "the greatest treasure never found" while also tracking clues that may lead to Nathan\'s long-lost brother.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/nMO3QWa6liTwNWhVICkjzaYfPoH.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/oUoFM0f4YFW2jw7AymxUXYvGv7S.jpg'
        ]);

        Movies::create([
            'category_id' => $action->id,
            'slug' => 'mortal-kombat',
            'title' => 'Mortal Kombat',
            'year' => 2021,
            'body' => 'Washed-up MMA fighter Cole Young, unaware of his heritage, and hunted by Emperor Shang Tsung\'s best warrior, Sub-Zero, seeks out and trains with Earth\'s greatest champions as he prepares to stand against the enemies of Outworld in a high stakes battle for the universe.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/nkayOAUBUu4mMvyNf9iHSUiPjF1.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/9yBVqNruk6Ykrwc32qrK2TIE5xw.jpg'
        ]);

        Movies::create([
            'category_id' => $comedy->id,
            'slug' => 'free-guy',
            'title' => 'Free Guy',
            'year' => 2021,
            'body' => 'A bank teller called Guy realizes he is a background character in an open world video game called Free City that will soon go offline.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/xmbU4JTUm8rsdtn7Y3Fcm30GpeT.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/8Y43POKjjKDGI9MH89NW0NAzzp8.jpg'
        ]);

        Movies::create([
            'category_id' => $family->id,
            'slug' => 'the-boss-baby-family-business',
            'title' => 'The Boss Baby: Family Business',
            'year' => 2021,
            'body' => 'The Templeton brothers — Tim and his Boss Baby little bro Ted — have become adults and drifted away from each other. But a new boss baby with a cutting-edge approach and a can-do attitude is about to bring them together again … and inspire a new family business.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/kv2Qk9MKFFQo4WQPaYta599HkJP.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/pxOiKwRvNp3zFOiuwpYpzlbmEgC.jpg'
        ]);

        Movies::create([
            'category_id' => $action->id,
            'slug' => 'fortress',
            'title' => 'Fortress',
            'year' => 2021,
            'body' => 'The story revolves around a top-secret resort for retired U.S. intelligence officers. A group of criminals led by Balzary breach the compound, hellbent on revenge on Robert, forcing the retired officer and his son to save the day.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/vQxtoPJVfpHgL7DCg9hQFZKDWJa.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/1BqX34aJS5J8PefVnQSfQIEPfkl.jpg'
        ]);

        Movies::create([
            'category_id' => $horror->id,
            'slug' => 'dark-spell',
            'title' => 'Dark Spell',
            'year' => 2021,
            'body' => 'Terror strikes when a heartbroken woman uses black magic to get her husband back.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/2AbGdSGlU6CpiV3lswHUgE5CdAA.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/o2OSpKzXuB1edCDyVC2MXAxXwyJ.jpg'
        ]);

        Movies::create([
            'category_id' => $drama->id,
            'slug' => 'finch',
            'title' => 'Finch',
            'year' => 2021,
            'body' => 'On a post-apocalyptic Earth, a robot, built to protect the life of his dying creator\'s beloved dog, learns about life, love, friendship, and what it means to be human.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/jKuDyqx7jrjiR9cDzB5pxzhJAdv.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/oE6bhqqVFyIECtBzqIuvh6JdaB5.jpg'
        ]);

        Movies::create([
            'category_id' => $action->id,
            'slug' => 'the-last-warrior-root-of-evil',
            'title' => 'The Last Warrior: Root of Evil',
            'year' => 2021,
            'body' => 'Peace and tranquility have set in Belogorie. The evil was defeated and Ivan is now enjoying his well-deserved fame. He is surrounded by his family, friends and small wonders from the modern world that help him lead a comfortable life. Luckily, he has his Magic Sword to cut a gap between the worlds to get some supplies quite regularly. But when an ancient evil rises and the existence of the magic world is put to danger, Ivan has to team up with his old friends and his new rivals. They will set out on a long journey beyond the known world to find a way to defeat the enemies and to return peace to Belogorie.',
            'photo_poster' => 'https://image.tmdb.org/t/p/w500/4qE7mvUYGY5epfcgeJpM6EfHgq5.jpg',
            'photo_bg' => 'https://image.tmdb.org/t/p/original/dIibeeq4QMay5bTJ2vjr72IFFRo.jpg'
        ]);
    }
}
