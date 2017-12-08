@if(Auth::check())
                <div class="col-lg-4">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        @if(Auth::user()->admin)
                        <li class="list-group-item">
                            <a href="{{ route('categories') }}">Categories</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('category.create') }}">Create new category</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('tags') }}">Tags</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('tag.create') }}">Create new tag</a>
                        </li>
                        
                            <li class="list-group-item">
                                <a href="{{ route('users') }}">Users</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('user.create') }}">Create new user</a>
                            </li> 
                        @endif
                        <li class="list-group-item">
                            <a href="{{ route('user.profile')}}">My profile</a>
                        </li>
                        @if(Auth::user()->admin)
                        <li class="list-group-item">
                            <a href="{{ route('post.create') }}">Create new post</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('posts') }}">All Posts</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('posts.trashed') }}">All Trashed Posts</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('settings') }}">Settings</a>
                        </li>
                        @endif
                    </ul>
                </div>
                @endif