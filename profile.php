<?php $page = 'profile';
 require_once("nav.php");?>


  <div class="bg-gray-400 shadow shadow-lg shadow-gray-400/50 px-4 box-border h-64 inset-x-1/4 top-auto absolute w-1/2 border-4 py-5 sm:rounded-lg sm:p-6">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Profiel Aanpassen</h3>
        <p class="mt-1 text-sm text-gray-500">Verander jouw profiel informatie</p>
      </div>
      <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="#" method="POST">
          <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
              <label for="name" class="block text-sm font-medium text-gray-700">Naam</label>
              <input value='<?php $sql = "SELECT Name from user WHERE ID = ". $_SESSION["USERID"]; $stmt = $db->prepare($sql); $stmt->execute(); $Name = $stmt->fetchColumn(); echo $Name;?>' type="text" name="first-name" id="first-name" autocomplete="given-name" class="non-editable mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="last-name" class="block text-sm font-medium text-gray-700">Email</label>
              <input value='<?php $sql = "SELECT Email from user WHERE ID = ". $_SESSION["USERID"]; $stmt = $db->prepare($sql); $stmt->execute(); $Emails = $stmt->fetchColumn(); echo $Emails;?>'  type="text" name="email-address" id="email-address" autocomplete="email" class="non-editable mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="col-span-6 sm:col-span-4">
              <label for="password" class=" block text-sm font-medium text-gray-700">Wachtwoord</label>
              <input value='<?php $sql = "SELECT Password from user WHERE ID = ". $_SESSION["USERID"]; $stmt = $db->prepare($sql); $stmt->execute(); $Password = $stmt->fetchColumn(); echo $Password;?>' type="password" name="password" id="password" autocomplete="password" class="non-editable mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
          </div>
        </form>
      </div>
    </div>
    <br>
    <div class="flex justify-end">
    <button type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Annuleren</button>
    <input type="submit" value="Opslaan" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"></input>
  </div>
  <div class="flex justify-center right-10">
  <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3 ">
    <div class="px-4 py-5 bg-zinc-400 shadow rounded-lg overflow-hidden sm:p-6 w-64 h-32">
      <dt class="text-sm font-medium text-gray-500 truncate">Goals</dt>
      <dd class="mt-1 text-3xl font-semibold text-gray-900"><?php $sql = "SELECT Goals from user WHERE ID = ". $_SESSION["USERID"]; $stmt = $db->prepare($sql); $stmt->execute(); $Goals = $stmt->fetchColumn(); echo $Goals;?></dd>
    </div>

    <div class="px-4 py-5 bg-zinc-400 shadow rounded-lg overflow-hidden sm:p-6">
      <dt class="text-sm font-medium text-gray-500 truncate">Assists</dt>
      <dd class="mt-1 text-3xl font-semibold text-gray-900"><?php $sql = "SELECT Assists from user WHERE ID = ". $_SESSION["USERID"]; $stmt = $db->prepare($sql); $stmt->execute(); $Assists = $stmt->fetchColumn(); echo $Assists;?></dd>
    </div>
  </dl>
</div>
</div>

