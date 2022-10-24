<?php $page = 'stats';
 require_once("nav.php");?>


<div class="flex justify-center">
  <h3 class="text-lg leading-6 font-medium text-gray-900"><?php     echo $_SESSION["USER"] . "'s"; ?> Stats</h3>
  <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3 ">
    <div class="px-4 py-5 bg-zinc-600 shadow rounded-lg overflow-hidden sm:p-6 w-64 h-32">
      <dt class="text-sm font-medium text-gray-500 truncate">Goals</dt>
      <dd class="mt-1 text-3xl font-semibold text-gray-900"><?php $sql = "SELECT Goals from user WHERE ID = ". $_SESSION["USERID"]; $stmt = $db->prepare($sql); $stmt->execute(); $Goals = $stmt->fetchColumn(); echo $Goals;?></dd>
    </div>

    <div class="px-4 py-5 bg-zinc-600 shadow rounded-lg overflow-hidden sm:p-6">
      <dt class="text-sm font-medium text-gray-500 truncate">Assists</dt>
      <dd class="mt-1 text-3xl font-semibold text-gray-900"><?php $sql = "SELECT Assists from user WHERE ID = ". $_SESSION["USERID"]; $stmt = $db->prepare($sql); $stmt->execute(); $Assists = $stmt->fetchColumn(); echo $Assists;?></dd>
    </div>
  </dl>
</div>