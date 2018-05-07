# faq

To run the faq project:
1.Git Clone https://github.com/NivedhaLena/faq.git
2.CD into FAQ and run composer install
3.cp .env.example to .env
4.run: php artisan key:generate
5.setup database / with sqlite or other https://laravel.com/docs/5.6/database
6.Run: php artisan migrate
7.Run: unit tests: phpunit
8.Run: seeds php artisan migrate:refresh --seed
9.add_column :answers, :ratings, :string, default:easy


User Stories:
1. As a user you can resgister or login to his account to access the questions.
2. As a User you can use the links from laravel welcome page to navigate through hashtag links to question page.
3. As a user you create question and answers , also can edit and delete if neccessary.
4. As a User you can select question rating from  dropdown in the create/edit answers form to specify the difficulty level of questions.
