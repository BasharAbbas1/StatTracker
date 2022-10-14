<div class="min-h-full flex items-center justify-center py-60 px-4 sm:px-6 lg:px-8">
    <div class="bg-white p-4 border-4 border-double rounded-lg border-black">
        <h2 class="mt-6 text-center font-extrabold text-gray-900">Inloggen</h2>
        <p class="mt-2 text-center text-sm text-gray-600">
        </p>

        <form class="mt-8 space-y-6 pl-3 pr-3" action="#" method="POST">
            <input type="hidden" name="remember" value="true">
            <div class="rounded-md shadow-sm space-y-6">
                <div>
                    <label for="name" class="sr-only">Naam</label>
                    <input id="name" name="name" type="name" autocomplete="name" required
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-gray-900 focus:border-gray-500 focus:z-10 sm:text-sm"
                        placeholder="Bob Smith">
                </div>
                <div>
                    <label for="email-address" class="sr-only">Email address</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" required
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-gray-900 focus:border-gray-500 focus:z-10 sm:text-sm"
                        placeholder="myname@mail.com">
                </div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-gray-900 focus:border-gray-500 focus:z-10 sm:text-sm"
                        placeholder="wachtwoord">
                </div>
            </div>

            <div>
                <div class="g-recaptcha" data-sitekey="6LccEWEiAAAAAOMHGh31cv__8SLJj5_aIyBUmnwp"></div>
                <input name="submit" type="submit" value="REGISTREREN"
                    class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-full text-black bg-gray-300 hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">
                    <div class="space-x-8 underline underline-offset-2 text-black">
                    <a href="index.php?page=login">Inloggen</a>
                </div>
            </div>
            
    </div>
</div>




<?php
if(isset($_POST["submit"])){
    $error = " ";
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    $recaptcha = $_POST['g-recaptcha-response'];
    
    $secret_key = "6LccEWEiAAAAADl4wGgge-bwobVEkoOR1eEMsUVz";
  
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret='
          . $secret_key . '&response=' . $recaptcha;

           // Making request to verify captcha
    $response = file_get_contents($url);

    $response = json_decode($response);
    
    if ($response->success == true) {

    try{
        $sql = "SELECT ID,email,password,naam FROM user WHERE email = ?";
        $stmt = $db->prepare($sql); $stmt->execute(array($email));
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if($result){
            $hash = $result["password"];
            if(password_verify($password, $hash)){
                $MySession = session_id();
                $_SESSION["ID"] = $MySession;
                $_SESSION["USERID"] = $result["ID"];
                $_SESSION["USER"] = $result["Naam"];
                $_SESSION["EMAIL"] = $result["Email"];
                $_SESSION["STATUS"] = 1;
                $_SESSION["ADMIN"] = 0;
                echo "
                <script>location.href='index.php?page=dashboard';</script>";
            } else {
                $error .= "Inloggegevens ongeldig.<br>";
            }
            } else {
                $error .= "Inloggegevens ongeldig.<br>";
            }
        } catch (PDOException $e){
            echo $e->getMessage();
        }


        echo "<div id='meldingen'>".$error."</div>";
    } 
} else {
    
}


    if(isset($_SESSION["STATUS"]) && !empty($_SESSION["STATUS"])){

    echo "<script>location.href='index.php?page=dashboard';</script>"; 
    }
  ?>
</body>