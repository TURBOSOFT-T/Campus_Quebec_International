@extends('front.fixe')
@section('titre', 'Détails')
@section('body')
    <main>
        @php
            $config = DB::table('configs')->first();
            $service = DB::table('services')->get();
            $produit = DB::table('produits')->get();
        @endphp
<body>

 
    <!-- Page Header Start -->
	<div class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-3" data-cursor="-opaque">{!! 
                                   \App\Helpers\TranslationHelper::TranslateText($blog->title) 
                                !!}</h1>
						<div class="post-single-meta wow fadeInUp">
							<ol class="breadcrumb">
                               {{--  <li class="breadcrumb-item"><i class="fa-regular fa-user"></i> admin</li> --}}
								<li class="breadcrumb-item"><i class="fa-regular fa-clock"></i> {{ $blog->created_at->diffForHumans() }}</li>
                            </ol>
						</div>		
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Page Single Post Start -->
	<div class="page-single-post">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Post Featured Image Start -->
                    <div class="post-image">
                        <figure class="image-anime reveal">
                            <img src="{{ Storage::url($blog->image) }}" alt="">
                        </figure>
                    </div>
                    <!-- Post Featured Image Start -->

                    <!-- Post Single Content Start -->
                    <div class="post-content">
                        <!-- Post Entry Start -->
                        <div class="post-entry">
                            <p class="wow fadeInUp">Physiocare encompasses a range of specialized therapies and treatments aimed at restoring physical function, alleviating pain, and promoting overall wellness. It combines elements of physiotherapy, chiropractic care, and rehabilitative exercises to address musculoskeletal issues, injuries, and chronic conditions.</p>

                            <p class="wow fadeInUp" data-wow-delay="0.2s">Central to physiocare is the hands-on approach of physiotherapists and chiropractors who assess, diagnose, and treat patients using manual techniques such as joint mobilization, soft tissue manipulation, and corrective exercises. These professionals tailor treatment plans to individual needs, considering factors like age, medical history, and specific goals for recovery.</p>
                            
                            <blockquote class="wow fadeInUp" data-wow-delay="0.4s">
                                <p>Physiocare blends advanced therapies with personalized attention to enhance mobility, alleviate pain, and promote holistic wellness. It integrates manual techniques, modalities like ultrasound and electrical stimulation. </p>
                            </blockquote>

                            <p class="wow fadeInUp" data-wow-delay="0.6s">Physiocare often includes modalities like ultrasound, electrical stimulation, and heat therapy to complement manual techniques and enhance healing. It focuses not only on symptom relief but also on correcting underlying issues to prevent recurrence and improve long-term function.</p>

                            <h2 class="text-anime-style-2">We understand injuries and pain happen unexpectedly.</h2>

                            <p class="wow fadeInUp" data-wow-delay="0.8s">Education and guidance are integral components of physiocare, empowering patients with knowledge about their conditions and teaching them self-management techniques to maintain progress between sessions.</p>

                            <ul class="wow fadeInUp" data-wow-delay="1s">
                                <li>Physiocare offers customized rehabilitation programs tailored.</li>
                                <li>Highly trained and certified physiotherapists provide expert care.</li>
                                <li>Physiotherapy techniques effectively manage and reduce pain without relying.</li>
                                <li>Specialized programs are available to aid in quicker and safer recovery.</li>
                                <li>argeted therapy for athletes to recover from sports injuries.</li>
                            </ul>

                            <p class="wow fadeInUp" data-wow-delay="1.2s">This combination of benefits makes yoga a Yoga offers a wide array of benefits that encompass versatile and accessible practice, suitable for individuals of all ages and fitness levels, contributing to a healthier, more fulfilled life.In essence, physiocare is a holistic approach to health that promotes mobility, reduces pain, and enhances overall quality of life through personalized, evidence-based treatments and comprehensive patient education.</p>
                        </div>
                        <!-- Post Entry End -->

                        <!-- Post Tag Links Start -->
                        <div class="post-tag-links">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <!-- Post Tags Start -->
                                    {{-- <div class="post-tags wow fadeInUp" data-wow-delay="0.5s">
                                        <span class="tag-links">
                                            Tags:
                                            <a href="#">physiocare</a>
                                            <a href="#">painmanage</a>
                                            <a href="#">backpain</a>
                                            <a href="#">wellness</a>
                                        </span>
                                    </div> --}}
                                    <!-- Post Tags End -->
                                </div>

                                <div class="col-lg-4">
                                    <!-- Post Social Links Start -->
                                    <div class="post-social-sharing wow fadeInUp" data-wow-delay="0.5s">
                                        <ul style="list-style: none; display: flex; gap: 10px; padding: 0;">
                                @if ($config->facebook)
                                    <li><a href="{{ $config->facebook }}" target="_blank"><i
                                                class="fa-brands fa-facebook-f"></i></a></li>
                                @endif

                                @if ($config->instagram)
                                    <li><a href="{{ $config->instagram }}" target="_blank"><i
                                                class="fa-brands fa-instagram"></i></a></li>
                                @endif

                                @if ($config->tiktok)
                                    <li><a href="{{ $config->tiktok }}" target="_blank"><i
                                                class="fa-brands fa-tiktok"></i></a></li>
                                @endif
                                @if ($config->youtube)
                                    <li><a href="{{ $config->youtube }}" target="_blank"><i
                                                class="fa-brands fa-youtube"></i></a></li>
                                @endif

                            </ul>
                                    </div>
                                    <!-- Post Social Links End -->
                                </div>
                            </div>
                        </div>
                        <!-- Post Tag Links End -->
                    </div>
                    <!-- Post Single Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Single Post End -->  

    <!-- Our Scrolling Ticker Section Start -->
    <div class="our-scrolling-ticker">
        <!-- Scrolling Ticker Start -->
        <div class="scrolling-ticker-box">
            <div class="scrolling-content">
                <span><img src="images/icon-sparkles.svg" alt="">Emergency No. : (+01) 789 856 258</span>
                <span><img src="images/icon-sparkles.svg" alt="">For any additional inqueries : info@domainname.com</span>
                <span><img src="images/icon-sparkles.svg" alt="">Book Appointment: (+01) 879 526 789</span>
                <span><img src="images/icon-sparkles.svg" alt="">Working Hourse : Mon to Fri : 10:00 To 6:00 </span>
            </div>

            <div class="scrolling-content">
                <span><img src="images/icon-sparkles.svg" alt="">Emergency No. : (+01) 789 856 258</span>
                <span><img src="images/icon-sparkles.svg" alt="">For any additional inqueries : info@domainname.com</span>
                <span><img src="images/icon-sparkles.svg" alt="">Book Appointment: (+01) 879 526 789</span>
                <span><img src="images/icon-sparkles.svg" alt="">Working Hourse : Mon to Fri : 10:00 To 6:00 </span>
            </div>
        </div>
    </div>
	<!-- Scrolling Ticker Section End -->  

</body>
</html>


    </main>






@endsection