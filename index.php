<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f9794842a7.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="icon" type="image/x-icon">
    <style>
        ::-webkit-scrollbar {
            width: 0px;
            background: transparent;
        }
    </style>
    <title>WAMP</title>
</head>

<body>
    <?php

    $colors = array('blue-600', 'red-600', 'green-600', 'indigo-600', 'purple-600', 'blue-600', 'pink-600', 'yellow-600',);
    ?>
    <div class="flex items-center justify-center py-16 bg-gray-100 min-w-screen h-screen">
        <div class="max-w-6xl px-12 mx-auto bg-gray-100 md:px-16 xl:px-10">
            <div class="flex flex-col items-center lg:flex-row">
                <div class="flex flex-col items-start justify-center w-full h-full pr-8 mb-10 lg:mb-0 lg:w-1/2">
                    <p class="mb-2 text-base font-medium tracking-tight text-<?php echo $colors[array_rand($colors)] ?> uppercase">Custom WAMP SERVER? yes...</p>
                    <h2 class="text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:text-5xl sm:leading-none md:text-6xl lg:text-5xl xl:text-6xl">W.A.M.P</h2>
                    <p class="my-6 text-lg text-gray-600">Yeah.. got tired of an ugly localhost.... Powered by <a class=" font-bold text-blue-800" href="https://tailwindcss.com/docs/" target="_blank">Tailwind CSS</a> and boredom ..</p>
                    <form action="make.php" method="post">
                        <div class="pt-2  text-gray-600 my-6">
                            <input required class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none w-full" type="text" name="foldername" placeholder="Folder Name">
                        </div>

                        <input type="submit" class="flex items-center justify-center px-8 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-<?php echo $colors[array_rand($colors)] ?> border border-transparent rounded-md shadow hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo md:py-4 md:text-lg md:px-10 o" value="Create Site">
                    </form>
                </div>
                <div class="w-full lg:w-1/2  max-h-screen h-screen overflow-scroll my-12 py-12 m-8 ">
                    <div class="pt-2 relative mx-auto text-gray-600 my-6">
                        <input id="search_input" class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none w-full" type="search" name="search" placeholder="Search">
                        <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                            <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                        </button>
                    </div>
                    <ul id="search_list">

                        <?php

                        $blacklist = array('.', '..', 'style.css', 'index.php', 'icon.svg', 'main.js', "make.php", 'template.php', "htaccess");
                        $folders = scandir(__DIR__);
                        usort($folders, function ($a, $b) {
                            return filemtime($a) < filemtime($b);
                        });
                        foreach ($folders as $folder) {
                            if (!in_array($folder, $blacklist)) {
                        ?>
                                <li data-search="<?php echo $folder; ?>" class=" search_item ">
                                    <blockquote class="flex items-center justify-between w-full col-span-1 p-6 mt-4 bg-white rounded-lg shadow">
                                        <div class="flex flex-col pr-10">
                                            <div class="relative pl-12">
                                                <svg class="absolute left-0 w-10 h-10 text-<?php echo $colors[array_rand($colors)] ?> fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                                    <path d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z" />
                                                </svg>
                                                <p class="quote mt-2 text-sm text-gray-600 sm:text-base lg:text-sm xl:text-base">I can't express enough, how amazing this service has been for my company.</p>
                                            </div>

                                            <a href="<?php echo $folder; ?>" class="  pl-12 mt-3 text-sm font-bold text-blue-800 leading-5 text-gray-800 truncate sm:text-base lg:text-sm lg:text-base text-capitalize">
                                                <?php echo $folder; ?>
                                                <!-- <span class="mt-1 text-sm leading-5 text-gray-500 truncate">- CEO SomeCompany</span> -->
                                            </a>
                                            <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                                        </div>
                                        <a class="flex-shrink-0 w-16 h-16 bg-<?php echo $colors[array_rand($colors)] ?> rounded-full " href="<?php echo $folder; ?>">
                                            <img class="w-16 h-16 bg-<?php echo $colors[array_rand($colors)] ?> rounded-full hover:border-2 hover:border-blue-900" src="https://ui-avatars.com/api/?name=<?php echo $folder; ?>&color=7F9CF5" alt=""></a>
                                    </blockquote>
                                </li>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="./main.js"></script>
</body>

</html>