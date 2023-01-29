<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>jour07 job02</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
  </head>
  <body>
    <header class="bg-gray-800 p-3  text-center text-white">
      <nav>
        <ul class="flex justify-around">
          <li><a href="index.php">Accueil</a></li>
          <li><a href="index.php">Inscription</a></li>
          <li><a href="index.php">Connexion</a></li>
          <li><a href="index.php">Rechercher</a></li>
        </ul>
      </nav>
    </header>

    <section class="bg-blue-500 ">
      <div class="flex flex-col justify-center items-center">
        <div class="w-full max-w-lg">
          <form class="bg-white shadow-md rounded mt-3 px-4 pt-8 pb-14 mb-3">
                <p>Civilité:</p>
                <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="flex items-center pl-4 dark:border-gray-700">
                    <input id="bordered-radio-1" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="bordered-radio-1" class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Homme</label>
                  </div>  
                  <div class="flex items-center pl-4 dark:border-gray-700">
                      <input checked id="bordered-radio-2" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="bordered-radio-2" class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Femme</label>
                  </div>
                </div>

                <p>Prénom:</p>
                <div class="mb-4">
                  <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                  </label>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Prenom">
                </div>

                <p>Nom:</p>
                <div class="mb-4">
                  <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                  </label>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Nom">
                </div>

                <p>Adresse:</p>
                <div class="mb-4">
                  <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                  </label>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Adresse">
                </div>

                <p>Adresse email:</p>
                <div class="relative mb-6">
                  <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                  </div>
                  <input type="text" id="input-group-1" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Adresse email">
                </div>

                <p>Password:</p>
                <div class="mb-4">
                  <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                  </label>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Password">
                </div>

                <p>Confirmez password:</p>
                <div class="mb-4">
                  <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                  </label>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Confirmez password">
                </div>

                <p>Centres d'intérêts:</p>
                <div class="flex flex-wrap -mx-3 mb-6">
                           <div class="flex items-center pl-4 dark:border-gray-700">
                                <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="bordered-checkbox-1" class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Informatique</label>
                            </div>
                            <div class="flex items-center pl-4 dark:border-gray-700">
                                  <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                  <label for="bordered-checkbox-1" class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Voyages</label>
                            </div>
                            <div class="flex items-center pl-4 dark:border-gray-700">
                                  <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                  <label for="bordered-checkbox-1" class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sport</label>
                            </div>
                            <div class="flex items-center pl-4 dark:border-gray-700">
                                  <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                  <label for="bordered-checkbox-1" class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Lecture</label>
                            </div>
                </div>         
                <div>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Valider
                    </button>
                </div> 
                
          </form>
        <div>
      <div>
    </section>



    <footer class="bg-gray-800 p-3 text-center text-white">
      <div class="sm:flex sm:items-center sm:justify-between">
          <p class="h-8 mr-3"> Copyright &copy; 2023" </p>  
          <ul class="flex flex-wrap items-center mb-6 text-sm text-black-500 sm:mb-0 dark:text-gray-400">
              <li>
                  <a href="#" class="mr-4 hover:underline md:mr-6 ">Accueil</a>
              </li>
              <li>
                  <a href="#" class="mr-4 hover:underline md:mr-6">Inscription</a>
              </li>
              <li>
                  <a href="#" class="mr-4 hover:underline md:mr-6 ">Connexion</a>
              </li>
              <li>
                  <a href="#" class="hover:underline">Rechercher</a>
              </li>
          </ul>
      </div>  
    </footer>
    
  </body>
</html>