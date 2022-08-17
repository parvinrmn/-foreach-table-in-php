<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>name</th>
                    <th>grade</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $students = [
                    [
                        "name" => "parvin",
                        "grade" => "bachelor"
                    ],
                    [
                        "name" => "pouya",
                        "grade" => "master"
                    ],
                    [
                        "name" => "negar",
                        "grade" => "phd"
                    ]

                ];
                $id=1;
                foreach($students as $val){
                    
                    print 
                        "
                        <tr>
                            <td>{$id}</td>
                            <td>{$val['name']}</td>
                            <td>{$val['grade']}</td>
                        </tr>
                        " 
                    ;
                    $id++;
                };
                
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>