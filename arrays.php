<h1> Arrays</h1>

<?php
//Indexed or numeric arrays
$fnames= ["Alex", "Lisa", "Nyago"];
print_r($fnames);

$colors= array("Black","Green","Yellow","White","Red", "Blue");

?>

<pre>
    <?php print_r($colors); ?>
</pre>
        <?php print $fnames[1]; ?>
        <?php
        //Associative Arrays
        $user=[
            "fullname"=>"Alex Okama",
            "email"=>"AOkama@yahoo.com",
            "phone"=>"+254798765421"
        ];
        ?>
        <pre>
        <?php print_r($user); ?>
    </pre>
        <?php
        //Multidimentional Arrays

        $user_details=[
            "Director"=>array(
            "fullname"=>"Lisa Okama",
            "email"=>"LOkama@yahoo.com",
            "phone"=> {
               "Mobile"=> "+254743225543",
               "Work"=>"+254718335543",
               "Cell"=>"+25475543890"
            }
        ),
        "Manager"=> array(
            "fullname"=>"Nyago Okama",
            "email"=>"NOkama@yahoo.com",
            "phone"=> {
               "Mobile"=> "+25476677553",
               "Work"=>"+2547111224467",
               "Cell"=>"+254700193344"
            }
        )
        ];
        print $user_details["Secretary"]["phone"]["Work"];
        ?>
        <pre>
            <?php print_r($user_details); ?>
    </pre>
    <?php
    $items=["book","pen",456,45.5,"File54"];
    ?>

    <pre>
        <?php var_dump($items); ?>
    </pre>

    <?php
     //fnames
    $age = [45,42,23];

    $user_age = array_combine($fnames, $age);

    $user_data =array_merge($fnames, $age);
    ?>

    <pre>
        <?php print_r($user_data); ?>
    </pre>