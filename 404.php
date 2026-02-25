<?php require 'include/header.php'; ?>



    <section>
        <div class="bg-[url(assets/images/bg-banner.webp)] bg-no-repeat bg-cover">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                       <?php require 'include/navbar.php'; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="our-error lg:py-16 py-10">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-12">
                <div class="col-span-12 text-center">
                    <h1 class="text-[#e43621] bold lg:text-[60px] mt-3 text-[20px] font-bold leading-[1] mb-6">Oops!</h1>
                    <span class="text-[20px] font-bold mb-2 block">Page Not Found</span>
                    <p class="">The page you are looking for might have been removed<span class="lg:block">had its name changed or is temporarily unavailable.</span></p>
                    <a class="lg:px-16 px-8 lg:py-4 py-3 bg-[#000000]  rounded-[60px] lg:text-[16px] text-[12px] font-medium text-white mt-5 inline-block " href="index.html">
                        Back to Home
                    </a>
                </div>
            </div>
        </div>
    </section>
                           <?php require 'include/footer.php'; ?>
