<?php require 'include/header.php'; ?>


    <section>
        <div class="bg-[url(assets/images/book-editing-contact.webp)] bg-no-repeat bg-[length:100%_100%]">
            <div class="max-w-7xl mx-auto 2xl:px-0 px-2">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">

                       <?php require 'include/navbar.php'; ?>

                    </div>
                </div>
            </div>
            <div class="max-w-7xl mx-auto 2xl:px-0 px-2">
                <div class="grid grid-cols-12 items-center gap-4">
                    <div class="lg:col-span-7 col-span-12">
                        <div class="">
                            <h1
                                class="sm:text-[38px] text-[32px] lg:text-[45px] bold leading-[1.1] lg:mb-6 mb-3 text-[#fff] sm:text-[16px] text-[14px] capitalize">
                                Contact Us
                            </h1>
                            <p class="mb-4 text-[#fff] sm:text-[16px] text-[14px]">
                                Ready to elevate your written content to the next level? Contact us today to experience
                                top-tier writing services with a commitment to premium quality.
                            </p>
                            <p class="mb-6 text-[#fff] sm:text-[16px] text-[14px]">
                                Our team takes pride in delivering excellence in every project, ensuring your satisfaction
                                with the final result. With a meticulous attention to detail and a dedication to excellence,
                                we're here to help you craft compelling narratives that resonate with your audience.
                            </p>
                            <a aria-label="explore-more"
                                class="group relative inline-flex items-center justify-start overflow-hidden rounded-[0px] bg-[#a51f24] md:px-14 px-8 py-4 font-medium transition-all hover:rounded-tr-[30px] transition-all duration-500 ease-in-out"
                                href="javascript:;" onclick="openModal('popup-global')">
                                <span
                                    class="absolute right-0 top-0 inline-block h-0 w-0 group-hover:w-6 shadow-[0px_3.2px_0px_0px_rgba(0,0,0,0.3)] group-hover:h-6 rounded bg-[#fff] transition-all duration-500 ease-in-out group-hover:mr-0 group-hover:mt-0 -mr-4 -mt-4">
                                </span>
                                <span class="relative w-full text-white uppercase">Explore More</span>
                            </a>
                        </div>
                    </div>
                    <div class="lg:col-span-5 col-span-12">
                        <img alt="book-contact" src="assets/images/book-contact5e1f.webp?v=2" class="w-8/12 md:w-10/12 mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-[#a51f24]">
        <div class="lg:pt-20 pt-16 relative max-w-[2000px] mx-auto">
            <div class="max-w-7xl mx-auto relative z-[1] 2xl:px-0 px-2">
                <div class="grid grid-cols-12 items-center gap-5">
                    <div class="md:col-span-6 col-span-12">
                        <div class="flex flex-col">
                            <div class="">
                                <p
                                    class="lg:text-[36px] text-[28px] bold leading-[1.1] lg:mb-6 mb-3 text-[#fff] sm:text-[16px] text-[14px] lg:max-w-[500px] capitalize">
                                    Get In Touch With Us!
                                </p>
                                <p class="text-[#fff] mb-4 sm:text-[16px] text-[14px]">
                                    We are just a click away. Fill out this simple form to connect now!
                                </p>
                            </div>
                            <div class="lg:pt-10 pt-5">
                                <p
                                    class="lg:text-[20px] text-[16px] bold leading-[1.1] mb-3 md:mb-10 text-[#fff] lg:max-w-[500px] capitalize">
                                    Stay connected
                                </p>
                                <div class="flex flex-row gap-x-3 items-center max-w-[200px]">

                                    <a aria-label="" href="#">
                                        <img alt="twitter" src="assets/images/twitter.webp" class="">
                                    </a>
                                    <a aria-label="" href="https://www.facebook.com/VanguardPublisher">
                                        <img alt="facebook" src="assets/images/facebook.webp" class="">
                                    </a>
                                    <a aria-label="" href="https://www.instagram.com/vanguardpublisher/">
                                        <img alt="instagiram" src="assets/images/instagiram.webp" class="">
                                    </a>
                                    <a aria-label="" href="https://www.linkedin.com/company/vanguard-publisher">
                                        <img alt="linkedin" src="assets/images/linkedin.webp" class="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md:col-span-6 col-span-12">
                        <form action="email.php" class="validate-form-1 w-full md:px-14 md:py-10" method="post">
                            <div class="grid grid-cols-12">
                                <div class="col-span-12 mb-5">
                                    <input
                                        class="h-[50px] w-full text-[#fff] required bg-transparent border-b border-[#fff] placeholder:text-white"
                                        name="name" placeholder="Full Name" type="text" required="">
                                </div>
                                <div class="col-span-12 mb-5">
                                    <input
                                        class="mr-2 h-[50px] w-full text-[#fff] required bg-transparent border-b border-[#fff] placeholder:text-white"
                                        name="email" placeholder="Email Address" type="email" required="">
                                </div>
                                <div class="col-span-12 mb-5">
                                    <input
                                        class="phone-input  h-[50px] w-full text-[#fff] required bg-transparent border-b border-[#fff] placeholder:text-white"
                                        name="phone_number" placeholder="Phone Number" type="tel" required="">
                                </div>
                                <div class="col-span-12 mb-5">
                                    <input class="h-[80px] w-full text-[#fff] bg-transparent border-b border-[#fff] placeholder:text-white"
                                        name="message" placeholder="Message" type="text">
                                </div>
                                <div class="col-span-12">
                                    <div class="d-none">
                                        <div class="ip2locfields">
                                            <input type="hidden" name="ip2loc_ip" value="" class="ip2loc_ip">
                                            <input type="hidden" name="ip2loc_isp" value="" class="ip2loc_isp">
                                            <input type="hidden" name="ip2loc_org" value="" class="ip2loc_org">
                                            <input type="hidden" name="ip2loc_country" value="" class="ip2loc_country">
                                            <input type="hidden" name="ip2loc_region" value="" class="ip2loc_region">
                                            <input type="hidden" name="ip2loc_city" value="" class="ip2loc_city">
                                            <input type="hidden" name="landing_page" value="contact-us.php">
                                            <input type="hidden" name="server_ip" value=''>
                                            <input type="hidden" name="referrer_url" value="">
                                            <input type="hidden" name="campaign_name" value="">
                                            <input type="hidden" name="campaign_email" value="">
                                            <input type="hidden" name="source" value="">
                                            <input type="hidden" name="campaign_category" value="">
                                            <input type="hidden" name="campaign_country" value="">
                                            <input type="hidden" name="campaign_phone" value="">
                                            <input type="hidden" name="campaign_offer" value="">
                                        </div>
                                        <input type="hidden" name="package_name" value="Get A Quote">
                                        <input type="hidden" name="lead_amount" value="0">
                                    </div> <button aria-label="submit-form"
                                        class="group relative inline-flex items-center justify-center overflow-hidden rounded-[0px] bg-[#fff] px-14 py-3 w-full inline-block hover:rounded-tr-[30px] transition-all duration-500 ease-in-out"
                                        type="submit">
                                        <span
                                            class="absolute right-0 top-0 inline-block h-0 w-0 group-hover:w-6 shadow-[0px_3.2px_0px_0px_rgba(0,0,0,0.3)] group-hover:h-6 rounded bg-[#a51f24] transition-all duration-500 ease-in-out group-hover:mr-0 group-hover:mt-0 -mr-4 -mt-4">
                                        </span>
                                        <span
                                            class="relative  text-[#000] inline-block text-[14px] tracking-[2px] uppercase">
                                            Submit Form</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <?php require 'include/footer.php'; ?>