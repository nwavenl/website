@extends('templates/template')

@section('description') "nwave blogs, leer elke week nieuwe dingen uit de online wereld." @endsection

@section('title') Blog @endsection

@section('bodyClass') blog @endsection

@section('content')

    <style>
        section.subhero {
            background-image: url("{{asset('/images/blog/subhero.jpg')}}");
        }

        @media (max-width: 1000px) {
            section.subhero {
                background-image: url("{{asset('/images/blog/subhero-mobile.jpg')}}");
            }
        }
    </style>

    <section class="subhero">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <div class="content" data-aos="fade-up">
                        <h1>Blog</h1>
                        <p>nwave blog, leer elke week nieuwe dingen uit de online wereld.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-posts">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog_item">
                        <div class="blog_item--header">
                            <img src="{{asset('/images/blog/services/hero-image.jpg')}}" alt="">
                        </div>
                        <div class="blog_item--body">
                            <h3>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi fuga pariatur praesentium recusandae? Accusamus alias aliquam consectetur, consequatur cumque ducimus enim excepturi fugiat itaque labore laudantium minus repellendus tempore voluptatum? </h3>
                            <div class="divider"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque dolorum enim incidunt
                                veritatis! Accusamus ad amet blanditiis consequatur, cum deserunt fugit laboriosam
                                libero omnis recusandae reiciendis tempora ut. Saepe, vero!</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

@endsection
