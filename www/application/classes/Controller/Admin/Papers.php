<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Papers extends Controller_Ajax
{



    /**
     * метод для загрузки файлов в указанную директорию
     * @type ajax
     * */
    public function action_upload_file()
    {
        $uploadDir = APPPATH.'uploads_old/downloaded/';
        $file = $uploadDir . basename($_FILES['uploadfile']['name']);

        if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $file))
            echo 'success';
        else
            echo 'error';
    }



    public function action_gup()
    {
     /*   $client = new Google_Client();
// Get your credentials from the APIs Console
        $client->setClientId('1064636737871-4asm4jhp13cd56lqq8h1fn2174irkfb3.apps.googleusercontent.com');
        $client->setClientSecret('KVbrfm0DecnWnwoiv_P8AviT');
        $client->setRedirectUri(URL::site().'admin/auth/goauth');
        $client->setScopes(array('https://www.googleapis.com/auth/drive'));

        $service = new Google_DriveService($client);


        $authUrl = $client->createAuthUrl();

//Request authorization
        print "Please visit:\n$authUrl\n\n";
        print "Please enter the auth code:\n";
        $authCode = trim(fgets(STDIN));

// Exchange authorization code for access token
        $accessToken = $client->authenticate($authCode);
        $client->setAccessToken($accessToken);

//Insert a file
        $file = new Google_DriveFile();
        $file->setTitle('My document');
        $file->setDescription('A test document');
        $file->setMimeType('text/plain');

        $data = file_get_contents('gjgjhgjhgjgjhgjhgjgjgjgjhgjgjhgjhggjg');

        $createdFile = $service->files->insert($file, array(
            'data' => $data,
            'mimeType' => 'text/plain',
        ));

        print_r($createdFile);*/
    }

}