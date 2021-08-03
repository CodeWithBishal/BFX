<?php
echo '
<section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center" style="align-items: flex-start;">
          <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"> '.$state_name.' </h1>
            <p class="mb-8 leading-relaxed">'.$stateDetails.'</p>
          </div>
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <iframe src="'.$iframeLink.'" style="border:0;" width="100%" height="100%" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
</section>
';
?>