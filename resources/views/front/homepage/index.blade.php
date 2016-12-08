@extends('front.layouts.homepage')

@section('content')
    <section class="hero is-success is-fullheight">
        <div class="hero-head">
            <nav-default></nav-default>
        </div>
        <div class="hero-body">
            <div class="container">
                <search></search>
            </div>
        </div>
        <div class="hero-footer">
            <div class="container has-text-centered">
                <span class="icon is-large">
                    <i class="fa fa-angle-double-down"></i>
                </span>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <promoted-offers></promoted-offers>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="content has-text-centered">
                <p>
                    <strong>Bulma</strong> by <a href="http://jgthms.com">Jeremy Thomas</a>. The source code is licensed
                    <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
                    is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC ANS 4.0</a>.
                </p>
                <p>
                    <a class="icon" href="https://github.com/jgthms/bulma">
                        <i class="fa fa-github"></i>
                    </a>
                </p>
            </div>
        </div>
    </footer>
@endsection
