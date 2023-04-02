<?php

namespace App\Controllers;


class Main extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function editor()
    {
        return view("quill_js");
    }

    public function admin()
    {
        return view('admin');
    }

    public function process($mode)
    {
        switch ($mode) {

            case 'changeheader': {

                    $header = new \App\Models\headerdb();
                    $title = $this->request->getPost('editor');
                    $header->save([
                        'header' => $title

                    ]);
                    return view('quill_js');
                }

            case 'changecontent': {

                    $contents = new \App\Models\contentdb();
                    $title = $this->request->getPost('pagetitle');
                    $_content = $this->request->getPost('pagecontent');
                    $contents->save([
                        'pagetitle' => $title,
                        'content' => $_content

                    ]);
                    return view('quill_js');
                }

            case 'changefooter': {

                    $_footer = new \App\Models\footerdb();
                    $title = $this->request->getPost('pagefooter');
                    $_footer->save([
                        'footers' => $title

                    ]);
                    return view('quill_js');
                }
        }
    }

    public function front()
    {
        return view('frontend');
    }

    
    // public function getFile($id) {
    //     // Load the database library
    //     $db = \Config\Database::connect();
    
    //     // Fetch the file data from the database
    //     $query = $db->query("SELECT * FROM files WHERE id = $id");
    //     $result = $query->getResult();
    
    //     // Check if the file exists
    //     if (count($result) > 0) {
    //         $fileData = $result[0]->data;
    //         $fileName = $result[0]->name;
    //         $fileType = $result[0]->type;
    
    //         // Set the response headers
    //         header("Content-type: $fileType");
    //         header("Content-Disposition: inline; filename=$fileName");
    //         header("Content-length: " . strlen($fileData));
    
    //         // Output the file data
    //         echo $fileData;
    //     } else {
    //         // Return a 404 error if the file does not exist
    //         throw new \CodeIgniter\Exceptions\PageNotFoundException();
    //     }
    // }
    
}
