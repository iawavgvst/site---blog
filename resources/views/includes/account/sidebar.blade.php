<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('account') }}" class="nav-link">
                <i class="nav-icon fas fa-solid fa-house-user"></i>
                <p>
                    Home
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('account.liked.index') }}" class="nav-link">
                <i class="nav-icon fas fa-solid fa-heart"></i>
                <p>
                    Liked posts
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('account.comment.index') }}" class="nav-link">
                <i class="nav-icon fas fa-solid fa-comment"></i>
                <p>
                    Comments
                </p>
                <span class="badge badge-info right"></span>
            </a>
        </li>
    </ul>
</nav>
