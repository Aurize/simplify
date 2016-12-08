@extends('front.layouts.homepage')

@section('content')
    <div class="columns is-gapless is-4">
        <div class="column">
            <section class="hero is-primary is-fullheight">
                <div class="hero-head has-text-centered">
                    <h1 class="title">
                        Simplify
                    </h1>
                </div>
                <div class="hero-body has-text-centered">
                    <search></search>
                </div>
                <div class="hero-foot">
                    <nav class="tabs">
                        <div class="container">
                            <ul>
                                <li class="is-active"><a>O nas</a></li>
                                <li><a>Oferta biznesowa</a></li>
                                <li><a>Jak działa Simplify</a></li>
                                <li><a>Regulamin</a></li>
                                <li><a>Kontakt</a></li>
                            </ul>
                        </div>
                    </nav>
                    <nav class="tabs">
                        <div class="container">
                            <ul>
                                <li class="is-active"><a>Facebook</a></li>
                                <li><a>Twitter</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </section>
        </div>
        <div class="column is-8">
            <nav class="nav">
                <div class="nav-right nav-menu">
                    <a class="nav-item" href="#">
                        Dla Biznesu
                    </a>
                    <a class="nav-item" href="#">
                        Logowanie
                    </a>
                    <a class="nav-item" href="#">
                        Rejestracja
                    </a>
                </div>
            </nav>
        </div>
    </div>
@endsection
