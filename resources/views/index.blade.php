

{{-- @extends('themes.' . $theme . '.layout') --}}
@extends('themes.default.layout')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">Latest Posts by Category (LGA)</h1>
    @foreach ($categories as $category)
        <h3 class="mt-4">{{ $category->name }}</h3>
        <div class="row">
            <div class="default-news-slides owl-carousel owl-theme">
                @forelse ($category->posts as $post)
                    <div class="col-lg-12 col-md-12">
                        <div class="single-default-news">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" />
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="{{ route('admin.posts.index', $post->author->id ?? '#') }}">{{ $post->author->name ?? 'Unknown Author' }}</a></li>
                                    <li><i class="icofont-calendar"></i> {{ $post->created_at->format('F d, Y') }}</li>
                                </ul>
                                <h3>
                                    <a href="{{ route('admin.posts.show', $post->id) }}">{{ \Illuminate\Support\Str::limit($post->title, 40) }}</a>
                                </h3>
                            </div>
                            <div class="tags">
                                <a href="{{ route('admin.categories.show', $category->id) }}">{{ $category->name }}</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No posts available in this category.</p>
                @endforelse
            </div>
        </div>
    @endforeach
</div>

    <section class="default-news-area bg-color-none">
    </section>
    <section class="popular-news-area ptb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="popular-section-ads">
                        <a href="single-post-3.html"><img src="{{ asset('assets/img/2-ads.png') }}" alt="image" /></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="section-title">
                        <h2>Most Popular</h2>
                    </div>
                    <div class="row">
                        <div class="popular-news-slides owl-carousel owl-theme">
                            <div class="col-lg-12 col-md-12">
                                <div class="single-popular-news">
                                    <div class="news-image"><img src="{{ asset('assets/img/6.jpg') }}" alt="image" /></div>
                                    <div class="news-content">
                                        <h3>Create the Perfect Logo for your Website</h3>
                                        <span><i class="icofont-calendar"></i> March 22, 2024</span>
                                    </div>
                                    <a href="post-category-3.html" class="link-overlay"></a>
                                    <div class="tags bg-2"><a href="post-category-2.html">Sports</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="technology-area ptb-40 pt-0">
        <div class="container">
            <div class="section-title">
                <h2>Technology</h2>
            </div>
            <div class="row">
                {{-- {{$latestone}} --}}
                @foreach ($latestone as $category)
                @forelse ($category->posts as $post)
                    <div class="col-lg-6 col-md-12">
                        <div class="single-technology-news">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" />
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="author.html">{{ $post->author->name ?? 'John Smith' }}</a></li>
                                    <li><i class="icofont-calendar"></i> {{ $post->created_at->format('F d, Y') }}</li>
                                </ul>
                                <h3><a href="{{ route('admin.posts.show', $post->id) }}">{{ Str::limit($post->title, 40) }}</a></h3>
                            </div>
                            <div class="tags"><a href="{{ route('admin.categories.show', $category->id) }}">{{ $category->name }}</a></div>
                        </div>
                    </div>
                @empty
                    <p>No posts available in this category.</p>
                @endforelse
            @endforeach

                <div class="col-lg-3 col-md-12">
                    <div class="space-news-list">
                        <div class="single-space-news">
                            <h3><a href="single-post-3.html">China considers legal gambling on island the size of Switzerland</a></h3>
                            <ul>
                                <li><i class="icofont-clock-time"></i> 10 minutes ago</li>
                                <li><i class="icofont-tag"></i> <a href="post-category-3.html">Sports</a></li>
                                <li><i class="icofont-speech-comments"></i> <a href="post-category-3.html">21</a></li>
                            </ul>
                        </div>
                        <div class="single-space-news">
                            <h3><a href="single-post-4.html">All the Best Street Style Looks From London Fashion Week Fall</a></h3>
                            <ul>
                                <li><i class="icofont-clock-time"></i> 10 minutes ago</li>
                                <li><i class="icofont-tag"></i> <a href="post-category-3.html">Sports</a></li>
                                <li><i class="icofont-speech-comments"></i> <a href="post-category-4.html">21</a></li>
                            </ul>
                        </div>
                        <div class="single-space-news">
                            <h3><a href="single-post-2.html">These Are the 10 Colors Set to Dominate Fashion Week</a></h3>
                            <ul>
                                <li><i class="icofont-clock-time"></i> 10 minutes ago</li>
                                <li><i class="icofont-tag"></i> <a href="post-category-3.html">Sports</a></li>
                                <li><i class="icofont-speech-comments"></i> <a href="post-category-4.html">21</a></li>
                            </ul>
                        </div>
                        <div class="single-space-news">
                            <h3><a href="single-post-3.html">Spotted! What the Editors Wore to Fashion Week Fall</a></h3>
                            <ul>
                                <li><i class="icofont-clock-time"></i> 10 minutes ago</li>
                                <li><i class="icofont-tag"></i> <a href="post-category-3.html">Sports</a></li>
                                <li><i class="icofont-speech-comments"></i> <a href="post-category-4.html">21</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="technology-section-ads">
                        <a href="single-post-4.html"><img src="{{ asset('assets/img/6-ads.png') }}" alt="image" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="international-news-area pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="section-title">
                        <h2>International</h2>
                    </div>
                    <div class="international-news-inner">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-international-news">
                                    <div class="news-image"><img src="{{ asset('assets/img/6.jpg') }}" alt="image" /></div>
                                    <div class="news-content">
                                        <span><i class="icofont-calendar"></i> March 22, 2024</span>
                                        <h3><a href="single-post-3.html">Gloost Better They Are With A Featured</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="international-news-list">
                                    <div class="media news-media align-items-center">
                                        <a href="single-post-3.html"> <img src="{{ asset('assets/img/small-1.jpg') }}" alt="image" /> </a>
                                        <div class="content">
                                            <span><i class="icofont-calendar"></i> March 22, 2024</span>
                                            <h3><a href="single-post-1.html">Introducing the New 404 Page Templates</a></h3>
                                        </div>
                                    </div>
                                    <div class="media news-media align-items-center">
                                        <a href="single-post-2.html"> <img src="{{ asset('assets/img/small-2.jpg') }}" alt="image" /> </a>
                                        <div class="content">
                                            <span><i class="icofont-calendar"></i> March 22, 2024</span>
                                            <h3><a href="single-post-2.html">Newspaper Theme: What’s new in v.9</a></h3>
                                        </div>
                                    </div>
                                    <div class="media news-media align-items-center">
                                        <a href="single-post-3.html"> <img src="{{ asset('assets/img/small-3.jpg') }}" alt="image" /> </a>
                                        <div class="content">
                                            <span><i class="icofont-calendar"></i> March 22, 2024</span>
                                            <h3><a href="single-post-4.html">Tricks to Boost your WordPress Site’s Traffic</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="section-title">
                        <h2>Stay Connected</h2>
                    </div>
                    <ul class="stay-connected">
                        <li>
                            <a href="https://www.facebook.com/login/" target="_blank"><i class="icofont-facebook"></i><b>10.2K</b> <span>Fans</span></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/login/" target="_blank"><i class="icofont-twitter"></i><b>14.2K</b> <span>Followers</span></a>
                        </li>
                        <li>
                            <a href="https://linkedin.com/login/" target="_blank"><i class="icofont-linkedin"></i><b>11.2K</b> <span>Fans</span></a>
                        </li>
                        <li>
                            <a href="https://en.wikipedia.org/wiki/RSS" target="_blank"><i class="icofont-rss"></i><b>15.2K</b> <span>Subscriber</span></a>
                        </li>
                    </ul>
                    <div class="stay-connected-ads">
                        <a href="post-category-3.html"><img src="{{ asset('assets/img/3-ads.png') }}" alt="image" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="video-news-area ptb-40">
        <div class="container">
            <div class="section-title">
                <h2>Watch Videos</h2>
            </div>
            <div class="row">
                <div class="video-news-slides owl-carousel owl-theme">
                    <div class="col-lg-12 col-md-12">
                        <div class="single-default-news">
                            <img src="{{ asset('assets/img/6.jpg') }}" alt="image" />
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                    <li><i class="icofont-calendar"></i> March 22, 2024</li>
                                </ul>
                                <h3><a href="single-post-2.html">As well as stopping goals for an, Cristiane Endler is opening.</a></h3>
                            </div>
                            <div class="tags"><a href="post-category-1.html">Sports</a></div>
                            <div class="video-btn">
                                <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="popup-youtube"><i class="icofont-play-alt-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-default-news">
                            <img src="{{ asset('assets/img/2.jpg') }}" alt="image" />
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                    <li><i class="icofont-calendar"></i> March 22, 2024</li>
                                </ul>
                                <h3><a href="single-post-2.html">As well as stopping goals for an, Cristiane Endler is opening.</a></h3>
                            </div>
                            <div class="tags"><a href="post-category-1.html">Sports</a></div>
                            <div class="video-btn">
                                <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="popup-youtube"><i class="icofont-play-alt-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-default-news">
                            <img src="{{ asset('assets/img/1.jpg') }}" alt="image" />
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                    <li><i class="icofont-calendar"></i> March 22, 2024</li>
                                </ul>
                                <h3><a href="single-post-2.html">As well as stopping goals for an, Cristiane Endler is opening.</a></h3>
                            </div>
                            <div class="tags"><a href="post-category-1.html">Sports</a></div>
                            <div class="video-btn">
                                <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="popup-youtube"><i class="icofont-play-alt-3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hot-news-area ptb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="health-lifestyle-news">
                                <div class="section-title">
                                    <h2>Health & Lifestyle</h2>
                                </div>
                                <div class="health-lifestyle-news-slides owl-carousel owl-theme">
                                    <div class="single-health-lifestyle-news">
                                        <div class="news-image">
                                            <a href="single-post-3.html"><img src="{{ asset('assets/img/8.jpg') }}" alt="image" /></a>
                                        </div>
                                        <div class="news-content">
                                            <ul>
                                                <li><i class="icofont-calendar"></i> March 25, 2024</li>
                                                <li><i class="icofont-speech-comments"></i> <a href="single-post-1.html">50</a></li>
                                            </ul>
                                            <h3><a href="single-post-1.html">Disabled People Must Be Front And Centre On TV</a></h3>
                                            <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                        </div>
                                    </div>
                                    <div class="single-health-lifestyle-news">
                                        <div class="news-image">
                                            <a href="single-post-3.html"><img src="{{ asset('assets/img/7.jpg') }}" alt="image" /></a>
                                        </div>
                                        <div class="news-content">
                                            <ul>
                                                <li><i class="icofont-calendar"></i> March 25, 2024</li>
                                                <li><i class="icofont-speech-comments"></i> <a href="single-post-1.html">50</a></li>
                                            </ul>
                                            <h3><a href="single-post-1.html">Disabled People Must Be Front And Centre On TV</a></h3>
                                            <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                        </div>
                                    </div>
                                    <div class="single-health-lifestyle-news">
                                        <div class="news-image">
                                            <a href="single-post-4.html"><img src="{{ asset('assets/img/6.jpg') }}" alt="image" /></a>
                                        </div>
                                        <div class="news-content">
                                            <ul>
                                                <li><i class="icofont-calendar"></i> March 25, 2024</li>
                                                <li><i class="icofont-speech-comments"></i> <a href="single-post-1.html">50</a></li>
                                            </ul>
                                            <h3><a href="single-post-1.html">Disabled People Must Be Front And Centre On TV</a></h3>
                                            <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="politics-news">
                                <div class="section-title">
                                    <h2>Politics</h2>
                                </div>
                                <div class="politics-news-slides owl-carousel owl-theme">
                                    <div class="single-politics-news">
                                        <div class="news-image">
                                            <a href="single-post-4.html"><img src="{{ asset('assets/img/6.jpg') }}" alt="image" /></a>
                                        </div>
                                        <div class="news-content">
                                            <ul>
                                                <li><i class="icofont-calendar"></i> March 25, 2024</li>
                                                <li><i class="icofont-speech-comments"></i> <a href="single-post-1.html">50</a></li>
                                            </ul>
                                            <h3><a href="single-post-2.html">The New-Style GCSEs Show Why Politicians.</a></h3>
                                            <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                        </div>
                                    </div>
                                    <div class="single-politics-news">
                                        <div class="news-image">
                                            <a href="single-post-3.html"><img src="{{ asset('assets/img/7.jpg') }}" alt="image" /></a>
                                        </div>
                                        <div class="news-content">
                                            <ul>
                                                <li><i class="icofont-calendar"></i> March 25, 2024</li>
                                                <li><i class="icofont-speech-comments"></i> <a href="single-post-1.html">50</a></li>
                                            </ul>
                                            <h3><a href="single-post-1.html">Disabled People Must Be Front And Centre On TV</a></h3>
                                            <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                        </div>
                                    </div>
                                    <div class="single-politics-news">
                                        <div class="news-image">
                                            <a href="single-post-3.html"><img src="{{ asset('assets/img/8.jpg') }}" alt="image" /></a>
                                        </div>
                                        <div class="news-content">
                                            <ul>
                                                <li><i class="icofont-calendar"></i> March 25, 2024</li>
                                                <li><i class="icofont-speech-comments"></i> <a href="single-post-1.html">50</a></li>
                                            </ul>
                                            <h3><a href="single-post-1.html">Disabled People Must Be Front And Centre On TV</a></h3>
                                            <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="around-the-world-news pt-40">
                                <div class="section-title">
                                    <h2>Around The World</h2>
                                    <a href="single-post-1.html" class="view-more">View More <i class="icofont-rounded-double-right"></i></a>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-around-the-world-news">
                                            <div class="news-image">
                                                <a href="single-post-2.html"><img src="{{ asset('assets/img/1.jpg') }}" alt="image" /></a>
                                            </div>
                                            <div class="news-content">
                                                <ul>
                                                    <li><i class="icofont-calendar"></i> March 25, 2024</li>
                                                    <li><i class="icofont-speech-comments"></i> <a href="single-post-1.html">50</a></li>
                                                </ul>
                                                <h3><a href="single-post-2.html">The New-Style GCSEs Show Why Politicians.</a></h3>
                                                <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-around-the-world-news">
                                            <div class="news-image">
                                                <a href="single-post-3.html"><img src="{{ asset('assets/img/2.jpg') }}" alt="image" /></a>
                                            </div>
                                            <div class="news-content">
                                                <ul>
                                                    <li><i class="icofont-calendar"></i> March 25, 2024</li>
                                                    <li><i class="icofont-speech-comments"></i> <a href="single-post-1.html">50</a></li>
                                                </ul>
                                                <h3><a href="single-post-1.html">Disabled People Must Be Front And Centre On TV</a></h3>
                                                <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="media around-the-world-news-media align-items-center">
                                            <a href="single-post-3.html"> <img src="{{ asset('assets/img/small-1.jpg') }}" alt="image" /> </a>
                                            <div class="content">
                                                <span><i class="icofont-calendar"></i> March 22, 2024</span>
                                                <h3><a href="single-post-3.html">Gloost Better They Are With A Featured</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="media around-the-world-news-media align-items-center">
                                            <a href="single-post-2.html"> <img src="{{ asset('assets/img/small-2.jpg') }}" alt="image" /> </a>
                                            <div class="content">
                                                <span><i class="icofont-calendar"></i> March 22, 2024</span>
                                                <h3><a href="single-post-3.html">Happy Newspaper Day: 50,000+ Delighted Customers!</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="media around-the-world-news-media align-items-center">
                                            <a href="single-post-3.html"> <img src="{{ asset('assets/img/small-3.jpg') }}" alt="image" /> </a>
                                            <div class="content">
                                                <span><i class="icofont-calendar"></i> March 22, 2024</span>
                                                <h3><a href="single-post-2.html">Newspaper 8.5. – Discover Landing Page Elements</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="media around-the-world-news-media align-items-center">
                                            <a href="single-post-2.html"> <img src="{{ asset('assets/img/small-4.jpg') }}" alt="image" /> </a>
                                            <div class="content">
                                                <span><i class="icofont-calendar"></i> March 22, 2024</span>
                                                <h3><a href="single-post-1.html">New in Newspaper: Social Network Buttons</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="featured-news">
                        <div class="section-title">
                            <h2>Featured News</h2>
                        </div>
                        <div class="single-featured-news">
                            <img src="{{ asset('assets/img/1.jpg') }}" alt="image" />
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                    <li><i class="icofont-calendar"></i> March 22, 2024</li>
                                </ul>
                                <h3><a href="post-category-2.html">As well as stopping goals, Cristiane Endler is opening doors</a></h3>
                            </div>
                            <div class="tags"><a href="post-category-1.html">Sports</a></div>
                        </div>
                        <div class="single-featured-news">
                            <img src="{{ asset('assets/img/2.jpg') }}" alt="image" />
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                    <li><i class="icofont-calendar"></i> March 22, 2024</li>
                                </ul>
                                <h3><a href="post-category-3.html">You’ve got mail! All about the tagDiv Newsletter plugin</a></h3>
                            </div>
                            <div class="tags bg-2"><a href="post-category-2.html">Sports</a></div>
                        </div>
                        <div class="single-featured-news">
                            <img src="{{ asset('assets/img/3.jpg') }}" alt="image" />
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                    <li><i class="icofont-calendar"></i> March 22, 2024</li>
                                </ul>
                                <h3><a href="post-category-3.html">Newspaper Theme: Enhance Your Pages with the Row Divider</a></h3>
                            </div>
                            <div class="tags bg-3"><a href="post-category-2.html">Sports</a></div>
                        </div>
                    </div>
                    <div class="newsletter-box">
                        <div class="section-title">
                            <h2>Newsletter</h2>
                        </div>
                        <div class="newsletter-box-inner">
                            <h3>Subscribe To Our Mailing List To Get The New Updates!</h3>
                            <i class="icofont-email"></i>
                            <form class="newsletter-form" data-toggle="validator">
                                <input type="email" class="newsletter-input" placeholder="Enter your email" name="EMAIL" required autocomplete="off" /> <button type="submit"><i class="icofont-paper-plane"></i></button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                    <div class="hot-news-ads">
                        <a href="post-category-4.html"><img src="{{ asset('assets/img/4-ads.png') }}" alt="image" /></a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="hot-news-ads2">
                        <a href="post-category-3.html"><img src="{{ asset('assets/img/5-ads.png') }}" alt="image" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery-news-area ptb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="gallery-news">
                        <div class="section-title">
                            <h2>Gallery News</h2>
                        </div>
                        <div class="gallery-news-inner-slides owl-carousel owl-theme">
                            <div class="row align-items-center m-0">
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="gallery-news-content">
                                        <h3>
                                            <a href="post-category-1.html"><i class="icofont-camera-alt"></i> A glance (18 June 2024)</a>
                                        </h3>
                                        <p>Gloost Better They Are With A Featured. New York, USA, 17 June. Photo: John Smith</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="gallery-news-image"><img src="{{ asset('assets/img/gallery-news1.jpg') }}" alt="image" /></div>
                                </div>
                            </div>
                            <div class="row align-items-center m-0">
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="gallery-news-content">
                                        <h3>
                                            <a href="post-category-1.html"><i class="icofont-camera-alt"></i> A glance (18 June 2024)</a>
                                        </h3>
                                        <p>Gloost Better They Are With A Featured. New York, USA, 17 June. Photo: John Smith</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="gallery-news-image"><img src="{{ asset('assets/img/gallery-news1.jpg') }}" alt="image" /></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="gallery-news-list">
                        <div class="media gallery-news-media align-items-center">
                            <div class="image">
                                <img src="{{ asset('assets/img/small-4.jpg') }}" alt="image" /> <a href="single-post-3.html"><i class="icofont-ui-camera"></i></a>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="single-post-2.html"><i class="icofont-camera-alt"></i> A glance (17 June 2024)</a>
                                </h3>
                            </div>
                        </div>
                        <div class="media gallery-news-media align-items-center">
                            <div class="image">
                                <img src="{{ asset('assets/img/small-2.jpg') }}" alt="image" /> <a href="single-post-3.html"><i class="icofont-ui-camera"></i></a>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="single-post-2.html"><i class="icofont-camera-alt"></i> A glance (16 June 2024)</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="all-news-area ptb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="fashion-news">
                        <div class="section-title">
                            <h2>Fashion</h2>
                        </div>
                        <div class="single-fashion-news">
                            <img src="{{ asset('assets/img/1.jpg') }}" alt="image" />
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                    <li><i class="icofont-calendar"></i> March 22, 2024</li>
                                </ul>
                                <h3><a href="single-post-4.html">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                            </div>
                        </div>
                        <div class="fashion-inner-news">
                            <div class="single-fashion-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2024</span>
                                <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                            <div class="single-fashion-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2024</span>
                                <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                            <div class="single-fashion-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2024</span>
                                <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="food-news">
                        <div class="section-title">
                            <h2>Food & Hobbbies</h2>
                        </div>
                        <div class="single-food-news">
                            <img src="{{ asset('assets/img/2.jpg') }}" alt="image" />
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                    <li><i class="icofont-calendar"></i> March 22, 2024</li>
                                </ul>
                                <h3><a href="single-post-4.html">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                            </div>
                        </div>
                        <div class="food-inner-news">
                            <div class="single-food-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2024</span>
                                <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                            <div class="single-food-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2024</span>
                                <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                            <div class="single-food-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2024</span>
                                <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="north-america-news">
                        <div class="section-title">
                            <h2>North America</h2>
                        </div>
                        <div class="single-north-america-news">
                            <img src="{{ asset('assets/img/3.jpg') }}" alt="image" />
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                    <li><i class="icofont-calendar"></i> March 22, 2024</li>
                                </ul>
                                <h3><a href="single-post-4.html">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                            </div>
                        </div>
                        <div class="north-america-inner-news">
                            <div class="single-north-america-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2024</span>
                                <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                            <div class="single-north-america-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2024</span>
                                <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                            <div class="single-north-america-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2024</span>
                                <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="economics-news">
                        <div class="section-title">
                            <h2>Economics</h2>
                        </div>
                        <div class="single-fashion-news">
                            <img src="{{ asset('assets/img/4.jpg') }}" alt="image" />
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                    <li><i class="icofont-calendar"></i> March 22, 2024</li>
                                </ul>
                                <h3><a href="single-post-4.html">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                            </div>
                        </div>
                        <div class="fashion-inner-news">
                            <div class="single-fashion-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2024</span>
                                <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                            <div class="single-fashion-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2024</span>
                                <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                            <div class="single-fashion-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2024</span>
                                <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="science-technology-news">
                        <div class="section-title">
                            <h2>Science and Technology</h2>
                        </div>
                        <div class="single-food-news">
                            <img src="{{ asset('assets/img/5.jpg') }}" alt="image" />
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                    <li><i class="icofont-calendar"></i> March 22, 2024</li>
                                </ul>
                                <h3><a href="single-post-4.html">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                            </div>
                        </div>
                        <div class="food-inner-news">
                            <div class="single-food-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2024</span>
                                <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                            <div class="single-food-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2024</span>
                                <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                            <div class="single-food-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2024</span>
                                <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="living-life-news">
                        <div class="section-title">
                            <h2>Living Life</h2>
                        </div>
                        <div class="single-north-america-news">
                            <img src="{{ asset('assets/img/6.jpg') }}" alt="image" />
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                    <li><i class="icofont-calendar"></i> March 22, 2024</li>
                                </ul>
                                <h3><a href="single-post-4.html">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                            </div>
                        </div>
                        <div class="north-america-inner-news">
                            <div class="single-north-america-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2024</span>
                                <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                            <div class="single-north-america-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2024</span>
                                <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                            <div class="single-north-america-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2024</span>
                                <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="all-news-ads">
                        <a href="post-category-3.html"><img src="{{ asset('assets/img/5-ads.png') }}" alt="image" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="more-news-area">
        <div class="container">
            <div class="more-news-inner">
                <div class="section-title">
                    <h2>More News</h2>
                </div>
                <div class="row">
                    <div class="more-news-slides owl-carousel owl-theme">
                        <div class="col-lg-12 col-md-12">
                            <div class="single-more-news">
                                <img src="{{ asset('assets/img/1.jpg') }}" alt="image" />
                                <div class="news-content">
                                    <ul>
                                        <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                        <li><i class="icofont-calendar"></i> March 22, 2024</li>
                                    </ul>
                                    <h3><a href="single-post-4.html">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                                </div>
                                <div class="tags bg-2"><a href="post-category-2.html">Sports</a></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="single-more-news">
                                <img src="{{ asset('assets/img/2.jpg') }}" alt="image" />
                                <div class="news-content">
                                    <ul>
                                        <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                        <li><i class="icofont-calendar"></i> March 22, 2024</li>
                                    </ul>
                                    <h3><a href="single-post-4.html">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                                </div>
                                <div class="tags bg-3"><a href="post-category-2.html">Sports</a></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="single-more-news">
                                <img src="{{ asset('assets/img/3.jpg') }}" alt="image" />
                                <div class="news-content">
                                    <ul>
                                        <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                        <li><i class="icofont-calendar"></i> March 22, 2024</li>
                                    </ul>
                                    <h3><a href="single-post-4.html">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                                </div>
                                <div class="tags bg-4"><a href="post-category-4.html">Sports</a></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="single-more-news">
                                <img src="{{ asset('assets/img/4.jpg') }}" alt="image" />
                                <div class="news-content">
                                    <ul>
                                        <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                        <li><i class="icofont-calendar"></i> March 22, 2024</li>
                                    </ul>
                                    <h3><a href="single-post-4.html">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                                </div>
                                <div class="tags bg-5"><a href="post-category-3.html">Sports</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @endsection
