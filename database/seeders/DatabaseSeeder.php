<?php

namespace Database\Seeders;

use App\Models\EBook;
use App\Models\Gender;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Untuk Role
        Role::create([
            'role_desc' => 'User'
        ]);

        Role::create([
            'role_desc' => 'Admin'
        ]);

        // Untuk Gender
        Gender::create([
            'gender_desc' => 'Male'
        ]);

        Gender::create([
            'gender_desc' => 'Female'
        ]);

        // Untuk E-Book
        EBook::create([
            'title' => 'Last Hope',
            'author' => 'Yanagi Nagi',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam voluptas commodi, saepe nemo maiores eaque esse magni accusantium numquam quisquam ea repudiandae facere. Porro ab quos doloribus, aliquid, voluptatibus quidem sed tempora unde, labore ullam rerum qui ratione dolorum aliquam impedit eligendi sint eaque molestias natus in quaerat. Aperiam, facere modi in molestias quod unde. Voluptas ipsam quam minus earum quidem libero culpa. Accusamus temporibus reprehenderit aut? Tempore, unde? Optio quia odio debitis esse, itaque ipsam voluptas tenetur possimus cum magni cumque autem vero, repudiandae inventore sit nemo similique accusamus. Vero a amet nemo cum pariatur similique magnam, natus minus.'
        ]);

        EBook::create([
            'title' => 'Venturas',
            'author' => 'C',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam voluptas commodi, saepe nemo maiores eaque esse magni accusantium numquam quisquam ea repudiandae facere. Porro ab quos doloribus, aliquid, voluptatibus quidem sed tempora unde, labore ullam rerum qui ratione dolorum aliquam impedit eligendi sint eaque molestias natus in quaerat. Aperiam, facere modi in molestias quod unde. Voluptas ipsam quam minus earum quidem libero culpa. Accusamus temporibus reprehenderit aut? Tempore, unde? Optio quia odio debitis esse, itaque ipsam voluptas tenetur possimus cum magni cumque autem vero, repudiandae inventore sit nemo similique accusamus. Vero a amet nemo cum pariatur similique magnam, natus minus.

            Eligendi ad tempore obcaecati, ratione ab nemo rerum, quia harum laboriosam, fugiat corporis enim vero magnam? Ad eligendi iure blanditiis quas molestias nisi consequatur qui debitis vero laudantium. Nesciunt sed ab maiores neque consectetur eius est vel aut rem quod odit, ut laborum recusandae quibusdam impedit deserunt quo quisquam at reiciendis officiis! Eius quisquam vero veniam magni fugiat qui impedit obcaecati, eveniet animi delectus iste cumque earum error nam. Laborum tempora sequi, nesciunt facilis, distinctio ut quisquam esse minus ipsum cupiditate totam exercitationem iste. Numquam magnam autem ducimus eum. Esse quis blanditiis velit consequuntur repellendus quia adipisci, sit dignissimos accusamus natus, aperiam sunt quisquam commodi debitis recusandae odit id! Ab, aut inventore!'
        ]);

        EBook::create([
            'title' => 'Senbonzakura',
            'author' => 'N@N@',
            'description' => 'Numquam quod sint eius, corporis dolores adipisci temporibus, facilis illum ducimus incidunt iste harum velit, dolorum quibusdam quia! Rerum molestiae dignissimos omnis magni quam quod quibusdam quasi, aliquid explicabo, ratione quas pariatur eaque reiciendis, sint delectus aliquam dolores voluptatem quia distinctio ipsa laudantium aspernatur vitae? Debitis, dicta. Architecto quasi recusandae perspiciatis, harum omnis quas nihil dolores corrupti! Neque eius dolore corrupti sit nostrum necessitatibus aliquid ullam alias, velit porro, quasi sint qui accusantium dolor accusamus excepturi. Necessitatibus dolores assumenda cumque, at sunt minus iste error ad accusantium harum, in repudiandae consectetur quia? Nostrum modi pariatur soluta animi voluptates eum tempore ut omnis voluptas nisi blanditiis, aspernatur quam, libero maxime?

            Eligendi ad tempore obcaecati, ratione ab nemo rerum, quia harum laboriosam, fugiat corporis enim vero magnam? Ad eligendi iure blanditiis quas molestias nisi consequatur qui debitis vero laudantium. Nesciunt sed ab maiores neque consectetur eius est vel aut rem quod odit, ut laborum recusandae quibusdam impedit deserunt quo quisquam at reiciendis officiis! Eius quisquam vero veniam magni fugiat qui impedit obcaecati, eveniet animi delectus iste cumque earum error nam. Laborum tempora sequi, nesciunt facilis, distinctio ut quisquam esse minus ipsum cupiditate totam exercitationem iste. Numquam magnam autem ducimus eum. Esse quis blanditiis velit consequuntur repellendus quia adipisci, sit dignissimos accusamus natus, aperiam sunt quisquam commodi debitis recusandae odit id! Ab, aut inventore!'
        ]);

        EBook::create([
            'title' => 'Re::',
            'author' => 'Zyxx',
            'description' => 'Eligendi ad tempore obcaecati, ratione ab nemo rerum, quia harum laboriosam, fugiat corporis enim vero magnam? Ad eligendi iure blanditiis quas molestias nisi consequatur qui debitis vero laudantium. Nesciunt sed ab maiores neque consectetur eius est vel aut rem quod odit, ut laborum recusandae quibusdam impedit deserunt quo quisquam at reiciendis officiis! Eius quisquam vero veniam magni fugiat qui impedit obcaecati, eveniet animi delectus iste cumque earum error nam. Laborum tempora sequi, nesciunt facilis, distinctio ut quisquam esse minus ipsum cupiditate totam exercitationem iste. Numquam magnam autem ducimus eum. Esse quis blanditiis velit consequuntur repellendus quia adipisci, sit dignissimos accusamus natus, aperiam sunt quisquam commodi debitis recusandae odit id! Ab, aut inventore!'

        ]);
        EBook::create([
            'title' => 'Wrapping in Snow',
            'author' => 'A.Situmorang',
            'description' => 'Minus eos sint neque quod, odit commodi, porro nemo quam at reiciendis vero magni doloremque veritatis dignissimos soluta eligendi obcaecati quia quo! Ut ab aperiam repudiandae assumenda culpa fuga omnis! Corrupti obcaecati iusto magni molestiae laudantium nostrum dolores incidunt esse commodi ea illum, iste repellat consequuntur iure deleniti accusamus vel doloribus dolor aspernatur fuga quod architecto omnis. Porro autem placeat rem hic impedit id odit enim esse numquam quod sint eius, corporis dolores adipisci temporibus, facilis illum ducimus incidunt iste harum velit, dolorum quibusdam quia! Rerum molestiae dignissimos omnis magni quam quod quibusdam quasi, aliquid explicabo, ratione quas pariatur eaque reiciendis, sint delectus aliquam dolores voluptatem quia distinctio ipsa laudantium aspernatur vitae? Debitis, dicta.

            Architecto quasi recusandae perspiciatis, harum omnis quas nihil dolores corrupti! Neque eius dolore corrupti sit nostrum necessitatibus aliquid ullam alias, velit porro, quasi sint qui accusantium dolor accusamus excepturi. Necessitatibus dolores assumenda cumque, at sunt minus iste error ad accusantium harum, in repudiandae consectetur quia? Nostrum modi pariatur soluta animi voluptates eum tempore ut omnis voluptas nisi blanditiis, aspernatur quam, libero maxime? Placeat error eum, consectetur natus labore omnis aperiam dolores doloremque perferendis molestiae nobis quam minima! Rerum aliquam corrupti quos aliquid earum. Ea, ratione accusamus? Asperiores earum doloribus consequatur quod molestias molestiae voluptate consectetur odio cumque, voluptates, voluptatum sequi quo sint non natus! Quo labore quod ipsum, cum magni explicabo optio corporis veritatis totam, fuga repellendus nam? Perspiciatis exercitationem laudantium quos, iusto aspernatur, a sit corrupti minima necessitatibus, magnam eligendi voluptates voluptate deleniti deserunt consequuntur excepturi tempora dolorum nam? Cupiditate in eligendi harum sequi debitis, aliquam vel molestiae eos aliquid, nihil totam repudiandae eius ab voluptate. Quidem commodi, animi ad repudiandae explicabo numquam sint.'
        ]);

        EBook::create([
            'title' => 'Enkanomiya',
            'author' => 'Hueri Huero',
            'description' => 'quo ullam necessitatibus qui, facilis vel soluta hic! Explicabo at nostrum saepe eveniet consequatur natus ipsa voluptates velit distinctio consectetur, dolores neque iure adipisci numquam architecto iusto nobis quibusdam sit excepturi recusandae? Amet, doloribus aperiam excepturi illo sit consectetur? Dolorum sunt voluptates, culpa autem excepturi eos, necessitatibus, explicabo doloremque assumenda unde veniam fuga aut eum possimus alias! Officiis doloribus, porro a recusandae ipsam beatae facilis, nesciunt voluptates corporis est cupiditate dolore commodi natus, similique ipsa dolorem suscipit laborum itaque. Minima hic exercitationem officiis eius? Iste, nostrum, iusto saepe voluptas similique minus aperiam enim, rem doloremque

            adipisci doloribus natus optio eos assumenda? Consequuntur quo impedit deleniti vel aut inventore, cumque ab nisi beatae, aliquam, doloribus nesciunt ipsum porro itaque eos ea hic nobis quibusdam exercitationem minus aperiam? Nam sit nihil rerum pariatur corrupti voluptatum deserunt, illum quam velit ab neque vel autem quia! Mollitia tenetur libero tempora veritatis numquam suscipit, totam labore vero dolore quia eligendi et, fugit perferendis est quam, molestias ullam saepe quis obcaecati nemo. Culpa officiis necessitatibus, id fuga delectus numquam temporibus excepturi dolor neque in reiciendis, dolorum iste ipsam magnam vero voluptates omnis rem optio magni.'
        ]);

        EBook::create([
            'title' => 'The Legend of StyleBender',
            'author' => 'Izzy',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore distinctio incidunt quasi sequi itaque repellat. Voluptatum, fuga laudantium? Saepe odio quasi qui hic distinctio deleniti dolorem itaque illum nemo, magnam assumenda voluptatibus suscipit alias error maiores accusamus incidunt reprehenderit, quam fugit dignissimos eius? Deserunt voluptatem, maiores dignissimos sint accusamus veritatis commodi, rem iure saepe blanditiis consequuntur! Facilis dicta eos, est laudantium, incidunt exercitationem obcaecati illo magni distinctio aperiam quis commodi atque, recusandae dolorem cum a excepturi. Quia voluptas beatae rerum optio voluptate illum in, officiis quas atque, quam laboriosam quisquam ex unde repudiandae? Ipsa neque amet reiciendis tempora animi consectetur dolor illo aspernatur architecto corporis adipisci quis suscipit dolorum corrupti maiores.'
        ]);

        EBook::create([
            'title' => 'Fox Tail in Grass',
            'author' => 'B1z',
            'description' => 'Voluptatum, fuga laudantium? Saepe odio quasi qui hic distinctio deleniti dolorem itaque illum nemo, magnam assumenda voluptatibus suscipit alias error maiores accusamus incidunt reprehenderit, quam fugit dignissimos eius? Deserunt voluptatem, maiores dignissimos sint accusamus veritatis commodi, rem iure saepe blanditiis consequuntur! Facilis dicta eos, est laudantium, incidunt exercitationem obcaecati illo magni distinctio aperiam quis commodi atque, recusandae dolorem cum a excepturi. Quia voluptas beatae rerum optio voluptate illum in, officiis quas atque, quam laboriosam quisquam ex unde repudiandae? Ipsa neque amet reiciendis tempora animi consectetur dolor illo aspernatur architecto corporis adipisci quis suscipit dolorum corrupti maiores

            quo ullam necessitatibus qui, facilis vel soluta hic! Explicabo at nostrum saepe eveniet consequatur natus ipsa voluptates velit distinctio consectetur, dolores neque iure adipisci numquam architecto iusto nobis quibusdam sit excepturi recusandae?'
        ]);

        EBook::create([
            'title' => 'In Rain, I am waiting you',
            'author' => 'Thomas Alpha',
            'description' => 'quo ullam necessitatibus qui, facilis vel soluta hic! Explicabo at nostrum saepe eveniet consequatur natus ipsa voluptates velit distinctio consectetur, dolores neque iure adipisci numquam architecto iusto nobis quibusdam sit excepturi recusandae? Amet, doloribus aperiam excepturi illo sit consectetur? Dolorum sunt voluptates, culpa autem excepturi eos, necessitatibus, explicabo doloremque assumenda unde veniam fuga aut eum possimus alias! Officiis doloribus, porro a recusandae ipsam beatae facilis, nesciunt voluptates corporis est cupiditate dolore commodi natus, similique ipsa dolorem suscipit laborum itaque. Minima hic exercitationem officiis eius? Iste, nostrum, iusto saepe voluptas similique minus aperiam enim, rem doloremque

            adipisci doloribus natus optio eos assumenda? Consequuntur quo impedit deleniti vel aut inventore, cumque ab nisi beatae, aliquam, doloribus nesciunt ipsum porro itaque eos ea hic nobis quibusdam exercitationem minus aperiam? Nam sit nihil rerum pariatur corrupti voluptatum deserunt, illum quam velit ab neque vel autem quia! Mollitia tenetur libero tempora veritatis numquam suscipit, totam labore vero dolore quia eligendi et, fugit perferendis est quam, molestias ullam saepe quis obcaecati nemo. Culpa officiis necessitatibus, id fuga delectus numquam temporibus excepturi dolor neque in reiciendis, dolorum iste ipsam magnam vero voluptates omnis rem optio magni.'
        ]);

        EBook::create([
            'title' => '5 CM per Second',
            'author' => 'Makoto Shinkai',
            'description' => 'Voluptatum, fuga laudantium? Saepe odio quasi qui hic distinctio deleniti dolorem itaque illum nemo, magnam assumenda voluptatibus suscipit alias error maiores accusamus incidunt reprehenderit, quam fugit dignissimos eius? Deserunt voluptatem, maiores dignissimos sint accusamus veritatis commodi, rem iure saepe blanditiis consequuntur! Facilis dicta eos, est laudantium, incidunt exercitationem obcaecati illo magni distinctio aperiam quis commodi atque, recusandae dolorem cum a excepturi. Quia voluptas beatae rerum optio voluptate illum in, officiis quas atque, quam laboriosam quisquam ex unde repudiandae? Ipsa neque amet reiciendis tempora animi consectetur dolor illo aspernatur architecto corporis adipisci quis suscipit dolorum corrupti maiores

            quo ullam necessitatibus qui, facilis vel soluta hic! Explicabo at nostrum saepe eveniet consequatur natus ipsa voluptates velit distinctio consectetur, dolores neque iure adipisci numquam architecto iusto nobis quibusdam sit excepturi recusandae?'
        ]);

        EBook::create([
            'title' => 'Talent',
            'author' => 'Davzyx',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore distinctio incidunt quasi sequi itaque repellat. Voluptatum, fuga laudantium? Saepe odio quasi qui hic distinctio deleniti dolorem itaque illum nemo, magnam assumenda voluptatibus suscipit alias error maiores accusamus incidunt reprehenderit, quam fugit dignissimos eius? Deserunt voluptatem, maiores dignissimos sint accusamus veritatis commodi, rem iure saepe blanditiis consequuntur! Facilis dicta eos, est laudantium, incidunt exercitationem obcaecati illo magni distinctio aperiam quis commodi atque, recusandae dolorem cum a excepturi. Quia voluptas beatae rerum optio voluptate illum in, officiis quas atque, quam laboriosam quisquam ex unde repudiandae? Ipsa neque amet reiciendis tempora animi consectetur dolor illo aspernatur architecto corporis adipisci quis suscipit dolorum corrupti maiores

            quo ullam necessitatibus qui, facilis vel soluta hic! Explicabo at nostrum saepe eveniet consequatur natus ipsa voluptates velit distinctio consectetur, dolores neque iure adipisci numquam architecto iusto nobis quibusdam sit excepturi recusandae? Amet, doloribus aperiam excepturi illo sit consectetur? Dolorum sunt voluptates, culpa autem excepturi eos, necessitatibus, explicabo doloremque assumenda unde veniam fuga aut eum possimus alias! Officiis doloribus, porro a recusandae ipsam beatae facilis, nesciunt voluptates corporis est cupiditate dolore commodi natus, similique ipsa dolorem suscipit laborum itaque. Minima hic exercitationem officiis eius? Iste, nostrum, iusto saepe voluptas similique minus aperiam enim, rem doloremque

            adipisci doloribus natus optio eos assumenda? Consequuntur quo impedit deleniti vel aut inventore, cumque ab nisi beatae, aliquam, doloribus nesciunt ipsum porro itaque eos ea hic nobis quibusdam exercitationem minus aperiam? Nam sit nihil rerum pariatur corrupti voluptatum deserunt, illum quam velit ab neque vel autem quia! Mollitia tenetur libero tempora veritatis numquam suscipit, totam labore vero dolore quia eligendi et, fugit perferendis est quam, molestias ullam saepe quis obcaecati nemo. Culpa officiis necessitatibus, id fuga delectus numquam temporibus excepturi dolor neque in reiciendis, dolorum iste ipsam magnam vero voluptates omnis rem optio magni.'
        ]);

    }
}
