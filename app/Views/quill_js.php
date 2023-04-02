<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuillJS Editor in CodeIgniter 4</title>

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        function showDiv(e11, e12, e13) {
            document.getElementById(e11).style.display = 'block';
            document.getElementById(e12).style.display = 'none';
            document.getElementById(e13).style.display = 'none';

        }
    </script>

    <style>
        #editor {
            height: 400px;
        }

        #myheader,
        #mycontent,
        #myfooter {
            display: none;
        }
    </style>
       <!-- <div id="editor"></div>
    <script>
        var quill = new Quill('#editor', {
            modules: {
                toolbar: [
                    [{
                        header: [1, 2, 3, 4, 5, 6, false]
                    }],
                    ['bold', 'italic', 'underline', 'strike', 'blockquote', 'code-block']
                    [{
                        list: 'ordered'
                    }, {
                        list: 'bullet'
                    }],
                    ['link', 'image', 'video'],
                    [{
                        align: []
                    }],
                    [{
                        color: []
                    }, {
                        background: []
                    }],
                    [{
                        font: []
                    }],
                    [{
                        size: []
                    }],
                    ['clean']
                ]
            },
            theme: 'snow'
        });
    </script> -->
</head>



<body>


    <div id="nav">

        <ul>
            <button id="header-div" onclick="showDiv('myheader','mycontent','myfooter')">Header</button>
            <button id="page-div" onclick="showDiv('mycontent','myheader','myfooter')">Page / Content</button>
            <button id="footer-div" onclick="showDiv('myfooter','myheader','mycontent')">Footer</button>
        </ul>

    </div>



    <div id="contents">




        <div id="myheader">

            <form action="http://localhost/binan/public/process/changeheader" method="post">
                <p>Header</p>
                <textarea name="titleheader"></textarea>
                <input  type="submit" name="headersumbmit" value="Save">
            </form>


        </div>

        <div id="open-header" hidden>

            <?php
            $urls = [];
            $qturl_m = new \App\Models\headerdb();
            $urls_data = $qturl_m->findAll();

            foreach ($urls_data as $elem) {
                $urls[] = [
                    'id' => $elem['id'],
                    'header' => $elem['header'],
                    'dtc' => $elem['dtc'],
                ];
            }

            // foreach ($urls as $elem) {
            //     echo '<li>Report Title: <a href="' . $elem['Title'] . '" target="_blank">' . $elem['Title'] . '</a> Report Description: <a href="' . $elem['Description'] . '" target="_blank">' . $elem['Description'] . '</a></li>';
            // }


            foreach ($urls as $elem) {
                echo "<li><a href='" . site_url('headers') . "?id=" . $elem['id'] . "' class='btn btn-warning'>Edit</a> <a href='" . site_url('process/delete_user') . "?id=" . $elem['id'] . "' class='btn btn-danger'>Delete</a> ID: " . $elem['id'] . "  Header Title: " . $elem['header'] . ' Date TIme: ' . $elem['dtc'] . "</li>";
            }


            ?>

        </div>



        <div id="mycontent">

            <form action="http://localhost/binan/public/process/changecontent" method="post">
                <p>Page Title</p>
                <input type="text" name="pagetitle">
                <p>Content</p>
                <textarea name="pagecontent"></textarea>
                <input type="submit" name="contentsumbmit" value="Save">
            </form>

        </div>

        <div id="open-page" hidden>

            <?php
            $urls = [];
            $qturl_m = new \App\Models\contentdb();
            $urls_data = $qturl_m->findAll();

            foreach ($urls_data as $elem) {
                $urls[] = [
                    'id' => $elem['id'],
                    'pagetitle' => $elem['pagetitle'],
                    'content' => $elem['content'],
                    'dtc' => $elem['dtc'],
                ];
            }

            // foreach ($urls as $elem) {
            //     echo '<li>Report Title: <a href="' . $elem['Title'] . '" target="_blank">' . $elem['Title'] . '</a> Report Description: <a href="' . $elem['Description'] . '" target="_blank">' . $elem['Description'] . '</a></li>';
            // }


            foreach ($urls as $elem) {
                echo "<li><a href='" . site_url('contents') . "?id=" . $elem['id'] . "' class='btn btn-warning'>Edit</a> <a href='" . site_url('process/delete_user') . "?id=" . $elem['id'] . "' class='btn btn-danger'>Delete</a> ID: " . $elem['id'] . "  Page Title: " . $elem['pagetitle'] . ' Page Content: ' . $elem['content'] . ' Date TIme: ' . $elem['dtc'] . "</li>";
            }


            ?>

        </div>


        <div id="myfooter">

            <form action="http://localhost/binan/public/process/changefooter" method="post">
                <p>Footer</p>
                <textarea name="pagefooter"></textarea>
                <input type="submit" name="footersumbmit" value="Save">
            </form>

        </div>

        <div id="open-footer" hidden>

            <?php
            $urls = [];
            $qturl_m = new \App\Models\footerdb();
            $urls_data = $qturl_m->findAll();

            foreach ($urls_data as $elem) {
                $urls[] = [
                    'id' => $elem['id'],
                    'footers' => $elem['footers'],
                    'dtc' => $elem['dtc'],
                ];
            }

            // foreach ($urls as $elem) {
            //     echo '<li>Report Title: <a href="' . $elem['Title'] . '" target="_blank">' . $elem['Title'] . '</a> Report Description: <a href="' . $elem['Description'] . '" target="_blank">' . $elem['Description'] . '</a></li>';
            // }


            foreach ($urls as $elem) {
                echo "<li><a href='" . site_url('footer') . "?id=" . $elem['id'] . "' class='btn btn-warning'>Edit</a> <a href='" . site_url('process/delete_user') . "?id=" . $elem['id'] . "' class='btn btn-danger'>Delete</a> ID: " . $elem['id'] . "  Page Footer: " . $elem['footers'] . ' Date TIme: ' . $elem['dtc'] . "</li>";
            }

            ?>

        </div>



    </div>

    <script>
        document.getElementById('header-div').addEventListener('click', function(event) {
            var div2 = document.getElementById('open-header');
            var pagediv2 = document.getElementById('open-page');
             var footerdiv2 = document.getElementById('open-footer');
            footerdiv2.setAttribute('hidden', true);
            pagediv2.setAttribute('hidden', true);
            div2.removeAttribute('hidden');

        });
        document.getElementById('page-div').addEventListener('click', function(event) {
            var headerdiv = document.getElementById('open-header');
            var pagediv2 = document.getElementById('open-page');
            var footerdiv2 = document.getElementById('open-footer');
            footerdiv2.setAttribute('hidden', true);
            headerdiv.setAttribute('hidden', true);
            pagediv2.removeAttribute('hidden');

        });
        document.getElementById('footer-div').addEventListener('click', function(event) {
            var div2 = document.getElementById('open-header');
            var pagediv2 = document.getElementById('open-page');
            var footerdiv2 = document.getElementById('open-footer');
            div2.setAttribute('hidden', true);
            pagediv2.setAttribute('hidden', true);
            footerdiv2.removeAttribute('hidden');

        });
    </script>







</body>

</html>