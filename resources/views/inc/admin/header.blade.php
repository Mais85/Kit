            <header class="c-navbar u-mb-medium">
                <button class="c-sidebar-toggle js-sidebar-toggle">
                    <i class="feather icon-align-left"></i>
                </button>
                <h2 class="c-navbar__title">{{$title}}</h2>
                <div class="c-dropdown dropdown">
                    <div class="c-avatar c-avatar--xsmall dropdown-toggle" id="dropdownMenuAvatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                        <img class="c-avatar__img" src="https://secure.gravatar.com/avatar/e64c7d89f26bd1972efa854d13d7dd61?size=50" alt="Adam Sandler">
                    </div>

                    <div class="c-dropdown__menu has-arrow dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuAvatar">
                        <a class="c-dropdown__item dropdown-item" href="/">Sayta Bax</a>
                        <form method="post" action="/logout">
                            @csrf
                            <button class="c-dropdown__item dropdown-item logout_btn" name="btn" type="submit">Çıxış</button>
                        </form>
                    </div>
                </div>
            </header>
